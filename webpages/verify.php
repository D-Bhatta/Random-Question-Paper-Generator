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
		$Questions = $_POST["Questions"];
        $Answer = ($_POST["Answer"]);
        $Marks = ($_POST["Marks"]);
        $Complexity = ($_POST["Complexity"]);
			$sql = "INSERT INTO signup(Questions,Answer,Marks,Complexity) values('$Qestions','$Answer','$Marks','$Complexity')";
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
