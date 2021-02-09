<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">perfil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  
                  <?php

                    if($_SESSION["foto"] != ""){

                      echo '<img src="'.$_SESSION["foto"].'" class="profile-user-img img-fluid img-circle">';

                    }else{


                      echo '<img src="vistas/img/usuarios/default/anonymous.png" class="profile-user-img img-fluid img-circle">';

                    }


                    ?>
                </div>

                <h3 class="profile-username text-center"><?php  echo $_SESSION["nombre"] ; ?></h3>

                <p class="text-muted text-center"><?php  echo $_SESSION["perfil"] ; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Mienbro desde: </b> <a class="float-right">12/12/2012</a>
                  </li>
                 
                </ul>
                 
                
                
                <button class="btn btn-warning btnEditarUsuario" idUsuario="<?php echo $_SESSION["id"] ;?>" data-toggle="modal" data-target="#modalEditarUsuario">Editar<i class="fas fa-pencil-alt"></i></button>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
          </div>
          <!-- /.col -->
          <div class="col-md-9">
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!--=====================================
MODAL EDITAR USUARIO
======================================-->
  
<div id="modalEditarUsuario" class="modal fade" >
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background: #343a40; color: #fff;">

          <h4 class="modal-title">Editar Usuario</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>


        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="card-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>
            </div> 

            <!-- ENTRADA PARA EL APELLIDO -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>
              <input type="text" class="form-control input-lg" id="editarApellido" name="editarApellido" value="" required>
            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>
              </div>


            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
              </div>
                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">

                <input type="hidden" id="passwordActual" name="passwordActual">

              </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
              </div>

                 <select class="form-control input-lg" name="editarPerfil">
                  
                  <option value="" id="editarPerfil"></option>

                  <option value="Administrador">Administrador</option>

                  <option value="Cliente">Cliente</option>

                </select>

              </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="editarFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="fotoActual" id="fotoActual">

            </div>

          </div>

        

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar usuario</button>

        </div>

     <?php

          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();

        ?> 

      </form>

    </div>

  </div>

</div>