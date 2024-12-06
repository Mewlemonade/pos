<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    public function run()
    {
        $foods = [
            [
                'name' => 'Nasi Goreng',
                'food_type' => 'Makanan Utama',
            ],
            [
                'name' => 'Sate Ayam',
                'food_type' => 'Makanan Penutup',
            ],
        ];

        foreach ($foods as $food) {
            Food::create($food);
        }
    }
}
