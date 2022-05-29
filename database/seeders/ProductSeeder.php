<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Maxinquaye',
                'price' => 150000,
                'quantity' => 100,
                'description' => 'Maxinquaye is the debut album by English rapper and producer Tricky',
                'image' => 'images/Maxinquaye.jpg',
                'category_id' => 3
            ],
            [
                'name' => 'Come on Over',
                'price' => 85000,
                'quantity' => 250,
                'description' => 'Come On Over is the third studio album recorded by Canadian country music singer Shania Twain',
                'image' => 'images/ComeonOver.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'London Zoo',
                'price' => 150000,
                'quantity' => 100,
                'description' => 'London Zoo is the third album by English musician Kevin Martin under his alias The Bug',
                'image' => 'images/LondonZoo.png',
                'category_id' => 2
            ],
            [
                'name' => 'Computer World',
                'price' => 85000,
                'quantity' => 250,
                'description' => 'Computer World is the eighth studio album by German electronic band Kraftwerk',
                'image' => 'images/ComputerWorld.jpg',
                'category_id' => 3
            ],
            [
                'name' => 'FabricLive.37',
                'price' => 150000,
                'quantity' => 100,
                'description' => 'FabricLive.37 is a 2007 album by the British dubstep producers Caspa and Rusko',
                'image' => 'images/FabricLive37.jpg',
                'category_id' => 2
            ],
            [
                'name' => 'Ropin The Wind',
                'price' => 85000,
                'quantity' => 250,
                'description' => 'Ropin the Wind is the third studio album by the American country music artist Garth Brooks',
                'image' => 'images/Ropinthewind.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Oneiric',
                'price' => 150000,
                'quantity' => 100,
                'description' => 'Oneiric is the debut album by electronic musician Boxcutter',
                'image' => 'images/Oneiric.jpg',
                'category_id' => 2
            ],
            [
                'name' => 'Fearless',
                'price' => 85000,
                'quantity' => 250,
                'description' => 'Fearless is the second studio album by American singer-songwriter Taylor Swift',
                'image' => 'images/Fearless.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'I Am What I Am',
                'price' => 166500,
                'quantity' => 9,
                'description' => 'I Am What I Am is an album by American country music artist George Jones released in 1980 on Epic Records label.',
                'image' => 'images/iam.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Why Not Me',
                'price' => 95000,
                'quantity' => 20,
                'description' => 'Why Not Me is the debut studio album by American country music duo The Judds.',
                'image' => 'images/tj.webp',
                'category_id' => 1
            ],
            [
                'name' => 'OMG',
                'price' => 132000,
                'quantity' => 10,
                'description' => 'O.M.G.! is the debut album of British dubstep musician Rusko.',
                'image' => 'images/omg.jpg',
                'category_id' => 2
            ],
            [
                'name' => '4x4=12',
                'price' => 25000,
                'quantity' => 50,
                'description' => '4×4=12 is the fifth studio album by Canadian electronic music producer Deadmau5',
                'image' => 'images/4x4.webp',
                'category_id' => 3
            ],
            [
                'name' => '4x4=12',
                'price' => 25000,
                'quantity' => 50,
                'description' => '4×4=12 is the fifth studio album by Canadian electronic music producer Deadmau5',
                'image' => 'images/4x4.webp',
                'category_id' => 3
            ]
        ];
        Product::insert($products);
    }
}
