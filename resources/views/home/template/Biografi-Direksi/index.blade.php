<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Biografi Direksi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">

    <link rel="icon" href="{{asset('image/pdam-garut.png')}}" type="image/x-icon">
</head>

<body>

    <!-- Navbar & Hero Start -->
    @include('home.template.Biografi-Direksi.navbar')
    <!-- Navbar & Hero End -->

    <div class="container my-5">
      <div class="row">
          @foreach($biografi_direksi as $biografi)
          <div class="col-md-4 col-sm-6 col-12 mb-4" style="padding: 200px 0 200px 0">
              <div class="card shadow-sm h-100">
                <img src="{{ asset('storage/'.$biografi->image) }}" alt="Profile Photo" style="width: 100%; height: 500px; object-fit: cover;">
                  <div class="card-body">
                      <h5 class="card-title text-start">{{ $biografi->nama }}</h5>
                      <p class="text-muted text-start">{{ $biografi->jabatan }}</p>
                      <p class="card-text text-start">{{ $biografi->bio }}</p>
                      <p class="card-text text-start">{{ $biografi->karir }}</p>
                      <p class="card-text text-start">{{ $biografi->posisi_sekarang }}</p>
                      <div class="d-flex justify-content-start mt-3">
                          <a href="#" class="btn btn-primary btn-sm mx-1"><i class="fab fa-facebook-f"></i></a>
                          <a href="#" class="btn btn-primary btn-sm mx-1"><i class="fab fa-twitter"></i></a>
                          <a href="#" class="btn btn-primary btn-sm mx-1"><i class="fab fa-linkedin-in"></i></a>
                          <a href="#" class="btn btn-primary btn-sm mx-1"><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
      </div>

      <!-- Pagination Links -->
      <div class="d-flex justify-content-center">
          {{ $biografi_direksi->links() }}
      </div>
  </div>
    <!-- Footer -->
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
</body>
</html>
