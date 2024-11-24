@extends('dashboard.app')

@section('content')
<div class="container">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <h1 class="text-center my-4">Tambah Biografi Direksi</h1>
    <form action="{{ route('biografi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Judul -->
            <div class="col-12 col-md-6 mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan judul" required>
            </div>
            <!-- Jabatan -->
            <div class="col-12 col-md-6 mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan jabatan" required>
            </div>
        </div>
        <div class="row">
            <!-- Konten -->
            <div class="col-12 mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea name="content" id="content" class="form-control" rows="5" placeholder="Masukkan konten biografi" required></textarea>
            </div>
        </div>
        <div class="row">
            <!-- Social Media Links -->
            <div class="col-12 col-md-6 mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="url" name="facebook" id="facebook" class="form-control" placeholder="Masukkan link Facebook">
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="url" name="twitter" id="twitter" class="form-control" placeholder="Masukkan link Twitter">
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="linkedin" class="form-label">LinkedIn</label>
                <input type="url" name="linkedin" id="linkedin" class="form-control" placeholder="Masukkan link LinkedIn">
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="url" name="instagram" id="instagram" class="form-control" placeholder="Masukkan link Instagram">
            </div>
        </div>
        <div class="row">
            <!-- Gambar -->
            <div class="col-12 mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary px-5 mt-3">Simpan</button>
        </div>
    </form>
</div>
@endsection
