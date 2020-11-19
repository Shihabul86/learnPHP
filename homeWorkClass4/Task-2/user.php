<?php

class user{
   public $key;
   
   public function getName(){
       return $this->key;
   }
   public function setName($key){
       $this->key = $key;
   }
}
$user = new user();
$user->setName('Alom Hossain');
echo $user->getName();








?>