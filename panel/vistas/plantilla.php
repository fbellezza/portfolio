<?php
  session_start();
    //Comprobamos si esta definida la sesión 'tiempo'.
    if(isset($_SESSION['tiempo']) ) {

        //Tiempo en segundos para dar vida a la sesión.
        $inactivo = 600;//10min en este caso.

        //Calculamos tiempo de vida inactivo.
        $vida_session = time() - $_SESSION['tiempo'];

            //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
            if($vida_session > $inactivo)
            {
                /*echo '<script>

                      swal.fire({

                        type: "danger",
                        title: "¡Se ha cerrado la sesión por inactividad!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"

                      }).then(function(result){

                        if(result.value){
                        
                          window.location = "inicio";

                        }

                      });
                    

                      </script>';*/
                //Removemos sesión.
                session_unset();
                //Destruimos sesión.
                session_destroy();              
                //Redirigimos pagina.
                header("Location: inicio");

                exit();
            }

    }
    $_SESSION['tiempo'] = time();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Panel Federico Bellezza</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--=====================================
  PLUGINS DE CSS
  ======================================-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="vistas/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.css">  
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Editor de texto -->
  <link rel="stylesheet" href="vistas/plugins/summernote/summernote-bs4.css">

  <!--=====================================
  PLUGINS DE JS
  ======================================-->

  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src="vistas/plugins/jquery-ui/jquery-ui.min.js"></script>

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>

  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="vistas/dist/js/demo.js"></script>

  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

   <!-- DataTables -->
  <script src="vistas/plugins/datatables/jquery.dataTables.js"></script>
  <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

     <!-- Editor de texto -->
  <script src="vistas/plugins/summernote/summernote-bs4.min.js"></script>

</head>

<body class="hold-transition sidebar-mini ">
<!-- Site wrapper -->
<div class="wrapper">

  <?php 

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] =="ok") {
    
    echo '<div class="wrepper">';

      include "modulos/head.php";//incluyo el archivo head que tiene el encabezado del AdminLTE

      include "modulos/menuLateral.php";//incluyo el modulo del menu lateral

      if(isset($_GET["ruta"])){
        if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "usuarios" ||
            $_GET["ruta"] == "clientes" ||
            $_GET["ruta"] == "perfil" ||           
            $_GET["ruta"] == "trabajos" ||
            $_GET["ruta"] == "estudios" ||
            $_GET["ruta"] == "logout" ||
            $_GET["ruta"] == "salir" ) {
          
          include "modulos/".$_GET["ruta"].".php";//incluyo a $_GET["ruta"] para que me traiga el archivo que le paso por variable get
        }else{
          include "modulos/404.php";
        }
        }else{
          include "modulos/inicio.php";
      }

      include "modulos/footer.php";//invluyo el modulo footer 

     echo'</div>';
  }else{
      include "modulos/login.php";//invluyo el modulo login si $_SESSION es != ok 

  }
   ?>
  


</div>
<!-- ./wrapper -->

<!-- js propio -->
  <script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/usuarios.js"></script>
  <script src="vistas/js/usuarios.js"></script>
</body>
</html>