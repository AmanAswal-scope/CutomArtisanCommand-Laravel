<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- google font files -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,500;1,600&display=swap"
    rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <title>SVAM - Cyber Security</title>
</head>

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
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                      <li class="nav-item px-3">
                        <!-- <a class="nav-link" href="index.html">Home</a> -->
                        <a class="nav-link" href="{{ route('home.page') }}">Home</a> 

                      </li>
                      <li class="nav-item px-3">
                        <!-- <a class="nav-link active" href="services.html">Services</a> -->
                        <a class="nav-link" href="{{ route('services.page') }}">Services</a> 

                      </li>
                      <li class="nav-item px-3">
                        <!-- <a class="nav-link" href="about-us.html">About Us</a> -->
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
        <div class="banner-it-managed-services-bg">
          <div class="row">
            <div class="col-11 mx-auto">
              <div class="row">
                <div class="col-12 col-md-12 col-lg-6 banner-text-bg banner-text">
                  <h1>IT Managed Services</h1>
                  <h6 class="d-none d-sm-inline-block">SVAM Security understands the SMB ‘s struggles and challenges,
                    from predicting cash flow to
                    managing an ever-growing to-do list. Managing your business can be daunting when you're
                    working with limited resources and budgets. SVAM’s small business (SMB) solutions are
                    tailored to your needs, taking the burden of network security and technology off your
                    shoulders, and letting you focus on your core business. Our team of technology professionals
                    has done the groundwork for you, so you can focus on running your business
                  </h6>
                  <a href="" class="btn btn-primary btn-talk-to-expert">Talk to an Expert <i
                      class="fas fa-long-arrow-alt-right arrow-animate" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 who-we-what-bx d-none d-lg-block">
        <div class="row">
          <div class="col-11 mx-auto service-offering-container">
            <div class="card my-4 py-4">
              <div class="card-title mx-5">
                <h2 class="text-center">IT Service Offerings</h2>
              </div>
              <div class="card-content">
                <div class="service-offering-list-main d-flex">
                  <div class="item-outer">
                    <h6 class="text-center">Proactive Services</h6>
                    <ul class="service-offering-list">
                      <li>CPU Utilization</li>
                      <li>Memory</li>
                      <li>Anti-Virus Solution</li>
                      <li>Dark Web Monitoring</li>
                      <li>Drive Space</li>
                      <li>Password Management</li>
                    </ul>
                  </div>
                  <div class="item-outer">
                    <h6 class="text-center">Network Administration</h6>
                    <ul class="service-offering-list">
                      <li>Best Practice Methods</li>
                      <li>Root Cause Investigation</li>
                      <li>Dedicated Administrator</li>
                      <li>Exchange Administrator</li>
                      <li>Scheduled Maintenance</li>
                      <li>Administration & Management</li>
                    </ul>
                  </div>
                  <div class="item-outer">
                    <h6 class="text-center">Trusted Advisor</h6>
                    <ul class="service-offering-list">
                      <li>vCISO (Virtual Officer)</li>
                      <li>Technology Planning</li>
                      <li>Firewall Review</li>
                      <li>Proactive Measures Taken</li>
                      <li>Proactive Automation</li>
                      <li>Environment KPIs & Reporting</li>

                    </ul>
                  </div>
                  <div class="item-outer">
                    <h6 class="text-center">Reactive Support Services</h6>
                    <ul class="service-offering-list">
                      <li>Customer Ticketing System</li>
                      <li>Remote Support</li>
                      <li>On-site Support</li>
                      <li>Problem Troubleshooting</li>
                      <li>24/7 Available Support</li>
                      <li>Escalations to Level 3 Support</li>
                    </ul>
                  </div>
                  <div class="item-outer">
                    <h6 class="text-center">Design, Upgrade, Install</h6>
                    <ul class="service-offering-list">
                      <li>Infrastructure Projects</li>
                      <li>Technology Rollouts</li>
                      <li>Technology Assessments</li>
                      <li>On-site Staff </li>
                      <li>Design & Implementation</li>
                      <li>On-siteAugmentation</li>

                    </ul>
                  </div>
                </div>
                <div class="service-offer-bottom-line d-flex">
                  <div class="service-offer-bottom-box position-relative">
                    <div class="service-offer-line-bg"></div>
                    <div class="service-offer-button">
                      <span class="btn">24/7</span>
                    </div>
                  </div>
                  <div class="service-offer-bottom-box">
                    <div class="service-offer-line-bg"></div>
                    <div class="service-offer-button">
                      <span class="btn">Unlimited</span>
                    </div>
                  </div>
                  <div class="service-offer-bottom-box">
                    <div class="service-offer-line-bg"></div>
                    <div class="service-offer-button">
                      <span class="btn">Quaterly</span>
                    </div>
                  </div>
                  <div class="service-offer-bottom-box">
                    <div class="service-offer-line-bg"></div>
                    <div class="service-offer-button">
                      <span class="btn">Unlimited</span>
                    </div>
                  </div>
                  <div class="service-offer-bottom-box position-relative">
                    <div class="service-offer-line-bg"></div>
                    <div class="service-offer-button">
                      <span class="btn">Price Per Project</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 who-we-what-bx d-block d-lg-none">
        <div class="row">
          <div class="col-11 mx-auto service-offering-container-small">
            <div class="card my-4 py-4">
              <div class="card-title mx-5 mb-3">
                <h2 class="text-center">IT Service Offerings</h2>
              </div>
              <div class="card-content">
                <div class="service-offering-list-main-small mx-5">
                  <div class="row">
                    <div class="col-12 col-md-6 pb-4">
                      <div class="item-outer h-100">
                        <h6 class="text-center">Proactive Services</h6>
                        <ul class="service-offering-list">
                          <li>CPU Utilization</li>
                          <li>Memory</li>
                          <li>Anti-Virus Solution</li>
                          <li>Dark Web Monitoring</li>
                          <li>Drive Space</li>
                          <li>Password Management</li>
                        </ul>
                        <h6 class="text-center mb-0">24/7</h6>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 pb-4">
                      <div class="item-outer h-100">
                        <h6 class="text-center">Network Administration</h6>
                        <ul class="service-offering-list">
                          <li>Best Practice Methods</li>
                          <li>Root Cause Investigation</li>
                          <li>Dedicated Administrator</li>
                          <li>Exchange Administrator</li>
                          <li>Scheduled Maintenance</li>
                          <li>Administration & Management</li>
                        </ul>
                        <h6 class="text-center mb-0">Unlimited</h6>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 pb-4">
                      <div class="item-outer h-100">
                        <h6 class="text-center">Trusted Advisor</h6>
                        <ul class="service-offering-list">
                          <li>vCISO (Virtual Officer)</li>
                          <li>Technology Planning</li>
                          <li>Firewall Review</li>
                          <li>Proactive Measures Taken</li>
                          <li>Proactive Automation</li>
                          <li>Environment KPIs & Reporting</li>
                        </ul>
                        <h6 class="text-center mb-0">Quaterly</h6>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 pb-4">
                      <div class="item-outer h-100">
                        <h6 class="text-center">Reactive Support Services</h6>
                        <ul class="service-offering-list">
                          <li>Customer Ticketing System</li>
                          <li>Remote Support</li>
                          <li>On-site Support</li>
                          <li>Problem Troubleshooting</li>
                          <li>24/7 Available Support</li>
                          <li>Escalations to Level 3 Support</li>
                        </ul>
                        <h6 class="text-center mb-0">Unlimited</h6>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 h-100">
                      <div class="item-outer">
                        <h6 class="text-center">Design, Upgrade, Install</h6>
                        <ul class="service-offering-list">
                          <li>Infrastructure Projects</li>
                          <li>Technology Rollouts</li>
                          <li>Technology Assessments</li>
                          <li>On-site Staff </li>
                          <li>Design & Implementation</li>
                          <li>On-siteAugmentation</li>
                        </ul>
                        <h6 class="text-center mb-0">Price Per Project</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-12 pt-4 our-services-section">
        <div class="row">
          <div class="col-11 mx-auto">
            <h2 class="text-center pt-5 pb-4">Need for an IT Service Provider</h2>
            <ul class="services-benefit-list">
              <li><strong>Measurable ROI:</strong> Key services you receive for a low monthly flat fee.</li>
              <li><strong>Enhance your network performance</strong> with a reliable and secure IT environment.</li>
              <li><strong>Our system is designed to be flexible and easily scalable,</strong> ensuring it can adapt to
                your
                business growth.</li>
              <li><strong>Benefit from world-class technical support</strong> dedicated to solving your day-to-day IT
                issues.</li>
              <li><strong>Our systems are focused on promoting broader collaboration</strong> within your business.
                Enjoy the
                peace of mind that comes with 24/7 continuous monitoring of the Dark Web.</li>
              <li><strong>Say goodbye to unpredictable expenses</strong> with our predictable monthly pricing.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 why-svam awardsandcertifications mt-4">
        <div class="row">
          <div class="col-11 mx-auto">
            <h4 class="py-4">Svam as your IT service provider</h4>
            <ul class="circle-list">
              <li>Trusted, reliable, and proven service delivery platform that gives you complete control and confidence
              </li>
              <li>Our flexible and scalable services provide as much or as little help as you need</li>
              <li>Receive weekly reports and real-time alerts to ensure you stay informed</li>
              <li>Experienced engineers with certifications across the industry's leading solutions and products.</li>
              <li>Experience high performance and reliability, backed by service level agreements that guarantee
                results.</li>
              <li>We ensure a secure computing environment, protecting critical business data and systems</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 contact-section">
        <div class="row">
          <div class="col-11 mx-auto py-5">
            <p class="text-center">
              <span class="contact-us-img d-inline-block"><img src="images/contact_us.png" alt=""></span>
              <span class="d-inline-block px-4"><span class="d-block contact-us-text">Still have any
                  questions about our services</span>
                <button class="btn btn-primary mt-4">Contact now</button>
              </span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 footer-section">
        <div class="row">
          <div class="col-11 mx-auto py-4">
            <div class="w-100 pb-3"><img src="images/svam-logo.png" alt="" width="15%"></div>
            <div class="row border-bottom-footer-inner">
              <div class="col-12 col-sm-12 col-md-3 text-start">
                <span class="address-line d-block py-2">
                  <span class="btn-circle-white"><i class="fas fa-map-marker-alt"></i></span>
                  <span class="d-inline-block ps-2">233 East Shore Road, Suite 201<br /> Great Neck, NY 11023,
                    USA</span>
                </span>
                <span class="phone d-block py-2">
                  <span class="btn-circle-white"><i class="fas fa-phone"></i></span>
                  <span class="d-inline-block ps-2">18009036716</span>
                </span>
                <span class="email d-block py-2">
                  <span class="btn-circle-white"><i class="fas fa-envelope"></i></span>
                  <span class="d-inline-block ps-2">sales@svam.com</span>
                </span>
              </div>
              <div class="col-12 col-sm-12 col-md-3">
                <h4><span>Services</span></h4>
                <ul>
                  <li><a href="vCiso-service.html">Virtual CISO</li>
                  <li><a href="services.html#ourservices">Third-party Risk Management</a></li>
                  <li><a href="services.html#ourservices">Assessments</a></li>
                  <li><a href="services.html#ourservices">Incident Response</a></li>
                  <li><a href="services.html#ourservices">Cybersecurity Strategy</a></li>
                  <li><a href="it-managed-services.html">IT Managed Services</a></li>
                  <li><a href="services.html#ourservices">Vulnerability Management</a></li>
                  <li><a href="services.html#ourservices">Cybersecurity Advisory</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-3">
                <h4><span>About Us</span></h4>
                <ul>
                  <li><a href="about-us.html">Company Profile</li>
                  <li><a href="about-us.html#ourTeam">Our Team</a></li>
                  <li><a href="about-us.html#awardscertifications">Awards & Certifications</a></li>
                  <li><a href="about-us.html">Case Studies</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-3">
                <h4><span>Blogs</span></h4>
                <ul>
                  <li><a href="">New Updates</li>
                  <li><a href="">Latest Blogs</a></li>
                  <!-- <li><a href="">Third-party Risk Management</a></li> -->
                </ul>
              </div>
              <div class="col-12 text-center pb-3">
                <span class="d-block pb-2">Connect with us</span>
                <span class="btn-circle-white"><i class="fab fa-linkedin-in"></i></span>
                <span class="btn-circle-white"><i class="fab fa-twitter"></i></span>
                <span class="btn-circle-white"><i class="fab fa-facebook-f"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center pb-4">
            Copyright © 2023 SVAM International Inc.
            <a href="privacy-policy.html" class="px-2">Privacy</a>
            <a href="cookie-policy.html" class="px-2">Terms</a>
            <a href="security-policy.html" class="px-2">Security Policy</a>
          </div>
        </div>
      </div>
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