<?php

namespace App\Http\Controllers\Frontend;


use Auth;
use Redirect;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Facturama;

class HomeController
{
    public function index()
    {
 

$facturama = new Facturama\Client('pruebas', 'pruebas2011');

$params = [
    'ExpeditionPlace' => '12345',
    //'serie' => '',
    'Folio' => '100',
    'Currency' => 'MXN',
    'PaymentConditions' => 'CREDITO A SIETE DIAS',
    'CfdiType' => 'I',
    'PaymentForm' => '03',
    'PaymentMethod' => 'PUE',
    'Receiver' => [
           'Rfc' => 'XAXX010101000',
           'Name' => 'RADIAL SOFTWARE SOLUTIONS',
           'CfdiUse' => 'P01',
         ],
    'Items' => [
       [
            'ProductCode' => '10101504',
            'IdentificationNumber' => 'EDL',
            'Description' => 'Estudios de viabilidad',
            'Unit' => 'NO APLICA',
            'UnitCode' => 'MTS',
            'UnitPrice' => 50.0,
            'Quantity' => 2.0,
            'Subtotal' => 100.0,

            'Taxes' => [
               [
                   'Total' => 16.0,
                   'Name' => 'IVA',
                   'Base' => 100.0,
                   'Rate' => 0.16,
                   'IsRetention' => false,
               ],
            ],
            'Total' => 116.0,
        ],
    ],
];

$result = $facturama->post('2/cfdis', $params);

printf('<pre>%s<pre>', var_export($result, true));
        /*
        if(Auth::user()->userinfo->count() == 0){
            return redirect()->route('frontend.perfil.index'); 
        }
        else{

           return view ('frontend.home'); 
        }
        */
    }
}
