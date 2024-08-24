<!DOCTYPE html>
<html lang="en">
@include('header')

<body>

    @include('menu')
    <section class="banner-section">
        <img class="fade-in" src="{{asset('assets/Images/website-images/mainBaner.jpg')}}" alt="mainBaner" />
        <div class="wrapper">
            <div class="container">
                <div class="banner-content">
                    <div class="bannner-text">
                        <h1 class="text-white banner-text-size fade-in delay-1">Lorem Ipsum</h1>
                        <h1 class="text-white banner-text-size fade-in delay-2">Nulla ut Convallis</h1>
                    </div>
                    <button class="btn-typ1 fade-in delay-3">
                        Track Your Shipment
                        <i class="bi bi-chevron-right arrowbolder"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="what-we-provide">
        <div class="container">
            <h2 class="hd-typ1 text-center what-we-provide-text-size fade-in">
                What <span class="text-red hd-span-color">We Provide</span>
            </h2>
            <div class="intro-txt fade-in delay-1">
                Sed cursus nulla ligula, vel luctus est auctor tincidunt. Fusce eu
                purus at quam tristique ultrices. Curabitur quis iaculis nulla.
                Maecenas consectetur quam quis turpis rhoncus tincidunt.
            </div>
            <div class="img-wrap row">
                <div class="col-md-6 cols">
                    <div class="item fade-in delay-2">
                        <img src="{{asset('assets/Images/website-images/dangerous-goods.webp')}}" alt="" />
                    </div>
                </div>
                <div class="col-md-3 cols">
                    <div class="item fade-in delay-2">
                        <img src="{{asset('assets/Images/website-images/cargo-plane-loading-runway-with-packages.jpg')}}" alt="" />
                    </div>
                    <div class="item fade-in delay-3">
                        <img src="{{asset('assets/Images/website-images/container-ship-is-being-unloaded-harbor-sunny-weather.jpg')}}" alt="" />
                    </div>
                </div>
                <div class="col-md-3 cols">
                    <div class="item fade-in delay-3">
                        <img src="{{asset('assets/Images/website-images/white-truck-highway-road-with-container-transportation-concept-import-export-logistic-industrial-transporting-land-transport-expressway-motion-blurred-soft-focus.jpg')}}"
                            alt="" />
                    </div>
                    <div class="item fade-in delay-3">
                        <img src="{{asset('assets/Images/website-images/endless-rows-vast-industrial-warehouse.jpg')}}"
                            alt="" />
                    </div>
                    <button class="btn-typ2">Know more</button>
                </div>
            </div>
        </div>
    </section>
    <section class="why-choose-exim">
    <div class="container">
        <div class="col-md-6 cols">
            <h1 class="why-choose-exim-text-color fade-in">Why Choose EXIM</h1>
            <h1 class="fade-in delay-1">Global Freight</h1>
            <h1 class="fade-in delay-2">Forwarding Solutions</h1>
        </div>
        <div class="col-md-6 cols">
            <p class="fade-in delay-3">
                Praesent sem neque, dapibus et felis ut, rutrum mollis lectus.
                Curabitur ut dapibus quam, id efficitur neque. Integer placerat
                viverra est sed commodo. Sed cursus nulla ligula, vel luctus est
                auctor tincidunt. Fusce eu purus at quam tristique ultrices.
                Curabitur quis iaculis nulla. Maecenas consectetur quam quis turpis
                rhoncus tincidunt
            </p>
        </div>
    </div>
    <div class="img-container">
        <div class="items-image fade-in delay-1">
            <img src="{{asset('assets/Images/website-images/closeup-pile-coins-with-carton-boxes-forklift-vehicle.jpg')}}"
                alt="" srcset="" />
        </div>
        <div class="items-image fade-in delay-2">
            <img src="{{asset('assets/Images/website-images/woman-wearing-safety-cap-work.jpg')}}" alt=""
                srcset="" />
        </div>
        <div class="items-image fade-in delay-3">
            <img src="{{asset('assets/Images/website-images/low-angle-view-happy-senior-manager-greeting-his-employees-factory-warehouse-me-are-shaking-hands.jpg')}}"
                alt="" srcset="" />
        </div>
    </div>
</section>
<section class="service-section-arround">
    <div class="container">
        <div class="service-section">
            <h1 class="fade-in">Serving <span class="fade-in delay-1">Around the Globe</span></h1>
            <p class="fade-in delay-2">
                Nullam rutrum nisi risus, sit amet semper odio finibus nec.
                Pellentesque habitant morbi tristique senectus et netus et malesuada
                fames ac turpis egestas. Curabitur massa nibh, tempus at tincidunt
                et, pellentesque nec urna. Nam quis ultricies risus. Integer ut mi
                elit. Aliquam ut nisl eget felis semper pharetra. Integer vitae nibh
                varius, tempus nulla ac, ullamcorper tortor. Curabitur bibendum
                posuere hendrerit.
            </p>
        </div>
    </div>
    <img class="fade-in delay-3" src="{{asset('assets/Images/website-images/map-01.png')}}" alt="mainBaner" />
</section>

<section class="how-we-work">
    <div class="fade-in">
        <img src="{{asset('assets/Images/website-images/shipBanner.jpg')}}" alt="" srcset="" />
    </div>

    <div class="how-we-work-content container">
        <div class="how-we-work-heading col-md-8 cols">
            <h1 class="fade-in delay-1">How We Work</h1>
        </div>
        <div class="how-to-work-status col-md-4 cols">
            <div class="status-item fade-in delay-2">
                <div class="status-item-first-section">
                    <div>
                        <button>01</button>
                    </div>
                    <div class="icon-align"><i class="bi bi-arrow-down"></i></div>
                </div>
                <div class="status-item-second-section">
                    <h1>Order Placement:</h1>
                    <p>Ut ut maximus sem, vel accumsan nulla.</p>
                </div>
            </div>
            <div class="status-item fade-in delay-3">
                <div class="status-item-first-section">
                    <div>
                        <button>02</button>
                    </div>
                    <div class="icon-align"><i class="bi bi-arrow-down"></i></div>
                </div>
                <div class="status-item-second-section">
                    <h1>Route Planning</h1>
                    <p>In ultricies tellus nec metus egestas, quis mollis est.</p>
                </div>
            </div>
            <div class="status-item fade-in delay-4">
                <div class="status-item-first-section">
                    <div>
                        <button>03</button>
                    </div>
                    <div class="icon-align"><i class="bi bi-arrow-down"></i></div>
                </div>
                <div class="status-item-second-section">
                    <h1>Transportation</h1>
                    <p>Ut ut maximus sem, vel accumsan nulla.</p>
                </div>
            </div>
            <div class="status-item fade-in delay-5">
                <div class="status-item-first-section">
                    <div>
                        <button>04</button>
                    </div>
                    <div class="icon-align"><i class="bi bi-arrow-down"></i></div>
                </div>
                <div class="status-item-second-section">
                    <h1>Monitoring</h1>
                    <p>In ultricies tellus nec metus egestas, quis mollis est.</p>
                </div>
            </div>
            <div class="status-item fade-in delay-6">
                <div class="status-item-first-section">
                    <div>
                        <button>05</button>
                    </div>
                    <div class="icon-align"><i class="bi bi-arrow-down"></i></div>
                </div>
                <div class="status-item-second-section">
                    <h1>Delivery & Confirmation</h1>
                    <p>Ut ut maximus sem, vel accumsan nulla.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="group-of-Companies">
        <div class="container">
            <div class="h1-text">
                <h1>Group <span>of Companies</span></h1>
            </div>
            <div class="comapanies-container">
                <div class="image-lable">
                    <div class="item-image">
                        <img src="{{asset('assets/Images/Logo/Logo-02.png')}}" alt="" srcset="" />
                    </div>
                    <label>IMEX CARGO LLC</label>
                </div>
                <div class="image-lable">
                    <div class="item-image">
                        <img src="{{asset('assets/Images/Logo/Logo-01.png')}}" alt="" srcset="" />
                    </div>
                    <label>EXIM CLEARING & FROWARDING LLC</label>
                </div>
                <div class="image-lable">
                    <div class="item-image">
                        <img src="{{asset('assets/Images/Logo/Logo-03.png')}}" alt="" srcset="" />
                    </div>
                    <label>FAST RIDE SHIPPING LLC</label>
                </div>
            </div>
        </div>
    </section>

    <section class="find-us">
        <div class="main-class container">
            <div class="find-us-heading col-md-6 cols">
                <div class="heading">
                    <div>
                        <h1>Find Us</h1>
                    </div>
                    <div>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-twitter-x"></i>
                        <i class="bi bi-linkedin"></i>
                        <!-- <i class="bi bi-youtube"></i> -->
                    </div>
                </div>
                <div class="button-heading">
                    <div>
                        <h1>For latest</h1>
                        <h1>news & updates</h1>
                        <h1>follow us on</h1>
                    </div>
                    <div>
                        <button><i class="bi bi-facebook"></i> EXIM</button>
                        <button><i class="bi bi-instagram"></i>exim</button>
                    </div>
                </div>
            </div>
            <div class="image-group col-md-6 cols">
                <div class="column-one">
                    <div class="imag-item">
                        <img src="{{asset('assets/Images/website-images/SM-01.jpg')}}" alt="" srcset="" />
                    </div>

                    <div class="imag-item">
                        <img src="{{asset('assets/Images/website-images/SM-02.jpg')}}" alt="" srcset="" />
                    </div>
                </div>

                <div class="column-two">
                    <div class="imag-item">
                        <img src="{{asset('assets/Images/website-images/SM-03.jpg')}}" alt="" srcset="" />
                    </div>

                    <div class="imag-item">
                        <img src="{{asset('assets/Images/website-images/SM-04.jpg')}}" alt="" srcset="" />
                    </div>
                </div>
                <div class="column-three">
                    <div class="imag-item">
                        <img src="{{asset('assets/Images/website-images/SM-05.jpg')}}" alt="" srcset="" />
                    </div>
                    <div class="imag-item">
                        <img src="{{asset('assets/Images/website-images/SM-06.jpg')}}" alt="" srcset="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="track-your-shipment">
        <img src="{{asset('assets/Images/website-images/container-operation.jpg')}}" alt="mainBaner" />

        <div class="Shipment container">
            <div class="shipment-order">
                <div class="track-Your-order">
                    <h1><span>Track </span>Your Shipment</h1>
                </div>
                <div class="track-div">
                    <div class="track-status">
                        <a class="a-link active-link" href="#">Mobile</a>
                        <a href="#" class="a-link">AWB</a>
                        <a href="#" class="a-link"> Order</a>
                        <a href="#" class="a-link"> ID LRN</a>
                    </div>
                    <div class="track-input-box">
                        <input type="text" placeholder="Enter Yout Mobile Number" />
                    </div>
                    <div>
                        <button class="track-button">Get OTP</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')
    @include('js')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.fade-in');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('loaded');
                }
            });
        }, { threshold: 0.1 });

        elements.forEach(element => {
            observer.observe(element);
        });
    });
    </script>
</body>

</html>