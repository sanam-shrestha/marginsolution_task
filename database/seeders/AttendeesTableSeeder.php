<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendees')->delete();
        
        \DB::table('attendees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Attendee First',
                'email' => 'margintopsolution@gmail.com',
                'event_id' => 1,
                'created_at' => '2024-10-25 04:31:18',
                'updated_at' => '2024-10-25 04:31:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Attendee Second',
                'email' => 'admin@gmail.com',
                'event_id' => 1,
                'created_at' => '2024-10-25 04:31:48',
                'updated_at' => '2024-10-25 04:31:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Attendee Third',
                'email' => 'margin@gmail.com',
                'event_id' => 2,
                'created_at' => '2024-10-25 04:32:11',
                'updated_at' => '2024-10-25 04:32:11',
            ),
        ));
        
        
    }
}