<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'src/images/sp3.png', // 'src/images/sp3.png'  // to make image appear // <img src="{{ $product->imagePath }}"
            'title' => 'Harry Potter',
            'description' => 'Yada! Yada! Yada!',
            'price' => 12 
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'src/images/sp3.png',
            'title' => 'Game of Thrones',
            'description' => 'Yada! Yada! Yada!',
            'price' => 10 

        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'src/images/sp3.png',
            'title' => 'Things Fall Apart',
            'description' => 'Yada! Yada! Yada!',
            'price' => 15

        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'src/images/sp3.png',
            'title' => 'When you are mine',
            'description' => 'Yada! Yada! Yada!',
            'price' => 8 

        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'src/images/sp3.png',
            'title' => 'Rich Dad Poor Dad',
            'description' => 'Yada! Yada! Yada!',
            'price' => 20

        ]);
        $product->save();

        //$product = new \App\Product();
        // $product->title = 'Harry Potter';
        // $product->save();
    }
}
