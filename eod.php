<?php
// Connect to the database
$db_host = "localhost";
$db_username = "cl47-app1";
$db_password = "FM!VG./fT";
$db_name = "cl47-app1";
//create connection to mysql db
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
//check if successful
if (!$conn) {
	//if connection fails - terminate scrippt and display error messsage
	die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from user table in database
$sql = "SELECT * FROM tblinspecreport
where Day(DateField) = (Day(GetDate())-1)
and Month(DateField) = (Month(GetDate()))
and Year(DateField) = (Year(getdate()))";
$result = mysqli_query($conn, $sql);
    //output heading for list of users
	echo "<h2>List of users</h2>";
    // Check if any records were returned
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
        echo "<tr><th>Cab/Door/Windows</th><th>Body/Door</th><th>Oil Leak</th><th>Grease Leak</th><th>Coolant Leak</th><th>Fuel Leak</th></tr>";
        while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['cabdoorwindow'] . "</td>";
        echo "<td>" . $row['bodydoor'] . "</td>";
        echo "<td>" . $row['oilleak'] . "</td>";
        echo "<td>" . $row['greaseleak'] . "</td>";
        echo "<td>" . $row['coolantleak'] . "</td>";
        echo "<td>" . $row['fuelleak'] . "</td>";
        echo "</tr>";
        }
        
        
        
        
        
        
        echo "</table>"; 
        echo "<table border='1'>"; 
        echo "<tr><th>Body/Doors</th><th>Tie-Downs</th><th>Lights</th><th>Reflectors</th><th>Suspension</th><th>Tires</th><th>Wheel/Rim/Lugs</th><th>Breaks</th><th>Landing Gear</th><th>King pin Upper plate</th><th>Coupling </th><th>Rear-End Protection</th><th>Other</th><th>NO DEFECTS</th></tr>"; 
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
        echo "<tr><th>Remarks</th><th>Reporting Driver</th><th>Date</th><th>Name</th><th>Emp No</th><th>Reviewing Driver</th></tr><th>Date</th><th>Name</th>
        <th>Emp No</th><th>Maintence Action</th><th>Date</th><th>Repair Made</th><th>No Repair Needed</th><th>R.O.#'S</th><th>Certified By</th><th>Location</th><th>Shop Remarks</th>"; 
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

// Close database connection
mysqli_close($conn);
?>