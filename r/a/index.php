<?php
session_start();
if($_SESSION['rol'] != 1){
header('location: ../../controller/redirec.php');
}
require_once '../../controller/dbc.php';
require_once '../../controller/vars.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../style/img/oet_logo.png">
    <title>OET</title>
    <link href="../dashboard/css/sb-admin-2.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <link href="../../style/style.css" rel="stylesheet">
</head>
<body id="page-top" style="font-family: Poppins!">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Dashboard inicio -->
        <ul class="navbar-nav bg-gradient  sidebar sidebar-dark accordion text-white" id="accordionSidebar" style="background-color: #357ebd;">
            <br>
            <img src="../../style/img/oet_banner2.webp" style="width: 50%;">
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-user-tie"></i>
                    <span>Admin</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Datos
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGuarda"
                    aria-expanded="true">
                    <i class="fa-solid fa-file-arrow-down"></i>
                    <span>Guardar datos </span>
                    &nbsp
                </a>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVer"
                    aria-expanded="true">
                    <i class="fa-solid fa-file-export"></i>
                    <span>Ver datos </span>
                     &nbsp
                </a>
                <hr>
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRegistrar"
                    aria-expanded="true">
                    <i class="fa-solid fa-file-export"></i>
                    <span>Registrar usuario </span>
                     &nbsp
                </a>
            </li>
            <hr class="sidebar-divider">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul><!-- Fin dashboard -->


        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- boton responsive -->
                    <button id="sidebarToggleTop" class="btn btn-outline-primary d-md-none" onclick="cambiar()"
                        style="color:#357ebd; width: 100%; border-color:#357ebd;">
                        Menú: &nbsp<b id="contenedor">Ocultar</b>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!--Perfil info -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo ucfirst($_SESSION['seg_nombre']); ?></span>
                                <img class="img-profile rounded-circle" src="../../style/img/oet_logo.png">
                            </a>
                            <!-- foto perfil dropdown -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <div class="container">
                    <div id="accordion">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                              <p>Bienvenido.<br> Escoja una de las opciones para continuar.</p>
                            </div>
                        </div>


                        <!-- Cursos -->
                        <div id="collapseGuarda" class="collapse" aria-labelledby="heading"
                            data-parent="#accordion">
                            <div class="card-body">
                               <?php include'../../components/vista_guardar_vehiculo.php' ?>
                            </div>
                        </div>
                        <div id="collapseVer" class="collapse " aria-labelledby="heading"
                            data-parent="#accordion">
                            <div class="card-body">
                               <?php include'../../components/vista_ver_vehiculos.php' ?>
                            </div>
                        </div>
                        <div id="collapseRegistrar" class="collapse " aria-labelledby="heading"
                            data-parent="#accordion">
                            <div class="card-body">
                               <?php include'../../components/vista_guarda_usuario.php' ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- final del contenido-->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Jefferson.com</span> <!-- Jefersson Andrés De moya Montoya-->
                    </div>
                </div>
            </footer>
        </div><!-- End of Content Wrapper -->
    </div> <!-- End of Page Wrapper -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Señor/a <?php echo ucfirst($nombre) ?>
                    </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">¿Deseas cerrar sesión?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="../../controller/cerrarSesion.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../../lib/jquery/jquery.min.js"></script>
    <!--noticias-->
    <script src="../../js/ajax.js"></script>
    <!--noticias-->
    <!-- Bootstrap core JavaScript-->
    <script src="../dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../dashboard/js/sb-admin-2.min.js"></script>
</body>
<script type="text/javascript">
function cambiar() {
    let contenedor = document.getElementById("contenedor");
    let boton = document.getElementsByTagName("button");
    if (boton[0].innerText == 'Ver 2') {
        contenedor.innerText = 'Ocultar';
    } else {
        contenedor.innerText = 'Mostrar';
    }
}
</script>

</html>