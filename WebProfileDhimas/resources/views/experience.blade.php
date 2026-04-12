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
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/aboutme">About Me</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="/experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/project">Project</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/contact">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="experience" class="py-3">
    <div class="container">
        <h2 class="fw-bold mb-5 text-center">Experiences</h2>
        
        <div class="d-flex align-items-center gap-2 mb-4">
            <i class="bi bi-briefcase-fill fs-4"></i>
            <h4 class="fw-bold mb-0">Work & Lab Experience</h4>
        </div>
        
        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-4">
                <div class="card experience-card h-100 overflow-hidden">
                    <img src="{{ asset('asset/pkl.jpeg') }}" class="card-img-top" alt="pkl" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-end align-items-start mb-2">
                            <span class="badge bg-light text-dark border px-2 py-1">Januari - Maret 2022</span>
                        </div>
                        <h5 class="fw-bold mb-1">Junior IT Support</h5>
                        <p class="text-primary small fw-semibold mb-3">PT Pralon Karawang</p>
                        <p class="text-secondary small mb-0 lh-lg" style="text-align: justify;">
                            Mengelola dan memelihara jaringan komputer perusahaan, termasuk monitoring, konfigurasi, dan troubleshooting LAN/WAN untuk memastikan konektivitas stabil dan aman.
                            Memberikan dukungan teknis melalui diagnosis dan perbaikan perangkat keras serta perangkat lunak yang bermasalah, guna mendukung kelancaran operasional harian perusahaan.
                            Melakukan entri dan verifikasi data secara akurat ke dalam sistem perusahaan untuk menghasilkan laporan terstruktur dan mendukung pengambilan keputusan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card experience-card h-100 overflow-hidden">
                    <img src="{{ asset('asset/jarkom.jpeg') }}" class="card-img-top" alt="jarkom" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-end align-items-start mb-2">
                            <span class="badge bg-light text-dark border px-2 py-1">Maret 2026 - Mei 2026</span>
                        </div>
                        <h5 class="fw-bold mb-1">Asisten Praktikum Jaringan Komputer</h5>
                        <p class="text-primary small fw-semibold mb-3">Laboratorium Informatika Telkom University Purwokerto</p>
                        <p class="text-secondary small mb-0 lh-lg" style="text-align: justify;">
                            Membimbing mahasiswa dalam merancang, mengkonfigurasi, dan melakukan troubleshooting topologi jaringan (Routing, Switching, Subnetting) menggunakan simulator Cisco Packet Tracer.
                            Mendampingi praktikan selama sesi laboratorium untuk memastikan pemahaman modul praktikum serta membantu memecahkan kendala teknis jaringan secara langsung
                            Mengevaluasi hasil kerja mahasiswa dengan memeriksa dan menilai laporan praktikum serta ujian praktik secara objektif berdasarkan rubrik.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card experience-card h-100 overflow-hidden">
                    <img src="{{ asset('asset/alpro.jpeg') }}" class="card-img-top" alt="alpro" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-end align-items-start mb-2">
                            <span class="badge bg-light text-dark border px-2 py-1">Maret 2026 - Mei 2026</span>
                        </div>
                        <h5 class="fw-bold mb-1">Asisten Praktikum Algoritma Pemrograman</h5>
                        <p class="text-primary small fw-semibold mb-3">Laboratorium Informatika Telkom University Purwokerto</p>
                        <p class="text-secondary small mb-0 lh-lg" style="text-align: justify;">
                            Mengajarkan konsep dasar logika pemrograman, struktur kontrol, dan fungsi menggunakan bahasa pemrograman golang kepada mahasiswa
                            Membantu mahasiswa dalam proses penulisan kode, mendeteksi dan memperbaiki error (debugging), serta menanamkan praktik penulisan kode yang bersih dan efisien
                            Memberikan feedback konstruktif dan melakukan penilaian komprehensif terhadap tugas mingguan, jurnal praktikum, dan proyek akhir mahasiswa.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card experience-card h-100 overflow-hidden">
                    <img src="{{ asset('asset/strukdat.jpeg') }}" class="card-img-top" alt="strukdat" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-end align-items-start mb-2">
                            <span class="badge bg-light text-dark border px-2 py-1">September 2025 - Januari 2026</span>
                        </div>
                        <h5 class="fw-bold mb-1">Asisten Praktikum Struktur Data</h5>
                        <p class="text-primary small fw-semibold mb-3">Laboratorium Informatika Telkom University Purwokerto</p>
                        <p class="text-secondary small mb-0 lh-lg" style="text-align: justify;">
                            Membimbing mahasiswa dalam memahami dan mengimplementasikan konsep Struktur Data (Array, Linked List, Stack, Queue, Tree, Graph) melalui praktikum dan pemrograman
                            Membantu mahasiswa dalam debugging dan troubleshooting program implementasi Struktur Data, serta menilai tugas, laporan praktikum, dan hasil kode sesuai rubrik penilaian
                        </p>
                    </div>
                </div>
            </div>

        <div class="d-flex align-items-center gap-2 mb-4 mt-5">
            <i class="bi bi-people-fill fs-4"></i>
            <h4 class="fw-bold mb-0">Organization</h4>
        </div>

            <div class="col-md-6 col-lg-4">
                <div class="card experience-card h-100 overflow-hidden">
                    <img src="{{ asset('asset/sircle.jpeg') }}" class="card-img-top" alt="Sircle" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-end align-items-start mb-2">
                            <span class="badge bg-light text-dark border px-2 py-1">Juli 2024 - Juli 2025</span>
                        </div>
                        <h5 class="fw-bold mb-1">Sekretaris Divisi TI</h5>
                        <p class="text-primary small fw-semibold mb-3">Sircle Research & Development Telkom University Purwokerto</p>
                        <p class="text-secondary small mb-0 lh-lg" style="text-align: justify;">
                            Mengelola dan menyusun dokumentasi administrasi divisi, termasuk notulen rapat atau pertemuan, arsip program kerja, dan laporan kegiatan.
                            Membantu ketua divisi dalam merencanakan dan mengeksekusi program kerja divisi, serta memantau progres pelaksanaan kegiatan.
                            Mengkoordinasikan komunikasi internal dan eksternal divisi untuk memastikan kelancaran pelaksanaan program kerja.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card experience-card h-100 overflow-hidden">
                    <img src="{{ asset('asset/sre.jpeg') }}" class="card-img-top" alt="SRE Fest" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-end align-items-start mb-2">
                            <span class="badge bg-light text-dark border px-2 py-1">Mei - Oktober 2025</span>
                        </div>
                        <h5 class="fw-bold mb-1">Staff Logistik | SRE FEST 2025</h5>
                        <p class="text-primary small fw-semibold mb-3">SRE Telkom University Purwokerto</p>
                        <p class="text-secondary small mb-0 lh-lg" style="text-align: justify;">
                            Mengelola pendataan dan pengadaan kebutuhan perlengkapan acara dengan terstruktur.
                            Melakukan koordinasi dengan vendor dan divisi lainnya untuk memastikan ketersediaan barang sesuai jadwal acara.
                            Mengoptimalkan distribusi logistik agar proses pelaksanaan acara berjalan lancar dan tepat waktu.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card experience-card h-100 overflow-hidden">
                    <img src="{{ asset('asset/merdekahack.jpeg') }}" class="card-img-top" alt="MerdekaHack" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-end align-items-start mb-2">
                            <span class="badge bg-light text-dark border px-2 py-1">Mei - Oktober 2025</span>
                        </div>
                        <h5 class="fw-bold mb-1">Staff Acara | MerdekaHack: Ultimate CTF & Landing Page Development by Sircle</h5>
                        <p class="text-primary small fw-semibold mb-3">Sircle Research & Development Telkom University Purwokerto</p>
                        <p class="text-secondary small mb-0 lh-lg" style="text-align: justify;">
                            Mengatur jadwal dan menyusun rundown acara untuk memastikan kelancaran kegiatan kompetisi.
                            Berkoordinasi dengan tim teknis dan peserta untuk menjaga keteraturan alur acara.
                            Menjadi narahubung peserta, memberikan informasi terkait jadwal, aturan lomba, dan teknis pelaksanaan.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    .experience-card {
        transition: all 0.3s ease;
        border-radius: 20px;
        cursor: pointer;
    }
    .experience-card:hover {
        transform: translateY(-10px);
        border-color: #000;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
    .experience-card i {
        transition: transform 0.3s ease;
    }
    .experience-card:hover i {
        transform: scale(1.1);
    }
</style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>