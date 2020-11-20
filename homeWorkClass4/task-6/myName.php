<?php
class myName{

    public $name;

    public function __construct($fullName){
        $this->name = $fullName;
        echo "Welcome!" ."<br>". $this->name;

}

}
$a = new myName("Sihabul Islam");


?>