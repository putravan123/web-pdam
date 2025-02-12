@extends('dashboard.app')

@section('content')
    <div class="container">
        <h1>Tambah Mata Air Baru</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{ route('kapasitas-produk.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>

        <div class="form-group">
            <label for="imageTable">Image Table</label>
            <input type="file" class="form-control" id="imageTable" name="imageTable">
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="{{ route('sambungan_langganans.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
        </form>
    </div>
@endsection

