<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $deptname=$_POST["deptname"];
    $fcode = $_POST["fcode"];
    $email = $_POST["email"];
    $desig=$_POST["designation"];
    $address = $_POST["address"];
    $ph_no = $_POST["phno"];
    $password = $_POST["pass"];
    $confirm=$_POST["confirm_password"];

    if(!empty($email)&& !empty($password))
    {
        $query="INSERT into register(name,deptname,faculty_code,email,designation,address,phno, pass,confirm_password) VALUES ('$name','$deptname','$fcode','$email','$desig','$address','$ph_no', '$password', '$confirm')";
        mysqli_query($conn,$query);
        echo "<div class='alert alert-success'>Registered successfully</div>";

    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         body {
            background-repeat:no-repeat;
            background-size:100% 100%;
            background-attachment:fixed;
        }
        .card {
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:800px;
            height:620px;
            padding:60px 30px;
            box-sizing:border-box;
            border: 1px solid #ced4da;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background:rgba(0,0,0,0.5);
        }
        .card-header {
            color: white;
            text-align: center;
            border-bottom: 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            padding: 20px;

            
        }
        .form-group {
            margin-bottom: 20px;
            color:white;
        }
        
        

        </style>
</head>
<body background="staffs.jpg">
<form action="register.php" method="post">
    <button type="submit" class="btn" ><a href="home.html">Home</a></button>
<div class="container">
    <div class="card">
        <div class="card-header">
        <h2>Registration</h2>
    </div>
    <div class="card-body">
    <form action="register.php" method="post">
        <div class="form-group">
            <label for="name">Full Name:
            <input type="text" size="23" class="form-control" name="name" placeholder="Enter your name" required></label>
        
            <label for="deptname">Department Name:
            <input type="text" size="23" class="form-control" name="deptname" placeholder="Enter your department name"  required></label>
        
            <label for="fcode">Faculty code:
            <input type="text" size="23" class="form-control" name="fcode" placeholder="Enter Faculty Code"  required></label>
        </div>
        <div class="form-group">
            <label for="email">Email:
            <input type="email" size="39" class="form-control" name="email" placeholder="Enter email"  required></label>
       
            <label for="phno">Phone Number:
            <input type="text" size="39" class="form-control" name="phno" placeholder="Enter your phone number"  required></label>
        </div>
        <div class="form-group">
            <label for="designation">Designation:
            <input type="text" size="30" class="form-control" name="designation" placeholder="Enter your designation"  required></label>

            <label for="address">Address:
            <input type="text" size="48" class="form-control" name="address" placeholder="Enter address"required></label>
        </div>
        <div class="form-group">
            <label for="password">Password:
            <input type="password" size="39" class="form-control" name="pass" placeholder="Enter password"required></label>
        
            <label for="confirm_password">Confirm Password:
            <input type="password" size="39" class="form-control" name="confirm_password" placeholder="Confirm password" required></label>
        </div>
        <center><button type="submit" class="btn btn-primary" name="register">Register</button></center>
    </form>
    <center><p class="form-group" >Already have an account? <a href="login.php"><br/>Login here</a></p><center>
     </div>
    </div>
</div>
</form>
</body>
</html>
