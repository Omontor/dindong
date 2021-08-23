<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRelatedVoucherRequest;
use App\Http\Requests\StoreRelatedVoucherRequest;
use App\Http\Requests\UpdateRelatedVoucherRequest;
use App\Models\RelatedVoucher;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RelatedVoucherController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('related_voucher_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $relatedVouchers = RelatedVoucher::all();

        return view('admin.relatedVouchers.index', compact('relatedVouchers'));
    }

    public function create()
    {
        abort_if(Gate::denies('related_voucher_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.relatedVouchers.create');
    }

    public function store(StoreRelatedVoucherRequest $request)
    {
        $relatedVoucher = RelatedVoucher::create($request->all());

        return redirect()->route('admin.related-vouchers.index');
    }

    public function edit(RelatedVoucher $relatedVoucher)
    {
        abort_if(Gate::denies('related_voucher_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.relatedVouchers.edit', compact('relatedVoucher'));
    }

    public function update(UpdateRelatedVoucherRequest $request, RelatedVoucher $relatedVoucher)
    {
        $relatedVoucher->update($request->all());

        return redirect()->route('admin.related-vouchers.index');
    }

    public function show(RelatedVoucher $relatedVoucher)
    {
        abort_if(Gate::denies('related_voucher_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.relatedVouchers.show', compact('relatedVoucher'));
    }

    public function destroy(RelatedVoucher $relatedVoucher)
    {
        abort_if(Gate::denies('related_voucher_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $relatedVoucher->delete();

        return back();
    }

    public function massDestroy(MassDestroyRelatedVoucherRequest $request)
    {
        RelatedVoucher::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
