@extends('dashboard.app')

@section('content')
    <!-- Check if no SambunganLangganans exist -->
    @if ($kapasitasProduk->isEmpty())
        <a class="btn btn-primary" href="{{ route('kapasitas_produk.create') }}">Tambah Hukum Baru</a>
    @endif

    <!-- Display success message if available -->
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mt-3">
        @foreach ($kapasitasProduk as $item)
            <div class="col-md-12 mb-4" style="padding: 30px;">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Daftar Hukum</h1>

                    <!-- Only show the 'Tambah Hukum Baru' button if the collection is empty -->
                    @if ($kapasitasProduk->isEmpty())
                        <a class="btn btn-primary" href="{{ route('kapasitas_produk.create') }}">Tambah Hukum Baru</a>
                    @endif

                    <!-- Show 'Edit' button if there's exactly 1 item in the collection -->
                    @if ($kapasitasProduk->count() === 1)
                        <a class="btn btn-primary mt-auto" href="{{ route('kapasitas-produk.edit', $item->id) }}">Edit</a>
                    @endif
                </div>

                <div class="row">
                    <!-- Left image (image) -->
                    <div class="col-12 col-md-6 mb-3 d-flex justify-content-center">
                        @if ($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded shadow-lg" alt="Image" style="max-width: 100%; height: auto; object-fit: cover;">
                        @else
                            <p>No Image</p>
                        @endif
                    </div>

                    <!-- Right image (imagetabel) -->
                    <div class="col-12 col-md-6 mb-3 d-flex justify-content-center">
                        @if ($item->imageTable)
                            <img src="{{ asset('storage/' . $item->imageTable) }}" class="img-fluid rounded shadow-lg" alt="Image Table" style="max-width: 100%; height: auto; object-fit: cover;">
                        @else
                            <p>No Image Table</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Pagination (if needed) --}}
    {{-- {{ $hukums->links() }} --}}
@endsection
