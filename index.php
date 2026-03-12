<?php

/* It loads class files automatically from the classes folder.*/

spl_autoload_register(function ($class) {

    // The path where the class files are located
    $path = "classes/" . $class . ".php";

    // To check if the file exists before loading
    if (!file_exists($path)) {
        
        // checks the flavors folder
        $path = "classes/flavors/" . $class . ".php";
    }

    if (file_exists($path)) {
        require $path;
    }
});

?> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Ice Cream OOP</title> 
    </head> 
    <body> 
        <?php 
        
        /* Created ice cream objects here. Each one represents a different flavor */ 
        $chocolate = new ChocolateIceCream("Chocolate", "Medium", 4.50); 
        $vanilla = new VanillaIceCream("Vanilla", "Small", 3.99); 
        $strawberry = new StrawberryIceCream("Strawberry", "Large", 5.25); 
        $cookies = new CookiesAndCreamIceCream("Cookies and Cream", "Medium", 4.75); 
        
        /* Calls the methods from the classes */ 
        echo $chocolate->prepare() . "<br>"; 
        echo $chocolate->serve() . "<br>"; 
        echo $chocolate->describe() . "<br><br>"; 

        echo $vanilla->prepare() . "<br>"; 
        echo $vanilla->serve() . "<br>"; 
        echo $vanilla->describe() . "<br><br>"; 

        echo $strawberry->prepare() . "<br>"; 
        echo $strawberry->serve() . "<br>"; 
        echo $strawberry->describe() . "<br><br>"; 
        
        echo $cookies->prepare() . "<br>"; 
        echo $cookies->serve() . "<br>"; 
        echo $cookies->describe() . "<br>"; 
        
        ?> 
        </body> 
        </html>