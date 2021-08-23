<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Http\Resources\Admin\QuoteResource;
use App\Models\Quote;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QuotesApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('quote_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new QuoteResource(Quote::with(['client', 'products', 'tax', 'created_by'])->get());
    }

    public function store(StoreQuoteRequest $request)
    {
        $quote = Quote::create($request->all());
        $quote->products()->sync($request->input('products', []));

        return (new QuoteResource($quote))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Quote $quote)
    {
        abort_if(Gate::denies('quote_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new QuoteResource($quote->load(['client', 'products', 'tax', 'created_by']));
    }

    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        $quote->update($request->all());
        $quote->products()->sync($request->input('products', []));

        return (new QuoteResource($quote))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Quote $quote)
    {
        abort_if(Gate::denies('quote_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $quote->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
