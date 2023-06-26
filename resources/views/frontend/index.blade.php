@extends ('layouts.header')

@section('content')

 <!-- ======= Hero Section ======= -->
   <section id="hero">
    <div class="hero-container">
    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
            <div class="carousel-item active" style="background-image: url('frontend/assets/img/BGUtama (3).png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>SD Juara Jakarta Selatan</span></h2>
                <p class="animate__animated animate__fadeInUp">Maju Sekolahnya Bahagia Warganya</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"anj>Selutnya</a>
              </div>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
            <div class="carousel-item active" style="background-image: url('frontend/assets/img/BG1 (1).png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>SD Juara Jakarta Selatan</span></h2>
                <p class="animate__animated animate__fadeInUp">jhdshjd</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"anj>Selutnya</a>
              </div>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
            <div class="carousel-item active" style="background-image: url('frontend/assets/img/BG2 (1).png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>SD Juara Jakarta Selatan</span></h2>
                <p class="animate__animated animate__fadeInUp">ggjvhh</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"anj>Selutnya</a>
              </div>
            </div>
          </div>
        </div><!-- End testimonial item -->



        </div>
        <div class="swiper-pagination"></div>

       
      </div>
    </div>
  </section><!-- End Hero -->

  <!--<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">   
      <h1>Welcome to <span>SD Juara Jakarta Selatan</span></h1>
      <h2>Bahagia Warganya Maju Sekolahnya</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section> End Hero -->

  <main id="main">
 
   
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

      <div class="row mx-auto my-auto">
           
          
      <div class="swiper mySwiper">
      <div class="swiper-wrapper">
      @foreach($data3 as $row => $value)       
        <div class="swiper-slide">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="{{ $value->foto }}" class="img-fluid" width="100px"></div>
              <h4 class="title"><a href="">{{ $value->judul }}</a></h4>
              <p class="description">{{ $value->deskripsi }}</p>
            </div>
          </div>
        </div>
      @endforeach
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
             </div>
 
           
 
        
       </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
          <h3>Temukan Lebih Banyak <span>Tentang Kami</span></h3>
          <!--<p>Pendidikan yang terbaik adalah sebuah Konsep Inti untuk membangun peradaban yang gemilang</p>-->
        </div>

        <div class="row">
          <!--<div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>-->
          <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column text-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Al Qur’an, Akhlak dan Akademik Menjadi Keseharian Kami</h3>
            <p class="fst-italic">
              Sekolah Juara Jaksel mengedepankan pembiasaan dibanding teori. Pelaksanaan pembiasaan sholat sunnah dhuha, lima waktu, membaca al qur’an, puasa, tampil sebagai pemimpin adalah beberapa pembiasaan dari pendidikan yang kami lakukan. Berdiri sejak 11 tahun lalu dan telah melahirkan siswa-siswa berprestasi.
            </p>
            <
          </div>
          
        </div>
        <br>
        <center><a href="/about" class=" btn btn-primary btn-lg">Selengkapnya</a></center>
      </div>
    </section><!-- End About Section -->

    
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                  <i class="bi bi-award"></i>
                  <span data-purecounter-start="0" data-purecounter-end="10"cdata-purecounter-duration="1" class="purecounter"></span>
                  <span>+</span>
                  <p>Prestasi</p>
                </div>
              </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <span>%</span>
              <p>Kepuasan Orangtua</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="1" class="purecounter"></span>
              <span>%</span>
              <p>Quality Assurance</p>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Counts Section -->

  
  

    
     <!-- ======= Berita Section ======= -->
     <section id="berita" class="portfolio-details section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
          <h3>Temukan Berita<span> Terbaru</span></h3>
        </div>

        <div class="row">

           <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
           <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                @foreach($data as $row => $value)
                <div class="swiper-slide">
                  <div class="card">
                    <img src="{{ $value->foto }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $value->judul }}</h5>
                      <p class="card-text">{{ $value->tgl_posting }}</p>
                      <a href="{{ url('blog/detail', $value->id_informasi) }}" class="btn btn-primary" style="float: right;">Baca Selengkapnya</a>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
            
			</div>
          
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-newspaper"></i> Berita Populer</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="bi bi-megaphone"></i> Pengumuman</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="list-group">
                  @foreach($data as $row => $value)
                  <a href="{{ url('blog/detail', $value->id_informasi) }}" type="button" class="list-group-item list-group-item-action">
                    <sub class="text-primary">
                      <?php
                        $iboy = date('d F Y', strtotime($value->tgl_posting));
                      ?>
                    {{ $iboy }}
                  </sub><br class="mb-2">
                      {{ $value->judul }}
                  </a>
                  @endforeach
                  
                </div>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="list-group">
                  @foreach($data1 as $row => $value)
                  <a href="#" type="button" class="list-group-item list-group-item-action">
                    <sub class="text-primary"><?php
                        $iboy = date('d F Y', strtotime($value->tgl_posting));
                      ?>
                    {{ $iboy }}</sub><br class="mb-2">
                    <i class="bi bi-trophy text-warning"></i> {{ $value->judul }}
                  </a>
                  @endforeach
               </div>
             </div>
             <a href="/blog" class="btn btn-primary btn-sm" taget="_blank" style="margin-top:20px"> Berita Selengkapnya</a>
           </div>
         </div>
		 
		</div>
       
     </div>
   </section><!-- End About Section -->

   <!-- ======= Prestasi Section ======= -->

   <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Prestasi</h2>
          <h3>Prestasi<span> Kami</span></h3>
        </div>

        <div class="row">
           
          
        <div class="swiper mySwiper">
      <div class="swiper-wrapper">
            <?php $no = 0;?>
            @foreach($data1 as $row => $value)
              <div class="swiper-slide">
                <!-- <div class="col-md-3"> -->
                  <div class="member">
                    <div class="member-img">
                      <img src="{{ asset('frontend/assets/img/piala.png')}}" class="img-fluid" alt="">
                      <div class="social">
                        <a href="/prestasi"><i class="bi bi-box-arrow-up"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>{{ $value->judul }}</h4>
                      <span><?php
                        $iboy = date('d F Y', strtotime($value->tgl_posting));
                      ?>
                    {{ $iboy }}</span>
                    </div>
                  </div>
                <!-- </div> -->
                </div>
                @endforeach
				</div>
        
        </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

          

      
      </div>
      </div>
    </section>


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset ('frontend/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Erni</h3>
                <h4>Ibu Wali Murid Kelas 3</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Terimakasih kepada semua donatur telah memeberikan support kepada kami dan tentukanya kepada bapak ibu guru SD Juara JAkartaSelatan telah Mendidik ana kami dengan sepenuh hati
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
              <img src="{{ asset ('frontend/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sarah</h3>
                <h4>Ibu Wali Murid Kelas 2</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Terimakasih kepada semua donatur telah memeberikan support kepada kami dan tentukanya kepada bapak ibu guru SD Juara JAkartaSelatan telah Mendidik ana kami dengan sepenuh hati
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset ('frontend/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jenab</h3>
                <h4>Ibu Wali Murid Kelas 6</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Terimakasih kepada semua donatur telah memeberikan support kepada kami dan tentukanya kepada bapak ibu guru SD Juara JAkartaSelatan telah Mendidik ana kami dengan sepenuh hati
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset ('frontend/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Lisda</h3>
                <h4>Ibu Wali Murid Kelas 4</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Terimakasih kepada semua donatur telah memeberikan support kepada kami dan tentukanya kepada bapak ibu guru SD Juara JAkartaSelatan telah Mendidik ana kami dengan sepenuh hati
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset ('frontend/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                <h3>Iin</h3>
                <h4>Ibu Wali Murid Kelas 1</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Terimakasih kepada semua donatur telah memeberikan support kepada kami dan tentukanya kepada bapak ibu guru SD Juara JAkartaSelatan telah Mendidik ana kami dengan sepenuh hati
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
          <h3>Galeri <span>Kami</span></h3>
         
        </div>


          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
              @foreach($data2 as $row => $value)
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <img src="{{ $value->foto }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>{{ $value->deskripsi }}</h4>
                    <a href="{{ $value->foto }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Lomba SSB"><i class="bx bx-plus"></i></a>
                   </div>
                  
                </div>    
              @endforeach
          </div>
          <center><a href="/galeri" class="btn btn-primary btn-lg" taget="_blank">Selengkapnya</a></center>
    </section><!-- End Portfolio Section -->


    <!-- Call Out PPDB -->
    <section id="ppdb">
   
    <div class="row">
				<div class="callout-mage text-center fade-in-b">
					<h1>Telah Dibuka !<b> PPDB</b> Tahun Ajaran 2022/2023</h1>
					<p>Sekolah Unggulan Berkualitas dengan tujuan mendidik anak Indonesia untuk menjadi generasi yang Jujur, Ulet, Amanah, Religius, dan Aktif (JUARA)</p>
          <a href="/ppdb" class="btn btn-primary btn-lg">Daftar Sekarang</a>
        </div>
			</div>
   
    </section>

 
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <h3><span>Kontak Kami</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jl. Kesatuan No.47, RT.11/RW.7, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>sekolahjuarajaksel@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <a href="https://api.whatsapp.com/send?phone=6288296403827" target="_blank"><i class="bx bxl-whatsapp"></i></a>
              <h3>Whatsapp</h3>
              <p><a href="https://api.whatsapp.com/send?phone=6288296403827" target="_blank" style="color: black">0882-9640-3827</a></p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15861.167436514163!2d106.821876!3d-6.356254!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea6fe69ea7085a76!2sSD%20Juara%20Jakarta%20Selatan!5e0!3m2!1sid!2sid!4v1632660683685!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="d-flex flex-column align-items-center">
            <h4 class="mb-4">Ikuti Kami</h4>
    <div class="social-buttons">
      <a href="https://www.facebook.com/sdjuaraparagonjaksel"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/sdjuaraparagonjaksel/"><i class="fab fa-instagram"></i></a>
      <a href="https://www.youtube.com/c/JUARATV/featured"><i class="fab fa-youtube"></i></a>
</div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <!---- Test----->

 @endsection