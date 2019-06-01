 Post details <hr/> 
 <article class="postcontent">

  <?php

       if(isset($postbyid)){
 
            foreach ($postbyid as $key => $value){
              

  ?>

   <div class="details">

      <div class="title">

           <h2><?php echo $value['title']; ?></h2>
           <p>Catagory:<a href="<?php echo BASE_URL; ?>/Index/postBycat/<?php echo $value['cat']; ?>"> <?php echo $value['catname']; ?></a> </p>
     
      </div>
 
      <div class="desc">

 
           <p><?php echo $value['content']; ?></p>
 

      </div>
 
   </div>
   
  <?php } } ?>

 </article>

 