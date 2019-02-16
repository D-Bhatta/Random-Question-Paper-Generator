<?php
$servername = "localhost";
$username = "testuser";
$password = "test123";
$database = "testdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$table ='a';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



    $msg = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $slno = $_POST["slno"];
        $sql = "SELECT * FROM `insertqs` where slno='$slno'";
        if( !( $result = $conn->query($sql) ) ){
            echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
          }else{
            if( $result->num_rows == 0 ){
                echo '<tr><td colspan="4">No Rows Returned</td></tr>';
              }else{
                while( $row = $result->fetch_array(MYSQLI_ASSOC) ){
                    $slno=$row['slno'];
                    $Question=$row['Question'];
                    $Option1=$row['Option1'];
                    $Option2=$row['Option2'];
                    $Option3=$row['Option3'];
                    $Option4=$row['Option4'];
                    $Answer=$row['Answer'];
                    $marks=$row['marks'];
                    $difficulty=$row['difficulty'];
                    $subject=$row['subject'];
                }}}}

    $sql="SELECT $difficulty FROM `subjects` WHERE subject='$subject'";
    //echo $sql2;
    if( !( $result = $conn->query($sql) ) ){
        echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
        }else{
        if( $result->num_rows == 0 ){
            echo 'No Rows Returned';
        }else{
            $row = ($result->fetch_array());
            $table =$row[0];

        }
    }
    $sql="INSERT INTO `$table`(`Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`, `marks`) values('$Question', '$Option1', '$Option2', '$Option3', '$Option4', $Answer, $marks)";
    //echo $sql;
    $result = $conn->query($sql);
    echo "<br></br>";

			if ($result) 
			{
				// output data of each row
				//echo '<script type="text/javascript">window.location = "consoleInsert.php"</script>';
				//echo "done";
			} else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
            }
    $sql="DELETE FROM `insertqs` where `slno`=$slno";
    //echo $sql;
    $result = $conn->query($sql);
    echo "<br></br>";

            if ($result) 
            {
                // output data of each row
                echo '<script type="text/javascript">window.location = "consoleInsert.php"</script>';
                //echo "done";
            } else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
		$conn->close();
              
?>