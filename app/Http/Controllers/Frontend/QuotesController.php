<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyQuoteRequest;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\Client;
use App\Models\Product;
use App\Models\Quote;
use App\Models\Tax;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class QuotesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('quote_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $quotes = Quote::with(['client', 'products', 'tax', 'created_by'])->get();

        $clients = Client::get();

        $products = Product::get();

        $taxes = Tax::get();

        $users = User::get();

        return view('frontend.quotes.index', compact('quotes', 'clients', 'products', 'taxes', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('quote_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clients = Client::pluck('rfc', 'id')->prepend(trans('global.pleaseSelect'), '');

        $products = Product::pluck('name', 'id');

        $taxes = Tax::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.quotes.create', compact('clients', 'products', 'taxes'));
    }

    public function store(StoreQuoteRequest $request)
    {
        $quote = Quote::create($request->all());
        $quote->products()->sync($request->input('products', []));
        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $quote->id]);
        }

        return redirect()->route('frontend.quotes.index');
    }

    public function edit(Quote $quote)
    {
        abort_if(Gate::denies('quote_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clients = Client::pluck('rfc', 'id')->prepend(trans('global.pleaseSelect'), '');

        $products = Product::pluck('name', 'id');

        $taxes = Tax::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $quote->load('client', 'products', 'tax', 'created_by');

        return view('frontend.quotes.edit', compact('clients', 'products', 'taxes', 'quote'));
    }

    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        $quote->update($request->all());
        $quote->products()->sync($request->input('products', []));

        return redirect()->route('frontend.quotes.index');
    }

    public function show(Quote $quote)
    {
        abort_if(Gate::denies('quote_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $quote->load('client', 'products', 'tax', 'created_by');

        return view('frontend.quotes.show', compact('quote'));
    }

    public function destroy(Quote $quote)
    {
        abort_if(Gate::denies('quote_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $quote->delete();

        return back();
    }

    public function massDestroy(MassDestroyQuoteRequest $request)
    {
        Quote::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('quote_create') && Gate::denies('quote_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Quote();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
