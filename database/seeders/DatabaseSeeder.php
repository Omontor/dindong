<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            CountriesTableSeeder::class,
            StateSeeder::class,
            MunicipiosTableSeeder::class,
            FiscalRegimesTableSeeder::class,
            PaymentFormsTableSeeder::class,
            PaymentMethodsTableSeeder::class,
            TaxUsesTableSeeder::class,
            ProductoServicioTableSeeder::class,
            ClaveUnidadTableSeeder::class,
        ]);
    }
}
