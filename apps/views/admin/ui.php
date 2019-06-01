<h2>Change UI</h2>
<?php

     if(!empty($_GET['msg'])){

          $msg = unserialize(urldecode($_GET['msg']));
          foreach ($msg as $key => $value) {
              echo "<span style='color:blue;font-size:18px;font-weight:bold'>".$value."</span>";
          }
              
     }   
?>
 <form action="<?php echo BASE_URL; ?>/Admin/changeUI" method="post">
 
     <table>
             
          <tr>
                   
               <td>Change Background color</td>
               <td><input type="color" name="color"required="1"/></td>

          </tr>

         <tr>
                   
           <td></td>
           <td><input type="submit" name="submit" value="Change"/></td>

         </tr>

    </table>

 </form>