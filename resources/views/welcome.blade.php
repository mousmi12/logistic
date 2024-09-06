<!DOCTYPE html>
<html lang="en">
@include('header')

<body>

    @include('menu')

    <section class="scroll-section">
        <div class="banner-section">
            <img src="{{asset('assets/Images/Slider/slider-one.JPG')}}" alt="mainBaner" />
            <div class="wrapper">
                <div class="container">
                    <div class="banner-content">
                        <div class="bannner-text">
                            <h1 class="text-white banner-text-size">Beyond Borders</h1>
                            <h1 class="text-white banner-text-size">Beyond Expectations</h1>
                        </div>
                        <a href="#track-section" class="btn-typ1">
                            Track Your Shipment
                            <i class="bi bi-chevron-right arrowbolder"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-section">
            <img src="{{asset('assets/Images/Slider/slider-two.jpg')}}" alt="mainBaner" />
            <div class="wrapper">
                <div class="container">
                    <div class="banner-content">
                        <div class="bannner-text">
                            <h1 class="text-white banner-text-size">
                                Carving the Fastest Routes,
                            </h1>
                            <h1 class="text-white banner-text-size">
                                Rolling Strong Delivering on Time
                            </h1>
                        </div>
                        <a href="#track-section" class="btn-typ1">
                            Track Your Shipment
                            <i class="bi bi-chevron-right arrowbolder"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-section">
            <img src="{{asset('assets/Images/Slider/slider-three.jpg')}}" alt="mainBaner" />
            <div class="wrapper">
                <div class="container">
                    <div class="banner-content">
                        <div class="bannner-text">
                            <h1 class="text-white banner-text-size">
                                Trust the skies. Trust us.
                            </h1>
                            <h1 class="text-white banner-text-size">
                                EXIM Covers Every Corner
                            </h1>
                        </div>
                        <a href="#track-section" class="btn-typ1">
                            Track Your Shipment
                            <i class="bi bi-chevron-right arrowbolder"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    <section class="scroll-section">-->
    <!--        <div class="banner-section">-->
    <!--            <img src="{{asset('assets/Images/Slider/slider-one.JPG')}}" alt="mainBaner" />-->
    <!--            <div class="wrapper">-->
    <!--                <div class="container">-->
    <!--                    <div class="banner-content">-->
    <!--                        <div class="bannner-text">-->
    <!--                            <h1 class="text-white banner-text-size fade-in delay-1">Beyond Borders</h1>-->
    <!--                            <h1 class="text-white banner-text-size fade-in delay-2">Beyond Expectations</h1>-->
    <!--                        </div>-->
    <!--                        <a href="#track-section" class="btn-typ1 fade-in delay-3">-->
    <!--                            Track Your Shipment-->
    <!--                            <i class="bi bi-chevron-right arrowbolder"></i>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="banner-section">-->
    <!--            <img src="{{asset('assets/Images/Slider/slider-two.jpg')}}" alt="mainBaner" />-->
    <!--            <div class="wrapper">-->
    <!--                <div class="container">-->
    <!--                    <div class="banner-content">-->
    <!--                        <div class="bannner-text">-->
    <!--                            <h1 class="text-white banner-text-size fade-in delay-1">-->
    <!--                            Carving the Fastest Routes -->

    <!--</h1>-->
    <!--                            <h1 class="text-white banner-text-size fade-in delay-2">-->
    <!--                             Rolling Strong, Delivering on Time-->
    <!--                            </h1>-->
    <!--                        </div>-->
    <!--                        <a href="#track-section" class="btn-typ1 fade-in delay-3">-->
    <!--                            Track Your Shipment-->
    <!--                            <i class="bi bi-chevron-right arrowbolder"></i>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="banner-section">-->
    <!--            <img src="{{asset('assets/Images/Slider/slider-three.jpg')}}" alt="mainBaner" />-->
    <!--            <div class="wrapper">-->
    <!--                <div class="container">-->
    <!--                    <div class="banner-content">-->
    <!--                        <div class="bannner-text">-->
    <!--                            <h1 class="text-white banner-text-size fade-in delay-1">-->
    <!--                                Trust the skies. Trust us.-->
    <!--                            </h1>-->
    <!--                            <h1 class="text-white banner-text-size fade-in delay-2">-->
    <!--                                EXIM Covers Every Corner-->
    <!--                            </h1>-->
    <!--                        </div>-->
    <!--                        <a href="#track-section" class="btn-typ1 fade-in delay-3">-->
    <!--                            Track Your Shipment-->
    <!--                            <i class="bi bi-chevron-right arrowbolder"></i>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->


    <!-- <section class="what-we-provide">
        <div class="container">
            <h2 class="hd-typ1 text-center what-we-provide-text-size fade-in">
                How Do We
                <span class="text-red hd-span-color fade-in delay-1"> Connect Your World ?</span>
            </h2>
            <div class="intro-txt fade-in delay-2">
                We specialize in connecting your freight to every corner of the world
                with customized logistics solutions. From smooth air and ocean freight
                to reliable land transport and secure warehousing, we ensure your
                goods—even the most sensitive and hazardous ones—are treated with the
                care and expertise they deserve.
            </div>
            <div class="img-wrap row">
                <div class="col-md-6 cols">
                    <div class="item fade-in delay-2">
                        <img src="{{asset('assets/Images/website-images/dangerous-goods.jpeg')}}" alt="" />
                        <div class="img-label">Dangerous Goods</div>
                    </div>
                </div>
                <div class="col-md-3 cols">
                    <div class="item fade-in delay-2">
                        <img src="{{asset('assets/Images/website-images/img-4.jpg')}}" alt="" />
                        <div class="img-label">Air Freight</div>
                    </div>
                    <div class="item fade-in delay-3">
                        <img src="{{asset('assets/Images/website-images/img-5.jpg')}}" alt="" />
                        <div class="img-label">Ocean Freight</div>
                    </div>
                </div>
                <div class="col-md-3 cols">
                    <div class="item fade-in delay-3">
                        <img src="{{asset('assets/Images/website-images/img-6.jpeg')}}"
                            alt="" />
                        <div class="img-label">Road Freight</div>
                    </div>
                    <div class="item fade-in delay-3">
                        <img src="{{asset('assets/Images/website-images/img-7.jpg')}}"
                            alt="" />
                        <div class="img-label">Warehouse</div>
                    </div>
                    <button class="btn-typ2">Know more</button>
                </div>
            </div>
        </div>
    </section> -->
    <section class="what-we-provide">
        <div class="container">
            <h2 class="hd-typ1 text-center what-we-provide-text-size fade-in">
                How Do We
                <span class="text-red hd-span-color fade-in delay-1"> Connect Your World ?</span>
            </h2>
            <div class="intro-txt fade-in delay-2">
                We specialize in connecting your freight to every corner of the world
                with customized logistics solutions. From smooth air and ocean freight
                to reliable land transport and secure warehousing, we ensure your
                goods-even the most sensitive and hazardous ones-are treated with the
                care and expertise they deserve.
            </div>
            <div class="img-wrap row">
                <div class="col-md-6 cols">
                    <div class="item fade-in delay-3">
                    <a href="{{ route('service') }}#road-freight">
                    <img src="{{asset('assets/Images/website-images/img-6.jpeg')}}" alt="" /> </a>
                        <div class="img-label">Road Freight</div>

                    </div>
                </div>
                <div class="col-md-3 cols">
                    <div class="item fade-in delay-2">
                    <a href="{{ route('service') }}#air-freight">
                        <img src="{{asset('assets/Images/website-images/img-4.jpg')}}" alt="" /></a>
                        <div class="img-label">Air Freight</div>

                    </div>
                    <div class="item fade-in delay-3">
                    <a href="{{ route('service') }}#ocean-freight">
                        <img src="{{asset('assets/Images/website-images/img-5.jpg')}}" alt="" /> </a>
                        <div class="img-label">Ocean Freight</div>

                    </div>
                </div>
                <div class="col-md-3 cols">
                    <div class="item fade-in delay-4">
                    <a href="{{ route('service') }}#dangerous-goods">
                        <img
                            src="{{asset('assets/Images/website-images/dangerous-goods.jpeg')}}"
                            alt="" />
                    </a>
                        <div class="img-label ">Dangerous Goods</div>

                    </div>
                    <div class="item fade-in delay-4">
                    <a href="{{ route('service') }}#warehouse">
                        <img src="{{asset('assets/Images/website-images/img-7.jpg')}}" alt="" /></a>
                        <div class="img-label">Warehouse</div>

                    </div>

                    <button class="btn-typ2" id="knowMoreButton">Know more</button>
                </div>
            </div>
        </div>
    </section>
    <section class="why-choose-exim">
        <div class="container">
            <div class="col-md-6 cols">
                <h1 class="why-choose-exim-text-color fade-in">What Makes EXIM</h1>
                <h1 class="fade-in delay-1">the Best Choice</h1>
                <h1 class="fade-in delay-2">for Your Freight Needs ?</h1>
            </div>
            <div class="col-md-6 cols fade-in delay-3">
                <p>
                    We combine profitable solutions with incomparable security to offer
                    you the best in freight forwarding. Our proven acquaintance and
                    efficient logistics network ensure that every shipment is directed
                    with precision, serving you with peace of mind and significant
                    savings. Trust EXIM to deliver excellence and reliability, making us
                    the preeminent choice for all your freight needs.
                </p>
            </div>
        </div>
        <div class="img-container">
            <div class="items-image fade-in delay-1">
                <img src="{{asset('assets/Images/website-images/img-3.jpeg')}}"
                    alt="" srcset="" />
                <div class="img-label">Cost Savings</div>
            </div>
            <div class="items-image fade-in delay-2">
                <img src="{{asset('assets/Images/website-images/img-2.jpg')}}" alt=""
                    srcset="" />
                <div class="img-label">Secure Services</div>
            </div>
            <div class="items-image fade-in delay-3">
                <img src="{{asset('assets/Images/website-images/img-1.jpeg')}}"
                    alt="" srcset="" />
                <div class="img-label">Proven Experience</div>
            </div>
        </div>
    </section>
    <section class="service-section-arround">
        <div class="container">
            <div class="service-section">
                <h1 class="fade-in">Serving <span class="fade-in delay-1">Around the Globe</span></h1>
                <p class="fade-in delay-2">
                    Picture this: your cargo, aptly navigated through air, sea, and
                    land, arriving accurately when and where it's needed-whether it's
                    just down the road or halfway around the globe. Yes, we simplify the
                    intricacy of international logistics into a seamless journey,
                    ensuring your cargo traverses the world with unparalleled efficiency
                    and reliability. With EXIM, every journey is a promise fulfilled,
                    connecting your world like never before.
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
                        <p>Easily place your order through our intuitive system.</p>
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
                        <p>We craft the best route for efficient delivery.</p>
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
                        <p>Your cargo is transported securely and reliably.</p>
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
                        <p>Real-time updates on your shipment.</p>
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
                        <p>Receive your cargo and confirmation promptly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="group-of-Companies">
        <div class="container">
            <div class="h1-text">
                <h1 class="fade-in">Our Group <span class="fade-in delay-1">of Companies</span></h1>
                <!-- <h1 class="fade-in">Group <span class="fade-in delay-1">of Companies</span></h1> -->
            </div>
            <div class="comapanies-container">
                <div class="image-lable fade-in delay-2">
                    <div class="item-image">
                        <img src="{{asset('assets/Images/Logo/Logo-02.png')}}" alt="" srcset="" />
                    </div>
                    <label>IMEX CARGO LLC</label>
                </div>
                <div class="image-lable fade-in delay-3">
                    <div class="item-image">
                        <img src="{{asset('assets/Images/Logo/Logo-01.png')}}" alt="" srcset="" />
                    </div>
                    <label>EXIM CLEARING & FROWARDING LLC</label>
                </div>
                <div class="image-lable fade-in delay-4">
                    <div class="item-image">
                        <img src="{{asset('assets/Images/Logo/Logo-03.png')}}" alt="" srcset="" />
                    </div>
                    <label>FAST RIDE SHIPPING LLC</label>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="find-us">
        <div class="main-class container">
            <div class="find-us-heading col-md-6 cols">
                <div class="heading fade-in">
                    <div>
                        <h1>Find Us</h1>
                    </div>
                    <div class="fade-in delay-1">
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-twitter-x"></i>
                        <i class="bi bi-linkedin"></i>

                    </div>
                </div>
                <div class="button-heading fade-in delay-2">
                    <div>
                        <h1>For latest</h1>
                        <h1>news & updates</h1>
                        <h1>follow us on</h1>
                    </div>
                    <div class="fade-in delay-3">
                        <button><i class="bi bi-facebook"></i> EXIM</button>
                        <button style="background-color: rgb(43, 45, 66);"><i class="bi bi-instagram"></i>exim</button>
                    </div>
                </div>
            </div>
            <div class="image-group col-md-6 cols">
                <div class="column-one">
                    <div class="imag-item fade-in delay-1">
                        <img src="{{asset('assets/Images/website-images/SM-01.jpg')}}" alt="" srcset="" />
                    </div>
                    <div class="imag-item fade-in delay-2">
                        <img src="{{asset('assets/Images/website-images/SM-02.jpg')}}" alt="" srcset="" />
                    </div>
                </div>
                <div class="column-two">
                    <div class="imag-item fade-in delay-2">
                        <img src="{{asset('assets/Images/website-images/SM-03.jpg')}}" alt="" srcset="" />
                    </div>
                    <div class="imag-item fade-in delay-3">
                        <img src="{{asset('assets/Images/website-images/SM-04.jpg')}}" alt="" srcset="" />
                    </div>
                </div>
                <div class="column-three">
                    <div class="imag-item fade-in delay-3">
                        <img src="{{asset('assets/Images/website-images/SM-05.jpg')}}" alt="" srcset="" />
                    </div>
                    <div class="imag-item fade-in delay-4">
                        <img src="{{asset('assets/Images/website-images/SM-06.jpg')}}" alt="" srcset="" />
                    </div>
                </div>
            </div>
        </div>
    </section>  -->


    <!-- <section class="find-us">
      <div class="main-class container">
        <div class="find-us-heading col-md-3 cols">
          <div class="heading fade-in">
            <div>
              <h1>Find <span>Us</span></h1>
            </div>
            <div class="fade-in delay-1">
              <i class="bi bi-facebook"></i>
              <i class="bi bi-instagram"></i>
              <i class="bi bi-twitter-x"></i>
              <i class="bi bi-linkedin"></i>
              <i class="bi bi-youtube"></i>
            </div>
          </div>
          <div class="button-heading fade-in delay-2">
            <div>
              <h1>For latest</h1>
              <h1>news & updates</h1>
              <h1>follow us on</h1>
            </div>
            <div class="fade-in delay-3">
              <button><i class="bi bi-facebook"></i> EXIM</button>
              <button><i class="bi bi-instagram"></i>exim</button>
            </div>
          </div>
        </div>
        <div class="col-md-3 cols">
          <div class="mobile-png fade-in delay-2">
            <img
              src="{{asset('assets/Images/website-images/mobile.png')}}"
              alt=""
              srcset=""
            />
            <div class="video-label">
              <h1>Vi<span>deo</span></h1>
            </div>
          </div>
        </div>
        <div class="image-group col-md-6 cols">
                <div class="column-one">
                    <div class="imag-item fade-in delay-1">
                        <img src="{{asset('assets/Images/website-images/SM-01.jpg')}}" alt="" srcset="" />
                    </div>
                    <div class="imag-item fade-in delay-2">
                        <img src="{{asset('assets/Images/website-images/SM-02.jpg')}}" alt="" srcset="" />
                    </div>
                </div>
                <div class="column-two">
                    <div class="imag-item fade-in delay-2">
                        <img src="{{asset('assets/Images/website-images/SM-03.jpg')}}" alt="" srcset="" />
                    </div>
                    <div class="imag-item fade-in delay-3">
                        <img src="{{asset('assets/Images/website-images/SM-04.jpg')}}" alt="" srcset="" />
                    </div>
                </div>
                <div class="column-three">
                    <div class="imag-item fade-in delay-3">
                        <img src="{{asset('assets/Images/website-images/SM-05.jpg')}}" alt="" srcset="" />
                    </div>
                    <div class="imag-item fade-in delay-4">
                        <img src="{{asset('assets/Images/website-images/SM-06.jpg')}}" alt="" srcset="" />
                    </div>
                </div>
            </div>
      </div>
    </section> -->

    <!-- <section class="find-us">
      <div class="main-class container">
        <div class="find-us-heading col-md-3 cols">
          <div class="heading fade-in">
            <div>
              <h1>Find <span>Us</span></h1>
            </div>
            <div class="fade-in delay-1">
              <i class="bi bi-facebook"></i>
              <i class="bi bi-instagram"></i>
              <i class="bi bi-twitter-x"></i>
              <i class="bi bi-linkedin"></i>

            </div>
          </div>
          <div class="button-heading fade-in delay-2">
            <div>
              <h1>For latest</h1>
              <h1>news & updates</h1>
              <h1>follow us on</h1>
            </div>
            <div class="fade-in delay-3">
              <button><i class="bi bi-linkedin"></i>EXIM</button>
              <button><i class="bi bi-facebook"></i> EXIM</button>
              <button><i class="bi bi-instagram"></i>EXIM</button>
            </div>
          </div>
        </div>
        <div class="col-md-3 cols">
          <div class="mobile-png fade-in delay-4">
            <img
              src="{{asset('assets/Images/website-images/mobile.png')}}"
              alt=""
              srcset=""
            />
            <div class="video-label">
              <video controls autoplay muted loop>
                <source
                  src="{{asset('assets/Images/Video/video.mp4')}}"
                  type="video/mp4"
                />
                <source src="movie.webm" type="video/webm" />
                <source src="movie.ogv" type="video/ogg" />
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
        <div class="image-group col-md-6 cols">
          <div class="column-one">
            <div class="imag-item fade-in delay-5">
              <img
                src="{{asset('assets/Images/website-images/SM-01.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>

            <div class="imag-item fade-in delay-5">
              <img
                src="{{asset('assets/Images/website-images/SM-02.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>
          </div>

          <div class="column-two">
            <div class="imag-item fade-in delay-5">
              <img
                src="{{asset('assets/Images/website-images/SM-03.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>

            <div class="imag-item fade-in delay-5">
              <img
                src="{{asset('assets/Images/website-images/SM-04.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>
          </div>
          <div class="column-three fade-in delay-5">
            <div class="imag-item">
              <img
                src="{{asset('assets/Images/website-images/SM-05.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>
            <div class="imag-item fade-in delay-5">
              <img
                src="{{asset('assets/Images/website-images/SM-06.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>
          </div>
        </div>
      </div>
    </section> -->




    <section class="find-us">
      <div class="main-class container">
        <div class="find-us-heading col-md-3 cols">
          <div class="heading">
            <div>
              <h1>Find <span>Us</span></h1>
            </div>
            <div>
              <a
                href="https://www.facebook.com/photo/?fbid=122110908794423546&set=a.122100275210423546"
                target="_blank"
              >
                <i class="bi bi-facebook"></i
              ></a>
              <a
                href="https://www.instagram.com/p/C_U0PhOyxR0/."
                target="_blank"
              >
                <i class="bi bi-instagram"></i
              ></a>
              <a
                href="https://www.linkedin.com/company/exim-clearing-and-forwarding-l-l-c-dubai/?viewAsMember=true"
                target="_blank"
              >
                <i class="bi bi-linkedin"></i
              ></a>
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
              <a
                href="https://www.facebook.com/photo/?fbid=122110908794423546&set=a.122100275210423546"
                target="_blank"
                ><i class="bi bi-facebook"></i>EXIM</a
              >
              <a
                href="https://www.instagram.com/p/C_U0PhOyxR0/."
                target="_blank"
                ><i class="bi bi-instagram"></i>EXIM</a
              >
              <a
                href="https://www.linkedin.com/company/exim-clearing-and-forwarding-l-l-c-dubai/?viewAsMember=true"
                target="_blank"
                ><i class="bi bi-linkedin"></i> EXIM</a
              >
              <!-- <button><i class="bi bi-twitter-x"></i> EXIM</button> -->
            </div>
          </div>
        </div>
        <div class="col-md-3 cols">
          <div class="mobile-png">
            <img
              src="{{asset('assets/Images/website-images/mobile.png')}}"
              alt=""
              srcset=""
            />
            <div class="video-label">
              <video id="promo-video" controls muted loop>
                <source
                  src="{{asset('assets/Images/Video/video.mp4')}}"
                  type="video/mp4"
                />
                <source src="movie.webm" type="video/webm" />
                <source src="movie.ogv" type="video/ogg" />
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
        <div class="image-group col-md-6 cols">
          <div class="column-one">
            <div class="imag-item">
              <img
                src="{{asset('assets/Images/website-images/SM-01.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>

            <div class="imag-item">
              <img
                src="{{asset('assets/Images/website-images/SM-02.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>
          </div>

          <div class="column-two">
            <div class="imag-item">
              <img
                src="{{asset('assets/Images/website-images/SM-03.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>

            <div class="imag-item">
              <img
                src="{{asset('assets/Images/website-images/SM-04.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>
          </div>
          <div class="column-three">
            <div class="imag-item">
              <img
                src="{{asset('assets/Images/website-images/SM-05.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>
            <div class="imag-item">
              <img
                src="{{asset('assets/Images/website-images/SM-06.jpeg')}}"
                alt=""
                srcset=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>






    <section class="track-your-shipment">
        <img src="{{asset('assets/Images/website-images/container-operation.jpg')}}" alt="mainBaner" class="fade-in" />

        <div class="Shipment container">
            <div class="shipment-order fade-in delay-1">
                <div class="track-Your-order">
                    <h1><span>Track </span>Your Shipment</h1>
                </div>
                <div class="track-div">
                    <div class="track-status fade-in delay-2">


                        <a class="a-link active-link" href="#">Mobile</a>
                        <a href="#" class="a-link">AWB</a>
                        <a href="#" class="a-link"> Order</a>
                        <a href="#" class="a-link"> ID LRN</a>


                    </div>
                    <div class="track-input-box fade-in delay-3">
                        <input type="text" placeholder="Enter Yout Mobile Number" />
                    </div>
                    <div>
                        <button class="track-button fade-in delay-4">Get OTP</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')
    @include('js')

<script>
    var serviceUrl = "{{ route('service') }}";
    document.getElementById('knowMoreButton').addEventListener('click', function() {
        window.location.href = serviceUrl;
    });

</script>
</body>

</html>
