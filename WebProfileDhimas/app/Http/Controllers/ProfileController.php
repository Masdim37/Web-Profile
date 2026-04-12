<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {
    public function index() {
        $data = [
            'profile' => [
                'name' => 'Muhammad Dhimas Hafizh Fathurrahman',
                'title' => 'Informatics Engineering Student | Aspiring Data Engineer & Backend Developer',
                'about' => 'Mahasiswa S1 Teknik Informatika di Telkom University Purwokerto dengan IPK 3.96/4.00. Memiliki ketertarikan yang kuat pada pengembangan sistem arsitektur Backend, Big Data, Machine Learning, dan Jaringan Komputer. Memiliki sertifikasi Microsoft Azure AI Fundamentals dan berpengalaman praktis baik sebagai Junior IT Support maupun Asisten Praktikum di laboratorium kampus.',
                'email' => 'dhimas.hfzh375@gmail.com',
                'phone' => '+6281290071606',
                'location' => 'Kabupaten Bekasi, Jawa Barat',
                'github' => 'https://github.com/Masdim37',
                'linkedin' => 'https://www.linkedin.com/in/muhammad-dhimas-hafizh-fathurrahman-4a7a2131b/',
                'instagram' => 'https://www.instagram.com/dhmzz._375/'
            ],
            'education' => [
                [
                    'institution' => 'Telkom University Purwokerto',
                    'major' => 'S1 Teknik Informatika',
                    'period' => 'Sep 2023 - Sekarang',
                    'desc' => 'IPK Saat Ini: 3.96/4.00 (Hingga semester 4)'
                ],
                [
                    'institution' => 'SMK Telekomunikasi Telesandi Bekasi',
                    'major' => 'Teknik Komputer & Jaringan (TKJ)',
                    'period' => 'Jul 2020 - Mei 2023',
                    'desc' => 'Nilai Akhir: 92.55'
                ]
            ],
            'certifications' => [
                [
                    'title' => 'AI-900: Microsoft Azure AI Fundamentals',
                    'issuer' => 'Microsoft / Certiport',
                    'date' => 'Maret 2026',
                    'desc' => 'Lulus dengan skor 929/1000. Menguasai Machine Learning, Computer Vision, NLP, dan Generative AI workloads di Azure.'
                ]
            ],
            'experience' => [
                [
                    'title' => 'Asisten Praktikum Struktur Data',
                    'place' => 'Telkom University Purwokerto',
                    'period' => 'Sep 2025 - Jan 2026',
                    'desc' => 'Membimbing mahasiswa dalam memahami konsep Array, Linked List, Stack, Queue, Tree, dan Graph serta membantu proses debugging menggunakan C++/Java.'
                ],
                [
                    'title' => 'Junior IT Support',
                    'place' => 'PT Pralon Karawang',
                    'period' => 'Jan - Mar 2022',
                    'desc' => 'Memelihara jaringan komputer perusahaan (LAN/WAN), memberikan dukungan teknis perbaikan hardware/software, dan melakukan entri data terstruktur.'
                ]
            ],
            'organization' => [
                [
                    'title' => 'Sekretaris Divisi TI',
                    'place' => 'Sircle Research & Development',
                    'period' => 'Jul 2024 - Jul 2025',
                    'desc' => 'Mengelola dokumentasi administrasi divisi dan mengkoordinasikan komunikasi internal/eksternal.'
                ],
                [
                    'title' => 'Staff Logistik',
                    'place' => 'SRE FEST 2025',
                    'period' => 'Mei - Okt 2025',
                    'desc' => 'Mengelola pendataan dan pengadaan kebutuhan perlengkapan acara berkoordinasi dengan vendor.'
                ]
            ],
            'skills' => [
                'Programming' => ['C++', 'Golang', 'Python', 'Java (OOP)', 'PHP'],
                'Tools & Frameworks' => ['Laravel', 'Bootstrap', 'Git', 'Docker', 'Cisco Packet Tracer', 'Azure'],
                'Soft Skills' => ['Problem Solving', 'Teamwork', 'Time Management', 'Communication']
            ]
        ];

        return view('profile', compact('data'));
    }

    public function about() {
        return view('about');
    }

    public function experience(){
        return view('experience');
    }

    public function project(){
        return view('project');
    }

    public function contact(){
        return view('contact');
    }
}