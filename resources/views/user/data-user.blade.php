@extends('templateadmin.layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a class="btn btn-success mb-3" href="{{ route('users.create') }}"> Create New User</a>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th width="280px">Action</th>

            </thead>
            <tbody>

                @foreach ($user as $users)
                <tr>

                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>
                        @if(!empty($users->getRoleNames()))
                        @foreach($users->getRoleNames() as $v)
                        {{ $v }}
                        @endforeach
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{ route('users.show',$users->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('users.edit',$users->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy',
                        $users->id],'style'=>'display:inline']) !!}
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