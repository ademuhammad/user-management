@extends('templateadmin.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title justify-content-center">DataTable Siswa</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a class="btn btn-success mb-3" href="{{ route('roles.create') }}"> Create New User</a>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <th>Nama</th>
                <th>Action</th>

            </thead>
            <tbody>

                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>

                    <td>
                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                        $role->id],'style'=>'display:inline']) !!}
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