<?php

namespace App\Services;

use App\Models\City;
use Illuminate\Database\Eloquent\Collection;

class CitiesService
{
    /**
     * Show All Cities
     *
     * @return Collection
     */
    public function showAll(): Collection
    {
        return City::all();
    }

    /**
     * @param $paginate
     * @return mixed
     */
    public function getPaginationCities($paginate): mixed
    {
        return City::select('id', 'title', 'city_slug_id')->paginate($paginate);
    }
}
