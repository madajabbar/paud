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
        @if (isset($profile))
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Edit Data
        </button>
        <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tentang</h4>
                            <h6 class="card-subtitle">{!!$profile->tentang!!}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Visi</h4>
                            <h6 class="card-subtitle">{!!$profile->visi!!}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Misi</h4>
                            <h6 class="card-subtitle">{!!$profile->misi!!}</h6>
                        </div>
                    </div>
                </div>
        </div>
            @else
            <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Profile belum diatur</h4>
                        <h6 class="card-subtitle">Silakan atur data profile Paud Bougenvile</h6>
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
                                    <form class="form-horizontal form-material mx-2" action="{{url('admin/profile')}}" method="post" enctype="multipart/form">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$profile ? $profile->id : NULL}}">
                                        <div class="form-group">
                                            <label class="col-md-12">Tentang</label>
                                            <div class="col-md-12">
                                                <textarea type="text" placeholder="Paud Bougenvile berdiri sejak ...."
                                                    class="form-control form-control-line" id="tentang" name="tentang" value="{{$profile ? $profile->tentang : NULL}}"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Visi</label>
                                            <div class="col-md-12">
                                                <textarea type="text" placeholder="Visi Paud Bougenvile...."
                                                    class="form-control form-control-line" id="visi" name="visi" value="{{$profile ? $profile->visi : NULL}}"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Misi</label>
                                            <div class="col-md-12">
                                                <textarea type="text" placeholder="Misi Paud Bougenvile...."
                                                    class="form-control form-control-line" id="misi" name="misi" value="{{$profile ? $profile->misi : NULL}}"></textarea>
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

    @include('admin.partial.footer')
</div>
@endsection
@section('js')
<script>
    ClassicEditor
        .create( document.querySelector( '#tentang' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#misi' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#visi' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
