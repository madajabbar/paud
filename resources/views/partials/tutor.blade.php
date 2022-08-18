<section id="team" class="team">
    <div class="container">

      <div class="section-title">
        <h2><a href="/guru">Guru Paud Bougenville</a></h2>
        <p>Pendidikan merupakan pintu peradaban dunia. Pintu tersebut tidak akan terbuka kecuali dengan satu kunci. Yakni, seorang atau sosok guru yang peduli dengan peradaban dunia.</p>
      </div>

      <div class="row gy-4">
          @foreach ($tutor as $data)
        <div class="col-lg-4 col-md-6">
          <div class="member">
            <img src="{{asset('storage/'.$data->foto)}}" alt="">
            <h4>{{$data->user->name}}</h4>
            <span>{{$data->no_hp}}</span>
            <p>
              {{$data->deskripsi}}
            </p>
            <div class="social">
              <a href="#">Pendidikan </a>
              <a href="#">{{$data->pendidikan}}</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>
