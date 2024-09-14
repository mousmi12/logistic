<!DOCTYPE html>
<html lang="en">
@include('header')

<body>

  @include('menu')
  <section>
    <div class="aboutUs fade-in delay-1">
      <img src="{{asset('assets/Images/Services/img-1.jpg')}}" alt="" srcset="" />
      <div class="wrapper">
        <div class="container">
          <div class="about-content ">
            <h1 class="fade-in delay-2">What<span> We Provide</span></h1>
            <p class="fade-in delay-3">
              From delicate air freight to heavy ocean cargo and the intricacies of dangerous goods handling, our expertise ensures seamless global shipping. Our services also encompass efficient customs brokerage and warehousing to optimize their supply chain.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="dangerous-goods" class="dangerous-goods">
    <div class="container">
      <div class="cols-image">
        <div class="img-container fade-in delay-4">
          <img src="{{asset('assets/Images/Services/img-2.jpg')}}" alt="" srcset="" />
        </div>
      </div>
      <div class="cols-content">
        <div class="content-section">
          <div class="content-right">
            <div class="content-icon fade-in delay-4">
              <img
                src="{{asset('assets/Images/Services/hazardous-material.svg')}}"
                alt="" />
            </div>
            <div class="content-heading">
              <h1 class="fade-in delay-5">Dangerous Goods</h1>
            </div>
            <div class="content-paragraph">
              <p class="fade-in delay-6">
              EXIM has deep-rooted expertise in safely handling a wide range of dangerous goods, ensuring compliance with all regulations. Our established networks with major carriers allow us to access a wide range of transportation options for any type of shipment, no matter how complex.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="air-freight" class="air-freight">
    <div class="container">
      <div class="cols-content">
        <div class="content-section">
          <div class="content-right">
            <div class="content-icon fade-in delay-1">
              <img src="{{asset('assets/Images/Services/airplane.svg')}}" alt="" />
            </div>
            <div class="content-heading">
              <h1 class="fade-in delay-2">Air Freight</h1>
            </div>
            <div class="content-paragraph">
              <p class="fade-in delay-3">
              Our air freight service provides fast and reliable solutions to fulfill demanding logistical needs and time constraints. With an extensive network of partners and meticulous attention to detail, we guarantee the prompt and secure delivery of your freight anywhere in the world.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="cols-image">
        <div class="img-container fade-in delay-4">
          <img src="{{asset('assets/Images/Services/img-3.jpg')}}" alt="" srcset="" />
        </div>
      </div>
    </div>
  </section>
  <section id="ocean-freight" class="dangerous-goods">
    <div class="container">
      <div class="cols-image">
        <div class="img-container fade-in delay-1">
          <img src="{{asset('assets/Images/Services/img-4.jpg')}}" alt="" srcset="" />
        </div>
      </div>
      <div class="cols-content">
        <div class="content-section">
          <div class="content-right">
            <div class="content-icon fade-in delay-1">
              <img
                src="{{asset('assets/Images/Services/freight-shipping.svg')}}"
                alt="" />
            </div>
            <div class="content-heading">
              <h1 class="fade-in delay-2">Ocean Freight</h1>
            </div>
            <div class="content-paragraph">
              <p class="fade-in delay-3">
              EXIM offers cost-effective sea freight services for bulk and oversized shipments, with flexible  full container load (FCL) and less than container load (LCL) options. Benefit from our competitive rates and reliable transit times for your global shipments.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="road-freight" class="air-freight">
    <div class="container">
      <div class="cols-content">
        <div class="content-section">
          <div class="content-right">
            <div class="content-icon fade-in delay-1">
              <img src="{{asset('assets/Images/Services/truck.svg')}}" alt="" />
            </div>
            <div class="content-heading">
              <h1 class="fade-in delay-2">Road Freight</h1>
            </div>
            <div class="content-paragraph">
              <p class="fade-in delay-2">
              Our road freight solutions provide an adept and flexible way to ship your cargo throughout the local borders and the GCC. Benefit from our rapid transit times paired with personalized solutions that are precisely designed to meet your distinct requirements.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="cols-image">
        <div class="img-container fade-in delay-4">
          <img src="{{asset('assets/Images/Services/Services 1.jpg')}}" alt="" srcset="" />
        </div>
      </div>
    </div>
  </section>

  <section id="warehouse" class="customs-parehousing-project">
    <div class="customs-brokerage">
      <div class="container">
        <div class="col-md-4 cols-one">
          <div class="container-content">
            <div class="container-not-image">
              <div class="container-heading">
                <h1 class="fade-in delay-1">Customs Brokerage</h1>
              </div>
              <div class="container-paragraph">
                <p class="fade-in delay-2">
                Expert customs clearance services to navigate complex international trade regulations and ensure smooth transit.
                </p>
              </div>
            </div>
            <img class="fade-in delay-3" src="{{asset('assets/Images/Services/img-7.jpg')}}" alt="" srcset="" />
          </div>
          <div class="logo-icon">
            <img class="fade-in delay-4" src="{{asset('assets/Images//Services/deal.svg')}}" alt="" srcset="" />
          </div>
        </div>
        <div class="col-md-4 cols-two">
          <div class="container-content">
            <div class="container-not-image">
              <div class="container-heading">
                <h1 class="fade-in delay-5">Warehousing & Distribution</h1>
              </div>
              <div class="container-paragraph">
                <p class="fade-in delay-6">
                State-of-the-art warehousing facilities
                and distribution services for optimal
                inventory management and order fulfillment.
                </p>
              </div>
            </div>
            <img class="fade-in delay-7" src="{{asset('assets/Images/Services/img-6.jpg')}}" alt="" srcset="" />
          </div>
          <div class="logo-icon">
            <img class="fade-in delay-8"
              src="{{asset('assets/Images//Services/warehouse.svg')}}"
              alt=""
              srcset="" />
          </div>
        </div>
        <div class="col-md-4 cols-three">
          <div class="container-content">
            <div class="container-not-image">
              <div class="container-heading">
                <h1 class="fade-in delay-9">Cross-Trade Shipments</h1>
              </div>
              <div class="container-paragraph">
                <p class="fade-in delay-10">
                Smooth cross-trade services, expertly coordinating multi-national logistics to efficiently transport your cargo across borders.
                </p>
              </div>
            </div>
            <img class="fade-in delay-11" src="{{asset('assets/Images/Services/Services 2.jpg')}}" alt="" srcset="" />
          </div>
          <div class="logo-icon">
            <img class="fade-in delay-12" src="{{asset('assets/Images/Services/cargo.svg')}}" alt="" srcset="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('footer')
  @include('js')


</body>

</html>
