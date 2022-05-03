<?php
include("DBConnection.php");

$RFID_Code = $_GET['code'];

$query = "INSERT INTO rfid_card VALUES ('$RFID_Code')";
mysqli_query($conn, $query);
$_SESSION['message'] = 'Insert Realizado con Éxito';
$_SESSION['message_type'] = 'warning';
header('Location: index.php');

?>

 