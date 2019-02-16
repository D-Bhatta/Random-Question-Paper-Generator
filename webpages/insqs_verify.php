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
		$Questions = $_POST["qns"];
        $Answer = ($_POST["ans"]);
		$Marks = ($_POST["marks"]);
		$o1 = ($_POST["o1"]);
		$o2 = ($_POST["o2"]);
		$o3 = ($_POST["o3"]);
		$o4 = ($_POST["o4"]);
		$difficulty = ($_POST["difficulty"]);
		$subject = ($_POST["subject"]);
		
			$sql = "INSERT INTO insertqs(Question,Option1,Option2,Option3,Option4,Answer,Marks,difficulty,subject) values('$Questions','$o1','$o2','$o3', '$o4','$Answer','$Marks', '$difficulty', '$subject')";
			$result = $conn->query($sql);

			echo "<br></br>";

			if ($result) 
			{
				// output data of each row
				echo '<script type="text/javascript">window.location = "console.php"</script>';
				//echo "done";
			} else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		$conn->close();
        
}
	

?>
