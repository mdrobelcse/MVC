<?php
/*User controller*/


class User extends Dcontroller{
   
 
     public function __construct(){

           parent::__construct();
             
     }

     public function Index(){

          $this->makeuser();

     }

     public function makeuser(){


           $this->load->view("admin/header"); 
           $this->load->view("admin/sidebar");
           $this->load->view("admin/makeuser"); 
           $this->load->view("admin/footer"); 

           
     }

     public function addnewuser(){

            if (!($_POST)) {
                 
                  header("Location :".BASE_URL."/User");
            }
         
           $input = $this->load->validation('Dform');
           $input ->post('username');
           $input ->post('password');    
           $input ->post('level');  
               
                $tableuser= "tbl_user";
               
                $username   = $input->values['username'];
                $password   = md5($input->values['password']);
                $level      = $input->values['level'];


                $data =array(

                     'username'  => $username,
                     'password'  => $password,
                     'level'     => $level
                     

                  );

                 $usermodel = $this->load->model("Usermodel");
                 $result = $usermodel->adduser($tableuser, $data);
                 $mdata=array();

                    if($result==1){

                         $mdata['msg'] ="User added successfully...";  

                    }else{

                        $mdata['msg'] ="User not added !!!.";
                    }

                   $url=BASE_URL."/User/userlist?msg=".urlencode(serialize($mdata));
                   header("Location: $url");

     }



     public function userlist(){
           

           $data =array();
           $tableuser= "tbl_user";
           $this->load->view("admin/header"); 
           $this->load->view("admin/sidebar"); 

           $usermodel = $this->load->model("Usermodel");
           $data['users']= $usermodel->Userlist($tableuser);

           $this->load->view("admin/userlist", $data); 
           $this->load->view("admin/footer"); 

      
     }

     

      public function deleteuser($id=NULL){

            $tableuser= "tbl_user";
            $con ="id=$id";
            $usermodel = $this->load->model("Usermodel");
            $result = $usermodel->userdeletebyid($tableuser, $con);


             $mdata=array();

                    if($result==1){

                         $mdata['msg'] ="User Deleted successfully...";  

                    }else{

                        $mdata['msg'] ="User not Deleted !!!.";
                    }

                   $url=BASE_URL."/User/userlist?msg=".urlencode(serialize($mdata));
                   header("Location: $url");

          }
  



}
?>     