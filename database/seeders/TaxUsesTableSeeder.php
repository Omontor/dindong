<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TaxUse;

class TaxUsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $csvFile = fopen(base_path("/public/catalogs/usoscfdi.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                TaxUse::create([
                    "name" => $data['1'],
                    "code" => $data['0']
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}