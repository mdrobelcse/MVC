<aside class="sidebar">

      <div class="widget">
          <h2>Catagory</h2>


             <ul>


       <?php 

              if(isset($catlist)){
              
                  foreach($catlist as $key => $value){




                   
        ?>
                 <li><a href="<?php echo BASE_URL; ?>/Index/postBycat/<?php echo $value['id']; ?>"><?php echo $value['catname']; ?></a></li>



        <?php } } ?>         
                  
             </ul>

      </div>


       <div class="widget">
          <h2>Post list</h2>

             <ul>

              <?php 

                  if(isset($latestpost)){

                          foreach($latestpost as $key => $value){
 

              ?>
                  <li><a href="<?php echo BASE_URL; ?>/Index/postDetails/<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></li>
                   

                <?php  } } ?>
                  
             </ul>

      </div>
 </aside>

