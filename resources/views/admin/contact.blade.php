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
        @if (isset($contact))
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Edit Data
        </button>
        <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Deskripsi</h4>
                            <h6 class="card-subtitle">{{$contact->deskripsi}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Email</h4>
                            <h6 class="card-subtitle">{{$contact->email}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Alamat</h4>
                            <h6 class="card-subtitle">{{$contact->alamat}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">No HP</h4>
                            <h6 class="card-subtitle">{{$contact->no_hp}}</h6>
                        </div>
                    </div>
                </div>
        </div>
            @else
            <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kontak belum diatur</h4>
                        <h6 class="card-subtitle">Silakan atur data kontak Paud Bougenvile</h6>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Isi Data
                        </button>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Profile Paud Bougenvile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal form-material mx-2" action="{{url('admin/contact')}}" method="post" enctype="multipart/form">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$contact ? $contact->id : NULL}}">
                                        <div class="form-group">
                                            <label class="col-md-12">Deskripsi</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Paud Bougenvile ..."
                                                    class="form-control form-control-line" required name="deskripsi" value="{{$contact ? $contact->deskripsi : NULL}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">email</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="email Paud Bougenvile...."
                                                    class="form-control form-control-line" required name="email" value="{{$contact ? $contact->email : NULL}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">alamat</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="alamat Paud Bougenvile...."
                                                    class="form-control form-control-line" required name="alamat" value="{{$contact ? $contact->alamat : NULL}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">no_hp</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="no_hp Paud Bougenvile...."
                                                    class="form-control form-control-line" required name="no_hp" value="{{$contact ? $contact->no_hp : NULL}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success text-white" type="submit">Tambah Data</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                                </div>
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
