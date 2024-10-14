<?php
ini_set('display_errors', 1);
ini_set('display_startup', 1);
error_reporting(E_ALL);
session_start();

$_SESSION['remarks'] = $remarks;
$_SESSION['date1'] = $date1;
$_SESSION['name1'] = $name1;
$_SESSION['empno1'] = $empno1;
$_SESSION['date2'] = $date2;
$_SESSION['name2'] = $name2;
$_SESSION['empno2'] = $empno2;
$_SESSION['madate'] = $madate;
$_SESSION['repairmade'] = $repairmade;
$_SESSION['norepairsneeded'] = $norepairsneeded;
$_SESSION['RO'] = $RO;
$_SESSION['certifiedby'] = $certifiedby;
$_SESSION['malocation'] = $malocation;
$_SESSION['shopremarks'] = $shopremarks;
  // Retrieve data from previous session






function insertIntoDatabase($ttno, $mileage, $trailerno, $dollyno, $trailerno2, 
$location1, $cabdoorwindow, $bodydoor, $oilleak, $greaseleak, $coolantleak, $fuelleak, 
$indicator, $windwipewash, $horns, $heatdefrost, $mirrors, $steering, $lights, 
$reflectors,$suspension, $tires, $wheelrimlug, $battery, $bodydoort, $tiedowns, $lightst, 
$reflectorst, $suspensiont, $tirest, $wheelrimlugt, $brakest, $landinggear, $kingpinupperplate, 
$fifthwheel, $coupling, $rearendpro, $other, $nodefects, $remarks, $date1, $name1, $empno1, $date2, 
$name2, $empno2, $madate, $repairmade, $norepairsneeded, $RO, $certifiedby, $malocation, $shopremarks ){
    //Database credentials
    $servername = "localhost";
    $username = "cl47-app1";
    $password = "FM!VG./fT";
    $dbname = "cl47-app1";

    //create connection 
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }
    //prepare and execute SQL query
    $sql = "INSERT INTO tblinspecreport (ttno, mileage, trailerno, dollyno, trailerno2, location1, cabdoorwindow,
     bodydoor, oilleak, greaseleak, coolantleak, fuelleak, 
     indicator, windwipewash, horns, heatdefrost, mirrors, steering, lights, 
    reflectors,suspension, tires, wheelrimlug, battery, bodydoort, tiedowns, lightst, 
    reflectorst, suspensiont, tirest, wheelrimlugt, brakest, landinggear, kingpinupperplate,
     fifthwheel, coupling, rearendpro, other, nodefects, remarks, date1, name1, empno1, date2, 
    name2, empno2, madate, repairmade, norepairsneeded, RO, certifiedby, malocation, shopremarks) VALUES
    ('$ttno', '$mileage', '$trailerno', '$dollyno', '$trailerno2', 
     '$location1', '$cabdoorwindow', '$bodydoor', '$oilleak', '$greaseleak', '$coolantleak', '$fuelleak', 
     '$indicator', '$windwipewash', '$horns', '$heatdefrost', '$mirrors', '$steering', '$lights', 
     '$reflectors','$suspension', '$tires', '$wheelrimlug', '$battery', '$bodydoort', '$tiedowns', '$lightst', 
     '$reflectorst', '$suspensiont', '$tirest', '$wheelrimlugt', '$brakest', '$landinggear', '$kingpinupperplate', '$fifthwheel', '$coupling', '$rearendpro', '$other', 
     '$nodefects', '$remarks', '$date1', '$name1', '$empno1', '$date2', 
     '$name2', '$empno2', '$madate', '$repairmade', '$norepairsneeded', '$RO', '$certifiedby', '$malocation', '$shopremarks')";

    if($conn->query($sql) === TRUE){
        echo "Record insert successfully";
    } else {
        echo "Error: ".$sql. "<br>".$conn->error;
    }

    //Close database connection
    $conn->close();
}

if($_SERVER['REQUEST_METHOD']=='POST'){
  //Back-end valiation for page 4

  $_SESSION['repairmade'] = isset($_POST['repairmade']) ? $_POST['repairmade'] : 0;
  $_SESSION['norepairsneeded'] = isset($_POST['norepairsneeded']) ? $_POST['norepairsneeded'] : 0;


  $remarks = filter_input(INPUT_POST, 'remarks', FILTER_SANITIZE_STRING);
  $date1 = filter_input(INPUT_POST, 'date1', FILTER_SANITIZE_STRING);
  $name1 = filter_input(INPUT_POST, 'name1', FILTER_SANITIZE_STRING);
  $empno1 = filter_input(INPUT_POST, 'empno1', FILTER_SANITIZE_STRING);
  $date2 = filter_input(INPUT_POST, 'date2', FILTER_SANITIZE_STRING);
  $name2 = filter_input(INPUT_POST, 'name2', FILTER_SANITIZE_STRING);
  $empno2 = filter_input(INPUT_POST, 'empno2', FILTER_SANITIZE_STRING);
  $madate = filter_input(INPUT_POST, 'madate', FILTER_SANITIZE_STRING);
  $RO = filter_input(INPUT_POST, 'RO', FILTER_SANITIZE_STRING);
  $certifiedby = filter_input(INPUT_POST, 'certifiedby', FILTER_SANITIZE_STRING);
  $malocation = filter_input(INPUT_POST, 'malocation', FILTER_SANITIZE_STRING);
  $shopremarks = filter_input(INPUT_POST, 'shopremarks', FILTER_SANITIZE_STRING);



  



  // Call the function to insert data into the database
  insertIntoDatabase(
    $_SESSION['ttno'],
    $_SESSION['mileage'],
    $_SESSION['trailerno'],
    $_SESSION['dollyno'],
    $_SESSION['trailerno2'],
    $_SESSION['location1'],
    $_SESSION['cabdoorwindow'],
    $_SESSION['bodydoor'],
    $_SESSION['oilleak'],
    $_SESSION['greaseleak'],
    $_SESSION['coolantleak'],
    $_SESSION['fuelleak'],
    $_SESSION['indicator'],
    $_SESSION['windwipewash'],
    $_SESSION['horns'],
    $_SESSION['heatdefrost'],
    $_SESSION['mirrors'],
    $_SESSION['steering'],
    $_SESSION['lights'],
    $_SESSION['reflectors'],
    $_SESSION['suspension'],
    $_SESSION['tires'],
    $_SESSION['wheelrimlug'],
    $_SESSION['battery'],
    $_SESSION['bodydoort'],
    $_SESSION['tiedowns'],
    $_SESSION['lightst'],
    $_SESSION['reflectorst'],
    $_SESSION['suspensiont'],
    $_SESSION['tirest'],
    $_SESSION['wheelrimlugt'],
    $_SESSION['brakest'],
    $_SESSION['landinggear'],
    $_SESSION['kingpinupperplate'],
    $_SESSION['fifthwheel'],
    $_SESSION['coupling'],
    $_SESSION['rearendpro'],
    $_SESSION['other'],
    $_SESSION['nodefects'],
    $remarks,
    $date1,
    $name1,
    $empno1,
    $date2,
    $name2,
    $empno2,
    $madate,
    $_SESSION['repairmade'],
    $_SESSION['norepairsneeded'],
    $RO,
    $certifiedby,
    $malocation,
    $shopremarks
  );
}

// Connect to MySQL database
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

//Retrieve data from a database
$sql = "SELECT * FROM tblinspecreport";
$result = $conn->query($sql);
//close the connection
$conn->close();
?>


<!DOCTYPE html> 
<html lang="en">
<head>

<link rel="stylesheet" href="style.css">
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title> Page 5 </title>

</head>
<body>
  <?php include_once 'header.php';?>
  <?php include_once 'navtech.php';?>
    
  

<?php
if ($result->num_rows > 0) {
echo "<table border='1'>";
echo "<tr><th>Truck/Tractor No</th><th>Mileage</th><th>Trailer No</th><th>Dolly No</th><th>Trailer No</th><th>Location</th></tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>" . $row['ttno'] . "</td>";
echo "<td>" . $row['mileage'] . "</td>";
echo "<td>" . $row['trailerno'] . "</td>";
echo "<td>" . $row['dollyno'] . "</td>";
echo "<td>" . $row['trailerno2'] . "</td>";
echo "<td>" . $row['location1'] . "</td>";
echo "</tr>";
}


echo "<table border='1'>";
echo "<tr><th>Cab/Door/Windows</th><th>Body/Door</th><th>Oil Leak</th><th>Grease Leak</th><th>Coolant Leak</th><th>Fuel Leak</th>
<th>Gauages/Warning Indicator</th><th>Window Wipers</th><th>Horns</th><th>Heater/Defroster</th><th>Mirrors</th>
<th>Steering</th><th>Lights</th><th>Reflectors</th><th>Suspension</th><th>Tires</th><th>Wheels/Rims/Lugs</th>
<th>Battery</th></tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>" . $row['cabdoorwindow'] . "</td>";
echo "<td>" . $row['bodydoor'] . "</td>";
echo "<td>" . $row['oilleak'] . "</td>";
echo "<td>" . $row['greaseleak'] . "</td>";
echo "<td>" . $row['coolantleak'] . "</td>";
echo "<td>" . $row['fuelleak'] . "</td>";
echo "<td>" . $row['indicator'] . "</td>";
echo "<td>" . $row['windwipewash'] . "</td>";
echo "<td>" . $row['horns'] . "</td>";
echo "<td>" . $row['heatdefrost'] . "</td>";
echo "<td>" . $row['mirrors'] . "</td>";
echo "<td>" . $row['steering'] . "</td>";
echo "<td>" . $row['lights'] . "</td>";
echo "<td>" . $row['reflectors'] . "</td>";
echo "<td>" . $row['suspension'] . "</td>";
echo "<td>" . $row['tires'] . "</td>";
echo "<td>" . $row['wheelrimlug'] . "</td>";
echo "<td>" . $row['battery'] . "</td>";
echo "</tr>";

}





echo "</table>"; 
echo "<table border='1'>"; 
echo "<tr><th>Body/Doors</th><th>Tie-Downs</th><th>Lights</th><th>Reflectors</th><th>Suspension</th><th>Tires</th><th>Wheel/Rim/Lugs</th><th>Breaks</th><th>Landing Gear</th
><th>King pin Upper plate</th><th>Coupling </th><th>Rear-End Protection</th><th>Other</th><th>NO DEFECTS</th></tr>"; 
while ($row = $result->fetch_assoc()) { 
echo "<tr>"; 
echo "<td>" . ($row['bodydoort'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['tiedowns'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['lightst'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['reflectorst'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['suspensiont'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['tirest'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['wheelrimlugt'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['brakest'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['landinggear'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['kingpinupperplate'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['fifthwheel'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['coupling'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['rearendpro'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['other'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "<td>" . ($row['nodefects'] == 1 ? 'Yes' : 'No') . "</td>"; 
echo "</tr>"; 
} 



echo "</table>"; 
echo "<table border='1'>"; 
echo "<tr><th>Remarks</th><th>Reporting Driver</th><th>Date</th><th>Name</th><th>Emp No</th><th>Reviewing Driver</th></tr><th>Date</th><th>Name</th><th>Emp No</th>
<th>Maintence Action</th><th>Date</th><th>Repair Made</th><th>No Repair Needed</th><th>R.O.#'S</th><th>Certified By</th><th>Location</th><th>Shop Remarks</th>"; 
while ($row = $result->fetch_assoc()) { 
    echo "<tr>"; 
    echo "<td>" . $row['remarks'] . "</td>"; 
    echo "<td>" . $row['date1'] . "</td>"; 
    echo "<td>" . $row['name1'] . "</td>"; 
    echo "<td>" . $row['empno1'] . "</td>"; 
    echo "<td>" . $row['date2'] . "</td>"; 
    echo "<td>" . $row['name2'] . "</td>"; 
    echo "<td>" . $row['empno2'] . "</td>"; 
    echo "<td>" . ($row['repairsmade'] == 1 ? 'Yes' : 'No') . "</td>"; 
    echo "<td>" . ($row['norepairsneeded'] == 1 ? 'Yes' : 'No') . "</td>"; 
    echo "<td>" . $row['madate'] . "</td>"; 
    echo "<td>" . $row['RO'] . "</td>"; 
    echo "<td>" . $row['certifiedby'] . "</td>"; 
    echo "<td>" . $row['malocation'] . "</td>"; 
    echo "<td>" . $row['shopremarks'] . "</td>"; 
    echo "</tr>"; 
}
    
     
    
     
} else {
echo "No records found";
}

?>

</body>

</html>


 
