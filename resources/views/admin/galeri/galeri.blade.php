@extends('layouts.admin')

@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    @include('admin.partial.header')
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        @if (isset($galeri))
        <a href="{{url('admin/galeri/tambah')}}" class="btn btn-primary mb-3">
            Tambah Gambar
        </a>
        <div class="row">
            @foreach ($galeri as $data)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-title img-fluid" src="{{asset('storage/'.$data->gambar)}}">

                            <h6 class="card-subtitle">{{$data->nama}}</h6>
                            <a href="{{url('admin/galeri/hapus/'.$data->id)}}" class="card-subtitle btn btn-danger text-light">Hapus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            @else
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Galeri belum diatur</h4>
                                <h6 class="card-subtitle">Silakan atur data Galeri Paud Bougenvile</h6>
                                <!-- Button trigger modal -->
                                <a href="{{url('admin/galeri/tambah')}}" class="btn btn-primary">
                                    Isi Data
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('admin.partial.footer')
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
@endsection
