<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a><b>bloguero</b>EC</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicie sesión</p>
 
    <div onKeyPress="return runScriptLogin(event)">
      <div class="form-group has-feedback">
        <input type="email" id="correo" class="form-control" placeholder="Correo">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" class="form-control" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" id="sesion" value="1"> Recuerdeme
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="pull-right btn btn-success" onClick="goLogin()">Login <i class="fa fa-arrow-circle-right"></i></button>
        </div>
        <!-- /.col -->
      </div>
    </div><!--run script-->
 
  </div>
  <!-- /.login-box-body -->
 <div id="_AJAX_LOGIN_"></div>
</div>
<!-- /.login-box -->
<script src="<?php echo URL_VIEW; ?>bootstrap-default/js/login.js"></script>