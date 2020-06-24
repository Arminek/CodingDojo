<?php

namespace App\Cyclist;

class RouteSimilarityService
{
    /**
     * @var array
     */
    private array $similarities;

    public function compute(string $currentUserRoute, string $otherRoute): float
    {
        return 0.0;
    }

    public function addSimilarity(string $route1, string $route2, float $param): void
    {
        $this->similarities[trim($route1).trim($route2)] = $param;
        $this->similarities[trim($route2).trim($route1)] = $param;
    }
}
