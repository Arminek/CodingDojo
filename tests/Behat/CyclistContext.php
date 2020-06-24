<?php

declare(strict_types=1);

namespace Tests\App\Behat;

use App\Cyclist\Cyclist;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;

final class CyclistContext implements Context
{
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
}
