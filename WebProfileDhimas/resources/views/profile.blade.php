<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhimas | Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Dhimas Hafizh</span></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list fs-2"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item"><a class="nav-link" href="/aboutme">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="/experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="/project">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://github.com/Masdim37"><i class="bi bi-github"></i> GitHub</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container mt-5 pt-4 mb-5">
        <div class="row align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-7 mt-4 mt-md-0">
                <p class="mb-1 fw-bold" style="color: #666;">Haiiii Haiii 👋</p>
                <h1 class="hero-title mb-3">Holaa! Selamat datang di website profil saya.</h1>
                <p class="hero-subtitle mb-4">Saya mahasiswa Informatika yang memiliki ketertarikan kuat dalam membangun sistem Backend yang tangguh, mengeksplorasi Big Data, dan Machine Learning.</p>
                <div class="d-flex gap-3">
                    <a href="/experience" class="btn btn-custom-primary text-decoration-none">My Experience</a>
                    <a href="/project" class="btn btn-custom-primary text-decoration-none">My Portofolio</a>
                    <a href="/project" class="btn btn-custom-outline text-decoration-none border">Contact Me!</a>
                </div>
            </div>
            <div class="col-md-5 text-center text-md-end">
                <img src="{{ asset('asset/foto.png') }}" alt="Foto Dhimas" class="rounded-4 shadow-sm" style="width: 250px; height: 300px; object-fit: cover;">
            </div>
        </div>
    </section>


    dhimasssss
    <section id="about" class="container my-5 pt-5">
        <h2 class="fw-bold mb-4">About Me</h2>
        <div class="terminal-window">
            <div class="terminal-header">
                <div class="terminal-buttons">
                    <span class="btn-red"></span>
                    <span class="btn-yellow"></span>
                    <span class="btn-green"></span>
                </div>
                <div class="ms-3" style="font-size: 0.8rem; color: #999;">bash - dhimas@dev</div>
            </div>
            <div class="terminal-body">
                <div><span class="prompt-text">root@dhimas:~/tentang_saya $</span> <span class="command-text">./tentang</span></div>
                <br>
                <div>Halo 👋, saya <strong>{{ $data['profile']['name'] }}</strong>.</div>
                <br>
                <div>Saya mempelajari teknologi bukan sekadar untuk membuat sistem berjalan, tetapi untuk memahami bagaimana arsitektur data dan jaringan bekerja.</div>
                <br>
                <div>Ketertarikan saya pada <strong>Backend Development, Big Data, dan Machine Learning</strong> berangkat dari rasa ingin tahu yang sederhana, yang perlahan berkembang menjadi keinginan untuk membangun infrastruktur yang kuat dan efisien.</div>
                <br>
                <div>Saat ini saya sedang menempuh studi S1 Teknik Informatika dengan IPK 3.96/4.00, serta memiliki sertifikasi <em>Microsoft Azure AI Fundamentals</em>. Bagi saya, setiap project (seperti menjadi Asisten Praktikum atau IT Support) adalah proses belajar tentang logika, solusi, dan kolaborasi tim.</div>
                <br>
                <div style="color: #61dafb;">> Always learning, always building.</div>
                <br>
                <div><span class="prompt-text">root@dhimas:~/tentang_saya $</span> <span class="command-text cursor-blink">_</span></div>
            </div>
        </div>
    </section>

    <section id="experience" class="container my-5 pt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0">Pengalaman & Proyek Pilihan</h2>
            <div class="d-none d-md-block text-muted small">Geser untuk melihat <i class="bi bi-arrow-right"></i></div>
        </div>
        
        <div class="horizontal-scroll">
            
            <div class="card-porto p-4">
                <p class="text-muted small mb-1">01 &bull; Asisten Praktikum</p>
                <h5 class="fw-bold">Struktur Data, Jarkom & Alpro</h5>
                <p class="text-primary small mb-3">Telkom University Purwokerto</p>
                <p class="small text-secondary" style="text-align: justify;">
                    Membimbing mahasiswa dalam memahami implementasi konsep Struktur Data, konfigurasi topologi jaringan komputer menggunakan Cisco, dan proses debugging algoritma pemrograman menggunakan bahasa C++/Java/Python.
                </p>
            </div>

            <div class="card-porto p-4">
                <p class="text-muted small mb-1">02 &bull; Organisasi</p>
                <h5 class="fw-bold">Sekretaris Divisi TI</h5>
                <p class="text-primary small mb-3">Sircle Research & Development</p>
                <p class="small text-secondary" style="text-align: justify;">
                    Mengelola dan menyusun dokumentasi administrasi divisi, serta mengkoordinasikan komunikasi internal dan eksternal divisi untuk memastikan kelancaran riset dan eksekusi program kerja.
                </p>
            </div>

            <div class="card-porto p-4">
                <p class="text-muted small mb-1">03 &bull; Pengalaman Kerja</p>
                <h5 class="fw-bold">Junior IT Support</h5>
                <p class="text-primary small mb-3">PT Pralon Karawang</p>
                <p class="small text-secondary" style="text-align: justify;">
                    Mengelola dan memelihara jaringan komputer perusahaan (LAN/WAN) agar konektivitas stabil. Memberikan dukungan teknis diagnosis perangkat keras serta perangkat lunak bagi operasional harian.
                </p>
            </div>

            <div class="card-porto p-4">
                <p class="text-muted small mb-1">04 &bull; Sertifikasi Global</p>
                <h5 class="fw-bold">Azure AI Fundamentals (AI-900)</h5>
                <p class="text-primary small mb-3">Microsoft</p>
                <p class="small text-secondary" style="text-align: justify;">
                    Sertifikasi global dengan skor 929/1000 yang memvalidasi pengetahuan fundamental mengenai konsep Machine Learning, Computer Vision, dan Natural Language Processing (NLP) di platform Microsoft Azure.
                </p>
            </div>

        </div>
    </section>

    <footer class="text-center mt-5">
        <div class="container">
            <p class="mb-1">&copy; {{ date('Y') }} - {{ $data['profile']['name'] }}</p>
            <p class="small">Dibuat dengan Laravel, Bootstrap, dan <i class="bi bi-heart-fill text-danger"></i></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        @keyframes blink { 0% { opacity: 1; } 50% { opacity: 0; } 100% { opacity: 1; } }
        .cursor-blink { animation: blink 1s infinite; }
    </style>
</body>
</html>