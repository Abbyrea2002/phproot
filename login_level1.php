<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Access Level 1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include_once 'header.php'; ?>
  <?php include_once 'navman.php'; ?>
  <h2>Welcome <?php echo $_SESSION['user']; ?>!</h2>
  <p>You have access to the Manager Area, use the above links to navigate this area.</p>
  <?php include_once 'footer.php'; ?>
</body>
</html>