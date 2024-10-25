<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Event First',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.',
                'date' => '2024-10-26',
                'location' => 'Location',
                'category_id' => 1,
                'created_at' => '2024-10-25 04:26:09',
                'updated_at' => '2024-10-25 04:26:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Event  Second',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.',
                'date' => '2024-10-16',
                'location' => 'Location',
                'category_id' => 4,
                'created_at' => '2024-10-25 04:28:34',
                'updated_at' => '2024-10-25 04:28:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Event Third',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.',
                'date' => '2024-10-24',
                'location' => 'Location Thimi',
                'category_id' => 4,
                'created_at' => '2024-10-25 04:32:48',
                'updated_at' => '2024-10-25 04:32:48',
            ),
        ));
        
        
    }
}