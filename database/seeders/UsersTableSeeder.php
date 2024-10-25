<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'margintopsolution',
                'email' => 'margintopsolution@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$tnecOpgjSUdtuZVOihkCEuOGKsSQy42eU20nRLmTasPvxv2WjQoyC',
                'password_plain' => 'margintopsolution',
                'remember_token' => NULL,
                'created_at' => '2024-10-24 03:52:37',
                'updated_at' => '2024-10-24 03:52:37',
            ),
        ));
        
        
    }
}