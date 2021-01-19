@extends('template.base')
@section('content')
<h1>DataTable</h1>
<div class="row">
    <div class="col-lg-12">
        <a href="{{route('student.create')}}" class="btn btn-primary mb-3">Tambah</a>
        <div class="table-responsive">
            <table class="table table-stripped data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


@section('script')
<script>
    $(document).ready(function(){
        $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax:" {{ route('student.data') }}",
        columns:[
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
            },

            {
                data: 'nim',
                name: 'nim',
            },

            {
                data: 'name',
                name: 'name',
            },

            {
                data: 'gender',
                name: 'gender',
            },

            {
                data: 'departement',
                name: 'departement',
            },

            {
                data: 'address',
                name: 'address',
            },

            {
                data: 'action',
                name: 'action',
            },
        ]
    })
    })
</script>

@endsection