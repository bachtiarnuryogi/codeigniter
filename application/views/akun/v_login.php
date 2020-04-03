<?php
?><!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
	<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../assets/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" value="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->
      <p class="mb-0">
        <a href="<?php echo base_url('register')?>" class="text-center">Register Now</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="assets/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>

</body>
</html>
=======
<html>
<style>
    body {
     background-image: url("<?php echo base_url('gambar/b.jpg')?>");
     background-color: #cccccc;
    }
    input[type=text],[type=password]{
        width:100%;
        padding:6px 6px;
        margin: 10px 0;
        color: #f2f2f2;
      }
      a:link {
      color: #1f9fc2;
      text-decoration: none;
    }
    a:visited {
      color: #1f9fc2;
    }
    a:hover {
      color: #024d61;
    }
    a:active {
      color: #024d61;
    }
  </style>
  <title>Login - Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap.min.js"></script>
  
</head>
<body>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/> 
  <div class="login">
    <h2><center><font size="5" color="#f2f2f2">Login <b>Admin</b></font></h2></center>
    <br>
    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post" onSubmit="return validasi()">
      <div>
        <label class="text-white">Username:</label>
        <input type="username" class="form-control" placeholder="username.." name="username">
      </div>
      <div>
        <label class="text-white">Password:</label>
          <input type="password" class="form-control" placeholder="password.." name="password">
      </div>
      <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" class="text-white">
                Remember Me
              </label>
            </div>     
      <div>
        <br>
          <button type="submit" class="btn btn-primary btn-block" value="login">Sign In</button><br>
      </div>
      <div>
        <font color="#f2f2f2">Belum Memiliki Akun?</font><a href="<?php echo base_url('register')?>">&nbsp;Daftar</div> 
    </form>
    </div>
  </div>
</body>
 
<script type="text/javascript">
  function validasi() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;   
    if (username != "" && password!="") {
      return true;
    }else{
      alert('Username Atau Password Tidak Boleh Kosong !');
      return false;
    }
  }
 
</script>
</html>
>>>>>>> 3549e69... codeigniter
