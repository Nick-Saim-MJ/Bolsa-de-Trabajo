<?php
//Invocamos a conectar.php para tener acceso a la Base de Datos
include("../../includes/conectar.php");
$conexion = conectar();

?>

<?php

//Recibimos los datos del formulario
$dni = $_POST['txt_dni'];
$nombres = $_POST['txt_nombres'];
$apellidos = $_POST['txt_apellidos'];
$edad = $_POST['txt_edad'];
$correo = $_POST['txt_correo'];
$telefono = $_POST['txt_telefono'];
$direccion = $_POST['txt_direccion'];
$estado_civil = $_POST['txt_estado_civil'];

// Verificar si la edad es mayor que 150
if ($edad > 150) {
    // Mostrar una alerta
    echo "<script>alert('La edad no puede ser mayor que 150');</script>";
    // Redireccionar al formulario después de que el usuario haga clic en "Aceptar" en la alerta
    header("Location: listar_postulantes.php");
    exit(); // Aseguramos que el script se detenga después de la redirección
}

// Sentencia SQL para guardar los datos de la nueva empresa
$sql = "INSERT INTO postulantes (dni, nombres, apellidos, edad, correo, telefono, direccion, estado_civil )
    values('$dni','$nombres','$apellidos','$edad','$correo','$telefono','$direccion','$estado_civil')";


//Ejecutamos la secuencia SQL
mysqli_query($conexion, $sql);
 //echo"alert='Empresa guardada correctamente.'";


 //redireccionamos al listado de empresas para poder visualizarlo
 header("Location: listar_postulantes.php");

?>



