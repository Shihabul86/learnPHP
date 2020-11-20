<?php

class car{

    private $engineStatus;
    private $bodyPart;

    public function getEngineStatus(){
        return $this->engineStatus;
    }
    public function setEngineStatus($engineStatus){
       $this->engineStatus = $engineStatus;
    }

    public function getBodyPart(){
        return $this->bodyPart;
    }
    public function setBodyPart($bodyPart){
        $this->bodyPart = $bodyPart;
    }

}
/*==========*****
$a = new car();
$a->setBodyPart('Made in Japan');
echo $a->getBodyPart() . "<br>";
$a->setEngineStatus('Very Good');
echo $a->getEngineStatus();
*==========*****/

?>