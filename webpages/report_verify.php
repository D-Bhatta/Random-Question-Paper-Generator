<?php
$servername = "localhost";
$username = "testuser";
$password = "test123";
$database = "testdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



	$msg = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = $_POST["unameonfrm"];
        $nstudents = ($_POST["nstudents"]);
		$amarks = ($_POST["amarks"]);
		$hmarks = ($_POST["hmarks"]);
		$lmarks = ($_POST["lmarks"]);
			$sql = "INSERT INTO report(username,nstudents,amarks,hmarks,lmarks) values('$username','$nstudents','$amarks','$hmarks','$lmarks')";
			$result = $conn->query($sql);

			echo "<br></br>";

			if ($result) 
			{
				// output data of each row
				echo '<script type="text/javascript">window.location = "report.php"</script>';
				//echo "done";
			} else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		$conn->close();
        
}
	

?>
