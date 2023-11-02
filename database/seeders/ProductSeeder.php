<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Smartphone', 'slug' => 'smartphone', 'stock' => 50, 'category_id' => 1],
            ['name' => 'Laptop', 'slug' => 'laptop', 'stock' => 20, 'category_id' => 1],
            ['name' => 'T-shirt', 'slug' => 't-shirt', 'stock' => 100, 'category_id' => 2],
            ['name' => 'Sofa', 'slug' => 'sofa', 'stock' => 10, 'category_id' => 3],
        ]);
    }
}
