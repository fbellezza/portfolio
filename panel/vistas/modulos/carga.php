<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Carga de Archivos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Carga de Archivos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarArchivos">
          
          Agregar Archivos

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tabla">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Usuario</th>
           <th>Nombre</th>           
           <th>Archivo</th>
           <th>Fecha</th>
           <th>Descargar</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
          
          
          <?php

          if($_SESSION["perfil"] =="Administrador"){
            
            $item = null;
            $valor = null;

            $carga = ControladorCarga::ctrMostrarCarga($item, $valor);

            foreach ($carga as $key => $value){
         
              echo ' <tr>
                  <td>'.$value["id"].'</td>
                  <td>'.$value["usuario"].'</td>
                  <td>'.$value["nombre"].'</td>';

                  if($value["ruta"] != ""){

                    echo '<td><img src="'.$value["ruta"].'" class="img-thumbnail" width="40px"></td>';

                  }else{

                    echo '<td>no disponible</td>';

                  }

                  echo '<td>'.$value["fecha"].'</td>
                        <td><a class="btn btn-secondary" role="button" href="'.$value["ruta"].'" target="_blank" download>            
                             Descargar
                            </a></td>
                  
                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-danger btnEliminarArchivo" idArchivo="'.$value["id"].'" archivo="'.$value["ruta"].'" ><i class="fa fa-times"></i></button>

                    </div>  

                  </td>

                </tr>';
            }

          }


          if($_SESSION["perfil"] =="Cliente"){
            
            $item = "usuario";
            $valor = $_SESSION["mail"];

            $carga = ControladorCarga::ctrMostrarCarga($item, $valor);

            foreach ($carga as $key => $value){
         
              echo ' <tr>
                  <td>'.$value["id"].'</td>
                  <td>'.$value["usuario"].'</td>
                  <td>'.$value["nombre"].'</td>';

                  if($value["ruta"] != ""){

                    echo '<td><img src="'.$value["ruta"].'" class="img-thumbnail" width="40px"></td>';

                  }else{

                    echo '<td>no disponible</td>';

                  }

                  echo '<td>'.$value["fecha"].'</td>
                        <td><a class="btn btn-secondary" role="button" href="'.$value["ruta"].'" target="_blank" download>            
                             Descargar
                            </a></td>
                  
                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-danger btnEliminarArchivo" idArchivo="'.$value["id"].'" archivo="'.$value["ruta"].'" ><i class="fa fa-times"></i></button>

                    </div>  

                  </td>

                </tr>';
            }

          }
        ?> 

           

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR ACHIVOS
======================================-->

<div id="modalAgregarArchivos" class="modal fade" >
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background: #343a40; color: #fff;">

          <h4 class="modal-title">Nuevos Archivos</h4>

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
              <input type="text" name="nuevoNombre" class="form-control" placeholder="Nombre">
              <p class="help-block">Escriba el nombre lo que quiere subir sin espacios ni caracteres especiales. Ej: FacturasMayo</p>
            </div> 


            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="input-group mb-3">
              
              <div class="panel">SUBIR ARCHIVO</div>

              <input type="file" class="nuevoArchivo" name="nuevoArchivo">

              <p class="help-block">Peso máximo de la foto 2MB</p>

            </div>

          </div>

       

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Archivo</button>

        </div>

        <?php

          $crearArchivo = new ControladorCarga();
          $crearArchivo -> ctrCarga();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

  $borrarArchivo = new ControladorCarga();
  $borrarArchivo -> ctrBorrarArchivo();

?> 