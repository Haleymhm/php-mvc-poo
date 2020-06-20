<?php
//llamamos desde una carpeta publica el header
require_once 'public/overall/header.php'; 
   if (!isset($_SESSION['sesion_id'])){
     //si no existe la sesion enviamos al formulario de inicio de sesion
    include('public/overall/nosesion.php');
   }
 else { ?>
<?php 
//tomamos el control de lo que queremos mostrar en pantalla si se inicia la sesion mostarmos el header el menu y el footer 
include 'public/overall/menu-header.php'; ?>
<?php include 'public/overall/menu-aside.php'; ?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>&nbsp; </h1>
      <ol class="breadcrumb">
        <li><a href="<?php  echo $url_web.'admin/'; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>
 
    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-users"></i>
 
              <h3 class="box-title">Usuarios del sistema</h3>
              <button type="button"  class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal"> <i class="fa fa-user-plus"></i> </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Email</td>
                    <td width="100px">&nbsp;</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Haleym Hidalgo M</td>
                    <td>haleymhm@gmil.com</td>
                    <td> <a href="#" class="btn btn-primary"> <i class="fa fa-edit"></i> </a>
                         <a href="#" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
                    </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
 
        </div>
      <!-- Contenido de index -->
    </section>
  
 </div><!--//content wrapper-->
 
<?php 
 }
?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php require_once 'public/overall/footer.php'; ?>