<h2>Add new User</h2>
<?php
    // if(isset($msg)){
    //     echo "<span style='color:blue;font-size:18px;font-weight:bold'>".$msg."</span>";
    // }

?>
 <form action="<?php echo BASE_URL; ?>/User/addnewuser" method="post">
 
     <table>
             
          <tr>
                   
               <td>Username</td>
               <td><input type="text" name="username" placeholder="Enter username" required="1"/></td>

          </tr>

         <tr>
                   
           <td>Password</td>
           <td><input type="password" name="password" placeholder="Enter password" required="1"/></td>

         </tr>

         <tr>
                   
           <td>User role</td>
           <td>            
                 <select name="level" class="cat">
                         <option>Select one</option>
                         <option value="1">Admin</option>
                         <option value="1">Author</option>
                         <option value="1">Contributer</option>
                 </select>

           </td>

         </tr>

         <tr>
                   
           <td></td>
           <td><input type="submit" name="submit" value="adduser"/></td>

         </tr>

    </table>

 </form>