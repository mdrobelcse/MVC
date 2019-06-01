<?php

/*Dform class*/

 class Dform{
  

    public $currentvalue;
    public $values = array();
    public $errors = array(); 

    public function __construct(){}


    public function post($key){

       $this->values[$key] = trim($_POST[$key]);
       $this->currentvalue = $key;
       return $this;

    } 


    public function isEmpty(){
 
      if (empty($this->values[$this->currentvalue])){

          $this->errors[$this->currentvalue]['empty'] ="Field must not be empty..";
      }

          return $this;

    }


    public function isEmptycat(){
 
        if ($this->values[$this->currentvalue]==0){

            $this->errors[$this->currentvalue]['empty'] ="Field must not be empty..";
        }

        return $this;

    }

   

    public function length($min=0, $max){

         if(strlen($this->values[$this->currentvalue]) < $min OR strlen($this->values[$this->currentvalue]) > $max){

             $this->errors[$this->currentvalue]['length'] = "Should min ".$min." And max".$max.;

         }

         return $this;

     }

       
      
       public function submit(){

           if(empty($this->errors)){

               return true;

           }else{
                
               return false; 

           }

       }


       
   

}
?>