@extends('templateadmin.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Siswa</div>

                <div class="card-body">
                    <form action="{{ route('siswa.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas:</label>
                            <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection