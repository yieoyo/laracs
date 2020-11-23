<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'product name 11',
                'price'=>'200',
                'description'=>'product description 11',
                'category'=>'mobile',
                'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/01/Xiaomi-Mi-10-Pro-5G-1-500x500.jpg'
    
            ],
            [
                'name'=>'product name 2',
                'price'=>'200',
                'description'=>'product description 2',
                'category'=>'mobile',
                'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/01/Xiaomi-Mi-10-Pro-5G-1-500x500.jpg'
    
            ],
            [
                'name'=>'product name 3',
                'price'=>'200',
                'description'=>'product description 3',
                'category'=>'mobile',
                'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/01/Xiaomi-Mi-10-Pro-5G-1-500x500.jpg'
    
            ],
            [
                'name'=>'product name 4',
                'price'=>'200',
                'description'=>'product description 4',
                'category'=>'mobile',
                'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/01/Xiaomi-Mi-10-Pro-5G-1-500x500.jpg'
    
            ],
            [
                'name'=>'product name 5',
                'price'=>'200',
                'description'=>'product description 5',
                'category'=>'mobile',
                'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/01/Xiaomi-Mi-10-Pro-5G-1-500x500.jpg'
    
            ]
        ]);
    }
}
