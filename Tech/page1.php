<!DOCTYPE html> 

<html lang="en"> 

<head> 
<link rel="stylesheet" href="style.css">
 <meta charset="UTF-8"> 

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<title>Page 1</title> 

<script> 

// Front-end validation function for Page 1 

 function validatePage1() { 

 var ttno = document.getElementById('ttno').value.trim(); 

 var mileage = document.getElementById('mileage').value.trim(); 

 var trailerno = document.getElementById('trailerno').value.trim(); 

 var dollyno = document.getElementById('dollyno').value.trim(); 

 var trailerno = document.getElementById('trailerno2').value.trim(); 

 var location = document.getElementById('location1').value.trim(); 

 

 // Check if fields are not empty 

 if (ttno === '' || mileage === '' || trailerno === '' || dollyno === '' || trailerno2 === '' || location1 == '') { 

 alert('Please fill in all fields.'); 
 
return false; 
} 

 // Additional validation if needed 

 

 return true; 
} 

 </script> 

</head> 

<body> 
  <?php include_once 'header.php';?>
  <?php include_once 'navtech.php';?>
  <h1> DRIVERS INSPECTION REPORT </h1>
  <h3> Completion of this report is required by federal law</h3>
<form action="page2.php" method="post" onsubmit="return validatePage1()"> 

  <label for="ttno">Truck or Tractor no:</label> 
  <input type="number" id="ttno" name="ttno"><br> 

  <label for="mileage">Mileage (no Tenths):</label> 
  <input type="number" id="mileage" name="mileage"><br> 

  <label for="trailerno">Trailer No:</label> 
  <input type="number" id="trailerno" name="trailerno"><br> 

  <label for="dollyno">Dolly No:</label> 
  <input type="number" id="dollyno" name="dollyno"><br>
  
  <label for="trailerno2">Trailer No:</label> 
  <input type="number" id="trailerno2" name="trailerno2"><br> 

  <label for="location1">Location:</label> 
  <input type="text" id="location1" name="location1"><br> 

  <input type="submit" value="Next"> 

</form> 

</body> 
<?php include_once 'footer.php';?>

</html> 

 

 