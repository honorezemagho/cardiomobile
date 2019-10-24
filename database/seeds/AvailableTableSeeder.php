<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvailableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('availables')->insert([[

            'datetime' => Carbon::now()->addDays(2)->addMinutes(20)->format('Y-m-d H:i:s'),
            'medecin_id' => 2,
            'quartier_id' => 3,
            'type_id' => 1,
            'speciality_id' => 2,
            'expires' => 0,
            'price' => 10000,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ], [
            'datetime' => Carbon::now()->addDays(4)->addMinutes(20)->format('Y-m-d H:i:s'),
            'medecin_id' => 2,
            'quartier_id' => 3,
            'type_id' => 1,
            'speciality_id' => 2,
            'expires' => 0,
            'price' => 12000,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
            [
                'datetime' => Carbon::now()->addDays(1)->addMinutes(20)->format('Y-m-d H:i:s'),
                'medecin_id' => 3,
                'quartier_id' => 3,
                'type_id' => 1,
                'speciality_id' => 1,
                'expires' => 0,
                'price' => 15000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'datetime' => Carbon::now()->addDays(3)->addMinutes(20)->format('Y-m-d H:i:s'),
                'medecin_id' => 3,
                'quartier_id' => 3,
                'type_id' => 1,
                'speciality_id' => 1,
                'expires' => 0,
                'price' => 12500,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
