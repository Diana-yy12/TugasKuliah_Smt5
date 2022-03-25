<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/jpg" href="img/logo/logo.jpg" sizes="32x32" />
    <link rel="icon" type="image/jpg" href="img/logo/logo.jpg" sizes="16x16" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/form-login.css">
    <title>ADIRA Bakery</title>
</head>
<body>
 <div class="container">
  <form action="<?php echo base_url('login/tambah_user') ?>" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
   <div class="input-group">
        <input type="text" placeholder="Username" name="username" required>
        <small><?php echo form_error('username','<div class="text-danger"></div>'); ?></small>
   </div>
   <div class="input-group">
        <input type="text" placeholder="Nama Lengkap" name="nama" required>
        <small><?php echo form_error('nama','<div class="text-danger"></div>'); ?></small>
   </div>
   <div class="input-group">
        <input type="text" placeholder="Nomor Telepon" name="no_telp" required>
        <small><?php echo form_error('no_telp','<div class="text-danger"></div>'); ?></small>
   </div>
   <div class="input-group">
        <input type="text" placeholder="Alamat" name="alamat" required>
        <small><?php echo form_error('alamat','<div class="text-danger"></div>'); ?></small>
   </div>
   <div class="input-group">
        <input type="email" placeholder="Email" name="email" required>
        <small><?php echo form_error('email','<div class="text-danger"></div>'); ?></small>
   </div>
   <div class="input-group">
        <input type="password" placeholder="Password" name="password" required>
        <small><?php echo form_error('password','<div class="text-danger"></div>'); ?></small>
    </div>
    <div class="input-group">
        <input type="password" placeholder="Confirm Password" name="cpassword" required>
        <small><?php echo form_error('cpassword','<div class="text-danger"></div>'); ?></small>
   </div>
   <div class="input-group">
    <button name="submit" class="btn">Register</button>
   </div>
   <p class="login-register-text">Anda sudah punya akun? <a href="<?php echo base_url('login') ?>">Login </a></p>
  </form>
 </div>
</body>
</html>