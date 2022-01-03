
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">Zunder<span>Zifflin</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
          <li class="{{ request()->is('product') ? 'active' : '' }}">
            <a href="/product">Product</a>
          </li>
          <li class="{{ request()->is('company') ? 'active' : '' }}">
            <a href="/company">Company Profile</a>
          </li>
          <li class="{{ request()->is('contact') ? 'active' : '' }}">
            <a href="/contact">Contact Us</a>
          </li>
          @guest
          <div class="{{ request()->is('masuk') ? 'active' : '' }} loginbtn"><a href="{{ route('login') }}"><button class="login_button">Login</button></a></div>
          <li>
            <ul>
              @if (Route::has('register'))
                <li><a href="{{ route('register') }}">{{ __('Registrasi') }}</a></li>            
              @endif
              @else
              <li class="drop-down"><a role="button">{{ Auth::user()->name }}</a>
                    <ul>
                        <a href="{{ url('profile') }}">
                          Profile
                        </a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Keluar') }}
                        </a>
                        <form id="logout-form" style="text-align:center;" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
              </li>
              @endguest


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  