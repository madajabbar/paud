@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                      <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Basic Table</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material mx-2" action="{{url('admin/galeri')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label class="col-md-12">nama</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Kegiatan ....."
                                        class="form-control form-control-line" name="nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Foto</label>
                                <div class="col-md-12">
                                    <input type="file" placeholder="Misi Paud Bougenvile...."
                                        class="form-control form-control-line" name="link">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success text-white" type="submit">Tambah Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.partial.footer')
@endsection
