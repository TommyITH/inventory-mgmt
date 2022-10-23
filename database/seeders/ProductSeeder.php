<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "name"=>"Evos",
            "price"=>"16000",
        ]);
            
        Product::create([
            "name"=>"Mustang",
            "price"=>"20000",
        ]);
    }
}
