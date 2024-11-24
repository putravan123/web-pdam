@extends('dashboard.app')

@section('content')
    @if ($coreValue->isEmpty())
        <a class="btn btn-primary mb-3" href="{{ route('core-value.create') }}">Tambah Hukum Baru</a>
    @endif
    
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mt-3">
        @foreach ($coreValue as $item)
            <div class="col-md-12 mb-4 p-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1>Daftar Hukum</h1>
                    @if ($coreValue->count() === 1)
                        <a class="btn btn-primary" href="{{ route('core-value.edit', $item->id) }}">Edit</a>
                    @endif
                </div>

                <div class="row">
                    <!-- Kolom Gambar -->
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        @if ($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" style="width: 100%; height: auto;" alt="{{ $item->title }}">
                        @endif
                    </div>

                    <!-- Kolom Teks -->
                    <div class="col-12 col-md-6">
                        <h5 class="card-title mb-3">{{ $item->title }}</h5>
                        <p class="card-content">{!! nl2br(e($item->content)) !!}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
