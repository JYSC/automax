<?php
include_once('db.php');

//recibe los datos del formulario de la tabla miembros
$nombre_miembro=$_POST['nombre_miembro'];
$apellido_miembro=$_POST['apellido_miembro'];
$direccion_miembro=$_POST['direccion_miembro'];
$codigo_miembro=$_POST['codigo_miembro'];
$telefono_miembro=$_POST['telefono_miembro'];

echo "los datos son los siguientes ";
echo "$nombre_miembro, $apellido_miembro, $direccion_miembro, $codigo_miembro y $telefono_miembro";


$conectar=conn();
$sql="INSERT INTO miembros(nombre_miembro, apellido_miembro, direccion_miembro, codigo_miembro,telefono_miembro)
VALUES ('$nombre_miembro', '$apellido_miembro','$direccion_miembro','$codigo_miembro','$telefono_miembro')";
$resul = mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL Error:".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";


?>