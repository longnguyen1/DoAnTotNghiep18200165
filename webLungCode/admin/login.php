<?php

require '../config.php';
//1. khai báo lớp User
//2. Áp dụng

$errors = [];
if(isset($_POST['email'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  
  if(empty($email)){
    $errors['email'] = 'Email không để trống';
  }

  if(empty($pass)){
    $errors['pass'] = 'Mật khẩu không để trống';
  }
  
  if(!$errors){
    $user = Admin::checkLogin($email,$pass);
    print_r($user);
    if($user){
      $_SESSION['admin_login']= $user;
      header('location: index.php');
    }else{
      $errors['login_faild'] = 'Tài khoản hoặc mật khẩu không đúng';
    }
  }
}

//$user = Admin::checkLogin('nguyenthanhlong601@gmail.com','123456');
//print_r($user);


?>

<!DOCTYPE html>
<h>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="">Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
      <?php if($errors): ?>
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        
          <?php foreach ($errors as $er): ?>
          <li><?php echo $er;?></li>
          <?php endforeach;?>
        
      </div>
      <?php endif;?>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name = "email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name = "password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <!--<a href="index.php"> -->
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
          </a>
        </div>
        <!-- /.col -->
      </div>
    </form>
     <!-- /.social-auth-links -->

     <a href="#">I forgot my password</a><br>
    <a href="register.php" class="text-center">Register a new membership</a>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

</body>
</html>
