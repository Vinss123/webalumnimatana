<!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="/" class="logo">
              <img src="assets/images/logo_matana.png" alt="Matana University">
            </a>
            <!-- ***** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="{{ url('/#forum') }}">Information</a></li>
              <li class="scroll-to-section"><a href="/forum">Forum</a></li>
              @auth
                <li class="scroll-to-section"><a href="/profil">Profil</a></li>
                <li class="scroll-to-section"><a href="/alumni">List</a></li>
              @else
                <li class="scroll-to-section"><a href="/profil">Profil</a></li>
                <li class="scroll-to-section"><a href="/alumni">List</a></li>
                <li></li>
              @endauth
            </ul>

            <!-- Profile Picture & Auth Section -->
            <div class="header-auth" style="display: none; align-items: center; gap: 16px; margin-left: auto;">
              @auth
                <div style="position: relative;">
                  @if(Auth::user()->profile_picture)
                    <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="{{ Auth::user()->name }}"
                      style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid #6366f1; cursor: pointer;">
                  @else
                    <div style="width: 40px; height: 40px; border-radius: 50%; background: #6366f1; display: flex; align-items: center; justify-content: center; cursor: pointer; color: white;">
                      <i class="fas fa-user"></i>
                    </div>
                  @endif
                  
                  <!-- Dropdown Menu -->
                  <div style="position: absolute; right: 0; margin-top: 8px; width: 192px; background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); z-index: 50; display: none;" class="dropdown-menu-auth">
                    <a href="/profil" style="display: block; padding: 8px 16px; color: #374151; border-radius: 8px 8px 0 0; text-decoration: none;" onmouseover="this.style.backgroundColor='#f3f4f6'" onmouseout="this.style.backgroundColor='transparent'">
                      <i class="fas fa-user mr-2"></i>Profil Saya
                    </a>
                    <a href="/logout" style="display: block; padding: 8px 16px; color: #dc2626; border-radius: 0 0 8px 8px; text-decoration: none;" onmouseover="this.style.backgroundColor='#fee2e2'" onmouseout="this.style.backgroundColor='transparent'">
                      <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                  </div>
                </div>
              @else
                <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 6px; padding: 8px 16px;">
                  <a href="/login" style="text-decoration: none; color: white; font-weight: 600;"><i class="fa fa-sign-in-alt"></i> Sign In Now</a>
                </div>
              @endauth
            </div>
            
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                const authDiv = document.querySelector('[style*="position: relative"]');
                if (authDiv) {
                  const img = authDiv.querySelector('img') || authDiv.querySelector('div[style*="background: #6366f1"]');
                  const dropdown = authDiv.querySelector('.dropdown-menu-auth');
                  if (img && dropdown) {
                    img.addEventListener('click', function() {
                      dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
                    });
                    document.addEventListener('click', function(e) {
                      if (!authDiv.contains(e.target)) {
                        dropdown.style.display = 'none';
                      }
                    });
                  }
                }
              });
            </script>

            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->