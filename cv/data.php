<?php
header('Content-Type: application/json');

//Data CV disimpan dalam array assosiatif
$cvData = [
    "profile" => [
        "name" => "Muhammad Dhimas Hafizh Fathurrahman",
        "location" => "Kabupaten Bekasi, Jawa Barat",
        "phone" => "+6281290071606",
        "github" => "Masdim37",
        "email" => "dhimas.hfzh375@gmail.com",
        "linkedin" => "Muhammad Dhimas Hafizh Fathurrahman",
        "instagram" => "@dhmzz._375",
        "summary" => "Mahasiswa aktif S1 Teknik Informatika di Telkom University Purwokerto dengan IPK 3,95/4,00 (hingga semester 5). Berpengalaman sebagai Junior IT Support dengan keahlian dalam pemeliharaan jaringan, troubleshooting hardware/software, dan pengolahan data terstruktur. Memiliki pengalaman sebagai Asisten Praktikum pada mata kuliah Struktur Data, Jaringan Komputer, dan Algoritma Pemrograman, dengan peran membimbing mahasiswa dalam memahami konsep jaringan komputer serta implementasi algoritma pemrograman, membantu proses debugging program, serta melakukan penilaian tugas dan laporan praktikum sesuai rubrik yang ditetapkan. Aktif dalam organisasi sebagai Sekretaris Divisi TI Sircle RnD, berpengalaman dalam mengelola administrasi, komunikasi, dan koordinasi tim serta pelaksanaan program kerja. Menguasai bahasa pemrograman C++, Golang, Python, Java, serta memiliki kompetensi di bidang Computer Network, dan terbiasa menggunakan tools seperti Microsoft Office, Google Workspace, Visual Studio Code, NetBeans, dan Cisco Packet Tracer."
    ],
    "education" => [
        [
            "period" => "Sept 2023 - Present",
            "institution" => "Telkom University Purwokerto",
            "major" => "S1 Teknik Informatika, Fakultas Informatika",
            "grade" => "IPK Saat Ini: 3,95/4,00 (Hingga semester 5)"
        ],
        [
            "period" => "Juli 2020 - Mei 2023",
            "institution" => "SMK Telekomunikasi Telesandi Bekasi",
            "major" => "Teknik Komputer dan Jaringan (TKJ)",
            "grade" => "Nilai Akhir: 92,55"
        ]
    ],
    "skills" => [
        "Keterampilan Teknis: C++, Golang, Python, Java (OOP), Computer Network",
        "Keterampilan Non-Teknis: Kerjasama, Komunikasi, Pemecahan Masalah, Manajemen Waktu",
        "Software & Tools: Microsoft Office (Word, Excel, Powerpoint), Google Workspace (Docs, Sheets, Slides), Visual Studio Code (VS Code), Netbeans, Cisco Packet Tracer",
        "Bahasa: Bahasa Indonesia (Penutur), Bahasa Inggris (Menengah), Bahasa Jepang (Dasar)"
    ],
    "experience" => [
        [
            "period" => "Januari - Maret 2022",
            "title" => "Junior IT Support | PT Pralon Karawang",
            "responsibilities" => [
                "Mengelola dan memelihara jaringan komputer perusahaan, termasuk monitoring, konfigurasi, dan troubleshooting LAN/WAN untuk memastikan konektivitas stabil dan aman.",
                "Memberikan dukungan teknis melalui diagnosis dan perbaikan perangkat keras serta perangkat lunak yang bermasalah, guna mendukung kelancaran operasional harian perusahaan.",
                "Melakukan entri dan verifikasi data secara akurat ke dalam sistem perusahaan untuk menghasilkan laporan terstruktur dan mendukung pengambilan keputusan."
            ]
        ]
    ],
    "organization" => [
        [
            "period" => "Maret 2026 - Mei 2026",
            "title" => "Asisten Praktikum Jaringan Komputer",
            "institution" => "Laboratorium Informatika Telkom University Purwokerto",
            "responsibilities" => [
                "Membimbing mahasiswa dalam merancang, mengkonfigurasi, dan melakukan troubleshooting topologi jaringan (Routing, Switching, Subnetting) menggunakan simulator Cisco Packet Tracer.",
                "Mendampingi praktikan selama sesi laboratorium untuk memastikan pemahaman modul praktikum serta membantu memecahkan kendala teknis jaringan secara langsung.",
                "Mengevaluasi hasil kerja mahasiswa dengan memeriksa dan menilai laporan praktikum serta ujian praktik secara objektif berdasarkan rubrik."
            ]
        ],
        [
            "period" => "Maret 2026 - Mei 2026",
            "title" => "Asisten Praktikum Algoritma Pemrograman",
            "institution" => "Laboratorium Informatika Telkom University Purwokerto",
            "responsibilities" => [
                "Mengajarkan konsep dasar logika pemrograman, struktur kontrol, dan fungsi menggunakan bahasa pemrograman golang kepada mahasiswa",
                "Membantu mahasiswa dalam proses penulisan kode, mendeteksi dan memperbaiki error (debugging), serta menanamkan praktik penulisan kode yang bersih dan efisien",
                "Memberikan feedback konstruktif dan melakukan penilaian komprehensif terhadap tugas mingguan, jurnal praktikum, dan proyek akhir mahasiswa."
            ]
        ],
        [
            "period" => "September 2025 - Januari 2026",
            "title" => "Asisten Praktikum Struktur Data",
            "institution" => "Laboratorium Informatika Telkom University Purwokerto",
            "responsibilities" => [
                "Membimbing mahasiswa dalam memahami dan mengimplementasikan konsep Struktur Data (Array, Linked List, Stack, Queue, Tree, Graph) melalui praktikum dan pemrograman",
                "Membantu mahasiswa dalam debugging dan troubleshooting program implementasi Struktur Data, serta menilai tugas, laporan praktikum, dan hasil kode sesuai rubrik penilaian"
            ]
        ],
        [
            "period" => "Juli 2024 - Juli 2025",
            "title" => "Sekretaris Divisi TI",
            "institution" => "Sircle Research & Development Telkom University Purwokerto",
            "responsibilities" => [
                "Mengelola dan menyusun dokumentasi administrasi divisi, termasuk notulen rapat atau pertemuan, arsip program kerja, dan laporan kegiatan.",
                "Membantu ketua divisi dalam merencanakan dan mengeksekusi program kerja divisi, serta memantau progres pelaksanaan kegiatan.",
                "Mengkoordinasikan komunikasi internal dan eksternal divisi untuk memastikan kelancaran pelaksanaan program kerja."
            ]
        ],
        [
            "period" => "Mei - Oktober 2025",
            "title" => "Staff Logistik | SRE FEST 2025",
            "institution" => "SRE Telkom University Purwokerto",
            "responsibilities" => [
                "Mengelola pendataan dan pengadaan kebutuhan perlengkapan acara dengan terstruktur.",
                "Melakukan koordinasi dengan vendor dan divisi lainnya untuk memastikan ketersediaan barang sesuai jadwal acara",
                "Mengoptimalkan distribusi logistik agar proses pelaksanaan acara berjalan lancar dan tepat waktu."
            ]
        ],
        [
            "period" => "Agustus 2024",
            "title" => "Staff Acara | MerdekaHack: Ultimate CTF & Landing Page Development by Sircle",
            "institution" => "Sircle Research & Development Telkom University Purwokerto",
            "responsibilities" => [
                "Mengatur jadwal dan menyusun rundown acara untuk memastikan kelancaran kegiatan kompetisi.",
                "Berkoordinasi dengan tim teknis dan peserta untuk menjaga keteraturan alur acara.",
                "Menjadi narahubung peserta, memberikan informasi terkait jadwal, aturan lomba, dan teknis pelaksanaan.",
                "Mendukung persiapan perlengkapan acara dan memastikan kesesuaian kebutuhan dengan konsep lomba."
            ]
        ]
    ]
];

// Mengubah array PHP menjadi JSON
echo json_encode($cvData);
?>