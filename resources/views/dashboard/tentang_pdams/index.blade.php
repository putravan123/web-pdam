@extends('dashboard.app')

@section('content')
<div class="container">
    @if ($tentangPdam->isEmpty())
        <a class="btn btn-primary" href="{{ route('tentang-pdams.create') }}">Tambah Hukum Baru</a>
    @endif
    
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="row mt-3">
        @foreach ($tentangPdam as $item)
            <div class="col-12 mb-4" style="padding: 30px;">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1>Daftar Hukum</h1>
                    @if ($tentangPdam->isEmpty())
                        <a class="btn btn-primary" href="{{ route('tentang-pdams.create') }}">Tambah Hukum Baru</a>
                    @endif
                    @if ($tentangPdam->count() === 1)
                        <a class="btn btn-primary mt-auto" href="{{ route('tentang-pdams.edit', $tentangPdam->first()->id) }}">Edit</a>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <h5 class="card-title mb-3">{{ $item->title }}</h5>
                        <p class="card-content">{!! nl2br(e($item->content)) !!}</p>
                    </div>
                    <div class="col-md-4 mb-3 d-flex justify-content-center">
                        @if ($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;" alt="{{ $item->title }}">
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- Pagination (if needed) --}}
    {{-- {{ $tentangPdam->links() }} --}}
</div>
@endsection
