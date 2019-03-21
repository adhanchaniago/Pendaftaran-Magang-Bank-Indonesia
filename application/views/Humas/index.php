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
    <?php $this->load->view('include/sidebar_humas'); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if($this->session->flashdata('sukses'))
      {
        echo '<script>alert("Terima Kasih telah Melakukan Pendaftaran");</script>';
      }
      ?>
      
      <div class="row">
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jumlahpendaftar; ?></h3>

              <p>Jumlah Pendafaran</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $jumlahditerima; ?></h3>

              <p>Pendaftar Diterima</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <!-- Main row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Pendaftar Siswa/Mahasiswa Magang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="5">#</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>Jenis Kelamin</th>
                      <th>No Hp</th>
                      <th>Kota</th>
                      <th>Alamat Asal</th>
                      <th>Alamat Sekarang</th>
                      <th>Asal Sekolah</th>
                      <th>Jurusan</th>
                      <th>Tanggal Magang</th>
                      <th>Lama Magang</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach($umum as $row) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row['nama']; ?></td>
                      <td><?php echo $row['ttl']; ?></td>
                      <td><?php echo $row['jeniskelamin']; ?></td>
                      <td><?php echo $row['nohp']; ?></td>
                      <td><?php echo $row['kota']; ?></td>
                      <td><?php echo $row['alamat_asal']; ?></td>
                      <td><?php echo $row['alamat_sekarang']; ?></td>
                      <td><?php echo $row['asal_sekolah']; ?></td>
                      <td><?php echo $row['jurusan_sekolah']; ?></td>
                      <td><?php echo $row['tanggal_magang']; ?></td>
                      <td><?php echo $row['lama_magang']; ?></td>
                      <td><?php echo $row['status']; ?></td>
                      <td>
                        <?php
                        if($row['status'] == 'Belum Dikonfirmasi')
                        {
                          echo '<a href="'.base_url('admin/konfirmasipendaftar/').$row['id'].'" class="btn btn-success btn-sm">KONFIRMASI</a>';
                        }
                        else
                        {
                          echo '<a href="#" class="btn btn-success btn-sm">-</a>';
                        }
                        ?>
                        <a href="<?php echo base_url('pendaftar/').$row['id']; ?>" class="btn btn-primary">DETAIL</a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
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
