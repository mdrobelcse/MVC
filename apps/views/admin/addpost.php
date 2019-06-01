<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<h2>Add new Post</h2>
<?php

 if(isset($postErrors)){
  
  echo "<div style='color:red; border:1px solid; padding: 5px 10px;margin:5px;'>";
  foreach ($postErrors as $key => $value){
    
     switch($key){

        case'title':
        foreach ($value as $val){
         echo "Title:".$val."<br/>";
        }

        break;

        case'content':
        foreach ($value as $val){
         echo "content:".$val."<br/>";
        }

        break;

        case'cat':
        foreach ($value as $val){
         echo "cat:".$val."<br/>";
        }

        break;

        default:

        break;


    }

  }

  echo "</div>";


}
?>

<form action="<?php echo BASE_URL; ?>/Admin/insertpost" method="get">
 
     <table>
             
          <tr>
                   
               <td>Title</td>
               <td><input type="text" name="title" placeholder="Enter title" required="1"/></td>

          </tr>

         <tr>
                   
           <td>Content</td>
           <td>
                <textarea name="content"></textarea>
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
                    <option value="<?php echo $cat['id']; ?>"><?php echo $cat['catname']; ?></option>

                    <?php } } ?>

               </select>
           </td>

         </tr>

         <tr>
                   
           <td></td>
           <td><input type="submit" name="submit" value="addpost"/></td>

         </tr>

    </table>

 </form>