<?php
//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    echo "Pet Home";
//    $view = new View;
//    echo $view->render
//    ('views/fat-free.html');
});

//Run fat free
$f3->run();