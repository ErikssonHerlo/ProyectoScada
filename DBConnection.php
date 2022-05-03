<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'scada_project'
) or die(mysqli_erro($mysqli));
 
?>