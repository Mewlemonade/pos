<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\City;

class LocationSeeder extends Seeder
{

    public function run()
    {
        $indonesia = Country::create(['name' => 'Indonesia']);
        City::create(['name' => 'Jakarta', 'country_id' => $indonesia->id]);
        City::create(['name' => 'Bandung', 'country_id' => $indonesia->id]);

        $malaysia = Country::create(['name' => 'Malaysia']);
        City::create(['name' => 'Kuala Lumpur', 'country_id' => $malaysia->id]);
        City::create(['name' => 'Penang', 'country_id' => $malaysia->id]);
    }
}
