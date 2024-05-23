<?php
include("../../includes/header.php");
include("../../includes/conectar.php");
$conexion = conectar();

?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Listado de Postulantes</h1>
        <?php
        $sql="SELECT * FROM postulantes"; //
        $registros=mysqli_query($conexion,$sql);



    echo'<button class="btn btn-primary" onClick="f_crear_postulantes()">Crear Postulante</button>';


        //Tabla para mostrar los registros
        echo'<table class="table table-dark table-hover">'; //Inicio de tabla HTML
        echo'<th>DNI</th>';
        echo'<th>NOMBRES</th>';
        echo'<th>APELLIDOS</th>';
        echo'<th>EDAD</th>';
        echo'<th>CORREO</th>';
        echo'<th>TELEFONO</th>';
        echo'<th>DIRECCIÓN</th>';
        echo'<th>ESTADO CIVIL</th>';

        while($fila=mysqli_fetch_assoc($registros)){ //Bucle para mostrar registro a registro
            echo'<tr>';//Inicio de Fila
            echo '<td>',$fila['dni'],'</td>';
            echo '<td>',$fila['nombres'],'</td>';
            echo '<td>',$fila['apellidos'],'</td>';
            echo '<td>',$fila['edad'],'</td>';
            echo '<td>',$fila['correo'],'</td>';
            echo '<td>',$fila['telefono'],'</td>';
            echo '<td>',$fila['direccion'],'</td>';
            echo '<td>',$fila['estado_civil'],'</td>';
            echo'</tr>'; //Fin de Fila
        }
        echo'</table>';
        ?>

</main>
<?php
include("../../includes/footer.php");
?>

<script>

    function f_crear_postulantes(){
        location.href="crear_postulantes.php"
    }
</script>


