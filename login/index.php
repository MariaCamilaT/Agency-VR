<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>
  <link rel="stylesheet" href="./style.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/template/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/template/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/template/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;1,100&display=swap" rel="stylesheet">
</head>
<body class="hold-transition login-page" id="body">
<div class="login-box">
  <!-- /.login-logo --> 
  <div class="card card-outline card-primary" id="container_form">
    <div class="card-header text-center" id="reset_line">
      <a href="../public/template/AdminLTE-3.2.0/index2.html" class="tittle"> AGENCY VR</a>
    </div>
    <div class="card-body" id="card">
      <p class="font" >Ingresa tus datos</p>

      <form action="../app/controladores/login/ingreso.php" method="post">
        <div class="input-group mb-3">
          <input name="email" type="email" class="inputs" placeholder="Correo">
          <div class="input-group-append">
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="clave_usuario" type="password" class="inputs" placeholder="Contraseña">
          <div class="input-group-append">
          </div>
        </div>
        <div class="row" id="change_sign">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label class="font" for="remember">
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4" id="width_button">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a  class="link" href="forgot-password.html">Olvidé mi contraseña</a>
      </p>
      <p class="mb-0">
        <a class="link" href="register.html" class="text-center">Registrar una nueva cuenta</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/template/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/template/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/template/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
