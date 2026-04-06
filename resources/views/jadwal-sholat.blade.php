@extends('layouts.app')

@section('title', 'Jadwal Sholat - Ramadhan Berkah')

@section('content')
{{-- Header --}}
<section class="hero-section text-center text-white py-5">
    <div class="container position-relative" style="z-index: 1;">
        <h1 class="display-5 fw-bold mb-3">
            <i class="bi bi-clock me-2"></i>Jadwal Sholat
        </h1>
        <p class="lead">Jadwal waktu sholat untuk membantu Anda menunaikan ibadah tepat waktu</p>
    </div>
</section>

{{-- Jadwal Sholat Section --}}
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-custom">
                    <div class="card-header-custom text-center">
                        <h3 class="mb-0">
                            <i class="bi bi-calendar-week me-2"></i>
                            Jadwal Sholat Ramadhan 1447 H
                        </h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white;">
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Subuh</th>
                                        <th>Syuruq</th>
                                        <th>Dzuhur</th>
                                        <th>Ashar</th>
                                        <th>Maghrib</th>
                                        <th>Isya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>1 Ramadhan</strong><br><small class="text-muted">1 Mar 2025</small></td>
                                        <td>04:35</td>
                                        <td>05:52</td>
                                        <td>11:55</td>
                                        <td>15:15</td>
                                        <td>17:50</td>
                                        <td>19:05</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2 Ramadhan</strong><br><small class="text-muted">2 Mar 2025</small></td>
                                        <td>04:35</td>
                                        <td>05:52</td>
                                        <td>11:55</td>
                                        <td>15:15</td>
                                        <td>17:50</td>
                                        <td>19:05</td>
                                    </tr>
                                    <tr>
                                        <td><strong>3 Ramadhan</strong><br><small class="text-muted">3 Mar 2025</small></td>
                                        <td>04:34</td>
                                        <td>05:51</td>
                                        <td>11:55</td>
                                        <td>15:15</td>
                                        <td>17:50</td>
                                        <td>19:05</td>
                                    </tr>
                                    <tr>
                                        <td><strong>4 Ramadhan</strong><br><small class="text-muted">4 Mar 2025</small></td>
                                        <td>04:34</td>
                                        <td>05:51</td>
                                        <td>11:54</td>
                                        <td>15:15</td>
                                        <td>17:50</td>
                                        <td>19:04</td>
                                    </tr>
                                    <tr>
                                        <td><strong>5 Ramadhan</strong><br><small class="text-muted">5 Mar 2025</small></td>
                                        <td>04:33</td>
                                        <td>05:50</td>
                                        <td>11:54</td>
                                        <td>15:14</td>
                                        <td>17:50</td>
                                        <td>19:04</td>
                                    </tr>
                                    <tr>
                                        <td><strong>6 Ramadhan</strong><br><small class="text-muted">6 Mar 2025</small></td>
                                        <td>04:33</td>
                                        <td>05:50</td>
                                        <td>11:54</td>
                                        <td>15:14</td>
                                        <td>17:50</td>
                                        <td>19:04</td>
                                    </tr>
                                    <tr>
                                        <td><strong>7 Ramadhan</strong><br><small class="text-muted">7 Mar 2025</small></td>
                                        <td>04:32</td>
                                        <td>05:49</td>
                                        <td>11:54</td>
                                        <td>15:14</td>
                                        <td>17:50</td>
                                        <td>19:04</td>
                                    </tr>
                                    <tr>
                                        <td><strong>8 Ramadhan</strong><br><small class="text-muted">8 Mar 2025</small></td>
                                        <td>04:32</td>
                                        <td>05:49</td>
                                        <td>11:53</td>
                                        <td>15:14</td>
                                        <td>17:50</td>
                                        <td>19:04</td>
                                    </tr>
                                    <tr>
                                        <td><strong>9 Ramadhan</strong><br><small class="text-muted">9 Mar 2025</small></td>
                                        <td>04:31</td>
                                        <td>05:48</td>
                                        <td>11:53</td>
                                        <td>15:13</td>
                                        <td>17:50</td>
                                        <td>19:03</td>
                                    </tr>
                                    <tr>
                                        <td><strong>10 Ramadhan</strong><br><small class="text-muted">10 Mar 2025</small></td>
                                        <td>04:31</td>
                                        <td>05:48</td>
                                        <td>11:53</td>
                                        <td>15:13</td>
                                        <td>17:50</td>
                                        <td>19:03</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                {{-- Informasi Tambahan --}}
                <div class="row mt-5 g-4">
                    <div class="col-md-6">
                        <div class="card card-custom h-100">
                            <div class="card-body p-4">
                                <h5 class="card-title mb-3">
                                    <i class="bi bi-info-circle text-success me-2"></i>
                                    Keterangan Waktu
                                </h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <strong>Subuh:</strong> Waktu sholat Subuh dimulai dari terbitnya fajar shadiq hingga terbit matahari
                                    </li>
                                    <li class="mb-2">
                                        <strong>Syuruq:</strong> Waktu terbit matahari (tidak boleh sholat)
                                    </li>
                                    <li class="mb-2">
                                        <strong>Dzuhur:</strong> Waktu sholat Dzuhur dimulai dari tergelincirnya matahari
                                    </li>
                                    <li class="mb-2">
                                        <strong>Ashar:</strong> Waktu sholat Ashar dimulai dari bayangan suatu benda sama panjangnya
                                    </li>
                                    <li class="mb-2">
                                        <strong>Maghrib:</strong> Waktu sholat Maghrib dimulai dari terbenamnya matahari
                                    </li>
                                    <li class="mb-2">
                                        <strong>Isya:</strong> Waktu sholat Isya dimulai dari hilangnya mega merah
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-custom h-100">
                            <div class="card-body p-4">
                                <h5 class="card-title mb-3">
                                    <i class="bi bi-lightbulb text-warning me-2"></i>
                                    Tips Tepat Waktu
                                </h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        Pasang alarm untuk waktu sholat
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        Gunakan aplikasi pengingat sholat
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        Siapkan diri 10 menit sebelum waktu sholat
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        Berjamaah di masjid untuk sholat fardhu
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                                        Perbanyak sholat sunnah di bulan Ramadhan
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Hadits tentang Waktu --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card card-custom">
                    <div class="card-body p-4 text-center">
                        <h5 class="mb-3">
                            <i class="bi bi-book text-success me-2"></i>
                            Hadits tentang Waktu Sholat
                        </h5>
                        <p class="arabic-text mb-3">
                            إِنَّ الصَّلَاةَ كَانَتْ عَلَى الْمُؤْمِنِينَ كِتَابًا مَوْقُوتًا
                        </p>
                        <p class="text-muted fst-italic">
                            "Sesungguhnya sholat itu adalah kewajiban yang ditentukan waktunya atas orang-orang yang beriman."
                        </p>
                        <p class="text-muted mt-2"><strong>QS. An-Nisa: 103</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
