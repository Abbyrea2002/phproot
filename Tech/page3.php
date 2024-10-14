<?php
session_start();


    //Save data to seesion 
    $_SESSION['cabdoorwindow'] = $cabdoorwindow;
    $_SESSION['bodydoor'] = $bodydoor;
    $_SESSION['oilleak'] = $oilleak;
    $_SESSION['greaseleak'] = $greaseleak;
    $_SESSION['coolantleak'] = $coolantleak;
    $_SESSION['fuelleak'] = $fuelleak;
    $_SESSION['indicator'] = $indicator;
    $_SESSION['windwipewash'] = $windwipewash;
    $_SESSION['horns'] = $horns;
    $_SESSION['heatdefrost'] = $heatdefrost;
    $_SESSION['mirrors'] = $mirrors;
    $_SESSION['steering'] = $steering;
    $_SESSION['lights'] = $lights;
    $_SESSION['reflectors'] = $reflectors;
    $_SESSION['suspension'] = $suspension;
    $_SESSION['tires'] = $tires;
    $_SESSION['wheelrimlug'] = $wheelrimlug;
    $_SESSION['battery'] = $battery;

    //Retrieve data from previous session
   
 
    
  
    $_SESSION['cabdoorwindow'] = isset($_POST['cabdoorwindow']) ? $_POST['cabdoorwindow'] : 0;
    $_SESSION['bodydoor'] = isset($_POST['bodydoor']) ? $_POST['bodydoor'] : 0;
    $_SESSION['oilleak'] = isset($_POST['oilleak']) ? $_POST['oilleak'] : 0;
    $_SESSION['greaseleak'] = isset($_POST['greaseleak']) ? $_POST['greaseleak'] : 0;
    $_SESSION['coolantleak'] = isset($_POST['coolantleak']) ? $_POST['coolantleak'] : 0;
    $_SESSION['fuelleak'] = isset($_POST['fuelleak']) ? $_POST['fuelleak'] : 0;
    $_SESSION['indicator'] = isset($_POST['indicator']) ? $_POST['indicator'] : 0;
    $_SESSION['windwipewash'] = isset($_POST['windwipewash']) ? $_POST['windwipewash'] : 0;
    $_SESSION['horns'] = isset($_POST['horns']) ? $_POST['horns'] : 0;
    $_SESSION['heatdefrost'] = isset($_POST['heatdefrost']) ? $_POST['heatdefrost'] : 0;
    $_SESSION['mirrors'] = isset($_POST['mirrors']) ? $_POST['mirrors'] : 0;
    $_SESSION['steering'] = isset($_POST['steering']) ? $_POST['steering'] : 0;
    $_SESSION['lights'] = isset($_POST['lights']) ? $_POST['lights'] : 0;
    $_SESSION['reflectors'] = isset($_POST['reflectors']) ? $_POST['reflectors'] : 0;
    $_SESSION['suspension'] = isset($_POST['suspension']) ? $_POST['suspension'] : 0;
    $_SESSION['tires'] = isset($_POST['tires']) ? $_POST['tires'] : 0;
    $_SESSION['wheelrimlug'] = isset($_POST['wheelrimlug']) ? $_POST['wheelrimlug'] : 0;
    $_SESSION['battery'] = isset($_POST['battery']) ? $_POST['battery'] : 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php include_once 'header.php';?>
  <?php include_once 'navtech.php';?>
    


<form action="page4.php" method="post">



  <h1> TOWED UNIT(S) </h1>

  <label for="bodydoort">
    <input type="checkbox" id="bodydoort" name="bodydoort" value="value 1">71 Body/Doors
  </label><br><br>
  <label for="tiedowns">
    <input type="checkbox" id="tiedowns" name="tiedowns" value="1">71 Tie-Downs
  </label><br><br>
  <label for="lightst">
    <input type="checkbox" id="lightst" name="lightst" value="1">34 Lights 
  </label><br><br>
  <label for="reflectorst">
    <input type="checkbox" id="reflectorst" name="reflectorst" value="1">34 Reflectors
  </label><br><br>


  <label for="suspensiont">
    <input type="checkbox" id="suspensiont" name="suspensiont" value="1">16 Suspension
  </label><br><br>
  <label for="tirest">
    <input type="checkbox" id="tirest" name="tirest" value="1">17 Tires
  </label><br><br>
  <label for="wheelrimlugt">
    <input type="checkbox" id="wheelrimlugt" name="wheelrimlugt" value="1">18 Wheels/Rims/Lugs
  </label><br><br>
  <label for="brakest">
    <input type="checkbox" id="brakest" name="brakest" value="1">13 Brakes
  </label><br><br>

  <label for="landinggear">
    <input type="checkbox" id="landinggear" name="landinggear" value="1">77 Landing Gear
  </label><br><br>
  <label for="kingpinupperplate">
    <input type="checkbox" id="kingpinupperplate" name="kingpinupperplate" value="1">59 King Pin/Upper Plate
  </label><br><br>
  <label for="fifthwheel">
    <input type="checkbox" id="fifthwheel" name="fifthwheel" value="1">59 Fifth-wheel(Dolly)
  </label><br><br>
  <label for="coupling">
    <input type="checkbox" id="coupling" name="coupling" value="1">59 Other Coupling Devices
  </label><br><br>

  <label for="rearendpro">
    <input type="checkbox" id="rearendpro" name="rearendpro" value="1">79 Rear-End Protection
  </label><br><br>
  <label for="other">
    <input type="checkbox" id="other" name="other" value="1">Other
  </label><br><br>
  <label for="nodefects">
    <input type="checkbox" id="nodefects" name="nodefects" value="1">NO DEFECTS
  </label><br><br>
  
  
  <input type="submit" value="Next">

</form>
<a href="page2.php">
    <button>Back</button>
</a>
</body>
<?php include_once 'footer.php';?>
</html>
 

 