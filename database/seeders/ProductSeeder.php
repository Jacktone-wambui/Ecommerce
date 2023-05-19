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
            'gallery'=>"https://m.media-amazon.com/images/I/8104evx11QL._SX385_.jpg"
            ],
            [
            'name'=>'Samsung A22',
            'price'=>'900',
            'description'=>"A smartphone with 8gb ram and nice security features",
            'category'=>"Mobilephones",
            'gallery'=>"https://www.smartprix.com/bytes/wp-content/uploads/2021/08/Samsung-A22-5G-review-with-pros-cons-0-scaled.jpg"
            ],
            [
            'name'=>'Sony bravia',
            'price'=>'1400',
            'description'=>"A smart tv with  much more features",
            'category'=>"tv",
            'gallery'=>"https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/66/93916/1.jpg?7996"
            ],
            [
            'name'=>'Samsung tv',
            'price'=>'1300',
            'description'=>"Fullt hd abdroid tv",
            'category'=>"tv",
            'gallery'=>"https://media.4rgos.it/i/Argos/9336397_R_Z001A"
            ],
            [
            'name'=>'LG fridge',
            'price'=>'4000',
            'description'=>"A smart fridge much more features",
            'category'=>"Fridges",
            'gallery'=>"https://cdnprod.mafretailproxy.com/sys-master-root/h69/he2/48830818320414/1700Wx1700H_157206_Main.jpg"
            ]
            
        ]);
    }
}
