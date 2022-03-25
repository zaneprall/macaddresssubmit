



<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "main";


$conn =  new mysqli($servername, $username, $password, $dbname);
if  ($conn->connect_error) {
	die("connect failed" . $conn->connect_error);
}



$common_name = $hostname = $MAC = $subnet = $comments = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $common_name = test_input($_POST["common_name"]);

  $hostname = test_input($_POST["hostname"]);

  $MAC = test_input($_POST["MAC"]);

  $subnet = test_input($_POST["subnet"]);

  $comments = test_input($_POST["comments"]);

}

print "$common_name <br>";
print "$hostname <br>";
print "$MAC <br>";
print "$subnet <br>";
print "$comments <br>";

function test_input($data) {

  $data = trim($data);

  $data = stripslashes($data);

  $data = htmlspecialchars($data);

  return $data;
}




$sql  = "insert into MAC (common_name, hostname, MAC, subnet, comments) values ('$common_name', '$hostname', '$MAC', '$subnet', '$comments')";
print "sql executed:$sql <br>";

if ($conn->query($sql) === TRUE) {
	echo"record created";
}
	else {
	echo "Record didn't create. 1337 h4X" . $sql . "<br>" . $conn->error;
}


$conn->close();



?>

