<?php
//Invocamos a conectar.php para tener acceso a la Base de Datos
include("../../includes/conectar.php");
$conexion = conectar();

?>



<?php

//Recibimos los datos del formulario
$razon = $_POST['txt_razon_social'];
$ruc = $_POST['txt_ruc'];
$correo = $_POST['txt_correo'];
$direccion = $_POST['txt_direccion'];
$telefono = $_POST['txt_telefono'];

// echo '<br>', $razon;
// echo '<br>', $ruc;
// echo '<br>', $correo;
// echo '<br>', $direccion;
// echo '<br>', $telefono;

// Sentencia SQL para guardar los datos de la nueva empresa
$sql = "INSERT INTO empresas (razon_social, ruc, correo, direccion, telefono)
    values('$razon','$ruc','$correo','$direccion','$telefono')";


//Ejecutamos la secuencia SQL
mysqli_query($conexion, $sql);
 //echo"alert='Empresa guardada correctamente.'";


 //redireccionamos al listado de empresas para poder visualizarlo
 header("Location: listar_empresas.php");

?>



