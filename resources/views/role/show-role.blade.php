@extends('templateadmin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Role Details</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Role Name:</label>
                        <input type="text" name="name" value="{{ $role->name }}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="permissions">Role Permissions:</label>
                        <ul>
                            @foreach($rolePermissions as $permission)
                            <li>{{ $permission->name }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <a href="{{ route('roles.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection