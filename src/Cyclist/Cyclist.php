<?php

declare(strict_types=1);

namespace App\Cyclist;

final class Cyclist
{
    private string $name;

    private array $routes;

    public function __construct(string $name, array $routes = [])
    {
        $this->name = $name;
        $this->routes = $routes;
    }

    public function routes(): array
    {
        return $this->routes;
    }
}
