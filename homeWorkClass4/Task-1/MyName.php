<?php

class MyName{

    public function getName($firstName, $lastName){
       return $firstName . " " . $lastName;    }

    
}
$a = new MyName();
echo $a->getName("Shihalul", "Islam"); 






?>