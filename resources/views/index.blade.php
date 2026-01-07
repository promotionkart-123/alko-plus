@extends('layout.main')
@section('content')

    <div class="section-empty no-paddings-y">
        <div class="container content">
            <div class="row">
                <div class="col-md-5" data-anima="fade-left" data-timeline="asc" data-time="1000" data-timeline-time="400">
                    <hr class="space" />
                    <h1 class="text-xl text-normal anima">Alko Plus</h1>
                    <p class="anima text-uppercase">
                       Alko Plus is one of the leading Personal Protective Equipment (PPE) manufacturing enterprise and is rated among the finest Indian companies providing high quality PPE.
                    </p>
                    <hr class="space s" />
                    <div class="anima">
                        <a href="{{route('about-us')}}" class="btn btn-lg btn-border hidden-xs">Read More</a>
                    </div>
                </div>
                <div class="col-md-7" data-anima="fade-right" data-time="1100">
                     @if(isset($globalBanner) && $globalBanner->banner)
                    <img src="{{ asset($globalBanner->banner) }}" alt="Banner" />
                @else
                   
                    <img src="{{ asset('assets/images/image-mans.jpg') }}" alt="Default Banner" />
                @endif
                </div>
            </div>
        </div>
    </div>
    <div class="section-bg-color">
        <div class="container content">
            <div class="row">
                <div class="col-md-3">
                    <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                        <a class="img-box lightbox img-scale-up" href="#">
                            <span><img src="{{ asset('assets/images/gallery/image-1.jpg') }}" alt=""></span>
                        </a>
                        <div class="advs-box-content">
                            <h3>MISSION</h3>
                            <p>
                               Our mission at ALKO PLUS is to be a globally respected name in the Personal Protective Equipment (PPE) industry.
                            </p>
                            <a href="{{ route('about-us') }}" class="btn-text">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                        <a class="img-box lightbox img-scale-up" href="#">
                            <span><img src="{{ asset('assets/images/gallery/image-2.jpg') }}" alt=""></span>
                        </a>
                        <div class="advs-box-content">
                            <h3>VISION</h3>
                            <p>
                              Our vision is to be the preferred choice for individuals and organizations seeking Personal Protective Equipment.
                            </p>
                            <a href="{{ route('about-us') }}" class="btn-text">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                        <a class="img-box lightbox img-scale-up" href="#">
                            <span><img src="{{ asset('assets/images/gallery/image-6.jpg') }}" alt=""></span>
                        </a>
                        <div class="advs-box-content">
                            <h3>ACCREDITATION</h3>
                            <p>
                               At ALKO PLUS, we are committed to upholding the highest standards in the industry.
                            </p>
                            <a href="{{ route('about-us') }}" class="btn-text">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box advs-box-top-icon-img boxed-inverse text-left">
                        <a class="img-box lightbox img-scale-up" href="#">
                            <span><img src="{{ asset('assets/images/gallery/image-3.jpg') }}" alt=""></span>
                        </a>
                        <div class="advs-box-content">
                            <h3>VALUES</h3>
                            <p>
                                Satisfaction and safety are our top priorities.
                            </p>
                            <a href="{{ route('about-us') }}" class="btn-text" style="margin-top:50px">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-sm-4">
                      <div class="title-base text-left">
                        <hr />
                        <h2>About Alko Plus</h2>
                        <p>The company</p>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-4">
                  
                    <a class="" href="images/image-1.jpg" data-lightbox-anima="fade-left">
                        <img src="{{ asset('assets/images/about.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-8 col-sm-8 mt-3">
                    <p>
                       Alko Plus is one of the leading Personal Protective Equipment (PPE) manufacturing enterprise and is rated among the finest Indian companies providing high quality PPE.
                    </p>
                    <p>
                     Headquartered in Bahadurgarh (Haryana), Alko Plus takes great pride in its ability to deliver a magnificent product range with an all-round assurance of safety to its user. It is our endeavour in Alko Plus to provide the finest and the best solution in the field of personal protection to our valued customers. Our product range includes Safety Helmets, Full Body Harness, Safety Nets, PVC Shoes, PU Occupational & Safety Shoes, PVC Occupational & Protective Boots.
                    </p>
                    <hr class="space s" />
                    <div class="anima">
                        <a href="{{route('about-us')}}" class="btn btn-lg btn-border hidden-xs">Read More</a>
                    </div>
                </div>

                </div>
        </div>
    </div>

    <div class="section-bg-image parallax-window" data-natural-height="650" data-natural-width="1980" data-parallax="scroll" data-image-src="{{ asset('assets/images/bg-2.jpg') }}">
        <div class="container content">
            <div class="row proporzional-row">
                <div class="col-md-4 col-sm-6 boxed white middle-content text-left">
                    <h2 class="text-l"><b>Years of Experience</b></h2>
                    <div class="counter-box-simple"><span class="counter text-xl" data-to="15"></span> + </div>
                </div>
                <div class="col-md-4 col-sm-6 boxed-inverse middle-content text-left">
                    <h2 class="text-l"><b>Customers</b></h2>
                    <div class="counter-box-simple"><span class="counter text-xl" data-to="300"></span> + </div>
                </div>
                 <div class="col-md-4 col-sm-6 boxed white middle-content text-left">
                    <h2 class="text-l"><b>Products</b></h2>
                    <div class="counter-box-simple"><span class="counter text-xl" data-to="50"></span> + </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bg-color">
        <div class="container content">
            <div class="row vertical-row">
                <div class="col-md-10 opacity-8">
                    <h3>Reach out to us</h3>
                    <p class="no-margins">Build a safer future for your organization by connecting with Alko Plus</p>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('contact-us') }}" class="btn-border btn btn-lg nav-justified">Click Here</a>
                </div>
            </div>
        </div>
    </div>
  
    <div class="section-bg-image parallax-window white" data-natural-height="650" data-natural-width="1920" data-parallax="scroll" data-image-src="{{ asset('assets/images/bg-12.jpg') }}">
        <div class="container content">
             <div class="row">
                <div class="col-sm-4">
                      <div class="title-base text-left">
                        <hr />
                        <h2>Industries We Serve</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row proporzional-row">
                <div class="col-md-4 col-sm-12 boxed">
                    <h2>ENGINEERING AND FABRICATION INDUSTRY</h2>
                </div>
                <div class="col-md-8 boxed boxed-border white">
                    <p>
              In the engineering and fabrication industry, the importance of PPE cannot be underestimated. The nature of the work involves potential hazards such as falling objects, exposure to harmful substances, and loud noises. At Alko Plus, we understand the specific safety needs of this industry and offer a range of PPE solutions to address them.
                    </p>
                </div>
            </div>
            <div class="row proporzional-row"  style="margin-top:10px">
               
                <div class="col-md-8 boxed boxed-border white">
                    <p>Workers in the automobile industry face numerous hazards, including exposure to chemicals, sharp objects, and loud noises. With our expertise in providing PPE solutions, Alko Plus ensures the safety of workers in this sector. Our PPE products for the automobile industry.
            </p>
                </div>
                 <div class="col-md-4 col-sm-12 boxed">
                    <h2>AUTOMOBILE INDUSTRIES</h2>
                </div>
            </div>
            <div class="row proporzional-row"  style="margin-top:10px">
                <div class="col-md-4 col-sm-12 boxed">
                    <h2>FACILITY MANAGEMENT & SECURITY</h2>
                </div>
                <div class="col-md-8 boxed boxed-border white">
                    <p>In facility management and security roles, it is crucial to prioritize personal protection. Workers in these sectors may face various hazards, such as exposure to harmful substances, physical confrontations, and ergonomic issues. Alko Plus has a range of PPE products specifically designed for professionals in this industry.</p>
                </div>
            </div>
            <div class="row proporzional-row" style="margin-top:10px">
                
                <div class="col-md-8 boxed boxed-border white">
                    <p>
                        The aviation industry has unique safety challenges due to the nature of the work involved. Aviation professionals face risks such as exposure to high noise levels, hazardous materials, and potential accidents. Alko Plus offers specialized PPE solutions to ensure the safety of workers in the aviation industry.
             </p>
                </div>
                <div class="col-md-4 col-sm-12 boxed">
                    <h2>AVIATION INDUSTRY</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-sm-4">
                     <div class="title-base text-left">
                        <hr />
                        <h2>Our Accreditation</h2>
                       
                </div>
            </div>
           <div class="row">
            <div class="col-sm-12">
                 <div class="flexslider carousel outer-navs png-over text-center" data-options="numItems:6,minWidth:100,itemMargin:30,controlNav:false,directionNav:false">
                <ul class="slides">
                    <li>
                        <a class="img-box" href="#">
                            <img src="{{ asset('assets/images/isi.jpg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="{{ asset('assets/images/isi.jpg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="{{ asset('assets/images/isi.jpg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="{{ asset('assets/images/isi.jpg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="{{ asset('assets/images/isi.jpg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="{{ asset('assets/images/isi.jpg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="{{ asset('assets/images/isi.jpg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="{{ asset('assets/images/isi.jpg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="{{ asset('assets/images/isi.jpg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="{{ asset('assets/images/isi.jpg')}}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            </div>
           </div>
        </div>
    </div>

    @endsection
   