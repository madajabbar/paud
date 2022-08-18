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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Default Table</h4>
                        <h6 class="card-subtitle">Using the most basic table markup, here’s how
                            <code>.table</code>-based tables look in Bootstrap. All table styles are inherited
                            in Bootstrap 4, meaning any nested tables will be styled in the same manner as the
                            parent.</h6>
                        <h6 class="card-title m-t-40"><i
                                class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Table With
                            Outside Padding</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tempat, Tangal Lahir</th>
                                        <th scope="col">Nama Ayah</th>
                                        <th scope="col">Nama Ibu</th>
                                        <th scope="col">Pekerjaan Ayah</th>
                                        <th scope="col">Pekerjaan Ibu</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No HP Ayah</th>
                                        <th scope="col">No HP Ibu</th>
                                        <th scope="col">Pendaftar</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

@section('js')
<script type="text/javascript">
    $(function () {

      var table = $('.table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('siswa') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
              {data: 'nama', name: 'nama'},
              {data: 'tempat_lahir', name: 'tempat_lahir'},
              {data: 'nama_ayah', name: 'nama_ayah'},
              {data: 'nama_ibu', name: 'nama_ibu'},
              {data: 'pekerjaan_ayah', name: 'pekerjaan_ayah'},
              {data: 'pekerjaan_ibu', name: 'pekerjaan_ibu'},
              {data: 'alamat', name: 'alamat'},
              {data: 'no_hp_ayah', name: 'no_hp_ayah'},
              {data: 'no_hp_ibu', name: 'no_hp_ibu'},
              {data: 'pendaftar', name: 'pendaftar'},
              {data: 'status', name: 'status'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

    });
  </script>
@endsection
