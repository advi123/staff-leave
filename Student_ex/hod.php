<?php
session_start();
?>

<?php
include ('db.php');
// Query to count applied messages
$approvedQuery = "SELECT COUNT(*) AS applied_count FROM applicants WHERE status = 'approved'";
$approvedResult = $conn->query($approvedQuery);
$approvedCount = $approvedResult->fetch_assoc()['applied_count'];

// Query to count rejected messages
$rejectedQuery = "SELECT COUNT(*) AS rejected_count FROM applicants WHERE status = 'rejected'";
$rejectedResult = $conn->query($rejectedQuery);
$rejectedCount = $rejectedResult->fetch_assoc()['rejected_count'];

// Query to count total messages
$totalQuery = "SELECT COUNT(*) AS total_count FROM applicants";
$totalResult = $conn->query($totalQuery);
$totalCount = $totalResult->fetch_assoc()['total_count'];

// Close the database connection
$conn->close();?>
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
            margin-left:0;
            background-color:#2f323a;
          }
          .main-content {
            margin-left: 240px; /* Adjusted to match sidebar width */
            padding: 20px;
        }

        h1 {
            color: #073b72;
            font-weight:bold;
            text-transform:uppercase;
            margin-top:30px;
            margin-left:5%;
            
        }
        .dashboard {
      display: flex;
      justify-content: space-around;
      padding: 100px;
      margin-left:10%;
    }

    .box {
      background-color: #181010;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 50px;
      text-align: center;
      width: 70%;
      margin-left: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .menu{
            margin-top:10%;
          }
   

    .applied { background-color: #5F9EA0; }
    .approved { background-color:#DEB887;  }
    .denied { background-color:#FF7F50; }
    

    
     
    
        </style>
    </head>
    <body>
        <header class="header">
            <div class=left-area>
            <h2><span>Staff</span>leave</h2>
         </div>
         <div class=right-area>

          </div>
            
            </header>
        <div class="container">
            <div class="sidebar">
                <h2>Staff-Leave</h2>
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
        <div class="main-content">
            <h1>Dashboard</h1>
            
            </div>
            <div class="dashboard">
        
            
                <div class="box applied">
                  <h2>Applied</h2>
                  <p><?php echo $totalCount; ?></p>
                </div>
            
                <div class="box approved">
                  <h2>Approved</h2>
                  <p><?php echo $approvedCount; ?></p>
                </div>
            
                <div class="box denied">
                  <h2>rejected</h2>
                  <p><?php echo $rejectedCount; ?></p>
                </div>
              </div>
                
    </body>
    
</html>