
<!DOCTYPE html>
<html lang="en">
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        font-family: Arial, sans-serif;
        color: #444;
    }
    th, td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
        color: #555;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
     .navbar {
            background-color: black;
            position: sticky;
            top: 0;
            z-index: 999;
        }
        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: white;
        }
        .navbar li {
            float: left;
            color: black;
        }
        .navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar li a:hover {
            background-color: #111;
        }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="navbar">
        <ul>
            <li><a href="crud.php">Home</a></li>
        </ul>
    </div>
    <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userinfo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select data from the "users" table
$sql = "SELECT firstname, lastname, country, subject FROM users";
$result = mysqli_query($conn, $sql);

// Display the data in a table
if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Country</th><th>Subject</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["country"]."</td><td>".$row["subject"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
mysqli_close($conn);
?>
    
</body>
</html>
