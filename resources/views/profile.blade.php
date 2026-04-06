@extends('layouts.app')

@section('title', 'Profile - Ramadhan Berkah')

@section('content')
{{-- Header --}}
<section class="hero-section text-center text-white py-5">
    <div class="container position-relative" style="z-index: 1;">
        <h1 class="display-5 fw-bold mb-3">
            <i class="bi bi-person-circle me-2"></i>Profile
        </h1>
        <p class="lead">Tentang Ramadhan Berkah dan Tim Kami</p>
    </div>
</section>

{{-- Profile Section --}}
<section class="py-5">
    <div class="container">
        {{-- Tentang Website --}}
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="card card-custom">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center mb-4 mb-md-0">
                                <div class="rounded-circle mx-auto d-flex align-items-center justify-content-center" 
                                     style="width: 200px; height: 200px; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
                                    <i class="bi bi-moon-stars-fill text-white" style="font-size: 5rem;"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h2 class="fw-bold mb-3" style="color: var(--primary-color);">
                                    <i class="bi bi-info-circle me-2"></i>Tentang Ramadhan Berkah
                                </h2>
                                <p class="text-muted mb-3">
                                    <strong>Ramadhan Berkah</strong> adalah website informasi dan panduan yang dirancang untuk membantu umat Muslim 
                                    dalam menunaikan ibadah di bulan suci Ramadhan. Website ini menyediakan berbagai informasi penting 
                                    mulai dari jadwal sholat, jadwal puasa, hingga panduan amalan-amalan di bulan Ramadhan.
                                </p>
                                <p class="text-muted mb-3">
                                    Kami berkomitmen untuk menyajikan informasi yang akurat dan bermanfaat bagi seluruh umat Muslim, 
                                    terutama di Indonesia. Dengan tampilan yang responsif dan mudah digunakan, diharapkan website ini 
                                    dapat menjadi teman setia Anda dalam menjalani ibadah di bulan suci.
                                </p>
                                <div class="mt-4">
                                    <span class="badge bg-success me-2 mb-2">Jadwal Sholat</span>
                                    <span class="badge bg-success me-2 mb-2">Jadwal Puasa</span>
                                    <span class="badge bg-success me-2 mb-2">Amalan Ramadhan</span>
                                    <span class="badge bg-success me-2 mb-2">Doa-doa</span>
                                    <span class="badge bg-success me-2 mb-2">Panduan Ibadah</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Visi & Misi --}}
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <h2 class="text-center section-title">Visi & Misi</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card card-custom h-100">
                            <div class="card-body p-4">
                                <div class="text-center mb-3">
                                    <i class="bi bi-eye" style="font-size: 3rem; color: var(--gold-color);"></i>
                                </div>
                                <h4 class="card-title text-center mb-3">Visi</h4>
                                <p class="card-text text-center text-muted">
                                    Menjadi platform digital terdepan yang menyediakan informasi dan panduan lengkap 
                                    untuk menunaikan ibadah Ramadhan dengan khusyuk dan benar sesuai ajaran Islam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-custom h-100">
                            <div class="card-body p-4">
                                <div class="text-center mb-3">
                                    <i class="bi bi-bullseye" style="font-size: 3rem; color: var(--gold-color);"></i>
                                </div>
                                <h4 class="card-title text-center mb-3">Misi</h4>
                                <ul class="list-unstyled">
                                    <li class="mb-2 d-flex">
                                        <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                        <span>Menyediakan jadwal sholat dan puasa yang akurat</span>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                        <span>Memberikan panduan amalan Ramadhan yang sesuai sunnah</span>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                        <span>Membantu umat Muslim meningkatkan kualitas ibadah</span>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                        <span>Menyebarkan informasi Islami yang shahih dan bermanfaat</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tim Kami --}}
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <h2 class="text-center section-title">Creator</h2>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="card card-custom text-center">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <div class="rounded-circle mx-auto d-flex align-items-center justify-content-center"
                                         style="width: 150px; height: 150px; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
                                        <i class="bi bi-person-fill text-white" style="font-size: 4rem;"></i>
                                    </div>
                                </div>
                                <h4 class="card-title mb-1">Agus Saputra</h4>
                                <p class="text-success fw-semibold mb-3">Founder & Creator</p>
                                <hr>
                                <p class="card-text text-muted small">
                                    Pembuat dan pengembang website Ramadhan Berkah. 
                                    Berdedikasi untuk menyediakan informasi dan panduan ibadah Ramadhan yang bermanfaat bagi umat Muslim.
                                </p>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-sm btn-outline-success me-2">
                                        <i class="bi bi-envelope"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-success me-2">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-success me-2">
                                        <i class="bi bi-github"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-success">
                                        <i class="bi bi-globe"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kontak --}}
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="card card-custom">
                    <div class="card-header-custom text-center">
                        <h4 class="mb-0"><i class="bi bi-envelope-fill me-2"></i>Hubungi Kami</h4>
                    </div>
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h5 class="mb-4">Informasi Kontak</h5>
                                <div class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-geo-alt-fill text-success me-3 mt-1" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <h6 class="mb-1">Alamat</h6>
                                        <p class="text-muted mb-0">Jl. Masjid Al-Ikhlas No. 123, Jakarta Selatan, Indonesia</p>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-envelope-fill text-success me-3 mt-1" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <h6 class="mb-1">Email</h6>
                                        <p class="text-muted mb-0">info@ramadhanberkah.com</p>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-telephone-fill text-success me-3 mt-1" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <h6 class="mb-1">Telepon</h6>
                                        <p class="text-muted mb-0">+62 812 3456 7890</p>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex align-items-start">
                                    <i class="bi bi-whatsapp text-success me-3 mt-1" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <h6 class="mb-1">WhatsApp</h6>
                                        <p class="text-muted mb-0">+62 812 3456 7890</p>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="mb-3">Follow Us</h6>
                                <div>
                                    <a href="#" class="btn btn-outline-success me-2 mb-2">
                                        <i class="bi bi-facebook me-2"></i>Facebook
                                    </a>
                                    <a href="#" class="btn btn-outline-success me-2 mb-2">
                                        <i class="bi bi-instagram me-2"></i>Instagram
                                    </a>
                                    <a href="#" class="btn btn-outline-success me-2 mb-2">
                                        <i class="bi bi-twitter me-2"></i>Twitter
                                    </a>
                                    <a href="#" class="btn btn-outline-success me-2 mb-2">
                                        <i class="bi bi-youtube me-2"></i>YouTube
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mb-4">Kirim Pesan</h5>
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="nama@email.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subjek</label>
                                        <input type="text" class="form-control" id="subject" placeholder="Subjek pesan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Pesan</label>
                                        <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary-custom w-100">
                                        <i class="bi bi-send me-2"></i>Kirim Pesan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Statistik --}}
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-custom" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
                    <div class="card-body p-5">
                        <h2 class="text-center text-white mb-4">Pencapaian Kami</h2>
                        <div class="row text-center text-white">
                            <div class="col-md-3 col-6 mb-4 mb-md-0">
                                <div class="mb-2">
                                    <i class="bi bi-people-fill" style="font-size: 3rem; color: var(--gold-color);"></i>
                                </div>
                                <h3 class="fw-bold">10,000+</h3>
                                <p class="mb-0">Pengunjung</p>
                            </div>
                            <div class="col-md-3 col-6 mb-4 mb-md-0">
                                <div class="mb-2">
                                    <i class="bi bi-file-earmark-text-fill" style="font-size: 3rem; color: var(--gold-color);"></i>
                                </div>
                                <h3 class="fw-bold">50+</h3>
                                <p class="mb-0">Artikel Islami</p>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <i class="bi bi-calendar-check-fill" style="font-size: 3rem; color: var(--gold-color);"></i>
                                </div>
                                <h3 class="fw-bold">30</h3>
                                <p class="mb-0">Hari Jadwal</p>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="mb-2">
                                    <i class="bi bi-star-fill" style="font-size: 3rem; color: var(--gold-color);"></i>
                                </div>
                                <h3 class="fw-bold">100%</h3>
                                <p class="mb-0">Kepuasan</p>
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
                <h2 class="fw-bold mb-3" style="color: var(--primary-color);">
                    <i class="bi bi-heart-fill me-2" style="color: var(--gold-color);"></i>
                    Terima Kasih Telah Mengunjungi Ramadhan Berkah
                </h2>
                <p class="lead text-muted mb-4">
                    Semoga website ini dapat bermanfaat dan membantu Anda dalam menunaikan ibadah di bulan suci Ramadhan.
                    Jangan lupa untuk membagikan website ini kepada keluarga dan teman-teman Anda.
                </p>
                <div>
                    <a href="{{ route('home') }}" class="btn btn-primary-custom btn-lg me-2 mb-2">
                        <i class="bi bi-house-door me-2"></i>Kembali ke Beranda
                    </a>
                    <a href="#" class="btn btn-outline-success btn-lg mb-2">
                        <i class="bi bi-share me-2"></i>Bagikan Website
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
