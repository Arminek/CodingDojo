<?php


namespace App\Cyclist;

class MatchingService
{
    private array $cyclists;

    public function __construct(array $cyclists)
    {
        $this->cyclists = $cyclists;
    }

    public function getPropositionFor(Cyclist $currentUser): ?Cyclist
    {
        $userRoutes = $currentUser->routes();

        return null;
    }
}
