<?php

namespace Tests\App\Cyclist;

use App\Cyclist\RouteSimilarityService;
use PHPUnit\Framework\TestCase;

class RouteSimilarityServiceTest extends TestCase
{

    public function testCompute()
    {
        $similarityService = new RouteSimilarityService();
        $similarityService->addSimilarity('Fort No', 'West', 1.1);

        $this->assertEquals(1.1, $similarityService->compute('Fort No', 'West'));
    }
}
