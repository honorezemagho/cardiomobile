<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('prices')->insert([[

            'name' => 'domicile',
            'price' => 10000,
            'details' => 'Prix pour déplacement du Médecin et examens préliminaires',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ], [
            'name' => 'clinique',
            'price' => 15000,
            'details' => 'Prix pour consultation et examens préliminaires',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        ]);
    }
}
