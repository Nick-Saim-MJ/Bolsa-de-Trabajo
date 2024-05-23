<?php
    include("../../includes/header.php");
    include("../../includes/conectar.php");
    $conexion = conectar();

    //Recibimos el id de la empresa a modificar
    $id_empresa = $_REQUEST["id_empresa"];
    //echo"Se va a Modificar la Empresa".$id_empresa;

    $sql="SELECT * FROM empresas WHERE id='$id_empresa'";
    $resultado=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_assoc($resultado);
    ?>
    <form method="POST" action="guardar_empresas.php">
    <div class="mb-3">
        <label for="razon_social" class="form-label">Razón Social</label>
        <input type="text" class="form-control" id="razon_social" placeholder="Ingrese la razón social" name="txt_razon_social" required value="<?php echo $fila['razon_social']?>">
    </div>
    <div class="mb-3">
        <label for="ruc" class="form-label">RUC</label>
        <input type="text" class="form-control" id="ruc" placeholder="Ingrese el RUC" name="txt_ruc" required value="<?php echo $fila['ruc']?>">
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="text" class="form-control" id="correo" placeholder="Ingrese el correo electrónico" name="txt_correo" required value="<?php echo $fila['correo']?>">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" placeholder="Ingrese la dirección" name="txt_direccion" required value="<?php echo $fila['direccion']?>">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="tel" class="form-control" id="telefono" placeholder="Ingrese el teléfono" name="txt_telefono" required value="<?php echo $fila['telefono']?>">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

    // echo '<input type="text" value='.$fila['razon']'';
    // echo $fila['razon_social'];
    // echo $fila['ruc'];