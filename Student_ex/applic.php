<?php
session_start();
include("db.php");

if (isset($_POST["submit"])) {
    $name = $_POST["iname"];
    $ltype=$_POST["leavetype"];
    $f = $_POST["from"];
    $daytype1 = $_POST["dtype"];
    $t=$_POST["to"];
    $daytype2 = $_POST["ttype"];
    $rea=$_POST["reason"];
     
    $name =   $_SESSION["email"];
 
    $sql="INSERT INTO applicants(usname,leavetype,frm,daytype1,too,daytype2,reason) VALUES ('$name','$ltype','$f','$daytype1','$t','$daytype2','$rea')";
 
    $result=mysqli_query($conn,$sql);
    if ($result) {
      echo '<script type="text/javascript">';
      echo 'alert("Applied successfully");';
      echo 'window.location.href="dashboard.php"';
      echo '</script>';
    }else
    {

     echo "Error";
    }
    

    
}
?>
<?php
  $sel="SELECT * FROM register";
  $query=mysqli_query($conn,$sel);
  $resul=mysqli_fetch_assoc($query);
  ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
            margin-top:4%;
            margin-left:-55px;
            background-color:#2f323a;
          }
          .menu li a{
            color:white;
          }
          .card{
            position:absolute;
            top:70%;
            left:60%;
            transform:translate(-50%,-50%);
            width:800px;
            height:750px;
            padding:40px 30px;
            box-sizing:border-box;
            border: 1px solid #ced4da;
            border-top:5px solid #2f323a;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background:#F0F8FF;
          }
          .card-body {
            padding: 20px;

            
        }
          .form-group {
            margin-left: 2px;
            color:white;
            
        }

        label{
           font-family:cursive;
           font-size:20px;
           font-weight:500;
           color:black;
           
        }
        input[type="text"]
        {
          border:1px solid #2f323a;
        }
        input[type="date"]
        {
          border:1px solid #2f323a;
        }
        textarea[id="reason"]
        {
          border:1px solid #2f323a;
        }
        input[type="radio"]{
           display:inline-flex;
           align-items: center;
           cursor:pointer;
           margin-right: 10px;
        }
        .icons{
            margin-bottom:25%;
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
      <div class="card">
        <div class="card-body">
         <form action="applic.php" method="POST">
          <div class="form-group">
            <label for="name">Name:<br/></label>
            <?php $name = $_SESSION["name"] ; echo" 
            <input type='text' value= '$name' class='form-control' name='iname'  required>" ;?>
           </div>
         <div class="form-group">
            <label for="leavetype">Leave type:<br/>
            <label><input type="radio" id="leavetype" name="leavetype" value="sick leave" class="radio__input" required>Sick leave&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <label><input type="radio" id="leavetype" name="leavetype" value="vacation leave" class="radio__input" required>Vacation leave&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <label><input type="radio" id="leavetype" name="leavetype" value="other leave" class="radio__input" required>Other type leave&nbsp;&nbsp;</label>
         </div>
         <div class="form-group">
            <label for="from">From:<br/>
            <input type="date"   name="from" class="form-control" required></label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        
            <label for="dtype">Day type:<br/>
           <label><input type="radio" id="dtype" name="dtype" value="full" class="radio__input" required>Full&nbsp;&nbsp;</label>
           <label><input type="radio" id="dtype" name="dtype" value="first half" class="radio__input" required>First half&nbsp;&nbsp;</label>
           <label><input type="radio" id="dtype" name="dtype" value="second half" class="radio__input" required>Second half&nbsp;&nbsp;</label>
         </div>
         <div class="form-group">
            <label for="to">To:<br/>
            <input type="date" name="to" class="form-control" required></label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        
            <label for="ttype">Day type:<br/>
              <label><input type="radio" id="ttype" name="ttype" value="full" class="radio__input" required>Full&nbsp;&nbsp;</label>
              <label><input type="radio" id="ttype" name="ttype" value="first half" class="radio__input" required>First half&nbsp;&nbsp;</label>
              <label><input type="radio" id="ttype" name="ttype" value="second half" class="radio__input" required>Second half&nbsp;&nbsp;</label>
         </div>
         <div class="form-group">
            <label for="reason">Reason For Leave:<br/></label>
            <textarea id="reason" name="reason" rows="5" cols="50" class="form-control" required></textarea>
         </div>
        <center><button type="submit" class="btn btn-primary" name="submit">Apply</button></center>
        </form>
    </div>
    </div> 
  </div>   
</body>
    
</html>