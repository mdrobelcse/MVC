<?php
/*
 Index controller
*/
 
 class Index extends Dcontroller{

   
      public function __construct(){

          parent::__construct();

      }


        
      public function Index(){

           $this->home();

      }


      public function home(){
 
          
          $data =array();          
          $tablepost ="tbl_post";  
          $tablecat  ="tbl_catagory";
          $this->load->view("header");

          $catmodel = $this->load->model("Catmodel");
          $data['catlist'] = $catmodel->catlist($tablecat);
          $this->load->view("search", $data);

  	      
  	      $postmodel = $this->load->model("Postmodel");
  	      $data['allpost'] = $postmodel->postlist($table);
          $this->load->view("content", $data);

          //$data['catlist'] = $catmodel->catlist($tablecat);
          $data['latestpost'] = $postmodel->latestpost($tablepost);


          $this->load->view("sidebar", $data);
          $this->load->view("footer");
          $this->load->view("footer");
        
      }


      public function postDetails($id){


           $data =array();
           $tablepost ="tbl_post";
           $tablecat  ="tbl_catagory";  

           $this->load->view("header");

           $catmodel = $this->load->model("Catmodel");
           $data['catlist'] = $catmodel->catlist($tablecat);
           $this->load->view("search", $data);
           	        
  	       $postmodel = $this->load->model("Postmodel");
  	       $data['postbyid'] = $postmodel->posbyid($tablepost, $tablecat, $id);
           $this->load->view("details", $data);

 
           //$catmodel = $this->load->model("Catmodel");
           //$data['catlist'] = $catmodel->catlist($tablecat);
           $data['latestpost'] = $postmodel->latestpost($tablepost);


           $this->load->view("sidebar", $data);
           $this->load->view("footer"); 

      }

      public function postBycat($id){


          $data =array();
          $tablepost ="tbl_post";
          $tablecat  ="tbl_catagory";

          $this->load->view("header");
          $catmodel = $this->load->model("Catmodel");
          $data['catlist'] = $catmodel->catlist($tablecat);
          $this->load->view("search", $data);
                     
          $postmodel = $this->load->model("Postmodel");
          $data['postbycat'] = $postmodel->posbycat($tablepost, $tablecat, $id);
          $this->load->view("postbycat", $data);
         

          //$catmodel = $this->load->model("Catmodel");
          $data['catlist'] = $catmodel->catlist($tablecat);
          $data['latestpost'] = $postmodel->latestpost($tablepost);


          $this->load->view("sidebar", $data);
          $this->load->view("footer"); 

      	
      }

      public function search(){

          $data =array();
          $keyword = $_REQUEST['keyword'];
          $cat     = $_REQUEST['cat'];

          $tablepost ="tbl_post";
          $tablecat  ="tbl_catagory";
          $this->load->view("header");


          $catmodel = $this->load->model("Catmodel");
          $data['catlist'] = $catmodel->catlist($tablecat);
          $this->load->view("search", $data);
          
                     
          $postmodel = $this->load->model("Postmodel");
          $data['postbysearch'] = $postmodel->postbysearch($tablepost, $keyword, $cat);
          $this->load->view("result", $data);

 
          $data['latestpost'] = $postmodel->latestpost($tablepost);          
          $this->load->view("sidebar", $data);
          $this->load->view("footer");  
     

       }

     



 }
?>