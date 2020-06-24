<?php

namespace App\Cyclist;

class RouteSimilarityService
{
    /**
     * @var array
     */
    private array $similarities;

    public function compute($currentUserRoute, $otherRoute): float
    {
        return 0.0;
    }

    public function addSimilarity($row, $row1, float $param)
    {
        $this->similarities[]= [$row, $row1, $param];
    }
}
