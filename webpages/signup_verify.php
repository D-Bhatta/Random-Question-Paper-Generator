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
        $password = ($_POST["password"]);
        $email = ($_POST["email"]);
				
            $sql = "INSERT INTO users(username, email, password) values('$name','$email','$password')";

			$result = $conn->query($sql);

			echo "<br></br>";

			if ($result) 
			{
                echo '<script type="text/javascript">window.location = "login.php"</script>';
                //echo "done";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		$conn->close();
        
		
	}

?>