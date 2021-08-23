<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMassiveMailRequest;
use App\Http\Requests\StoreMassiveMailRequest;
use App\Http\Requests\UpdateMassiveMailRequest;
use App\Models\MassiveMail;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MassiveMailController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('massive_mail_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $massiveMails = MassiveMail::with(['media'])->get();

        return view('admin.massiveMails.index', compact('massiveMails'));
    }

    public function create()
    {
        abort_if(Gate::denies('massive_mail_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.massiveMails.create');
    }

    public function store(StoreMassiveMailRequest $request)
    {
        $massiveMail = MassiveMail::create($request->all());

        if ($request->input('poster', false)) {
            $massiveMail->addMedia(storage_path('tmp/uploads/' . basename($request->input('poster'))))->toMediaCollection('poster');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $massiveMail->id]);
        }

        return redirect()->route('admin.massive-mails.index');
    }

    public function edit(MassiveMail $massiveMail)
    {
        abort_if(Gate::denies('massive_mail_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.massiveMails.edit', compact('massiveMail'));
    }

    public function update(UpdateMassiveMailRequest $request, MassiveMail $massiveMail)
    {
        $massiveMail->update($request->all());

        if ($request->input('poster', false)) {
            if (!$massiveMail->poster || $request->input('poster') !== $massiveMail->poster->file_name) {
                if ($massiveMail->poster) {
                    $massiveMail->poster->delete();
                }
                $massiveMail->addMedia(storage_path('tmp/uploads/' . basename($request->input('poster'))))->toMediaCollection('poster');
            }
        } elseif ($massiveMail->poster) {
            $massiveMail->poster->delete();
        }

        return redirect()->route('admin.massive-mails.index');
    }

    public function show(MassiveMail $massiveMail)
    {
        abort_if(Gate::denies('massive_mail_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.massiveMails.show', compact('massiveMail'));
    }

    public function destroy(MassiveMail $massiveMail)
    {
        abort_if(Gate::denies('massive_mail_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $massiveMail->delete();

        return back();
    }

    public function massDestroy(MassDestroyMassiveMailRequest $request)
    {
        MassiveMail::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('massive_mail_create') && Gate::denies('massive_mail_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new MassiveMail();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
