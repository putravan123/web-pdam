<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary">
                <img src="{{asset('image/pdam-garut.png')}}" alt="Logo">
                Tirta intan
                {{-- <i class="fas fa-hand-holding-water me-3"></i> --}}
            </h1> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('home')}}" class="nav-item nav-link">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile Kami</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('biografi_direksi')}}" class="dropdown-item">Biografi Direksi</a>
                        <a href="{{route('tentangPdam')}}" class="dropdown-item">Tentang PDAM</a>
                        <a href="{{route('visi')}}" class="dropdown-item">Visi Misi</a>
                        <a href="{{route('struktur')}}" class="dropdown-item">Struktur Organisasi</a>
                        <a href="{{route('coreValue')}}" class="dropdown-item">Core Values</a>
                        <a href="{{route('petaWilayah')}}" class="dropdown-item">Peta Wilayah</a>
                        <a href="{{route('kapasitasProduk')}}" class="dropdown-item">Kapasitas Produk</a>
                        <a href="{{route('sambungnaLangganan')}}" class="dropdown-item">Sambungan Langganan</a>
                        <a href="{{route('hukum')}}" class="dropdown-item">Produk Hukum</a>
                    </div>
                </div>
                <div class="nav-item dropdown active">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Perkembangan Usaha</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('pelayanan')}}" class="dropdown-item">Aspek Pelayanan</a>
                        <a href="{{route('teknis')}}" class="dropdown-item">Aspek Teknis</a>
                        <a href="{{route('manajemen')}}" class="dropdown-item">Aspek Manajemen</a>
                        <a href="{{route('keuangan')}}" class="dropdown-item">Aspek Keuangan</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pelayanan langganan</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('registrasi')}}" class="dropdown-item">Register</a>
                        <a href="{{route('infoRegistasi')}}" class="dropdown-item">Info Register</a>
                        <a href="" class="dropdown-item">Info Tagihan</a>
                        <a href="" class="dropdown-item">Simulasi Tarif</a>
                        <a href="" class="dropdown-item">Konsultasi Publik</a>
                    </div>
                </div>
                <a href="{{route('berita')}}" class="nav-item nav-link">Berita</a>
                <a href="{{route('galeri')}}" class="nav-item nav-link">Galeri</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Aspek Keuangan</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('pelayanan')}}">Aspek Pelayanana</a></li>
                <li class="breadcrumb-item"><a href="{{route('teknis')}}">Aspek Teknis</a></li>
                <li class="breadcrumb-item"><a href="{{route('manajemen')}}">Aspek Manajemen</a></li>
                <li class="breadcrumb-item active text-primary">Aspek Keuangan</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->
</div>