<?php


class Car{
    public $EngineNo;
    public $Model;
    public $Owner;

    function __construct(...$properties){
        $this->EngineNo = $properties[0];
        $this->Model = $properties[1];
        $this->Owner = $properties[2];
    }

    function ShowInfo(){
        echo "Model: " . $this->Model ."<br>";
        echo "EngineNo: ". $this->EngineNo ."<br>";
        echo "Owner: ". $this->Owner ."<br><br>";
    }
}

$car1 = new Car("1213456", "BMW i8", "Someone");
$car1->ShowInfo();

$car2 = new Car("abcdef", "BMW i10", "Someone2");
$car2->ShowInfo();

?>