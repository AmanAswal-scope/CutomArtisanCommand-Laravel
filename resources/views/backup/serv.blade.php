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
                <div class="banner-services-bg">
                    <div class="row">
                        <div class="col-11 mx-auto">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 banner-text-bg banner-text">
                                <h1>Cyber Security Advisory</h1>
                                <h6 class="d-none d-md-inline-block">Cybersecurity is a critical aspect of any business,
                                    and it's essential to have a robust
                                    strategy in place to protect your company, customers, and data from cyber threats.
                                    At SVAM,
                                    we offer cybersecurity services that can help you safeguard your business and
                                    mitigate
                                    risks. Our cybersecurity experts will work with you to assess your existing
                                    operational and
                                    IT practices and identify risks. We'll then develop a comprehensive cybersecurity
                                    strategy
                                    that includes security audits, policies, and guidelines for employees, and training
                                    programs
                                    to educate your staff on security principles.With our cybersecurity strategy
                                    services, you
                                    can rest assured that your business is protected from cyber threats. Contact us
                                    today to
                                    learn more about how we can help you safeguard your business and mitigate risks.
                                </h6>
                                <a href="contact-us.html" class="btn btn-primary btn-talk-to-expert">Talk to an Expert <i
                                        class="fas fa-long-arrow-alt-right arrow-animate" aria-hidden="true"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="ourservices" class="col-12 pt-4 our-services-section">
                <div class="row services-tab">
                    <div class="col-11 mx-auto custom-tab-pills">
                        <div class="w-100 responsive-tabs ">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a id="cyber-security-strategy" href="#cyber-security-strategy" class="nav-link active" data-bs-toggle="tab" role="tab">Cyber Security Strategy<span class="nav-item-arrow"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a id="incidence-response" href="#incidence-response" class="nav-link" data-bs-toggle="tab" role="tab">Incidence Response<span class="nav-item-arrow"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a id="vulnerability-management" href="#vulnerability-management" class="nav-link" data-bs-toggle="tab" role="tab">Vulnerability Management<span class="nav-item-arrow"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a id="assessments" href="#assessments" class="nav-link" data-bs-toggle="tab" role="tab">Assessments<span class="nav-item-arrow"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a id="Third Party Risk Management" href="#third-party-risk-management" class="nav-link" data-bs-toggle="tab" role="tab">Third Party Risk Management<span class="nav-item-arrow"></span></a>
                                </li>
                            </ul>
                    
                            <div id="content" class="tab-content tab-content-service" role="tablist">
                                <div id="cyber-security-strategy" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="cyber-security-strategy">
                                    <div class="card-header" role="tab" id="heading-A">
                                        <h5 class="mb-0">
                                            <a data-bs-toggle="collapse" href="#collapse-cyber-security-strategy" aria-expanded="true" aria-controls="collapse-cyber-security-strategy">
                                                Cyber Security Strategy
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-cyber-security-strategy" class="collapse show" data-bs-parent="#content" role="tabpanel"
                                        aria-labelledby="heading-A">
                                        <div class="card-body tab-content-service-bg">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="pb-3">Cyber Security Strategy</h2>
                                                    <p>Starting with contractual requirements, SVAM reviews and
                                                        discovers your
                                                        business needs to ensure alignment with security standards and
                                                        ensure
                                                        the organization and IT operations are heading in the correct
                                                        direction.
                                                    </p>
                                                </div>
                                                <div class="col-5 text-end">
                                                    <img width="100%" src="images/cyber_security_strategy.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <div id="incidence-response" class="card tab-pane fade" role="tabpanel" aria-labelledby="incidence-response">
                                    <div class="card-header" role="tab" id="heading-incidence-response">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-incidence-response" aria-expanded="false"
                                                aria-controls="collapse-incidence-response">
                                                Collapsible Group Item B
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-incidence-response" class="collapse" data-bs-parent="#content" role="tabpanel"
                                        aria-labelledby="heading-incidence-response">
                                        <div class="card-body tab-content-service-bg">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="pb-3">Incidence Response</h2>
                                                    <p>SVAM will work with you to create an incident response plan
                                                        aligned with
                                                        your business team, and perform role play exercises, called
                                                        table top
                                                        exercises, to practice common scenarios and ensure readiness.
                                                    </p>
                                                </div>
                                                <div class="col-5 text-end">
                                                    <img width="100%" src="images/incidence_reponse.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="vulnerability-management" class="card tab-pane fade" role="tabpanel" aria-labelledby="vulnerability-management">
                                    <div class="card-header" role="tab" id="heading-vulnerability-management">
                                        <h5 class="mb-0">
                                            <a data-bs-toggle="collapse" href="#collapse-vulnerability-management" aria-expanded="true" aria-controls="collapse-vulnerability-management">
                                                Vulnerability Management
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-vulnerability-management" class="collapse" data-bs-parent="#content" role="tabpanel"
                                        aria-labelledby="heading-vulnerability-management">
                                        <div class="card-body tab-content-service-bg">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="pb-3">Vulnerability Management</h2>
                                                    <p>Vulnerability management is a process that involves identifying,
                                                        assessing, prioritizing, and addressing security vulnerabilities
                                                        in an
                                                        organization's systems and applications. This process helps
                                                        organizations to proactively manage security risks and minimize
                                                        the
                                                        likelihood of a successful cyberattack.</p>
                                                    <p>SVAM will perform an in-depth review of internal and external
                                                        assets to
                                                        determine where any vulnerabilities may exist. Once assessed,
                                                        SVAM
                                                        communicates and manages these vulnerabilities to the business
                                                        at large
                                                        and key stakeholders</p>
                                                </div>
                                                <div class="col-5 text-end">
                                                    <img width="100%" src="images/vulnerability-management.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="assessments" class="card tab-pane fade" role="tabpanel" aria-labelledby="assessments">
                                    <div class="card-header" role="tab" id="heading-assessments">
                                        <h5 class="mb-0">
                                            <a data-bs-toggle="collapse" href="#collapse-assessments" aria-expanded="true" aria-controls="collapse-assessments">
                                                Assessments
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-assessments" class="collapse" data-bs-parent="#content" role="tabpanel"
                                        aria-labelledby="heading-assessments">
                                        <div class="card-body tab-content-service-bg">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="pb-3">Assessments</h2>
                                                    <p>SVAM will assess your company against the required or desired
                                                        cyber
                                                        security frameworks and use these frameworks to ensure gaps are
                                                        found
                                                        and addressed on a continual basis.</p>
                                                    <ul>
                                                        <li>Value based cyber assessments</li>
                                                        <li>Risk Profile based quantification</li>
                                                        <li>SOC2/CMMC assessments and readiness</li>
                                                        <li>Data privacy maturity assessments</li>
                                                    </ul>

                                                </div>
                                                <div class="col-5 text-end">
                                                    <img width="100%" src="images/assessments.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="third-party-risk-management" class="card tab-pane fade" role="tabpanel" aria-labelledby="third-party-risk-management">
                                    <div class="card-header" role="tab" id="heading-third-party-risk-management">
                                        <h5 class="mb-0">
                                            <a data-bs-toggle="collapse" href="#collapse-third-party-risk-management" aria-expanded="true" aria-controls="collapse-third-party-risk-management">
                                                Third Party Risk Management
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-third-party-risk-management" class="collapse" data-bs-parent="#content" role="tabpanel"
                                        aria-labelledby="heading-third-party-risk-management">
                                        <div class="card-body tab-content-service-bg">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="pb-3">Third-Party Risk Management</h2>
                                                    <p>TPRM is the process of identifying, mitigating, and monitoring
                                                        risks
                                                        associated with outsourced third-party and
                                                        extended enterprise services to ensure that your relationships
                                                        with
                                                        external entities add value to your
                                                        organization without compromising your security parameters</p>
                                                    <p>SVAM will first ensure all third party and supply chain vendors
                                                        are
                                                        discovered, identified and documented. With
                                                        this information SVAM will assess and report on the risk they
                                                        pose to
                                                        your organization.</p>
                                                    <p>TPRM goes beyond simply executing assessments, it’s a series of
                                                        strategic
                                                        and tactical activities, a complex
                                                        transformation that requires innovative thinking and strategic
                                                        relationship building across your global
                                                        stakeholders.</p>
                                                    <p>What our expertise brings to the table-</p>
                                                    <ul>
                                                        <li>Program Design and Implementation</li>
                                                        <li>Due Diligence and Selection</li>
                                                        <li>Risk Assessment</li>
                                                        <li>Ongoing monitoring</li>
                                                        <li>Termination</li>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-end">
                                                    <img width="100%" src="images/third-party-risk-management.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
            <div class="col-12 pt-0 pt-lg-4 our-services-section">
                <div class="row">
                    <div class="col-11 mx-auto">
                        <h2 class="text-center pt-5 pb-4">Benefits</h2>
                        <p>Since 1994, SVAM has earned a trusted reputation as an IT solutions provider. Our team
                            comprises experienced engineers and security professionals dedicated to safeguarding your
                            organization against continuously evolving digital threats. We offer a comprehensive suite
                            of services meticulously designed to protect your valuable data and systems. Our top
                            priority is delivering exceptional service and support to our customers. As certified
                            partners of leading security vendors, we remain at the forefront of technology and
                            continuously invest in training to stay ahead of emerging threats. Our seasoned security
                            professionals possess the expertise and resources to help you identify and mitigate
                            vulnerabilities, respond swiftly to incidents, and train your employees in the best security
                            practices.</p>
                        <ul class="services-benefit-list">
                            <li><strong>We understand that each organization has unique requirements,</strong> so we
                                tailor our solutions to meet your needs. Additionally, we offer flexible pricing options
                                to accommodate your budget constraints.</li>
                            <li><strong>With our proactive cybersecurity monitoring and risk assessment services, we aim
                                    to minimize the risk of cyber-attacks.</strong> We assist in identifying and
                                preventing security threats and provide efficient solutions to address any issues that
                                may arise.</li>
                            <li><strong>Rest assured that our track record showcases measurable results in
                                    safeguarding</strong> client assets from regulatory and cyber risks. By leveraging
                                SVAM's global pool of talented resources, you can reduce costs and maximize your return
                                on investment.</li>
                            <li><strong>Benefit from our commitment to ongoing education,</strong> which ensures that
                                our employees' skill sets are continuously updated to match the evolving threat
                                landscape and the dynamic needs of our clients</li>
                            <li><strong>Choose SVAM as your trusted partner in IT security,</strong> and let us empower
                                your organization with robust solutions tailored to your unique requirements.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 why-svam awardsandcertifications mt-4">
                <div class="row">
                    <div class="col-11 mx-auto">
                        <h4 class="pt-4">Why SVAM as cyber security advisory content</h4>
                        <p class="py-3">Others can do it, SVAM has done it and we have the references and history to
                            show for it. We
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