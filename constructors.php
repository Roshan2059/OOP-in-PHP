<?php
class human{
    public $name;
    public $age;
    public $gender;
    public $address;
    public $phone;
    public $height;
    public $weight;
    public $details;

    function __construct($n, $a, $g, $a, $p, $h, $w){
        $this->details = "The name of this person is: ".$n."<br>"."The age is: ".$a."The gender is: ".$g;  
    }
    
}
$human1 = new human();
?>