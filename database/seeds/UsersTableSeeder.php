<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('users')->insert([[

                'name' => 'honore237',
                'role_id' => 1,
                'is_active' => 1,
                'medecin_id' => null,
                'email' => 'zankafred@gmail.com',
                'password' => bcrypt('07081999A'),
                'phone' => 675902345,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
              'name' => 'free',
              'role_id' => 2,
              'is_active' => 1,
              'medecin_id' => null,
              'email' => 'free@free.fr',
              'password' => bcrypt('07081999A'),
              'phone' => 675902365,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ],
              [
                  'name' => 'DJOMOU ARMEL',
                  'role_id' => 3,
                  'is_active' => 1,
                  'medecin_id' => 3,
                  'email' => 'armel@cardiomobile.com',
                  'password' => bcrypt('07081999A'),
                  'phone' => 673004266,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
              ],
              [
                  'name' => 'BEST FRANKLIN',
                  'role_id' => 4,
                  'is_active' => 1,
                  'medecin_id' => null,
                  'email' => 'something@free.fr',
                  'password' => bcrypt('07081999A'),
                  'phone' => 673004266,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
              ]
              ]);
    }
}
