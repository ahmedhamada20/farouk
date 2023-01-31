@extends('front.layouts.master')
@section('title')
صفحه غير موجوده على النظام
@endsection

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>صفحه غير موجوده</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">الصفحه الرئسيه</a>
                            </li>
                            <li>صفحه غير موجوده</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Error Area -->
    <section class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <img src="{{asset('front/assets/img/404-error.png')}}" alt="error">

                        <h3>صفحه غير موجوده على النظام</h3>
                        <a href="{{route('home')}}" class="default-btn">
                            الذهاب الي الصفحه الرئسيه
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Error Area -->

@endsection


@section('js')
@endsection
