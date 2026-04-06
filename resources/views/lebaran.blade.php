@extends('layouts.app')

@section('title', 'Momen Lebaran - Ramadhan Berkah')

@section('content')
{{-- Header --}}
<section class="hero-section text-center text-white py-5">
    <div class="container position-relative" style="z-index: 1;">
        <h1 class="display-5 fw-bold mb-3">
            <i class="bi bi-camera me-2"></i>Momen Lebaran
        </h1>
        <p class="lead">Dokumentasi momen bahagia di hari raya Idul Fitri</p>
    </div>
</section>

{{-- Gallery Section --}}
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="text-center section-title">Galeri Foto Lebaran</h2>
                
                <div class="row g-4">
                    {{-- Foto 1 --}}
                    <div class="col-md-6">
                        <div class="card card-custom">
                            <div class="card-header-custom text-center">
                                <h5 class="mb-0">
                                    <i class="bi bi-heart-fill me-2"></i>Momen Kebersamaan
                                </h5>
                            </div>
                            <div class="card-body p-0">
                                <img src="{{ asset('images/lebaran-1.png') }}" 
                                     alt="Momen Lebaran" 
                                     class="img-fluid w-100" 
                                     style="border-radius: 0 0 15px 15px;">
                            </div>
                            <div class="card-footer bg-white border-0 p-3">
                                <p class="text-center text-muted mb-0">
                                    <i class="bi bi-heart-fill text-danger me-2"></i>
                                    Kebersamaan keluarga di hari yang fitri
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Foto 2 - Placeholder untuk foto kedua --}}
                    <div class="col-md-6">
                        <div class="card card-custom">
                            <div class="card-header-custom text-center">
                                <h5 class="mb-0">
                                    <i class="bi bi-stars me-2"></i>Momen Bahagia
                                </h5>
                            </div>
                            <div class="card-body p-0">
                                <img src="{{ asset('images/lebaran-1.png') }}" 
                                     alt="Momen Lebaran" 
                                     class="img-fluid w-100" 
                                     style="border-radius: 0 0 15px 15px;">
                            </div>
                            <div class="card-footer bg-white border-0 p-3">
                                <p class="text-center text-muted mb-0">
                                    <i class="bi bi-heart-fill text-danger me-2"></i>
                                    Senyum dan kebahagiaan di hari raya
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Ucapan Lebaran --}}
                <div class="mt-5">
                    <div class="card card-custom">
                        <div class="card-body p-5 text-center" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
                            <h3 class="text-white mb-3">
                                <i class="bi bi-moon-stars-fill me-2" style="color: var(--gold-color);"></i>
                                Selamat Hari Raya Idul Fitri
                            </h3>
                            <p class="arabic-text text-white mb-3" style="font-size: 2rem;">
                                تَقَبَّلَ اللهُ مِنَّا وَمِنْكُمْ
                            </p>
                            <p class="text-white fst-italic mb-4">
                                "Semoga Allah menerima amal ibadah kami dan Anda"
                            </p>
                            <hr style="border-color: rgba(255,255,255,0.3);">
                            <p class="text-white mb-0">
                                Mohon maaf lahir dan batin 🙏
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Doa Lebaran --}}
                <div class="row mt-5 g-4">
                    <div class="col-md-6">
                        <div class="card card-custom h-100">
                            <div class="card-body p-4 text-center">
                                <h5 class="mb-3">
                                    <i class="bi bi-book-half text-success me-2"></i>
                                    Takbiran
                                </h5>
                                <p class="arabic-text mb-3" style="font-size: 1.5rem;">
                                    اَللهُ أَكْبَرُ اَللهُ أَكْبَرُ اَللهُ أَكْبَرُ
                                    <br>
                                    لاَ إِلٰهَ إِلَّا اللهُ
                                    <br>
                                    اَللهُ أَكْبَرُ اَللهُ أَكْبَرُ
                                    <br>
                                    وَلِلّٰهِ الْحَمْدُ
                                </p>
                                <p class="text-muted fst-italic">
                                    "Allah Maha Besar, Allah Maha Besar, Allah Maha Besar. 
                                    Tiada Tuhan selain Allah. Allah Maha Besar, Allah Maha Besar. 
                                    Dan segala puji bagi Allah."
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-custom h-100">
                            <div class="card-body p-4 text-center">
                                <h5 class="mb-3">
                                    <i class="bi bi-chat-heart-fill text-success me-2"></i>
                                    Ucapan Lebaran
                                </h5>
                                <p class="arabic-text mb-3" style="font-size: 1.5rem;">
                                    تَقَبَّلَ اللهُ مِنَّا وَمِنْكُمْ صِيَامَنَا وَصِيَامَكُمْ
                                </p>
                                <p class="text-muted fst-italic mb-3">
                                    "Semoga Allah menerima dari kami dan dari Anda, 
                                    puasa kami dan puasa Anda"
                                </p>
                                <hr>
                                <p class="text-muted">
                                    <i class="bi bi-emoji-smile me-2"></i>
                                    Selamat Hari Raya Idul Fitri 1447 H!
                                    <br>
                                    Mohon maaf lahir dan batin.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h3 class="fw-bold mb-3" style="color: var(--primary-color);">
                    <i class="bi bi-camera-fill me-2" style="color: var(--gold-color);"></i>
                    Bagikan Momen Lebaran Anda
                </h3>
                <p class="lead text-muted mb-4">
                    Punya foto momen Lebaran yang indah? Bagikan kebahagiaan Anda bersama keluarga dan teman-teman!
                </p>
                <a href="{{ route('home') }}" class="btn btn-primary-custom btn-lg">
                    <i class="bi bi-house-door me-2"></i>Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
