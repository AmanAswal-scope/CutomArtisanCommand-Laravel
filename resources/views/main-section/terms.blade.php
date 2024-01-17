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
                            <!-- <a class="nav-link" href="services.html">Services</a> -->
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
                <div class="row">
                    <div class="col-6 banner-text-bg banner-text">
                        <h1>Terms</h1>
                        <p>Last Updated On 21 April 2023</p>
                        
                    </div>
                    <div class="col-6">
                        <img src="images/privacy_banner.png" alt="" width="100%">
                    </div>
                </div>

            </div>
            <div class="col-12 privacy-policy">
                <div class="row">
                    <div class="col-11 mx-auto privacy-policy-text">
                        <div class="py-4">
                          <h2 class="pb-3">Terms of Use</h2>
                            <p>SVAM secures the right to monitor access to this site .The contents available on this site are the property of SVAM and is protected by worldwide copyright laws and treaty provisions. The Site, and all content, materials, information, software, products and services provided on the Site, are provided on an “as is” and “as available” basis. By using the Web Site or downloading Materials from the Web Site, you hereby agree to abide by the terms and conditions set forth in this Terms of Use. In the event of you not agreeing to these terms and conditions, you are requested not to use the Web Site or download Materials from the Web Site. In any case SVAM reserves the right to terminate your access at any time, for any reason.
                            </p>
                        </div>
                        <div class="py-4">
                          <h2 class="pb-3">Warranties</h2>
                          <p>In spite of SVAM’s best endeavors there is no warranty on behalf of SVAM that this web site will be free of any computer viruses. SVAM expressly disclaims all warranties of any kind, whether express or implied including without limitation of warranties of merchantability and in respect to the accuracy, adequacy, reliability or completeness of any information provided on this website.
                          </p>
                        </div>
                        <div class="py-4">
                          <h2 class="pb-3">Ownership</h2>
                          <p>SVAM retains all rights to the Services and Materials which are provided only for your convenience and any material, information or idea you transmit to or post on this website, by any means, will be considered as non confidential and SVAM reserves the right to use the same in any manner. However, reaffirm that we do not sell or rent any of your personal information and we will only collect, store and use your personal information for defined purposes.
                          </p>
                        </div>
                        <div class="py-4">
                          <h2 class="pb-3">Damage</h2>
                          <p>In no event shall SVAM or its suppliers be liable for any damages whatsoever (including, without limitation, damages for loss of profits, business interruption, loss of information) arising out of the use of or inability to use the web sites or materials. Some jurisdictions do not allow the limitation or exclusion of liability, accordingly, some of the above limitations may not apply to the User.
                          </p>
                        </div>
                        <div class="py-4">
                          <h2 class="pb-3">Indemnity</h2>
                          <p>User/You agree to indemnify and hold SVAM and its officers, agents, employees, partners and licensors harmless from and against all claims, expense, judgment, cost, including reasonable attorney’s fees or other loss relating to your use of this Web Site in any manner.
                          </p>
                        </div>
                        <div class="py-4">
                          <h2 class="pb-3">Unlawful or prohibited use of website</h2>
                          <p>As a condition of your use of the Web Site, you shall not use the Web Site for any purpose(s) that is unlawful or prohibited by the Terms of Use. You shall not use the Web Site in any manner that could damage, disable, overburden, or impair any SVAM server, or the network(s) connected to any SVAM server, or interfere with any other party’s use and enjoyment of any services associated with the Web Site. You shall not attempt to gain unauthorized access to any section of the Web Site, other accounts, computer systems or networks. In any case SVAM reserves the right to terminate your access at any time, for any reason.
                          </p>
                        </div>
                        <div class="py-4">
                          <h2 class="pb-3">Changes</h2>
                          <p>SVAM reserves the rights, at its sole discretion, to change, modify, add or remove any portion of these Terms of Use in whole or in part, at any time without notice to you. Changes in these Terms of Use will become effective from the time the changed Terms of Use are posted on the Web Site.
                          </p>
                        </div>
                        <div class="py-4">
                          <h2 class="pb-3">Dispute Resolution/Governing Laws</h2>
                          <p>All disputes, differences and questions whatsoever which shall arise between the parties hereto or afterwards, touching any clause or matter herein contained, shall be referred to a sole arbitrator to be appointed by the Chief Executive Officer of SVAM. All such arbitration proceedings shall be in accordance with and subject to the provisions of The Arbitration and Conciliation Act, 1996 of India or any statutory modification or enactment thereof. The language of the arbitration shall be English. The place for Arbitration will be New Delhi, India.
                          </p>
                        </div>
                        
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