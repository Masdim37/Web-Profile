<!DOCTYPE html>
<html lang="en">
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
</body>
</html>