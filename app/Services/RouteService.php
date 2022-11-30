<?php

namespace App\Services;

use App\Models\Route;
use Illuminate\Database\Eloquent\Collection;

class RouteService
{
    /**
     * @return Collection
     */
    public function getRoutes()
    {
        return Route::all();
    }

    /**
     * @param $paginate
     * @return mixed
     */
    public function getPaginationRoutes($paginate): mixed
    {
        return Route::select('id', 'city_slug_id', 'destination_slug_id')->paginate($paginate);
    }
}
