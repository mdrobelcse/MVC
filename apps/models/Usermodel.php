<?php

/*
Usermodel class

*/

  class Usermodel extends Dmodel{

      
       public function __construct(){
                
              parent::__construct();
              
        }
       
        public function Userlist($tableuser){

            $sql ="select * from $tableuser";
            return $this->db->select($sql);
             
             
       }

        public function adduser($table, $data){

            return $this->db->insert($table, $data);

       }

       public function userdeletebyid($table, $con){

          return $this->db->delete($table, $con);

       }


       public function userbyid($table, $id){

           $sql    ="select * from $table where id=:id";
           $data = array(":id"=>$id);
           return $this->db->select($sql, $data);

       }



       public function userupdate($table, $data, $con){

          return $this->db->update($table, $data,$con);


       }


        










  }

?>