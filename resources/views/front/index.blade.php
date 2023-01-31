@extends('front.layouts.master')
@section('title')
    {{settingSite()->name}}
@endsection


@section('description')


    {{settingSite()->name}}

@endsection

@section('canonical')


    @if(app()->getLocale() == 'ar')
        <link rel="canonical" href="https://faroukgroup.com/ar">


    @else
        <link rel="canonical" href="https://faroukgroup.com/en">
    @endif

@endsection

@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Start Main Banner Area -->
    <div class="main-banner">
        <div class="main-banner-item item-four">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="main-banner-content">
                                    <h2>{{sliderActive()->name}}</h2>
                                    <p>
                                        {!!sliderActive()->notes!!}
                                    </p>
                                    <a href="{{route('home.contactUs')}}" class="default-btn mt-3">{{__('index.slider1')}}
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-banner-image">
                                    <img src="{{asset(sliderActive()->image)}}" width="750px" height="650px"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start About Area -->
    <section class="about-area mt-5 pb-100">
        <div class="container-fluid">
            <div class="row">
                {{--            <div class="col-lg-6" >--}}
                {{--                <div class="" >--}}
                {{--                    <img src="{{ asset(aboutsActive()->image) }}" width="1000px" height="593px" alt="image">--}}
                {{--                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">--}}
                {{--                        <i class='bx bx-play'></i>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
                {{--            </div>--}}

                <div class="col-lg-6">
                    <div class="">
                        <img src="{{ asset(aboutsActive()->image) }}" width="1000px" height="593px" alt="image">

                        <!--<a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">-->
                        <!--    <i class='bx bx-play'></i>-->
                        <!--</a>-->
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content warp">
                        <!--<span>{{__('index.aboutsUs')}}</span>-->
                        <h3>{{aboutsActive()->name}}</h3>
                        <div class="bar"></div>
                        <div class="about-inner-content">
                            <p class="text-success">{!! aboutsActive()->notes!!}</p>

                            <div class="about-btn">
                                <a href="{{route('home.aboutUs')}}" class="default-btn">
                                {{__('index.aboutsUs')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End About Area -->


    <!-- Start Digital Experience Area -->
    <section class="digital-experience-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>{{__('index.services')}}</h2>
                <div class="bar"></div>
            </div>

            <div class="tab digital-experience-tab">
                <ul class="tabs">


                    <li class="bg-5cbd12">
                        <a href="#">
                                <span>
                                    <i class="flaticon-profit"></i>
                                    {{__('index.digital_marketing')}}
                                </span>
                        </a>
                    </li>


                    <li class="bg-04b893">
                        <a href="#">
                                <span>
                                    <i class="flaticon-email-marketing"></i>
                                    {{__('index.target_database')}}
                                </span>
                        </a>
                    </li>



                    <li class="bg-785eda">
                        <a href="#">
                                <span>
                                    <i class="flaticon-network"></i>
                                    {{__('index.digital_transformation')}}
                                </span>
                        </a>
                    </li>



                    <li class="bg-d0465a">
                        <a href="#">
                                <span>
                                    <i class="flaticon-digital-marketing-2"></i>
                                    {{__('index.digital_systems')}}
                                </span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                                <span>
                                    <i class="flaticon-analysis"></i>
                                    {{__('index.Digital_Director')}}
                                </span>
                        </a>
                    </li>



                    <li class="bg-e2851b">
                        <a href="#">
                                <span>
                                    <i class="flaticon-digital-marketing"></i>
                                    {{__('index.digital_trade')}}
                                </span>
                        </a>
                    </li>




                </ul>

                <div class="tab_content">



                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.design')}}</h3>
                                        <p>{{__('index.offer_u')}}</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>
                                        {{__('index.market_view')}}

                                        </h3>
                                        <p>
                                        {{__('index.develop')}}
                                        </p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.market_mission')}}</h3>
                                        <p>
                                        {{__('index.market2')}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-3.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.big')}}</h3>
                                        <p>{{__('index.make')}}</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.target_view')}}</h3>
                                        <p>
                                            {{__('index.big2')}}

                                        </p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.target_mission')}}</h3>
                                        <p>
                                        {{__('index.client')}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-4.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.understand')}}</h3>
                                        <p>
                                        {{__('index.made')}}
                                        </p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.develop_view')}}</h3>
                                        <p>
                                        {{__('index.understand2')}}
                                        </p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.develop_mission2')}}</h3>
                                        <p>
                                        <li> {{__('index.increase')}}</li>
                                        <li> {{__('index.increase2')}}</li>
                                        <li> {{__('index.convert')}}</li>
                                        <li> {{__('index.increase3')}}</li>


                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-5.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.business_view')}}</h3>
                                        <p>
                                        {{__('index.departe')}}
                                        </p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.business_mission')}}</h3>
                                        <p>
                                        {{__('index.understand3')}}
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-6.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">


                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.first')}}</h3>
                                        <p>
                                        {{__('index.make2')}}
                                        </p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.digital_view')}}</h3>
                                        <p>
                                        {{__('index.hire')}}
                                        </p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.digital_mission')}}</h3>
                                        <p>
                                        {{__('index.understand4')}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-1.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="digital-experience-content">


                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.first2')}}</h3>
                                        <p>{{__('index.join2')}}</p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.target_view2')}}</h3>
                                        <p>
                                        {{__('index.hire2')}}
                                        </p>
                                    </div>

                                    <div class="experience-inner-content">
                                        <div class="icon">
                                            <i class="flaticon-check"></i>
                                        </div>
                                        <h3>{{__('index.target_view3')}}</h3>
                                        <p>
                                        {{__('index.understand5')}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="digital-experience-image">
                                    <img src="{{asset('front/assets/img/digital-experience/digital-experience-2.png')}}"
                                         alt="image">
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </section>
    <!-- End Digital Experience Area -->



    {{--<!-- Start Digital Experience Area -->--}}
    {{--<section class="digital-experience-area ptb-100">--}}
    {{--    <div class="container">--}}
    {{--        <div class="section-title">--}}
    {{--            <span>Digital Experience</span>--}}
    {{--            <h2>Outstanding Digital Experience</h2>--}}
    {{--            <div class="bar"></div>--}}
    {{--        </div>--}}

    {{--        <div class="tab digital-experience-tab">--}}
    {{--            <ul class="tabs">--}}

    {{--                @forelse (activeProduct() as $product)--}}
    {{--                <li class="bg-5cbd12" id="{{ $product->id }}">--}}
    {{--                    <a href="#{{ $product->id }}">--}}
    {{--                        <span>--}}
    {{--                            <i class="flaticon-profit"></i>--}}
    {{--                            {{ $product->name }}--}}
    {{--                        </span>--}}
    {{--                    </a>--}}
    {{--                </li>--}}
    {{--                @empty--}}

    {{--                @endforelse--}}


    {{--            </ul>--}}

    {{--            <div class="tab_content">--}}
    {{--                @forelse (activeProduct() as $product)--}}
    {{--                <div class="tabs_item" id="{{ $product->id}}">--}}
    {{--                    <div class="row align-items-center">--}}
    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="digital-experience-content">--}}
    {{--                                {!! $product->notes !!}--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="col-lg-6">--}}
    {{--                            <div class="digital-experience-image">--}}
    {{--                                <img src="{{ asset('front/assets/img/digital-experience/digital-experience-1.png') }}" alt="image">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                @empty--}}

    {{--                @endforelse--}}



    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}
    {{--<!-- End Digital Experience Area -->--}}

    <!-- Start Services Area -->
    <section class="services-area bg-fafafa pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>{{__('index.digital_sol')}}</span>
                <h2>{{__('index.digital_sol2')}}</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                @forelse (categoryActive() as $category)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services-item">
                            <div class="image">
                                <a href="{{route('home.servicesDetails', preg_replace('/\s+/', '-',  $category->name))}}">
                                    <img src="{{asset($category->image ?? 'front/assets/img/services/services-7.jpg')}}"
                                         width="403px" height="310px" alt="image" style="height: 350px">
                                </a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="{{route('home.servicesDetails', preg_replace('/\s+/', '-',  $category->name))}}">{{ $category->name }}</a>
                                </h3>
                                <span>{!! $category->notes !!}</span>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse


            </div>
        </div>


    </section>
    <!-- End Services Area -->

    <!-- Start Features Area -->
    <section class="features-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>{{__('index.steps_work')}}</span>
                <h2>{{__('index.digital_sol2')}}</h2>
                <div class="bar"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="features-image-warp">
                        <img src="{{asset('front/assets/img/features/work2.png')}}" alt="image" >
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">

                        @forelse (eventsActive() as $event )
                            <div class="col-lg-6 col-md-6">
                                <div class="single-features-box top-1" style="height: 280px">


                                        <img src="{{ asset($event->image) }}" width="40px" height="40px" alt="">

                                    <h3>
                                        <a>{{ $event->name }}</a>
                                    </h3>
                                    <p>{!! $event->notes !!}</p>
                                </div>
                            </div>
                        @empty

                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Features Area -->

    <!-- Start Fun Facts Area -->
    <section class="fun-facts-area pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-checked"></i>
                        </div>

                        <h3>
                            <span data-count="4020">4020</span>
                        </h3>
                        <p>{{__('index.database_agent')}}</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-happy"></i>
                        </div>

                        <h3>
                            <span data-count="45000">45000</span>
                        </h3>
                        <p>{{__('index.database_recorded')}}</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-technical-support"></i>
                        </div>

                        <h3>
                            <span data-count="19">19</span>
                        </h3>
                        <p>{{__('index.service11')}}</p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-trophy"></i>
                        </div>

                        <h3>
                            <span data-count="950">950</span>
                        </h3>
                        <p>{{__('index.complet_project')}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="single-fun-fact-box">
                        <div class="icon">
                            <i class="flaticon-trophy"></i>
                        </div>

                        <h3>
                            <span data-count="28013">28013</span>
                        </h3>
                        <p>{{__('index.company_recorded')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->

    <!-- Start Portfolio Area -->
    {{--    <section class="portfolio-area pb-100">--}}
    {{--        <div class="container-fluid">--}}
    {{--            <div class="section-title">--}}

    {{--                <h2>أحدث المشاريع المكتملة</h2>--}}
    {{--                <div class="bar"></div>--}}
    {{--            </div>--}}

    {{--            <div class="portfolio-slider owl-carousel owl-theme">--}}
    {{--                @forelse (adsActive() as $ads)--}}
    {{--                    <div class="single-portfolio-item">--}}
    {{--                        <div class="portfolio-image">--}}
    {{--                            <a href="#">--}}
    {{--                                <img src="{{asset('front/assets/img/portfolio/portfolio-1.jpg')}}" alt="image">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}

    {{--                        <div class="portfolio-content">--}}
    {{--                            <h3>--}}
    {{--                                <a href="#">{{ $ads->name }}</a>--}}
    {{--                            </h3>--}}
    {{--                            <span>{!! $ads->notes !!}</span>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                @empty--}}

    {{--                @endforelse--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- End Portfolio Area -->

    <!-- Start Client Area -->

    <!-- End Client Area -->

    <!-- Start Quote Area -->
    <section class="quote-area ptb-100">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="quote-form">
                        <div class="content">
                            <h3>{{ __('index.Free_consultation_with_a_business_developer') }}</h3>
                        </div>

                        <form method="POST" action="{{ route('sendmessage') }}">
                            @csrf


                            <div class="form-group">
                                @guest('customer')
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                       required placeholder="{{ __('index.name') }}">
                                @else
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                           readonly value="{{auth('customer')->user()->name}}" placeholder="{{ __('index.name') }}">
                                @endguest
                            </div>
                            @guest('customer')
                            <div class="row">
                                <div class="col-md-12">

                                <select class="hessine" style=" " required id="txtcountryTwo" name="country">
                                    <option value="" disabled selected>--{{__('index.choose_code')}}--</option>
                                    <option value="971">{{__('index.au')}}</option>
                                    <option value="962">{{__('index.jo')}}</option>
                                    <option value="973">{{__('index.bh')}}</option>
                                    <option value="966">{{__('index.sa')}}</option>
                                    <option value="964">{{__('index.iq')}}</option>
                                    <option value="965">{{__('index.kw')}}</option>
                                    <option value="968">{{__('index.om')}}</option>

                                    <option value="974">{{__('index.qa')}}</option>
                                    <option value="20">{{__('index.eg')}}</option>



                                    <option value="">{{__('index.other')}}</option>



                                </select>

                                </div>
                            </div>
                            @endguest
                            <div class="form-group">
                                @guest('customer')
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                       name="phone"
                                       required placeholder="{{ __('index.phone') }}">

                                @else
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                           name="phone"
                                           readonly value="{{auth('customer')->user()->phone}}" placeholder="{{ __('index.phone') }}">
                                @endguest
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('activity') is-invalid @enderror"
                                       name="activity" required placeholder="{{ __('index.activity') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('name_comppany') is-invalid @enderror"
                                       name="name_comppany" required placeholder="{{ __('index.name_comppany') }}">
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control @error('type_company') is-invalid @enderror"--}}
{{--                                       name="type_company" required placeholder="{{ __('index.type_company') }}">--}}
{{--                            </div>--}}


                            <br>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <h4>{{__('index.break_point')}}</h4>



                                    <input type="checkbox"   id="vehicle1" name="vehicle1[]" value="مشكلة فى المبيعات">
                                    <label for="vehicle1">{{__('index.sales')}}</label><br>
                                    <input type="checkbox" id="vehicle2" name="vehicle1[]" value="مشكلة فى التسويق">
                                    <label for="vehicle2">{{__('index.market')}}</label><br>
                                    <input type="checkbox" id="vehicle3" name="vehicle1[]" value="مشكلة فى البرمجيات">
                                    <label for="vehicle3">{{__('index.programs')}}</label><br>
                                    <input type="checkbox" id="vehicle4" name="vehicle1[]" value="مشكلة فى إدارة شركتي">
                                    <label for="vehicle4">{{__('index.company_mang')}}</label><br>
                                    <input type="checkbox" id="vehicle5" name="vehicle1[]" value="مشكلة في البراند">
                                    <label for="vehicle5">{{__('index.trade_mark')}}</label><br>



                                </div>

                            </div>



                            <div class="form-group">
                                <textarea class="form-control" name="Message"
                                          placeholder="{{ __('index.Message') }}"></textarea>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        {!! NoCaptcha::renderJs() !!}
                                        <div class="col-md-6">
                                            {!! app('captcha')->display() !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="quote-btn">
                                    <button type="submit" class="default-btn">
                                        {{__('index.sendMessage')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="quote-image" style="text-align: center">
                        <img src="{{asset('front/assets/img/digital-experience/1استشارة.webp')}}" alt="image">
                    </div>
                </div>


            </div>
        </div>

        <div class="quote-shape">
            <div class="shape-1">
                <img src="{{asset('front/assets/img/quote/quote-shape-1.png')}}" alt="image">
            </div>
            <div class="shape-2">
                <img src="{{asset('front/assets/img/quote/quote-shape-2.png')}}" alt="image">
            </div>
        </div>
    </section>
    <!-- End Quote Area -->

    <!-- Start Team Area -->
    <section class="team-area pb-70">
        <div class="container">
            <div class="section-title">
                {{--            <span>Team Member</span>--}}
                <h2>{{__('index.org1')}}</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                @forelse (NumberActive() as $number)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset($number->image)}}" alt="image">
                            </div>

                            <div class="content">
                                <h3>{{ $number->name }}</h3>
                                <span>{!! $number->notes !!}</span>
                                <a href="tel:{{ $number->phone }}" class="default-btn btn-small"
                                   style="border-radius: 50%;padding: 0px 13px !important;"><i class="fa fa-phone"></i></a>
                            </div>
                        </div>
                    </div>

                @empty

                @endforelse

            </div>
        </div>
    </section>
    <!-- End Team Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{__('index.blogs')}}</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                @foreach(App\Models\Blog::where('status',true)->get() as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="image">
                                <a href="{{route('home.blogDetails', preg_replace('/\s+/', '-',  $blog->name))}}">
                                    <img src="{{asset($blog->image ?? 'front/assets/img/blog/blog-1.jpg')}}"
                                         width="403px" height="310px" alt="image">
                                </a>
                            </div>
                            <div class="content">
                            <span>
                                {{$blog->created_at->format('Y-m-d')}}
                            </span>
                                <h3>
                                    <a href="{{route('home.blogDetails', preg_replace('/\s+/', '-',  $blog->name))}}">{{Str::limit($blog->name,28)}}</a>
                                </h3>
                                <a href="{{route('home.blogDetails', preg_replace('/\s+/', '-',  $blog->name))}}" class="blog-btn">{{__('index.read_more')}} <i
                                        class='bx bx-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="default-shape">
            <div class="shape1">
                <img src="{{asset('front/assets/img/default-shape/default-shape1.png')}}" alt="image">
            </div>
            <div class="shape2">
                <img src="{{asset('front/assets/img/default-shape/default-shape2.png')}}" alt="image">
            </div>
            <div class="shape3">
                <img src="{{asset('front/assets/img/default-shape/default-shape3.png')}}" alt="image">
            </div>
            <div class="shape4">
                <img src="{{asset('front/assets/img/default-shape/default-shape4.png')}}" alt="image">
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Subscribe Area -->
    <section class="subscribe-area ptb-100">
        <div class="container">
            <div class="subscribe-content">
                {{--            <span>Get Started Instantly!</span>--}}
                <h3 class="mb-2">{{__('index.last_offer')}}</h3>

                <form  action="{{ route('submitNumber') }}" method="POST" autocomplete="off" >
@csrf
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="phone" required placeholder="{{__('index.code')}}" aria-label="{{__('index.code')}}" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-info"  id="button-addon2">{{__('index.sendMessage')}}</button>
                        </div>
                      </div>



                </form>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area -->

    <!-- Start Partner Area -->
    <div class="partner-area ptb-100">
        <div class="container">
            <div class="partner-slider owl-carousel owl-theme">


                @foreach(galleryActive()->photos as $photo)
                    @if($photo->Filename)
                    <div class="partner-item">
                        <img src="{{asset('admin/pictures/gallery/'.galleryActive()->id.'/'.$photo->Filename)}}" alt="image">
                    </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Partner Area -->



@endsection


@section('js')
@endsection
