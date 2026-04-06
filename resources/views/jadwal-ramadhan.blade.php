@extends('layouts.app')

@section('title', 'Jadwal Ramadhan - Ramadhan Berkah')

@section('content')
{{-- Header --}}
<section class="hero-section text-center text-white py-5">
    <div class="container position-relative" style="z-index: 1;">
        <h1 class="display-5 fw-bold mb-3">
            <i class="bi bi-calendar-event me-2"></i>Jadwal Ramadhan 1447 H
        </h1>
        <p class="lead">Jadwal imsak, puasa, dan buka puasa untuk membantu Anda menjalankan ibadah puasa</p>
    </div>
</section>

{{-- Jadwal Ramadhan Section --}}
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-custom">
                    <div class="card-header-custom text-center">
                        <h3 class="mb-0">
                            <i class="bi bi-moon-stars-fill me-2"></i>
                            Jadwal Puasa Ramadhan 1447 H
                        </h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Imsak</th>
                                        <th>Subuh</th>
                                        <th>Buka Puasa</th>
                                        <th>Tarawih</th>
                                        <th>Hari</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>1 Ramadhan</strong><br><small class="text-muted">1 Mar 2025</small></td>
                                        <td>04:25</td>
                                        <td>04:35</td>
                                        <td>17:50</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Sabtu</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>2 Ramadhan</strong><br><small class="text-muted">2 Mar 2025</small></td>
                                        <td>04:25</td>
                                        <td>04:35</td>
                                        <td>17:50</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Minggu</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>3 Ramadhan</strong><br><small class="text-muted">3 Mar 2025</small></td>
                                        <td>04:24</td>
                                        <td>04:34</td>
                                        <td>17:50</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Senin</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>4 Ramadhan</strong><br><small class="text-muted">4 Mar 2025</small></td>
                                        <td>04:24</td>
                                        <td>04:34</td>
                                        <td>17:50</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Selasa</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>5 Ramadhan</strong><br><small class="text-muted">5 Mar 2025</small></td>
                                        <td>04:23</td>
                                        <td>04:33</td>
                                        <td>17:50</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Rabu</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>6 Ramadhan</strong><br><small class="text-muted">6 Mar 2025</small></td>
                                        <td>04:23</td>
                                        <td>04:33</td>
                                        <td>17:50</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Kamis</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>7 Ramadhan</strong><br><small class="text-muted">7 Mar 2025</small></td>
                                        <td>04:22</td>
                                        <td>04:32</td>
                                        <td>17:50</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Jumat</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>8 Ramadhan</strong><br><small class="text-muted">8 Mar 2025</small></td>
                                        <td>04:22</td>
                                        <td>04:32</td>
                                        <td>17:50</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Sabtu</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>9 Ramadhan</strong><br><small class="text-muted">9 Mar 2025</small></td>
                                        <td>04:21</td>
                                        <td>04:31</td>
                                        <td>17:50</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Minggu</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>10 Ramadhan</strong><br><small class="text-muted">10 Mar 2025</small></td>
                                        <td>04:21</td>
                                        <td>04:31</td>
                                        <td>17:50</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Senin</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>11 Ramadhan</strong><br><small class="text-muted">11 Mar 2025</small></td>
                                        <td>04:20</td>
                                        <td>04:30</td>
                                        <td>17:51</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Selasa</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>12 Ramadhan</strong><br><small class="text-muted">12 Mar 2025</small></td>
                                        <td>04:20</td>
                                        <td>04:30</td>
                                        <td>17:51</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Rabu</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>13 Ramadhan</strong><br><small class="text-muted">13 Mar 2025</small></td>
                                        <td>04:19</td>
                                        <td>04:29</td>
                                        <td>17:51</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Kamis</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>14 Ramadhan</strong><br><small class="text-muted">14 Mar 2025</small></td>
                                        <td>04:19</td>
                                        <td>04:29</td>
                                        <td>17:51</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Jumat</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>15 Ramadhan</strong><br><small class="text-muted">15 Mar 2025</small></td>
                                        <td>04:18</td>
                                        <td>04:28</td>
                                        <td>17:51</td>
                                        <td>19:15</td>
                                        <td><span class="badge bg-primary">Sabtu</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <p class="text-muted">
                        <i class="bi bi-info-circle me-2"></i>
                        Jadwal ini adalah estimasi untuk wilayah Jakarta dan sekitarnya. 
                        Untuk wilayah lain, silakan sesuaikan dengan jadwal setempat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Niat Puasa Section --}}
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">Niat dan Doa</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card card-custom h-100">
                    <div class="card-header-custom text-center">
                        <h5 class="mb-0">Niat Puasa Ramadhan</h5>
                    </div>
                    <div class="card-body p-4 text-center">
                        <p class="arabic-text mb-3">
                            نَوَيْتُ صَوْمَ غَدٍ عَنْ أَدَاءِ فَرْضِ شَهْرِ رَمَضَانَ هذِهِ السَّنَةِ ِللهِ تَعَالَى
                        </p>
                        <p class="text-muted fst-italic">
                            "Saya niat puasa besok di bulan Ramadhan tahun ini karena Allah Ta'ala."
                        </p>
                        <hr>
                        <p class="text-muted small">
                            <strong>Catatan:</strong> Niat dapat dilafalkan pada malam hari atau sebelum imsak.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-custom h-100">
                    <div class="card-header-custom text-center">
                        <h5 class="mb-0">Doa Buka Puasa</h5>
                    </div>
                    <div class="card-body p-4 text-center">
                        <p class="arabic-text mb-3">
                            اَللّٰهُمَّ لَكَ صُمْتُ وَعَلَى رِزْقِكَ أَفْطَرْتُ
                        </p>
                        <p class="text-muted fst-italic">
                            "Ya Allah, karena-Mu aku berpuasa dan dengan rezeki-Mu aku berbuka."
                        </p>
                        <hr>
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
</section>

{{-- Tips Puasa Section --}}
<section class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Tips Menjalani Puasa</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <i class="bi bi-cup-hot" style="font-size: 3rem; color: var(--gold-color);"></i>
                        </div>
                        <h5 class="card-title mb-3">Sahur yang Bergizi</h5>
                        <p class="card-text">
                            Makan sahur dengan makanan bergizi dan cukup cairan. 
                            Kurangi makanan yang terlalu asin atau pedas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <i class="bi bi-droplet" style="font-size: 3rem; color: var(--gold-color);"></i>
                        </div>
                        <h5 class="card-title mb-3">Cukup Hidrasi</h5>
                        <p class="card-text">
                            Minum minimal 8 gelas air dari buka puasa hingga sahur. 
                            Hindari minuman berkafein berlebihan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom h-100">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <i class="bi bi-book" style="font-size: 3rem; color: var(--gold-color);"></i>
                        </div>
                        <h5 class="card-title mb-3">Tetap Produktif</h5>
                        <p class="card-text">
                            Tetap beraktivitas seperti biasa. Ramadhan bukan halangan untuk 
                            tetap produktif dan berkarya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Keutamaan Puasa --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card card-custom">
                    <div class="card-body p-4 text-center">
                        <h5 class="mb-3">
                            <i class="bi bi-star-fill text-warning me-2"></i>
                            Keutamaan Puasa Ramadhan
                        </h5>
                        <p class="arabic-text mb-3">
                            مَنْ صَامَ رَمَضَانَ إِيمَانًا وَاحْتِسَابًا غُفِرَ لَهُ مَا تَقَدَّمَ مِنْ ذَنْبِهِ
                        </p>
                        <p class="text-muted fst-italic">
                            "Barangsiapa berpuasa Ramadhan karena iman dan mengharapkan pahala, 
                            niscaya akan diampuni dosa-dosanya yang telah lalu."
                        </p>
                        <p class="text-muted mt-2"><strong>HR. Bukhari dan Muslim</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
