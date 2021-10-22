<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('category')->insert(
            
        [
            [
                'category' => 'Mobiles',
                'description' => 'Andriod/IOs',
            
            ],
            [
                'category' => 'Fashion',
                'description' => 'Mens/Womens',
                
            ],
            [
                'category' => 'Electronics',
                'description' => 'Laptop/Desktop',
                    
            ],
            [
                'category' => 'Homes',
                'description' => 'kitchen/homedecor',
                
            ],
            [
                'category' => 'Sports',
                'description' => 'Sports items',
                
            ],
            [
                'category' => 'Furntiure',
                'description' => 'sofa/table',
                
            ],

        ]);
    }
}
