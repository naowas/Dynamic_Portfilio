<?php

$head1 = $_POST['fb_id'];
$head2 = $_POST['tw_id'];
$head3 = $_POST['insta_id'];
$head4 = $_POST['yt_id'];
$head5 = $_POST['gl_id'];

$id2 = $_POST['btn-update70'];

require 'db.php';
$updateData = "UPDATE `socal` SET `facebook`='$head1',`twitter`='$head2',`youtube`='$head3',`google_plus`='$head4',`instragram`='$head5' WHERE id='$id2'";
$updated = mysqli_query($db_connection, $updateData);
header('location:social.php');
