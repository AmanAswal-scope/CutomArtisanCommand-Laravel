<!doctype html>
<html lang="en">

@include('header.head')

<body>
    <div class="container-fluid">
        @foreach($contactpage as $contact )
        <div class="row">
        @include('header.header')
            <div class="col-12 navbar-bg">
                <div class="row">
                    <div class="col-6 banner-text-bg banner-text">
                        <h1>{{$contact->title}}</h1>  
                        @php
                        $head=explode(',',$contact->heading);
                        @endphp             

                        @foreach($head as $he)
                        <h1>{{$he}}</h1>
                        @endforeach

                    </div>
                    <div class="col-6">
                        <img src="images/contact_us_banner.png" alt="" width="100%">
                    </div>
                </div>

            </div>
            <div class="col-12 contact-us">
                <div class="row">
                    <div class="col-11 mx-auto contact-us-content">

                        <div class="row">
                            <div class="col-5 contact-info-box p-4 my-3">
                                <div class="accordion" id="accordionExample">

                                    <!-- <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                {{$contact->contacttitle1}}
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative"> {{$contact->title1address}}</p>
                                                    <p class="phone-conatct position-relative"><a href="tel: +1-800-903-6716">{{$contact->title1number}}</a> (General)</p>
                                                    <p class="phone-conatct position-relative"><a href="tel: +1-888-680-8250">{{$contact->title1number2}}</a> (Sales & Marketing)</p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">{{$contact->title1email}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                               {{$contact->contacttitle2}}
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative"> {{$contact->title2address}}
                                                    <p class="phone-conatct  position-relative"><a href="tel: +52-834-107-1000"> {{$contact->title2number}}</a></p>
                                                    <p class="phone-conatct  position-relative"><a href="tel: +52-800-002">+ {{$contact->title2number2}}</a>-SVAM</p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com"> {{$contact->title2email}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                               {{$contact->contacttitle3}}
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="office-info">
                                                <p class="company-name position-relative">{{$contact->title3address}}
                                                <p class="phone-conatct  position-relative"><a href="tel: +91-120-4043400">{{$contact->title3number}}</a></p>
                                                <p class="email-conatct  position-relative"><a href="mailto: sales@svam.com">{{$contact->title3email}}</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                {{$contact->contacttitle4}}
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">{{$contact->title4address}}</p>
                                                    <p class="phone-conatct  position-relative"><a href="tel: +880 1711-476692">{{$contact->title4number}}</a></p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">{{$contact->title4address}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                {{$contact->contacttitle5}}
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">{{$contact->title5address}}</p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">{{$contact->title5email}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    @php
                                    $contacttitle=explode(',',$contact->ContactTitle);
                                    $contactaddress=explode(',',$contact->ContactTitleAddress);
                                    $contactnum1=explode(',',$contact->ContactTitleNumber);
                                    $contactnum2=explode(',',$contact->ContactTitleNumber2);
                                    $contactemail=explode(',',$contact->ContactTitleEmail);
                                    $regionTitle=explode(',',$contact->RegionTitle);
                                    $regionaddres=explode(',',$contact->regionaddress);
                                    $regioncontct=explode(',',$contact->regioncontact);
                                    $regionmail=explode(',',$contact->regionemail);
                                    @endphp
                                    
                                    @foreach($contacttitle as $ct)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                           
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                               {{$ct}}
                                            </button>
                                          
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                            
                                                <div class="office-info">
                                                @for($i=0;$i<count($contactaddress)-1;$i++)
                                                    <p class="company-name position-relative"> {{$contactaddress[$i]}}</p>
                                                    <p class="phone-conatct  position-relative"> {{$contactnum1[$i]}}</p>
                                                    <p class="phone-conatct  position-relative"> {{$contactnum2[$i]}}</p>
                                                    <p class="email-conatct  position-relative">{{$contactemail[$i]}}</p>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                
                               <h4 class=" pt-3 regional-sales-office">{{$contact->regionaltitle}}</h2>
                                  <!--
                                <div class="accordion" id="regional-office-accordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOneRegional">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneRegional"
                                                aria-expanded="false" aria-controls="collapseOneRegional">
                                                {{$contact->regional1title}}
                                            </button>
                                        </h2>
                                        <div id="collapseOneRegional" class="accordion-collapse collapse" aria-labelledby="headingOneRegional"
                                            data-bs-parent="#regional-office-accordion">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">   {{$contact->regional1address}}</p>
                                                    <p class="phone-conatct  position-relative"><a href="tel: +516-466-6655">   {{$contact->regional1number}}</a></p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">   {{$contact->regional1email}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwoRegional">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwoRegional" aria-expanded="false" aria-controls="collapseTwoRegional">
                                                {{$contact->regional2title}}
                                            </button>
                                        </h2>
                                        <div id="collapseTwoRegional" class="accordion-collapse collapse" aria-labelledby="headingTwoRegional"
                                            data-bs-parent="#regional-office-accordion">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">  {{$contact->regional2address}}</p>
                                                    <p class="phone-conatct"><a href="tel: +512-713-9632">  {{$contact->regional2number}}</a></p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">  {{$contact->regional2email}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThreeRegional">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThreeRegional" aria-expanded="false" aria-controls="collapseThreeRegional">
                                                {{$contact->regional3title}}
                                            </button>
                                        </h2>
                                        <div id="collapseThreeRegional" class="accordion-collapse collapse" aria-labelledby="headingThreeRegional"
                                            data-bs-parent="#regional-office-accordion">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    <p class="company-name position-relative">{{$contact->regional3address}}</p>
                                                    <p class="phone-conatct  position-relative"><a href="tel: +407-765-9147">{{$contact->regional3number}}</a></p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: Sales@svam.com">{{$contact->regional3email}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    @foreach($regionTitle as $rt)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFourRegional">
                                           
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFourRegional" aria-expanded="false" aria-controls="collapseFourRegional">
                                                {{$rt}}
                                            </button>
                                           
                                        </h2>
                                        <div id="collapseFourRegional" class="accordion-collapse collapse" aria-labelledby="headingFourRegional"
                                            data-bs-parent="#regional-office-accordion">
                                            <div class="accordion-body">
                                                <div class="office-info">
                                                    @for($i=0;$i<count($regionaddres)-1;$i++)
                                                    <p class="company-name position-relative"> {{$regionaddres[$i]}}</p>
                                                    <p class="phone-conatct  position-relative"><a href="tel: +516-309-2200"> {{$regioncontct[$i]}}</a></p>
                                                    <p class="email-conatct  position-relative"><a href="mailto: sales@svam.com"> {{$regionmail[$i]}}</a></p>
                                                     @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-7 my-3 ps-4">
                                <h4>Reach us</h4>
                                <!-- <form method="post" action="{{ route('submit.contact.form') }}" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="w-100 py-2" for="">Choose Service</label>
                                            <select class="w-100 form-control" name="" id="">
                                                <option value="">Please select</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">Salutations</label>
                                            <select class="w-100 form-control" name="" id="">
                                                <option value="">Please select</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">First Name</label>
                                            <input class="w-100 form-control" type="text" />
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">Last Name</label>
                                            <input class="w-100 form-control" type="text" />
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">Email</label>
                                            <input class="w-100 form-control" type="text" />
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">Phone Number</label>
                                            <input class="w-100 form-control" type="text" />
                                        </div>
                                        <div class="col-4">
                                            <label class="w-100 py-2" for="">Country & Region</label>
                                            <select class="w-100 form-control" name="" id="">
                                                <option value="">Please select</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="w-100 py-2" for="">Subject</label>
                                            <input class="w-100 form-control" type="text" />
                                        </div>
                                        <div class="col-12">
                                            <label class="w-100 py-2" for="">Message</label>
                                            <textarea class="w-100 form-control" placeholder="Please provide a brief description of your query" rows="3" cols="3"></textarea>
                                        </div>
                                        <div class="col-12 py-2">
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form> -->
     <form method="post" action="{{ route('submit.contact.form') }}">
    @csrf
    <div class="row">
        <div class="col-12">
            <label class="w-100 py-2" for="service">Choose Service</label>
            <select class="w-100 form-control" name="service" id="service">
                <option value="">Please select</option>
                <option value="service_1">Service 1</option>
                <option value="service_2">Service 2</option>
                <!-- Add more options here -->
            </select>
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="salutation">Salutations</label>
            <select class="w-100 form-control" name="salutation" id="salutation">
                <option value="">Please select</option>
                <option value="mr">Mr.</option>
            <option value="mrs">Mrs.</option>
            <option value="ms">Ms.</option>
                <!-- Add more options here -->
            </select>
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="first_name">First Name</label>
            <input class="w-100 form-control" type="text" name="first_name" id="first_name" />
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="last_name">Last Name</label>
            <input class="w-100 form-control" type="text" name="last_name" id="last_name" />
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="email">Email</label>
            <input class="w-100 form-control" type="text" name="email" id="email" />
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="phone_number">Phone Number</label>
            <input class="w-100 form-control" type="text" name="phone_number" id="phone_number" />
        </div>
        <div class="col-4">
            <label class="w-100 py-2" for="country">Country & Region</label>
            <select class="w-100 form-control" name="country" id="country">
            <option value="">Please select</option>
    <option value="usa">United States</option>
    <option value="canada">Canada</option>
    <option value="uk">United Kingdom</option>
    <option value="australia">Australia</option>
            </select>
        </div>
        <div class="col-12">
            <label class="w-100 py-2" for="subject">Subject</label>
            <input class="w-100 form-control" type="text" name="subject" id="subject" />
        </div>
        <div class="col-12">
            <label class="w-100 py-2" for="message">Message</label>
            <textarea class="w-100 form-control" name="message" id="message" placeholder="Please provide a brief description of your query" rows="3" cols="3"></textarea>
        </div>
        <div class="col-12 py-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('footer.footer')
            @endforeach
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