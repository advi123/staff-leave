<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
            margin-top:4%;
            margin-left:-63px;
            background-color:#2f323a;
          }
          .menu{
            margin-top:10%;
          }
		  .menu li a{
            color:white;
			margin-left:-35px;
          }
		  table{
			border-collapse:collapse;
                border-spacing:0;
                border-radius:6px 6px 0 0;
                overflow:hidden;
                box-shadow:0 5px 12px rgba(32,32,32,.3);

                font-size:1rem;
                min-width:900px;
			margin-left:9%;
			margin-top:10%;
		  }
          .icons{
            margin-bottom:25%;
          }
		  table tr{
			border:5px;
		  }
	
		  label{
			font-family:cursive;
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
                    
                    <li><a href="staff-list1.php"><i class="fa-solid fa-users"></i>Staff-List</a></li>
                    <li><a href="inbox.php"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Inbox</a></li>
                    <li><a href="home.html"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Log-out</a></li>
                </ul>
                <div class="icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                
            </div>
        </div>
<div class="container my-5">
<h2>Inbox</h2>

<br>

<table class="table">
<thead>
<tr>
<th><div class="row mb-3">
	<label class="col-sm-3 col-form-label">ID</label></th>
<th><div class="row mb-3">
	<label class="col-sm-3 col-form-label">Name</label></th>
<th><div class="row mb-3">
	<label class="col-sm-3 col-form-label">Leavetype</label></th>
<th><div class="row mb-3">
	<label class="col-sm-3 col-form-label">From</label></th>
<th><div class="row mb-3">
	<label >Day-type</label></th>
<th><div class="row mb-3">
	<label class="col-sm-3 col-form-label">To</label></th>
<th><div class="row mb-3">
	<label>Day-type</label></th>
<th><div class="row mb-3">
	<label class="col-sm-3 col-form-label">Reason</label></th>
</tr>
</thead>
<tbody>
	

 <?php
 
include('db.php');
$sql="select * from applicants where status = 'applied'";
$result=$conn->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
			<tr>
			<td>$row[lv_id]</td>
			<td>$row[usname]</td>
			<td>$row[leavetype]</td>
			<td>$row[frm]</td>
			<td>$row[daytype1]</td>
            <td>$row[too]</td>
			<td>$row[daytype2]</td>
			<td>$row[reason]</td>";
		
            if($row['status'] != "approved"){
				echo "<td><a class='btn btn-primary btn-sm' href='apr_lv.php?usname=$row[usname]&id=$row[lv_id]'>Approve</a></td>";
	            
			}
			
				echo "<td>
			    <a class='btn btn-danger btn-sm' href='reg_lv.php?usname=$row[usname]&id=$row[lv_id]'>Reject</a>
			</td>
			</tr>
			";
            
           
			
			
        }
    } else {
        echo "0 results";
    }
?>
</table>
</div>
</body>
</html>

