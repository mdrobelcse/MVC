<?php
/*Login controller*/


class Login extends Dcontroller{
   
 

     public function __construct(){

          parent::__construct();

     }
      

     public function Index(){

         Session::init();
         if(Session::get("login")==true){

             header("Location: ".BASE_URL."/Admin");

         }

         $this->login();  

     }

    
      
     public function login(){

 
         $this->load->view("login/login");

     } 

    
      public function loginauth(){
           
           $table    ="tbl_user";
           $username = $_POST['username'];
           $password = $_POST['password'];

           $loginmodel = $this->load->model("Loginmodel");
           $count = $loginmodel->usercontroll($table, $username, $password);

           if ($count > 0){
           	   $result = $loginmodel->getUserdata($table, $username, $password);
               Session::init();
               Session::set("login",true);
               Session::set("username",$result[0]['username']);
               Session::set("id",$result[0]['id']);
               Session::set("level",$result[0]['level']);
               header("Location: ".BASE_URL."/Admin"); 

           }else{
              header("Location: ".BASE_URL."/Login");
           }


      }



       public function logout(){
 
            Session::init();
            Session::destory();
            header("Location: ".BASE_URL."/Login");


       }

    
       


   
}

?>