<?php
require_once 'header.php';

 ?>
<?php
require 'db.php';

$select = "SELECT * FROM socal";
$result = mysqli_query($db_connection, $select);

 ?>

<div class="col-lg-12">
  <div class="col-lg-12 text-center">
    <h2>Social All</h2>
  </div>
  <div class="col-lg-12">
    <a href="social_add.php"> <button type="button" class="btn btn-primary">Add social</button> </a>
  </div>
  <div class="col-lg-12">
      <table class="table table_bordered">
        <tr class="info">
          <td>Facebook Media</td>
            <td>Twitter Media</td>
            <td>Instagram Media</td>
            <td>Youtube Media</td>
            <td>Google-Plus Media</td>
            <th>Action</th>
        </tr>
        <?php
        foreach ($result as $value) {
         ?>
        <tr>
            <td><?php echo $value['facebook']; ?></td>
             <td><?php echo $value['twitter']; ?></td>
            <td><?php echo $value['youtube']; ?></td>
             <td><?php echo $value['google_plus']; ?></td>
             <td><?php echo $value['instragram']; ?></td>


            <span>
             <td><a href="social_edit.php?id=<?php echo  $value['id']; ?>" class="btn btn-primary">Edit</a></td>
              <td><a href="social_del.php?id=<?php echo  $value['id']; ?>" class="btn btn-danger">Delete</a></td>
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
