<?php

/*
Uimodel class

*/

  class Uimodel extends Dmodel{

      
       public function __construct(){
                
              parent::__construct();
              
        }

        public function getcolor($tableui){

            $sql ="select * from $table";
            return $this->db->select($sql);
             

       }

        public function updatebackground($table, $data, $con){

            return $this->db->update($table, $data,$con);


       }


      







}
?>        