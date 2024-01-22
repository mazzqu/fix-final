<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{ route('home') }}" class="logo d-flex align-items-center">

		<!-- Navbar shows -->
      <h1 class="d-flex align-items-center">MindLink Blog</h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show fa-solid fa-bars"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none fa-solid fa-xmark"></i>

    <nav id="navbar" class="navbar">
      <ul>
        <li>
          <a href="{{ route('home') }}" @if(Request::segment('1') == '') class="active" @endif>
            ホーム
          </a>
        </li>
        @guest
          <li>
            <a href="{{ route('login') }}">
              ログイン
            </a>
          </li>
        @endguest

        @auth
          <li>
            <a href="{{ route('dashboard') }}">
						Dashboard
            </a>
          </li>
					<li>
						<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							Logout
						</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					<!--  to handle Cross-Site Request Forgery protection. -->
						@csrf
					</form>
   			</li>
        @endauth
      </ul>
    </nav><!-- .navbar -->

  </div>
</header>

