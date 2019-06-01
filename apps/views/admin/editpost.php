<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<h2>Add new Post</h2>
<?php

    foreach ($postbyid as $key => $value) {
      

?>
<form action="<?php echo BASE_URL; ?>/Admin/updatepost" method="get">
     <table>
             
          <tr>
                   
               <td>Title</td>
               <td><input type="text" name="title" value="<?php echo $value['title'];?>"/></td>

          </tr>

         <tr>
                   
           <td>Content</td>
           <td>
                <textarea name="content">
                  
                    <?php echo $value['content'];?>

                </textarea>
		        <script>CKEDITOR.replace( 'content' );</script>
           </td>

         </tr>

         <tr>
                   
           <td>Catagory</td>
           <td>
               <select name="cat" class="cat">
                    <option>Select One</option>

                    <?php 

                          if(isset($CatList)){

                             foreach ($CatList as $key => $cat){
                   
                    ?>
                    <option 

                       <?php if($value['cat']==$cat['id']){ ?>

                            selected="selected"

                      <?php  } ?>

                      value="<?php echo $cat['id']; ?>"><?php echo $cat['catname']; ?>
                      
                    </option>

                    <?php } } ?>

               </select>
           </td>

         </tr>

         <tr>
                   
           <td></td>
           <td><input type="submit" name="submit" value="updatepost"/></td>

         </tr>

    </table>

 </form>

 <?php } ?>