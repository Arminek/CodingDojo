<?php

declare(strict_types=1);

namespace Tests\App\Behat;

use App\Cyclist\Cyclist;
use App\Cyclist\CyclistRepository;
use App\Cyclist\MatchingService;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Webmozart\Assert\Assert;

final class CyclistContext implements Context
{
    private Cyclist $currentUser;
    private CyclistRepository $cyclistRepository;

    /**
     * @Given there is cyclist :name
     */
    public function thereIsCyclist(string $name): void
    {
        $cyclist = new Cyclist($name);
    }

    /**
     * @Given :name has favorite routes
     */
    public function hasFavoriteRoutes(string $name, TableNode $table): void
    {

    }

    /**
     * @Given he has favorite routes
     */
    public function heHasFavoriteRoutes(TableNode $table): void
    {

    }

    /**
     * @Then I get :cyclistName as proposition
     */
    public function iGetAsProposition(string $cyclistName)
    {
        $cyclistToFind = $this->cyclistRepository->getByName($cyclistName);
        $matchingService = new MatchingService();
        Assert::same($cyclistToFind, $matchingService->getPropositionFor($this->currentUser));
    }

    /**
     * @Given these routes are similar to each other in
     */
    public function theseRoutesAreSimilarToEachOtherIn(TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @Given I am :arg1
     */
    public function iAm($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I am looking for companion
     */
    public function iAmLookingForCompanion()
    {
        throw new PendingException();
    }

}
