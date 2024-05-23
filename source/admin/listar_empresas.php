<?php
include("../../includes/header.php");
include("../../includes/conectar.php");
$conexion = conectar();

?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Listado de Empresas</h1>
        <?php
        $sql="SELECT * FROM empresas"; //
        $registros=mysqli_query($conexion,$sql);



    echo'<button class="btn btn-primary" onClick="f_crear_empresas()">Crear Empresa</button>';


        //Tabla para mostrar los registros
        echo'<table class="table table-dark table-hover">'; //Inicio de tabla HTML
        echo'<th>RAZON SOCIAL</th>';
        echo'<th>RUC</th>';
        echo'<th>CORREO</th>';
        echo'<th>DIRECCION</th>';
        echo'<th>TELEFONO</th>';
        echo'<th>RUBRO</th>';
        echo'<th>ACCIONES</th>';

        while($fila=mysqli_fetch_assoc($registros)){ //Bucle para mostrar registro a registro
            echo'<tr>';//Inicio de Fila
            echo '<td>',$fila['razon_social'],'</td>';
            echo '<td>',$fila['ruc'],'</td>';
            echo '<td>',$fila['correo'],'</td>';
            echo '<td>',$fila['direccion'],'</td>';
            echo '<td>',$fila['telefono'],'</td>';
            echo '<td>',$fila['rubro'],'</td>';
            echo '<td>';
                echo '<button onCLick="f_editar_empresas('.$fila['id'].')">Editar</button>';
            '</td>';
                echo '<button>Eliminar</button>';
            echo'</tr>'; //Fin de Fila
        }
        echo'</table>';
        ?>

</main>
<?php
include("../../includes/footer.php");
?>

<script>

    function f_crear_empresas(){
        location.href="crear_empresas.php";
    }
</script>
<script>
    
    function f_editar_empresas(idEmpresa){
        //alert("Se detecto click en la empresa" + idEmpresa);
        location.href="editar_empresas.php?id_empresa="+idEmpresa;
    }
</script>


