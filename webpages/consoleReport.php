<?php include("header.php"); ?>
<div class="main">
 <?php



# Init the MySQL Connection
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

# Prepare the SELECT Query
 $sql = 'SELECT * FROM `report`';
# Execute the SELECT Query
 if( !( $result = $conn->query($sql) ) ){
   echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
 }else{
   ?>
<table class="table">
 <thead>
   <tr>
	 	 <th>Index.</th>
     <th>User Name</th>
     <th>Number of Students</th>
     <th>Average Marks</th>
	<th>Highest Marks</th>
    <th>Lowest Marks</th>
   </tr>
 </thead>
 <tbody>
   <?php
     if( $result->num_rows == 0 ){
       echo '<tr><td colspan="4">No Rows Returned</td></tr>';
     }else{
       while( $row = $result->fetch_array(MYSQLI_ASSOC) ){
				 echo "<tr><td>{$row['slno']}</td><td>{$row['username']}</td><td>{$row['nstudents']}</td><td>{$row['amarks']}</td><td>{$row['hmarks']}</td><td>{$row['lmarks']}</td></tr>\n";
       }
     }
   ?>
 </tbody>
</table>
   <?php
 }

?>
  <?php include("footer.php"); ?>