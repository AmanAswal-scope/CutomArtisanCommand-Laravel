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
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
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
              <div class="banner-services-vciso-bg">
                  <div class="row">
                      <div class="col-11 mx-auto">
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-6 banner-text-bg banner-text">
                              <h1>What is Virtual Chief Information Security Officer (vCISO)?</h1>
                              <h6 class="d-none d-sm-inline-block">A virtual CISO is a security expert who provides consulting services to organizations part-time or as needed. They can help organizations develop and implement cybersecurity strategies, assess security posture, and identify and mitigate risks. If you are looking for a way to improve your organization's cybersecurity posture, virtual CISO consulting services can be a great option.
                              </h6>
                              <a href="" class="btn btn-primary btn-talk-to-expert">Talk to an Expert <i
                                      class="fas fa-long-arrow-alt-right arrow-animate" aria-hidden="true"></i></a>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
            <div class="col-12 who-we-what-bx">
                <div class="row">
                    <div class="col-11 mx-auto what-vciso">
                        <div class="card my-4 py-4 who-we-what-bx border-0">
                            <div class="card-title"><h2 class="text-left">What is vCISO?</h2></div>
                            <div class="card-content">
                                <p>A virtual CISO is a security expert who provides consulting services to organizations part-time or as needed. They can help organizations develop and implement cybersecurity strategies, assess security posture, and identify and mitigate risks. If you are looking for a way to improve your organization's cybersecurity posture, virtual CISO consulting services can be a great option.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 pt-4 our-services-section">
                <div class="row">
                    <div class="col-11 mx-auto text-center">
                        <h2 class="text-start pt-5 pb-4">Our Phased Approach</h2>
                        <ul class="nav justify-content-center phased-list" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" data-bs-toggle="tab" href="#phase1">Phase 1</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="tab" href="#phase2">Phase 2</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="tab" href="#phase3">Phase 3</a>
                            </li>
                          </ul>
                        
                          <!-- Tab panes -->
                          <div class="tab-content phased-list-content text-start">
                            <div id="phase1" class="container tab-pane active text-start"><br>
                                <h6>First 100 Days Tailored Assessment and Development</h6>
                                <ul class="circle-list">
                                    <li>
                                        Cyber Risk Assessment: Analyzing Current State and Gaps
                                    </li>
                                    <li>
                                        Cyber Risk Management Strategy and Program Design
                                    </li>
                                    <li>
                                        Cyber Human Capital Management: Strategy Alignment
                                    </li>
                                </ul>
                            </div>
                            <div id="phase2" class="container tab-pane fade text-start"><br>
                                <h6>Ongoing Services</h6>
                                <ul class="circle-list">
                                    <li>
                                        Ongoing Services
                                    </li>
                                </ul>
                            </div>
                            <div id="phase3" class="container tab-pane fade text-start"><br>
                                <h6>Reactive Services and Reporting</h6>
                                <ul class="circle-list">
                                    <li>
                                        Reactive Services and Reporting to respond rapidly to any incidents/breaches, provide continual reporting to leadership, and ensure open communication
                                    </li>
                                </ul>
                            </div>
                          </div>

                    </div>
                </div>
            </div>
            <div class="col-12 vciso-benefits-box mt-4">
                <div class="row">
                    <div class="col-11 mx-auto">
                        <h2 class="text-start pt-5 pb-4">Benefits</h2>
                        <ul class="vciso-benefits-list">
                            <li class="text-center">
                                <img src="images/vciso_icon_roi.png" alt="">
                                <h6 class="py-4">ROI</h6>
                                <p>Low Cost, Fixed Fee for Phase 1 with testing and reporting to demonstrate ROI</p>
                            </li>
                            <li class="text-center">
                                <img src="images/vciso_icon_test_monitor.png" alt="">
                                <h6 class="py-4">Test & Monitor</h6>
                                <p>Continual testing and monitoring to ensure your organization is adequately protected</p>
                            </li>
                            <li class="text-center">
                                <img src="images/vciso_icon_flexibility.png" alt="">
                                <h6 class="py-4">Flexibility</h6>
                                <p>Tailored Services to the specific needs of each organization</p>
                            </li>
                            <li class="text-center">
                                <img src="images/vciso_icon_compliance.png" alt="">
                                <h6 class="py-4">Compliance</h6>
                                <p>Protects your company from financial losses, establishing vigilance and resiliency with proper risk management practices in place</p>
                            </li>
                            <li class="text-center">
                                <img src="images/vciso_icon_trusted_partnership.png" alt="">
                                <h6 class="py-4">Trusted Partnership</h6>
                                <p>Headquartered in New York with locations worldwide, continually meeting with your team (virtual or locally onsite) as your trusted partner</p>
                            </li>
                            <li class="text-center">
                                <img src="images/vciso_icon_partnership.png" alt="">
                                <h6 class="py-4">Full Protection</h6>
                                <p>Protects your company from financial losses, establishing vigilance and resiliency with proper risk management practices in place</p>
                            </li>
                            <li class="text-center">
                                <img src="images/vciso_icon_expertise.png" alt="">
                                <h6 class="py-4">Expertise</h6>
                                <p>Leverage experience and expertise to help organizations develop and implement effective cybersecurity strategies</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 why-svam awardsandcertifications mt-4">
                <div class="row">
                    <div class="col-11 mx-auto">
                        <h4 class="pt-4">Why SVAM as cyber security advisory content</h4>
                        <p class="py-3">Others can do it, SVAM has done it and we have the references and history to show for it. We
                            are looking forward to you being part of our growing client base!</p>
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
                        <span class="d-inline-block ps-2">233 East Shore Road, Suite 201<br/> Great Neck, NY 11023, USA</span>
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