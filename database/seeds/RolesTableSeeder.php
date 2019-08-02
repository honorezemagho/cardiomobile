<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('roles')->insert([
        [
                 'name' => 'Administrateur',
                 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
                'name' => 'Gestionnaire',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
                     'name' => 'Medecins',
                     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
                     'name' => 'Particuliers',
                     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        ]
        );
    }
}
