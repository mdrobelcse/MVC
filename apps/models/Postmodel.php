<?php

/*
Model class

*/

  class Postmodel extends Dmodel{

      
       public function __construct(){
                
              parent::__construct();
              
        }

        public function postlist($table){
            
            $sql    ="select * from $table order by id asc limit 3";
            return $this->db->select($sql);
             
       }

        public function allpost($tablepost){

            $sql    ="select * from $tablepost order by id desc";
            return $this->db->select($sql);


        }

        public function postbyid($tablepost, $id){

            $sql    ="select * from $tablepost where id=$id";
            return $this->db->select($sql);


        }


        public function posbyid($tablepost, $tablecat, $id){

           $sql="SELECT $tablepost.* ,$tablecat.name FROM $tablepost
           INNER JOIN $tablecat ON $tablepost.cat=$tablecat.id 
           WHERE $tablepost.id=$id;

           ";
           return $this->db->select($sql);

       }


       public function posbycat($tablepost, $tablecat, $id){

             $sql="SELECT $tablepost.* ,$tablecat.name FROM $tablepost
             INNER JOIN $tablecat ON $tablepost.cat=$tablecat.id 
             WHERE $tablecat.id=$id;

           ";

           return $this->db->select($sql);
          
       }


        public function latestpost($tablepost){
 
            $sql    ="select * from $tablepost order by id desc limit 7";
            return $this->db->select($sql);
 
       }


        public function postbysearch($tablepost, $keyword, $cat){
             
              // if(empty($keyword) && $cat==0){

              //       header("Location:".BASE_URL."/Index/home");

              // } 

                   if(isset($keyword) && !empty($keyword)){

                  $sql ="SELECT * FROM $tablepost WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%'";
                   }else if(isset($cat)){

                       $sql ="SELECT * FROM $tablepost WHERE cat='$cat'"; 
                   }
                 
                 return $this->db->select($sql);
   
          }  
 

         public function insertPost($tablepost, $data){
        
             return $this->db->insert($tablepost, $data);

          }

          public function updatePost($tablepost, $data, $con){

             return $this->db->update($table, $data,$con);


         }


         public function deletepostbyid($tablepost, $con){

              return $this->db->delete($tablepost, $con);

         }

       
       









  }

?>