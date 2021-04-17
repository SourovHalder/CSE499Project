<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
              [ 'id' =>1, 'firstName'=>'sourov', 'lastName'=>'halder','mobile'=>'999999999','userName'=>'sourov123', 'email'=>'sourov@admin.com ', 'password'=>'1234sourov',
                'status' => 1

        ],
    ];
    DB::table('admins')->insert($adminRecords);

    }
}
