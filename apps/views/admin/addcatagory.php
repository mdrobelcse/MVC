<h2>Add new category</h2>
<?php
    // if(isset($msg)){
    //     echo "<span style='color:blue;font-size:18px;font-weight:bold'>".$msg."</span>";
    // }

?>
 <form action="<?php echo BASE_URL; ?>/Admin/insertcatagory" method="get">
 
     <table>
             
          <tr>
                   
               <td>Catagory name</td>
               <td><input type="text" name="catname" placeholder="Enter cat name" required="1"/></td>

          </tr>

         <tr>
                   
           <td>Catagory title</td>
           <td><input type="text" name="title" placeholder="Enter cat title" required="1"/></td>

         </tr>

         <tr>
                   
           <td></td>
           <td><input type="submit" name="submit" value="save"/></td>

         </tr>

    </table>

 </form>