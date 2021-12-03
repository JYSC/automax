<?php
include_once('db.php');

//recibe los datos del formulario de la tabla miembros
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$personas=$_POST['personas'];

$conectar=conn();
$sql="INSERT INTO rentas(nombre, apellido, email,telefono, personas)
VALUES ('$nombre', '$apellido','$email','$telefono' ,'$personas')";
$resul = mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL Error:".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";


?>