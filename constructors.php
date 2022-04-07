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

    function __construct($n, $a, $g, $add, $p, $h, $w){
        $this->details = "The age is: ".$a."The gender is: ".$g."The address is: ".$add."The Phone number is: ".$p."The height is: ".$h."And the weight is: ".$w."<br>";
        $this->name = "The name is: ".$n."<br>";
    }
}
$human1 = new human("Roshan", 19, "male", "manamaiju", 9869064636, "5ft", "60kg");
echo $human1->name;
echo $human1->details;

$human2 = new human("Harry", 19, "male", "India", 9869321331, "4.5ft", "65kg");
echo $human2->name;
echo $human2->details;
?>