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
        return $this->similarities[$this->indexFor($currentUserRoute, $otherRoute)] ?? 0.0;
    }

    public function addSimilarity(string $route1, string $route2, float $param): void
    {
        $this->similarities[$this->indexFor($route1, $route2)] = $param;
        $this->similarities[$this->indexFor($route2, $route1)] = $param;
    }

    private function indexFor(string $route1, string $route2): string
    {
        return trim($route1).trim($route2);
    }
}
