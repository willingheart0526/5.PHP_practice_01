<?php

class Car
{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels()
    {
        $this->wheels = 10;
    }

    function CreateDoors()
    {
        $this->doors = 6;
    }
}


$bmw = new Car();
$truck = New Car();

$bmw->MoveWheels();
echo $bmw->wheels . "<br>";

echo $truck->wheels . "<br>";
$truck->CreateDoors();
echo $truck->doors;



?>