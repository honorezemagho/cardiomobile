<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MedecinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //[]
        DB::table('medecins')->insert([[

            'name' => 'ALAIN NGANKOU',
            'ville_id' => 1,
            'quartier_id' => 1,
            'phone' => 673004266,
            'matricule' => 'Med1',
            'email' => 'honorezemagho@yahoo.fr',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ], 
        [

            'name' => 'blaise pascal',
            'ville_id' => 1,
            'quartier_id' => 2,
            'phone' => 655361892,
            'matricule' => 'Med2',
            'email' => 'honorezemagho@gmail.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [

            'name' => 'NDJOMOU ARMEL ',
            'ville_id' => 2,
            'quartier_id' => 3,
            'phone' => 673004966,
            'matricule' => 'Med3',
            'email' => 'zankafred@gmail.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [

            'name' => 'BEDI ARMAND',
            'ville_id' => 2,
            'quartier_id' => 4,
            'phone' => 655361882,
            'matricule' => 'Med4',
            'email' => 'zemagho48@gmail.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        ]);
    }
}
