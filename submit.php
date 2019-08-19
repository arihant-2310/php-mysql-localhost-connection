<?php  
	$x= $_POST['firstname'];
	$y= $_POST['lastname'];
	$servername= "localhost";
	$username= "root";
	$password= "";
	$dbname= "db1";
	$conn = new mysqli ($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection Failed:" . $conn->connection_error );

	}
echo "Connected Successfully";

$sql = "INSERT INTO user (fname, lname) VALUES ('$x', '$y')";
if ($conn->query($sql) === TRUE){
	echo "new record created successfully";
}else {
	echo "Error: " . $sql , "<br>" . $conn->error ;
}

$conn->close();
?>