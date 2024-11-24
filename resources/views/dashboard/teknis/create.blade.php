@extends('dashboard.app')

@section('content')
<div class="container">
    <h1>Create New Teknis</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tekniss.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6 mb-3 mb-md-0">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required>
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content" rows="4" required>{{ old('content') }}</textarea>
        </div>
        <div class="text-right mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
@endsection
