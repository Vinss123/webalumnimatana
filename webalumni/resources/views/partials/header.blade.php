<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">

                    {{-- LOGO --}}
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('assets/images/logo_matana.png') }}" alt="MATANA">
                    </a>

                    {{-- MENU --}}
                    <ul class="nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/information">Information</a></li>
                        <li><a href="/forum">Forum</a></li>
                        <li><a href="/profil">Profil</a></li>
                        <li><a href="/jobs">List Jobs</a></li>
                    </ul>

                    {{-- MOBILE --}}
                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>

                </nav>
            </div>
        </div>
    </div>
</header>
