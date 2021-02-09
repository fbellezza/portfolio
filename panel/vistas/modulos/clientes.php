<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrador de Clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">Clientes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->


  </section>

  <section class="content">

    <div class="card">

      <div class="card-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">
          
          Agregar cliente

        </button>

      </div>

      <div class="card-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Razon Social</th>
           <th>Nombre de Fantasia</th>
           <th>Dirección</th>
           <th>Provincia</th>
           <th>Pais</th>
           <th>Email</th> 
           <th>Teléfono</th>
           <th>Logo</th>
           <th>Acciones</th>


         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

          foreach ($clientes as $key => $value) {
            

            echo '<tr>

                    <td>'.($key+1).'</td>

                    <td>'.$value["razonSocial"].'</td>

                    <td>'.$value["nombreFantasia"].'</td>

                    <td>'.$value["direccion"].'</td>

                    <td>'.$value["provincia"].'</td>

                    <td>'.$value["pais"].'</td>

                    <td>'.$value["email"].'</td>             

                    <td>'.$value["telefono"].'</td>

                    <td>'.$value["foto"].'</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'"><i class="fas fa-edit"></i></button>

                        <button class="btn btn-danger btnEliminarCliente" idCliente="'.$value["id"].'"><i class="fas fa fa-times"></i></button>

                        </div>  

                    </td>

                  </tr>';
          
            };

        ?>
   
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA LA RAZON SOCIAL -->
            
            <div class="form-group">

              <label class="control-label">Razón social</label>
              
              <div class="input-group">  

                <input class="form-control valid" id="nuevaRazonSocial" name="nuevaRazonSocial" type="text" required="" autocomplete="off" placeholder="Federico Gomez">

              </div>

            </div>

            <!-- ENTRADA PARA EL NOMBRE DE FANTASIA -->
            
            <div class="form-group">

              <label class="control-label">Nombre de Fantasía</label>
              
              <div class="input-group">

                <input class="form-control valid" id="nuevoNombreFantasia" name="nuevoNombreFantasia" type="text" required="" autocomplete="off" placeholder="S&amp;G Estudio">

              </div>

            </div>

            <!-- ENTRADA PARA EL TRATAMIENTO IMPOSITIVO -->
            
            <div class="form-group">

              <label class="control-label">Tratamiento Impositivo</label>
              
              <div class="input-group">
              
                <select class="form-control" id="nuevoImpositivo" name="nuevoImpositivo" required="">
                    <option value="">Seleccione tratamiento</option>
                    <option value="IVA Responsable Inscripto">IVA Responsable Inscripto</option>
                    <option value="IVA Responsable no Inscripto">IVA Responsable no Inscripto</option>
                    <option value="IVA no Responsable">IVA no Responsable</option>
                    <option value="IVA Sujeto Exento">IVA Sujeto Exento</option>
                    <option value="Consumidor Final">Consumidor Final</option>
                    <option value="Responsable Monotributo">Responsable Monotributo</option>
                    <option value="Sujeto no Categorizado">Sujeto no Categorizado</option>
                    <option value="Proveedor del Exterior">Proveedor del Exterior</option>
                    <option value="Cliente del Exterior">Cliente del Exterior</option>
                    <option value="IVA Liberado - Ley Nº 19.640">IVA Liberado - Ley Nº 19.640</option>
                    <option value="IVA Responsable Inscripto - Agente de Percepción">IVA Responsable Inscripto - Agente de Percepción</option>
                    <option value="Pequeño Contribuyente Eventual">Pequeño Contribuyente Eventual</option>
                    <option value="Monotributista Social">Monotributista Social</option>
                    <option value="Pequeño Contribuyente Eventual Social">Pequeño Contribuyente Eventual Social</option> 
                    <option value="Otro">Otro</option>   
                </select>

              </div>

            </div>


            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">

              <label class="control-label">Dirección</label> 
              
              <div class="input-group">
              
                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA PROVINCIA -->
            
            <div class="form-group">

              <label class="control-label">Provincia</label>
              
              <div class="input-group">
                
                <input type="text" class="form-control input-lg" name="nuevaProvincia" placeholder="Ingresar Provincia" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA PAIS -->
            
            <div class="form-group">

              <label class="control-label">Pais</label>
              
              <div class="input-group">
                
                <input type="text" class="form-control input-lg" name="nuevoPais" placeholder="Ingresar Pais" required>

              </div>

            </div>
            
            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">

              <label class="control-label">Email</label> 
              
              <div class="input-group">
              
                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">

              <label class="control-label" >Telefono</label> 
              
              <div class="input-group">             
                
                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>            

            
            <!-- ENTRADA PARA EL TIPO DE DOCUMENTO -->
            
            <div class="form-group">

              <label class="control-label" for="RazonSocial">Tipo Documento *</label>
              
              <div class="input-group">
              
                <select class="form-control" id="nuevoTipoDocumento" name="nuevoTipoDocumento" required="">
                  <option value="">-Seleccione tipo documento-</option>
                  <option value="cuit" selected="">CUIT</option>
                  <option value="dni">DNI</option>     
                </select>

              </div>

            </div>


            <!-- ENTRADA PARA EL NUMERO DE DOCUMENTO -->
            
            <div class="form-group">

              <label class="control-label">Número</label>
              
              <div class="input-group">              
                  
                <input name="nuevoNumeroDocumento" class="form-control" type="number" id="nuevoNumeroDocumento" maxlength="8" placeholder="1234567890" required="">

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->
            <div class="input-group mb-3">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>
            </div>  
              <img src="vistas/img/clientes/default/logoDefault.png" class="img-thumbnail previsualizar" width="100px">                     
  

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </div>

      </form>

      <?php

        $crearCliente = new ControladorClientes();
        $crearCliente -> ctrCrearCliente();

      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CLIENTE
======================================-->

<div id="modalEditarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA LA RAZON SOCIAL -->
            
            <div class="form-group">

              <label class="control-label">Razón social</label>
              
              <div class="input-group">  

                <input class="form-control valid" id="editarRazonSocial" name="editarRazonSocial" value="" type="text" required="" autocomplete="off" value="Federico Gomez">

              </div>

            </div>

            <!-- ENTRADA PARA EL NOMBRE DE FANTASIA -->
            
            <div class="form-group">

              <label class="control-label">Nombre de Fantasía</label>
              
              <div class="input-group">

                <input class="form-control valid" id="editarNombreFantasia" name="editarNombreFantasia" value="" type="text" required="" autocomplete="off" value="S&amp;G Estudio">

              </div>

            </div>

            <!-- ENTRADA PARA EL TRATAMIENTO IMPOSITIVO -->
            
            <div class="form-group">

              <label class="control-label">Tratamiento Impositivo</label>
              
              <div class="input-group">
              
                <select class="form-control" id="editarImpositivo" name="editarImpositivo" required="">
                    <option value="">Seleccione tratamiento</option>
                    <option value="1">IVA Responsable Inscripto</option>
                    <option value="2">IVA Responsable no Inscripto</option>
                    <option value="3">IVA no Responsable</option>
                    <option value="4">IVA Sujeto Exento</option>
                    <option value="5">Consumidor Final</option>
                    <option value="6">Responsable Monotributo</option>
                    <option value="7">Sujeto no Categorizado</option>
                    <option value="8">Proveedor del Exterior</option>
                    <option value="9">Cliente del Exterior</option>
                    <option value="10">IVA Liberado - Ley Nº 19.640</option>
                    <option value="11">IVA Responsable Inscripto - Agente de Percepción</option>
                    <option value="12">Pequeño Contribuyente Eventual</option>
                    <option value="13">Monotributista Social</option>
                    <option value="14">Pequeño Contribuyente Eventual Social</option> 
                    <option value="15">Otro</option>   
                </select>

              </div>

            </div>


            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">

              <label class="control-label">Dirección</label> 
              
              <div class="input-group">
              
                <input type="text" class="form-control input-lg" id="editarDireccion" name="editarDireccion" value="" placeholder="Ingresar dirección" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA PROVINCIA -->
            
            <div class="form-group">

              <label class="control-label">Provincia</label>
              
              <div class="input-group">
                
                <input type="text" class="form-control input-lg" id="editarProvincia" name="editarProvincia" value="" placeholder="Ingresar Provincia" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA PROVINCIA -->
            
            <div class="form-group">

              <label class="control-label">Pais</label>
              
              <div class="input-group">
                
                <input type="text" class="form-control input-lg" id="editarPais" name="editarPais" value="" placeholder="Ingresar Pais" required>

              </div>

            </div>
            
            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">

              <label class="control-label">Email</label> 
              
              <div class="input-group">
              
                <input type="email" class="form-control input-lg" name="editarEmail"  id="editarEmail" value="" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">

              <label class="control-label" >Telefono</label> 
              
              <div class="input-group">             
                
                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" value="" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>            

            
            <!-- ENTRADA PARA EL TIPO DE DOCUMENTO -->
            
            <div class="form-group">

              <label class="control-label" for="RazonSocial">Tipo Documento *</label>
              
              <div class="input-group">
              
                <select class="form-control" id="editarTipoDocumento" name="editarTipoDocumento" required="">
                  <option value="">-Seleccione tipo documento-</option>
                  <option value="cuit" selected="">CUIT</option>
                  <option value="dni">DNI</option>     
                </select>

              </div>

            </div>


            <!-- ENTRADA PARA EL NUMERO DE DOCUMENTO -->
            
            <div class="form-group">

              <label class="control-label">Número</label>
              
              <div class="input-group">              
                  
                <input name="editarNumeroDocumento" class="form-control" type="number" id="editarNumeroDocumento" maxlength="8" placeholder="Numero" required=""  value="20329179258">

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->
            <div class="form-group">

               <label class="control-label">Logotipo</label>

             <div class="input-group mb-3">
                          
              <input type="file" class="editarFoto" name="editarFoto">

                <p class="help-block">Peso máximo de la foto 2MB</p>

            </div>
              <img src="vistas/img/clientes/default/logoDefault.png" class="img-thumbnail previsualizar" width="100px">
              <input type="hidden" name="fotoActual" id="fotoActual">
          </div>

             
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </div>

      </form>

      <?

        $editarCliente = new ControladorClientes();
        $editarCliente -> ctrEditarCliente();

      ?>

    

    </div>

  </div>

</div>

<?

  $eliminarCliente = new ControladorClientes();
  $eliminarCliente -> ctrEliminarCliente();

?>
  