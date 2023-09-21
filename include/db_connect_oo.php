<?php 
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Bangkok');
$server = "localhost";
$username = "root";
$password = "";
$dbname = "check_student1";
 ?>
<?php
date_default_timezone_set("Asia/Bangkok");
  // Create connection

  $conn = new mysqli($server, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit;
  } else {
    //echo "Success: connected to MySQL";
  }

  // $con->close();


function get_data($conn,$sql){
    $result = $conn->query($sql);
    $all = [];
    while($row = $result->fetch_assoc()) {
   $all[] = $row;
   }
   return $all;

}
function insert_data($conn,$sql){
  if($conn->query($sql) === TRUE){
    return 1;
  }else{
    return 0;
  }
}

function insert_data_and_get_id($conn,$sql){
  if($conn->query($sql) === TRUE){
    return $conn->insert_id;
  }else{
    return 0;
  }
}



?>
