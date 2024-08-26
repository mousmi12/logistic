<!DOCTYPE html>
<html lang="en">
@include('header')

<body>

    @include('menu')




    <section>
        <div class="aboutUs">
            <img src="{{asset('assets/Images/who we are/Img-1.jpg')}}" alt="" srcset="" />
            <div class="wrapper">
                <div class="container">
                    <div class="about-content">
                        <h1>About<span> US</span></h1>
                        <p class="fade-in delay-1">
                            EXIM Clearing & Forwarding LLC is a leading international
                            freight forwarder, dedicated to providing comprehensive
                            logistics solutions to businesses around the world. With over 15
                            years of industry experience, we have established a reputation
                            for excellence, reliability, and customer-centric service. Our
                            global network spans across country ensuring seamless and
                            efficient transportation of goods, no matter the destination.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-vision">
        <div class="container">
            <div class="col-md-6 cols">
                <div class="heading-content">
                    <h1 class="fade-in delay-2">Our <span>Vision</span></h1>
                    <p class="fade-in delay-3">
                        EXIM Clearing & Forwarding LLC is a leading international freight
                        forwarder, dedicated to providing comprehensive logistics
                        solutions to businesses around the world. With over 15 years of
                        industry experience, we have established a reputation for
                        excellence, reliability, and customer-centric service. Our global
                        network spans across countries, ensuring seamless and efficient
                        transportation of goods, no matter the destination.
                    </p>
                </div>
            </div>
            <div class="col-md-6 cols">
                <div class="image-positions">
                    <div class="imag-item-one">
                        <img src="{{asset('assets/Images/who we are/Img-3.jpg')}}" alt="Image 1" />
                    </div>
                    <div class="imag-item-two">
                        <img src="{{asset('assets/Images/who we are/img-2.jpg')}}" alt="Image 2" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-mission">
        <div class="container">
            <div class="mission-text">
                <h1 class="fade-in delay-1">Our<span> Mission</span></h1>
                <p class="fade-in delay-2">
                    Our mission is to simplify global trade for our clients by
                    delivering innovative, cost-effective, and reliable logistics
                    solutions <br />
                    We are committed to excellence in every aspect of our operations,
                    ensuring that our clients' shipments arrive safely, on time, and
                    within budget.
                </p>
            </div>
            <div class="mission-image">
                <img src="{{asset('assets/Images/who we are/img-4.jpg')}}" alt="" srcset="" />
            </div>
        </div>
    </section>

    <section class="core-values">
        <div class="container">
            <div class="core-values-heading">
                <h1 class="fade-in delay-1">
                    Core
                    <span>Values</span>
                </h1>
            </div>
            <div class="core-values-image">
                <div class="First-section">
                    <div class="col-md-4 cols">
                        <div class="cols-container">
                            <div class="items-image">
                                <img
                                    src="{{asset('assets/Images/who we are/integration.svg')}}"
                                    alt=""
                                    srcset="" />
                            </div>
                            <div class="items-heading">
                                <h1>Integrity</h1>
                            </div>
                            <div class="items-paragraph">
                                <p>
                                    We uphold the highest standards of integrity in all our
                                    actions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 cols">
                        <div class="cols-container">
                            <div class="items-image">
                                <img
                                    src="{{asset('assets/Images/who we are/customer-target.svg')}}"
                                    alt=""
                                    srcset="" />
                            </div>
                            <div class="items-heading">
                                <h1>Customer Focus</h1>
                            </div>
                            <div class="items-paragraph">
                                <p>Our clients are at the heart of everything we do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 cols">
                        <div class="cols-container">
                            <div class="items-image">
                                <img
                                    src="{{asset('assets/Images/who we are/innovation.svg')}}"
                                    alt=""
                                    srcset="" />
                            </div>
                            <div class="items-heading">
                                <h1>Innovation</h1>
                            </div>
                            <div class="items-paragraph">
                                <p>We continuously seek new ways to improve our services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-section">
                    <div class="col-md-4 cols">
                        <div class="cols-container">
                            <div class="items-image">
                                <img
                                    src="{{asset('assets/Images/who we are/group.svg')}}"
                                    alt=""
                                    srcset="" />
                            </div>
                            <div class="items-heading">
                                <h1>Teamwork</h1>
                            </div>
                            <div class="items-paragraph">
                                <p>
                                    We work together to meet the needs of our customers and help
                                    our company win.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 cols">
                        <div class="cols-container">
                            <div class="items-image">
                                <img
                                    src="{{asset('assets/Images/who we are/excellent.svg')}}"
                                    alt=""
                                    srcset="" />
                            </div>
                            <div class="items-heading">
                                <h1>Excellence</h1>
                            </div>
                            <div class="items-paragraph">
                                <p>We are committed to excellence in everything we do.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')
    @include('js')

</body>

</html>
