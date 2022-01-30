<?php

namespace Database\Seeders;

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
        $product = new \App\Models\Product([
            'name' => 'Product #1',
            'detail' => 'Product #1 details',
            'price' => 'Product price#1',
            'img' => 'Product #1 img'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #2',
            'detail' => 'Product #2 details',
            'price' => 'Product price#2',
            'img' => 'Product #2 img'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #3',
            'detail' => 'Product #3 details',
            'price' => 'Product price#3',
            'img' => 'Product #3 img'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #4',
            'detail' => 'Product #4 details',
            'price' => 'Product price#4',
            'img' => 'Product #4 img'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #5',
            'detail' => 'Product #5 details',
            'price' => 'Product price5',
            'img' => 'Product #5 img'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #6',
            'detail' => 'Product #6 details',
            'price' => 'Product price#6',
            'img' => 'Product #6 img'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #7',
            'detail' => 'Product #7 details',
            'price' => 'Product price#7',
            'img' => 'Product #7 img'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #8',
            'detail' => 'Product #8 details',
            'price' => 'Product price#8',
            'img' => 'Product #8 img'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #9',
            'detail' => 'Product #9 details',
            'price' => 'Product price#9',
            'img' => 'Product #9 img'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #10',
            'detail' => 'Product #10 details',
            'price' => 'Product price#10',
            'img' => 'Product #10 img'
        ]);
        $product->save();
    }
}
