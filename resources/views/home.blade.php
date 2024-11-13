@extends('layouts.app')

@section('content')

<!-- Swiper Carousel -->
<div class="swiper mySwiper my-5">
    <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide">
            <div class="container d-flex align-items-center justify-content-between flex-wrap">
                <div class="text-content pe-5">
                    <h1 class="text-uppercase fw-bold display-6 mb-4">
                        Scuderia Ferrari HP Merayakan<br>
                        Peluncuran Film Gladiator II Bersama Paramount
                    </h1>
                    <p class="fs-5 mb-4">
                        Scuderia Ferrari HP dengan bangga berkolaborasi dengan Paramount Pictures 
                        dalam perayaan eksklusif peluncuran Gladiator II, 
                        sekuel yang ditunggu-tunggu dari film ikonik tahun 2000.
                    </p>
                    <a href="#" class="btn btn-outline-danger btn-lg text-uppercase">
                        Baca Selengkapnya <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
                <div class="image-content">
                    <img src="{{ asset('images/image1.jpeg') }}" 
                         alt="Slider 1" 
                         class="img-fluid rounded">
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
            <div class="container d-flex align-items-center justify-content-between flex-wrap">
                <div class="text-content pe-5">
                    <h1 class="text-uppercase fw-bold display-6 mb-4">
                        Rasakan Performa Ferrari<br>
                        SF90 Stradale
                    </h1>
                    <p class="fs-5 mb-4">
                        Temukan mobil hybrid listrik produksi pertama dari Ferrari,
                        menghadirkan performa tak tertandingi dengan 1.000 cv.
                    </p>
                    <a href="#" class="btn btn-outline-danger btn-lg text-uppercase">
                        Jelajahi <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
                <div class="image-content">
                    <img src="{{ asset('images/image2.jpeg') }}" 
                         alt="Ferrari SF90 Stradale" 
                         class="img-fluid rounded">
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
            <div class="container d-flex align-items-center justify-content-between flex-wrap">
                <div class="text-content pe-5">
                    <h1 class="text-uppercase fw-bold display-6 mb-4">
                        Ferrari Purosangue<br>
                        Definisi Baru Olahraga
                    </h1>
                    <p class="fs-5 mb-4">
                        Masuki dimensi baru Ferrari dengan mobil empat pintu,
                        empat kursi pertama dalam sejarah 75 tahun Kuda Jingkrak.
                    </p>
                    <a href="#" class="btn btn-outline-danger btn-lg text-uppercase">
                        Telusuri Sekarang <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
                <div class="image-content">
                    <img src="{{ asset('images/image3.jpeg') }}" 
                         alt="Ferrari Purosangue" 
                         class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper Pagination (optional) -->
    <div class="swiper-pagination"></div>

    <!-- Swiper Navigation Buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<div class="fall-treats-section">
    <h2>Favorite Fall Treats</h2>
    <div class="fall-treats-grid">
        <div class="fall-treats-card">
            <img src="{{ asset('images/image (1).png') }}" alt="Women's Bag">
            <h5>Bags to tote.</h5>
            <a href="#">SHOP WOMEN'S BAGS</a>
        </div>
        <div class="fall-treats-card">
            <img src="{{ asset('images/image (4).png') }}" alt="Women's Accessories">
            <h5>Personal touches.</h5>
            <a href="#">SHOP WOMEN'S ACCESSORIES</a>
        </div>
        <div class="fall-treats-card">
            <img src="{{ asset('images/image (3).png') }}" alt="Women's Wallets">
            <h5>Hard-working wallets.</h5>
            <a href="#">SHOP WOMEN'S WALLETS</a>
        </div>
        <!-- Tambahkan lebih banyak item sesuai kebutuhan -->
    </div>
</div>


@endsection

