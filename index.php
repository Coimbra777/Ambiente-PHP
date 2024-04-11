<?php
//  phpinfo();

$conn = mysqli_connect('db', 'root', 'root', 'sys') or die(mysqli_error());
echo 'Banco Conectado';
$conn->close();

?>