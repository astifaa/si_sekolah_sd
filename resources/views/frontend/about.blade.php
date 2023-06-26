
<body>

@extends ('layouts.header')

@section('content')
 
  <main id="main">

  

    <!-- ======= About Section ======= -->
    <section id="tabs" class="tabs">
        <div class="container" data-aos="fade-up">
        <ul class="nav nav-tabs row d-flex">
            <li class="nav-item col-3">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1" >
                <i class="fas fa-bullseye"></i>
                <h4 class="d-none d-lg-block">Visi & Misi</h4>
              </a>
            </li>
            <li class="nav-item col-3">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2" >
                <i class="fas fa-book-reader"></i>
                <h4 class="d-none d-lg-block">Kurikulum</h4>
              </a>
            </li>
            <li class="nav-item col-3">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                <i class="fas fa-cogs"></i>
                <h4 class="d-none d-lg-block">Fasilitas</h4>
              </a>
            </li>
            <li class="nav-item col-3">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                <i class="fas fa-universal-access"></i>
                <h4 class="d-none d-lg-block">Ekstrakulikuler</h4>
              </a>
            </li>
          </ul>
  
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row ">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 justify-content-center info-panel" data-aos="fade-up" data-aos-delay="100">
                  <h3 style="color: #17479E;">Visi</h3>
                  
                  <ol type="1">
                    <li> Generasi Qur'ani</li>
                    <li>Generasi Cerdas & Mandiri</li>
                    <li>Generasi Kompetitif</li>
                  </ul>
                  
                </div>
                <div class="col-lg-6 order-1 order-lg-2 justify-content-center info-panel" data-aos="fade-up" data-aos-delay="200">
                    <h3 style="color: #17479E;">Misi</h3>
                    
                    <ol type="1">
                      <li>Tekun dan Taat Beribadah</li>
                      <li>Terbiasa Tertib dan Disiplin</li>
                      <li>Terbiasa 5S</li>
                      <li>Berprestasi Akademik dan Non Akademik</li>
                      <li>Meningkatkan Kualitas dan Kuantitas TTQ</li>
                      <li> Terbiasa Membaca Buku</li>
                      <li>Meningkatkan Kemampuan Lifeskill</li>
                    </ul>
                 
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="featured-services">
              <div class="row">
                <h4 style="text-align: center">Menggabungkan <b>Kurikulum Pendidikan Nasional</b> dan <b>Kurikulum khas Sekolah Juara</b></h4>
                <br>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="">Core Value JUARA</a></h4>
                    <p class="description">Pendidikan karakter yang terangkum dalam core value JUARA (Jujur, Ulet, Amanah, Religius, AKtif)</p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="">Multiple Intellegences</a></h4>
                    <p class="description">Pengembangan potensi peserta didik melalui multile intellegences</p>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                      <div class="icon"><i class="bx bx-file"></i></div>
                      <h4 class="title"><a href="">Tilawah Tahfizh Qur'an</a></h4>
                      <p class="description">Tilawah Tahfidz Qur'an yang mendidik para siswa dan siswi selalu dekat dengan Al-Qur'an</p>
                    </div>
                  </div>
      
               
              </div>
            </div>
            </div>
            
            
            <div class="tab-pane" id="tab-3">
              <div class="services" data-aos="fade-up">
                <div class="row">
                  @foreach($data as $row => $value)  
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box">
                        <div class="icon"><img src="{{ $value->foto }}" class="img-fluid" width="300px"></div>
                        <h4><a href="">{{ $value->judul }}</a></h4>
                        <p>{{ $value->deskripsi }}</p>
                      </div>
                    </div>
                  @endforeach
                  </div>
                </div>
               
            </div>

            <div class="tab-pane" id="tab-4">
            <div class="team">
              
        <div class="row">
        @foreach($data1 as $row => $value1) 
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="{{ $value1->foto }}" class="img-fluid" alt="">
                </div>
                <div class="member-info text-center">
                  <h4>{{ $value1->judul }}</h4>
                </div>
              </div>
            </div>
        @endforeach
            
          </div>
        </div>
  
            </div>
          </div>
  
        </div>
      </section><!-- End Tabs Section -->
  

  </main><!-- End #main -->



</body>

</html>

@endsection