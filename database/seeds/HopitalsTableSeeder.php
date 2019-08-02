<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HopitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hopitals')->insert([[
            'name' => 'HÔPITAL LAQUINTINIE DE DOUALA',
            'structure_id' => 1,
            'ville_id' => 2,
            'quartier_id' => 2,
            'phone' => 675902345,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ], 
        [
            'name' => 'HÔPITAL CENTRAL DE YAOUNDE',
            'structure_id' => 1,
            'ville_id' => 1,
            'quartier_id' => 1,
            'phone' => 654452289,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        ]); 
    }
}
