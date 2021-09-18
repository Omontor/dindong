<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UnidCode;
class ClaveUnidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   $csvFile = fopen(base_path("/public/catalogs/claveunidad.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 200000, ",")) !== FALSE) {
            if (!$firstline) {
                UnidCode::create([
                    "name" => $data['1'],
                    "code" => $data['0']
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    
    }
}
