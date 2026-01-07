<header class="fixed-top scroll-change" data-menu-anima="fade-in">
    <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
        <div class="navbar-mini scroll-hide">
            <div class="container">
                <div class="nav navbar-nav navbar-left">
                     @if(isset($globalContact) && $globalContact->contact_no)
                   <span><i class="fa fa-phone"></i>{{ $globalContact->contact_no  }}</span>
                @else
                   
                     <span><i class="fa fa-phone"></i>Null</span>
                @endif
                    
                    <hr />
                       @if(isset($globalContact) && $globalContact->email)
                   <span><i class="fa fa-envelope"></i>{{ $globalContact->email  }}</span>
                @else
                   
                     <span><i class="fa fa-envelope"></i>Null</span>
                @endif
                    <hr />
                    
                    <span>
                         @if(isset($globalContact) && $globalContact->address)
                   <span><i class="fa fa-map-marker"></i>{{ $globalContact->address  }}</span>
                @else
                   
                     <span><i class="fa fa-map-marker"></i>Null</span>
                @endif
                        <hr /><hr /><hr />
                        <span>
                              @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/admin/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                           <i class="fa fa-home"></i>
                        </a>
                    @else
                        <a href="{{ route('login') }}"  class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                           <i class="fa fa-user"></i>
                        </a>
                    @endauth
                </span>
            @endif

                </div>
            </div>
        </div>
        <div class="navbar navbar-main">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img class="logo-default" src="{{ asset('/assets/images/logos/alko-logo.png') }}" alt="logo" />
                        <img class="logo-retina" src="{{ asset('/assets/images/logos/logo-retina.png') }}" alt="logo" />
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="{{ route('home') }}">Home </a>

                        </li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                href="{{ route('about-us') }}">About Us</a></li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                href="{{ route('products') }}">Products</a></li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                href="{{ route('catalogue') }}">Catalogue</a></li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                href="{{ route('career') }}">Career</a></li>
                        <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                href="{{ route('contact-us') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>