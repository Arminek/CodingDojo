<?php

declare(strict_types=1);

namespace Tests\App\Behat;

use App\Greetings\Doorkeeper;
use App\Greetings\Passerby;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

final class GreetingsContext implements Context
{
    private Passerby $passerby;
    private Doorkeeper $doorkeeper;

    /**
     * @Given I am a passerby with name :name
     */
    public function iAmAPasserbyWithName(string $name): void
    {
        $this->passerby = new Passerby($name);
    }

    /**
     * @Given there is a doorkeeper near the entrance
     */
    public function thereIsADoorkeeperNearTheEntrance(): void
    {
        $this->doorkeeper = new Doorkeeper();
    }

    /**
     * @When I just pass by the doorkeeper
     */
    public function iJustPassByTheDoorkeeper(): void
    {
        $this->passerby->passByDoorkeeper($this->doorkeeper);
    }

    /**
     * @When I say :greetings to the doorkeeper
     */
    public function iSayToTheDoorkeeper(string $greetings): void
    {
        $this->passerby->sayToDoorkeeper($greetings, $this->doorkeeper);
    }

    /**
     * @Then the doorkeeper will welcome me with words :words
     */
    public function theDoorkeeperWillWarmlyWelcomeMeWithWords(string $words): void
    {
        $expected = [$words];
        $actual = $this->passerby->heardWords();
        Assert::eq(
            $actual,
            $expected,
            sprintf("Actual are %s but expected are %s", implode(',', $actual), implode(',', $expected))
        );
    }

    /**
     * @Then the doorkeeper will welcome me with silence
     */
    public function theDoorkeeperWillWelcomeMeWithSilence(): void
    {
        Assert::isEmpty($this->passerby->heardWords());
    }
}
