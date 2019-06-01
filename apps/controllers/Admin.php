<?php
/*Admin controller*/


class Admin extends Dcontroller{
   
 
     public function __construct(){

           parent::__construct();
           Session::checkSession();


     }


        public function Index(){

           $this->home();

       }

      
     public function home(){

           $this->load->view("admin/header"); 
           $this->load->view("admin/sidebar"); 

           $data["user"] = array(
               "username"=>Session::get("username")
           );

           $this->load->view("admin/home", $data); 
           $this->load->view("admin/footer"); 
     } 


     
     public function addcatagory(){

           $tableui ="tbl_ui";
           $uimodel = $this->load->model("Uimodel");
           $data['color'] = $uimodel->getcolor($tableui);

           $this->load->view("admin/header", $data);  
           $this->load->view("admin/sidebar"); 
           $this->load->view("admin/addcatagory"); 
           $this->load->view("admin/footer"); 

         }


      public function insertcatagory(){

          $table ="tbl_catagory";

          $catname  = $_GET['catname'];
          $title    = $_GET['title'];

          $data =array(

               'name' => $catname,
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

          $url=BASE_URL."/Admin/catagorylist?msg=".urlencode(serialize($mdata));
          header("Location: $url");

      }   
      

      public function catagorylist(){

            $this->load->view("admin/header"); 
            $this->load->view("admin/sidebar");
          
            $data =array();
            $tablecat ="tbl_catagory";  
            $catmodel = $this->load->model("catmodel");
            $data['cat'] = $catmodel->catlist($tablecat);
            $this->load->view("admin/catagorylist", $data);
            $this->load->view("admin/footer");


       }

       public function editCatagory($id=NULL){

            $data =array();
            $tablecat ="tbl_catagory";

            $this->load->view("admin/header"); 
            $this->load->view("admin/sidebar");
  
            $catmodel = $this->load->model("Catmodel");
            $data['catbyid'] = $catmodel->catbyid($tablecat, $id);
            $this->load->view("admin/editcat", $data);

            $this->load->view("admin/footer");


      }  


      public function UpdateCatagory($id=NULL){

            $tablecat ="tbl_catagory";
            $catname  = $_GET['catname'];
            $title    = $_GET['title'];

            $data =array(

                 'name' => $catname,
                 'title'=> $title
                 

              ); 
             
          $con ="id=$id";  
          $catmodel = $this->load->model("Catmodel");
          $result = $catmodel->catupdate($tablecat, $data, $con);
          
          $mdata=array();
          if($result==1){

                 $mdata['msg'] ="Catagory updated successfully...";  

            }else{

                $mdata['msg'] ="Catagory not updated !!!.";
            }

            $url=BASE_URL."/Admin/catagorylist?msg=".urlencode(serialize($mdata));
            header("Location: $url");
        

     }


      public function deleteCatagory($id=NULL){


            $tablecat ="tbl_catagory";
            $con ="id=$id";
            $catmodel = $this->load->model("Catmodel");
            $result = $catmodel->catdeletebyid($tablecat, $con);


            $mdata=array();
            if($result==1){

                 $mdata['msg'] ="Catagory deleted successfully...";  

            }else{

                $mdata['msg'] ="Catagory not deleted !!!.";
            }

            $url=BASE_URL."/Admin/catagorylist?msg=".urlencode(serialize($mdata));
            header("Location: $url");


     }


     public function addarticle(){

           $data =array();
           $tablecat ="tbl_catagory";

           $this->load->view("admin/header"); 
           $this->load->view("admin/sidebar"); 
        
           $catmodel = $this->load->model("Catmodel");
           $data['CatList'] = $catmodel->catlist($tablecat);

           $this->load->view("admin/addpost", $data); 
           $this->load->view("admin/footer"); 

     }


     public function articlelist(){

           $tablepost ="tbl_post";
           $tablecat  ="tbl_catagory";


           $this->load->view("admin/header"); 
           $this->load->view("admin/sidebar"); 

           $postmodel = $this->load->model("Postmodel");
           $data['postList'] = $postmodel->allpost($tablepost);

           $catmodel = $this->load->model("Catmodel");
           $data['catList'] = $catmodel->catlist($tablecat);

           $this->load->view("admin/postlist", $data); 
           $this->load->view("admin/footer");


     }


      

     

     public function insertpost(){


           if(!$_POST){
 
               header("Location: ".BASE_URL."/Admin/addarticle");

           }

           $input = $this->load->validation('Dform');
           $input ->post('title')
                  ->isEmpty()
                  ->length(20,500);

           $input ->post('content')
                  ->isEmpty();    
           $input ->post('cat')
                  ->isEmptycat();  

            if($input->submit()){
               
                $tablepost ="tbl_post";
               //$tablecat ="tbl_catagory";
              
                $title    = $input->values['title'];
                $content  = $input->values['content'];
                $cat      = $input->values['cat'];

                $data =array(

                     'title'    => $title,
                     'content'  => $content,
                     'cat'      => $cat
                     

                  );

                  $postmodel = $this->load->model("Postmodel");
                  $result = $postmodel->insertPost($tablepost, $data);
                    $mdata=array();

                    if($result==1){

                         $mdata['msg'] ="Post added successfully...";  

                    }else{

                        $mdata['msg'] ="Post not added !!!.";
                    }

                   $url=BASE_URL."/Admin/articlelist?msg=".urlencode(serialize($mdata));
                   header("Location: $url");

            }else{

                 $data["postErrors"] = $input->errors;

                 $tablecat ="tbl_catagory";
   
                 $this->load->view("admin/header"); 
                 $this->load->view("admin/sidebar"); 

                 $catmodel = $this->load->model("Catmodel");
                 $data['CatList'] = $catmodel->catlist($tablecat);

                 $this->load->view("admin/addpost", $data); 
                 $this->load->view("admin/footer"); 

            }        
        
      }


      public function editpost($id=NULL){


           $data =array();
           $tablecat ="tbl_catagory";
           $tablepost ="tbl_post";

           $this->load->view("admin/header"); 
           $this->load->view("admin/sidebar"); 

           $postmodel = $this->load->model("Postmodel");
           $data['postbyid'] = $postmodel->postbyid($tablepost, $id);
        
           $catmodel = $this->load->model("Catmodel");
           $data['CatList'] = $catmodel->catlist($tablecat);

           $this->load->view("admin/editpost", $data); 
           $this->load->view("admin/footer");


      }



     public function updatepost(){


          $input = $this->load->validation('Dform');
          $input ->post('title');
          $input ->post('content');
          $input ->post('cat');

          $con ="id=$id";
          $tablepost ="tbl_post";


           $title    = $input->values['title'];
           $content  = $input->values['content'];
           $cat      = $input->values['cat'];

                $data =array(

                     'title'    => $title,
                     'content'  => $content,
                     'cat'      => $cat
                     

                  );

                  $postmodel = $this->load->model("Postmodel");
                  $result = $postmodel->updatePost($tablepost, $data, $con);
                    $mdata=array();

                    if($result==1){

                         $mdata['msg'] ="Post updated successfully...";  

                    }else{

                        $mdata['msg'] ="Post not updated !!!.";
                    }

                   $url=BASE_URL."/Admin/articlelist?msg=".urlencode(serialize($mdata));
                   header("Location: $url");

           }


           public function deletepost($id=NULL){


            $tablepost ="tbl_post";
            $con ="id=$id";
            $postmodel = $this->load->model("Postmodel");
            $result = $postmodel->deletepostbyid( $tablepost, $con);


            $mdata=array();
            if($result==1){

                 $mdata['msg'] ="post deleted successfully...";  

            }else{

                $mdata['msg'] ="post not deleted !!!.";
            }

             $url=BASE_URL."/Admin/articlelist?msg=".urlencode(serialize($mdata));
             header("Location: $url");


     }


     public function uioption(){

          $tableui ="tbl_ui";
          $uimodel = $this->load->model("Uimodel");
          $data['color'] = $uimodel->getcolor($tableui);

          $this->load->view("admin/header", $data); 
          $this->load->view("admin/sidebar");   
          $this->load->view("admin/ui"); 
          $this->load->view("admin/footer"); 

     }


     public function changeUI(){

          $input = $this->load->validation('Dform');
          $input ->post('color');
          
          $id=1;
          $con ="id=$id";
          $tableui ="tbl_ui";

           $color    = $input->values['color'];
            
                $data =array(
                     'color'    => $color   
                  );

                  $uimodel = $this->load->model("Uimodel");
                  $result = $uimodel->updatebackground($tableui, $data, $con);
                    $mdata=array();

                    if($result==1){

                         $mdata['msg'] ="Background updated successfully...";  

                    }else{

                        $mdata['msg'] ="Background not updated !!!.";
                    }

                   $url=BASE_URL."/Admin/uioption?msg=".urlencode(serialize($mdata));
                   header("Location: $url");

           }




           public function deletepost($id=NULL){


            $tablepost ="tbl_post";
            $con ="id=$id";
            $postmodel = $this->load->model("Postmodel");
            $result = $postmodel->deletepostbyid( $tablepost, $con);


            $mdata=array();
            if($result==1){

                 $mdata['msg'] ="post deleted successfully...";  

            }else{

                $mdata['msg'] ="post not deleted !!!.";
            }

             $url=BASE_URL."/Admin/articlelist?msg=".urlencode(serialize($mdata));
             header("Location: $url");



     }
     
     
 
       











   
}
?>