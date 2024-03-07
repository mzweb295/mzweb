<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($conn, 'grand task');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"]; 
	$email = $_POST["email1"];
    $password = $_POST["password1"];
    $emp_name = $_POST["emp_name"];
    $emp_salary = $_POST["emp_salary"];
    $emp_address = $_POST["emp_address"];

    $sql = "INSERT INTO grand1 (id,email, password, emp_name, emp_salary, emp_address) VALUES ('$id','$email', '$password', '$emp_name', '$emp_salary', '$emp_address')";
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
        mysqli_close($conn);
        header("Location: table1.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MZ WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center mt-5">FORM</h1>
    <form class="row g-3" method="post">
        <div class="col-md-6">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email1">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password1">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Employee Name</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Enter employee name" name="emp_name">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Employee Salary</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Enter employee salary" name="emp_salary">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Employee Address</label>
            <input type="text" class="form-control" id="inputCity" name="emp_address">
        </div>
        <div class="col-12">
            <button href="table1.php "type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>
</html>
