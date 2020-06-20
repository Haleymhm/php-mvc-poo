<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
 
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
 
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left">
        <img src="<?php echo URL_VIEW.'bootstrap-default/img/logovisualchile.png'; ?>" class="img" alt="User Image" width="200">
      </div>
      
    </div>
 
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MENU OPCIONES</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="user.php"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
      <br />
      <li>
        <a href="<?php echo URL_WEB; ?>controller/LogoutController.php" >
          <i class="fa fa-users"></i> <span>Salir</span>
        </a>
      </li>
      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>