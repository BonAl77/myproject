<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class CategorySeeder extends Seeder  
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Торты',
                'preview' => '\public\img\торт.jpeg'
                
             

            ],

            [
                'name' => 'Национальная кухня',
                'preview' => '\public\img\самса.jpg'

            ],

            [
                'name' => 'Печенье',
                
                'preview' => '\public\img\печенье.jpeg'
            ]
        ]);
    }
}