<?php
require_once 'header.php';

 ?>
<?php
require 'db.php';

$select = "SELECT * FROM counter";
$result = mysqli_query($db_connection, $select);

 ?>

<div class="col-lg-12">
  <div class="col-lg-12 text-center">
    <h2>Counter Right</h2>
  </div>
  <div class="col-lg-12">
    <a href="counter_add.php"> <button type="button" class="btn btn-primary">Add Counter</button> </a>
  </div>
  <div class="col-lg-12">
      <table class="table table_bordered">
        <tr class="info">
           <td>Happy</td>
            <td>Happy Counter</td>
            <td>Project</td>
            <td>Project Counter</td>
            <td>Coffee</td>
            <td>Coffee Conter</td>
            <td>Total</td>
            <td>Total Conter</td>
            <th>Action</th>
        </tr>

        <?php
        foreach ($result as $value) {
         ?>
        <tr>
           <td><?php echo $value['happy']; ?></td>
             <td><?php echo $value['happy_counter']; ?></td>
             <td><?php echo $value['project']; ?></td>
             <td><?php echo $value['project_counter']; ?></td>
             <td><?php echo $value['coffee']; ?></td>
             <td><?php echo $value['coffee_counter']; ?></td>
             <td><?php echo $value['total']; ?></td>
            <td><?php echo $value['total_counter']; ?></td>
           
            <span>
             <td><a href="counter_edit.php?id=<?php echo  $value['id']; ?>" class="btn btn-primary">Edit</a></td>
              <td><a href="counter_del.php?id=<?php echo  $value['id']; ?>" class="btn btn-danger">Delete</a></td>
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