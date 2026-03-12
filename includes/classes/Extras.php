<?php

namespace MyProject;

/*Trait for adding something extra,like extra toppings */

trait Extras
{
    public function addExtra(string $extra): string
    {
        return "Extra added: {$extra}.";
    }
}