<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    public function run()
    {
        $data = $this->data();

        foreach ($data as $value)
        {
            Route::create([
                'city_slug_id' => $value['city_slug_id'],
                'destination_slug_id' => $value['destination_slug_id']
            ]);
        }
    }

    public function data()
    {
        return [
            ['city_slug_id' => 'RI', 'destination_slug_id' => 'NYC'],
            ['city_slug_id' => 'RI', 'destination_slug_id' => 'CI'],
            ['city_slug_id' => 'RI', 'destination_slug_id' => 'TO'],
            ['city_slug_id' => 'P', 'destination_slug_id' => 'TO'],
            ['city_slug_id' => 'P', 'destination_slug_id' => 'RO'],
            ['city_slug_id' => 'P', 'destination_slug_id' => 'M'],
            ['city_slug_id' => 'NYC', 'destination_slug_id' => 'CGY'],
            ['city_slug_id' => 'NYC', 'destination_slug_id' => 'K'],
            ['city_slug_id' => 'CGY', 'destination_slug_id' => 'CI'],
            ['city_slug_id' => 'CGY', 'destination_slug_id' => 'K'],
            ['city_slug_id' => 'CGY', 'destination_slug_id' => 'TO'],
            ['city_slug_id' => 'CI', 'destination_slug_id' => 'RI'],
            ['city_slug_id' => 'K', 'destination_slug_id' => 'M'],
            ['city_slug_id' => 'K', 'destination_slug_id' => 'RO'],
            ['city_slug_id' => 'K', 'destination_slug_id' => 'P'],
            ['city_slug_id' => 'M', 'destination_slug_id' => 'RO'],
            ['city_slug_id' => 'M', 'destination_slug_id' => 'TO'],
            ['city_slug_id' => 'RO', 'destination_slug_id' => 'M'],
            ['city_slug_id' => 'RO', 'destination_slug_id' => 'CGY'],
            ['city_slug_id' => 'TO', 'destination_slug_id' => 'NYC'],
        ];
    }
}
