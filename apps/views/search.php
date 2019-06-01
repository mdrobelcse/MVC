<div class="searchoption">

    <div class="menu">
         <a href="<?php echo BASE_URL; ?>">Home</a>
    </div>

    <div class="search">

        <form action="<?php echo BASE_URL; ?>/Index/search" method="post">

              <input type="text" name="keyword" placeholder="Enter keyword"/>

              <select class="catsearch" name="cat">
                 <option>Select one</option>
                  
          <?php 
               
                    if(isset($catlist)){

                          foreach ($catlist as $key => $value) {
                          
          ?>    
                 <option value="<?php echo $value['id']; ?>"><?php echo $value['catname']; ?></option>


          <?php } } ?>


              </select>

              <button class="submitbtn" type="submit">search</button>

          </form>    

    </div>

</div>