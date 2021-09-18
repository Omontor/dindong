<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentForm;

class PaymentFormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        $csvFile = fopen(base_path("/public/catalogs/formasdepago.csv"), "r");
  
        $firstline = false;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                PaymentForm::create([
                    "name" => $data['1'],
                    "code" => $data['0']
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
