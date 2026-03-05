@extends('layouts.app')

@section('title', 'CV - Gusti Dwi Putra Sanjaya, A.Md')

@push('styles')
<style>
    /* Professional CV Styles - Clean & ATS Friendly */
    .cv-section {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        border: 1px solid #eef2f6;
        page-break-inside: avoid;
    }
    
    .section-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: #0a1929;
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 3px solid #2563eb;
        display: inline-block;
        letter-spacing: -0.3px;
    }
    
    /* Header/Profile - Clean Design */
    .profile-header {
        background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
        border-radius: 16px;
        padding: 2rem;
        margin-bottom: 2rem;
        border: 1px solid #eef2f6;
    }
    
    .profile-name {
        font-size: 2.2rem;
        font-weight: 700;
        color: #0a1929;
        margin-bottom: 0.25rem;
        letter-spacing: -0.02em;
        line-height: 1.2;
    }
    
    .profile-title {
        font-size: 1.1rem;
        color: #2563eb;
        font-weight: 500;
        margin-bottom: 1rem;
    }
    
    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 0.75rem;
        margin-top: 1.25rem;
    }
    
    .contact-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        color: #475569;
        padding: 0.5rem;
        background: #f8fafc;
        border-radius: 8px;
        transition: background 0.2s;
    }
    
    .contact-item:hover {
        background: #f1f5f9;
    }
    
    .contact-item i {
        color: #2563eb;
        width: 20px;
        font-size: 1.1rem;
    }
    
    .contact-item a, .contact-item span {
        color: #334155;
        text-decoration: none;
        font-size: 0.95rem;
    }
    
    .contact-item a:hover {
        color: #2563eb;
        text-decoration: underline;
    }
    
    /* Badge Status */
    .status-badge {
        background: #e8f0fe;
        color: #2563eb;
        padding: 0.4rem 1rem;
        border-radius: 30px;
        font-size: 0.85rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        border: 1px solid #2563eb20;
    }
    
    .status-badge i {
        font-size: 0.8rem;
    }
    
    /* Experience Timeline */
    .experience-item {
        margin-bottom: 2rem;
        padding: 1.25rem;
        background: #f8fafc;
        border-radius: 10px;
        border-left: 4px solid #2563eb;
    }
    
    .experience-header {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: baseline;
        margin-bottom: 1rem;
    }
    
    .experience-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #0a1929;
        margin-bottom: 0.25rem;
    }
    
    .experience-company {
        font-weight: 500;
        color: #2563eb;
        font-size: 1rem;
    }
    
    .experience-date {
        background: #e8f0fe;
        color: #2563eb;
        padding: 0.25rem 1rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }
    
    .achievement-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .achievement-list li {
        margin-bottom: 0.75rem;
        padding-left: 1.5rem;
        position: relative;
        color: #475569;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    
    .achievement-list li:before {
        content: "▹";
        color: #2563eb;
        font-weight: bold;
        position: absolute;
        left: 0;
    }
    
    /* Skills Grid */
    .skills-category {
        margin-bottom: 2rem;
    }
    
    .skills-category h6 {
        color: #0a1929;
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1rem;
        border-left: 3px solid #2563eb;
        padding-left: 0.75rem;
    }
    
    .skills-container {
        display: flex;
        flex-wrap: wrap;
        gap: 0.6rem;
    }
    
    .skill-item {
        background: #f1f5f9;
        color: #1e293b;
        padding: 0.4rem 1rem;
        border-radius: 6px;
        font-size: 0.9rem;
        font-weight: 500;
        border: 1px solid #e2e8f0;
        transition: all 0.2s;
    }
    
    .skill-item:hover {
        background: #2563eb;
        color: white;
        border-color: #2563eb;
    }
    
    /* Education */
    .education-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1rem;
    }
    
    .education-card {
        background: #f8fafc;
        padding: 1.25rem;
        border-radius: 10px;
        border: 1px solid #eef2f6;
    }
    
    .education-degree {
        font-weight: 600;
        color: #0a1929;
        margin-bottom: 0.3rem;
        font-size: 1rem;
    }
    
    .education-school {
        color: #2563eb;
        margin-bottom: 0.3rem;
        font-size: 0.95rem;
    }
    
    .education-year {
        color: #64748b;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }
    
    .education-gpa {
        background: #e8f0fe;
        color: #2563eb;
        padding: 0.2rem 0.5rem;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: 600;
    }
    
    /* Projects */
    .project-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.25rem;
    }
    
    .project-card {
        background: #f8fafc;
        padding: 1.25rem;
        border-radius: 10px;
        border: 1px solid #eef2f6;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    
    .project-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border-color: #2563eb40;
    }
    
    .project-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #0a1929;
        margin-bottom: 0.4rem;
    }
    
    .project-tech {
        font-size: 0.8rem;
        color: #2563eb;
        margin-bottom: 0.75rem;
        font-weight: 500;
    }
    
    .project-desc {
        color: #475569;
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 1rem;
    }
    
    .project-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
        padding-top: 0.75rem;
        border-top: 1px dashed #e2e8f0;
    }
    
    .project-status {
        background: #dbeafe;
        color: #1e40af;
        padding: 0.2rem 0.75rem;
        border-radius: 4px;
        font-size: 0.75rem;
        font-weight: 600;
    }
    
    .project-link {
        color: #2563eb;
        text-decoration: none;
        font-size: 0.85rem;
        font-weight: 500;
    }
    
    .project-link:hover {
        text-decoration: underline;
    }
    
    /* Summary/Objective */
    .summary-text {
        color: #334155;
        line-height: 1.8;
        font-size: 1rem;
        margin-bottom: 0;
        background: #f8fafc;
        padding: 1.25rem;
        border-radius: 8px;
        border-left: 4px solid #2563eb;
    }
    
    /* Additional Info */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
    }
    
    .info-category h6 {
        color: #0a1929;
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 0.95rem;
        border-bottom: 2px solid #e2e8f0;
        padding-bottom: 0.5rem;
    }
    
    .info-list {
        list-style: none;
        padding: 0;
    }
    
    .info-list li {
        margin-bottom: 0.6rem;
        color: #475569;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .info-list i {
        color: #2563eb;
        font-size: 0.9rem;
        width: 18px;
    }
    
    /* Contact Section */
    .contact-section {
        background: linear-gradient(135deg, #f8fafc, #ffffff);
    }
    
    .contact-card {
        text-align: center;
        padding: 1.25rem;
        background: #f8fafc;
        border-radius: 10px;
        border: 1px solid #eef2f6;
        transition: all 0.2s;
    }
    
    .contact-card:hover {
        background: #ffffff;
        border-color: #2563eb40;
        box-shadow: 0 4px 12px rgba(37,99,235,0.08);
    }
    
    .contact-icon {
        width: 45px;
        height: 45px;
        background: #e8f0fe;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }
    
    .contact-icon i {
        font-size: 1.2rem;
        color: #2563eb;
    }
    
    .contact-card h6 {
        color: #0a1929;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    
    .contact-card a, .contact-card span {
        color: #475569;
        text-decoration: none;
        font-size: 0.9rem;
    }
    
    .contact-card a:hover {
        color: #2563eb;
    }
    
    /* PDF Button */
    .pdf-button {
        background: white;
        border: 2px solid #2563eb;
        color: #2563eb;
        padding: 0.75rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .pdf-button:hover {
        background: #2563eb;
        color: white;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .profile-name {
            font-size: 1.8rem;
        }
        
        .cv-section {
            padding: 1.25rem;
        }
        
        .contact-grid {
            grid-template-columns: 1fr;
        }
        
        .experience-header {
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .experience-date {
            align-self: flex-start;
        }
    }
    
    @media (max-width: 576px) {
        .profile-name {
            font-size: 1.5rem;
        }
        
        .profile-title {
            font-size: 1rem;
        }
        
        .status-badge {
            font-size: 0.75rem;
            padding: 0.3rem 0.8rem;
        }
        
        .section-title {
            font-size: 1.2rem;
        }
        
        .contact-item {
            font-size: 0.85rem;
            padding: 0.4rem;
        }
        
        .project-grid {
            grid-template-columns: 1fr;
        }
        
        .experience-title {
            font-size: 1.1rem;
        }
        
        .experience-company {
            font-size: 0.95rem;
        }
        
        .contact-card {
            padding: 1rem;
        }
        
        .contact-card h6 {
            font-size: 0.9rem;
        }
        
        .contact-card a, .contact-card span {
            font-size: 0.8rem;
        }
    }
    
    /* Print Optimization */
    @media print {
        .profile-name {
            font-size: 1.8rem;
        }
        
        .contact-item {
            background: none;
            border: none;
        }
        
        .skill-item {
            background: white;
            border: 1px solid #ccc;
            color: black;
        }
        
        .pdf-button {
            display: none;
        }
        
        a {
            text-decoration: none;
            color: black;
        }
        
        .section-title {
            border-bottom: 3px solid #2563eb !important;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
        
        .status-badge, .experience-date, .education-gpa {
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
        
        a[href]:after {
            content: none !important;
        }
    }
</style>
@endpush

@section('content')
<div class="container">
    <!-- PROFILE HEADER - Clean & Professional -->
    <div class="profile-header">
        <div class="d-flex flex-wrap justify-content-between align-items-start">
            <div>
                <h1 class="profile-name">GUSTI DWI PUTRA SANJAYA, A.Md</h1>
                <div class="profile-title">IT Specialist & Web Developer</div>
            </div>
            <div class="status-badge mt-2 mt-sm-0">
                <i class="bi bi-briefcase-fill"></i>
                <span>5+ Tahun Pengalaman</span>
            </div>
        </div>
        
        <!-- Contact Information Grid -->
        <div class="contact-grid">
            <div class="contact-item">
                <i class="bi bi-envelope-fill"></i>
                <a href="mailto:dwiputra595@gmail.com">dwiputra595@gmail.com</a>
            </div>
            <div class="contact-item">
                <i class="bi bi-telephone-fill"></i>
                <a href="tel:+6283838430236">+62 812-3392-8443</a>
            </div>
            <div class="contact-item">
                <i class="bi bi-linkedin"></i>
                <a href="https://linkedin.com/in/gusti-sanjaya-854a45110" target="_blank">linkedin.com/in/gusti-sanjaya</a>
            </div>
            <div class="contact-item">
                <i class="bi bi-github"></i>
                <a href="https://github.com/gustisanjaya" target="_blank">github.com/gustisanjaya</a>
            </div>
            <div class="contact-item">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Pacitan, Jawa Timur, Indonesia</span>
            </div>
        </div>
    </div>

    <!-- RINGKASAN PROFESIONAL -->
    <section id="ringkasan" class="cv-section">
        <h2 class="section-title">RINGKASAN PROFESIONAL</h2>
        <p class="summary-text" style="text-align: justify;">
            IT profesional berpengalaman 5+ tahun di sektor Energi dan Manufaktur. Keahlian utama: Pengembangan web (PHP, MySQL, Bootstrap) dengan pencapaian meningkatkan efisiensi aset 30% dan mengurangi workload manual 40% melalui aplikasi monitoring gudang serta sistem absensi vendor. Mahir pemeliharaan infrastruktur IT (hardware, software, jaringan), administrasi aset 500+ item, dan administrasi pengadaan BUMN. Siap berkontribusi di posisi <b>Web Developer</b>, <b>Application Programmer</b>, <b>IT Infrastructure</b>, atau IT Support untuk mendukung operasional dan inovasi teknologi perusahaan.
        </p>
    </section>

    <!-- PENGALAMAN KERJA -->
    <section id="pengalaman" class="cv-section">
        <h2 class="section-title">PENGALAMAN KERJA</h2>
        
        <div class="experience-item">
            <div class="experience-header">
                <div>
                    <div class="experience-title">IT Staff</div>
                    <div class="experience-company">PT HWASEUNG 2 PATI</div>
                </div>
                <div class="experience-date">Agustus 2024 - Sekarang</div>
            </div>
            <ul class="achievement-list">
                <li>Mengembangkan <b>Aplikasi Web Monitoring Gudang IT</b> yang digunakan oleh lebih dari 10 staf IT, meningkatkan efisiensi pelacakan aset hingga 30%.</li>
                <li>Merancang dan membangun <b>Sistem Absensi Vendor berbasis web</b> untuk mengurangi kesalahan pelaporan manual secara signifikan.</li>
                <li>Mengelola lebih dari <b>500 aset dan barang habis pakai IT</b> menggunakan sistem ITMS.</li>
                <li>Merancang serta mengembangkan sistem monitoring internal menggunakan teknologi <b>PHP Laravel, MySQL, dan Bootstrap</b>.</li>
                <li>Mengimplementasikan <b>role-based access control (kontrol akses berbasis peran)</b> untuk admin gudang dan staf IT.</li>
                <li>Menghasilkan laporan aset mingguan dan bulanan secara otomatis, mengurangi beban kerja manual hingga 40%.</li>
                <li>Melakukan <b>Stock Opname</b> serta pelacakan aset secara real-time.</li>
            </ul>
        </div>

        <div class="experience-item">
            <div class="experience-header">
                <div>
                    <div class="experience-title">Staf Pengadaan Barang dan Jasa</div>
                    <div class="experience-company">PT Pratama Lentera Wijaya</div>
                </div>
                <div class="experience-date">April 2019 - Januari 2022</div>
            </div>
            <ul class="achievement-list">
                <li>Mengelola dokumentasi pengadaan barang dan jasa untuk <b>PT PJB UBJOM PLTU Pacitan</b> dan <b>PT PJB Surabaya</b>.</li>
                <li>Menyiapkan dokumen administrasi, teknis, serta <b>Rencana Anggaran Biaya (RAB)</b> untuk tender dan pengadaan.</li>
                <li>Memantau kepatuhan proses pengadaan serta memastikan ketepatan waktu pengiriman dan submisi dokumen.</li>
                <li>Memberikan dukungan infrastruktur IT, termasuk pemeliharaan dan pemecahan masalah perangkat keras, jaringan komputer, serta perangkat lunak.</li>
            </ul>
        </div>

        <div class="experience-item">
            <div class="experience-header">
                <div>
                    <div class="experience-title">IT Support</div>
                    <div class="experience-company">PT PJB UBJOM PLTU Pacitan</div>
                </div>
                <div class="experience-date">April 2017 - April 2019</div>
            </div>
            <ul class="achievement-list">
                <li>Melakukan <b>pemecahan masalah (Troubleshooting)</b> perangkat keras dan perangkat lunak pada sistem perusahaan secara rutin dan efektif.</li>
                <li>Memelihara serta memantau jaringan komputer dan konektivitas internet untuk memastikan kelancaran operasional harian.</li>
                <li>Mengembangkan dan memelihara <b>Sistem Informasi internal berbasis web</b> guna mendukung proses bisnis perusahaan.</li>
                <li>Mengawasi pengelolaan <b>Inventaris Gudang IT</b> serta peralatan terkait, termasuk pencatatan, pemantauan stok, dan pengendalian barang masuk/keluar.</li>
            </ul>
        </div>
    </section>

    <!-- KEAHLIAN TEKNIS -->
    <section id="keahlian" class="cv-section">
        <h2 class="section-title">KEAHLIAN TEKNIS</h2>
        
        <div class="skills-category">
            <h6>Pengembangan Web</h6>
            <div class="skills-container">
                <span class="skill-item">PHP (Laravel)</span>
                <span class="skill-item">MySQL</span>
                <span class="skill-item">Tailwind CSS</span>
                <span class="skill-item">JavaScript</span>
                <span class="skill-item">HTML5/CSS3</span>
                <span class="skill-item">Bootstrap 5</span>
                <span class="skill-item">REST API</span>
                <span class="skill-item">Astro.js</span>
            </div>
        </div>
        
        <div class="skills-category">
            <h6>IT Infrastructure</h6>
            <div class="skills-container">
                <span class="skill-item">Network Administration</span>
                <span class="skill-item">Hardware Troubleshooting</span>
                <span class="skill-item">Asset Management</span>
                <span class="skill-item">Windows Server</span>
                <span class="skill-item">Linux (Basic)</span>
                <span class="skill-item">TCP/IP</span>
                <span class="skill-item">Network Security</span>
            </div>
        </div>
        
        <div class="skills-category">
            <h6>Tools & Software</h6>
            <div class="skills-container">
                <span class="skill-item">Git</span>
                <span class="skill-item">VS Code</span>
                <span class="skill-item">Canva</span>
                <span class="skill-item">Capcut</span>
                <span class="skill-item">Microsoft Office</span>
                <span class="skill-item">Google Workspace</span>
                <span class="skill-item">Figma</span>
            </div>
        </div>
    </section>

    <!-- PENDIDIKAN -->
    <section id="pendidikan" class="cv-section">
        <h2 class="section-title">PENDIDIKAN</h2>
        
        <div class="education-grid">
            <div class="education-card">
                <div class="education-degree">Ahli Madya (A.Md) Teknik Informatika</div>
                <div class="education-school">Politeknik Elektronika Negeri Surabaya (PENS)</div>
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <span class="education-year"><i class="bi bi-calendar3"></i> 2017 - 2020</span>
                    <span class="education-gpa">IPK 2.90/4.00</span>
                </div>
            </div>
            
            <div class="education-card">
                <div class="education-degree">Ahli Muda (A.Ma) Teknik Informatika</div>
                <div class="education-school">Akademi Komunitas Negeri (AKN) Pacitan</div>
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <span class="education-year"><i class="bi bi-calendar3"></i> 2014 - 2017</span>
                    <span class="education-gpa">IPK 3.72/4.00</span>
                </div>
            </div>
        </div>
    </section>

    <!-- PROYEK TERPILIH -->
    <section id="proyek" class="cv-section">
        <h2 class="section-title">PROYEK TERPILIH</h2>
        
        <div class="project-grid">
            <div class="project-card">
                <h5 class="project-title">Warehouse Monitoring System</h5>
                <div class="project-tech">Laravel 11, MySQL, Bootstrap 5</div>
                <p class="project-desc">
                    Sistem monitoring inventaris real-time dengan barcode scanning, manajemen stok, 
                    laporan otomatis, dan notifikasi stok minimum. Digunakan untuk mengelola 200+ Assets & 200+ Consumable di lingkungan gudang IT.
                </p>
                <div class="project-meta">
                    <span class="project-status">PT HWASEUNG 2 PATI</span>
                    <span class="project-status" style="background:#2563eb20; color:#2563eb;">IT Warehouse</span>
                </div>
            </div>
            
            <div class="project-card">
                <h5 class="project-title">Vendor Attendance System</h5>
                <div class="project-tech">PHP Native, MySQL, Bootstrap 5</div>
                <p class="project-desc">
                    Sistem absensi vendor dengan QR code, tracking jam masuk/keluar, dan laporan otomatis 
                    untuk pembayaran. Mengelola 20+ pegawai vendor per bulan.
                </p>
                <div class="project-meta">
                    <span class="project-status">PT HWASEUNG 2 PATI</span>
                    <span class="project-status" style="background:#f1f5f9; color:#64748b;">Internal Project</span>
                </div>
            </div>
            
            <div class="project-card">
                <h5 class="project-title">WebEksport Landing Page</h5>
                <div class="project-tech">Astro.js, Tailwind CSS</div>
                <p class="project-desc">
                    Landing page performa tinggi dengan Static Site Generation (SSG), mencapai skor 
                    PageSpeed Insights 95+ untuk desktop dan mobile.
                </p>
                <div class="project-meta">
                    <span class="project-status">Freelance Project</span>
                    <a href="https://github.com/gustisanjaya/webeksport" target="_blank" class="project-link">
                        <i class="bi bi-github"></i> Lihat Kode
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- INFORMASI TAMBAHAN -->
    <section id="informasi" class="cv-section">
        <h2 class="section-title">INFORMASI TAMBAHAN</h2>
        
        <div class="info-grid">
            <div class="info-category">
                <h6>Bahasa</h6>
                <ul class="info-list">
                    <li><i class="bi bi-check-circle-fill"></i> Bahasa Indonesia (Aktif)</li>
                    <li><i class="bi bi-check-circle-fill"></i> Bahasa Inggris (Pasif)</li>
                </ul>
            </div>
            
            <div class="info-category">
                <h6>Sertifikasi</h6>
                <ul class="info-list">
                    <li><i class="bi bi-award-fill"></i> K3 Minyak dan Gas Industri (2024) – PT Mutiara Mutu</li>
                    <li><i class="bi bi-award-fill"></i> Kemnaker Ahli K3 Umum (2023)</li>
                    <li><i class="bi bi-award-fill"></i> TOEFL Certificate (2019), Nilai 451</li>
                </ul>
            </div>
            
            <div class="info-category">
                <h6>Penghargaan</h6>
                <ul class="info-list">
                    <li><i class="bi bi-trophy-fill"></i> Employee of the Month - PT HWASEUNG (Feb 2025)</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- KONTAK -->
    <section id="kontak" class="cv-section contact-section">
        <h2 class="section-title">HUBUNGI SAYA</h2>
        
        <div class="row g-3">
            <div class="col-md-3 col-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <h6>Email</h6>
                    <a href="mailto:dwiputra595@gmail.com">dwiputra595<br>@gmail.com</a>
                </div>
            </div>
            
            <div class="col-md-3 col-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h6>Telepon</h6>
                    <a href="tel:+6283838430236">+62 812-3392-8443</a>
                </div>
            </div>
            
            <div class="col-md-3 col-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-linkedin"></i>
                    </div>
                    <h6>LinkedIn</h6>
                    <a href="https://linkedin.com/in/gusti-sanjaya-854a45110" target="_blank">gusti-sanjaya</a>
                </div>
            </div>
            
            <div class="col-md-3 col-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-github"></i>
                    </div>
                    <h6>GitHub</h6>
                    <a href="https://github.com/gustisanjaya" target="_blank">@gustisanjaya</a>
                </div>
            </div>
        </div>
        
        <!-- PDF Download Button -->
        <div class="text-center mt-4 no-print">
            <a href="#" onclick="window.print()" class="pdf-button" id="pdfButton">
                <i class="bi bi-file-pdf-fill"></i>
                <span>Simpan sebagai PDF</span>
            </a>
            <p class="text-muted small mt-2 mb-0" id="pdfStatus">
                <i class="bi bi-info-circle"></i> Klik untuk menyimpan CV dalam format PDF
            </p>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    // PDF Button dengan loading state
    document.addEventListener('DOMContentLoaded', function() {
        const pdfButton = document.getElementById('pdfButton');
        
        if (pdfButton) {
            pdfButton.addEventListener('click', function(e) {
                e.preventDefault();
                
                const button = this;
                const status = document.getElementById('pdfStatus');
                const originalText = button.innerHTML;
                
                button.innerHTML = '<i class="bi bi-hourglass-split"></i> Memproses...';
                button.style.opacity = '0.7';
                button.style.pointerEvents = 'none';
                status.innerHTML = '<i class="bi bi-hourglass-split"></i> Menyiapkan PDF, mohon tunggu...';
                
                // Gunakan window.print() dengan delay
                setTimeout(() => {
                    window.print();
                    
                    // Kembalikan button setelah print dialog muncul
                    setTimeout(() => {
                        button.innerHTML = originalText;
                        button.style.opacity = '1';
                        button.style.pointerEvents = 'auto';
                        status.innerHTML = '<i class="bi bi-info-circle"></i> Klik untuk menyimpan CV dalam format PDF';
                    }, 1000);
                }, 100);
            });
        }
    });
</script>
@endpush