
        
<?php
include('db.php');


$id = $_GET['id'];
$user = $_GET['usname'];
$sql="update  applicants set status = 'rejected' where lv_id = '$id' ";
echo '<script type="text/javascript">';
echo 'alert("Rejected");';
echo 'window.location.href="inbox.php"';
echo '</script>';
$result=$conn->query($sql);


?>
