 <!-- <div class="container">
  <form action="<?php //echo base_url('login/proseslogin') ?>" method="POST" class="login-email">
   <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
   <div class="input-group">
    <input type="email" placeholder="Email" name="email" value="" required>
   </div>
   <div class="input-group">
    <input type="password" placeholder="Password" name="password" value="" required>
   </div>
   <div class="input-group">
    <button name="submit" class="btn">Login</button>
   </div>
   <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
  </form>
 </div> -->

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <!-- <link rel="icon" type="image/jpg" href="img/logo/logo.jpg" sizes="32x32" />
  <link rel="icon" type="image/jpg" href="img/logo/logo.jpg" sizes="16x16" /> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/form-login.css">

  <title>ADIRA Bakery</title>
</head>
<body>
 <div class="alert alert-warning" role="alert">
 <?php if($this->session->flashdata('pesan') == 1){
     echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
 } 
 elseif ($this->session->flashdata('pesann')) {
   echo "<script>alert('Silahkan login terlebih dahulu')</script>";
 }elseif($this->session->flashdata('pesan')==2){
  echo "<script>alert('Tambah User Berhasil disimpan')</script>";
 }
 ?>

 </div>

 <div class="container">
  <form action="<?php echo base_url('login/proseslogin') ?>" method="post" class="login-email">
   <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
   <div class="input-group">
    <input type="email" placeholder="Email" name="email" >
    <?php echo form_error('email','<div class=" small ml-3">','</div>'); ?>
   </div>
   <div class="input-group">
    <input type="password" placeholder="Password" name="password">
    <?php echo form_error('password','<div class=" small ml-3">','</div>'); ?>
   </div>
   <div class="input-group">
    <button type="submit" class="btn">Login</button>
   </div>
   <p class="login-register-text">Anda belum punya akun? <a href="<?php echo site_url('login/register') ?>">Register</a></p>
  </form>
 </div>
</body>
</html>