<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db";

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
        $email = ($_POST["email"]);
				
            $sql = "INSERT INTO members(name, email, password) values('$name','$email','$password')";

			if ($conn->query($sql) === TRUE) {
				echo '<script type="text/javascript">window.location = "login.php"</script>';
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		$conn->close();
        
		
	}

?>