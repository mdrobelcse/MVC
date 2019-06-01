<?php include "inc/header.php"; ?>

 <h3>Update catagory</h3><hr>

<?php

    if(isset($msg)){

        echo "<span style='color:blue;font-size:18px;font-weight:bold'>".$msg."</span>";

    }

?>

 <form action="http://localhost/mvc/Catagory/catupdate" method="post">
 
     <table>

        <?php  
           if(isset($catbyid)){
            foreach($catbyid as $value){


         ?>
         <tr>
                   
               <td></td>
               <td><input type="hidden" name="id" value="<?php echo $value['id']; ?>" required="1"/></td>

          </tr>
             
          <tr>
                   
               <td>Catagory name</td>
               <td><input type="text" name="name" value="<?php echo $value['catname']; ?>" required="1"/></td>

          </tr>

         <tr>
                   
           <td>Catagory title</td>
           <td><input type="text" name="title" value="<?php echo $value['title']; ?>" required="1"/></td>

         </tr>

         <tr>
                   
           <td></td>
           <td><input type="submit" name="submit" value="save"/></td>

         </tr>

         <?php } } ?>

    </table>

 </form>



<?php include "inc/footer.php"; ?>