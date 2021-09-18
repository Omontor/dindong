<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

$methods = array(
            array('code'=>'PUE','name'=>'Pago en una sola exhibición'),
            array('code'=>'PPD','name'=>'Pago en parcialidades o diferido'),
        );

        DB::table('payment_methods')->insert($methods);
    }
    
}
