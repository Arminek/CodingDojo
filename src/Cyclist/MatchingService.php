<?php


namespace App\Cyclist;

class MatchingService
{
    /** @var Cyclist[] */
    private array $cyclists;
    /**
     * @var RouteSimilarityService
     */
    private $similarityService;

    public function __construct(array $cyclists, RouteSimilarityService $similarityService)
    {
        $this->cyclists = $cyclists;
        $this->similarityService = $similarityService;
    }

    public function getPropositionFor(Cyclist $currentUser): ?Cyclist
    {
        foreach ($this->cyclists as $possibleMatchCyclist) {
            $matchingRouteCounter = 0;
            foreach ($currentUser->routes() as $currentUserRoute) {
                foreach ($possibleMatchCyclist->routes() as $otherRoute) {
                    if ($this->similarityService->compute($currentUserRoute['name'], $otherRoute['name']) >= 0.8) $matchingRouteCounter++;
                    if ($matchingRouteCounter >= 2) return $possibleMatchCyclist;
                }
            }
        }

        return null;
    }
}
