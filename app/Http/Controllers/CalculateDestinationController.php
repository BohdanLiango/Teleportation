<?php

namespace App\Http\Controllers;

use App\Services\CalculateService;
use App\Services\CitiesService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CalculateDestinationController extends Controller
{
    public CitiesService $cities;
    public CalculateService $calculate;

    public function __construct(CitiesService $citiesService, CalculateService $calculateService)
    {
        $this->cities = $citiesService;
        $this->calculate = $calculateService;
    }

    /**
     * Index page
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return $this->show(NULL, NULL);
    }

    /**
     * Show function
     *
     * @param $info
     * @param $data
     * @return Application|Factory|View
     */
    private function show($info, $data)
    {
        $cities = $this->cities->showAll();
        return view('destination', compact('info', 'data', 'cities'));
    }


    /**
     * Calculate function with validation
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function calculate(Request $request)
    {
        $request->validate([
            'home_city' => 'required',
            'leaving_from' => 'required',
            'arrive_in' => 'required',
            'time' => 'required|numeric',
        ]);

        $data = [
            'home_city' => strtoupper($request->home_city),
            'leaving_from' => strtoupper($request->leaving_from),
            'arrive_in' => strtoupper($request->arrive_in),
            'time' => $request->time
        ];

        $info = $this->calculate->calculateDestination($data);

        return $this->show($info, $data);

    }
}
