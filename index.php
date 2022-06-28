<?php
  error_reporting(0);
  session_start();
  session_destroy();
  // isset verifica si existe una variable
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }
  $mensaje="";
  $mensaje=$_REQUEST['mensaje'];
?>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="style/img/oet_logo.png">
  <title>OET</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
  <style type="text/css">
 /*Inputs  de reservacion*/
.input-editado{
  width: 100%;
  border-radius: 0px!important;
  padding: 0.200rem;
  border: none;
  border-bottom: 1.9px solid rgba(5, 104, 161);
  transition:.5s;
}
.input-editado:focus/*, .input-editado:hover*/ {  
transition: 0.5s; 
  border-color: rgba(5, 104, 161, 0.8);
  border-radius: 5px!important;
  box-shadow: 1px 1px 1px 1px rgba(5, 104, 161, 0.075) inset, 0px 0px 1px 1px rgba(5, 104, 161, 10);
  outline: 0 none;
}
.btn-outline-primary{
  color: rgba(5, 104, 161);
    border-color: #357ebd;
    transition: 0.5s!important;
}
 .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary.active, .open>.dropdown-toggle .btn-outline-primary {
  transition: 0.5;
    color: #fff!important;
    background-color: rgba(5, 104, 161);
    border-color: rgba(5, 104, 161); /*set the color you want here*/
}
</style>
</head>
<body style="font-family: 'Jost', sans-serif; background-color: #f1f4f9;">
  <header>
    <nav class=" navbar navbar-expand-lg navbar-light navbar-effect">
      <img class="navbar-logo" src="style/img/oet_banner.webp" style="cursor: hand" onclick="window.location.href = 'index.html'">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="margin-left :3%;">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link navbar-texto" href="index.php" >Inicio</a>
          </li>
      </div>
    </nav>
  </header>

 <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="style/img/portatil.jpg"  alt="Actualizar datos" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100% ;"/>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form  action="controller/verifica.php" method="post">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <!-- <i class="fas fa-cubes fa-2x" style="color: #0568a1;"></i> -->
                    <span class="h1 fw-bold mb-0" style="color: #0568a1;">OET</span>
                  </div>
                  <h3 class="fw-normal" style="letter-spacing: 1px;">Iniciar sesión</h3>
                  <h6 class="fw-normal pb-3" style="letter-spacing: 1px;">Prueba <b>Técnica</b></h6>
                  <div class="form-outline mb-4">
                    <input  class="form-control form-control-lg input-editado"name="cedula"  placeholder="Cédula"  />
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" class="form-control form-control-lg input-editado"name="contrasena" placeholder="Contraseña" />
                  </div>
                  <b style="color:red;"><?php echo $mensaje; ?></b>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-outline-primary btn-lg btn-block" id="login">Entrar</button>
                  </div>
                  <!--<a class="small text-muted" href="#!">Olvidé mi contraseña  </a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tiene una cuenta? <a href="#!" style="color: #0568a1;">¡Registrece aquí!</a></p>
                  <a href="#!" class="small text-muted" style="pointer-events: none;">Recuerde siempre usar el botón "Salida segura" al cerrar su sesión.</a>-->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <footer class="text-muted" style="">
    <div class="container text-center">
      <p>Jefersson Andrés De moya Montoya ©</p>
    </div>
  </footer>
</head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
</body>
</html>