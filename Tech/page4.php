<?php
session_start();


    


    //Retrieve data from previous session
   


    $_SESSION['bodydoort'] = isset($_POST['bodydoort']) ? $_POST['bodydoort'] : 0;
    $_SESSION['tiedowns'] = isset($_POST['tiedowns']) ? $_POST['tiedowns'] : 0;
    $_SESSION['lightst'] = isset($_POST['lightst']) ? $_POST['lightst'] : 0;
    $_SESSION['reflectorst'] = isset($_POST['reflectorst']) ? $_POST['reflectorst'] : 0;
    $_SESSION['suspensiont'] = isset($_POST['suspensiont']) ? $_POST['suspensiont'] : 0;
    $_SESSION['tirest'] = isset($_POST['tirest']) ? $_POST['tirest'] : 0;
    $_SESSION['wheelrimlugt'] = isset($_POST['wheelrimlugt']) ? $_POST['wheelrimlugt'] : 0;
    $_SESSION['brakest'] = isset($_POST['brakest']) ? $_POST['brakest'] : 0;
    $_SESSION['landinggear'] = isset($_POST['landinggear']) ? $_POST['landinggear'] : 0;
    $_SESSION['kingpinupperplate'] = isset($_POST['kingpinupperplate']) ? $_POST['kingpinupperplate'] : 0;
    $_SESSION['fifthwheel'] = isset($_POST['fifthwheel']) ? $_POST['fifthwheel'] : 0;
    $_SESSION['coupling'] = isset($_POST['coupling']) ? $_POST['coupling'] : 0;
    $_SESSION['rearendpro'] = isset($_POST['rearendpro']) ? $_POST['rearendpro'] : 0;
    $_SESSION['other'] = isset($_POST['other']) ? $_POST['other'] : 0;
    $_SESSION['nodefects'] = isset($_POST['nodefects']) ? $_POST['nodefects'] : 0;



?>



<!DOCTYPE html> 

<html lang="en"> 

<head> 
<link rel="stylesheet" href="style.css">
 <meta charset="UTF-8"> 

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

 

<script> 

// Front-end validation function for Page 4

 function validatePage4() { 

 var remarks = document.getElementById('remarks').value.trim(); 

 var date1 = document.getElementById('date1').value.trim(); 

 var name1 = document.getElementById('name1').value.trim(); 

 var empno1 = document.getElementById('empno1').value.trim(); 

 var date2 = document.getElementById('date2').value.trim(); 

 var name2 = document.getElementById('name2').value.trim();

 var empno2 = document.getElementById('empno2').value.trim();

 var madate = document.getElementById('madate').value.trim();

 var RO = document.getElementById('RO').value.trim();

 var certifiedby = document.getElementById('certifiedby').value.trim();

 var location = document.getElementById('malocation').value.trim();
 

 // Check if fields are not empty 

 if (remarks === '' || date1 === '' || name1 === '' || empno1 === '' || date2 === '' || name2 == '' || empno2 == '' || madate == '' || RO == '' || certifiedby == '' || malocation == '') { 

 alert('Please fill in all fields.'); 
 
return false; 
} 

 

 

 return true; 
} 
 
 </script> 

</head> 

<body> 
  <?php include_once 'header.php';?>
  <?php include_once 'navtech.php';?>
  
  <title> Page 4 </title>
<form action="page5.php" method="post" onsubmit="return validatePage4()"> 



  <label for="remarks">REMARKS: </label> 
  <input type="text" id="remarks" name="remarks"><br> 

  <h3> REPORTING DRIVER </h3>
  <label for="date1">Date:</label> 
  <input type="date" id="date1" name="date1"><br> 
  <label for="name1">Name:</label> 
  <input type="text" id="name1" name="name1"><br> 
  <label for="empno1">Emp. No.:</label> 
  <input type="number" id="empno1" name="empno1"><br>
  
  <h3> REVIEWING DRIVER </h3>
  <label for="date2">Date:</label> 
  <input type="date" id="date2" name="date2"><br> 
  <label for="name2">Name:</label> 
  <input type="text" id="name2" name="name2"><br> 
  <label for="empno2">Emp. No.:</label> 
  <input type="number" id="empno2" name="empno2"><br>

  <h3> MAINTENCE ACTION </h3>
  <label for="madate">Date:</label> 
  <input type="date" id="madate" name="date2"><br> 
  <label for="repairmade">
    <input type="checkbox" id="repairmade" name="repairmade" value="1">Repairs Made
  </label><br><br>
  <label for="norepairsneeded">
    <input type="checkbox" id="norepairsneeded" name="norepairsneeded" value="1">No Repairs Needed
  </label><br><br>
  <label for="RO">R.O.#S: </label> 
  <input type="text" id="RO" name="RO"><br> 
  <label for="certifiedby">Certified By: </label> 
  <input type="text" id="certifiedby" name="certifiedby"><br> 
  <label for="malocation">Location: </label> 
  <input type="text" id="malocation" name="malocation"><br> 


  <label for="shopremarks">SHOP REMARKS: </label> 
  <input type="text" id="shopremarks" name="shopremarks"><br>

  <input type="submit" value="Submit"> 

</form> 
<a href="page3.php">
    <button>Back</button>
</a>
</body> 
<?php include_once 'footer.php';?>

</html> 

 

 