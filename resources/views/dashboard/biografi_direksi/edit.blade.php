@extends('dashboard.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Edit Biografi Direksi</h1>
    <form action="{{ route('biografi.update', $biografi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row">
            <!-- Judul -->
            <div class="col-12 col-md-6 mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $biografi->title) }}" required>
            </div>
            <!-- Jabatan -->
            <div class="col-12 col-md-6 mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ old('jabatan', $biografi->jabatan) }}" required>
            </div>
        </div>
        
        <div class="row">
            <!-- Konten -->
            <div class="col-12 mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content', $biografi->content) }}</textarea>
            </div>
        </div>
        
        <div class="row">
            <!-- Social Media Links -->
            <div class="col-12 col-md-6 mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="url" name="facebook" id="facebook" class="form-control" value="{{ old('facebook', $biografi->facebook) }}">
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="url" name="twitter" id="twitter" class="form-control" value="{{ old('twitter', $biografi->twitter) }}">
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="linkedin" class="form-label">LinkedIn</label>
                <input type="url" name="linkedin" id="linkedin" class="form-control" value="{{ old('linkedin', $biografi->linkedin) }}">
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="url" name="instagram" id="instagram" class="form-control" value="{{ old('instagram', $biografi->instagram) }}">
            </div>
        </div>
        
        <div class="row">
            <!-- Gambar -->
            <div class="col-12 mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" name="image" id="image" class="form-control">
                @if ($biografi->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $biografi->image) }}" alt="Image" class="img-thumbnail" width="150">
                    </div>
                @endif
            </div>
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-primary px-5 mt-3">Perbarui</button>
        </div>
    </form>
</div>
@endsection
