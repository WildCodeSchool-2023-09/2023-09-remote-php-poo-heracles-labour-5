<?php

namespace App;

class Bush extends Tile
{
    protected string $image = 'bush.png';
    protected bool $crossable = false;

    public function isCrossable(Movable $movable)
    {
        if ($movable instanceof Hind) {
            return true;
        }
        return $this->crossable;
    }
}