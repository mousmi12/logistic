<header class="section-nav-menu" id="top-section">
    <div class="container">
        <div class="headerItems">
            <div class="logowrap">
                <a href="{{ url('/') }}" class="">
                    <img src="{{asset('assets/Images/Logo/Logo-eximnew.png')}}" alt="" srcset=""
                        class="logoImageSize" />
                </a>
            </div>           
            <div class="nav-links">
                <a class="headerlink {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                <a class="headerlink {{ Request::is('aboutus') ? 'active' : '' }}" href="{{ route('aboutus') }}">Who We
                    Are</a>
                <a class="headerlink {{ Request::is('service') ? 'active' : '' }}"
                    href="{{ route('service') }}">Services</a>
                <div class="dropdown">
                    <a class="headerlink dropdown-toggle {{ Request::is('resource*') || Request::is('container*') || Request::routeIs('resource') || Request::routeIs('container') ? 'active' : '' }}"
                        href="#"
                        id="resourceDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Resource
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="resourceDropdown">
                        <li><a class="dropdown-item {{ Request::routeIs('resource') ? 'active' : '' }}"
                                href="{{ route('resource') }}">INCO Terms</a></li>
                        <li><a class="dropdown-item {{ Request::routeIs('container') ? 'active' : '' }}"
                                href="{{ route('container') }}">Container Specification</a></li>
                        <li>
                            <a class="dropdown-item"
                                href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/converter"
                                target="_blank">Measurement Convertor</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/sea_port"
                                target="_blank">World Sea Ports</a></li>
                        <li><a class="dropdown-item"
                                href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/air_port"
                                target="_blank">World Air Ports</a>
                        </li>
                    </ul>
                </div>

                <a class="headerlink {{ Request::is('findus') ? 'active' : '' }}" href="{{ route('findus') }}">Find
                    Us</a>
            </div>
        </div>
    </div>
</header>

<header class="mobil-section-nav-menu">
    <div class="container">
        <div class="container-logo">
            <a href="{{ url('/') }}">
                <img src="{{asset('assets/Images/Logo/Logo-eximnew.png')}}" alt="" srcset="" />
            </a>
        </div>
        <div class="container-menu-arrow">
            <button id="toggleButton" onclick="toggleMenu()">
                <i class="bi bi-justify-right"></i>
            </button>
        </div>
    </div>
    <div class="nav-links-main">
        <div class="nav-links">
            <div class="d-flex justify-content-between">
                <button onclick="toggleMenu()">
                    <i class="bi bi-x-lg"></i>
                </button>
                <a class="headerlink {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            </div>
            <a class="headerlink {{ Request::is('aboutus') ? 'active' : '' }}" href="{{ route('aboutus') }}">Who We
                Are</a>
            <a class="headerlink {{ Request::is('service') ? 'active' : '' }}"
                href="{{ route('service') }}">Services</a>
                <div class="dropdown">
                    <a class="headerlink dropdown-toggle {{ Request::is('resource*') || Request::is('container*') || Request::routeIs('resource') || Request::routeIs('container') ? 'active' : '' }}"
                        href="#"
                        id="resourceDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Resource
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="resourceDropdown">
                        <li><a class="dropdown-item {{ Request::routeIs('resource') ? 'active' : '' }}"
                                href="{{ route('resource') }}">INCO Terms</a></li>
                        <li><a class="dropdown-item {{ Request::routeIs('container') ? 'active' : '' }}"
                                href="{{ route('container') }}">Container Specification</a></li>
                        <li>
                            <a class="dropdown-item"
                                href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/converter"
                                target="_blank">Measurement Convertor</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/sea_port"
                                target="_blank">World Sea Ports</a></li>
                        <li><a class="dropdown-item"
                                href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/air_port"
                                target="_blank">World Air Ports</a>
                        </li>
                    </ul>
                </div>
            <a class="headerlink {{ Request::is('findus') ? 'active' : '' }}" href="{{ route('findus') }}">Find Us</a>
        </div>
    </div>
</header>