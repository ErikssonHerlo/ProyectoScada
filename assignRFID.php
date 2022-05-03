<?php
include("DBConnection.php");

$query = "SELECT COUNT(*) FROM `assign_rfid` WHERE date = CURDATE();";
$result =  mysqli_query($conn, $query);

if ($result->num_rows > 0) {
    $resultados = array();
    while ($row = $result->fetch_assoc()) {
        $resultados[] = array($row['id'], $row['fecha'], $row['titulo'], $row['descripcion'], $row['color'], $row['estado']);
    }
    echo json_encode($resultados);
} else {
    echo '';
}


$RFID_Code = $_GET['code'];
$CUI = $_GET['CUI'];
$status = 'Recepcion';


$query = "INSERT INTO `assign_rfid`(`RFID_card_RFID_code`, `person_CUI`, `date`, `shift`, `status`) VALUES('$RFID_Code', '$CUI',CURDATE(),1, '$status')";
mysqli_query($conn, $query);


$_SESSION['message'] = 'Insert Realizado con Éxito';
$_SESSION['message_type'] = 'warning';
header('Location: index.php');

?>

 