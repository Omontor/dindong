<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FiscalRegimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$registros = array(
            array('code'=>'601','name'=>'General de Ley Personas Morales'),
            array('code'=>'603','name'=>'Personas Morales con Fines no Lucrativos'),
            array('code'=>'605','name'=>'Sueldos y Salarios e Ingresos Asimilados a Salarios'),
            array('code'=>'606','name'=>'Arrendamiento'),
            array('code'=>'607','name'=>'Régimen de Enajenación o Adquisición de Bienes'),
            array('code'=>'608','name'=>'Demás ingresos'),
            array('code'=>'609','name'=>'Consolidación'),
            array('code'=>'610','name'=>'Residentes en el Extranjero sin Establecimiento Permanente en México'),
            array('code'=>'611','name'=>'Ingresos por Dividendos (socios y accionistas)'),
            array('code'=>'612','name'=>'Personas Físicas con Actividades Empresariales y Profesionales'),
            array('code'=>'614','name'=>'Ingresos por intereses'),
            array('code'=>'615','name'=>'Régimen de los ingresos por obtención de premios'),
            array('code'=>'616','name'=>'Sin obligaciones fiscales'),
            array('code'=>'620','name'=>'Sociedades Cooperativas de Producción que optan por diferir sus ingresos'),
            array('code'=>'621','name'=>'Incorporación Fiscal'),
            array('code'=>'622','name'=>'Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras'),
            array('code'=>'623','name'=>'Opcional para Grupos de Sociedades'),
            array('code'=>'624','name'=>'Coordinados'),
            array('code'=>'628','name'=>'Hidrocarburos'),
            array('code'=>'629','name'=>'De los Regímenes Fiscales Preferentes y de las Empresas Multinacionales'),
            array('code'=>'630','name'=>'Enajenación de acciones en bolsa de valores'),
        );

        DB::table('fiscal_regimes')->insert($registros);
    }
}

