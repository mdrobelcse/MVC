<?php
/*
 Catagory controller
*/
 
 class Catagory extends Dcontroller{

   
      public function __construct(){

          parent::__construct();

      }


      public function catagory(){
          
          $data =array();
          $table ="tbl_catagory";
          $catmodel = $this->load->model("Catmodel");
          $data['cat'] = $catmodel->catlist($table);
          $this->load->view("catagory", $data);

      }


      public function catbyid(){
          
          $data =array();
          $table ="tbl_catagory";
          $id=1;
          $catmodel = $this->load->model("Catmodel");
          $data['catbyid'] = $catmodel->catbyid($table, $id);
          $this->load->view("catbyid", $data);

      }

       public function addcatagory(){

           $this->load->view("addcat");

      }

      public function insertcatagory(){

          $table ="tbl_catagory";

          $name  = $_GET['name'];
          $title = $_GET['title'];

          $data =array(

               'name' => $name,
               'title'=> $title
               

            );

          $catmodel = $this->load->model("Catmodel");
          $result = $catmodel->insertcat($table, $data);
          $mdata=array();

          if($result==1){

               $mdata['msg'] ="Catagory added successfully...";  

          }else{

              $mdata['msg'] ="Catagory not added !!!.";
          }

          $this->load->view("addcat",$mdata);

      }

     public function updatecatagory(){
           
          $data =array();
          $table ="tbl_catagory";
          $id=5;
          $catmodel = $this->load->model("Catmodel");
          $data['catbyid'] = $catmodel->catbyid($table, $id);

          $this->load->view("updatecat", $data);

      }

      public function catupdate(){

           $table    ="tbl_catagory";
           
           $id       = $_POST['id']; 
           $catname  = $_POST['catname'];   
           $title    = $_POST['title'];

           $con ="id=$id";
           $data = array(

                'name'=>$catname,
                'title'=>$title

            );
        $catmodel = $this->load->model("Catmodel");
        $result = $catmodel->catupdate($table, $data, $con);

        $mdata=array();

          if($result==1){

               $mdata['msg'] ="Catagory updated successfully...";  

          }else{

              $mdata['msg'] ="Catagory not updated !!!.";
          }

          $this->load->view("updatecat",$mdata);
 
 

      }


      public function deletecatbyid(){

            $table ="tbl_catagory";
            $con ="id=2";
            $catmodel = $this->load->model("Catmodel");
            $catmodel->catdeletebyid($table, $con);


      }



        

      






 }

?>