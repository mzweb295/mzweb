
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MZ WEB</title>
    <link rel="icon" type="image/png" href="image/jo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/jo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/jo.png">
</head>
<body><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1">
    <title>gym persons</title>
  </head>
  <body>
    <h1>
  </body>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <h1></h1>
  </body>
</html><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($conn, 'grand task');
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM grand1 WHERE id=$id";
    mysqli_query($conn, $sql);
    header("Location: table1.php");
    exit();
}

$sql = "SELECT * FROM grand1";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
            background-color:green; /* Change background color */
        }
        
        .container {
            background-color: pink; /* Change container background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow for a card-like effect */
        }
        
        .btn-register {
            background-color: #28a745; /* Green color for register button */
            border-color: #28a745;
        }
        
        .btn-register:hover {
            background-color: black; /* Darker green on hover */
            
            border-color: black;
        }
        
        .table {
            background-color: aqua; /* White background for table */
        }
        
        .table th, .table td {
            vertical-align: middle; /* Align content vertically */
        }
        
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: aqua; /* Alternate row color */
        }
        
        .btn-group {
            aqua-space: nowrap; /* Prevent button text from wrapping */
        }
    </style>
</head>
<body>
      
        
    <div class="container">
        <h2 class="text-center mb-4">Employee Table</h2>
        <a href="procesing1.php"  class="btn btn-register mb-3">Register</a>
        <table class="table table-striped" id="1">
		
            <thead>
                <tr>
		
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Emp_Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
		
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
			      <td><?php echo $row['id']; ?></td>
				  
	
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['emp_name']; ?></td>
                        <td><?php echo $row['emp_salary']; ?></td>
                        <td><?php echo $row['emp_address']; ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
		<script>
		$(document).ready(function)()
		{
			$('#1').DataTable();
		});
		</script>
		
		
		
		
		
		
		
		
		
		
		
    </div>
</body>
</html>
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

               