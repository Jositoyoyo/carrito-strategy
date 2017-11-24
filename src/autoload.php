<?php

function autoloader($class) {

   $filename = realpath(dirname(__FILE__)) . '/' . str_replace('\\', '/', $class) . '.php';
    //print $filename . "<br>";
    if (file_exists($filename)) {
        include_once($filename);
    } else {
        die('Error al cargar la clase : ' . $class . "<br>");
    }
}

spl_autoload_register('autoloader');

