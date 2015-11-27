<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formmona";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (First_Name, Last_Name, Email, Password, Confirm_Password)
VALUES ('".$_POST['First_Name']."', '".$_POST['Last_Name']."', '".$_POST['Email']."','".$_POST['Password']."','".$_POST['Confirm_Password']."')";

if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
