<?php
include ('db.php');
// Query to count applied messages
$appliedQuery = "SELECT COUNT(*) AS applied_count FROM applicants WHERE status = 'applied'";
$appliedResult = $conn->query($appliedQuery);
$appliedCount = $appliedResult->fetch_assoc()['applied_count'];

// Query to count rejected messages
$rejectedQuery = "SELECT COUNT(*) AS rejected_count FROM applicants WHERE status = 'rejected'";
$rejectedResult = $conn->query($rejectedQuery);
$rejectedCount = $rejectedResult->fetch_assoc()['rejected_count'];

// Query to count total messages
$totalQuery = "SELECT COUNT(*) AS total_count FROM applicants";
$totalResult = $conn->query($totalQuery);
$totalCount = $totalResult->fetch_assoc()['total_count'];

// Close the database connection
$conn->close();

// Display the counts
echo "Applied: $appliedCount, Rejected: $rejectedCount, Total: $totalCount";
?>







$sql="SELECT * FROM register";
        $result=$conn->query($sql);
        if($result->num_rows>0)
       {
         echo "<center><table><tr><th>User ID</th><th>Username</th><th>Email</th></tr></center>";
         while($row=$result->fetch_assoc()){
          echo "<center><tr><td>".$row["designation"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td></center>";
         }
         echo"<center></table>";
       }  else{
        echo "No users found";
       }
       $conn->close();


       <?php
  include('db.php');
  $query="select *  from from applicants a where r.name=a.usname";
  $result=mysqli_query($connect,$query);
  while($row=mysqli_fetch_assoc($reuslt))
  {

  }
?>