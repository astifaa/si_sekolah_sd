@extends ('layouts.header')

@section('content')
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          @foreach($data as $row => $value)
          <div class="col-lg-8" data-aos="fade-right" data-aos-delay="100">
              <h4 class="card-title"><i class="bi bi-trophy"></i> <div class="ed-cont"> {{ $value->judul }} </div></h4>
            <div class="card">
              <img src="{{ $value->foto }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text" align="justify">
                  {!! $value->deskripsi !!}
                </p>
              </div>
            </div>
          </div>
          @endforeach
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="bi bi-trophy"></i> Prestasi</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-newspaper"></i> Berita Populer</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="list-group">
                @foreach($data1 as $row => $value)
                  <button type="button" class="list-group-item list-group-item-action">
                    <sub class="text-primary">{{ $value->tgl_posting }}</sub><br class="mb-2">
                    {{ $value->judul}}
                  </button>
                @endforeach
                </div>
              </div>
              <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="list-group">
                @foreach($data1 as $row => $value)
                  <button type="button" class="list-group-item list-group-item-action">
                    <sub class="text-primary">{{ $value->tgl_posting }}</sub><br class="mb-2">
                    {{ $value->judul}}
                  </button>
                @endforeach
               </div>
             </div>
           </div>
         </div>
       </div>

     </div>
   </section><!-- End About Section -->

 </main><!-- End #main -->

 @endsection