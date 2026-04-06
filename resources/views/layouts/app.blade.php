<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ramadhan Berkah')</title>
    
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-color: #1e6f5c;
            --secondary-color: #289672;
            --accent-color: #e6d5b8;
            --gold-color: #d4af37;
            --dark-color: #2c3e50;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        
        .arabic-text {
            font-family: 'Amiri', serif;
            font-size: 1.8rem;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: white !important;
        }
        
        .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            color: white !important;
            transform: translateY(-2px);
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--gold-color), #f4d03f);
            border: none;
            color: var(--dark-color);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);
            color: var(--dark-color);
        }
        
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s;
            overflow: hidden;
        }
        
        .card-custom:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .card-header-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 20px;
        }
        
        .footer {
            background: linear-gradient(135deg, var(--dark-color), #34495e);
            color: white;
            padding: 50px 0 20px;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 50px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, var(--gold-color), #f4d03f);
            border-radius: 2px;
        }
        
        .mosque-icon {
            color: var(--gold-color);
            font-size: 2rem;
        }
    </style>
    
    @stack('styles')
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="bi bi-moon-stars-fill me-2"></i>
                Ramadhan Berkah
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jadwal-sholat') }}">Jadwal Sholat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jadwal-ramadhan') }}">Jadwal Ramadhan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('amalan') }}">Amalan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lebaran') }}">
                            <i class="bi bi-image me-1"></i>Lebaran
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h4><i class="bi bi-moon-stars-fill me-2"></i>Ramadhan Berkah</h4>
                    <p>Website informasi dan panduan untuk menunaikan ibadah di bulan suci Ramadhan.</p>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Beranda</a></li>
                        <li><a href="{{ route('jadwal-sholat') }}" class="text-white text-decoration-none">Jadwal Sholat</a></li>
                        <li><a href="{{ route('jadwal-ramadhan') }}" class="text-white text-decoration-none">Jadwal Ramadhan</a></li>
                        <li><a href="{{ route('amalan') }}" class="text-white text-decoration-none">Amalan</a></li>
                        <li><a href="{{ route('profile') }}" class="text-white text-decoration-none">Profile</a></li>
                        <li><a href="{{ route('lebaran') }}" class="text-white text-decoration-none">Lebaran</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Kontak</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-envelope me-2"></i> info@ramadhanberkah.com</li>
                        <li><i class="bi bi-phone me-2"></i> +62 812 3456 7890</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} Ramadhan Berkah. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>
