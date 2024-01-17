<!doctype html>
<html lang="en">

@include('header.head')

<body>
    <div class="container-fluid">
        <div class="row">
            @include('header.header')
            <div class="col-12 navbar-bg">
                <div class="banner-services-bg">
                    <div class="row">
                        <div class="col-11 mx-auto">
                            <div class="row">
                            @foreach($servicepage as $service)
                                <div class="col-12 col-md-12 col-lg-6 banner-text-bg banner-text">
                                <h1>{{$service->title}}</h1>
                                @php
                                $title=explode(',',$service->heading);
                                $des=explode(',',$service->descp);
                           
                                @endphp

                                @foreach($title as $ti)
                                <h1>{{$ti}}</h1>
                                @endforeach
                                <h6 class="d-none d-md-inline-block">{{$service->description}}
                                    @foreach($des as $de)
                                <h6 class="d-none d-md-inline-block">{{$de}}
                                    @endforeach
                                </h6>
                                <a href="contact-us.html" class="btn btn-primary btn-talk-to-expert">Talk to an Expert <i
                                        class="fas fa-long-arrow-alt-right arrow-animate" aria-hidden="true"></i></a>
                            </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="ourservices" class="col-12 pt-4 our-services-section">
                <div class="row services-tab">
                @foreach($servicepage as $service)
                    <div class="col-11 mx-auto custom-tab-pills">
                        <div class="w-100 responsive-tabs ">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a id="cyber-security-strategy" href="#cyber-security-strategy" class="nav-link active" data-bs-toggle="tab" role="tab">{{$service->heading1}}<span class="nav-item-arrow"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a id="incidence-response" href="#incidence-response" class="nav-link" data-bs-toggle="tab" role="tab">{{$service->heading2}}<span class="nav-item-arrow"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a id="vulnerability-management" href="#vulnerability-management" class="nav-link" data-bs-toggle="tab" role="tab">{{$service->heading3}}<span class="nav-item-arrow"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a id="assessments" href="#assessments" class="nav-link" data-bs-toggle="tab" role="tab">{{$service->heading4}}<span class="nav-item-arrow"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a id="Third Party Risk Management" href="#third-party-risk-management" class="nav-link" data-bs-toggle="tab" role="tab">{{$service->heading5}}<span class="nav-item-arrow"></span></a>
                                </li>
                            </ul>
                    
                            <div id="content" class="tab-content tab-content-service" role="tablist">
                                <div id="cyber-security-strategy" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="cyber-security-strategy">
                                    <div class="card-header" role="tab" id="heading-A">
                                        <h5 class="mb-0">
                                            <a data-bs-toggle="collapse" href="#collapse-cyber-security-strategy" aria-expanded="true" aria-controls="collapse-cyber-security-strategy">
                                            {{$service->heading1}}
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse-cyber-security-strategy" class="collapse show" data-bs-parent="#content" role="tabpanel"
                                        aria-labelledby="heading-A">
                                        <div class="card-body tab-content-service-bg">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="pb-3">{{$service->CyberSecurityStrategyTitle}}</h2>
                                                    <p>{{$service->CyberSecurityStrategyDescription}}
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
                                @foreach($servicepage as $service)
                                        <h5 class="mb-0">
                                            <a data-bs-toggle="collapse" href="#collapse-third-party-risk-management" aria-expanded="true" aria-controls="collapse-third-party-risk-management">
                                           {{$service->ThirdPartyRiskManagementTitle}}
                                            </a>
                                        </h5>
                                        @endforeach
                                    </div>
                                   
                                    <div id="collapse-third-party-risk-management" class="collapse" data-bs-parent="#content" role="tabpanel"
                                        aria-labelledby="heading-third-party-risk-management">
                                        @foreach($servicepage as $service)
                                        <div class="card-body tab-content-service-bg">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="pb-3">{{$service->ThirdPartyRiskManagementTitle}}</h2>
                                                    <P>{{$service->ThirdPartyRiskManagementDes}}</p>
                                                    <!-- <p>This include various factors</p>
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
                                                    </ul> -->
                                                </div>
                                                <div class="col-5 text-end">
                                                    <img width="100%" src="images/third-party-risk-management.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                @endforeach
                </div>
            </div>
            
            
            <div class="col-12 pt-0 pt-lg-4 our-services-section">
                <div class="row">
                @foreach($servicepage as $service)
                    <div class="col-11 mx-auto">

                    @php
                    $servicetitle=explode(',',$service->BenefitTitle);
                    $servicedes=explode(',',$service->BenefitDes);
                    $servicepoint=explode(',',$service->BenefitPoint);
                    @endphp

                    @for($i=0;$i<count($servicetitle);$i++)
                    <h2 class="text-center pt-5 pb-4">{{$servicetitle[$i]}}</h2>
                        <p>{{$servicedes[$i]}}</p>
                    @endfor

                    @foreach($servicedes as $sd)
                        <p>{{$sd}}</p>
                    @endforeach

                        <ul class="services-benefit-list">
                        @foreach($servicepoint as $sp)
                            <li>{{$sp}}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 why-svam awardsandcertifications mt-4">
                <div class="row">
                @foreach($servicepage as $service)
                    <div class="col-11 mx-auto">
                        <h4 class="pt-4">{{$service->whysvamtitle}}</h4>
                        <p class="py-3">{{$service->whysvamdes}}</p>
                    </div>
                    @endforeach
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