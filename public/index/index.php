<?php
require_once 'public/overall/header.php'; 
   if (!isset($_SESSION['sesion_id'])){
    include('public/overall/nosesion.php');
   }
 else { ?>
<?php include 'public/overall/menu-header.php'; ?>
<?php include 'public/overall/menu-aside.php'; ?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perfil de Usuario
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">perfil de usuario</li>
      </ol>
    </section>
 
    <!-- Main content -->
    <section class="content">
 
      <div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('<?php echo URL_VIEW; ?>bootstrap-default/img/bg_user.jpg') center center;">
              <h3 class="widget-user-username"><b><?php echo $_usuario[$_SESSION['sesion_id']]['nombre_user']; ?></b></h3>
              <h5 class="widget-user-desc">Programador Web</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo URL_VIEW; ?>bootstrap-default/img/<?php echo $_usuario[$_SESSION['sesion_id']]['imagen_user']; ?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">&nbsp;</h5>
                    <span class="description-text">&nbsp;</span>
                  </div>
                </div>
 
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">&nbsp;</h5>
                    <span class="description-text">&nbsp;</span>
                  </div>
                </div>
 
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">&nbsp;</h5>
                    <span class="description-text">&nbsp;</span>
                  </div>
                </div>
 
              </div>
              <!-- /.row -->
            </div><!--footer-->
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 
 
 
      <div class="row">
        <div class="col-md-4">
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Información</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Educación</strong>
 
              <p class="text-muted">
                Instituto Universitario para la Informatica. (Venezuela)
              </p>
 
              <hr>
 
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
 
              <p class="text-muted">Santiago, Región Metropolitana de Santiago, Chile</p>
 
              <hr>
 
              <strong><i class="fa fa-pencil margin-r-5"></i> Habilidades</strong>
 
              <p>
                <span class="label label-success">Php</span>
                <span class="label label-danger">Mysql</span>
                <span class="label label-warning">Ajax</span>
                <span class="label label-info">Bootstrap</span>
              </p>
 
              <hr>
 
              <strong><i class="fa fa-pencil margin-r-5"></i> Experto en</strong>
 
              <p>
                <span class="label label-info">Programación</span>
              </p>
 
              <hr>
 
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
 
              <p>Amante a la programación web,dedicado al backend</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
 
        </div>

         
        <div class="col-md-6">
                  <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Redes Sociales:</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-square"></i></span>
                <input type="text" class="form-control" value="haleymhm@gmail.com" disabled="disabled">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                <input type="text" class="form-control" value="@haleymhm" disabled>
              </div>
              <br>
 
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                <input type="text" class="form-control" value="haleymhidalgomoyetones" disabled>
              </div>
              <br>
 
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-github"></i></span>
                <input type="text" class="form-control" value="haleymhm" disabled="disabled">
              </div>
              <br>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div><!--col-->
      </div><!--row-->
    </section>
  </div><!--content wrapper-->
 
<?php 
 }
?>
<?php require_once 'public/overall/footer-index.php'; ?>
<?php require_once 'public/overall/footer.php'; ?>