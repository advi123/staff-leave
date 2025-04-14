<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="style.css">
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
                padding: 10px;
                background: #282a3a;
                display: flex;
                justify-content: space-between;
                align-items: center;
                z-index: 100;
                float:left;
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
            .list{
                margin-left:300px;
                font-size:25px;
            }
            .table-1{
                border-collapse:collapse;
                border-spacing:0;
                border-radius:6px 6px 0 0;
                overflow:hidden;
                box-shadow:0 5px 12px rgba(32,32,32,.3);
                margin: 90px 0;
                margin-left:60px;
              
                font-size:1.2rem;
                min-width:900px;
            }
          .table-1 thead tr{
            background-color:#2f323a;
            color:white;
            text-align:left;
            font-weight:bold;
          }
          .table-1 th,.table-1 td{
            padding:5px 12px;

          }
          .table-1 tr:nth-child(even){
            background-color:#eeeeee;
          }
          .sidebar{
            margin-left:0;
            background-color:#2f323a;
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
                <h1><span>Staff</span>Leave</h1>
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
        </div><br/><br/>
        




 <div class="container my-5">
<br><br><br><h2>STAFF LIST</h2>
<a class="btn btn-primary" href="register.php" role="button">new staff</a>
<br>
<table class="table-1">
<thead>
<tr>
<th>Name</th>
<th>Department</th>
<th>Faculty code</th>
<th>Email</th>
<th>Designation</th>
</tr>
</thead>
<tbody>
    

 <?php
include('db.php');
$sql="select * from register WHERE designation='staff'";
$result=$conn->query($sql);

    if ($result->num_rows > 0){
        
        while ($row = $result->fetch_assoc()) {
            echo "
			<tr>
			<td>$row[name]</td>
			<td>$row[deptname]</td>
			<td>$row[faculty_code]</td>
			<td>$row[email]</td>
            <td>$row[designation]</td>

			</td>
			</tr>
			";
        }
    }
else {
        echo "0 results";
    }
?>
</table>
</div>
</body>
</html>

       
   