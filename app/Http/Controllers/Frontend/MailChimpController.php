<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMailChimpRequest;
use App\Http\Requests\StoreMailChimpRequest;
use App\Http\Requests\UpdateMailChimpRequest;
use App\Models\MailChimp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MailChimpController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('mail_chimp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mailChimps = MailChimp::all();

        return view('frontend.mailChimps.index', compact('mailChimps'));
    }

    public function create()
    {
        abort_if(Gate::denies('mail_chimp_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.mailChimps.create');
    }

    public function store(StoreMailChimpRequest $request)
    {
        $mailChimp = MailChimp::create($request->all());

        return redirect()->route('frontend.mail-chimps.index');
    }

    public function edit(MailChimp $mailChimp)
    {
        abort_if(Gate::denies('mail_chimp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.mailChimps.edit', compact('mailChimp'));
    }

    public function update(UpdateMailChimpRequest $request, MailChimp $mailChimp)
    {
        $mailChimp->update($request->all());

        return redirect()->route('frontend.mail-chimps.index');
    }

    public function show(MailChimp $mailChimp)
    {
        abort_if(Gate::denies('mail_chimp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.mailChimps.show', compact('mailChimp'));
    }

    public function destroy(MailChimp $mailChimp)
    {
        abort_if(Gate::denies('mail_chimp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mailChimp->delete();

        return back();
    }

    public function massDestroy(MassDestroyMailChimpRequest $request)
    {
        MailChimp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
