@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Tambah Tutor</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Tambah Tutor</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material mx-2" action="{{url('admin/tutor/post/'.$tutor->id)}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12">nama</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nama Tutor"
                                        class="form-control form-control-line" name="nama"  required value="{{$tutor->user->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Pendidikan</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Pendidikan Terakhir"
                                        class="form-control form-control-line" name="pendidikan"  required value="{{$tutor->pendidikan}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Deskripsi</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Deskripsi"
                                        class="form-control form-control-line" name="deskripsi" required value="{{$tutor->deskripsi}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nomor Hp</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="08xxxxx"
                                        class="form-control form-control-line" name="no_hp"required value="{{$tutor->no_hp}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Foto</label>
                                <div class="col-md-12">
                                    <input type="file" placeholder="Misi Paud Bougenvile...."
                                        class="form-control form-control-line" name="foto">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success text-white" type="submit">Tambah Data</button>
                                </div>
                            </div>
                            @if (count($errors) > 0)
                            <div class = "alert alert-danger">
                               <ul>
                                  @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                  @endforeach
                               </ul>
                            </div>
                         @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.partial.footer')
@endsection
