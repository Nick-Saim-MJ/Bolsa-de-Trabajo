<?php
include("../../includes/header.php");
include("../../includes/conectar.php");
$conexion = conectar();

?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Listado de Empresas</h1>
        <?php
        $sql="SELECT * FROM empresas";
        $registros=mysqli_query($conexion,$sql);

        echo'<table class="table table-dark table-hover">';
        echo'<th>RAZON SOCIAL</th>';
        echo'<th>RUC</th>';
        echo'<th>CORREO</th>';
        echo'<th>DIRECCION</th>';
        echo'<th>TELEFONO</th>';
        echo'<th>DESCRIPCION</th>';
        echo'<th>RUBRO</th>';

        while($fila=mysqli_fetch_assoc($registros)){
            echo'<tr>';
            echo '<td>',$fila['razon_social'],'</td>';
            echo '<td>',$fila['ruc'],'</td>';
            echo '<td>',$fila['correo'],'</td>';
            echo '<td>',$fila['direccion'],'</td>';
            echo '<td>',$fila['telefono'],'</td>';
            echo '<td>',$fila['descripcion'],'</td>';
            echo '<td>',$fila['rubro'],'</td>';
            echo'</tr>';
        }
        echo'</table>';
        ?>

</main>
<?php
include("../../includes/footer.php");
?>