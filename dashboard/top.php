<?php
require_once 'header.php';

 ?>
<?php
require 'db.php';

$select = "SELECT * FROM top_header1";
$result = mysqli_query($db_connection, $select);

 ?>

<div class="col-lg-12">
  <div class="col-lg-12 text-center">
    <h2>Tope header</h2>
  </div>
  <div class="col-lg-12">
    <a href="topheader_add.php"> <button type="button" class="btn btn-primary">Add contact</button> </a>
  </div>
  <div class="col-lg-12">
      <table class="table table_bordered">
        <tr class="info">
            <td>Home Head</td>
            <td>Home URL</td>
            <td>About Head</td>
            <td>About URL</td>
            <td>Services Head</td>
            <td>Services URL</td>
            <td>Works head</td>
            <td>Works URL</td>
            <td>Testimonial Head</td>
            <td>Testimonial URL</td>
            <td>Contact Head</td>
            <td>Contact URL</td>
            <th>Action</th>
        </tr>

        <?php
        foreach ($result as $value) {
         ?>
        <tr> <td><?php echo $value['home_head']; ?></td>
           <td><?php echo $value['home']; ?></td>
            <td><?php echo $value['about_head']; ?></td>
             <td><?php echo $value['about']; ?></td>
             <td><?php echo $value['service_head']; ?></td>
            <td><?php echo $value['service']; ?></td>
            <td><?php echo $value['works_head']; ?></td>
            <td><?php echo $value['works']; ?></td>
             <td><?php echo $value['testimonial_head']; ?></td>
            <td><?php echo $value['testimonial']; ?></td>
             <td><?php echo $value['contact_head']; ?></td>
            <td><?php echo $value['contact']; ?></td>
            
          
            <span>
             <td><a href="topheader_edit.php?id=<?php echo  $value['id']; ?>" class="btn btn-primary">Edit</a></td>
              <td><a href="topheader_del.php?id=<?php echo  $value['id']; ?>" class="btn btn-danger">Delete</a></td>
              
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