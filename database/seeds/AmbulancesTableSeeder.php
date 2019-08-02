<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AmbulancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ambulances')->insert([[
            'name' => 'FLESH',
            'hopital_id' => 1,
            'ville_id' => 1,
            'quartier_id' => 2,
            'phone' => 675902345,
            'matricule' => 'Amb1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ], 
        [
            'name' => 'REMOTE',
            'hopital_id' => 2,
            'ville_id' => 2,
            'quartier_id' => 4,
            'phone' => 675902345,
            'matricule' => 'Amb2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        ]); 
    }
}
