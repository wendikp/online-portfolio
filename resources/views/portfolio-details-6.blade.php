  @extends('portfolio-details-template')

  @section('content')
  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">Todo App</h2>
            <div class="owl-carousel portfolio-details-carousel">
              <img src="{{ asset('Personal/assets/img/portfolio/todo-app/todo-1.png') }}" class="img-fluid" alt="">
              <img src="{{ asset('Personal/assets/img/portfolio/todo-app/todo-2.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Informasi Projek</h3>
            <ul>
              <li><strong>Kategori</strong>: Web Development</li>
              <li><strong>Klien</strong>: -</li>
              <li><strong>Tahun Projek</strong>: 2021</li>
              <li><strong>Status Projek</strong>: Selesai</li>
              <li><strong>URL Projek</strong>: <a href="https://wendikp.github.io/todo-app" target="_blank">wendikp.github.io/todo-app</a></li>
            </ul>

            <p align="justify">
              Todo App merupakan aplikasi sederhana yang dibuat menggunakan ReactJS untuk memudahkan dalam membuat perencanaan daftar tugas yang ingin diselesaikan oleh pengguna. Aplikasi ini dapat menambahkan task baru serta menghapus task yang telah ada tanpa harus memuat ulang halaman karena menggunakan teknologi dari JavaScript.
            </p>
          </div>
        </div>
      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->
  @endsection