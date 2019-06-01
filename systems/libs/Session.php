<?php
/*Session class*/

  class Session{

   
      public static function init(){

            session_start();

      }
      

      public static function set($key, $val){

            $_SESSION[$key] = $val;
      }

     
      public static function get(){

           if(isset($_SESSION[$key])){
 
                  return $_SESSION[$key];
             
           }else{

                  return false;
           }


      }


      public static function checkSession(){

             self::init();
             if(self::get("login")==false){

                  self::destory();
                  header("Location: ".BASE_URL."/Login");

             }

       }

     

      public static function destory(){

           session_destroy();
      }
 




 }
?>