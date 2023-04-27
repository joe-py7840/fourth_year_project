<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userinfo";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $country = $_POST["country"];
  $subject = $_POST["subject"];

  // Insert the user information into the database
  $sql = "INSERT INTO users (firstname, lastname, country, subject) VALUES ('$firstname', '$lastname', '$country', '$subject')";
  if ($conn->query($sql) === TRUE) {
    echo "Information received. Thanks for the feedback";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close the database connection
$conn->close();
?>
