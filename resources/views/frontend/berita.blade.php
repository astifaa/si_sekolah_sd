@extends ('layouts.header')

@section('content')

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8" data-aos="fade-right" data-aos-delay="100">
              <h4 class="card-title">{{ $data['judul'] }}</h4>
            <div class="card">
              <img src="{{ $data['foto'] }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text" align="justify">
                  <b>
                    <?php
                        $iboy = date('d F Y', strtotime($data['tgl_posting']));
                    ?>
                    {{ $iboy }}
                  </b>
                  {!! $data['deskripsi'] !!}
                </p>
                <!-- Tambahan baru ya iniiii -->
             <!-- AddToAny BEGIN -->
        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
        <a class="a2a_button_facebook"></a>
        <a class="a2a_button_twitter"></a>
        <a class="a2a_button_whatsapp"></a>
        <a class="a2a_button_telegram"></a>
        </div>
        <script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
              </div>
            </div>
          </div>
          
          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
              <form action="/blog/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari Berita .." value="{{ old('cari') }}">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="/blog/cat_sdjuara">Berita SD Juara Jaksel </a></li>
                  <li><a href="/blog/cat_pendidikan">Berita Pendidikan </a></li>
                  <li><a href="/blog/cat_ebook">E-Book Pendidikan </a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
              @foreach($data1 as $row => $value)
                <div class="post-item clearfix">
                  <img src="{{ $value->foto }}" alt="">
                  <h4><a href="blog-single.html">{{ $value->judul}}</a></h4>
                  <time datetime="2020-01-01">
                    <?php
                        $iboy = date('d F Y', strtotime($value->tgl_posting));
                    ?>
                    {{ $iboy }}
                  </time>
                </div>
              @endforeach

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="/blog/pendidikan">Pendidikan</a></li>
                  <li><a href="/blog/kemendikbud">Kemendikbudristek</a></li>
                  <li><a href="/blog/sdjuara">SD Juara</a></li>
                  <li><a href="/blog/beasiswa">Beasiswa</a></li>
                  <li><a href="/blog/sekolah">Sekolah</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->


     </div>
   </section><!-- End About Section -->

 </main><!-- End #main -->

 @endsection