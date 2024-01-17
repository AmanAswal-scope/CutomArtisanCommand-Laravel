<!doctype html>
<html lang="en">

@include('header.head')

<body>
  <div class="container-fluid">
    @foreach($aboutuspage as $aboutus)
    <div class="row">
    @include('header.header')
      <div class="col-12 our-services-section">
        <div class="row">
            <div class="col-11 mx-auto">
        <h2 class="pt-5 pb-4 text-start">{{$aboutus->Title}}</h2>
        <div class="w-100">
          <p>{{$aboutus->description}}</p>
        </div>
      </div>
      </div>  
      </div>
      <div class="col-12 our-team-box">
        <div class="row">
          <div id="ourTeam" class="col-11 mx-auto">
            <h1 class="pt-5 pb-4 text-center">{{$aboutus->Title}}</h1>
        <ul class="our-team-list">
          <li class="m-0 m-lg-4 text-center">
            <img src="images/Anil-kapoor.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>{{$aboutus->Title}}</strong></p>
            <p>{{$aboutus->Title}}</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/vikas-dhablania.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>{{$aboutus->Title}}</strong></p>
            <p>{{$aboutus->Title}}</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/kiran_bujle.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>{{$aboutus->Title}}</strong></p>
            <p>{{$aboutus->Title}}</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/Shahryar.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>{{$aboutus->Title}}</strong></p>
            <p>E{{$aboutus->Title}}</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/Kambiz_Mofrad.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>{{$aboutus->Title}}</strong></p>
            <p>{{$aboutus->Title}}</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/Tanuj_Mathur.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>{{$aboutus->Title}}</strong></p>
            <p>{{$aboutus->Title}}</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/matthew_lang.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>{{$aboutus->Title}}</strong></p>
            <p>{{$aboutus->Title}}</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/yesica-heredia-guerrero.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>{{$aboutus->Title}}</strong></p>
            <p>{{$aboutus->Title}}</p>
          </li>
          <li class="m-0 m-lg-4 text-center">
            <img src="images/manish_sehgal.png" alt="">
            <p class="team-title pt-3 pb-1 mb-0"><strong>{{$aboutus->Title}}</strong></p>
            <p>{{$aboutus->Title}}</p>
          </li>
        </ul>
            </div>
            </div>
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
              <span class="d-inline-block px-4"><span class="d-block contact-us-text">Still have any questions about our services</span>
                    <button class="btn btn-primary mt-4">Contact now</button>
              </span>
            </p>
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