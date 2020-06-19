<?php

declare(strict_types=1);

namespace App\Greetings;

final class Passerby
{
    /** @var string[] */
    private array $heardWords = [];
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayToDoorkeeper(string $words, Doorkeeper $doorkeeper): void
    {
        $doorkeeper->hearFromPasserby($words, $this);
    }

    public function passByDoorkeeper(Doorkeeper $doorkeeper): void
    {
        $doorkeeper->passedByPasserby($this);
    }

    public function hear(string $words): void
    {
        $this->heardWords[] = $words;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function heardWords(): array
    {
        return $this->heardWords;
    }
}
