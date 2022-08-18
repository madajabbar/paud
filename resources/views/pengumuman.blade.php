@extends('layouts.main')

@section('container')
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Pengumuman</h2>
            </div>

            <div class="card mb-5">
                <h3 class="text-center">Selamat kepada</h3>
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Our Team Section ======= -->
    @include('partials.tutor')
@endsection

@section('js')
    <script type="text/javascript">
        $(function() {

            var table = $('.table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('pengumuman') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                ]
            });

        });
    </script>
@endsection
