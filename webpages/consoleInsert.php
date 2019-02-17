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
 $sql = 'SELECT * FROM `insertqs`';
# Execute the SELECT Query
 if( !( $result = $conn->query($sql) ) ){
   echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
 }else{
   ?>
<table class="table">
 <thead>
   <tr>
        <th>Index</th>
	    <th>Question</th>
        <th>Option 1</th>
        <th>Option 2</th>
        <th>Option 3</th>
        <th>Option 4</th>
        <th>Answer</th>
        <th>Marks</th>
	    <th>Difficulty</th>
        <th>Subject</th>
   </tr>
 </thead>
 <tbody>
   <?php
     if( $result->num_rows == 0 ){
       echo '<tr><td colspan="4">No Rows Returned</td></tr>';
     }else{
       while( $row = $result->fetch_array(MYSQLI_ASSOC) ){
                 echo "<tr><td>{$row['slno']}</td><td>{$row['Question']}</td><td>{$row['Option1']}</td><td>{$row['Option2']}</td><td>{$row['Option3']}</td><td>{$row['Option4']}</td><td>{$row['Answer']}</td><td>{$row['marks']}</td><td>{$row['difficulty']}</td><td>{$row['subject']}</td>";
                 echo "<td><form action =\"consoleInsertVerify.php\" method=\"post\"><input type=\"hidden\" name=\"slno\" value=\"{$row['slno']}\"/><button type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"submit\">Submit</button></form></td></tr>\n";
       }
     }
   ?>
 </tbody>
</table>
   <?php
 }

?>
  <?php include("footer.php"); ?>