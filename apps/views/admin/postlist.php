<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<h2>Post list</h2>
<?php

 if(!empty($_GET['msg'])){

      $msg = unserialize(urldecode($_GET['msg']));
      foreach ($msg as $key => $value){
          echo "<span style='color:blue;font-size:18px;font-weight:bold'>".$value."</span>";
      }
          
 }     

?>
 
<table id="mytableId" class="display" data-page-length="6">
 <thead>
    <tr>
        <th width="5%">No</th>
        <th width="30%">Title</th>
        <th width="35%">Content</th>
        <th width="15%">Catagory</th>
        <th width="15%">Action</th>
    </tr>
</thead>
<tbody>  
 
 <?php 

     if(isset($postList)){

          $i=0;
          foreach ($postList as $key => $value){
          $i++;	
          	 
 ?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['title']; ?></td>
        <td><?php


              $text = $value['content']; 
              if(strlen($text) >30){

                 $text=substr($text, 0,30);
                 echo $text;

             } 


         ?></td>
        <td><?php 
           
               if(isset($catList)){
               foreach($catList as $key => $cat){

               	     if($cat['id'] == $value['cat']){

                          echo $cat['catname'];

               	        }

               	    } 
               	 
               	}

        ?></td>

        <?php  if (Session::get("level")==1) { ?>

          <td>
              <a href="<?php echo BASE_URL; ?>/Admin/editpost/<?php echo $value['id']; ?>">Edit</a> || 
              <a onclick="return confirm('Are you sure to delete?');" href="<?php echo BASE_URL; ?>/Admin/deletepost/<?php echo $value['id']; ?>">Delete</a>
          </td>

        <?php }else{  ?>

               <td>Not permited</td>

        <?php } ?>

    </tr>

<?php } } ?>
</tbody>  
</table>
<script>
$(document).ready( function () {
    $('#mytableId').DataTable();
} );
</script>
 
