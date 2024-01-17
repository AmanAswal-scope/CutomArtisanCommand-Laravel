<!doctype html>
<html lang="en">

@include('header.head')

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 navbar-bg">
        <header>
          <div class="row">
            <div class="col-12 col-md-11 mx-auto">
              <nav class="navbar navbar-expand-lg">
                <div class="container-fluid px-0">
                <a class="logo" href="index.html"><img class="logo-img" src="images/svam-logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-3">
                      <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item px-3">
                   <!--   <a class="nav-link" href="services.html">Services</a> 
                      <a class="nav-link" href="/services">Services</a> -->
                      <a class="nav-link" href="{{ route('services.page') }}">Services</a> 

                    </li>
                    <li class="nav-item px-3">
                    <!--  <a class="nav-link" href="about-us.html">About Us</a> -->
                      <a class="nav-link" href="{{ route('about.page') }}">About Us</a> 
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link" href="#">Blog</a>
                      
                    </li>
                  </ul>
                  <div class="call_section float-left">
                    <a href="{{ route('contact.page') }}" class="btn btn-primary d-inline-block">Contact us</a>
                    <div class="d-inline-block ps-2"><a href="#"><i class="text-white fas fa-search"></i></a></div>
                  </div>
                </div>
              </div>
              </nav>
            </div>
          </div>
        </header>
      </div>
      <div class="col-12 navbar-bg">
        <div class="banner">
        <div class="row">
          <div class="col-11 mx-auto"> 
            <div class="row">
              @foreach($banners as $banner)
<div class="col-12 col-md-8 col-lg-6 banner-text-bg banner-text">
    <h1>{{ $banner->title }}</h1>
    <h6 class="d-none d-md-inline-block">{{ $banner->description }}</h6>
    <a href="{{ route('contact.page') }}" class="btn btn-primary btn-talk-to-expert">Talk to an Expert <i
        class="fas fa-long-arrow-alt-right arrow-animate" aria-hidden="true"></i></a>
</div>
@endforeach
            </div>     
 
        </div>
      </div>
    </div>
      </div>



      <div class="col-12 py-md-5 who-we-what-bx">
        <div class="row">
          <div class="col-12 col-md-11 mx-auto py-3">
            <div class="row">
              <div class="col-12 pb-2 pb-md-4 pb-lg-0 col-sm-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card">
                @foreach($banners as $banner)
                  <div class="card-body">
                    <h5 class="card-title text-center who-we-are">{{ $banner->WhoWeAreTitle }}</h5>
                    <p class="card-text">{{ $banner->WhoWeAre}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col-12 pb-2 pb-md-4 pb-lg-0 col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card">
                @foreach($banners as $banner)
                  <div class="card-body">
                    <h5 class="card-title text-center wht-we-do">{{	$banner->WhatWeDoTitle}}</h5>
                    <p class="card-text">{{$banner->WhatWeDo}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col-12 pb-2 pb-md-0 pb-lg-0 col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card">
                @foreach($banners as $banner)
                  <div class="card-body">
                    <h5 class="card-title text-center why-we-do">{{$banner->WhyWeDoTitle}}</h5>
                    <p class="card-text">{{$banner->WhyWeDo}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="col-12 ourservicestabbg our-services-section">
        <div class="row">
        @foreach($banners as $banner)
            <div class="col-12 col-sm-12 col-md-11 mx-auto">
        <h2 class="text-center pt-3 pb-2 pt-md-5 pb-md-4">Our Services</h2>
        <!-- <div class="w-100"> -->
          <!-- <div class="row">
            <div class="col-11 mx-auto"> -->
              <ul class="nav nav-pills nav-justified tab-bg custom-tab-pills" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active py-md-4" id="cyber-security-advisory" data-bs-toggle="tab"
                    data-bs-target="#cybersecurityadvisory" type="button" role="tab" aria-controls="home"
                    aria-selected="true">{{$banner->Service1Title}}<span class="nav-item-arrow"></span></button>
    
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link py-md-4" id="it-managed-services" data-bs-toggle="tab"
                    data-bs-target="#itmanagedservices" type="button" role="tab" aria-controls="profile"
                    aria-selected="false">{{$banner->Service2Title}}<span class="nav-item-arrow"></span></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link py-md-4" id="vCISO-services" data-bs-toggle="tab" data-bs-target="#vCISOservices"
                    type="button" role="tab" aria-controls="contact" aria-selected="false">{{$banner->Service3Title}}<span
                      class="nav-item-arrow"></span></button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="cybersecurityadvisory" role="tabpanel"
                  aria-labelledby="cyber-security-advisory">
                  <div class="row">
                    <div class="col-12 col-md-11 mx-auto pt-4">
                      <div class="row">
                        <div class="col-12 col-md-6 order-2 order-md-1">
                          <h3 class="pb-0 pb-md-3">Cyber Security Advisory</h3>
                          <p>{{$banner->Service1}}</p>
                          <ul>
                            <li>Risk assessments and management Vulnerability assessments and management Cyber liability
                              insurance consultation Change Management
                            </li>
                            <li>Third-party Risk Management</li>
                            <li>Vendor due diligence</li>
                            <li>Access Management consultation</li>
                            <li>Incident Response Planning</li>
                            <li>IR Table-Top Exercises</li>
                            <li>Penetration Testing</li>
                            <li>Policy development and management<br /> <a class="learn-more" href="services.html">Learn
                                more <span class="bounce">>></span></a></li>
                          </ul>
                        </div>
                        <div class="col-12 pb-3 pb-md-4 col-md-6 order-1 order-md-2 text-end">
                          <img src="images/security_advisor_img.png" class="w-100 w-md-auto" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="itmanagedservices" role="tabpanel" aria-labelledby="it-managed-services">
                  <div class="row">
                    <div class="col-12 col-md-11 mx-auto pt-4">
                      <div class="row">
                        <div class="col-12 col-md-6 order-2 order-md-1">
                          <h2 class="pb-3">IT Managed Services</h2>
                          <p>{{$banner->Service2}}<br /> <a class="learn-more"
                              href="it-managed-services.html">Learn more <span class="bounce">>></span></a></p>
    
                        </div>
                        <div class="col-12 pb-3 pb-md-4 col-md-6 order-1 order-md-2 text-end">
                          <img src="images/it_managed_services.png" class="w-100 w-md-auto" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="vCISOservices" role="tabpanel" aria-labelledby="vCISO-services">
                  <div class="row">
                    <div class="col-12 col-md-11 mx-auto pt-4">
                      <div class="row">
                        <div class="col-12 col-md-6 order-2 order-md-1">
                          <h2 class="pb-3">vCISO Services</h2>
                          <p>{{$banner->Service3}}<br /> <a class="learn-more" href="vCiso-service.html">Learn more <span
                                class="bounce">>></span></a></p>
                        </div>
                        <div class="col-12 pb-3 pb-md-4 col-md-6 order-1 order-md-2 text-end">
                          <img src="images/vciso_services.png" class="w-100 w-md-auto" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          
          <!-- </div>
          </div> -->
        <!-- </div> -->
      </div>
      <div class="col-12 pb-md-5 awardsandcertifications">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <h1 class="pt-5 pb-4 text-center text-white">Awards & Certifications</h1>
            <ul class="award-item-list px-0">
              <li class="award-item"><img src="images/logo_nyc_small_business.png" alt=""></li>
              <li class="award-item"><img src="images/logo_state_newyork.png" alt=""></li>
              <li class="award-item"><img src="images/logo_cyberAB.png" alt=""></li>
              <li class="award-item"><img src="images/logo_hipaa_compliant.png" alt=""></li>
              <li class="award-item"><img src="images/logo_New_York_Empire_State_Development.png" alt=""></li>
              <li class="award-item"><img src="images/logo_CRN_MSP_500.png" alt=""></li>
              <li class="award-item"><img src="images/logo_ISO.png" alt=""></li>
              <li class="award-item"><img src="images/logo_cmmi.png" alt=""></li>
              <li class="award-item"><img src="images/logo_NMSDC.png" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 contact-section">
        <div class="row">
          <div class="col-11 mx-auto py-5">
            <p class="text-center">
              <span class="contact-us-img d-inline-block"><img src="images/contact_us.png" alt=""></span>
              <span class="d-inline-block px-4"><span class="d-block contact-us-text">Still have any questions about our
                  services</span>
                <button class="btn btn-primary mt-4">Contact now</button>
              </span>
            </p>
          </div>
        </div>
      </div>
     @include('footer.footer')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>