@extends('layouts.main')

@section('container')
<!-- ======= Our Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Galeri Paud</h2>
      </div>

      <div class="row">

      </div>

      <div class="row portfolio-container">
        @foreach ($galeri as $data)
        <div class="col-lg-4 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="{{asset('storage/'.$data->gambar)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h3><a href="{{asset('storage/'.$data->gambar)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">{{$data->nama}}</a></h3>
              <div>
                <a href="{{asset('storage/'.$data->gambar)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        @endforeach

      </div>

    </div>
  </section><!-- End Our Portfolio Section -->
@include('partials.tutor')
  @endsection
