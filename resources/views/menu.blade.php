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
                <a class="headerlink {{ Request::is('service') ? 'active' : '' }}" href="{{ route('service') }}">Services</a>
                <div class="dropdown">
                    <a
                        class="headerlink dropdown-toggle {{ Request::is('resource*') || Request::is('container*') || Request::routeIs('resource') || Request::routeIs('container') ? 'active' : '' }}"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Resource
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item {{ Request::routeIs('resource') ? 'active' : '' }}" href="{{ route('resource') }}">INCO Terms</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ Request::routeIs('container') ? 'active' : '' }}" href="{{ route('container') }}">Container Specification</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/converter" target="_blank">Measurement Convertor</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/sea_port" target="_blank">World Sea Ports</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/air_port" target="_blank">World Air Ports</a>
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
            <button id="toggleButton" class="menu-open" onclick="toggleMenu()">
                <i class="bi bi-justify-right"></i>
            </button>
            <button class="menu-close" onclick="toggleMenu()">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
    </div>
    <div class="nav-links-main">
        <div class="nav-links">
            <a class="headerlink {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}" data-route="home">
                <i class="bi bi-caret-right-fill"></i> Home</a>
            <a class="headerlink {{ Request::is('aboutus') ? 'active' : '' }}" href="{{ route('aboutus') }}" data-route="aboutus">
                <i class="bi bi-caret-right-fill"></i> Who We Are</a>
            <a class="headerlink {{ Request::is('service') ? 'active' : '' }}" href="{{ route('service') }}" data-route="service">
                <i class="bi bi-caret-right-fill"></i> Services</a>
            <a class="headerlink {{ Request::is('resource') ? 'active' : '' }}" href="#" data-route="resource" onclick="toggleResource(event)">
                <i class="bi bi-caret-right-fill"></i> Resource
                <label class="bi bi-caret-down-fill mt-1 ms-1"></label>
            </a>
            <ul class="list-resource" id="resourceSubmenu">
                <a class="headerlink" href="{{ route('resource') }}" data-route="resource.incoterms">
                    <i class="bi bi-caret-right-fill"></i> INCO Terms</a>
                <a class="headerlink" href="{{ route('container') }}" data-route="resource.container">
                    <i class="bi bi-caret-right-fill"></i> Container Specification</a>
                <a class="headerlink" href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/converter"
                    target="_blank" data-route="resource.converter">
                    <i class="bi bi-caret-right-fill"></i> Measurement Convertor</a>
                <a class="headerlink" href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/sea_port"
                    target="_blank" data-route="resource.seaports">
                    <i class="bi bi-caret-right-fill"></i> World Sea Ports</a>
                <a class="headerlink" href="https://track.fresatechnologies.com/ords/r/fresaportal1/fresaonlinetracking/air_port"
                    target="_blank" data-route="resource.airports">
                    <i class="bi bi-caret-right-fill"></i> World Air Ports</a>
            </ul>
            <a class="headerlink" href="{{ route('findus') }}" data-route="findus">
                <i class="bi bi-caret-right-fill"></i> Find Us</a>
        </div>
    </div>
</header>