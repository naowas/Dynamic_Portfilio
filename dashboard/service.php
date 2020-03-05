<?php
require_once 'header.php';

 ?>
<?php
require 'db.php';

$select = "SELECT * FROM service";
$result = mysqli_query($db_connection, $select);

 ?>

<div class="col-lg-12">
  <div class="col-lg-12 text-center">
    <h2>Service All</h2>
  </div>
  <div class="col-lg-12">
    <a href="service_add.php"> <button type="button" class="btn btn-primary">Add Service</button> </a>
  </div>
  <div class="col-lg-12">
      <table class="table table_bordered">
        <tr class="info">
           <td>Service Head</td>
            <td>Design Head</td>
            <td>Design</td>
            <td>Development head</td>
            <td>Development</td>
            <td>Graphics Head</td>
            <td>Graphics</td>
             <td>Branding Head</td>
            <td>Branding</td>
            <td>Photography Head</td>
            <td>Photography</td>
            <td>Support Head</td>
            <td>Support</td>
            <th>Action</th>
        </tr>

        <?php
        foreach ($result as $value) {
         ?>
        <tr>
          <td><?php echo $value['services_head']; ?></td>
             <td><?php echo $value['design_head']; ?></td>
             <td><?php echo $value['design']; ?></td>
            <td><?php echo $value['development_head']; ?></td>
             <td><?php echo $value['development']; ?></td>
            <td><?php echo $value['graphics_head']; ?></td>
            
             <td><?php echo $value['graphics']; ?></td>
             <td><?php echo $value['branding_head']; ?></td>
              <td><?php echo $value['branding']; ?></td>
            <td><?php echo $value['photography_head']; ?></td>
             <td><?php echo $value['photography']; ?></td>
            <td><?php echo $value['support_head']; ?></td>
             <td><?php echo $value['support']; ?></td>
            
          
            <span>
             <td><a href="service_edit.php?id=<?php echo  $value['id']; ?>" class="btn btn-primary">Edit</a></td>
              <td><a href="service_del.php?id=<?php echo  $value['id']; ?>" class="btn btn-danger">Delete</a></td>
     
            </span>
       
        </tr>
        <?php  
        
        } 
          if(empty($value)){
                echo '<tr><td colspan="6" class="text-center">no data available</td></tr>';
          }
          ?>
          
          
          
      </table>
</div>

 <?php
 require_once 'footer.php';
  ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 
<script>

    $(function(){
      $('#search_btn').click(function(){
        var search_data = $('#search_data').val();
        var base_url = window.location.pathname;
        var search_url = base_url+'?search='+search_data ;
        window.location.href = search_url;
      });

      $('#table_id').DataTable();
    });

    </script>