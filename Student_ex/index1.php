<html>
<head><title>crud operations</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
<h2>New Student</h1>
<form method="post">
<div class="row mb-3">
	<label class="col-sm-3 col-form-label">USN</label>
	<div class="col-sm-6">
		<input type="text" class="form-control" name="usn" required>
	</div>
</div>
<div class="row mb-3">
	<label class="col-sm-3 col-form-label">Name</label>
	<div class="col-sm-6">
		<input type="text" class="form-control" name="name" required>
	</div>
</div>
<div class="row mb-3">
	<label class="col-sm-3 col-form-label">Gender</label>
	<div class="col-sm-6">
		<input type="text" class="form-control" name="gender" required>
	</div>
</div>
<div class="row mb-3">
	<label class="col-sm-3 col-form-label">Age</label>
	<div class="col-sm-6">
		<input type="text" class="form-control" name="age" value="">
	</div>
</div>
<div class="row mb-3">
	<label class="col-sm-3 col-form-label">email</label>
	<div class="col-sm-6">
		<input type="text" class="form-control" name="email" required>
	</div>
</div>
<div class="row mb-3">
	<label class="col-sm-3 col-form-label">Address</label>
	<div class="col-sm-6">
		<input type="text" class="form-control" name="address" required>
	</div>
</div>
<div class="row mb-3">
<div class="offset-sm-3 col-sm-3 d-grid">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
	<div class="col-sm-3 d-grid">
	   <a class="btn btn-outline-primary" href="readb.php" role="button">cancel</a>
	</div>
</div>
</form>
</div>
</body>
</html>

<?php
include('databaselink.php');
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$usn = $_POST["usn"];
    $name = $_POST["name"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
    $email = $_POST["email"];
	$address = $_POST["address"];
    
    $sql = "INSERT INTO read1(usn ,name,gender,age, email,address) VALUES ('$usn','$name','$gender','$age','$email','$address')";
    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>