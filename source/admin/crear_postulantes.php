<?php
include("../../includes/header.php");
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Crear Nueva Empresa</h1>
        <!-- Aqui Creamos el Formulario para crear una Nueva Empresa -->
        <form method="POST" action="guardar_postulantes.php">
            <div class="mb-3">
                <label for="razon_social" class="form-label">DNI</label>
                <input type="text" class="form-control" id="razon_social" placeholder="Ingrese el DNI" name="txt_dni" required>
            </div>
            <div class="mb-3">
                <label for="ruc" class="form-label">NOMBRES</label>
                <input type="text" class="form-control" id="ruc" placeholder="Ingrese los Nombres" name="txt_nombres" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">APELLIDOS</label>
                <input type="text" class="form-control" id="correo" placeholder="Ingrese los Apellidos" name="txt_apellidos" required>
            </div>
            
            <div class="mb-3">
                <label for="edad" class="form-label">EDAD</label>
                <input type="text" class="form-control" id="direccion" placeholder="Ingrese la Edad" name="txt_edad" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">CORREO</label>
                <input type="text" class="form-control" id="telefono" placeholder="Ingrese el Correo Electrónico" name="txt_correo" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">TELEFONO</label>
                <input type="text" class="form-control" id="telefono" placeholder="Ingrese el Teléfono" name="txt_telefono" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">DIRECCIÓN</label>
                <input type="text" class="form-control" id="telefono" placeholder="Ingrese la Dirección" name="txt_direccion" required>
            </div>
            <div class="mb-3">
                <label for="estadocivil" class="form-label">ESTADO CIVIL</label>
                <input type="text" class="form-control" id="telefono" placeholder="Ingrese el Estado Civil" name="txt_estado_civil" required>
            </div>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
        </form>

        <!-- Aqui Terminamos el Formulario para crear una Nueva Empresa -->


</main>
<?php
include("../../includes/footer.php");
?>