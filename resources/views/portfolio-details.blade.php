  @extends('portfolio-details-template')

  @section('content')
  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">Sistem Informasi Perlengkapan Divisi Rumah Tangga Kanwil DJBC Jatim II</h2>
            <div class="owl-carousel portfolio-details-carousel">
              <img src="{{ asset('Personal/assets/img/portfolio/humas-rt/2021-01-20-1.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/humas-rt/2021-01-20.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/humas-rt/2021-01-20-2.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Informasi Projek</h3>
            <ul>
              <li><strong>Kategori</strong>: Web Development</li>
              <li><strong>Klien</strong>: Kanwil DJBC Jatim II</li>
              <li><strong>Tahun Projek</strong>: 2017</li>
              <li><strong>URL Projek</strong>: <a href="#">www.example.com</a></li>
            </ul>

            <p align="justify">
              Sebuah aplikasi berbasis web yang dibuat untuk mempermudah staff divisi rumah tangga di Kantor Wilayah Direktorat Jendral Bea Cukai Jawa Timur II dalam mengelola stok perlengkapan ATK, serta peminjaman dan pengembalian kendaraan dan rumah dinas. Projek ini dibuat sebagai syarat sebagai pemenuhan tugas Praktek Kerja Lapangan (PKL).
            </p>
            <p align="justify">
              Pembangunan web bagian <em>backend</em> menggunakan <em>framework</em> CodeIgniter sedangkan <em>frontend</em> menggunakan <em>template</em> dari Bootstrap.
            </p>
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->
  @endsection