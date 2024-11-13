// public/js/app.js
document.addEventListener('DOMContentLoaded', function() {
    // Mengubah background navbar saat di-scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 0) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

   // Initialize Swiper
    var swiper = new Swiper(".mySwiper", {
    loop: true,  // Make the carousel loop back to the first slide
    autoplay: {
        delay: 3000, // 3 seconds per slide
        disableOnInteraction: false, // Continue autoplay after interaction
    },
    pagination: {
        el: ".swiper-pagination", // Enable pagination dots
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next", // Next button
        prevEl: ".swiper-button-prev", // Previous button
    },
    effect: "fade", // You can change this effect to 'slide', 'cube', etc.
});

window.addEventListener('load', function() {
    const splashScreen = document.getElementById('splash-screen');
    const logoSplashScreen = document.querySelector('#splash-screen .logo-container');
    
    // Pastikan splash screen muncul pertama kali
    splashScreen.style.display = 'flex';

    // Menunggu 1 detik sebelum mulai efek fade-in pada logo splash screen
    setTimeout(function() {
        logoSplashScreen.classList.add('fade-in');  // Menambahkan class fade-in untuk logo splash screen
    }, 1000);  // Delay 1 detik untuk efek fade-in

    // Setelah logo fade-in selesai, fade-out splash screen
    setTimeout(function() {
        splashScreen.style.opacity = 0;  // Mulai fade-out splash screen

        // Setelah splash screen selesai fade-out, sembunyikan splash screen
        setTimeout(function() {
            splashScreen.style.display = 'none';  // Menyembunyikan splash screen
        }, 2000);  // Durasi fade-out adalah 2 detik
    }, 3000);  // Logo tampil selama 3 detik sebelum splash screen fade-out
});


});