<?php

namespace App;

abstract class Tile implements Mappable
{
    protected string $image;
    protected bool $crossable = true;

    public function __construct(
        protected int $x, 
        protected int $y
    ) {
    }

        /**
         * Get the value of x
         */ 
        public function getX()
        {
                return $this->x;
        }

        /**
         * Set the value of x
         *
         * @return  self
         */ 
        public function setX(int $x)
        {
                $this->x = $x;

                return $this;
        }

        /**
         * Get the value of y
         */ 
        public function getY()
        {
                return $this->y;
        }

        /**
         * Set the value of y
         *
         * @return  self
         */ 
        public function setY(int $y)
        {
                $this->y = $y;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage(): string
        {
                return 'assets/images/' . $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage(string $image)
        {
                $this->image = $image;

                return $this;
        }

    /**
     * Get the value of crossable
     */ 
    public function isCrossable(Movable $movable)
    {
        return $this->crossable;
    }

    /**
     * Set the value of crossable
     *
     * @return  self
     */ 
    public function setCrossable($crossable)
    {
        $this->crossable = $crossable;

        return $this;
    }
}