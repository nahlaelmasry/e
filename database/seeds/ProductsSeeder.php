<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           'name' => 'Suit',
           'photo' => '/img/p1.jpg',
           'price' => 983.88
        ]);
 
        DB::table('products')->insert([
            'name' => 'Blazer',
            'photo' => '/img/p2.jpg',
            'price' => 650.00
        ]);
 
        DB::table('products')->insert([
            'name' => 'T-shirt',
            'photo' => '/img/p3.jpg',
            'price' => 375.00
        ]);
 
        DB::table('products')->insert([
            'name' => 'Cutting Pant',
            'photo' => '/img/p4.png',
            'price' => 259.99
        ]);
 
        DB::table('products')->insert([
            'name' => 'Jacket',
            'photo' => '/img/p5.jpg',
            'price' => 768.00
        ]);
 
        DB::table('products')->insert([
            'name' => 'Wool Jacket',
            'photo' => '/img/p6.jpg',
            'price' => 829.99
        ]);



    }
}
