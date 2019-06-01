<?php include "inc/header.php"; ?>




 <h3>Add new catagory</h3><hr>

<?php

    if(isset($msg)){

        echo "<span style='color:blue;font-size:18px;font-weight:bold'>".$msg."</span>";

    }

?>

 <form action="http://localhost/mvc/Catagory/insertcatagory" method="get">
 
     <table>
             
          <tr>
                   
               <td>Catagory name</td>
               <td><input type="text" name="name" placeholder="Enter cat name" required="1"/></td>

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






<?php include "inc/footer.php"; ?>