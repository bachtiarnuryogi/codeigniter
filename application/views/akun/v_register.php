<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="<?php echo base_url('register'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" 
          placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>"
          placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>"
          placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_conf" value="<?php echo set_value('password_conf'); ?>"
          placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div><?php echo form_error('password_conf'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="<?php echo base_url('login'); ?>" class="text-center">I already have account?</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

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
<head>
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
  <title>Register - Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap.min.js"></script>
  
<body>
  <div class="login">
    <center><h2><font font size="5" color="#f2f2f2">Register <b>Admin</b></font></h2></center> 
    <br>
    <form action="<?php echo base_url('register'); ?>" method="post" onSubmit="return validasi()">
      <div>
        <label class="text-white">Username:</label>
          <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" 
          placeholder="Username">
      </div>
      <div>
        <label class="text-white">Email:</label>
          <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>"
          placeholder="Email">
      </div>
      <div>
        <label class="text-white">Password:</label>
          <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>"
          placeholder="Password">
      </div>
      <div>
        <label class="text-white">re-Password:</label>
          <input type="password" class="form-control" name="password_conf" value="<?php echo set_value('password_conf'); ?>"
          placeholder="Retype password">
      </div>
        <div class="icheck-primary">
          <input type="checkbox" id="agreeTerms" name="terms" value="agree">
          <label for="agreeTerms" class="text-white">
          Saya setuju
         </label>
       </div>    
      <div>
        <br>
            <button type="submit" class="btn btn-primary btn-block">Register</button><br>
      </div>
      <div>
        <font color="f2f2f2">Sudah Memiliki Akun?</font><a href="<?php echo base_url('login'); ?>"> &nbsp;Login
      </div>
    </form>
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
