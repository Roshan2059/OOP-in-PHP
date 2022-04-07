<?php
class player{
    public $name;
    public $speed;
    public $running = false;

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return "player1 name is: ".$this->name;
    }

    function setSpeed($sp){
        $this->speed = $sp;
    }

    function getSpeed(){
        return "The speed of harry is: ".$this->speed;
    }

    function run(){
        $this->running = true;
    }

    function stopRun(){
        $this->running = false;
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
echo "<br>";
?>