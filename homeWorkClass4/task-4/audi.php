<?php
include 'car.php';

class audi extends car{

    private $color;
    private $seats;

    public function setColor($color){
      $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }

    public function setSeats($seats){
        $this->seats = $seats;
    }

    public function getSeats(){
        return $this->seats;
    }

}

$a = new audi();
$a->setBodyPart('BodyParts: Made in Japan');
echo $a->getBodyPart() . "<br>";
$a->setEngineStatus('EngineStatus: Very Good');
echo $a->getEngineStatus(). "<br>";

$a->setColor('Color: Royal Blue');
echo $a->getColor() . "<br>";
$a->setSeats('Seats: Master class');
echo $a->getSeats();



?>