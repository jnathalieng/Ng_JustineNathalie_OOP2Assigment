<?php

namespace MyProject;

/* IceCream class extends Dessert */
class IceCream extends Dessert
{
    /* Describes the flavor of ice cream being prepared */
    public function prepare(): string
    {
        return "Preparing {$this->flavor} ice cream.";
    }

    /* Describes the size of ice cream being served */
    public function serve(): string
    {
        return "Serving {$this->size} {$this->flavor} ice cream.";
    }
}