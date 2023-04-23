<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo Mobile',
            'price'=>'900',
            'description'=>"A smartphone with 4gb ram and nice camera",
            'category'=>"Mobilephones",
            'gallery'=>""
            ],
            [
            'name'=>'Samsung A22',
            'price'=>'900',
            'description'=>"A smartphone with 8gb ram and nice security features",
            'category'=>"Mobilephones",
            'gallery'=>""
            ],
            [
            'name'=>'Sony bravia',
            'price'=>'1400',
            'description'=>"A smart tv with  much more features",
            'category'=>"tv",
            'gallery'=>""
            ],
            [
            'name'=>'Samsung tv',
            'price'=>'1300',
            'description'=>"Fullt hd abdroid tv",
            'category'=>"tv",
            'gallery'=>""
            ],
            [
            'name'=>'LG fridge',
            'price'=>'4000',
            'description'=>"A smart fridge much more features",
            'category'=>"Fridges",
            'gallery'=>""
            ]
            
        ]);
    }
}
