<?php
session_start();
if(!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}?>


<?php
include("db.php");

$email=$_SESSION["email"];
  
// Retrieve information for the current user
$sql = "SELECT * FROM applicants WHERE email ='$email' "; 
// Read Operation - Fetch product data
$result = $conn->query($sql);

// Display products


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Dashboard</title>
        <style>
            body{
            background-color: white;
           }
            .header{
                position: fixed;
                top:0%;
                left:0%;
                width: 100%;
                padding:10px;
                background:#282a3a;
                display: flex;
                justify-content: space-between;
                align-items: center;
                z-index: 100;
            }
    
            .left-area{
                width:20%;
                

            }
            .left-area span{
                font-size: 2.5rem;
                color:aqua;
                font-style:italic;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .left-area h2{
              font-weight: bold;
              color:white;
              font-size:30px;
              font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
              font-style:italic;
            }
            
            .right-area{
                font-size: 1rem;
                color: white;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                float:right;
            }
            .sidebar{
            margin-left:-63px;
            background-color:#2f323a;
          }
          .menu{
            margin-top:20%;
            
          }
          .menu li a{
            color:white;
			margin-left:-35px;
    }
          .main-content {
            margin-left: 240px; /* Adjusted to match sidebar width */
            padding: 20px;
        }
        img {
	    border-radius: 50%;
      width: 15%;
      margin-left:40%;
      margin-top:10%;

	}
        .dashboard {
      display: flex;
      justify-content: space-around;
      padding: 100px;
      margin-left:10%;
    }

    table{
			border-collapse:collapse;
      border-spacing:0;
      border-radius:6px 6px 0 0;
      overflow:hidden;
      box-shadow:0 5px 12px rgba(32,32,32,.3);

      font-size:1rem;
      max-width:950px;
			margin-left:20%;
			margin-top:3%;
		  }
          .icons{
            margin-bottom:10%;
          }
		  table tr{
			border:5px;
		  }
	
		  label{
			font-family:cursive;
		  }
      table th{
        width:50px;
      }
		  td{
			font-family:cursive;
		  }
            
        </style>
    </head>
    <body>
       <header class="header">
            <div class=left-area>
            <h2><span>Staff</span>leave</h2>
         </div>
         <div class=right-area>
         <?php $name = $_SESSION["name"] ; echo $name;
            ?>
          </div>
            
            </header>
        <div class="container">
            <div class="sidebar">
                
                <ul class="menu">
                     <li><a href="dashboard.php"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
                    <li><a href="staff-list.php"><i class="fa-solid fa-users"></i>Staff-List</a></li> 
                    <li><a href="applic.php"><i class="fa-solid fa-file"></i>Application-form</a></li>
                    <li><a href="home.html"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Log-out</a></li>
                </ul>
                <div class="icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                
            </div>
        </div><br/><br/>
        <div class="main-content">
            
        <img src="https://th.bing.com/th/id/R.bae2d37c4317140a408aef6671346186?rik=X1vYbxH6nQxCcA&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_218090.png&ehk=poXsiWmpbb3%2b%2bK%2blj8H9AQprCYsoz4kt%2bU4rFFKbOCo%3d&risl=&pid=ImgRaw&r=0"><br/><br/><br/>
            </div>
      
<table class="table">
<thead>
<tr>
<th><div class="row mb-3">
	<label class="col-sm-3 col-form-label">Status</label>

</th>
    
<th><div class="row mb-3">
	<label class="col-sm-3 col-form-label">From</label>
</th>
<th><div class="row mb-3">
	<label class="col-sm-3 col-form-label">To</label></th>

<th><div class="row mb-3">
	<label class="col-sm-3 col-form-label">Leave_type</label></th>
  <th><div class="row mb-3">
	<label class="col-sm-3 col-form-label">Reason</label></th>

</tr>
</thead>
<tbody>
  <?php
   include ('db.php');
  
      $email=$_SESSION["email"];
  
      // Retrieve information for the current user
      $sql = "SELECT * FROM applicants WHERE usname ='$email' "; 
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()){
         echo " <tr>
        <td>$row[status]</td>
        <td>$row[frm]</td>
        <td>$row[too]</td>
        <td>$row[leavetype]</td>
        <td>$row[reason]</td>
        </tr>";
       
       }  
 
  
  
  $conn->close();
  ?>
 

</tbody>
</table>  
        </body>
        </html>
       