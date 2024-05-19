<?php
	$Username = $_POST['username'];
	$email = $_POST['email'];
	$Password = $_POST['password'];
    echo "hello";
	// Database connection
 

  $conn = new mysqli('localhost:4306', 'root', '', 'login');

  if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
  }
  echo 'Connected successfully'; 

$sql = "INSERT INTO user (Username, email, Password)
VALUES ('$Username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";
  header('Location: /sholar/sholar.php'); // Adjust the path as needed
  exit(); 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

	?>