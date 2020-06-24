<?php

declare(strict_types=1);

namespace App\Cyclist;

final class Cyclist
{
    private string $name;

    public function __construct(string $name, array $routes = [])
    {
        $this->name = $name;
    }
}
