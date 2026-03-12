<?php

namespace MyProject;

/* Parent class for all desserts */

class Dessert
{
    public string $flavor;
    public string $size;
    public float $price;

    /* Creates the dessert object */
    public function __construct(string $flavor, string $size, float $price)
    {
        $this->flavor = $flavor;
        $this->size = $size;
        $this->price = $price;
    }

    /* Describes the dessert */
    public function describe(): string
    {
        return "This is {$this->flavor} ice cream. It is a {$this->size} size and costs $" . number_format($this->price, 2) . ".";
    }
}