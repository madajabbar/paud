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
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- title -->
                        <div class="d-md-flex">
                            <div>
                                <h4 class="card-title">Rekapan Data</h4>
                                <h5 class="card-subtitle">Jumlah Siswa, Tutor, Galeri, User</h5>
                            </div>
                        </div>
                        <!-- title -->
                        <div class="table-responsive">
                            <table class="table mb-0 table-hover align-middle text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Siswa</th>
                                        <th class="border-top-0">Tutor</th>
                                        <th class="border-top-0">Galeri</th>
                                        <th class="border-top-0">User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10"><a
                                                        class="btn btn-circle d-flex btn-info text-white">{{$siswa->count()}}</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$tutor->count()}}</td>
                                        <td>{{$galeri->count()}}</td>
                                        <td>
                                            <label class="badge bg-danger">{{$user->count()}}</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partial.footer')
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
@endsection
