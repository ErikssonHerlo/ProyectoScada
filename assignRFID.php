<?php
include("DBConnection.php");

$RFID_Code = $_GET['code'];
$CUI = $_GET['CUI'];


$query = "INSERT INTO `assign_rfid`(`RFID_card_RFID_code`, `person_CUI`, `date`, `shift`) VALUES('$RFID_Code', '$CUI',CURDATE(),1)";
mysqli_query($conn, $query);
$_SESSION['message'] = 'Insert Realizado con Éxito';
$_SESSION['message_type'] = 'warning';
header('Location: index.php');

?>

 