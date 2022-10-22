<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
                "name"=>"Johnny Cage",
                "address"=>"Yangon",
                "phone_number"=>"01641350",
            ]);
            
            Supplier::create([
                "name"=>"Jack",
                "address"=>"Yadanarbon",
                "phone_number"=>"01641352",
        ]);
    }
}
