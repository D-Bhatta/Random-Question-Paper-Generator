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
		$subject = $_POST["subject"];
		$difficulty = $_POST["difficulty"];
		$marks = $_POST["marks"];
		$userid = $_POST["unameonfrm"];
		$new = 1;

        
			$sql = "INSERT INTO orders(userid,subject,new,difficulty,marks) values('$userid','$subject','$new','$difficulty',$marks)";
			$result = $conn->query($sql);

			echo "<br></br>";

			if ($result) 
			{
				// output data of each row
				echo '<script type="text/javascript">window.location = "download2.php"</script>';
				//echo "done";
			} else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		$conn->close();
        
}
	

?>
