<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
    if(!empty($_POST['email'])&& !empty($_POST['pass']))
    {
       
        

        $email = $_POST["email"];
        $password = $_POST["pass"];
        $designate='hod';
        
        $query=mysqli_query($conn,"SELECT * FROM register WHERE email='$email'");
        $result=mysqli_fetch_array($query);
        
        if($result>0)

            { 
                 
                session_start();
                $_SESSION["email"]=$email;
                $_SESSION["name"]=$result['name'];  
                if($result['designation']=="hod")
                {
                    
                    header("Location:hod.php");
                }elseif($result['designation']=="staff"){
                    header("Location:dashboard.php");
                }else{
                    echo "invalid user and password";
                }
                
           
    }
}
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-repeat:no-repeat;
            background-size:100% 100%;
            background-attachment:fixed;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
        }

        .card {
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:350px;
            height:480px;
            padding:40px 40px;
            box-sizing:border-box;
            border: 1px solid #ced4da;
            border-radius: 10px;
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

        .btn-primary {
            background-color: ;
            border: 1px solid #007bff;
        }

        .btn-primary:hover {
            background-color:;
            border: 1px solid #0056b3;
        }
    </style>
</head>

<body background="login2.jpg">
<button type="submit" class="btn" ><a href="home.html">Home</a></button>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Login Form</h3>
        </div>
        <div class="card-body">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="pass" placeholder="Password" required>
                </div>
                <center><button type="submit" class="btn btn-primary btn-block" name="login" >Login</button></center>
            </form>
            <center><p class="form-group" >Don't have an account? <a href="register.php"><br/>Register here</a></p><center>
        </div>
    </div>
</div>

</body>

</html>
