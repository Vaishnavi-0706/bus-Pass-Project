<?php
$SERVER = "localhost";
$username = "root";
$password = ""; // Corrected spelling from "passward" to "password"
$dbname = "buspass";
$con = mysqli_connect($SERVER, $username, $password, $dbname); // Added semicolon

if (!$con) {
    echo "not Connected";
}

//start
$Email = $_POST['Email']; // Added semicolon
$passward = $_POST['Passward']; // Corrected variable name from "Passward" to "passward" and added semicolon
$name = $_POST['name']; // Added semicolon
$MobileNumber = $_POST['mobile']; // Corrected variable name from "mobile" to "MobileNumber" and added semicolon
$AddharNumber = $_POST['adhar']; // Corrected variable name from "adhar" to "AddharNumber" and added semicolon

$sql = "INSERT INTO `login`(`Email`, `Passward`, `name`, `Mobile Number`, `Addhar Number`) 
        VALUES ('$Email','$passward','$name','$MobileNumber','$AddharNumber')"; // Corrected variable names

$result = mysqli_query($con, $sql); // Added semicolon
if ($result) {
    echo "data submitted";
} else {
    echo "query failed...";
}
?>
