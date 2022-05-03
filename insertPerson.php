<?php
include("DBConnection.php");

$CUI = $_GET['CUI'];
$namePerson= $_GET['namePerson'];
$phone = $_GET['phone'];

$query = "INSERT INTO person VALUES ('$CUI', '$namePerson', '$phone')";
mysqli_query($conn, $query);
$_SESSION['message'] = 'Insert Realizado con Éxito';
$_SESSION['message_type'] = 'warning';
header('Location: index.php');

?>

 