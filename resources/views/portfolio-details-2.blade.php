  @extends('portfolio-details-template')

  @section('content')
  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">Sistem Rekomendasi Peminatan Siswa SMAN 06 Malang</h2>
            <div class="owl-carousel portfolio-details-carousel">
              <img src="{{ asset('Personal/assets/img/portfolio/sistem-rekomendasi-peminatan/portfolio-details-1.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/sistem-rekomendasi-peminatan/portfolio-details-2.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/sistem-rekomendasi-peminatan/portfolio-details-3.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/sistem-rekomendasi-peminatan/portfolio-details-4.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/sistem-rekomendasi-peminatan/portfolio-details-5.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Informasi Projek</h3>
            <ul>
              <li><strong>Kategori</strong>: Web Development</li>
              <li><strong>Klien</strong>: SMAN 06 Malang, Jawa Timur</li>
              <li><strong>Tahun Projek</strong>: 2019</li>
              <li><strong>URL Projek</strong>: <a href="#">www.example.com</a></li>
            </ul>

            <p align="justify">
              Sebuah aplikasi berbasis web yang menggunakan gabungan dua metode <em>Analythical Hierarchy Process</em> dan <em>Simple Additive Weighting</em> dari sistem pendukung keputusan untuk menghasilkan rekomendasi jurusan sesuai dengan kemampuan setiap siswa baru di SMA. Projek ini dibuat sebagai syarat sebagai pemenuhan tugas akhir untuk mendapatkan gelar sarjana.
            </p>
            <p align="justify">
              Pembangunan web bagian <em>backend</em> menggunakan <em>framework</em> Laravel sedangkan <em>frontend</em> menggunakan <em>template</em> dari Bootstrap.
            </p>
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->
  @endsection