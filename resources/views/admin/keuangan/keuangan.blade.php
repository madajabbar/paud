@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
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
                        <h4 class="card-title">Tabel Keuangan Siswa</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Pembayaran</th>
                                        <th scope="col">Pendaftar</th>
                                        <th scope="col">Nama Ayah</th>
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
          ajax: "{{ route('keuangan') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
              {data: 'nama', name: 'nama'},
              {data: 'status', name: 'status'},
              {data: 'pembayaran', name: 'pembayaran'},
              {data: 'pendaftar', name: 'pendaftar'},
              {data: 'nama_ayah', name: 'nama_ayah'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

    });
  </script>
@endsection
