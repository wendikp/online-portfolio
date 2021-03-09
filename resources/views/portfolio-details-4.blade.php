  @extends('portfolio-details-template')

  @section('content')
  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">MOVIEPedia</h2>
            <div class="owl-carousel portfolio-details-carousel">
              <img src="{{ asset('Personal/assets/img/portfolio/moviepedia/home.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/moviepedia/movie-list.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/moviepedia/movie-detail.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/moviepedia/home-can-not-find.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Informasi Projek</h3>
            <ul>
              <li><strong>Kategori</strong>: Web Development</li>
              <li><strong>Klien</strong>: -</li>
              <li><strong>Tahun Projek</strong>: 2021</li>
              <li><strong>Status Projek</strong>: Selesai</li>
              <li><strong>URL Projek</strong>: <a href="#">Belum tersedia</a></li>
            </ul>

            <p align="justify">
              MOVIEPedia merupakan aplikasi pencarian film sederhana berbasis web yang dibuat dengan memanfaatkan data dari OMDb API. Aplikasi ini dapat menampilkan daftar film yang sesuai dengan keyword yang dimasukan oleh user, serta menampilkan detail informasi dari film yang diinginkan.
            </p>
          </div>
        </div>
      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->
  @endsection