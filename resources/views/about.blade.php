@extends('layouts.main')

@section('container')

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>Paud Bougenville Kota Pontianak</h2>
      </div>

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="img/paud1.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
            <img src="img/strukturpaud.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="img/denahpaud.png" class="img-fluid" alt="">
          </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
          {!!$profile->tentang!!}
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Our Team Section ======= -->
@include('partials.tutor')
@endsection
