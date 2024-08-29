<!DOCTYPE html>
<html lang="en">
@include('header')

<body>

    @include('menu')

      <section class="We-love-to">
      <div class="container">
        <div class="col-md-4 cols-one">
          <div class="heading-location">
            <div class="heading">
              <h1>We’d love to</h1>
              <h1><span>hear from you</span></h1>
            </div>
            <div class="location">
              <div class="center-align">
                <div>
                  <ul>
                    <li>
                      <div>
                        <i class="bi bi-geo-alt-fill"></i>
                      </div>
                      <div>
                        Office 513, 5th Floor, Al Fattan Plaza, <br />
                        Airport Road, Garhoud, Dubai Next IBIS Styles Hotel
                        Khansaheb
                      </div>
                    </li>
                    <li class="mobile">
                      <div>
                        <a href="tel:+971 4282 3411"
                          ><i class="bi bi-phone-fill"></i
                        ></a>
                      </div>
                      <div>+971 4282 3411</div>
                    </li>
                    <!-- <li>
                        <div>
                          <i class="bi bi-envelope"></i>
                        </div>
                        <div>info@exim.ae</div>
                      </li>
                      <li>
                        <div>
                          <i class="bi bi-browser-chrome"></i>
                        </div>
                        <div>www.exim.ae</div>
                      </li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 cols">
          <div class="form-mail">
            <div class="contact-form">
              <div class="input-box">
                <input type="text" name="" id="" placeholder="Name" />
              </div>
              <div class="two-input-box">
                <div class="col-md-6 input-box">
                  <input type="text" name="" id="" placeholder="Email" />
                </div>
                <div class="col-md-6 input-box">
                  <input
                    type="text"
                    name=""
                    id=""
                    placeholder="Mobile Number"
                  />
                </div>
              </div>
              <div class="input-box-message">
                <input type="text" name="" id="" placeholder=" Message" />
              </div>
              <div class="button-submit">
                <button>Submit</button>
              </div>
            </div>
            <div class="our-email">
              <h6>Or email us at</h6>
              <h1>
                <a class="mailto" href="mailto:info@exim.ae">info@exim.ae</a>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="google-map">
      <div class="container">
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57735.78350528207!2d55.33388219999999!3d25.254215900000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d1b81d61725%3A0xc4c3354de3a5d9eb!2sAl%20Fattan%20Plaza!5e0!3m2!1sen!2sin!4v1724922939520!5m2!1sen!2sin"
            width="100%"
            height="500"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="map-border"
          ></iframe>
        </div>
        <div class="botton-color">
          <button onclick="maplocation()">
            Show on Map <i class="bi bi-chevron-right arrowbolder"></i>
          </button>
        </div>
      </div>
    </section>

    @include('footer')
    @include('js')

</body>

</html>
