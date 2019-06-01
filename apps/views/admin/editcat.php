<h2>Update Catagory</h2>
<?php
      
       if(isset($catbyid)){

          foreach ($catbyid as $key => $value){
          
?>
 <form action="<?php echo BASE_URL; ?>/Admin/UpdateCatagory/<?php echo $value['id']; ?>" method="get">
 
     <table>
             
          <tr>
                   
               <td>Catagory name</td>
               <td><input type="text" name="catname" value="<?php echo $value['catname']; ?>" required="1"/></td>

          </tr>

         <tr>
                   
           <td>Catagory title</td>
           <td><input type="text" name="title" value="<?php echo $value['title']; ?>" required="1"/></td>

         </tr>

         <tr>
                   
           <td></td>
           <td><input type="submit" name="submit" value="update"/></td>

         </tr>

    </table>

 </form>

 <?php } } ?>