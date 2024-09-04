<!-- <header class="">
      <div class="container">
        <div class="headerItems">
          <div class="logowrap">
            <a href="#" class="">
              <img
                src="{{asset('assets/Images/Logo/Logo-eximnew.png')}}"

                alt=""
                srcset=""
                class="logoImageSize"
              />
            </a>
          </div>
          <div class="nav-links">
          <a class="headerlink {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
        <a class="headerlink {{ Request::is('/aboutus') ? 'active' : '' }}" href="{{ route('aboutus') }}">Who We Are</a>
        <a class="headerlink {{ Request::is('/service') ? 'active' : '' }}" href="{{ route('service') }}">Services</a>
        <a class="headerlink {{ Request::is('findus') ? 'active' : '' }}" href="#">Find Us</a>
          </div>
        </div>
      </div>
    </header> -->
<header class="section-nav-menu">
    <div class="container">
        <div class="headerItems">
            <div class="logowrap">
                <a href="{{ url('/') }}" class="">
                    <img
                        src="{{asset('assets/Images/Logo/Logo-eximnew.png')}}"
                        alt=""
                        srcset=""
                        class="logoImageSize" />
                </a>
            </div>
            <!-- <div>
            <i class="bi bi-list"></i>
          </div> -->
            <div class="nav-links">
                <a class="headerlink {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                <a class="headerlink {{ Request::is('aboutus') ? 'active' : '' }}" href="{{ route('aboutus') }}">Who We Are</a>
                <a class="headerlink {{ Request::is('service') ? 'active' : '' }}" href="{{ route('service') }}">Services</a>
                <a class="headerlink {{ Request::is('findus') ? 'active' : '' }}" href="{{ route('findus') }}">Find Us</a>
            </div>

        </div>
    </div>
</header>

<header class="mobil-section-nav-menu">
    <div class="container">
        <div class="container-logo">
            <img
                src="{{asset('assets/Images/Logo/Logo-eximnew.png')}}"
                alt=""
                srcset="" />
        </div>
        <div class="container-menu-arrow">
            <button id="toggleButton" onclick="toggleMenu()">
                <i class="bi bi-justify-right"></i>
            </button>
        </div>
    </div>
    <div class="nav-links-main">
        <div class="nav-links">
            <a class="headerlink {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            <a class="headerlink {{ Request::is('aboutus') ? 'active' : '' }}" href="{{ route('aboutus') }}">Who We Are</a>
            <a class="headerlink {{ Request::is('service') ? 'active' : '' }}" href="{{ route('service') }}">Services</a>
            <a class="headerlink {{ Request::is('findus') ? 'active' : '' }}" href="{{ route('findus') }}">Find Us</a>
        </div>
    </div>
</header>
