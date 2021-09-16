<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyClientRequest;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use App\Models\Country;
use App\Models\Municipality;
use App\Models\State;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class ClientController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('client_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clients = Client::with(['country', 'municipality', 'state', 'created_by'])->get();

        $countries = Country::get();

        $municipalities = Municipality::get();

        $states = State::get();

        $users = User::get();

        if(Auth::user()->userinfo->count() == 0){
            return redirect()->back();
        }
        else{

        return view('frontend.clients.index', compact('clients', 'countries', 'municipalities', 'states', 'users'));
         }
    }

    public function create()
    {
        abort_if(Gate::denies('client_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $municipalities = Municipality::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $states = State::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        if(Auth::user()->userinfo->count() == 0){
            return redirect()->back();
        }
        else{


        return view('frontend.clients.create', compact('countries', 'municipalities', 'states'));
        }
    }

    public function store(StoreClientRequest $request)
    {
        $client = Client::create($request->all());

        return redirect()->route('frontend.clients.index');
    }

    public function edit(Client $client)
    {
        abort_if(Gate::denies('client_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $municipalities = Municipality::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $states = State::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $client->load('country', 'municipality', 'state', 'created_by');

        return view('frontend.clients.edit', compact('countries', 'municipalities', 'states', 'client'));
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->all());

        return redirect()->route('frontend.clients.index');
    }

    public function show(Client $client)
    {
        abort_if(Gate::denies('client_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $client->load('country', 'municipality', 'state', 'created_by');

        return view('frontend.clients.show', compact('client'));
    }

    public function destroy(Client $client)
    {
        abort_if(Gate::denies('client_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $client->delete();

        return back();
    }

    public function massDestroy(MassDestroyClientRequest $request)
    {
        Client::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
