<?php
include_once("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="http://localhost/ofertas/plantilla/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Ofertas Laborales</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <!-- Preguntamos si la sesion S_USUARIO existe, solo en tal caso mostramos
                el texto "BIENVENIDO" -->
        <?php if (isset($_SESSION['S_USUARIO'])) { ?>
            <div class="text-warning">
            </div>
        <?php } ?>

        <!-- Preguntamos si la sesion S_USUARIO existe, solo en tal caso mostramos
                el menu para un usuario "Logeado"-->
        <?php if (isset($_SESSION['S_USUARIO'])) { ?>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i> 
                        <?php
                            echo '' . $_SESSION['S_USUARIO'];
                         ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!" style="transition-delay: 0.1s; animation-delay: 0.1s;"><i class="fas fa-cogs me-2"></i> Configuración</a></li>
                        <li><a class="dropdown-item" href="#!" style="transition-delay: 0.2s; animation-delay: 0.2s;"><i class="fas fa-clipboard-list me-2"></i> Registro de Actividad</a></li>
                        <li>
                            <hr class="dropdown-divider" style="transition-delay: 0.3s; animation-delay: 0.3s;" />
                        </li>
                        <li><a class="dropdown-item" href="<?= RUTA_GENERAL; ?>source/logout.php" style="transition-delay: 0.4s; animation-delay: 0.4s;"><i class="fas fa-sign-out-alt me-2"></i> Cerrar Sesión</a></li>
                    </ul>
                </li>


            </ul>
        <?php } ?>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?= RUTA_GENERAL; ?>index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Inicio
                        </a>
                    </div>

                    <!-- Aqui preguntamos si la sesion S_USUARIO no existe, pues solo 
                            en ese caso se debe mostrar la opcion ingresar-->
                    <?php if (!isset($_SESSION['S_USUARIO'])) { ?>
                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Ingresar
                            </a>
                        </div>
                    <?php } ?>
                    <!-- Aqui inicia todas las opciones del sistema -->
                    <div class="nav">
                        <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Ver ofertas
                        </a>
                    </div>
                    <div class="nav">
                        <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Registrarse
                        </a>
                    </div>
                    <?php if (isset($_SESSION['S_ROL']) && $_SESSION['S_ROL'] == 1) { ?>
                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Crear Oferta Laboral

                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Buscar Postulate
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Administrar Ofertas
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Seleccionar Postulantes
                            </a>
                        </div>
                    <?php } ?>

                    <?php if (isset($_SESSION['S_ROL']) && $_SESSION['S_ROL'] == 2) { ?>
                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Crear Usuario
                            </a>
                        </div>

                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Crear Postulantes
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/admin/listar_empresas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Listar Empresas
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Listar Ofertas
                            </a>
                        </div>
                    <?php } ?>

                    <?php if (isset($_SESSION['S_ROL']) && $_SESSION['S_ROL'] == 3) { ?>
                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Buscar Ofertas
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Postular a Oferta
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="<?= RUTA_GENERAL; ?>source/ingresar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Mis Postulaciones
                            </a>
                        </div>
                    <?php } ?>

                    <!-- Aqui finaliza todas las opciones del sistema -->
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">