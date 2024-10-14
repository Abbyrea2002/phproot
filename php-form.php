<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
    <script src="script.js"></script>
</head>
<body>
<?php include_once 'header.php';?>
  <?php include_once 'navman.php';?>

    <form name="registrationForm" method="POST" action="php-register.php" onsubmit="return validateForm()">
        <label>Username:</label>
        <input type="text" name="username"><br><br>

        <label>Email:</label>
        <input type="email" name="email"><br><br>

        <label>Password:</label>
        <input type="password" name="password"><br><br>

        <label>Confirm Password:</label>
        <input type="password" name="confirm_password"><br><br>

        <label> Digit Pin: </label>
        <input type="pin" name="digit_pin">

        <input type="submit" name="submit" value="Register">
    </form>

</body>
<?php include_once 'footer.php';?>
</html>
