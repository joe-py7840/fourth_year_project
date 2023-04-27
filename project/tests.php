<!DOCTYPE html>
<html lang="en">
<head>
    <style>

nav a{
            margin: 25px;
            text-decoration: none;
            color: crimson;
            padding: 10px;
            font-size: 30px;
            width: 300px;
            background-color: transparent;
            transition: ease-out .4s;
            box-shadow: inset 0 0 0 0 yellow;
        }
        nav  a:hover{
            box-shadow: inset 300px 0 0 0 green;
            color: white;
            border-radius: 8px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test yourself</title>
</head>
<body>
<nav><a href="home.php">Home<Programming</a>
    <a href="programming.php">Programming</a>
    <!-- <a href="security.php">Cyber Security</a> -->
    <a href="logout.php" class="logout">Logout</a></nav>
    <form action="" name="test" id="test">
        
  
<?php

// Array of possible variable types
$variable_types = array("int", "float", "str", "bool");

// Array of possible values for each variable type
$int_values = array(1, 2, 3, 4, 5);
$float_values = array(1.1, 2.2, 3.3, 4.4, 5.5);
$str_values = array("apple", "banana", "cherry", "date", "elderberry");
$bool_values = array(true, false);

// Randomly select variable type and example value
$random_variable_type = $variable_types[array_rand($variable_types)];
$random_example_value = "";

switch ($random_variable_type) {
  case "int":
    $random_example_value = $int_values[array_rand($int_values)];
    break;
  case "float":
    $random_example_value = $float_values[array_rand($float_values)];
    break;
  case "str":
    $random_example_value = $str_values[array_rand($str_values)];
    break;
  case "bool":
    $random_example_value = $bool_values[array_rand($bool_values)];
    break;
}

// Check if user has submitted a guess
if (isset($_POST['guess'])) {
  $user_guess = $_POST['guess'];
  
  // Check if user's guess is correct
  if ($user_guess == $random_variable_type) {
    echo "Correct! ";
    
    // Increase user's score and display it
    $score = $_POST['score'] + 1;
    echo "Score: " . $score . "<br><br>";
    
    // Generate new example for the user to guess
    $random_variable_type = $variable_types[array_rand($variable_types)];
    
    switch ($random_variable_type) {
      case "int":
        $random_example_value = $int_values[array_rand($int_values)];
        break;
      case "float":
        $random_example_value = $float_values[array_rand($float_values)];
        break;
      case "str":
        $random_example_value = $str_values[array_rand($str_values)];
        break;
      case "bool":
        $random_example_value = $bool_values[array_rand($bool_values)];
        break;
    }
  } else {
    // If guess is incorrect, display message and give user another chance
    echo "Incorrect, try again. ";
    echo "Score: " . $_POST['score'] . "<br><br>";
  }
}

?>

<html>
  <head>
    <title>Python Variable Type Guessing Game</title>
  </head>
  <body>
    <h1>Python Variable Type Guessing Game</h1>
    <p>Guess the variable type of the following value:</p>
    <p><strong><?php echo $random_example_value; ?></strong></p>
    <form method="post">
      <label for="guess">Guess:</label>
      <input type="text" name="guess" id="guess">
      <input type="hidden" name="score" value="<?php echo isset($_POST['score']) ? $_POST['score'] : 0; ?>">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>

</body>
</html>