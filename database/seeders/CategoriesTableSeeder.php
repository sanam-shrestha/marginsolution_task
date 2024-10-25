<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Category one',
                'created_at' => '2024-10-25 04:23:45',
                'updated_at' => '2024-10-25 04:23:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Category Two',
                'created_at' => '2024-10-25 04:23:58',
                'updated_at' => '2024-10-25 04:23:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Category Three',
                'created_at' => '2024-10-25 04:24:11',
                'updated_at' => '2024-10-25 04:24:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Category Four',
                'created_at' => '2024-10-25 04:25:13',
                'updated_at' => '2024-10-25 04:25:13',
            ),
        ));
        
        
    }
}