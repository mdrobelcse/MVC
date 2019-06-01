<?php

/*Main class*/

class Main{

    public $url;
    public $controllername  = "Index";
    public $methodname      = "Index";
    public $controllerpath  ='apps/controllers/';
    public $controller;


	public function __construct(){

           $this->geturl();
           $this->loadcontroller();
           $this->callmethod();

	}

   /************************************************************/

    public function geturl(){
            $this->url = isset($_GET['url']) ? $_GET['url'] : NULL;
            if($this->url != NULL){ 
			   $this->url = rtrim($this->url,'/');
			   $this->url = explode("/", filter_var($this->url,FILTER_SANITIZE_URL));
             }else{
                   unset($this->url);
             }
 
    }

   /************************************************************/

    public function loadcontroller(){   

                if(!isset($this->url[0])){
                      include $this->controllerpath.$this->controllername.".php";
                      $this->controller = new $this->controllername();
 
               }else{
                     $this->controllername = $this->url[0];
                     $filename = $this->controllerpath.$this->controllername.".php";
                     if(file_exists($filename)){
                     	include $filename;
                     	if(class_exists($this->controllername)){                   
                             $this->controller = new $this->controllername();
                     	 }else{
                            header("Location: ".BASE_URL."/Index"); 
                          }

                     }else{  
                            header("Location: ".BASE_URL."/Index");
                     }
      
               }

    }
        
   /************************************************************/
 
    public function callmethod(){

              if(isset($this->url[2])){
                   $this->methodname = $this->url[1];
                   if(method_exists($this->controller, $this->methodname)){
                          $this->controller->{$this->methodname}($this->url[2]);
                   }else{
                          header("Location: ".BASE_URL."/Index");
                   }

              }else{

                   if(isset($this->url[1])){
                          $this->methodname = $this->url[1];
                          if(method_exists($this->controller, $this->methodname)){
                          $this->controller->{$this->methodname}();
                          }else{
                              header("Location: ".BASE_URL."/Index");
                          }

                   }else{
                           if(method_exists($this->controller, $this->methodname)){
                           $this->controller->{$this->methodname}();
                           }else{
                              header("Location: ".BASE_URL."/Index");
                           }
                       }
                   

                  }

    }


    /************************************************************/



 }
?>