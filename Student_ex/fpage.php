

<!DOCTYPE html>
<html>
    <head>
        <title>Staffleave</title>
        <style>

        </style>
    </head>
    <body>
        <form action="fpage.php" method="post">
          <input type="submit" name="login" >
        </form>
    </body>
</html>


<?php
include('db.php');
if(isset($_POST["login"]))
{
    $sql="SELECT name,deptname,faculty_code FROM register";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            echo "Name:".$row["name"]."<br>";
            echo "Department:".$row["deptname"]."<br>";
            echo "Faculty code:".$row["faculty_code"]."<br>";

        }
    }
    else
    {
        echo "0 results";
    }
}
?>