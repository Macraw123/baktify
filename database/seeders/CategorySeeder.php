<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Country'],
            ['name' => 'Dubstep'],
            ['name' => 'Electro']
        ];

        Category::insert($categories);
    }
}
