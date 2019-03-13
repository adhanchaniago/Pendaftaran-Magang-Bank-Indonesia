<!DOCTYPE html>
<html>
<head>
  <title>AdminLTE 2 | Log in</title>
  <?php $this->load->view('include/css'); ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <a href="../../index2.html"><b>BANK </b>INDONESIA</a> -->
    <img src="<?php echo base_url('asset/home/images/logo_bi.png'); ?>" width="300" height="75">
  </div>
  <!-- /.login-logo -->
  <?php
  if($this->session->flashdata('sukses'))
  {
    echo '<script>alert("Berhasil Mendaftar");</script>';
  }
  ?>

  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php echo form_open('auth/prosesLogin'); ?>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-lg-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php $this->load->view('include/js'); ?>
</body>
</html>
