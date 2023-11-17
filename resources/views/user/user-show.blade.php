@extends('templateadmin.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Details</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="roles">Roles:</label>
                        <input type="text" name="roles" value="{{ implode(', ', $user->roles->pluck('name')->all()) }}"
                            class="form-control" readonly>
                    </div>

                    <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection