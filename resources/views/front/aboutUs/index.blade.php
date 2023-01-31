@extends('front.layouts.master')
@section('title')
{{__('index.aboutsUs')}}
@endsection

@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>{{__('index.aboutsUs')}}
                    </h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">{{__('index.Home')}}
                            </a>
                        </li>
                        <li>{{__('index.aboutsUs')}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start About Area -->
<section class="about-area mt-5 pb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="">
                    <img src="{{ asset(aboutsActive()->image) }}" width="1000px" height="593px" alt="image">
                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content warp">
                    <!--<span>{{__('index.aboutsUs')}}</span>-->
                    <h3>{{aboutsActive()->name}}</h3>
                    <div class="bar"></div>
                    <div class="about-inner-content">
                        <p>{!! aboutsActive()->notes!!}</p>
                        {{-- <div class="icon">--}}

                        {{-- </div>--}}

                        {{-- <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt labore dolore magna aliqua.</strong>--}}
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                commodo viverra maecenas accumsan lacus vel facilisis.</p>--}}

                        {{-- <div class="about-inner-content">--}}
                        {{-- <div class="icon">--}}
                        {{-- <i class="flaticon-check"></i>--}}
                        {{-- </div>--}}
                        {{-- <h4>Online Presence</h4>--}}
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>--}}
                        {{-- </div>--}}

                        {{-- <div class="about-inner-content">--}}
                        {{-- <div class="icon">--}}
                        {{-- <i class="flaticon-check"></i>--}}
                        {{-- </div>--}}
                        {{-- <h4>Marketing Strategy</h4>--}}
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>--}}
                        {{-- </div>--}}

                        {{-- <div class="about-inner-content">--}}
                        {{-- <div class="icon">--}}
                        {{-- <i class="flaticon-check"></i>--}}
                        {{-- </div>--}}
                        {{-- <h4>Promote local Sale</h4>--}}
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>--}}
                        {{-- </div>--}}

                        {{-- <div class="about-btn">--}}
                        {{-- <a href="#" class="default-btn">--}}
                        {{-- ؟؟؟؟؟--}}
                        {{-- </a>--}}
                        {{-- </div>--}}
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End About Area -->
<div class="row">
    <div class="col-lg-9" style="margin-right: 30px;">
        {!! aboutsActivelastet()->notes !!}
    </div>
</div>
<br>
<!-- Start Team Area -->
<section class="team-area pb-70">
    <div class="container">
        <div class="section-title">
            {{-- <span>Team Member</span>--}}
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
                        <a href="tel:{{ $number->phone }}" class="default-btn btn-small" style="border-radius: 50%;padding: 0px 13px !important;"><i class="fa fa-phone"></i></a>
                    </div>
                </div>
            </div>

            @empty

            @endforelse
            {{--
                            <div class="col-lg-3 col-md-6">
                                <div class="single-team-box">
                                    <div class="image">
                                        <img src="{{asset('front/assets/img/team/team-7.jpg')}}" alt="image">

            <ul class="social">
                <li>
                    <a href="#" target="_blank">
                        <i class='bx bxl-facebook'></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class='bx bxl-twitter'></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class='bx bxl-linkedin'></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class='bx bxl-instagram'></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content">
            <h3>Justin Roberto</h3>
            <span>Head Of Marketing</span>
        </div>
    </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="single-team-box">
            <div class="image">
                <img src="{{asset('front/assets/img/team/team-8.jpg')}}" alt="image">

                <ul class="social">
                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-facebook'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-twitter'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-linkedin'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-instagram'></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="content">
                <h3>Louis Agassiz</h3>
                <span>Web Developer</span>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="single-team-box">
            <div class="image">
                <img src="{{asset('front/assets/img/team/team-9.jpg')}}" alt="image">

                <ul class="social">
                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-facebook'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-twitter'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-linkedin'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-instagram'></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="content">
                <h3>Carl Anderson</h3>
                <span>Android/IOS Developer</span>
            </div>
        </div>
    </div> --}}
    </div>
    </div>
</section>
<!-- End Team Area -->

@endsection


@section('js')
@endsection