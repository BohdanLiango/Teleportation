<?php

namespace App\Http\Controllers;

use App\Services\RouteService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class RoutesController extends Controller
{
    /**
     * @var RouteService
     */
    public RouteService $routeService;

    /**
     * @param RouteService $routeService
     */
    public function __construct(RouteService $routeService)
    {
        $this->routeService = $routeService;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $routes = $this->routeService->getPaginationRoutes(10);
        return view('routes', compact('routes'));
    }
}
