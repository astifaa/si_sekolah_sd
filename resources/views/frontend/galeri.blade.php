<html>
  <body>
  @extends ('layouts.header')

@section('content')
    <main id="main">

    <!-- ======= Galeri Section ======= -->
    <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Galeri</h2>
                <h3>Galeri <span>Kami</span></h3>
                <p>Momen-momen SD Juara Jaksel saat melakukan kegiatan-kegiatan baik perlombaan, bazar dan ekstrakulikuler
              </div>
      
              <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                  <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <!-- <li data-filter=".filter-app">Lomba</li>
                    <li data-filter=".filter-card">Pameran</li>
                    <li data-filter=".filter-web">Ekstrakulikuler</li> -->
                  </ul>
                </div>
              </div>
      
              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($data as $row => $value)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <img src="{{ $value->foto }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>{{ $value->deskripsi }}</h4>
                    <a href="{{ $value->foto }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                  </div>
                </div>
                @endforeach
                
      
              </div>
      
            </div>
          </section><!-- End Galeri Section -->

        </main><!-- End #main -->

  </body>
</html>
@endsection