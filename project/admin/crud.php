<?php
    $connect=mysqli_connect("localhost","root","","verify_user");
    if ($connect) {
        $no=0;
        $search_users=mysqli_query($connect,"SELECT * FROM users");
        if (isset($_GET["delete"])) {
            $email=$_GET["delete"];
            $delete_user=mysqli_query($connect,"DELETE FROM users WHERE user_email='$email'");
            $message="<div class='alert alert-danger text-center'>User deleted successfully</div>";
            header("location:crud.php?ms=$message");
        }
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .navbar {
            background-color: white;
            position: sticky;
            top: 0;
            z-index: 999;
        }
        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            border-radius: 8px;
        }
        .navbar li {
            float: left;
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>
<body class="container">
<nav class="navbar">
    <ul>
      <li><a href="user_feedback.php">Feedback</a></li>

    </ul>
  </nav>
    <div class="card container mt-5">
        <h1 class="text-center text-danger">Registered users</h1>
    </div>
    <div class="table container">
        <table class="table-responsive table-stripped" id="table">
            <?php
                if (isset($_GET["ms"])) {
                    $message=$_GET["ms"];
                    echo $message;
                }

            ?>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Email address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while ($row=mysqli_fetch_assoc($search_users)) {
                    $no+=1;
                    $email=$row["user_email"];
                           ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row["username"];?></td>
                    <td><?php echo $email;?></td>
                    <td><a href="edit.php?edit=<?php echo $email;?>" class="btn btn-success">Edit</a></td>
                    <td><a href="crud.php?delete=<?php echo $email;?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <script>
    $(document).ready( function () {
    $('#table').DataTable();
} );
    </script>
</body>
</html>