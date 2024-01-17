<div class="col-12 footer-section">
    @foreach($Footerpage as $footer)
                <div class="row">
                  <div class="col-11 mx-auto py-4">
                    <div class="w-100 pb-3"><img src="images/svam-logo.png" alt="" width="15%"></div>
                    <div class="row border-bottom-footer-inner">
                      <div class="col-12 col-sm-12 col-md-3 text-start">

                      @php
                      $svamInfoFooter=explode(',',$footer->SvamInfoFooter);
                      
                      @endphp
                
                      @foreach($svamInfoFooter as $sif)
                        <span class="address-line d-block py-2">
                          <span class="btn-circle-white"><i class="fas fa-map-marker-alt"></i></span>
                          <span class="d-inline-block ps-2">{{$sif}}</span>
                        </span>
                        @endforeach

                      </div>

                      @php
                      $titles = explode(',', $footer->footertitle);
                      $des = explode(',', $footer->footersubtitle);
                      @endphp

                      @foreach($titles as $key => $title)
                      <div class="col-12 col-sm-12 col-md-3">
                          <h4><span>{{ $title }}</span></h4>
                          <ul>
                          <li ><a href="vCiso-service.html">{{ $des[$key] }}</a></li>
                          </ul>
                      </div>
                      @endforeach
                    
                      <div class="col-12 text-center pb-3">
                        <span class="d-block pb-2">{{$footer->connectwithus}}</span>
                        <span class="btn-circle-white"><i class="fab fa-linkedin-in"></i></span>
                        <span class="btn-circle-white"><i class="fab fa-twitter"></i></span>
                        <span class="btn-circle-white"><i class="fab fa-facebook-f"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-center pb-4">
                  {{$footer->copyright}}
              
                  @php
                  $copyrtitle = explode(',', $footer->CopyRsubtitle);
                  @endphp

                  @php
                 $policyUrls = [
                     'privacy-policy.html',
                     'cookie-policy.html',
                     'security-policy.html',
                     '',
                     '',
                 ];
                @endphp

               @for ($i = 0; $i < count($copyrtitle); $i++)
                   <a href="{{ $policyUrls[$i] }}" class="px-2">{{ $copyrtitle[$i] }}</a>
               @endfor


                 
                  </div>
                </div>
                @endforeach
              </div>
   </div>