<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Back-end validation for Page 1
$ttno = filter_input(INPUT_POST, 'ttno', FILTER_SANITIZE_STRING);
$mileage = filter_input(INPUT_POST, 'mileage', FILTER_SANITIZE_STRING);
$trailerno = filter_input(INPUT_POST, 'trailerno', FILTER_SANITIZE_STRING);
$dollyno = filter_input(INPUT_POST, 'dollyno', FILTER_SANITIZE_STRING);
$trailerno2 = filter_input(INPUT_POST, 'trailerno2', FILTER_SANITIZE_STRING);
$location1 = filter_input(INPUT_POST, 'location1', FILTER_SANITIZE_STRING);
if (empty($ttno) || empty($mileage) || empty($trailerno) || empty($dollyno) || empty($trailerno2) || empty($location1)) {
die("Please fill in all fields.");
}
// Save data to session
$_SESSION['ttno'] = $ttno;
$_SESSION['mileage'] = $mileage;
$_SESSION['trailerno'] = $trailerno;
$_SESSION['dollyno'] = $dollyno;
$_SESSION['trailerno2'] = $trailerno2;
$_SESSION['location1'] = $location1;
}
?>

 

<!DOCTYPE html> 

<html lang="en"> 

<head> 
<link rel="stylesheet" href="style.css">

 <meta charset="UTF-8"> 

 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

 <title> Page 2</title>

</head> 

<body> 
    <?php include_once 'header.php';?>
    <?php include_once 'navtech.php';?>

<form action="page3.php" method="post"> 


 

  <h1> POWER UNIT </h1>
  <h3> CHECK DEFAULTS ONLY. Explain in REMARKS</h3>
  <h3> GENERAL CONDITION </h3>
  <label for="cabdoorwindow">
    <input type="checkbox" id="cabdoorwindow" name="cabdoorwindow" value="1"> 02 Cab/Doors/Windows
  </label><br><br>
  <label for="bodydoor">
    <input type="checkbox" id="bodydoor" name="bodydoor" value="1"> 02 Body/Doors
  </label><br><br>
  <label for="oilleak">
    <input type="checkbox" id="oilleak" name="oilleak" value="1"> Oil leak
  </label><br><br>
  <label for="greaseleak">
    <input type="checkbox" id="greaseleak" name="greaseleak" value="1"> Grease leak
  </label><br><br>
  <label for="coolantleak">
    <input type="checkbox" id="coolantleak" name="coolantleak" value="1">42  Coolant leak
  </label><br><br>
  <label for="fuelleak">
    <input type="checkbox" id="fuelleak" name="fuelleak" value="1">44 Fuel leak
  </label><br><br>

  <h3> IN-CAB </h3>
  <label for="indicator">
    <input type="checkbox" id="indicator" name="indicator" value="1">03 Gauges/Warning Indicators
  </label><br><br>
  <label for="windwipewash">
    <input type="checkbox" id="windwipewash" name="windwipewash" value="1">02 Windshield Wipers/Washers
  </label><br><br>
  <label for="horns">
    <input type="checkbox" id="horns" name="horns" value="1">54 Horns
  </label><br><br>
  <label for="heatdefrost">
    <input type="checkbox" id="heatdefrost" name="heatdefrost" value="1">01 Heater/Defroster
  </label><br><br>
  <label for="mirrors">
    <input type="checkbox" id="mirrors" name="mirrors" value="1">02 Mirrors
  </label><br><br>
  <label for="steering">
    <input type="checkbox" id="steering" name="steering" value="1">15 Steering
  </label><br><br>

  <h3> EXTERIOR </h3>
  <label for="lights">
    <input type="checkbox" id="lights" name="lights" value="1">34 Lights 
  </label><br><br>
  <label for="reflectors">
    <input type="checkbox" id="reflectors" name="reflectors" value="1">34 reflectors
  </label><br><br>
  <label for="suspension">
    <input type="checkbox" id="suspension" name="suspension" value="1">16 Suspension
  </label><br><br>
  <label for="tires">
    <input type="checkbox" id="tires" name="tires" value="1">17 Tires
  </label><br><br>
  <label for="wheelrimlug">
    <input type="checkbox" id="wheelrimlug" name="wheelrimlug" value="1">18 Wheels/Rims/Lugs
  </label><br><br>
  <label for="battery">
    <input type="checkbox" id="battery" name="battery" value="1">32 Battery
  </label><br><br>

  <input type="submit" value="Next"> <br>

 
</form> 
<a href="page1.php">
    <button>Back</button>
</a>
</body> 
<?php include_once 'footer.php';?>

</html> 