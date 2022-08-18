@extends('layouts.main')

@section('container')
<!-- Daftar Start-->
</nav>
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Form Pendaftaran</span></p>
            <h1 class="mb-4">Paud Bougenville</h1>
        </div>
        <form action="{{url('/pendaftaran')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-body" style="text-align: left;">
                <label>Nama Siswa</label><br>
                <input type="text" name="nama" class="form-control" placeholder="Nama Siswa"><br>

                <label>Tempat Lahir</label><br>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"><br>

                <label>Tanggal Lahir</label><br>
                <input type="text" name="tanggal_lahir" class="form-control" placeholder="DD/MM/YYYY"><br>

                <label>Nama Ayah</label><br>
                <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah"><br>

                <label>Nama Ibu</label><br>
                <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu"><br>

                <label>Pekerjaan Ayah</label><br>
                <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah"><br>

                <label>Pekerjaan Ibu</label><br>
                <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu"><br>

                <label>Alamat</label><br>
                <textarea name="alamat" cols="3" rows="3" class="form-control" placeholder="Alamat lengkap"></textarea>

                <label>No Hp Ayah</label><br>
                <input type="text" name="no_hp_ayah" class="form-control" placeholder="No HP Ayah"><br>

                <label>No Hp Ibu</label><br>
                <input type="text" name="no_hp_ibu" class="form-control" placeholder="No HP Ibu"><br>
                <input type="hidden" name="user_id" id="" value="{{Auth::user()->id}}">
                <button type="submit" class="btn btn-primary px-6 mx-auto mt-3">Daftar</button>
            </div>
        </form>
        </div>
     </div>
</div>
<!-- Daftar End -->
@endsection
