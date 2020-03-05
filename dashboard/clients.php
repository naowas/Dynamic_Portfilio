<?php
require_once 'header.php';

 ?>
<?php
require 'db.php';

$select = "SELECT * FROM clients";
$result = mysqli_query($db_connection, $select);

 ?>

<div class="col-lg-12">
  <div class="col-lg-12 text-center">
    <h1>Clients</h1> 
  </div>
    
    <div class="col-lg-12 m-auto">
        <div class="col-lg-12 text-left py-3">
          
          <div class="row"> 
            <div class="col-lg-12">
    <a href="clients_add.php"> <button type="button" class="btn btn-primary">Add Clients</button> </a>
  </div>
          </div>
          <hr>
        </div>
        <table class="table table-striped" id="table_id">
          <thead class="bg-warning">
            <tr>
              <th>Clients OF TITLE</th>
              <th>IMAGE View</th>          
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
          foreach ($result as $value) {
           ?>
          <tr class="">
            
             <td><?php echo $value['clients_title']; ?></td>
          
            <td> <img width="50" src= "uploads/clients/<?php echo $value['clients_image']; ?>" alt=""> </td>  
            <span>
             <td><a href="clients_edit.php?id=<?php echo  $value['id']; ?>" class="btn btn-primary">Edit</a></td>
              <td><a href="clients_del.php?id=<?php echo  $value['id']; ?>" class="btn btn-danger">Delete</a></td>
              </span>

          </tr>
          <?php
              }

              if(empty($value)){
                echo '<tr><td colspan="6" class="text-center">no data available</td></tr>';
              }
           ?>
         </tbody>
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
