  <aside class="adminleft">

        <div class="widget">
        <h3>Site option</h3>
            <ul>
                <li><a href="<?php echo BASE_URL?>/Admin">Home</a></li>
                <li><a href="<?php echo BASE_URL?>/Admin/uioption">UI Option</a></li>
                <li><a href="<?php echo BASE_URL?>/Login/logout">Logout</a></li>
            </ul>
        </div>

        <?php  
           if (Session::get("level")==1) { 
           //if (Session::get("level")!=2 && Session::get("level")!=3) { 

        ?>

        <div class="widget">
        <h3>User option</h3>
          <ul>
            <li><a href="<?php echo BASE_URL?>/User/makeuser">Make user</a></li>
            <li><a href="<?php echo BASE_URL?>/User/userlist">Userlist</a></li>
          </ul>
        </div>

        <?php } ?>


        <?php  

           if (Session::get("level")==1 || Session::get("level")==2) {
           //if (Session::get("level")!=3) {

         ?>

        <div class="widget">
        <h3>Catagory option</h3>
             <ul>
                 <li><a href="<?php echo BASE_URL?>/Admin/addcatagory">Add catagory</a></li>
                 <li><a href="<?php echo BASE_URL?>/Admin/catagorylist">Catagory List</a></li>
             </ul>
        </div>

         <?php } ?>

        <div class="widget">
        <h3>Post option</h3>
             <ul>
                 <li><a href="<?php echo BASE_URL?>/Admin/addarticle">Add new post</a></li>
                 <li><a href="<?php echo BASE_URL?>/Admin/articlelist">Post List</a></li>
             </ul>
        </div>

  </aside>

<article class="adminright">