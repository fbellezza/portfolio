<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bienvenido!</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">

        

        <div class="card-body">
         <?php

          if($_SESSION["perfil"] =="Cliente" || $_SESSION["perfil"] =="Especial"){

             echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>

             </div>

             </div>';

          }
          else{

              if($_SESSION["perfil"] =="Administrador"){
                  echo '<div class="box box-success">

                    <div class="box-header">

                      <h1>Esto solo lo ve el usuario administrador</h1>
                      <ul>
                        <li>Carguen las categorias de monotributo asi ya las tenemos para el simulador</li>
                        <li>El usuario cliente puede modificar su perfil</li>
                        <li>si quieren ver un usuario cliente: <br>
                          US: gustavo@gmail.com <br>
                          PS: gustavo123</li>
                        <li>El usuario cliente solo podra ver los archivo que subio el. En cambio el usuario administrador puede ver todos los archivos de toso los usuarios</li>
                        <li>reportar cualquier error</li>
                      </ul>



                    </div>

                  </div>';
                }
              }
          ?>

        </div>
        <!-- /.card-body -->
       
        
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->