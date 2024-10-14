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
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
    //output heading for list of users
	echo "<h2>List of users</h2>";
    // Check if any records were returned
    if (mysqli_num_rows($result) > 0) {
	// Output data in a table if there area records
	echo "<table>";
	echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>Password</th></tr>";
	//loop through each record in the record set
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . $row["userid"] . "</td>";
		echo "<td>" . $row["user"] . "</td>";
		echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
		echo "<td>" . $row["accesslevel"] . "</td>";
		
		echo "</tr>";
	}
	//close table
	echo "</table>";
} else {
	//if no records found display message
	echo "No records found";
}

// Close database connection
mysqli_close($conn);
?>
