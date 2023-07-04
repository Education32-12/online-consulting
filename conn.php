<?php

include 'dbconnect.php';

?>



<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "consultancy";

$conn = mysqli_connect($server,$username,$password,$database);
// Assuming you have already established a database connection

// Retrieve the form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];



// Create an SQL query to insert the data into the table
$query = "INSERT INTO resgistration(firstName, lastName, gender, email, password, number) 
          VALUES ('$firstName', '$lastName', '$gender', '$email', '$password', '$number')";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the insertion was successful
if ($result) {
  echo "Data inserted successfully.";
  echo '<button onclick="location.href=\'login.php\'">Login</button>';
} else {
  echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>