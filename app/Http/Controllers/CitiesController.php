<?php

namespace App\Http\Controllers;

use App\Services\CitiesService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;

class CitiesController extends Controller
{
    /**
     * @var CitiesService
     */
    public CitiesService $cities;

    /**
     * @param CitiesService $citiesService
     */
    public function __construct(CitiesService $citiesService)
    {
        $this->cities = $citiesService;
    }

    /**
     * Show ALl Cities
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $showAll = $this->cities->getPaginationCities(5);

        return view('cities', compact('showAll'));
    }
}
