@extends('front.layouts.master')
@section('title')
    Services
@endsection

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Services Three</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>Services Three</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Services Area -->
    <section class="services-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box">
                        <div class="icon">
                            <i class="flaticon-code"></i>
                        </div>

                        <h3>
                            <a href="{{(route('home.servicesDetails'))}}">Website Development</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu  labore et dolore magna aliqua.</p>
                        <a href="{{(route('home.servicesDetails'))}}" class="services-btn">Read More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box">
                        <div class="icon">
                            <i class="flaticon-vector"></i>
                        </div>

                        <h3>
                            <a href="{{(route('home.servicesDetails'))}}">Web Design</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu  labore et dolore magna aliqua.</p>
                        <a href="{{(route('home.servicesDetails'))}}" class="services-btn">Read More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box">
                        <div class="icon">
                            <i class="flaticon-network"></i>
                        </div>

                        <h3>
                            <a href="{{(route('home.servicesDetails'))}}">Social Media Marketing</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu  labore et dolore magna aliqua.</p>
                        <a href="{{(route('home.servicesDetails'))}}" class="services-btn">Read More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box">
                        <div class="icon">
                            <i class="flaticon-search"></i>
                        </div>

                        <h3>
                            <a href="{{(route('home.servicesDetails'))}}">Content Marketing</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu  labore et dolore magna aliqua.</p>
                        <a href="{{(route('home.servicesDetails'))}}" class="services-btn">Read More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box">
                        <div class="icon">
                            <i class="flaticon-digital-marketing-1"></i>
                        </div>

                        <h3>
                            <a href="{{(route('home.servicesDetails'))}}">Digital Media & PPC</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu  labore et dolore magna aliqua.</p>
                        <a href="{{(route('home.servicesDetails'))}}" class="services-btn">Read More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box">
                        <div class="icon">
                            <i class="flaticon-cpu"></i>
                        </div>

                        <h3>
                            <a href="{{(route('home.servicesDetails'))}}">Technology</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incutu  labore et dolore magna aliqua.</p>
                        <a href="{{(route('home.servicesDetails'))}}" class="services-btn">Read More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
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
@endsection


@section('js')
@endsection
