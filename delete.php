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

// Check if ID parameter is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete record from the database
    $sql = "DELETE FROM grand1 WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        // Redirect to the table page after deletion
        header("Location: table1.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
