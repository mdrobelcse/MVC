<h2>Catagory list</h2>
<?php

 if(!empty($_GET['msg'])){

      $msg = unserialize(urldecode($_GET['msg']));
      foreach ($msg as $key => $value) {
          echo "<span style='color:blue;font-size:18px;font-weight:bold'>".$value."</span>";
      }
          
 }   
?>
<table class="tblone">

    <tr>
        <th>Serial No</th>
        <th>Catagory name</th>
        <th>Catagory title</th>
        <th>Action</th>
    </tr>

<?php
    
    $i=0;
    foreach($cat as $key => $value){
    $i++;  	 
?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['catname']; ?></td>
        <td><?php echo $value['title']; ?></td>

        <?php  if (Session::get("level")==1) { ?>

        <td>
        	<a href="<?php echo BASE_URL; ?>/Admin/editCatagory/<?php echo $value['id']; ?>">Edit</a> || 
        	<a onclick="return confirm('Are you sure to delete?');" href="<?php echo BASE_URL; ?>/Admin/deleteCatagory/<?php echo $value['id']; ?>">Delete</a>
        </td>

         <?php }else{  ?>

               <td>Not permited</td>

        <?php } ?>


    </tr>

<?php }  ?>

</table>
