<!DOCTYPE html>
<html>

<head>
  <title><?php echo SITE_NAME; ?></title>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--// Meta tag Keywords -->

  <!-- Custom-Files -->
  <link href="<?php echo base_url('asset/home/'); ?>css/bootstrap.css" rel="stylesheet">
  <!-- Bootstrap-Core-CSS -->
  <link href="<?php echo base_url('asset/home/'); ?>css/css_slider.css" type="text/css" rel="stylesheet" media="all">
  <!-- banner slider -->
  <link href="<?php echo base_url('asset/home/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!-- Style-CSS -->
  <link href="<?php echo base_url('asset/home/'); ?>css/font-awesome.min.css" rel="stylesheet">
  <!-- //Custom-Files -->

  <!-- Web-Fonts -->
  <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
   rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
   rel="stylesheet">
  <!-- //Web-Fonts -->
</head>

<body>
  <!-- header -->
  <header id="home">
    <!-- top-bar -->
    <div class="top-bar py-2 bg-li">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 top-social-w3pvt-am mt-lg-1 mb-md-0 mb-1 text-lg-left text-center">
            <div class="row">
              <div class="col-xl-4 header-top_w3layouts border-right">
                <p class="text-bl">
                  <span class="fa fa-map-marker mr-2"></span>Jl. Imam Bardjo SH No.4, Semarang
                </p>
              </div>
              <div class="col-xl-4 header-top_w3layouts text-md-right">
                <p class="text-bl">
                  <span class="fa fa-phone mr-2"></span>(024) 8310246
                </p>
              </div>
              <div class="col-xl-4">
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#registerModal">Register</button>
                <a href="<?php echo base_url('login'); ?>" class="btn btn-success btn-sm">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- //top-bar -->

  <!-- navigation -->
  <div class="main-top">
    <div class="container d-lg-flex">
      <!-- logo -->
      <h1 class="logo-style-res float-left">
        <a class="navbar-brand" href="index.html">
          <img src="<?php echo base_url('asset/home/images/'); ?>logo_bi.png" style="max-width: 30%; padding: 15px;"> <span></span>
        </a>
      </h1>
      <!-- //logo -->
    </div>
  </div>
  <!-- //navigation -->

  <!-- Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <?php echo form_open('auth/prosesDaftar', array('autocomplete' => 'off')); ?>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>

  <!-- banner -->
  <div class="banner_w3lspvt">
    <div class="csslider infinity" id="slider1">
      <input type="radio" name="slides" checked="checked" id="slides_1" />
      <input type="radio" name="slides" id="slides_2" />
      <input type="radio" name="slides" id="slides_3" />
      <ul class="banner banner1">
        <li class="banner-top1">
          <div class="container">
            <div class="banner-info_w3ls">
              <h5 class="text-li"> </h5>
              <!-- <h3 class="text-wh font-weight-bold mt-2 mb-5">BANK INDONESIA <br></h3> -->
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- //banner -->

  <!-- about -->
  <section class="w3ls-bnrbtm py-5" id="about">
    <div class="container py-xl-5 py-lg-3">
      <h5 class="text-colors let-spa">Sejarah Singkat  </h5>
      <div class="row">
        <div class="col-lg-12 pl-xl-12 mt-lg-0 mt-4">
          <p style="color: #000;">&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​Kantor Bank Indonesia Semarang pertama kali dibuka pada tanggal 1 Maret 1829 sebagai Kantor Cabang De Javasche Bank N.V yang pertama di seluruh Hindia Belanda, setelah mendapat persetujuan dari Gubernur Jenderal Hindia Belanda. Pembukaan kantor tersebut didasari atas pertimbangan bahwa pada saat itu Kota Semarang merupakan kota pelabuhan besar di pulau Jawa dengan prospek perekonomian dan perdagangan yang sangat baik. De Javasche Bank Semarang Branch dibangun berdasarkan sistem profit sharing antara pihak De Javasche Bank dengan pihak pengusaha lokal di Semarang pada saat itu.Pada masa pendudukan tentara Jepang di Indonesia (1942-1945) atau selama berlangsungnya Perang Dunia II, bank-bank milik Belanda, Inggris, dan China yang ada di Indonesia (Hindia Belanda) banyak yang dilikuidasi atau ditutup oleh pemerintah pendudukan Jepang yang berkuasa sejak tahun 1942 hingga 10 Oktober 1945.
          </p>
          <p style="color: #000;">&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​&nbsp;​
            Sejalan dengan makin pesatnya perkembangan kegiatan dan tugas yang dilakukan oleh Kantor Bank Indonesia Semarang, maka dibutuhkan suatu gedung perkantoran baru yang lebih luas dan memadai untuk memudahkan pelaksanaan tugas sehari-hari. Pada tahun 1990, dimulailah pembangunan gedung baru Kantor Bank Indonesia Semarang yang berlokasi di Jl. Imam Bardjo, SH No. 4, yang dibangun di atas tanah seluas 22.220 m2 dengan luas bangunan 5.522 m2, sedangkan luas lantai gedung perkantoran adalah 18.288 m2 (8 lantai). Pada tanggal 23 Mei 1994, Kantor Bank Indonesia Semarang secara resmi menempati gedungnya yang baru di Jl. Imam Bardjo, SH No.4 Semarang, yang peresmiannya dilakukan oleh Gubernur Bank Indonesia saat itu, Prof. DR. Soedrajad Djiwandono.
          </p>
        </div>
      </div>
      <br><br>
      <h5 class="text-colors let-spa">Visi &amp; Misi</h5>
      <br>
      <div class="row">
        <div class="col-lg-12">
          <h5>Visi</h5>
          <p style="color: #000;">Menjadi bank sentral yang berkontribusi secara nyata terhadap perekonomian Indonesia dan terbaik diantara negara emerging markets.</p>
          <br>
          <h5>Misi</h5>
          <ol>
            <li>Mencapai dan memelihara stabilitas nilai Rupiah melalui efektivitas kebijakan moneter dan bauran kebijakan Bank Indonesia.</li>
            <li>Turut menjaga stabilitas sistem keuangan melalui efektivitas kebijakan makroprudensial Bank Indonesia dan sinergi dengan kebijakan mikroprudensial Otoritas Jasa Keuangan.</li>
            <li>Turut mengembangkan ekonomi dan keuangan digital melalui penguatan kebijakan sistem pembayaran Bank Indonesia dan sinergi dengan kebijakan Pemerintah serta mitra strategis lain.</li>
            <li>Turut mendukung stabilitas makroekonomi dan pertumbuhan ekonomi yang berkelanjutan melalui sinergi bauran kebijakan Bank Indonesia dengan kebijakan fiskal dan reformasi struktural pemerintah serta kebijakan mitra strategis lain.</li>
            <li>Memperkuat efektivitas kebijakan Bank Indonesia dan pembiayaan ekonomi, termasuk infrastruktur, melalui akselerasi pendalaman pasar keuangan.</li>
            <li>Turut mengembangkan ekonomi dan keuangan syariah di tingkat nasional hingga di tingkat daerah.</li>
            <li>Memperkuat peran internasional, organisasi, sumber daya manusia, tata kelola dan sistem informasi Bank Indonesia.</li>
          </ol>
        </div>
      </div>

    </div>
  </section>
  <!-- //about -->

  <!-- gallery -->
  <div class="gallery py-5" id="gallery">
    <div class="container py-xl-5 py-lg-3">
      <h3 class="text-bl text-center font-weight-bold mb-2">Our Gallery</h3>
      <h6 class="text-colors text-center let-spa mb-5">See More</h6>
      <div class="row no-gutters">
        <div class="col-md-4 gallery-grid1">
          <a href="#gal1">
            <img src="<?php echo base_url('asset/home/'); ?>images/bi1.jpeg" alt=" " class="img-fluid" />
          </a>
        </div>
        <div class="col-md-4 gallery-grid1">
          <a href="#gal2">
            <img src="<?php echo base_url('asset/home/'); ?>images/bi2.jpeg" alt=" " class="img-fluid" />
          </a>
        </div>
        <div class="col-md-4 gallery-grid1">
          <a href="#gal3">
            <img src="<?php echo base_url('asset/home/'); ?>images/bi3.jpeg" alt=" " class="img-fluid" />
          </a>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-md-4 gallery-grid1">
          <a href="#gal4">
            <img src="<?php echo base_url('asset/home/'); ?>images/bi4.jpeg" alt=" " class="img-fluid" />
          </a>
        </div>
        <div class="col-md-4 gallery-grid1">
          <a href="#gal5">
            <img src="<?php echo base_url('asset/home/'); ?>images/bi5.jpeg" alt=" " class="img-fluid" />
          </a>
        </div>
        <div class="col-md-4 gallery-grid1">
          <a href="#gal6">
            <img src="<?php echo base_url('asset/home/'); ?>images/bi6.jpeg" alt=" " class="img-fluid" />
          </a>
        </div>
      </div>
    </div>
    <!-- gallery popups -->
    <!-- popup-->
    <div id="gal1" class="pop-overlay animate">
      <div class="popup">
        <img src="<?php echo base_url('asset/home/'); ?>images/bi1.jpeg" alt="Popup Image" class="img-fluid" />
        <p class="mt-4">Tambahkan Deskripsi Disini.</p>
        <a class="close" href="#gallery">&times;</a>
      </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal2" class="pop-overlay animate">
      <div class="popup">
        <img src="<?php echo base_url('asset/home/'); ?>images/bi2.jpeg" alt="Popup Image" class="img-fluid" />
        <p class="mt-4">Tambahkan Deskripsi Disini.</p>
        <a class="close" href="#gallery">&times;</a>
      </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal3" class="pop-overlay animate">
      <div class="popup">
        <img src="<?php echo base_url('asset/home/'); ?>images/bi3.jpeg" alt="Popup Image" class="img-fluid" />
        <p class="mt-4">Tambahkan Deskripsi Disini.</p>
        <a class="close" href="#gallery">&times;</a>
      </div>
    </div>
    <!-- //popup3 -->
    <!-- popup-->
    <div id="gal4" class="pop-overlay animate">
      <div class="popup">
        <img src="<?php echo base_url('asset/home/'); ?>images/bi4.jpeg" alt="Popup Image" class="img-fluid" />
        <p class="mt-4">Tambahkan Deskripsi Disini.</p>
        <a class="close" href="#gallery">&times;</a>
      </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal5" class="pop-overlay animate">
      <div class="popup">
        <img src="<?php echo base_url('asset/home/'); ?>images/bi5.jpeg" alt="Popup Image" class="img-fluid" />
        <p class="mt-4">Tambahkan Deskripsi Disini.</p>
        <a class="close" href="#gallery">&times;</a>
      </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal6" class="pop-overlay animate">
      <div class="popup">
        <img src="<?php echo base_url('asset/home/'); ?>images/bi6.jpeg" alt="Popup Image" class="img-fluid" />
        <p class="mt-4">Tambahkan Deskripsi Disini.</p>
        <a class="close" href="#gallery">&times;</a>
      </div>
    </div>
    <!-- //popup -->
    <!-- //gallery popups -->
  </div>
  <!-- //gallery -->

  <!-- contact -->
  <section class="contact pb-5" id="contact">
    <div class="container pb-xl-5 pb-lg-3">
      <h3 class="text-bl text-center font-weight-bold mb-2"></h3>
      <h6 class="text-colors text-center let-spa mb-5"></h6>
      <div class="row mx-2">
        <!-- map -->
        <div class="col-lg-12 map" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.122304383734!2d110.42041451477326!3d-6.994874094947033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b5e3729fd7d%3A0xc3a569ae071abe46!2sBank+Indonesia!5e0!3m2!1sid!2sid!4v1551946775658" width="600" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- //map -->
      </div>
    </div>
  </section>
  <!-- //contact -->

  <!-- brands -->
  <section class="brands pt-5">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-md-2 col-4 main-brand bg-grey">
          <a href="https://www.instagram.com/bank_indonesia/"><img src="<?php echo base_url('asset/home/images/ig.jpg'); ?>" width="50" height="50"></a>
        </div>
        <div class="col-md-2 col-4 main-brand bg-black">
          <a href="https://www.facebook.com/BankIndonesiaOfficial/"><img src="<?php echo base_url('asset/home/images/fb.png'); ?>" width="50" height="50"></a>
        </div>
        <div class="col-md-2 col-4 main-brand bg-dark2">
         <a href="https://twitter.com/bank_indonesia"><img src="<?php echo base_url('asset/home/images/twitter.png'); ?>" width="50" height="50"></a>
        </div>
        <div class="col-md-2 col-4 main-brand bg-grey">
          <a href="https://www.youtube.com/user/BankIndonesiaChannel"><img src="<?php echo base_url('asset/home/images/youtube.jpg'); ?>" width="50" height="50"></a>
        </div>
        <div class="col-md-2 col-4 main-brand bg-black">
         <a href="https://play.google.com/store/apps/details?id=com.bi.mobile"><img src="<?php echo base_url('asset/home/images/playstore.png'); ?>" width="150" height="75"></a>
        </div>
        <div class="col-md-2 col-4 main-brand bg-dark2">
         <a href="https://itunes.apple.com/id/app/bi-mobile/id1198899727"><img src="<?php echo base_url('asset/home/images/appstore.png'); ?>" width="150" height="75"></a>
        </div>
      </div>
    </div>
  </section>
  <!-- //brands -->

  <!-- copyright -->
  <div class="copyright-w3ls py-4">
    <div class="container">
      <div class="row">
        <!-- copyright -->
        <p class="col-lg-8 copy-right-grids text-bl text-lg-left text-center mt-lg-2">© 2019 Bank Indonesia Semarang. All
          Rights Reserved
        </p>
        <!-- //copyright -->
      </div>
    </div>
  </div>
  <!-- //copyright -->
  <!-- move top icon -->
  <a href="#home" class="move-top text-center"></a>
  <!-- //move top icon -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>