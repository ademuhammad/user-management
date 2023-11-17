@extends('templateadmin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Siswa</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::model($siswa, ['route' => ['siswa.update', $siswa->id], 'method' => 'PATCH']) !!}
        <div class="form-group">
            {!! Form::label('nama', 'Nama') !!}
            {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('kelas', 'Kelas') !!}
            {!! Form::text('kelas', null, ['class' => 'form-control', 'placeholder' => 'Kelas']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('alamat', 'Alamat') !!}
            {!! Form::textarea('alamat', null, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
</div>
@endsection