!<!DOCTYPE html>
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
            <a class="navbar-brand fw-bold" href="#">MDHF</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list fs-2"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3 text-center">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="/aboutme">About Me</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/project">Project</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/contact">Contact Me</a></li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="https://github.com/Masdim37" target="_blank">
                            <i class="bi bi-github"></i> GitHub
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="about" class="container">
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
                <div>Halo 👋, saya <strong>Muhammad Dhimas Hafizh Fathurrahman</strong>.</div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>