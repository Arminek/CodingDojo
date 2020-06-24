<?php

declare(strict_types=1);

namespace Tests\App\Behat;

use App\Cyclist\Cyclist;
use App\Cyclist\MatchingService;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Webmozart\Assert\Assert;

final class CyclistContext implements Context
{
    private Cyclist $currentUser;
    private array $cyclists = [];
    private ?Cyclist $match;

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
        $routes = [];
        foreach ($table as $row) {
            $routes[] = [
                'name' => $row['name'],
                'distance' => $row['distance']
            ];
        }

        $this->cyclists[$name] = new Cyclist($name, $routes);
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
        $cyclistToFind = $this->cyclists[$cyclistName];
        Assert::same($this->match, $cyclistToFind);
    }

    /**
     * @Given these routes are similar to each other in
     */
    public function theseRoutesAreSimilarToEachOtherIn(TableNode $table)
    {

    }

    /**
     * @Given I am :name
     */
    public function iAm(string $name)
    {
        $this->currentUser = $this->cyclists[$name];
    }

    /**
     * @When I am looking for companion
     */
    public function iAmLookingForCompanion()
    {
        $matchingService = new MatchingService($this->cyclists);

        $this->match = $matchingService->getPropositionFor($this->currentUser);
    }
}
