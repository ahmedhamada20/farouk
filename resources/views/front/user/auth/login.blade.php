@extends('front.layouts.master')
@section('title')
{{__('index.login')}}
@endsection

@section('content')


<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>{{__('index.login')}}</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}"> {{__('index.Home')}}</a>
                        </li>
                        <li>{{__('index.login')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Start Login Area -->
    <section class="login-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="login-image">
                        <img src="{{asset('front/assets/img/login-form.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="login-form">
                        <h2>{{__('index.login')}}</h2>

                        <form action="{{route('GuestLogin')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label>{{__('index.email')}}</label>
                                <input type="email" class="form-control" name="email" required >
                            </div>

                            <div class="form-group">
                                <label>{{__('index.pass')}}</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>

                            <button type="submit" class="default-btn">{{__('index.login')}}</button>
                             <div class="row  mt-2 ">
                                <div class="col-lg-12 col-md-12 col-sm-12 text-right lost-your-password" style="text-align:center !important; ">
                                    <a href="{{route('GuestRegister')}}" class="lost-your-password" style="color:blue !important">{{__('index.new_signup')}}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login Area -->


@endsection


@section('js')
@endsection
