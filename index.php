<?php 

 

      spl_autoload_register(function($class){

      include_once 'systems/libs/'.$class.'.php';

});
include_once 'apps/config/config.php';



$main = new Main();
 

  

 



 ?>














