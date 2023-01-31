<!-- Start Preloader Area -->
<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
        <div class="box"></div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset(settingSite()->image)}}" width="120px" height="40px" class="black-logo"
                             alt="image">
                        <img src="{{asset(settingSite()->image)}}" width="120px" height="40px" class="white-logo"
                             alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset(settingSite()->image)}}" width="120px" height="40px" class="black-logo"
                         alt="image">
                    <img src="{{asset(settingSite()->image)}}" width="120px" height="40px" class="white-logo"
                         alt="image">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link {{getActiveRoutesHome('home')}}">
                                {{__('index.Home')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('home.aboutUs')}}"
                               class="nav-link {{getActiveRoutesHome('home.aboutUs')}}">
                                {{__('index.aboutsUs')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{getActiveRoutesHome('home.services')}}">
                                {{__('index.Our_digital_services')}}
                                <i class='bx bx-chevron-down'></i>
                            </a>

                            <ul class="dropdown-menu">
                                @foreach(App\Models\Category::where('status',true)->limit(4)->get() as $row)
                                    <li class="nav-item">
                                        <a href="{{route('home.servicesDetails', preg_replace('/\s+/', '-',  $row->name))}}"
                                           class="nav-link ">
                                            {{$row->name}}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link {{getActiveRoutesHome('home.services')}}">
                                {{__('index.digital_sol')}}
                                <i class='bx bx-chevron-down'></i>
                            </a>

                            <ul class="dropdown-menu">
                                @foreach(App\Models\Category::where('status',true)->skip(4)->limit(3)->get() as $row)
                                    <li class="nav-item">
                                        <a href="{{route('home.servicesDetails', preg_replace('/\s+/', '-',  $row->name))}}"
                                           class="nav-link">
                                            {{$row->name}}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('home.consulting')}}"
                               class="nav-link {{getActiveRoutesHome('home.consulting')}}">
                                {{__('index.Consulting')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('home.contact')}}"
                               class="nav-link  {{getActiveRoutesHome('home.contact')}}">
                                {{__('index.Connect_with_us')}}
                            </a>
                        </li>

                        @auth('customer')
                            <li class="nav-item">
                                <a href="" class="nav-link {{getActiveRoutesHome('home.services')}}">
                                    {{__('index.loginIn')}}
                                    <i class='bx bx-chevron-down'></i>
                                </a>

                                <ul class="dropdown-menu">

                                    <li class="nav-item">
                                        <a href="{{route('GuestLogin')}}"
                                           class="nav-link {{getActiveRoutesHome('GuestRegister')}} ">
                                            {{__('index.loginInDash')}}
                                        </a>
                                    </li>

                                    <li class="nav-item">


                                        <form method="POST" action="{{ route('GuestLogout') }}">
                                            @csrf
                                            <a href="" :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                               class="nav-link {{getActiveRoutesHome('GuestRegister')}} ">
                                               {{__('index.out')}}
                                            </a>


                                        </form>


                                    </li>

                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{route('GuestLogin')}}"
                                   class="nav-link {{getActiveRoutesHome('GuestRegister')}} ">
                                    {{__('index.login')}}
                                </a>
                            </li>

                        @endauth

                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="{{ route('home.contactUs') }}">
                                    <i class='flaticon-shopping-cart'></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>

                        {{-- <div class="option-item">
                            <i class="search-btn flaticon-loupe"></i>
                            <i class="close-btn flaticon-cancel"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="بحث" type="text">

                                        <button class="search-button" type="submit">
                                            <i class="flaticon-loupe"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}

                        <div class="option-item">
                            <div class="dropdown">
                                <a class=" dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="fa-solid fa-globe"></i> {{App::getLocale() == 'ar' ? 'AR' : 'EN'}}
                                </a>

                                <ul class="dropdown-menu">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" class="dropdown-item" hreflang="{{ $localeCode }}"
                                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>


                                {{--                                <ul class="dropdown-menu">--}}
                                {{--                                    <li><a class="dropdown-item" href="#">Action</a></li>--}}
                                {{--                                    <li><a class="dropdown-item" href="#">Another action</a></li>--}}
                                {{--                                    <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                                {{--                                </ul>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="{{ route('home.contactUs') }}">
                                    <i class='flaticon-shopping-cart'></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>

                        <!--<div class="option-item">-->
                        <!--    <i class="search-btn flaticon-loupe"></i>-->
                        <!--    <i class="close-btn flaticon-cancel"></i>-->
                        <!--    <div class="search-overlay search-popup">-->
                        <!--        <div class='search-box'>-->
                        <!--            <form class="search-form">-->
                        <!--                <input class="search-input" name="search" placeholder="Search" type="text">-->

                        <!--                <button class="search-button" type="submit">-->
                        <!--                    <i class="flaticon-loupe"></i>-->
                        <!--                </button>-->
                        <!--            </form>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
