<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Dhimas Hafizh Fathurrahman | Portfolio</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #fafafa; scroll-behavior: smooth; }
        .navbar-custom { background-color: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px); border-bottom: 1px solid #eaeaea; }
        .hero-title { font-size: clamp(2.5rem, 8vw, 4rem); font-weight: 800; letter-spacing: -2px; line-height: 1; }
        section { padding: 100px 0; }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarNav">

    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">MDHF</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list fs-2"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3 text-center">
                     <li class="nav-item"><a class="nav-link fw-bold" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/aboutme">About Me</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/project">Project</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/contact">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="d-flex align-items-center" style="min-height: 90vh;">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-md-row text-center text-md-start">
                <div class="col-md-8">
                    <h1 class="hero-title mb-4">Halo! Saya</h1>
                    <h1 class="hero-title mb-4">Muhammad Dhimas Hafizh Fathurrahman</h1>
                    <p class="lead text-secondary mb-4">Mahasiswa S1 Teknik Informatika di Telkom University Purwokerto dengan minat pada pengembangan backend, big data, dan machine learning, serta memiliki dasar yang kuat di bidang jaringan komputer. Berpengalaman sebagai Asisten Laboratorium dan Sekretaris Divisi TI Sircle RnD, dengan kemampuan dalam Python, Golang, dan Java untuk mengembangkan solusi sistem yang efisien dan skalabel.</p>
                    <div class="d-flex gap-2 justify-content-center justify-content-md-start">
                        <a href="/experience" class="btn btn-dark rounded-pill px-4">My Experience</a>
                        <a href="/project" class="btn btn-dark rounded-pill px-4">My Project</a>
                        <a href="/contact" class="btn btn-outline-dark rounded-pill px-4">Contact Me</a>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <img src="{{ asset('asset/foto.png') }}" class="rounded-circle shadow-lg border border-5 border-black" style="width: 300px; height: 300px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    @include('about')

    @include('experience')

    @include('project')

    @include('contact')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>