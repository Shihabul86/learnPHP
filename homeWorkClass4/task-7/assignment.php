<?php

class assignment{

    public $statement;

    public function __construct($n){
        $this->statement = $n;
        echo $this->statement . "<br>";
    }
//count number of word of the sentence

    public function wordCount(){
        return str_word_count($this->statement);
    }
//lowest number of word from the sentence

    public function shortestWord(){

        $arr = explode(" ", $this->statement);
        $result = " ";
        foreach($arr as $value){
            if(strlen($value) > strlen($result))
            $result = $value; 
        }
        return $result;
    }
//the "Application" word from the sentence and replace the word with "WEBSITE"

    public function wordReplace(){
        return str_replace("APPLICATION", "WEBSITE",$this->statement );
    }

}

$a = new assignment("ADVANCED WEB APPLICATION  DEVELOPMENT");
echo $a->wordCount() . "<br>";
echo $a->shortestWord() . "<br>";
echo $a->wordReplace();




?>