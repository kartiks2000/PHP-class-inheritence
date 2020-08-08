<?php

    class Car {

        var $wheels = 4;
        var $color = "blue";

    }

    class Plane extends Car{

        var $wheels = 10;
    }

    $x = new Plane();

    echo $x->wheels . "<br>";

    echo $x->color;

?>