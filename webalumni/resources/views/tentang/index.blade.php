@extends('layout.layout_public')

@section('isiWebsite')

<!-- Hero Section with Background -->
<div style="background: linear-gradient(135deg, rgba(30, 58, 95, 0.9) 0%, rgba(75, 142, 241, 0.85) 100%), url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 1440 320%22><path fill=%2300d4ff%22 fill-opacity=%220.1%22 d=%22M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,144C960,149,1056,139,1152,138.7C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z%22></path></svg>'); background-size: cover; background-position: center; background-attachment: fixed; padding: 80px 0; color: white; text-align: center; position: relative;">
    <div class="container" style="position: relative; z-index: 2;">
        <h1 style="font-size: 3.5rem; font-weight: 800; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
            Tentang Kami
        </h1>
        <p style="font-size: 1.2rem; max-width: 700px; margin: 0 auto; opacity: 0.95; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">
            Platform yang menghubungkan alumni Matana untuk berbagi pengalaman dan membuka peluang masa depan
        </p>
    </div>
</div>

<!-- Main Content -->
<div style="background-color: #f8f9fa; padding: 60px 0;">
    <div class="container">
        <!-- Tentang Aplikasi -->
        <div class="row mb-5 g-4">
            <div class="col-lg-8 mx-auto">
                <div style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
                    <h2 style="color: #1e3a5f; font-weight: 700; font-size: 2rem; margin-bottom: 25px;">
                        Apa itu Website Alumni Matana?
                    </h2>
                    <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 20px;">
                        Website Alumni Matana adalah platform digital yang dirancang khusus untuk mempertemukan para alumni Matana University di seluruh Indonesia. Aplikasi ini bertujuan untuk memfasilitasi jaringan profesional, berbagi pengalaman karir, dan membuka peluang kolaborasi antar alumni yang berkelanjutan.
                    </p>
                    <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 20px;">
                        Kami memahami bahwa jaringan alumni adalah aset berharga bagi universitas dan lulusannya. Melalui platform ini, kami menciptakan ekosistem di mana setiap alumni dapat saling terhubung, berbagi cerita kesuksesan, memberikan mentoring, dan membuka pintu untuk peluang karir baru.
                    </p>
                    <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 20px;">
                        Website Alumni Matana menyediakan berbagai fitur unggulan seperti:
                    </p>
                    <ul style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 20px; padding-left: 30px;">
                        <li style="margin-bottom: 12px;"><strong>Berita dan Artikel</strong> - Informasi terkini tentang universitas, alumni, dan industri</li>
                        <li style="margin-bottom: 12px;"><strong>Lowongan Pekerjaan</strong> - Peluang karir eksklusif untuk alumni Matana</li>
                        <li style="margin-bottom: 12px;"><strong>Forum Diskusi</strong> - Tempat berbagi pengalaman dan bertanya jawab</li>
                        <li style="margin-bottom: 12px;"><strong>Networking Events</strong> - Acara gathering dan webinar untuk alumni</li>
                        <li><strong>Database Alumni</strong> - Direktori lengkap untuk memudahkan pencarian kontak</li>
                    </ul>
                    <p style="color: #555; font-size: 1.05rem; line-height: 1.8;">
                        Dengan platform ini, kami berkomitmen untuk menjaga ikatan silaturahmi alumni, mendorong kolaborasi profesional, dan membantu setiap alumni mencapai kesuksesan dalam karir mereka. Bersama-sama, kita membangun komunitas yang kuat dan saling mendukung.
                    </p>
                </div>
            </div>
        </div>

        <!-- Visi & Misi -->
        <div class="row g-4">
            <!-- Visi -->
            <div class="col-lg-6">
                <div style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); height: 100%; border-top: 4px solid #1e3a5f;">
                    <h3 style="color: #1e3a5f; font-weight: 700; font-size: 1.8rem; margin-bottom: 20px;">
                        <i class="fas fa-eye" style="color: #ff9a56; margin-right: 8px;"></i> Visi
                    </h3>
                    <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin: 0;">
                        Menjadi platform digital terdepan yang menghubungkan semua alumni Matana University dalam satu ekosistem profesional yang dinamis, saling mendukung, dan bersama-sama berkontribusi pada kemajuan industri dan masyarakat.
                    </p>
                </div>
            </div>

            <!-- Misi -->
            <div class="col-lg-6">
                <div style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); height: 100%; border-top: 4px solid #4b8ef1;">
                    <h3 style="color: #1e3a5f; font-weight: 700; font-size: 1.8rem; margin-bottom: 20px;">
                        <i class="fas fa-rocket" style="color: #ff9a56; margin-right: 8px;"></i> Misi
                    </h3>
                    <ul style="color: #555; font-size: 1.05rem; line-height: 1.8; margin: 0; padding-left: 20px;">
                        <li style="margin-bottom: 12px;">Memfasilitasi networking dan kolaborasi antar alumni</li>
                        <li style="margin-bottom: 12px;">Menyediakan platform berbagi informasi karir dan lowongan pekerjaan</li>
                        <li style="margin-bottom: 12px;">Membangun komunitas alumni yang solid dan saling mendukung</li>
                        <li>Meningkatkan nilai dan reputasi Matana University</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Wave Background Bottom -->
<svg style="display: block; margin-top: -1px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
    <path fill="#f8f9fa" fill-opacity="1" d="M0,50L48,58.3C96,67,192,83,288,80C384,77,480,63,576,60C672,57,768,63,864,65C960,67,1056,63,1152,60C1248,57,1344,57,1392,57.3L1440,57.5L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z"></path>
</svg>

@endsection
