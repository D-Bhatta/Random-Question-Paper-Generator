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
    $sql="INSERT INTO $table(`Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`, `marks`) values(`$Question`, `$Option1`, `$Option2`, `$Option3`, `$Option4`, `$Answer`, `$marks`)";
    //echo $sql2;
    if( !( $result = $conn->query($sql) ) ){
        echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
        }else{
        if( $result->num_rows == 0 ){
            echo 'No Rows Returned';
        }else{
                echo 'done';
           // $row = ($result->fetch_array());
           // $table =$row[0];

        }
    }



        //echo  "slno:".$slno;
        /*
        $sql = "SELECT * FROM `insertqs` where slno='$slno'";
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
                          echo "<td><form action =\"consoleInsertVerify.php\" method=\"post\"><input type=\"hidden\" name=\"slno\" value=\"<?php echo {$row['slno']}; ?>\"/><button type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"submit\">Submit</button></form></td></tr>\n";
                }
              }
            ?>
          </tbody>
         </table>
         <?php
 }}
*/
          
?>