<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me | Muhammad Dhimas Hafizh Fathurrahman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&family=Inter:wght@300;400;600;800&display=swap"
        rel="stylesheet">

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
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/project">Project</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold active" href="/contact">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="contact" class="d-flex align-items-center mt-2 mb-5" style="min-height: 90vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold" style="font-size: 2.5rem; letter-spacing: -1px;">Contact Me!</h2>
                        <p class="text-secondary mt-3">Anda memiliki pertanyaan, ide proyek, atau ingin kolaborasi?</p>
                        <p class="text-secondary">Jangan ragu untuk menghubungi saya melalui formulir di bawah ini atau kontak langsung.</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm rounded-4 h-100 p-4"
                                style="background-color: #ffffff; border: 1px solid #eaeaea;">
                                <h5 class="fw-bold mb-4">Informasi Kontak</h5>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-3">
                                        <img src="{{ asset('asset/email.png') }}" alt="Email"
                                            style="width: 25px; height: 25px; object-fit: contain;">
                                    </div>
                                    <div>
                                        <p class="mb-0 text-muted small fw-semibold">Email</p>
                                        <a href="mailto:dhimas.hfzh375@gmail.com"
                                            class="text-dark fw-bold text-decoration-none"
                                            style="font-size: 0.95rem;">dhimas.hfzh375@gmail.com</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-3">
                                        <img src="{{ asset('asset/Location.png') }}" alt="Lokasi"
                                            style="width: 25px; height: 25px; object-fit: contain;">
                                    </div>
                                    <div>
                                        <p class="mb-0 text-muted small fw-semibold">Phone Number</p>
                                        <a href="https://wa.me/6281290071606"
                                            class="text-dark fw-bold text-decoration-none"
                                            style="font-size: 0.95rem;">+6281290071606</a>
                                    </div>
                                </div>

                                <hr class="my-4 text-muted">

                                <h6 class="fw-bold mb-3 text-muted">Sosial Media</h6>
                                <div class="d-flex gap-3">
                                    <a href="https://github.com/Masdim37" target="_blank"
                                        class="transition hover-scale">
                                        <img src="{{ asset('asset/github.png') }}" alt="GitHub"
                                            style="width: 30px; height: 30px; border-radius: 50%;">
                                    </a>
                                    <a href="https://www.linkedin.com/in/muhammad-dhimas-hafizh-fathurrahman-4a7a2131b/"
                                        target="_blank" class="transition hover-scale">
                                        <img src="{{ asset('asset/LinkedIn.png') }}" alt="LinkedIn"
                                            style="width: 30px; height: 30px; border-radius: 50%;">
                                    </a>
                                    <a href="https://www.instagram.com/dhmzz._375/" target="_blank"
                                        class="transition hover-scale">
                                        <img src="{{ asset('asset/instagram.png') }}" alt="Instagram"
                                            style="width: 30px; height: 30px; border-radius: 50%;">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5"
                                style="background-color: #ffffff; border: 1px solid #eaeaea;">
                                <form id="contactForm">
                                    <div class="mb-3">
                                        <label for="name" class="form-label fw-semibold text-muted small">Nama
                                            Lengkap</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control bg-light border-0 py-2 px-3 rounded-3"
                                            placeholder="Masukkan nama Anda" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="message"
                                            class="form-label fw-semibold text-muted small">Pesan</label>
                                        <textarea name="message" id="message"
                                            class="form-control bg-light border-0 py-2 px-3 rounded-3" rows="5"
                                            placeholder="Tulis pesan..." required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-dark w-100 rounded-pill py-2 fw-bold"
                                        style="transition: 0.3s;">
                                        Kirim Pesan Via Whatsapp</i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById("contactForm").addEventListener("submit", function (e) {
            e.preventDefault();

            // ambil data input
            let name = document.getElementById("name").value;
            let message = document.getElementById("message").value;

            // format pesan
            let text = encodeURIComponent(
                `Halo, saya ${name}
${message}`
            );

            // nomor WA (pakai format 62)
            let phone = "6281290071606";

            // redirect ke WhatsApp
            let url = `https://wa.me/${phone}?text=${text}`;
            window.open(url, "_blank");
        });
    </script>
</body>

</html>