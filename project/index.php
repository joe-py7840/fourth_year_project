<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit; 
}
?>
<!DOCTYPE html>
<style>
      * {
        box-sizing: border-box;
      }
      body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-color: #f2f2f2;
      }
      h2 {
        text-align: center;
        margin-top: 50px;
      }
      form {
        width: 80%;
        margin: 0 auto;
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        background-color: #f2f2f2;
        font-size: 16px;
      }
      button[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
      }
      button[type="submit"]:hover {
        background-color: #3e8e41;
      }
      .container {
        margin-top: 20px;
        text-align: center;
      }
      .container a {
        text-decoration: none;
        color: #4caf50;
        font-weight: bold;
        transition: all 0.3s ease;
      }
      .container a:hover {
        color: #3e8e41;
      }
      .success_message {
        color: #155724;
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        padding: 10px;
        margin-bottom: 10px;
      }
      .error_message {
        color: #721c24;
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        padding: 10px;
        margin-bottom: 10px;
      }
    </style><html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index Page</title>

</head>

<body>

<form action="" method="post">
<h2>User Login</h2>

<div class="container">
<label for="email"><b>Email</b></label><br>
<input type="email" placeholder="Enter email" id="email" name="user_email" required><br/><br>

<label for="password"><b>Password</b></label><br>
<input type="password" placeholder="Enter password" id="password" name="user_password" required><br><br>

<button type="submit">Login</button>
</div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
<div class="container" >
Don't have an account? <a href="signup.php">Register</</a>
</div>
</form>
</body></html>