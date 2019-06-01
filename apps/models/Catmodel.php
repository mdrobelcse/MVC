<?php

/*
Model class

*/

  class Catmodel extends Dmodel{

      
       public function __construct(){
                
              parent::__construct();
              
        }
       
        public function catlist($table){

            $sql ="select * from $table";
            return $this->db->select($sql);
             
             
       }

       public function catbyid($table, $id){

           $sql    ="select * from $table where id=:id";
           $data = array(":id"=>$id);
           return $this->db->select($sql, $data);

       }

        public function insertcat($table, $data){

            return $this->db->insert($table, $data);

       }


       public function catupdate($table, $data, $con){

          return $this->db->update($table, $data,$con);


       }


        public function catdeletebyid($table, $con){

          return $this->db->delete($table, $con);

       }











  }

?>