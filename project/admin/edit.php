<?php 
session_start();
$connect=mysqli_connect("localhost","root","","verify_user");
if (isset($_GET["edit"])) {
    $email=$_GET["edit"];
    $search_users=mysqli_query($connect,"SELECT * FROM users where user_email='$email'");
    $users_found=mysqli_fetch_assoc($search_users);
    $username=$users_found["username"];
    $email=$users_found["user_email"];
    if (isset($_POST["edit"])) {
        $username_new=$_POST["username"];
        $email_new=$_POST["user_email"];
        $update=mysqli_query($connect,"UPDATE users SET username='$username_new',user_email='$email_new' where user_email='$email'");
        $message="<div class='alert alert-success text-center'>User edited successfully</div>";
        header("location:crud.php?ms=$message");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <style>
        form {
            text-align: center;
            margin-top: 5%;
            border-radius:10px;
            border-style: outset;
            margin-right: 650px; 
            margin-left: 650px;
            height: 45vh;
            padding-top: 2%
            
    
        }
        button {
        cursor: pointer;
        width: 70px;
        height: 30px;
        border: none;
        border-radius: 8px;
        box-shadow: 0 0 0 yellow;
        transition: ease-out .3s;
        box-shadow: inset 0 0 0 yellow;

    }
    button:hover {
        box-shadow: inset 70px 0 0 0 crimson;
    }
        success_message{
            color: green;
        }
    </style>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up Form</title>

</head>

<body>
    

<form action="" method="post">
<div class="container">
<label for="username"><b>Username</b></label><br>
<input type="text" placeholder="Enter username" id="username" name="username" required value="<?php echo $username;?>"><br><br>

<label for="email"><b>Email</b></label><br>
<input type="email" placeholder="Enter email" id="email" name="user_email" required value="<?php echo $email;?>"><br><br>
<button type="submit" name="edit">Edit</button>
</div>
</form>
</body></html>