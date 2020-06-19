<?php

declare(strict_types=1);

namespace App\Greetings;

final class Doorkeeper
{
    /** @var string[] */
    private array $heardWords = [];

    public function hearFromPasserby(string $words, Passerby $passerby): void
    {
        $this->heardWords[] = $words;
        $this->reply($words, $passerby);
    }

    public function sayToPasserby(string $words, Passerby $passerby)
    {
        $passerby->hear($words);
    }

    public function passedByPasserby(Passerby $passerby): void
    {
        $this->sayToPasserby("Good morning", $passerby);
    }

    private function reply(string $words, Passerby $passerby): void
    {
        switch ($words) {
            case "Good morning, Jack":
                $this->sayToPasserby(sprintf("Hello %s, have a nice day!", $passerby->name()), $passerby);
                break;
        }
    }

    public function heardWords(): array
    {
        return $this->heardWords;
    }
}
