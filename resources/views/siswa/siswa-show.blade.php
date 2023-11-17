@extends('templateadmin.layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title justify-content-center">DataTable Siswa</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nama</h5>
                        <p class="card-text">{{ $siswa->nama }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kelas</h5>
                        <p class="card-text">{{ $siswa->kelas }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Alamat</h5>
                <p class="card-text">{{ $siswa->alamat }}</p>
            </div>
        </div>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
    <!-- /.card-body -->
</div>
@endsection