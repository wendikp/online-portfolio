<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WKP Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Personal/assets/img/InShot_20200701_050100865.jpg') }}" rel="icon">
  <link href="{{ asset('Personal/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Personal/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Personal/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Personal/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('Personal/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Personal/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Personal/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <!-- tambahan -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/konpa/devicon@master/devicon.min.css">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Personal/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v2.3.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">

    <div class="container">

      <h1><a href="{{ url('/') }}">Wendi Kurnia Putra</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="{{ asset('Personal/assets/img/logo.jpg') }}" alt="iya ini" class="img-fluid"></a> -->

      <h2 class="typewriter"><span>Back-end</span> Developer</h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul id="nav-menu-bg">
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#resume">Resume</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
          <li><a href="#portfolio">Portfolio</a></li>
          @if ($cekSesi == NULL)
          <li><a href="#contact">Contact</a></li>
          <li><a class="hidden" href="{{ route('login') }}">Login</a></li>
          @else
          <li><a href="#email">Email</a></li>
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
          </form>
          @endif
        </ul>
      </nav><!-- .nav-menu -->

      <div class="social-links">
        <!-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a> -->
        <a href="https://www.youtube.com/channel/UCQZJmdZhuP05nQDqG-vRJMA?view_as=subscriber" class="youtube" target="_blank"><i class="icofont-youtube"></i></a>
        <a href="https://www.instagram.com/wendi_kp/" class="instagram" target="_blank"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{ asset('Personal/assets/img/me4.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Back-end Developer</h3>
          <p class="font-italic">
            Berikut informasi singkat tentang saya:
          </p>
          <div class="row">
            <div class="col-lg-12">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Tempat / Tanggal Lahir:</strong> Padang Panjang / 10 Desember 1994</li>
                <li><i class="icofont-rounded-right"></i> <strong>Umur:</strong> 
                  <?php
                  $curr_year = date('Y');
                  $curr_date = date('d-m-Y');
                  $birthday = '10-12-'.$curr_year;

                  if (strtotime('now') >= strtotime($birthday)) {
                    echo $curr_year - 1994;
                  } else {
                    echo $curr_year - 1994 - 1; 
                  } 
                  ?>
                </li>
                <li><i class="icofont-rounded-right"></i> <strong>Pendidikan Terakhir:</strong> S1 Sistem Informasi</li>
                <li><i class="icofont-rounded-right"></i> <strong>Gelar:</strong> Sarjana Komputer</li>
                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                <!-- <li><i class="icofont-rounded-right"></i> <strong>Jenis Kelamin:</strong> Laki-laki</li> -->
              </ul>
            </div>
            <!-- <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Kewarganegaraan:</strong> Indonesia</li>
                <li><i class="icofont-rounded-right"></i> <strong>Gelar:</strong> Sarjana Komputer</li>
                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
              </ul>
            </div> -->
          </div>
          <p align="justify">
            <em>Back-end developer</em> merupakan bagian dari <em>web developer</em> yang memiliki tanggung jawab pada sisi server atau dengan kata lain bertugas untuk memastikan sebuah <em>website</em> dapat bekerja sesuai dengan perencanaan, sekaligus bertanggung jawab dalam pembuatan <em>database</em>. <br/>Perkenalkan, saya <b>Wendi</b>, seorang <em>back-end developer</em> yang senang belajar hal baru terutama <em>web programming</em>. Sudah memiliki pengalaman baik sebagai <em>back-end developer</em> maupun <em>fullstack developer</em> yang dapat dibuktikan dengan pencapaian akademik serta <em>web project</em> yang telah diselesaikan pada saat magang dan tugas akhir (skripsi).
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-6 col-md-6">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span data-toggle="counter-up">2</span>
            <p>Clients</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="icofont-document-folder"></i>
            <span data-toggle="counter-up">3</span>
            <p>Projects</p>
          </div>
        </div>

      </div>

    </div>
    <!-- End Counts -->

    <!-- ======= Skills ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Kemampuan Pemrograman</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="devicon-html5-plain colored"></i>
            <h3>HTML5</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="devicon-css3-plain colored"></i>
            <h3>CSS</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="devicon-php-plain colored"></i>
            <h3>PHP</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="devicon-mysql-plain colored"></i>
            <h3>MySQL</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="devicon-java-plain colored"></i>
            <h3>Java</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="devicon-python-plain colored"></i>
            <h3>Python</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="devicon-javascript-plain colored"></i>
            <h3>Javascript</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="devicon-jquery-plain colored"></i>
            <h3>JQuery</h3>
          </div>
        </div>
      </div>

    </div><!-- End Skills -->

    <!-- ======= Frameworks ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Framework yang pernah digunakan</h2>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="devicon-codeigniter-plain colored"></i>
            <h3>CodeIgniter</h3>
          </div>
        </div>
        <div class="col-lg-6 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="devicon-laravel-plain colored"></i>
            <h3>Laravel</h3>
          </div>
        </div>
      </div>

    </div><!-- End Frameworks -->

    <!-- ======= Templates ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Template yang biasa digunakan</h2>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="devicon-bootstrap-plain colored"></i>
            <h3>Bootstrap</h3>
          </div>
        </div>
      </div>

    </div><!-- End Templates -->

    <!-- ======= Templates ======= -->
    <div class="interests container">
      <div class="section-title">
        <h2>Kemampuan lainnya</h2>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <ul>
              <li>Memahami konsep <em>Object Oriented Programming</em> (OOP).</li>
              <li>Memahami konsep <em>Model, View, and Controller </em> (MVC).</li>
              <li>Memahami cara penggunaan Word, Excel, dan Power Point</li>
              <li>Dapat berbahasa Inggris secara pasif.</li>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- End Templates -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <h3 class="resume-title">Riwayat Pendidikan</h3>
          <div class="resume-item">
            <h4>S1 Sistem Informasi</h4>
            <h5>2014-2019</h5>
            <p style="text-align: justify; font-size: 14px;">Fakultas Ilmu Komputer, Universitas Brawijaya, Malang, Jawa Timur.</p>
          </div>
          <div class="resume-item">
            <h4>SMAN 1 2x11 Kayutanam</h4>
            <h5>2010 - 2013</h5>
            <p style="text-align: justify; font-size: 14px;">Sekolah Menengah Atas berlokasi di Kayutanam, Kab. Padang Pariaman, Sumatera Barat.</p>
          </div>
          <div class="resume-item">
            <h4>MTsN Kepala Hilalang</h4>
            <h5>2007 - 2010</h5>
            <p style="text-align: justify; font-size: 14px;">Madrasah Tsanawiyah berlokasi di Kepala Hilalang, Kab. Padang Pariaman, Sumatera Barat.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <h3 class="resume-title">Pengalaman Organisasi dan Kepanitiaan</h3>
          <div class="resume-item">
            <h4>Badan Eksekutif Mahasiswa</h4>
            <h5>2016 - 2017</h5>
            <p><em>Staf Advokasi dan Kesejahteraan Mahasiswa</em></p>
            <p style="text-align: justify; font-size: 14px;">Bertanggung jawab sebagai Staf Advokasi dan Kesejahteraan Mahasiswa di lingkungan Fakultas Ilmu Komputer, Universitas Brawijaya.</p>
          </div>
          <div class="resume-item">
            <h4>Filkom Scholarship Expo 2016/2017</h4>
            <h5>15 Oktober – 30 November 2016</h5>
            <p><em>Panitia Konsumsi dan Dokumentasi</em></p>
            <p style="text-align: justify; font-size: 14px;">Menjabat sebagai panitia divisi DDMK yang bertanggung jawab dalam dokumentasi acara dan konsumsi peserta serta panitia.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <h3 class="resume-title">Web Project</h3>
          <div class="resume-item">
            <h4>Online Portfolio : Web-based</h4>
            <h5>2020</h5>
            <p><em>Fullstack Developer</em></p>
            <p style="text-align: justify; font-size: 14px;">Membuat portfolio online berbasis website menggunakan bootstrap <em>template</em>.</p>
          </div>
          <div class="resume-item">
            <h4>Sistem Rekomendasi Peminatan untuk Siswa SMAN 06 Malang</h4>
            <h5>2019</h5>
            <p><em>Fullstack Developer</em></p>
            <p style="text-align: justify; font-size: 14px;">Merancang dan membangun aplikasi sistem rekomendasi peminatan siswa di SMAN 06 Malang menggunakan metode <em>Analytichal Hierarchy Process</em> dan <em>Simple Additive Weighting</em> berbasis website dalam pemenuhan tugas skripsi.</p>
          </div>
          <div class="resume-item">
            <h4>Sistem Informasi Perlengkapan Divisi Rumah Tangga</h4>
            <h5>Juni - Agustus 2017</h5>
            <p><em>Back-end Developer</em></p>
            <p style="text-align: justify; font-size: 14px;">Bertanggung jawab sebagai back-end developer pada pembuatan aplikasi Sistem Informasi Perlengkapan Divisi Rumah Tangga Kantor Wilayah Direktorat Jenderal Bea dan Cukai Jatim II berbasis website dalam pemenuhan tugas Praktek Kerja Lapangan (Magang).</p>
          </div>
        </div>
        <div class="col-lg-3">
          <h3 class="resume-title">Pelatihan dan Webinar</h3>
          <div class="resume-item">
            <h4>Mahir Membuat Tampilan Website Responsif</h4>
            <h5>22 Oktober 2020 - 7 November 2020</h5>
            <p><em>Pelatihan online dari CodingStudio</em></p>
            <p style="text-align: justify; font-size: 14px;">Sebuah pelatihan online yang berisi materi penggunaan HTML, CSS, dan Javascript agar dapat membuat tampilan website responsif.</p>
          </div>
          <div class="resume-item">
            <h4>Masterclass : How to Become a Professional in Digital Marketing</h4>
            <h5>30 Oktober 2020</h5>
            <p><em>Webinar (seminar online) dari Genius Marketing</em></p>
          </div>
          <div class="resume-item">
            <h4>Big Data Analytic</h4>
            <h5>19 September 2019 - 15 November 2019</h5>
            <p><em>Program Fresh Graduate Digital Talent Scholarship (FGA DTS) Kementerian Komunikasi dan Informatika Republik Indonesia.</em></p>
            <p style="text-align: justify; font-size: 14px;">FGA DTS merupakan program pelatihan peningkatan kompetensi bidang TIK yang berfokus pada 7 tema pelatihan yakni CCNA Network Engineer, CCNA Cyberoperation Specialist, Cloud Computing, Core System Administration, Java Programming, Database Design and Programming with SQL, dan Data Science.</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Email Section ======= -->
  <section id="email" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Email</h2>
        <p>Check Your Email</p>
      </div>

      <div class="row">
        <div class="transparan col-lg-4">
          ini bagian daftar email
        </div>
        <div class="transparan col-lg-8">
          ini bagian isi email
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Lorem Ipsum</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Sed ut perspiciatis</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Magni Dolores</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Dele cardo</a></h4>
            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Divera don</a></h4>
            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <!-- <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li> -->
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-6 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('Personal/assets/img/portfolio/sistem-rekomendasi-peminatan/portfolio-details-2.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sistem Rekomendasi Peminatan Siswa SMAN 06 Malang</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{ asset('Personal/assets/img/portfolio/sistem-rekomendasi-peminatan/portfolio-details-2.png') }}" data-gall="portfolioGallery" class="venobox" title="Web"><i class="bx bx-search"></i></a>
                <a href="{{ url('/portfolio-1') }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('Personal/assets/img/portfolio/portfolio-online/portfolio-1.png') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Portfolio Online : Web-based</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{ asset('Personal/assets/img/portfolio/portfolio-online/portfolio-1.png') }}" data-gall="portfolioGallery" class="venobox" title="Web"><i class="bx bx-search"></i></a>
                <a href="{{ url('/portfolio-3') }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('Personal/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{ asset('Personal/assets/img/portfolio/portfolio-3.jpg') }}" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="{{ asset('Personal/portfolio-details.html') }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('Personal/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{ asset('Personal/assets/img/portfolio/portfolio-4.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="{{ asset('Personal/portfolio-details.html') }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('Personal/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{ asset('Personal/assets/img/portfolio/portfolio-5.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="{{ asset('Personal/portfolio-details.html') }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('Personal/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{ asset('Personal/assets/img/portfolio/portfolio-6.jpg') }}" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="{{ asset('Personal/portfolio-details.html') }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('Personal/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{ asset('Personal/assets/img/portfolio/portfolio-7.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="{{ asset('Personal/portfolio-details.html') }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('Personal/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{ asset('Personal/assets/img/portfolio/portfolio-8.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="{{ asset('Personal/portfolio-details.html') }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('Personal/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{ asset('Personal/assets/img/portfolio/portfolio-9.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="{{ asset('Personal/portfolio-details.html') }}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div> -->

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <!-- <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div> -->

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="https://www.instagram.com/wendi_kp/" class="instagram" target="_blank"><i class="icofont-instagram"></i></a>
              <a href="#" class="linkedin"><i class="icofont-linkedin" target="_blank"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>E-mail</h3>
            <p>wendikurniaputra48@gmail.com</p>
          </div>
        </div>
        <!-- <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div> -->
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"/>
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit" disabled>Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <!-- <div class="credits"> -->
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
  <!--   Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div> -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('Personal/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('Personal/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Personal/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('Personal/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('Personal/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('Personal/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('Personal/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('Personal/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('Personal/assets/vendor/venobox/venobox.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Personal/assets/js/main.js') }}"></script>

</body>

</html>