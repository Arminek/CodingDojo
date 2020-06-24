<?php


namespace App\Cyclist;


class CyclistRepository
{

    public function getByName(string $cyclistName): Cyclist
    {
        return new Cyclist('Joe');
    }
}