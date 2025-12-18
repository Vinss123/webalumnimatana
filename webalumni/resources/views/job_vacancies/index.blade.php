<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lowongan Pekerjaan - Matana University Alumni</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  
  <style>
    /* Job Board Specific Styles */
    :root {
      --primary-color: #ffffffff;
      --secondary-color: #8f94fb;
      --accent-color: #ff6b6b;
      --dark-color: #2d3436;
      --light-bg: #f8f9fa;
    }

    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      padding-top: 100px;
    }

    /* Hero Section */
    .jobs-hero {
      background: linear-gradient(135deg, rgba(78, 84, 200, 0.9), rgba(143, 148, 251, 0.9));
      padding: 60px 0 40px;
      margin-bottom: 40px;
      position: relative;
      overflow: hidden;
    }

    .jobs-hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
      animation: float 20s linear infinite;
    }

    @keyframes float {
      from { transform: translateY(0); }
      to { transform: translateY(-100px); }
    }

    .jobs-hero h1 {
      color: white;
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 15px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }

    .jobs-hero p {
      color: rgba(255,255,255,0.9);
      font-size: 1.2rem;
    }

    /* Search Card */
    .search-card {
      background: white;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 20px 60px rgba(0,0,0,0.15);
      margin-top: -30px;
      position: relative;
      z-index: 10;
      animation: slideUp 0.6s ease-out;
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .search-input {
      border: 2px solid #e9ecef;
      border-radius: 12px;
      padding: 15px 20px;
      font-size: 16px;
      transition: all 0.3s;
    }

    .search-input:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 4px rgba(78, 84, 200, 0.1);
    }

    .btn-search {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      border: none;
      color: white;
      padding: 15px 35px;
      border-radius: 12px;
      font-weight: 600;
      transition: all 0.3s;
      box-shadow: 0 4px 15px rgba(78, 84, 200, 0.3);
    }

    .btn-search:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 25px rgba(78, 84, 200, 0.4);
    }

    /* Tabs */
    .job-tabs {
      display: flex;
      gap: 15px;
      margin-bottom: 30px;
      flex-wrap: wrap;
    }

    .tab-btn {
      background: white;
      border: 2px solid #e9ecef;
      padding: 12px 25px;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s;
      font-weight: 500;
      color: var(--dark-color);
    }

    .tab-btn:hover {
      border-color: var(--primary-color);
      color: var(--primary-color);
      transform: translateY(-2px);
    }

    .tab-btn.active {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      border-color: transparent;
      color: white;
      box-shadow: 0 4px 15px rgba(78, 84, 200, 0.3);
    }

    /* Job Cards */
    .job-card {
      background: white;
      border-radius: 20px;
      padding: 30px;
      margin-bottom: 25px;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      border: 2px solid transparent;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }

    .job-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(78, 84, 200, 0.05), transparent);
      transition: left 0.5s;
    }

    .job-card:hover::before {
      left: 100%;
    }

    .job-card:hover {
      transform: translateY(-8px);
      border-color: var(--primary-color);
      box-shadow: 0 20px 40px rgba(78, 84, 200, 0.15);
    }

    .job-company {
      width: 70px;
      height: 70px;
      border-radius: 15px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 28px;
      font-weight: 700;
      box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
    }

    .job-title {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--dark-color);
      margin-bottom: 8px;
      transition: color 0.3s;
    }

    .job-card:hover .job-title {
      color: var(--primary-color);
    }

    .company-name {
      color: #6c757d;
      font-size: 1.1rem;
      font-weight: 500;
    }

    .job-badge {
      display: inline-block;
      padding: 6px 16px;
      border-radius: 20px;
      font-size: 13px;
      font-weight: 600;
      margin-right: 8px;
      margin-bottom: 8px;
    }

    .badge-fulltime {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
    }

    .badge-remote {
      background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
      color: white;
    }

    .badge-parttime {
      background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
      color: white;
    }

    .badge-freelance {
      background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
      color: white;
    }

    .job-info {
      display: flex;
      gap: 25px;
      flex-wrap: wrap;
      color: #6c757d;
      font-size: 14px;
      margin-top: 15px;
    }

    .job-info-item {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .job-info-item i {
      color: var(--primary-color);
    }

    /* Empty State */
    .empty-state {
      text-align: center;
      padding: 80px 20px;
      animation: fadeIn 0.6s;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .empty-icon {
      width: 150px;
      height: 150px;
      margin: 0 auto 30px;
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 70px;
      animation: bounce 2s infinite;
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-20px); }
    }

    .btn-post-job {
      background: linear-gradient(135deg, var(--accent-color), #ee5a6f);
      color: white;
      padding: 15px 40px;
      border-radius: 50px;
      border: none;
      font-weight: 600;
      font-size: 16px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s;
      box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
    }

    .btn-post-job:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 30px rgba(255, 107, 107, 0.4);
    }

    /* Stats Cards */
    .stats-card {
      background: white;
      border-radius: 15px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
      transition: all 0.3s;
    }

    .stats-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    }

    .stats-number {
      font-size: 2.5rem;
      font-weight: 700;
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .stats-label {
      color: #6c757d;
      font-size: 14px;
      margin-top: 5px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .jobs-hero h1 {
        font-size: 2rem;
      }
      
      .search-card {
        padding: 20px;
      }
      
      .job-card {
        padding: 20px;
      }
    }

    /* Loading Animation */
    .loading-spinner {
      width: 50px;
      height: 50px;
      border: 5px solid #f3f3f3;
      border-top: 5px solid var(--primary-color);
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin: 50px auto;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>
<body>

  <!-- ***** Header Area Start ***** -->
  <!-- <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="/" class="logo">
              <img src="{{ asset('assets/images/logo_matana.png') }}" alt="Matana University">
            </a>

            <ul class="nav">
              <li class="scroll-to-section"><a href="/">Home</a></li>
              <li class="scroll-to-section"><a href="{{ url('/#forum') }}">Information</a></li>
              <li class="scroll-to-section"><a href="#about">Forum</a></li>
              @auth
                <li class="scroll-to-section"><a href="/profil">Profil</a></li>
                <li class="scroll-to-section"><a href="/alumni">List</a></li>
                <li class="scroll-to-section"><a href="/jobs" class="active">Jobs</a></li>
              @else
                <li class="scroll-to-section"><a href="/profil">Profil</a></li>
                <li class="scroll-to-section"><a href="/alumni">List</a></li>
                <li class="scroll-to-section"><a href="/jobs" class="active">Jobs</a></li>
              @endauth
            </ul>

            <div class="header-auth d-flex align-items-center" style="gap: 1rem; margin-left: auto;">
              @auth
                <div class="profile-dropdown position-relative">
                  @if(Auth::user()->profile_picture)
                    <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="{{ Auth::user()->name }}"
                      class="rounded-circle border border-primary" style="width: 40px; height: 40px; object-fit: cover; cursor: pointer;">
                  @else
                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; cursor: pointer;">
                      <i class="fas fa-user text-white"></i>
                    </div>
                  @endif
                  
                  <div class="dropdown-menu-custom bg-white rounded shadow position-absolute" style="right: 0; top: 100%; width: 200px; display: none; z-index: 1000;">
                    <a href="/profil" class="d-block px-3 py-2 text-dark text-decoration-none border-bottom hover-bg-light">
                      <i class="fas fa-user mr-2"></i>Profil Saya
                    </a>
                    <a href="/logout" class="d-block px-3 py-2 text-danger text-decoration-none hover-bg-light">
                      <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                  </div>
                </div>
                
                <style>
                  .profile-dropdown:hover .dropdown-menu-custom {
                    display: block !important;
                  }
                  .hover-bg-light:hover {
                    background-color: #f8f9fa;
                  }
                </style>
              @else
                <div class="gradient-button">
                  <a href="/login"><i class="fa fa-sign-in-alt"></i> Masuk</a>
                </div>
              @endauth
            </div>

            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header> -->

  @extends('layout.header')
  <!-- ***** Header Area End ***** -->

  <!-- Hero Section -->
  <section class="jobs-hero">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8">
          <h1 class="animate__animated animate__fadeInDown">🔍 Lowongan Pekerjaan</h1>
          <p class="animate__animated animate__fadeInUp">Temukan peluang karir terbaik untuk alumni Matana University</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="pb-5">
    <div class="container">
      
      <!-- Search Card -->
      <div class="search-card">
        <form action="{{ route('jobs.index') }}" method="GET">
          <div class="row g-3 align-items-end">
            <div class="col-lg-5">
              <label class="form-label fw-bold"><i class="fas fa-search me-2"></i>Cari Lowongan</label>
              <input type="text" name="search" class="form-control search-input" 
                     placeholder="Cari judul, perusahaan, atau keyword..." 
                     value="{{ request('search') }}">
            </div>
            <div class="col-lg-3">
              <label class="form-label fw-bold"><i class="fas fa-filter me-2"></i>Kategori</label>
              <select name="type" class="form-select search-input">
                <option value="">Semua Tipe</option>
                <option value="fulltime" {{ request('type') == 'fulltime' ? 'selected' : '' }}>Full Time</option>
                <option value="parttime" {{ request('type') == 'parttime' ? 'selected' : '' }}>Part Time</option>
                <option value="freelance" {{ request('type') == 'freelance' ? 'selected' : '' }}>Freelance</option>
                <option value="remote" {{ request('type') == 'remote' ? 'selected' : '' }}>Remote</option>
              </select>
            </div>
            <div class="col-lg-2">
              <button type="submit" class="btn btn-search w-100">
                <i class="fas fa-search me-2"></i>Cari
              </button>
            </div>
            <div class="col-lg-2">
              <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary w-100" style="border-radius: 12px; padding: 15px;">
                <i class="fas fa-redo me-2"></i>Reset
              </a>
            </div>
          </div>
        </form>
      </div>

      <!-- Stats Cards -->
      <div class="row mt-4 mb-4">
        <div class="col-md-4 mb-3">
          <div class="stats-card animate__animated animate__fadeInUp" data-wow-delay="0.1s">
            <div class="stats-number">{{ $totalJobs ?? 0 }}</div>
            <div class="stats-label">Total Lowongan</div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="stats-card animate__animated animate__fadeInUp" data-wow-delay="0.2s">
            <div class="stats-number">{{ $activeJobs ?? 0 }}</div>
            <div class="stats-label">Lowongan Aktif</div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="stats-card animate__animated animate__fadeInUp" data-wow-delay="0.3s">
            <div class="stats-number">{{ $companies ?? 0 }}</div>
            <div class="stats-label">Perusahaan</div>
          </div>
        </div>
      </div>

      <!-- Tabs -->
      <div class="job-tabs">
        <a href="{{ route('jobs.index') }}" class="tab-btn active">
          <i class="fas fa-briefcase me-2"></i>Semua Lowongan
        </a>
        <a href="{{ route('jobs.my_jobs') }}" class="tab-btn">
          <i class="fas fa-user-tie me-2"></i>Lowongan Saya
        </a>
        @auth
        <a href="{{ route('jobs.create') }}" class="tab-btn ms-auto">
          <i class="fas fa-plus me-2"></i>Pasang Lowongan
        </a>
        @endauth
      </div>

      <!-- Job Listings -->
      @if(isset($jobs) && $jobs->count() > 0)
        <div class="row">
          @foreach($jobs as $index => $job)
          <div class="col-12">
            <div class="job-card animate__animated animate__fadeInUp" 
                 data-wow-delay="{{ $index * 0.1 }}s"
                 onclick="window.location='{{ route('jobs.show', $job->id) }}'">
              <div class="row">
                <div class="col-auto">
                  <div class="job-company">
                    {{ strtoupper(substr($job->company_name ?? 'C', 0, 1)) }}
                  </div>
                </div>
                <div class="col">
                  <div class="d-flex justify-content-between align-items-start mb-2">
                    <div>
                      <h3 class="job-title">{{ $job->title }}</h3>
                      <p class="company-name mb-0">{{ $job->company_name }}</p>
                    </div>
                    <div class="text-end">
                      <span class="job-badge badge-{{ strtolower($job->type) }}">
                        {{ ucfirst($job->type) }}
                      </span>
                    </div>
                  </div>
                  
                  <div class="job-info">
                    <div class="job-info-item">
                      <i class="fas fa-map-marker-alt"></i>
                      <span>{{ $job->location }}</span>
                    </div>
                    @if($job->salary_range)
                    <div class="job-info-item">
                      <i class="fas fa-dollar-sign"></i>
                      <span>{{ $job->salary_range }}</span>
                    </div>
                    @endif
                    <div class="job-info-item">
                      <i class="fas fa-calendar"></i>
                      <span>{{ $job->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="job-info-item">
                      <i class="fas fa-eye"></i>
                      <span>{{ $job->views ?? 0 }} views</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-4 d-flex justify-content-center">
          {{ $jobs->links() }}
        </div>

      @else
        <!-- Empty State -->
        <div class="empty-state">
          <div class="empty-icon">
            💼
          </div>
          <h2 class="mb-3" style="color: #2d3436; font-weight: 700;">Belum Ada Lowongan Pekerjaan</h2>
          <p class="text-muted mb-4" style="font-size: 1.1rem;">
            Saat ini belum ada lowongan yang tersedia. Jadilah yang pertama untuk memposting lowongan pekerjaan!
          </p>
          @auth
          <a href="{{ route('jobs.create') }}" class="btn-post-job">
            <i class="fas fa-plus-circle"></i>
            Pasang Lowongan Pertama
          </a>
          @else
          <a href="{{ route('login') }}" class="btn-post-job">
            <i class="fas fa-sign-in-alt"></i>
            Login untuk Pasang Lowongan
          </a>
          @endauth
        </div>
      @endif

    </div>
  </section>

  <!-- Footer -->
  <footer id="contact-us">
    <div>
      <div class="container-footer wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="row">
          <div class="col-lg-3 footer-widget">
            <img src="{{ asset('assets/images/logo-horizontal-white-footer.png') }}"
              alt="Matana University"
              class="h-12 mb-6"/>
            <p>
              <i class="fas fa-map-marker-alt"></i>
              <a href="https://maps.app.goo.gl/6P3uNLuaX7KJYjEH6">
                Matana University Tower, Jl. CBD Barat Kav. 1, Gading Serpong, Tangerang, Banten - 15810
              </a>
            </p>
            <p><i class="fas fa-phone"></i> <a href="tel:02129232999">021-2923-2999</a></p>
            <p><i class="fab fa-whatsapp"></i> <a href="https://wa.me/081287775999">0812-8777-5999</a></p>
            <p><i class="fas fa-envelope"></i> <a href="mailto:info@matanauniversity.ac.id">info@matanauniversity.ac.id</a></p>
          </div>

          <div class="col-lg-3 footer-widget">
            <h4>Contact Us</h4>
            <ul>
              <li><a href="#">Hubungi Kami</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Support</a></li>
            </ul>
          </div>

          <div class="col-lg-3 footer-widget">
            <h4>About This Web</h4>
            <ul>
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Forum</a></li>
              <li><a href="#">Informasi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 footer-widget">
            <h4>Connect With Us</h4>
            <div class="flex space-x-3">
              <a href="https://www.facebook.com/MatanaUniversity/" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.instagram.com/matanauniversityofficial/" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.youtube.com/channel/UCSTCRIr8NaFwD-5PSer4lZA/" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
              </a>
              <a href="https://www.linkedin.com/school/matana-university-alumni/" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-12 copyright-text">
          <p>Copyright © 2025 Matana University. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>
  
  <script>
    // Add smooth scroll animations
    document.addEventListener('DOMContentLoaded', function() {
      const jobCards = document.querySelectorAll('.job-card');
      
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      };
      
      const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate__animated', 'animate__fadeInUp');
          }
        });
      }, observerOptions);
      
      jobCards.forEach(card => observer.observe(card));
    });
  </script>

</body>
</html>