<?php
class player{
    public $name;
    public $speed;

    function setName($nameee){
        $this->name = $nameee;
    }

    function getName(){
        return $this->name;
    }

    function setSpeed($sp){
        $this->speed = $sp;
    }

    function getSpeed(){
        return "The speed of harry is: ".$this->speed;
    }
}

$player1 = new player();
$player1->setName("roshan");
echo $player1->getName();
echo "<br>";
$player1->setSpeed("5kmph");
echo $player1->getSpeed();
echo "<br>";

$player2 = new player();
$player2->setName("harry");
echo $player2->getName();
echo "<br>";
$player2->setSpeed('10kmph');
echo $player2->getSpeed();
?>