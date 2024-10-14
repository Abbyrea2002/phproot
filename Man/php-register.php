<?php
// Get the form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validate the form data
if ($password != $confirm_password) {
    die("Passwords do not match.");
}

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Save the user's information to the database
$db_host = "localhost";
$db_username = "cl47-app1";
$db_password = "FM!VG./fT";
$db_name = "cl47-app1";


$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (user, email, password) VALUES ('$username', '$email', '$hashed_password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
    echo "<a href='php-users.php'>Click here to view users</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
