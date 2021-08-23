<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyGoogleRequest;
use App\Http\Requests\StoreGoogleRequest;
use App\Http\Requests\UpdateGoogleRequest;
use App\Models\Google;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GoogleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('google_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $googles = Google::all();

        return view('frontend.googles.index', compact('googles'));
    }

    public function create()
    {
        abort_if(Gate::denies('google_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.googles.create');
    }

    public function store(StoreGoogleRequest $request)
    {
        $google = Google::create($request->all());

        return redirect()->route('frontend.googles.index');
    }

    public function edit(Google $google)
    {
        abort_if(Gate::denies('google_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.googles.edit', compact('google'));
    }

    public function update(UpdateGoogleRequest $request, Google $google)
    {
        $google->update($request->all());

        return redirect()->route('frontend.googles.index');
    }

    public function show(Google $google)
    {
        abort_if(Gate::denies('google_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.googles.show', compact('google'));
    }

    public function destroy(Google $google)
    {
        abort_if(Gate::denies('google_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $google->delete();

        return back();
    }

    public function massDestroy(MassDestroyGoogleRequest $request)
    {
        Google::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
