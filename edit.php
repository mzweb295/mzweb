
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MZ WEB</title>
    <link rel="icon" type="image/png" href="images/jo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/jo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/jo.png">
</head>
<body><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gym persons</title>
  </head>
  <body>
    <h1>
  </body>
<?php
// Database connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

// Select database
mysqli_select_db($conn, 'grand task');

// Initialize variables to store values from the database
$id = $email = $password = $emp_name = $emp_salary = $emp_address = '';

// Check if ID parameter is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve data for the specified employee
    $sql = "SELECT * FROM grand1 WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Assign retrieved values to variables
        $id = $row['id'];
        $email = $row['email'];
        $password = $row['password'];
        $emp_name = $row['emp_name'];
        $emp_salary = $row['emp_salary'];
        $emp_address = $row['emp_address'];
    } else {
        echo "Employee not found.";
    }
}

// Close database connection
mysqli_close($conn);
?>
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
    <h1 class="text-center mt-5">FORM</h1><br>	
    <form class="row g-3" method="post" action="table1.php">
        <div class="col-md-6">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email1" value="<?php echo $email; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password1" value="<?php echo $password; ?>">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Employee Name</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Enter employee name" name="emp_name" value="<?php echo $emp_name; ?>">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Employee Salary</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Enter employee salary" name="emp_salary" value="<?php echo $emp_salary; ?>">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Employee Address</label>
            <input type="text" class="form-control" id="inputCity" name="emp_address" value="<?php echo $emp_address; ?>">
        </div>
        <div class="col-12">
          <center>  <button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>
</html>
<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($conn, 'grand task');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Debug statement to verify form submission
    echo "Form submitted successfully.";

    // Check if data is being sent
    var_dump($_POST);

    $id = $_POST['id'];
    $email = $_POST['email1'];
    $password = $_POST['password1'];
    $emp_name = $_POST['emp_name'];
    $emp_salary = $_POST['emp_salary'];
    $emp_address = $_POST['emp_address'];

    // Debug statement to check form data
    echo "ID: $id, Email: $email, Password: $password, Emp Name: $emp_name, Emp Salary: $emp_salary, Emp Address: $emp_address";

    // Update data in the database
    $data = "UPDATE grand1 SET email=$email, password=$password, emp_name=$emp_name, emp_salary=$emp_salary, emp_address=$emp_address WHERE id=$id";
    
    // Debug statement to check SQL query
    echo "SQL Query: $data";

    // Prepare statement
    $stmt = mysqli_prepare($conn, $data);
    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sssssi", $email, $password, $emp_name, $emp_salary, $emp_address, $id);
        
        // Execute statement
        if (mysqli_stmt_execute($stmt)) {
            // Check if any rows were affected
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo "<script>alert('Record updated')</script>";
                header("Location: table1.php");
                exit();
            } else {
                echo "No rows were affected.";
            }
        } else {
            // Print error message if SQL execution fails
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        // Print error message if statement preparation fails
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
<body>
<br><br><br><br>
   
 <h1><br>MZ Web Developer</h1>
    <p>Welcome to a world of digital innovation and web development excellence. I am here to transform your ideas into engaging online experiences, bringing creativity and technical precision to every project.</p>
</header>

<section id="services">
    <h2>Services Offered</h2>
    <ul>
        <li>Custom Web Development</li>
        <li>Responsive Design</li>
        <li>E-Commerce Development</li>
        <li>Web Performance Optimization</li>
        <li>Maintenance and Support</li>
    </ul>
</section>

<section id="why-choose">
    <h2>Why Choose MZ Web Developer?</h2>
    <ul>
        <li>Innovative Solutions</li>
        <li>Client-Centric Approach</li>
        <li>Reliability</li>
        <li>Continuous Improvement</li>
    </ul>
</section>

<section id="explore">
    <h2>Explore the Possibilities</h2>
    <p>Whether you're a startup seeking a digital launchpad or an established business in need of a website makeover, I'm ready to turn your vision into reality. Explore my portfolio and let's embark on a journey to elevate your online presence.</p>
</section>

<section id="contact">
    <h2>Contact</h2>
    <p>Ready to discuss your next project? Feel free to reach out via phone at <a href="https://wa.link/pdj3no">03318400882</a> or use the contact form on this site.</p>
</section>

<footer>
    <p>Let's build something extraordinary together! 🚀</p>
</footer>

</body>
</html>
