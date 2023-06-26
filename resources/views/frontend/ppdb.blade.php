@extends ('layouts.header2')

@section('content')
 
  <main id="main">

 <!-- ======= About Section ======= -->
 <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title" >
        <h3>Mengapa Pilih<span>SD Juara Jakarta Selatan ?</span></h3>
        <p>Inilah alasan Sekolah Juara solusi bagi Anda :</p>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                @foreach($data as $row => $value)
                <div class="swiper-slide">
                  <div class="card">
                    <img src="{{ $value->foto }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $value->judul }}</h5>
                      <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                      <a href="{{ url('ppdb/detail', $value->id_informasi) }}" class="btn btn-primary" style="float: right;">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
              <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
          <ul>
            <li>
              <img src="https://img.icons8.com/color/48/000000/1-circle--v1.png"/>
              <div>
                <h5>Sekolah Swasta rasa sekolah Islam Terpadu dengan mengkombinasikan kurikulum nasional dengan nilai-nilai Islam</h5>
              </div>
            </li>
            <li>
              <img src="https://img.icons8.com/color/48/000000/2-circle--v1.png"/>
              <div>
                <h5>Tidak hanya mengutamakan akademik, namun juga concern pada Al-Qur'an & Akhalak anak</h5>
              </div>
            </li>
            <li>
              <img src="https://img.icons8.com/color/48/000000/3-circle--v1.png"/>
              <div>
                <h5>Sekolah berbasis social enterprise yang menerima siswa umum & beasiswa</h5>
              </div>
            </li>
            <li>
              <img src="https://img.icons8.com/color/48/000000/4-circle--v1.png"/>
              <div>
                <h5>Menggunakan metode Multiple Intellegence, bahwa setiap anak memiliki potensi yang berbeda dan diasah sesuai potensi</h5>
              </div>
            </li>
            
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  
              <div class="section-title">
                  <h2>Pendaftaran</h2>
                  <h3>Info Pendaftaran <span>PPDB</span></h3>
                </div>
               
                <section id="ppdbe" class="ppdbe">
      <div class="container" data-aos="zoom-in">
          <div class="container" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="ppdbe-item">
                <!--<img src="assets/img/kepalasekolah.png" class="ppdbe-img" alt="">
                <!-- <h3>Saul Goodman</h3> 
                <h4>Ceo &amp; Founder</h4> -->
                <br>
                <br>
                <p>
                  
                  SDS Juara Jaksel memiliki berbagai kegiatan pembiasaan yang membentuk siswa menjadi manusia-manusia juara dalam keluarganya
                  </p>
                  <img src="{{ asset ('frontend/assets/img/Icon-Akademik.png')}}" class="ppdbe-img" alt="">
                  <img src="{{ asset ('frontend/assets/img/Icon-Akhlak.png')}}" class="ppdbe-img" alt="">
                  <img src="{{ asset ('frontend/assets/img/Icon-Quran.png')}}" class="ppdbe-img" alt="">
                
              </div>
            </div><!-- End testimonial item -->

          </div>
          
          <div class="row mt-5">
              <div class="col-lg-6 text-center">
                  <a href="https://bit.ly/PPDB-SDJuaraJaksel" class=" btn btn-primary btn-md" target="_blank">Daftar Sekarang</a>
              </div>
              <div class="col-lg-6 text-center">
                  <a href="https://api.whatsapp.com/send?phone=6288296403827" target="_blank" class=" btn btn-primary btn-md">Hubungi Kami</a>
              </div>
            </div>
        </div>

      </div>
    </section>
               
      

       <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>F.A.Q</h2>
                <h3>Tanya <span>Jawab</span></h3>
              </div>
      
              <div class="row justify-content-center">
                <div class="col-xl-10">
                  <ul class="faq-list">
      
                    <li>
                      <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Kapan Penerimaan Peserta Didik Baru SD Juara Jakarta Selatan dibuka? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          PPDB 2021 dibuka pada bulan September 2021
                          <br>
                            Gelombang 1 : 1 Sep – 31 Desember 2021
                          <br>
                            Gelombang 2 : 1 Januari – 31 Maret 2022
                          <br>  
                            Gelombang 3 : 1 April – 31 Mei 2022 
                          <br>
                            Gelombang 4 : 1 Juni – 31 Juli 2022
                        </p>
                      </div>
                    </li>
      
                    <li>
                      <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Dimana saya bisa mendapatkan informasi seputar PPDB 2022? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Di media sosial SD Juara Jakarta Selatan. Seperti Facebook, Twitter, dan Instagram.
                        </p>
                      </div>
                    </li>
      
                    <li>
                      <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Berapa Biaya Pendaftaran dan SPP nya? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Berikut adalah rincian Biaya SD Juara Jakrta Selatan tahun 2022 adalah sebagai berikut:
                          <br>
                          Pendaftaran : 250.000
                          <br>
                          DSP         : 14.000.000
                          <br>
                          DKT         : 3.250.000
                          <br>
                          SPP         : 700.000     
                          <br>
                          Seragam     : 850.000
                          <br>
                          <br>
                          DISKON
                          <br>    
                          Dapatkan Cashback Sebesar 3.000.000 selama masa promo Bulan September – Desember 2021
                          <br>
                          <br>
                          DSP (Dana Sumbangan Pendidikan) dibayar hanya 1 kali saja sejak pertama anak masuk ke sekolah. Dana ini diperuntukan bagi pengembangan dan pemeliharaan sarana sekolah.
                          <br>
                          <br>
                          DKT (Dana Kegiatan Tahunan) dibayar 1 Tahun sekali saat awal tahun ajaran. Dana ini dialokasikan untuk kegiatan tahunan, buku pelajaran, ekstrakurikuler, fieldtrip, outbond, dan kegiatan sekolah lainnya.
                          <br>
                          <br>
                          SPP (Sumbangan Pembinaan Pendidikan) dibayar 1 bulan sekali dan maksimal dibayarkan pada tanggal 10 pada setiap bulannya.
                          <br>
                          <br>
                          Seragam yang didapatkan adalah Seragam putih merah, seragam olah raga, seragam pramuka, dan seragam khas sekolah.
                        </p>
                      </div>
                    </li>
      
                    <li>
                      <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Apa saja fasilitas yang akan kami dapatkan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          1. Seragam Nasional
                          <br>
                          2. Seragam Pramuka
                          <br>
                          3. Seragam Olahraga
                          <br>
                          4. Seragam Khas Sekolah Juara
                          <br>
                          5. Buku Pelajaran
                          <br>
                          6. Kegiatan Ekstrakurikuler
                          <br>
                          7. Sarana Prasarana
                          <br>
                          8. Observasi Kematangan Peserta Didik
                          <br>
                          9. Kegiatan outing/fieldtrip
                          <br>
                          10. Kegiatan Perlombaan
                          <br>
                          11. Parenting Bulanan
                          <br>
                          12. Konsultasi Psikolog
                          <br>
                          13. Aplikasi Android
                        </p>
                      </div>
                    </li>
                    
                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Apa saja syarat untuk mendaftar PPDB 2021? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                          <p>
                            1. Anak sudah berumur 6 tahun pada tanggal 1 Juli 2022
                            <br>
                            2. Mengisi formulir pendaftaran dan membayar biaya sesuai yang sudah dicantumkan diatas
                          </p>
                        </div>
                      </li>

                    <li>
                      <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Dimana saya bisa mendapatkan Formulir Pendaftaran? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Bisa diisi secara online atau datang langsung ke sekolah
                        </p>
                      </div>
                    </li>
      
                    <li>
                      <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">Bagaimana Alur Seleksi PPDB 2022? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Silahkan bisa bertanya melalui media sosial SD Juara Bandung atau menghubungi melalui Whatsapp ke Admin SD Juara Jakarta Selatan di nomor 081 123 122 10.
                        </p>
                      </div>
                    </li>
                    
                    <li>
                        <div data-bs-toggle="collapse" href="#faq8" class="collapsed question">Siapa yang berhak lebih diterima dalam PPDB 2022? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq8" class="collapse" data-bs-parent=".faq-list">
                          <p>
                              Karena kouta terbatas, saat ini sekolah lebih memprioritaskan siapa yang lebih cepat melunasi pembayaran.
                          </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq9" class="collapsed question"> Apakah SD Juara Jakarta Selatan menerima peserta didik pindahan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq9" class="collapse" data-bs-parent=".faq-list">
                          <p>
                              Ya, peserta didik pindahan bisa diterima, sesuai ketersediaan pada tiap kelasnya.
                          </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq10" class="collapsed question">Apakah sekolah ini Fullday? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq10" class="collapse" data-bs-parent=".faq-list">
                          <p>
                              Ya, Setiap Senin – Jum’at  Pkl. 06.55 – 14.30
                          </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq11" class="collapsed question">Apakah sekolah ini menyediakan layanan makan siang dan jemputan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq11" class="collapse" data-bs-parent=".faq-list">
                          <p>
                              Saat ini kami hanya melayani makan siang saja. untuk layanan tambahan yang diusulkan oleh orang tua, bisa didiskusikan selanjutnya dengan sesama orang tua dan pihak sekolah.
                          </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq12" class="collapsed question"> Apa program unggulan SD Juara Jakarta Selatan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq12" class="collapse" data-bs-parent=".faq-list">
                          <p>
                              Program – Program SD Juara Jakarta Selatan semuanya sudah dimuat dalam web ini. Mulai dari Profil Sekolah hingga Pembelajaran termasuk prestasi semua ada di web ini.
                          </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq13" class="collapsed question">Saya sudah daftar online, Apakah bisa saya membayar dengan Transfer? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq13" class="collapse" data-bs-parent=".faq-list">
                          <p>
                              Ya, Silahkan bisa menghubungi Admin SD Juara Jakarta Selatan.
                          </p>
                        </div>
                    </li>

                  </ul>
                </div>
              </div>
      
            </div>
          </section><!-- End Frequently Asked Questions Section -->
  

  
  </main><!-- End #main -->
  @endsection
