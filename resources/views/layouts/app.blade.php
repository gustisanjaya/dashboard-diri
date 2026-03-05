<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Curriculum Vitae - Gusti Dwi Putra Sanjaya, IT Specialist dengan pengalaman 5+ tahun di bidang IT Infrastructure dan Web Development">
    
    <title>@yield('title', 'Gusti Dwi Putra Sanjaya - IT Specialist')</title>

    <!-- Favicon - path nya diarahkan ke folder images -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <!-- Tetap sediakan file asli untuk ukuran besar -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Professional -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            font-family: 'Inter', Arial, Calibri, sans-serif;
        }
        
        body {
            background-color: #f8fafc;
            color: #1e293b;
            line-height: 1.6;
            padding-top: 70px;
        }
        
        /* Container adjustments */
        .container {
            max-width: 1100px;
        }
        
        /* Footer */
        footer {
            background-color: #ffffff;
            border-top: 1px solid #e2e8f0;
            color: #64748b;
            font-size: 0.9rem;
        }
        
        /* ===== NAVBAR STYLE ===== */
        .navbar {
            background-color: #ffffff !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 0.8rem 0;
        }
        
        /* Navbar Brand dengan Logo yang Simetris */
        .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: 700;
            color: #0a1929 !important;
            letter-spacing: -0.5px;
            font-size: 1.25rem;
            padding: 0;
            margin: 0;
        }
        
        /* Logo Styling - Diperbesar dan Simetris */
        .navbar-brand .brand-logo {
            height: 45px;
            width: auto;
            margin-right: 12px;
            object-fit: contain;
            transition: transform 0.2s ease;
        }
        
        .navbar-brand:hover .brand-logo {
            transform: scale(1.05);
        }
        
        /* Teks Brand */
        .navbar-brand .brand-text {
            display: inline-block;
            line-height: 1.2;
            font-size: 1.3rem;
            font-weight: 700;
            background: linear-gradient(135deg, #0a1929 0%, #2563eb 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Untuk mobile - ukuran lebih kecil */
        @media (max-width: 768px) {
            .navbar-brand .brand-logo {
                height: 35px;
                margin-right: 8px;
            }
            
            .navbar-brand .brand-text {
                font-size: 1.1rem;
            }
        }
        
        /* Navbar Links */
        .nav-link {
            color: #475569 !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: color 0.3s;
            font-size: 0.95rem;
            position: relative;
            padding: 0.5rem 0 !important;
        }
        
        .nav-link:hover {
            color: #2563eb !important;
        }
        
        .nav-link.active {
            color: #2563eb !important;
            font-weight: 600;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: #2563eb;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }
        
        /* Navbar Toggler */
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        /* Print styles */
        @media print {
            body {
                padding-top: 0;
                background-color: white;
            }
            
            .navbar, footer, .btn, .no-print {
                display: none !important;
            }
            
            .container {
                max-width: 100%;
                padding: 0.5in;
            }
            
            a {
                text-decoration: none !important;
                color: black !important;
            }
            
            .profile-header, .cv-section {
                box-shadow: none;
                border: 1px solid #ddd;
            }
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Navigation Profesional -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" 
                     alt="Logo" 
                     class="brand-logo">
                <span class="brand-text">CURRICULUM VITAE</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="navbar-nav">
                    <a class="nav-link" href="#ringkasan">Ringkasan</a>
                    <a class="nav-link" href="#pengalaman">Pengalaman</a>
                    <a class="nav-link" href="#keahlian">Keahlian</a>
                    <a class="nav-link" href="#pendidikan">Pendidikan</a>
                    <a class="nav-link" href="#kontak">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer Profesional -->
    <footer class="text-center py-4">
        <div class="container">
            <p class="mb-0">© {{ date('Y') }} Gusti Dwi Putra Sanjaya. All rights reserved.</p>
            <p class="mb-0 small text-muted">Curriculum Vitae - IT Specialist & Web Developer</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script untuk active navbar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Active Navbar Script
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            if (sections.length > 0 && navLinks.length > 0) {
                window.addEventListener('scroll', function() {
                    let current = '';
                    const scrollPosition = window.scrollY + 100;
                    
                    sections.forEach(section => {
                        const sectionTop = section.offsetTop;
                        const sectionBottom = sectionTop + section.clientHeight;
                        
                        if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                            current = section.getAttribute('id');
                        }
                    });
                    
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + current) {
                            link.classList.add('active');
                        }
                    });
                });
            }

            // Smooth scroll untuk anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>