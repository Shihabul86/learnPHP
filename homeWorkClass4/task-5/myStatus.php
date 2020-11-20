<?php
include 'gorib.php';
class myStatus implements gorib{

    public function lowMoney(){
        echo "Who has no money is called Gorib."; 
    }

    public function homeLess(){
        echo "Who has no home is called homeless.";
    }



}
$a = new myStatus();
$a->lowMoney();
echo "<br>";
$a->homeLess();



?>