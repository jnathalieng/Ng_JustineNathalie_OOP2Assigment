<?php

/* It loads class files automatically from the classes folder.*/

spl_autoload_register(function ($class) {

    // The path where the class files are located
    $path = "classes/" . $class . ".php";

    // To check if the file exists before loading
    if (file_exists($path)) {
        require $path;
    }
});

