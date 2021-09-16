<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyUserInfoRequest;
use App\Http\Requests\StoreUserInfoRequest;
use App\Http\Requests\UpdateUserInfoRequest;
use App\Models\Country;
use App\Models\Municipality;
use App\Models\State;
use App\Models\UserInfo;
use Auth;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class UserInfoController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('user_info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userInfos = UserInfo::with(['state', 'municipality', 'country', 'created_by', 'media'])->get();

        return view('frontend.userInfos.index', compact('userInfos'));
    }

    public function create()
    {

        if(Auth::user()->userinfo->count() == 0){

        abort_if(Gate::denies('user_info_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $states = State::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $municipalities = Municipality::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = Country::where('name', 'Mexico')->get();

        return view('frontend.profile', compact('states', 'municipalities', 'countries'));

        }
        else {

        $userInfo=Auth::user()->userinfo->first();

          abort_if(Gate::denies('user_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $states = State::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $municipalities = Municipality::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $userInfo->load('state', 'municipality', 'country', 'created_by');

        return view('frontend.userInfos.edit', compact('states', 'municipalities', 'countries', 'userInfo'));

        }
        
    }

    public function store(StoreUserInfoRequest $request)
    {
        $userInfo = UserInfo::create($request->all());

        if ($request->input('logo', false)) {
            $userInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($request->input('certificate', false)) {
            $userInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('certificate'))))->toMediaCollection('certificate');
        }

        if ($request->input('key_file', false)) {
            $userInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('key_file'))))->toMediaCollection('key_file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $userInfo->id]);
        }

        return redirect()->route('frontend.home');
    }

    public function edit(UserInfo $userInfo)
    {
        abort_if(Gate::denies('user_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $states = State::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $municipalities = Municipality::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $userInfo->load('state', 'municipality', 'country', 'created_by');

        return view('frontend.userInfos.edit', compact('states', 'municipalities', 'countries', 'userInfo'));
    }

    public function update(UpdateUserInfoRequest $request, UserInfo $userInfo)
    {
        $userInfo->update($request->all());

        if ($request->input('logo', false)) {
            if (!$userInfo->logo || $request->input('logo') !== $userInfo->logo->file_name) {
                if ($userInfo->logo) {
                    $userInfo->logo->delete();
                }
                $userInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($userInfo->logo) {
            $userInfo->logo->delete();
        }

        if ($request->input('certificate', false)) {
            if (!$userInfo->certificate || $request->input('certificate') !== $userInfo->certificate->file_name) {
                if ($userInfo->certificate) {
                    $userInfo->certificate->delete();
                }
                $userInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('certificate'))))->toMediaCollection('certificate');
            }
        } elseif ($userInfo->certificate) {
            $userInfo->certificate->delete();
        }

        if ($request->input('key_file', false)) {
            if (!$userInfo->key_file || $request->input('key_file') !== $userInfo->key_file->file_name) {
                if ($userInfo->key_file) {
                    $userInfo->key_file->delete();
                }
                $userInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('key_file'))))->toMediaCollection('key_file');
            }
        } elseif ($userInfo->key_file) {
            $userInfo->key_file->delete();
        }

        return redirect()->route('frontend.home');
    }

    public function show(UserInfo $userInfo)
    {
        abort_if(Gate::denies('user_info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userInfo->load('state', 'municipality', 'country', 'created_by');

        return view('frontend.userInfos.show', compact('userInfo'));
    }

    public function destroy(UserInfo $userInfo)
    {
        abort_if(Gate::denies('user_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userInfo->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserInfoRequest $request)
    {
        UserInfo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('user_info_create') && Gate::denies('user_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new UserInfo();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
