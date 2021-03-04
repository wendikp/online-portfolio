  @extends('portfolio-details-template')

  @section('content')
  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">Portfolio Online : Web-based</h2>
            <div class="owl-carousel portfolio-details-carousel">
              <img src="{{ asset('Personal/assets/img/portfolio/portfolio-online/portfolio-1.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/portfolio-online/portfolio-2.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/portfolio-online/portfolio-3.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/portfolio-online/portfolio-4.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/portfolio-online/portfolio-5.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Informasi Projek</h3>
            <ul>
              <li><strong>Kategori</strong>: Web Development</li>
              <li><strong>Klien</strong>: -</li>
              <li><strong>Tahun Projek</strong>: 2020</li>
              <li><strong>Status Projek</strong>: Tahap Pengerjaan</li>
              <li><strong>URL Projek</strong>: <a href="#">Belum Tersedia</a></li>
            </ul>

            <p align="justify">
              Sebuah aplikasi berbasis web yang dibuat untuk menyediakan informasi saya sebagai <em>back-end developer</em> terutama untuk projek-projek yang telah dikerjakan sebelumnya.
            </p>
            <p align="justify">
              Pembuatan web menggunakan <em>template</em> dari Bootstrap.
            </p>
          </div>
        </div>
      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->
  @endsection