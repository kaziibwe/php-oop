<?php
// class
class addnumbers
{
    var $num1;
    var $num2;

    public function addthem(){
        return ($this->num1*$this->num2);
    }

}

$add = new addnumbers(); //an object
$add->num1=5;  //properties
$add->num2=6; //properties

echo $add-> addthem();




