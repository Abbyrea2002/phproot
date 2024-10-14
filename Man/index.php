<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title> Tutorials </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
    <?php include_once 'header.php';?>
    <?php include_once 'time_of_day_message.php';?>
    <h1> Welcome to HGV Vehicle & Engineering Equiptment Insepection site</h1>
    
    
    <?php include_once 'login.php';?>

    

    <?php include_once 'footer.php'; ?>
    
    <?php
    // concatinate statement on multiple lines
    echo "<br>" . (new \Date()) ->format('Y-m-d H:i:s'); ?>
   
    
  </body>
</html>