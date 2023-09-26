<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Forgot Password (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background: url(<?php echo base_url();?>img/img3.jpg) no-repeat;background-position: center center; background-size: cover; background-attachment: fixed;">
<div class="login-box">
  <div class="bg-dark opacity-25">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Registra </b>tus datos</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Se enviarà un codigo de verificación a tu correo electrónico </p>
<?php 
echo form_open_multipart('usuariocontrl/validacion');
?>      
        
        <div class="input-group mb-3">
          <input autocapitalize="words" type="text" class="form-control bg-transparent text-light" placeholder="Nombre" name="nombre" id="nombre" value="<?= set_value('nombre'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <span class="text-danger"><?= form_error('nombre'); ?></span>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control bg-transparent text-light" placeholder="Primer Apellido" name="apellido1" id="apellido1" value="<?= set_value('apellido1'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <span class="text-danger"><?= form_error('apellido1'); ?></span>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control bg-transparent text-light" placeholder="Segundo Apellido" name="apellido2" id="apellido2" value="<?= set_value('apellido2'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <span class="text-danger"><?= form_error('apellido2'); ?></span>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control bg-transparent text-light" placeholder="Email" name="email" id="email" value="<?= set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <span class="text-danger"><?= form_error('email'); ?></span>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </div>
          <!-- /.col -->
        </div>
<?php
echo form_close();
?>
      <p class="mt-3 mb-1">
        <a href="login.html">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
