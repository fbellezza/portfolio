<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio" class="brand-link">
      <img src="vistas/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminFEB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php

          if($_SESSION["foto"] != ""){

            echo '<img src="'.$_SESSION["foto"].'" class="user-image img-circle elevation-2">';

          }else{


            echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';

          }


          ?>

          
        </div>
        <div class="info">
          <a href="perfil" class="d-block"><?php  echo $_SESSION["nombre"] ; ?>
            
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php

          if($_SESSION["perfil"] =="Administrador"){
            echo '
          <!-- boton de dashboard-->
          <!--
          <li class="nav-item has-treeview">
            <a href="inicio" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          -->

          <!-- boton de Usuarios-->
          <li class="nav-item has-treeview">
            <a href="usuarios" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>

          <!-- boton de Clientes-->
           
          <li class="nav-item has-treeview">
            <a href="clientes" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Clientes
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          
          <!-- boton de Perfil-->
          <li class="nav-item has-treeview">
            <a href="perfil" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Perfil
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>

          <!-- boton de Trabajos-->
          <li class="nav-item has-treeview">
            <a href="trabajos" class="nav-link">
              <i class="nav-icon fas fa-file-code"></i>
              <p>
                Trabajos
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>

          <!-- boton de Estudios-->
          <li class="nav-item has-treeview">
            <a href="estudios" class="nav-link">
            <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Estudios
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>

          
          '; }
?>
          

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>