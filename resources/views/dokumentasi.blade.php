@extends('layout.app')

@section('content')
<section class="documentation-section py-5">
    <div class="container text-center fade-in">
        <h2 class="text-warning mb-4">Class Documentation</h2>
        <p class="text-light mb-5" style="max-width: 700px; margin: 0 auto;">
            Here are some memorable moments from our journey together as students of Information Technology 5B UIN Salatiga.
        </p>
    </div>

    <!-- Swiper Container -->
    <div class="swiper documentation-swiper">
        <div class="swiper-wrapper" id="documentation-list">
            <!-- Konten akan dimuat dari JSON -->
        </div>
        <!-- Navigasi -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Swiper JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    fetch('/data/documentations.json')
        .then(res => res.json())
        .then(photos => {
            const container = document.getElementById('documentation-list');
            photos.forEach((p, i) => {
                const slide = document.createElement('div');
                slide.className = 'swiper-slide';
                slide.innerHTML = `
                    <div class="doc-card">
                        <img src="${p.img}" alt="Documentation ${i + 1}" onerror="this.src='images/default.jpg'">
                        <div class="doc-caption">${p.title}</div>
                    </div>
                `;
                container.appendChild(slide);
            });

            // Inisialisasi Swiper
            new Swiper('.documentation-swiper', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 2, // tampil 3 slide sekaligus
                spaceBetween: 200,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 200,
                    modifier: 2,
                    slideShadows: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        })
        .catch(err => console.error('Error loading documentation data:', err));
});
</script>
@endsection
