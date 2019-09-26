<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            VillesTableSeeder::class,
            QuartiersTableSeeder::class,
            StructureTableSeeder::class,
            HopitalsTableSeeder::class,
            MedecinsTableSeeder::class,
            // DisponibilityTableSeeder::class,
            AmbulancesTableSeeder::class,
            PricesTableSeeder::class,
            AvailableTableSeeder::class,
            SpecialityTableSeeder::class,
            MedecinTypeTableSeeder::class,
        ]);
    }
}
