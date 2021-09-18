<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductCodeRequest;
use App\Http\Requests\StoreProductCodeRequest;
use App\Http\Requests\UpdateProductCodeRequest;
use App\Models\ProductCode;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductCodeController extends Controller
{
    public function index()
    {

        abort_if(Gate::denies('product_code_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productCodes = ProductCode::paginate(1000);

        return view('admin.productCodes.index', compact('productCodes'));
    }

    public function create()
    {
        abort_if(Gate::denies('product_code_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.productCodes.create');
    }

    public function store(StoreProductCodeRequest $request)
    {
        $productCode = ProductCode::create($request->all());

        return redirect()->route('admin.product-codes.index');
    }

    public function edit(ProductCode $productCode)
    {
        abort_if(Gate::denies('product_code_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.productCodes.edit', compact('productCode'));
    }

    public function update(UpdateProductCodeRequest $request, ProductCode $productCode)
    {
        $productCode->update($request->all());

        return redirect()->route('admin.product-codes.index');
    }

    public function show(ProductCode $productCode)
    {
        abort_if(Gate::denies('product_code_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.productCodes.show', compact('productCode'));
    }

    public function destroy(ProductCode $productCode)
    {
        abort_if(Gate::denies('product_code_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productCode->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductCodeRequest $request)
    {
        ProductCode::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
