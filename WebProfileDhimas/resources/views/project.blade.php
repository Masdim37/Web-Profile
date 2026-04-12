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
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="/project">Project</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/contact">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="Project" class="py-3">
    <div class="container">
        <h2 class="fw-bold mb-5 text-center">Project</h2>

        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-6">
                <div class="card experience-card h-100 overflow-hidden">
                    <img src="{{ asset('asset/jalan2kuy.id.png') }}" class="card-img-top" alt="jalan2kuy" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-1">Jalan2kuy.id</h5>
                        <p class="text-secondary small mb-0 lh-lg" style="text-align: justify;">
                            Website rekomendasi wisata dan event di tiap destinasi wisata yang ada di Indonesia, dengan tampilan UI yang friendly dan responsif. Menggunakan tech stack antara lain Laravel, MySQL, PHP, CSS, Bootstrap. 
                            Website ini memiliki fitur antara lain melakukan login, CRUD destinasi dan informasi akun, search destinasi wisata, lihat detail destinasi wisata, lihat detail event yang ada pada destinasi wisata, serta lihat galeri destinasi wisata.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="card experience-card h-100 overflow-hidden">
                    <img src="{{ asset('asset/tickus.png') }}" class="card-img-top" alt="tickus" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-1">TickUs</h5>
                        <p class="text-secondary small mb-0 lh-lg" style="text-align: justify;">
                            Aplikasi web pemesanan tiket bioskop terintegrasi yang memungkinkan pengguna melakukan registrasi, melihat jadwal film dan bioskop, memilih kursi, hingga melakukan transaksi menggunakan dompet digital internal (TWallet) serta mencetak tiket. 
                            Dibangun dengan arsitektur MVC (Model-View-Controller) menggunakan Front Controller (ControllerServlet) untuk routing request ke layer Action dan Service, serta integrasi database melalui DatabaseHelper.
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