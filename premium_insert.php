<?php
include_once "connection.php";
// error_reporting(0);

$name = mysqli_real_escape_string($conn, $_POST['name']);
$town = mysqli_real_escape_string($conn, $_POST['town']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$prayer = mysqli_real_escape_string($conn, $_POST['prayer']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "student/".$filename;
move_uploaded_file($tempname, $folder);

$sql = "INSERT INTO premium (name, town, city, state, prayer, email, phone, profile) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){
	echo "SQL error";
} else {
	mysqli_stmt_bind_param($stmt, "ssssssss", $name, $town, $city, $state, $prayer, $email, $phone, $folder);
	mysqli_stmt_execute($stmt);
}

header("Location: upload_premium.php");

mysqli_close($conn);
?>
