<?php
/*
Load class

*/
  class Load{


   public function __construct(){}

    
   public function view($filename, $data = false){
 
        if($data==true){

        	extract($data);
        }
       include 'apps/views/'.$filename.'.php';
 
   } 

   public function model($modelname){

       include 'apps/models/'.$modelname.'.php';
       return new $modelname();

   }


   public function validation($validate){

       include 'apps/validation/'.$validate.'.php';
       return new $validate();

   }






 }

?>