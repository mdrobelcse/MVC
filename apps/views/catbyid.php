<?php include "inc/header.php"; ?>




 <h2>Catagory list</h2><hr>
 <?php

    foreach($catbyid as $key => $value){
    	 echo $value['catname']."<br/>";
    }

 ?>







<?php include "inc/footer.php"; ?>