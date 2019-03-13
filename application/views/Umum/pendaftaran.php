<!DOCTYPE html>
<html>
<head>
  <title>AdminLTE 2 | Dashboard</title>
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
      <button class="btn btn-primary" data-toggle="modal" data-target="#modal-persyaratan">PERSYARATAN</button>
    </section>

    <!-- Main content -->
    <section class="content">
            <!-- Main row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header box-solid box-primary">
              <h3><b>Pendaftaran</b></h3>
            </div>
            <?php echo form_open_multipart('umum/tambahPendaftaran'); ?>
              <!-- BOX BODY -->
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" oninput="this.value = this.value.toUpperCase()">
                    </div>

                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" name="ttl">
                    </div>

                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jeniskelamin">
                        <option value="">--- Silahkan Pilih ---</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>No Handphone Aktif</label>
                      <input type="number" class="form-control" name="nohp">
                    </div>

                    <div class="form-group">
                      <label>Asal Kota</label>
                      <select class="form-control select2" name="kota">
                        <option value="">--- Pilih Kota/Kabupaten ---</option>
                        <?php
                        foreach($kota as $kota)
                        {
                          echo '<option value="'.$kota['kota_nama'].'">'.$kota['kota_nama'].'</option>';
                        }
                        ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Alamat Asal</label>
                      <input type="text" class="form-control" name="alamat_asal" oninput="this.value = this.value.toUpperCase()">
                    </div>                

                    <div class="form-group">
                      <label>Alamat Sekarang</label>
                      <input type="text" class="form-control" name="alamat_sekarang" oninput="this.value = this.value.toUpperCase()">
                    </div>

                    <div class="form-group">
                      <label>Asal Sekolah/Universitas</label>
                      <input type="text" class="form-control" name="asal_sekolah" oninput="this.value = this.value.toUpperCase()">
                    </div>

                    <div class="form-group">
                      <label>Jurusan Sekolah/Universitas</label>
                      <input type="text" class="form-control" name="jurusan_sekolah" oninput="this.value = this.value.toUpperCase()">
                    </div>                    

                    <div class="form-group">
                      <label>Proposal Magang</label>
                      <input type="file" class="form-control" name="berkas_magang">
                    </div>

                    <div class="form-group">
                      <label>Surat Rekomendasi Magang</label>
                      <input type="file" class="form-control" name="berkas_rekomendasi">
                    </div>

                    <div class="form-group">
                      <label>CV/Portofolio</label>
                      <input type="file" class="form-control" name="cv">
                    </div>

                    <div class="form-group">
                      <label>Pas Photo 3x4 (Background Biru)</label>
                      <input type="file" class="form-control" name="pasphoto">
                    </div>

                    <div class="form-group">
                      <label>Tanggal Magang</label>
                      <input type="date" class="form-control" name="tanggal_magang">
                    </div>

                    <div class="form-group">
                      <label>Lama Magang</label>
                      <select class="form-control" name="lama_magang">
                        <option value="">--- Pilih Bulan ---</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>

                  </div>
                </div>

              </div>
              <!-- BOX BODY -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block btn-lg">PROSES</button>
              </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->

      <!-- MODAL -->
      <div class="modal fade" id="modal-persyaratan">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Persyaratan Pendaftaran Magang</h4>
            </div>
            <div class="modal-body">
              <p>;</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- MODAL -->

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
