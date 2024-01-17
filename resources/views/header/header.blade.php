


            <div class="col-12 navbar-bg">
                <header>
                    <div class="row">
                        @foreach($headerpage as $header)
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
                        
                           
                              
                              @php
                                  $subtitles = explode(',', $header->headertitle);
                                  $suburl = ['admin', 'home', 'services','aboutus','#','#']; 

                              @endphp
                              
                              @for ($i = 0; $i < count($subtitles); $i++)
                                  <li class="nav-item px-3">
                                      <a class="nav-link" href="{{ url($suburl[$i]) }}">{{ $subtitles[$i] }}</a> 
                                  </li>
                              @endfor

                            </ul>
                            <div class="call_section float-left">
                              <a href="{{ route('contact.index') }}" class="btn btn-primary d-inline-block">{{$header->headertitle6}}</a>
                              <div class="d-inline-block ps-2"><a href="#"><i class="text-white fas fa-search"></i></a></div>
                            </div>
                          </div>
                        </div>
                        </nav>
                      </div>
                      @endforeach
                    </div>
                  </header>
            </div>
            
            