<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    public function run()
    {
        $data = $this->data();

        foreach ($data as $value)
        {
            City::create([
                'city_slug_id' => $value['city_slug_id'],
                'title' => $value['title']
            ]);


        }
    }

    public function data()
    {
        return [
            ['city_slug_id' => 'CGY', 'title' => 'Calgary'],
            ['city_slug_id' => 'CI', 'title' => 'Chichen Itza'],
            ['city_slug_id' => 'K', 'title' => 'Kuala Lumpur'],
            ['city_slug_id' => 'M', 'title' => 'Moscow'],
            ['city_slug_id' => 'NYC', 'title' => 'New York City'],
            ['city_slug_id' => 'P', 'title' => 'Paris'],
            ['city_slug_id' => 'RI', 'title' => 'Rio de Janeiro'],
            ['city_slug_id' => 'RO', 'title' => 'Rome'],
            ['city_slug_id' => 'TO', 'title' => 'Toronto'],

        ];
    }
}
