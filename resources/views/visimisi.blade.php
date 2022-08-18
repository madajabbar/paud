@extends('layouts.main')

@section('container')
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Visi dan Misi</h2>
        </div>
            <h3>Visi</h3>
            {!!$profile->visi!!}
            <h3>Misi</h3>
            {!!$profile->misi!!}
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
@include('partials.tutor')
@endsection
