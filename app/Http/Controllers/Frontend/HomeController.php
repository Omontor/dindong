<?php

namespace App\Http\Controllers\Frontend;


use Auth;
use Redirect;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use Carbon\Carbon;


class HomeController
{
    public function index()
    {
    // Instancia Laravel Facturama
$api = new \Strappberry\FacturamaLaravel\Classes\ApiFacturama();
// Obtener instancia de api web
$apiWeb = $api->web();


// Ejemplo tomado de la documenctación de la api de facturama
$datosAFacturar = [
  "Serie" => "R",
  "Currency" => "MXN",
  "ExpeditionPlace" => "78116",
  "PaymentConditions" => "CREDITO A SIETE DIAS",
  "Folio" => "100",
  "CfdiType" => "I",
  "PaymentForm" => "03",
  "PaymentMethod" => "PUE",
  "Receiver" => [
    "Rfc" => "XAXX010101000",
    "Name" => "Público en general",
    "CfdiUse" => "P01",
  ],
  "Items" => [
    [
      "ProductCode" => "10101504",
      "IdentificationNumber" => "EDL",
      "Description" => "Estudios de viabilidad",
      "Unit" => "NO APLICA",
      "UnitCode" => "MTS",
      "UnitPrice" => 50.0,
      "Quantity" => 2.0,
      "Subtotal" => 100.0,
      "Taxes" => [
        [
          "Total" => 16.0,
          "Name" => "IVA",
          "Base" => 100.0,
          "Rate" => 0.16,
          "IsRetention" => false,
        ],
      ],
      "Total" => 116.0,
    ],
    [
      "ProductCode" => "10101504",
      "IdentificationNumber" => "001",
      "Description" => "SERVICIO DE COLOCACION",
      "Unit" => "NO APLICA",
      "UnitCode" => "E49",
      "UnitPrice" => 100.0,
      "Quantity" => 15.0,
      "Subtotal" => 1500.0,
      "Discount" => 0.0,
      "Taxes" => [
        [
          "Total" => 240.0,
          "Name" => "IVA",
          "Base" => 1500.0,
          "Rate" => 0.16,
          "IsRetention" => false,
        ],
      ],
      "Total" => 1740.0,
    ],
  ],
];

// Solicitamos la generación de la factura y el timbrado
$resultado = $apiWeb->emitirCfdi($datosAFacturar);
dd($resultado);


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
