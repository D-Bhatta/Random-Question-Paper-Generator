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
		$name = $_POST["name"];
		//$password = md5($_POST["password"]);
		$password = ($_POST["password"]);
		if ($name == '' || $password == '') {
			$msg = "You must enter all fields";
		} else {		
			$sql = "SELECT * from users where username='$name' AND password='$password'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
				// output data of each row
				echo '<script type="text/javascript">window.location = "consoleUser.php"</script>';
			} else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		$conn->close();
        
}
	}

?>