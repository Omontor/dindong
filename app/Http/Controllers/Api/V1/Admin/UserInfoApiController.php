<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreUserInfoRequest;
use App\Http\Requests\UpdateUserInfoRequest;
use App\Http\Resources\Admin\UserInfoResource;
use App\Models\UserInfo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserInfoApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('user_info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UserInfoResource(UserInfo::with(['state', 'municipality', 'country', 'created_by'])->get());
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

        return (new UserInfoResource($userInfo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(UserInfo $userInfo)
    {
        abort_if(Gate::denies('user_info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UserInfoResource($userInfo->load(['state', 'municipality', 'country', 'created_by']));
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

        return (new UserInfoResource($userInfo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(UserInfo $userInfo)
    {
        abort_if(Gate::denies('user_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userInfo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
