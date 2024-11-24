@extends('dashboard.app')

@section('content')
<div class="container">
    <h1>Edit Teknis</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tekniss.update', $tekniss->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6 mb-3 mb-md-0">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $tekniss->title }}" required>
            </div>
            <div class="col-md-6">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" class="form-control" rows="4" required>{{ $tekniss->content }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 mb-3 mb-md-0">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($tekniss->image)
                    <p class="mt-2">Gambar saat ini:</p>
                    <img src="{{ asset('images/' . $tekniss->image) }}" alt="{{ $tekniss->title }}" class="img-fluid rounded" style="max-width: 200px;">
                @endif
            </div>
        </div>
        <div class="text-right mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
