  @extends('portfolio-details-template')

  @section('content')
  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">MyPlayer</h2>
            <div class="owl-carousel portfolio-details-carousel">
              <img src="{{ asset('Personal/assets/img/portfolio/media-player/home.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/media-player/play-1.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/media-player/playlist.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/media-player/play-2.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Informasi Projek</h3>
            <ul>
              <li><strong>Kategori</strong>: Web Development</li>
              <li><strong>Klien</strong>: -</li>
              <li><strong>Tahun Projek</strong>: 2021</li>
              <li><strong>Status Projek</strong>: Selesai</li>
              <li><strong>URL Projek</strong>: <a href="https://wendikp.github.io/media-player" target="_blank">wendikp.github.io/media-player</a></li>
            </ul>

            <p align="justify">
              MyPlayer merupakan aplikasi pemutar musik sederhana berbasis web yang dibuat menggunakan ReactJS. Aplikasi ini dibuat sebagai hasil dari pelatihan codingstudio.id yang telah diikuti sebelumnya dengan topik ReactJS.
            </p>
          </div>
        </div>
      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->
  @endsection