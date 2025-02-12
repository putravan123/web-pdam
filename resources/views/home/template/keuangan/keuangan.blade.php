<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Keuangan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    @vite([
        'resources/css/app.css', 'resources/js/app.js'
    ])
</head>

<body>

    <!-- Navbar Start -->
    @include('home.template.keuangan.navbar')
    <!-- Navbar End -->

    <!-- Layanan Warga Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">

            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h1 class="display-4 text-capitalize mb-3">Aspek Keuangan</h1>
                <p>Informasi mengenai layanan yang tersedia untuk warga, termasuk pengaduan dan perizinan.</p>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach($keuangan as $item)
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="row align-items-center shadow-sm rounded p-3">
                            <div class="col-md-6">
                                @if ($item->image)
                                <img src="{{ asset('images/' . $item->image) }}" class="img-fluid rounded shadow-lg" alt="{{ $item->title }}" style="width: 100%; height: auto;">
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h5 class="mb-3">{{ $item->title }}</h5>
                                <p>{!! nl2br(e($item->content) ) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Control -->
            <div class="d-flex justify-content-center mt-4">
                {{-- {{ $keuangan->links('pagination::bootstrap-5') }} --}}
            </div>
        </div>
    </div>
    <!-- Layanan Warga Section End -->

    @include('home.template.footer')

    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    
    <!-- Template Javascript -->
    <script src="{{ asset('template/js/main.js') }}"></script>
</body>
</html>
