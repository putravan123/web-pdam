@extends('dashboard.app')

@section('content')
<div class="container">
    <h1>Edit Visi Misi</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('visi_misis.update', $visiMisi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="titel" class="form-label">Titel</label>
                <input type="text" name="titel" class="form-control" value="{{ $visiMisi->titel }}" required>
            </div>
            <div class="col-md-6">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="4" required>{{ $visiMisi->content }}</textarea>
            </div>
        </div>
        <div class="text-right mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
