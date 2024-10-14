<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="style.css">
  <style>
    form{
        display: inline-block;
        margin: auto;
      

    }
    div{
        
        margin: auto;
        width: 20%;
        padding: 10px;
        
    }
  </style>
</head>
<body>
 
<?php include_once 'header.php';?>
  
<div id="content">
   <form action="login_level1.php">
      <button type="submit" class="button">Manager</button>
    </form>
    <form action="login_level2.php">
      <button type="submit" class="button" >Technician</button>
    </form>
  </div>
  <a href="logout.php">
    <button>Log out</button>
</a>
  <?php include_once 'footer.php';?>
</body>
</html>