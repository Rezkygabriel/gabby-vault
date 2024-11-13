<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ferrari Indonesia - Dealer Resmi Mobil Ferrari di Indonesia">
    <meta name="keywords" content="Ferrari, Mobil Sport, Supercar, Indonesia">
    <title>@yield('title', 'Gabby Vault')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo1.png') }}">

    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Swiper Styles -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Additional CSS -->
    @stack('css')
</head>
<body>

<!-- Splash Screen -->
<div id="splash-screen">
    <div class="logo-container">
        <span class="big-letters glitch">G</span>
        <span class="big-letters glitch">V</span>
    </div>
</div>

    <!-- Header Video -->
    <header id="video-header">
        <video autoplay loop muted>
            <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
            Browser Anda tidak mendukung tag video.
        </video>
        
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <!-- Logo GV -->
                <a class="navbar-brand" href="{{ route('beranda') }}">
                    <div class="logo-container">
                        <span class="big-letters">G</span>
                        <span class="big-letters">V</span>
                    </div>
                </a>

                <!-- Form Pencarian -->
                <form class="navbar-search d-none d-lg-block" action="{{ route('cari') }}" method="GET">
                    <input type="search" name="q" placeholder="Cari..." aria-label="Cari">
                </form>

                <!-- Tombol Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('beranda') ? 'active' : '' }}" 
                               href="{{ route('beranda') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('model') ? 'active' : '' }}" 
                               href="{{ route('model') }}">Model</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}" 
                               href="{{ route('tentang') }}">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" 
                               href="{{ route('kontak') }}">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Tentang Ferrari Indonesia</h5>
                    <p>Dealer resmi Ferrari di Indonesia, menyediakan koleksi mobil sport mewah dengan layanan penjualan dan purna jual berkualitas tinggi.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('model') }}" class="text-white text-decoration-none">Model Kami</a></li>
                        <li><a href="{{ route('tentang') }}" class="text-white text-decoration-none">Tentang Kami</a></li>
                        <li><a href="{{ route('kontak') }}" class="text-white text-decoration-none">Hubungi Kami</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Karir</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i> Jl. Sudirman No. 123, Jakarta</li>
                        <li><i class="fas fa-phone me-2"></i> (021) 123-4567</li>
                        <li><i class="fas fa-envelope me-2"></i> info@ferrari-indonesia.com</li>
                    </ul>
                    <div class="social-media mt-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 Ferrari Indonesia. Hak Cipta Dilindungi.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-white text-decoration-none me-3">Kebijakan Privasi</a>
                    <a href="#" class="text-white text-decoration-none">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    <!-- Navbar Scroll Effect -->
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    

    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>