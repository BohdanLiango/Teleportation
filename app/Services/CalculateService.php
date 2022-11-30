<?php

namespace App\Services;

use Exception;

class CalculateService
{
    public RouteService $routes;

    public function __construct(RouteService $routeService)
    {
        $this->routes = $routeService;
    }

    public function calculateDestination($data): ?string
    {
        /**
         * If Leaving city === Arrive in, Display You are here
         */
        if ($data['leaving_from'] === $data['arrive_in']) {
            return 'You are here!';
        }

        /**
         * Search the best route to city
         */
        try {
            $graph = GraphService::create();

            foreach ($this->routes->getRoutes() as $route) {
                $graph->add($route->city_slug_id, $route->destination_slug_id, 1);
            }

            $route = $graph->search($data['leaving_from'], $data['arrive_in']);

            $time = (int)$graph->time($route);

            if ($data['home_city'] !== $data['arrive_in']) {
                $time++;
            }

            $route = implode(">", $route);

            if ($time > $data['time']) {
                return 'No route was found. Quickest route take:' . ' ' . $time . ' ' . 'hour, your route:'
                    . ' ' . $route;
            }
            return 'Success! a route was found! It take' . ' ' . $time . ' ' . 'hour, your route:'
                . ' ' . $route;
        } catch (Exception $e) {
            return 'No route was found';
        }

    }

}
