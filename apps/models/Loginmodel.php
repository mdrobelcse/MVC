<?php

 
/*LoginModel*/

 

  class Loginmodel extends Dmodel{

      
       public function __construct(){
                
              parent::__construct();
              
        }

        public function usercontroll($table, $username, $password){

             $sql = "SELECT * FROM $table WHERE username=? AND password=?";
             return $this->db->affectedRow($sql, $username, $password);

        }


        
        public function getUserdata($table, $username, $password){

            $sql = "SELECT * FROM $table WHERE username=? AND password=?";
            return $this->db->selectUser($sql, $username, $password);
 
        }


}
?>