 <html>

 <body>
 @extends ('layouts.header')

@section('content')
 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Category: Berita Terbaru</h2>
          <!-- <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol> -->
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

          @foreach($data as $row => $value)
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/berita-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{ $value->judul }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">
                    <?php
                        $iboy = date('d F Y', strtotime($value->tgl_posting));
                    ?>
                    {{ $iboy }}
                    </time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">7 Komentar</a></li> -->
                </ul>
              </div>

              <div class="entry-content">
                <p class="readMore">
                  {!! substr($value->deskripsi,0,200) !!} ...
                </p>
                <div class="read-more">
                  <a href="{{ url('blog/detail', $value->id_informasi) }}">Read More</a>
                </div>
              </div>

            </article>
            <!-- End blog entry -->
          @endforeach
            <div class="blog-pagination">
              <ul class="justify-content-center">
                {{ $data->links() }}
              </ul>
            </div>

          </div><!-- End blog entries list -->

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
        
      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  
</body>

</html>

@endsection