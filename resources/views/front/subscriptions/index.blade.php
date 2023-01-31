@extends('front.layouts.master')
@section('title')
{{__('index.confirm')}}
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

    
    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{__('index.join')}}
                        </h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">{{__('index.Home')}}</a>
                            </li>
                            <li>{{__('index.join')}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>

    <!-- Start Contact Area -->
    <section class="contact-area pb-100 mb-5">
        <div class="container">
            <div class="section-title">
                {{-- <span>Get in Touch</span> --}}
                <h2>{{__('index.join')}}</h2>
                <div class="bar"></div>
            </div>

            <div class="contact-form">
                <form action="{{ route('home.subscriptionsPost') }}" method="POST">
                    @csrf

                    <input type="hidden" name="courses_id" value="{{$services->id}}">
                    <input type="hidden" name="packages_id" value="{{$package->id}}">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 text-center">
                            <div class="form-group">
                                <label>{{__('index.service_name')}}</label>
                                <h5>{{$services->name}}</h5>
{{--                                <input type="text" value="{{$services->name}}" class="form-control" readonly >--}}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 text-center">
                            <div class="form-group">
                                <label>{{__('index.packeg_name')}}</label>
                                <h5>{{$package->name}}</h5>
{{--                                <input type="text"  value="{{$package->name}}" class="form-control" readonly >--}}
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>{{__('index.name')}}<span class="text-danger">*</span></label>
                                @auth('customer')
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid

                                @enderror" value="{{auth('customer')->user()->name}}" readonly data-error="{{ __('index.namerequired') }}">
                                    <div class="help-block with-errors"></div>
                                @else
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid

                                @enderror" required data-error="{{ __('index.namerequired') }}">
                                    <div class="help-block with-errors"></div>
                                @endauth

                            </div>
                        </div>

                        <div class="row">
                            @guest('customer')
                            <div class="col-lg-6 col-md-6">
                            <label>{{__('index.choose_code')}}<span class="text-danger">*</span></label>
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
                            @endguest

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{__('index.phone')}}<span class="text-danger">*</span></label>
                                    @auth('customer')
                                        <input type="number" name="phone" readonly id="phone" class="form-control @error('phone') is-invalid

                                    @enderror" value="{{auth('customer')->user()->phone}}" data-error="{{ __('index.phonerequired') }}">
                                        <div class="help-block with-errors"></div>
                                    @else

                                        <input type="number" name="phone" id="phone" class="form-control @error('phone') is-invalid

                                    @enderror" required data-error="{{ __('index.phonerequired') }}">
                                        <div class="help-block with-errors"></div>
                                    @endauth

                                </div>
                            </div>
                        </div>
                      

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>{{__('index.email')}}<span class="text-danger">*</span></label>
                                @auth('customer')

                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid

                                @enderror" value="{{auth('customer')->user()->email}}" readonly data-error="{{ __('index.emailrequired') }}">
                                    <div class="help-block with-errors"></div>
                                @else
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid

                                @enderror" required data-error="{{ __('index.emailrequired') }}">
                                    <div class="help-block with-errors"></div>
                                @endauth

                            </div>
                        </div>

                        <!--<div class="col-lg-12 col-md-12">-->
                        <!--    <div class="form-group">-->
                        <!--        <label>الدولة<span class="text-danger">*</span></label>-->
                        <!--        <input type="text" name="country" id="country" class="form-control @error('country') is-invalid-->

                        <!--        @enderror" required data-error="{{ __('index.countryrequired') }}">-->
                        <!--        <div class="help-block with-errors"></div>-->
                        <!--    </div>-->
                        <!--</div>-->


                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                                <label>{{__('index.job_title')}}<span class="text-danger">*</span></label>
                                <input type="text" name="jobs" id="jobs" class="form-control @error('jobs') is-invalid

                                @enderror" required data-error="{{ __('index.jobsrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
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



                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">
                            {{__('index.confirm')}}
                            </button>

                            {{-- <div id="msgSubmit" class="h3 text-center hidden"></div> --}}
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

@endsection


@section('js')
@endsection
