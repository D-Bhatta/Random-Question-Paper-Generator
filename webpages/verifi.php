<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "edu";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



	$msg = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$fn = $_POST["fn"];
        $NoS = ($_POST["NoS"]);
        $Avg = ($_POST["Avg"]);
			$sql = "INSERT INTO signup(fn,NoS,Avg) values('$fn','$NoS','$Avg')";
			$result = $conn->query($sql);

			echo "<br></br>";

			if ($result->num_rows > 0) 
			{
				// output data of each row
				echo '<script type="text/javascript">window.location = "admin.php"</script>';
			} else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		$conn->close();
        
}
	

?>
