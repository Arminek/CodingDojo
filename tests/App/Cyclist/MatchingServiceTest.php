<?php

declare(strict_types=1);

namespace PhpUnit;

use App\Cyclist\Cyclist;
use App\Cyclist\MatchingService;
use PHPUnit\Framework\TestCase;

final class MatchingServiceTest extends TestCase
{
    public function it_can_match_cyclists_base_on_route_similiarity()
    {
        $service = new MatchingService([
            new Cyclist('Jerry', ['']),
            new Cyclist('Tom', [])
        ]);

        $service->getPropositionFor(new Cyclist('Jane', []));
    }
}
