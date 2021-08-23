<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPaypalRequest;
use App\Http\Requests\StorePaypalRequest;
use App\Http\Requests\UpdatePaypalRequest;
use App\Models\Paypal;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaypalController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('paypal_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paypals = Paypal::all();

        return view('frontend.paypals.index', compact('paypals'));
    }

    public function create()
    {
        abort_if(Gate::denies('paypal_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.paypals.create');
    }

    public function store(StorePaypalRequest $request)
    {
        $paypal = Paypal::create($request->all());

        return redirect()->route('frontend.paypals.index');
    }

    public function edit(Paypal $paypal)
    {
        abort_if(Gate::denies('paypal_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.paypals.edit', compact('paypal'));
    }

    public function update(UpdatePaypalRequest $request, Paypal $paypal)
    {
        $paypal->update($request->all());

        return redirect()->route('frontend.paypals.index');
    }

    public function show(Paypal $paypal)
    {
        abort_if(Gate::denies('paypal_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.paypals.show', compact('paypal'));
    }

    public function destroy(Paypal $paypal)
    {
        abort_if(Gate::denies('paypal_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paypal->delete();

        return back();
    }

    public function massDestroy(MassDestroyPaypalRequest $request)
    {
        Paypal::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
