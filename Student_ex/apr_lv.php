<?php
include('db.php');


$id = $_GET['id'];
$user = $_GET['usname'];
$sql="update  applicants set status = 'approved' where lv_id = '$id' ";

echo '<script type="text/javascript">';
echo 'alert("Approved");';
echo 'window.location.href="inbox.php"';
echo '</script>';

$result=$conn->query($sql);
if($row['status'=="approved"]){
    $query="DELETE FROM applicants where lv_id='$id'";
    $data=mysqli_query($conn,$query);
    }
?>

