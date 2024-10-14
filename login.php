<?php
// Database credentials
$servername = "localhost";
$username = "cl47-app1";
$password = "FM!VG./fT";
$dbname = "cl47-app1";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection and handle errors
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    // SQL query to retrieve hashed password
    $sql = "SELECT * FROM users WHERE user = '$user'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $storedHashedPassword = $user['password'];
    echo "Entered Password: $password<br>";
    echo "Stored Hashed Password: $storedHashedPassword<br>";
    // Verify the hashed password
    // if (password_verify($password, $storedHashedPassword)) {
    // Password is correct
    // Set user information in the session
    $_SESSION['users'] = $user['users'];
    $_SESSION['accesslevel'] = $user['accesslevel'];
    // Redirect based on access level
    if ($user['accesslevel'] == 1) {
    header("Location: login_level1.php");
    exit();
    } elseif ($user['accesslevel'] == 2) {
    header("Location: login_level2.php");
    exit();
    } elseif ($user['accesslevel'] == 0) {
    header("Location: php-users.php");
    exit();
    }
    } else {
    $error_message = "Invalid username or password";
    }
    // } else {
    // $error_message = "Invalid username, password or no account with those details";
    ///}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include_once 'header.php'; ?>
  
  <h2>Login</h2>
 <form action="menu.php" method="post">
   <label for="username">Username:</label>
   <input type="text" id="username" name="username" required><br>
   <label for="password">Password:</label>
   <input type="password" id="password" name="password" required><br>
   <input type="submit" value="Login">
 </form>
   <?php include_once 'footer.php'; ?>
</body>
</html>