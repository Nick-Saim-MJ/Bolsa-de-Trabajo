<?php
include("../../includes/header.php");
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Crear Nueva Empresa</h1>
        <!-- Aqui Creamos el Formulario para crear una Nueva Empresa -->

        <form method="POST" action="guardar_empresas.php">
            <div class="mb-3">
                <label for="razon_social" class="form-label">Razón Social</label>
                <input type="text" class="form-control" id="razon_social" placeholder="Ingrese la razón social" name="txt_razon_social" required>
            </div>
            <div class="mb-3">
                <label for="ruc" class="form-label">RUC</label>
                <input type="text" class="form-control" id="ruc" placeholder="Ingrese el RUC" name="txt_ruc" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control" id="correo" placeholder="Ingrese el correo electrónico" name="txt_correo" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" placeholder="Ingrese la dirección" name="txt_direccion" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" placeholder="Ingrese el teléfono" name="txt_telefono" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

        <!-- Aqui Terminamos el Formulario para crear una Nueva Empresa -->


</main>
<?php
include("../../includes/footer.php");
?>