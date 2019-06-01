 <?php include "inc/header.php"; ?>
 <!-- /*****************/ -->
 <h3>Login</h3><hr>

  <div class="loginform">
 
       <form action="<?php echo BASE_URL; ?>/Login/loginauth" method="post">
           <table>
               <tr>
                  <td>Username :</td>
                  <td><input type="text" name="username" placeholder="Enter username..."/></td>
               </tr>
              <tr>
                  <td>Password :</td>
                  <td><input type="password" name="password" placeholder="Enter password..."/></td>
              </tr>
              <tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Login"/></td>
              </tr>

           </table>
       </form>

   </div>

<!-- /*****************/ -->

<?php include "inc/footer.php"; ?>
 