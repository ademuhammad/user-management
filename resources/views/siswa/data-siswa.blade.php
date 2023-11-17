@extends('templateadmin.layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title justify-content-center">DataTable Siswa</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a class="btn btn-success mb-3" href="{{ route('siswa.create') }}"> Create New User</a>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th width="280px">Action</th>

            </thead>
            <tbody>

                @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->kelas }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('siswa.show',$s->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('siswa.edit',$s->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['siswa.destroy',
                        $s->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection