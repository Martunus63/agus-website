@extends('layouts.app')

@section('title', 'Amalan Ramadhan - Ramadhan Berkah')

@section('content')
{{-- Header --}}
<section class="hero-section text-center text-white py-5">
    <div class="container position-relative" style="z-index: 1;">
        <h1 class="display-5 fw-bold mb-3">
            <i class="bi bi-stars me-2"></i>Amalan di Bulan Ramadhan
        </h1>
        <p class="lead">Panduan amalan-amalan sunnah yang dapat dikerjakan di bulan suci Ramadhan</p>
    </div>
</section>

{{-- Amalan Utama Section --}}
<section class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Amalan Utama Ramadhan</h2>
        <div class="row g-4">
            {{-- Shalat Tarawih --}}
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <i class="bi bi-moon-stars-fill" style="font-size: 3rem; color: var(--gold-color);"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">Shalat Tarawih</h4>
                        <p class="card-text">
                            Shalat tarawih adalah shalat sunnah yang khusus dikerjakan di malam hari selama bulan Ramadhan.
                        </p>
                        <hr>
                        <h6 class="mb-2"><strong>Jumlah Rakaat:</strong></h6>
                        <ul class="mb-3">
                            <li>8 rakaat + 3 rakaat witir (paling umum)</li>
                            <li>20 rakaat + 3 rakaat witir</li>
                        </ul>
                        <h6 class="mb-2"><strong>Waktu:</strong></h6>
                        <p class="mb-3">Setelah shalat Isya hingga sebelum Subuh</p>
                        <div class="text-center">
                            <p class="arabic-text text-muted" style="font-size: 1.3rem;">
                                صَلُّوْا كَمَا رَأَيْتُمُوْنِيْ أُصَلِّيْ
                            </p>
                            <small class="text-muted">"Shalatlah kalian sebagaimana kalian melihat aku shalat." (HR. Bukhari)</small>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tadarus Al-Qur'an --}}
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <i class="bi bi-book-half" style="font-size: 3rem; color: var(--gold-color);"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">Tadarus Al-Qur'an</h4>
                        <p class="card-text">
                            Membaca, mempelajari, dan mentadabburi Al-Qur'an di bulan Ramadhan sangat dianjurkan.
                        </p>
                        <hr>
                        <h6 class="mb-2"><strong>Target:</strong></h6>
                        <ul class="mb-3">
                            <li>1 juz per hari (khatam 1 kali)</li>
                            <li>2 juz per hari (khatam 2 kali)</li>
                            <li>Sesuaikan dengan kemampuan</li>
                        </ul>
                        <h6 class="mb-2"><strong>Keutamaan:</strong></h6>
                        <p class="mb-3">Pahala dilipatgandakan di bulan Ramadhan</p>
                        <div class="text-center">
                            <p class="arabic-text text-muted" style="font-size: 1.3rem;">
                                اقْرَأُوا الْقُرْآنَ فَإِنَّهُ يَأْتِي يَوْمَ الْقِيَامَةِ شَفِيعًا
                            </p>
                            <small class="text-muted">"Bacalah Al-Qur'an, karena ia akan datang sebagai pemberi syafa'at." (HR. Muslim)</small>
                        </div>
                    </div>
                </div>
            </div>

            {{-- I'tikaf --}}
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <i class="bi bi-house-door-fill" style="font-size: 3rem; color: var(--gold-color);"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">I'tikaf</h4>
                        <p class="card-text">
                            berdiam diri di masjid untuk beribadah kepada Allah, terutama di 10 malam terakhir.
                        </p>
                        <hr>
                        <h6 class="mb-2"><strong>Waktu Utama:</strong></h6>
                        <ul class="mb-3">
                            <li>10 malam terakhir Ramadhan</li>
                            <li>Mulai dari malam tanggal 20 Ramadhan</li>
                        </ul>
                        <h6 class="mb-2"><strong>Amalan saat I'tikaf:</strong></h6>
                        <ul class="mb-3">
                            <li>Shalat sunnah</li>
                            <li>Dzikir dan doa</li>
                            <li>Membaca Al-Qur'an</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Zakat Fitrah --}}
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <i class="bi bi-hand-holding-heart" style="font-size: 3rem; color: var(--gold-color);"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">Zakat Fitrah</h4>
                        <p class="card-text">
                            Zakat yang wajib dikeluarkan di bulan Ramadhan sebelum shalat Idul Fitri.
                        </p>
                        <hr>
                        <h6 class="mb-2"><strong>Jumlah:</strong></h6>
                        <ul class="mb-3">
                            <li>2.5 kg / 3.5 liter beras</li>
                            <li>Atau setara dengan Rp 35.000 - 45.000</li>
                        </ul>
                        <h6 class="mb-2"><strong>Waktu:</strong></h6>
                        <p class="mb-3">Dari awal Ramadhan hingga sebelum shalat Idul Fitri</p>
                    </div>
                </div>
            </div>

            {{-- Lailatul Qadar --}}
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <i class="bi bi-star-fill" style="font-size: 3rem; color: var(--gold-color);"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">Malam Lailatul Qadar</h4>
                        <p class="card-text">
                            Malam yang lebih baik dari 1000 bulan, terjadi di 10 malam terakhir Ramadhan.
                        </p>
                        <hr>
                        <h6 class="mb-2"><strong>Tanda-tanda:</strong></h6>
                        <ul class="mb-3">
                            <li>Malam ke-ganjil (21, 23, 25, 27, 29)</li>
                            <li>Cuaca sejuk, tidak panas/dingin</li>
                            <li>Matahari terbit tanpa sinar menyilaukan</li>
                        </ul>
                        <div class="text-center">
                            <p class="arabic-text text-muted" style="font-size: 1.3rem;">
                                لَيْلَةُ الْقَدْرِ خَيْرٌ مِّنْ أَلْفِ شَهْرٍ
                            </p>
                            <small class="text-muted">"Malam kemuliaan itu lebih baik dari seribu bulan." (QS. Al-Qadr: 3)</small>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Doa Lailatul Qadar --}}
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <i class="bi bi-chat-heart-fill" style="font-size: 3rem; color: var(--gold-color);"></i>
                        </div>
                        <h4 class="card-title text-center mb-3">Doa Lailatul Qadar</h4>
                        <p class="card-text">
                            Doa yang diajarkan Rasulullah SAW untuk malam Lailatul Qadar.
                        </p>
                        <hr>
                        <div class="text-center p-3" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef); border-radius: 10px;">
                            <p class="arabic-text mb-3">
                                اَللّٰهُمَّ إِنَّكَ عَفُوٌّ تُحِبُّ الْعَفْوَ فَاعْفُ عَنِّيْ
                            </p>
                            <p class="text-muted fst-italic mb-2">
                                "Ya Allah, sesungguhnya Engkau Maha Pemaaf, menyukai permintaan maaf, maka maafkanlah aku."
                            </p>
                            <small class="text-muted"><strong>HR. Tirmidzi</strong></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Amalan Harian Section --}}
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">Amalan Harian di Bulan Ramadhan</h2>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card card-custom">
                    <div class="card-header-custom text-center">
                        <h4 class="mb-0"><i class="bi bi-sunrise me-2"></i>Amalan Pagi Hari</h4>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Bangun untuk Sahur</strong>
                                    <p class="mb-0 text-muted">Meski hanya sedikit, usahakan untuk sahur</p>
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Niat Puasa</strong>
                                    <p class="mb-0 text-muted">Melafalkan niat puasa Ramadhan</p>
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Shalat Subuh Berjamaah</strong>
                                    <p class="mb-0 text-muted">Di masjid (laki-laki) atau di rumah</p>
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Dzikir Pagi</strong>
                                    <p class="mb-0 text-muted">Baca dzikir dan wirid pagi hari</p>
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Membaca Al-Qur'an</strong>
                                    <p class="mb-0 text-muted">Tadarus minimal 1 juz</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-custom">
                    <div class="card-header-custom text-center">
                        <h4 class="mb-0"><i class="bi bi-moon-stars me-2"></i>Amalan Sore & Malam</h4>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Berdoa saat Berbuka</strong>
                                    <p class="mb-0 text-muted">Baca doa berbuka puasa</p>
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Shalat Maghrib Berjamaah</strong>
                                    <p class="mb-0 text-muted">Di masjid atau bersama keluarga</p>
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Shalat Isya & Tarawih</strong>
                                    <p class="mb-0 text-muted">Berjamaah di masjid</p>
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Tadarus Al-Qur'an</strong>
                                    <p class="mb-0 text-muted">Lanjutkan baca Al-Qur'an</p>
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="bi bi-check-circle-fill text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Dzikir & Doa Malam</strong>
                                    <p class="mb-0 text-muted">Perbanyak dzikir dan berdoa</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Checklist Amalan --}}
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card card-custom">
                    <div class="card-header-custom text-center">
                        <h4 class="mb-0"><i class="bi bi-list-check me-2"></i>Checklist Amalan Harian</h4>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-center text-muted mb-4">
                            Gunakan checklist ini untuk memantau amalan harian Anda di bulan Ramadhan
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-3"><i class="bi bi-sunrise text-warning me-2"></i>Siang Hari</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="sahur">
                                    <label class="form-check-label" for="sahur">Sahur</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="shubuh">
                                    <label class="form-check-label" for="shubuh">Shalat Subuh</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="dzuhur">
                                    <label class="form-check-label" for="dzuhur">Shalat Dzuhur</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="ashar">
                                    <label class="form-check-label" for="ashar">Shalat Ashar</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="quran-siang">
                                    <label class="form-check-label" for="quran-siang">Baca Al-Qur'an</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="mb-3"><i class="bi bi-moon-stars text-warning me-2"></i>Malam Hari</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="maghrib">
                                    <label class="form-check-label" for="maghrib">Shalat Maghrib</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="isya">
                                    <label class="form-check-label" for="isya">Shalat Isya</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="tarawih">
                                    <label class="form-check-label" for="tarawih">Shalat Tarawih</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="quran-malam">
                                    <label class="form-check-label" for="quran-malam">Tadarus Al-Qur'an</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="doaqunut">
                                    <label class="form-check-label" for="doaqunut">Dzikir & Doa</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Hadits tentang Amalan --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card card-custom">
                    <div class="card-body p-4 text-center">
                        <h5 class="mb-3">
                            <i class="bi bi-book text-success me-2"></i>
                            Hadits tentang Amalan Ramadhan
                        </h5>
                        <p class="arabic-text mb-3">
                            إِذَا جَاءَ رَمَضَانُ فُتِّحَتْ أَبْوَابُ الْجَنَّةِ وَغُلِّقَتْ أَبْوَابُ النَّارِ وَصُفِّدَتِ الشَّيَاطِينُ
                        </p>
                        <p class="text-muted fst-italic">
                            "Apabila Ramadhan datang, dibukalah pintu-pintu surga, ditutuplah pintu-pintu neraka, 
                            dan syetan-syetan pun dibelenggu."
                        </p>
                        <p class="text-muted mt-2"><strong>HR. Bukhari dan Muslim</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
