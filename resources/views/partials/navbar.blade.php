<nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link {{ ($title === "Beranda") ? 'active' : ''}}" href="/">Beranda</a></li>
      <li><a class="nav-link {{ ($title === "Tentang") ? 'active' : ''}}" href="/about">Tentang</a></li>
      <li><a class="nav-link {{ ($title === "Visi dan Misi") ? 'active' : ''}}" href="/visimisi">Visi dan Misi</a></li>
      <li><a class="nav-link {{ ($title === "Galeri") ? 'active' : ''}}" href="/portofolio">Galeri</a></li>
      <li><a class="nav-link {{ ($title === "Guru") ? 'active' : ''}}" href="/guru">Guru</a></li>
      <li class="dropdown"><a href="#"><span>Pendaftaran</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a class="nav-link {{ ($title === "Pendaftaran") ? 'active' : ''}}" href="/pendaftaran">Pendaftaran Online</a></li>
          <li><a href="{{url('pengumuman')}}">Pengumuman</a></li>
          @if(Auth::check())
            @if (Auth::user()->role->name == 'admin')
                <li><a  href="{{url('admin/dashboard')}}">Admin</a></li>
                @elseif (Auth::user()->role->name == 'keuangan')
                <li><a  href="{{url('admin/keuangan')}}">Keuangan</a></li>
            @endif
            <li><a  href="{{url('user')}}">{{Auth::user()->name}}</a></li>
          @endif

        </ul>
      </li>
      <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
      @if (Auth::check())
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="nav-link btn btn-link text-light" type="submit">Logout</button>
    </form>
      @else
      <li><a class="nav-link {{ ($title === "Login") ? 'active' : ''}}" href="/login">Login</a></li>

      @endif
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
