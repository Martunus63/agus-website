@extends('layouts.app')

@section('title', 'Ramadhan Berkah - Selamat Datang')

@section('content')
{{-- Hero Section --}}
<section class="hero-section text-center text-white">
    <div class="container position-relative" style="z-index: 1;">
        <div class="mb-4">
            <i class="bi bi-moon-stars-fill" style="font-size: 4rem; color: var(--gold-color);"></i>
        </div>
        <h1 class="display-4 fw-bold mb-4">Selamat Datang di Bulan Suci Ramadhan</h1>
        <p class="lead mb-4">
            <span class="arabic-text">رَمَضَانُ شَهْرُ الْخَيْرِ وَالْبَرَكَةِ</span>
        </p>
        <p class="lead mb-5">
            Ramadhan adalah bulan penuh berkah, ampunan, dan pembebasan dari api neraka.
            Mari kita sambut dengan suka cita dan tingkatkan ibadah kita.
        </p>
        <a href="{{ route('amalan') }}" class="btn btn-primary-custom btn-lg">
            <i class="bi bi-book me-2"></i>Lihat Amalan Ramadhan
        </a>
    </div>
</section>

{{-- Keutamaan Ramadhan Section --}}
<section class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Keutamaan Bulan Ramadhan</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-sunrise mosque-icon"></i>
                        </div>
                        <h4 class="card-title mb-3">Bulan Diturunkannya Al-Qur'an</h4>
                        <p class="card-text">
                            Ramadhan adalah bulan yang mulia karena pada bulan ini Al-Qur'an diturunkan sebagai petunjuk bagi mankind.
                        </p>
                        <p class="arabic-text text-muted mt-3">شَهْرُ رَمَضَانَ الَّذِي أُنزِلَ فِيهِ الْقُرْآنُ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-hand-holding-heart mosque-icon"></i>
                        </div>
                        <h4 class="card-title mb-3">Bulan Penuh Berkah</h4>
                        <p class="card-text">
                            Di bulan Ramadhan pintu surga dibuka, pintu neraka ditutup, dan syetan-syetan diikat.
                            Pahala amal kebaikan dilipatgandakan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-moon-stars mosque-icon"></i>
                        </div>
                        <h4 class="card-title mb-3">Terdapat Malam Lailatul Qadar</h4>
                        <p class="card-text">
                            Malam yang lebih baik dari seribu bulan. Suatu malam yang penuh berkah dimana Al-Qur'an diturunkan.
                        </p>
                        <p class="arabic-text text-muted mt-3">لَيْلَةُ الْقَدْرِ خَيْرٌ مِّنْ أَلْفِ شَهْرٍ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Jadwal Hari Ini Section --}}
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">Jadwal Hari Ini</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-header-custom text-center">
                        <h5 class="mb-0"><i class="bi bi-clock me-2"></i>Waktu Sholat</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Subuh</span>
                                <strong>04:35</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Dzuhur</span>
                                <strong>11:55</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Ashar</span>
                                <strong>15:15</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Maghrib</span>
                                <strong>17:50</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Isya</span>
                                <strong>19:05</strong>
                            </li>
                        </ul>
                        <div class="text-center mt-3">
                            <a href="{{ route('jadwal-sholat') }}" class="btn btn-sm btn-outline-success">
                                Lihat Detail <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-header-custom text-center">
                        <h5 class="mb-0"><i class="bi bi-calendar-event me-2"></i>Jadwal Ramadhan</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <h3 class="text-success">Ramadhan 1447 H</h3>
                            <p class="text-muted">Estimasi mulai: 1 Maret 2025</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Imsak</span>
                                <strong>04:25</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Buka Puasa</span>
                                <strong>17:50</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Shalat Tarawih</span>
                                <strong>19:15</strong>
                            </li>
                        </ul>
                        <div class="text-center mt-3">
                            <a href="{{ route('jadwal-ramadhan') }}" class="btn btn-sm btn-outline-success">
                                Lihat Detail <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Doa Harian Section --}}
<section class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Doa Ramadhan</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-custom">
                    <div class="card-header-custom text-center">
                        <h5 class="mb-0">Doa Menyambut Ramadhan</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <p class="arabic-text mb-3">
                                اَللّٰهُمَّ بَلِّغْنَا رَمَضَانَ وَسَلِّمْنَا لِرَمَضَانَ وَتَسَلَّمْهُ مِنَا مُتَقَبَّلًا
                            </p>
                            <p class="text-muted fst-italic">
                                "Ya Allah, sampaikanlah kami ke bulan Ramadhan, selamatkan kami untuk Ramadhan, 
                                dan terimalah (amal ibadah kami) di bulan Ramadhan."
                            </p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <h5 class="mb-3">Doa Buka Puasa</h5>
                            <p class="arabic-text mb-3">
                                ذَهَبَ الظَّمَأُ وَابْتَلَّتِ الْعُرُوقُ وَثَبَتَ الأَجْرُ إِنْ شَاءَ اللَّهُ
                            </p>
                            <p class="text-muted fst-italic">
                                "Rasa haus telah hilang, urat-urat telah basah, dan pahala telah ditetapkan insya Allah."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Call to Action --}}
<section class="py-5" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
    <div class="container text-center text-white">
        <h2 class="fw-bold mb-4">Mari Persiapkan Diri Menyambut Ramadhan</h2>
        <p class="lead mb-4">
            Tingkatkan ibadah, perbanyak doa, dan jangan lupa persiapkan amal terbaik di bulan suci ini
        </p>
        <a href="{{ route('amalan') }}" class="btn btn-light btn-lg">
            <i class="bi bi-stars me-2"></i>Pelajari Amalan Ramadhan
        </a>
    </div>
</section>
@endsection
