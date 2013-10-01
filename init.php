<?php
require 'flight/Flight.php';
foreach(glob('app/controllers/'.'*.php') as $ctrl){
    require_once $ctrl;
}
foreach(glob('plugin/'.'*.php') as $plugin){
    require_once $plugin;
}

// Flight::route('/', function(){
//     echo 'hello world!';
// });

Flight::set('flight.views.path', 'app/views');

Flight::start();
?>
