<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PeopleSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Setsuna F',
                'birthdate' => '1990-01-15',
                'address' => 'Dinoyo Permai No 6 Kav 6',
                'education' => 'S1',
            ],
            [
                'name' => 'Terria Arde',
                'birthdate' => '1985-05-20',
                'address' => 'Jalan Husein Hamzah',
                'education' => 'SMA',
            ],
        ];

        foreach ($data as $item) {
            Person::create($item);
        }
    }
}
