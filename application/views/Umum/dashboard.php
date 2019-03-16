<!DOCTYPE html>
<html>
<head>
  <title><?php echo SITE_NAME; ?></title>
  <?php $this->load->view('include/css'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <?php $this->load->view('include/header') ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php $this->load->view('include/sidebar'); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if($this->session->flashdata('sukses'))
      {
        echo '<script>alert("Terima Kasih telah Melakukan Pendaftaran");</script>';
      }
      ?>
      <!-- Main row -->
      <div class="row">
        <div class="col-lg-12">
          <?php
            if($hasilstatus == NULL)
            {
              echo '<div class="alert alert-success alert-dismissible">
                        <h4 class="text-center">
                          Selamat Datang.
                        </h4>
                      </div>';
            }
            else
            {
              if($hasilstatus[0]['status'] == 'Belum Dikonfirmasi')
              {
                echo '<div class="alert alert-danger alert-dismissible">
                        <h4 class="text-center">
                          Maaf! Pendaftaran Anda Belum Dikonfirmasi oleh Pihak Bank Indonesia. <br>
                          Mohon Menunggu Sampai Kami Mengabari Kembali
                        </h4>
                      </div>';
              }
              if($hasilstatus[0]['status'] == 'Diterima')
              {
                echo '<div class="alert alert-success alert-dismissible">
                        <h4 class="text-center">
                          Selamat! Pendaftaran Anda Telah Diterima. <br>
                          Silahkan Menunggu Kabar Selanjutnya Melalui SMS/EMAIL.
                        </h4>
                      </div>';
              }
            }
            
            ?>
        </div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php $this->load->view('include/footer'); ?>
  </footer>
</div>
<!-- ./wrapper -->

<!-- JAVASCRIPT -->
<?php $this->load->view('include/js'); ?>
</body>
</html>
