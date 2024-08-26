<header class="">
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
        <a class="headerlink {{ Request::is('aboutus') ? 'active' : '' }}" href="{{ route('aboutus') }}">Who We Are</a>
        <a class="headerlink {{ Request::is('services') ? 'active' : '' }}" href="#">Services</a>
        <a class="headerlink {{ Request::is('findus') ? 'active' : '' }}" href="#">Find Us</a>
          </div>
        </div>
      </div>
    </header>
