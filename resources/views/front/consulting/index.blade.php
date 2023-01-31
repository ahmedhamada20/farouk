@extends('front.layouts.master')
@section('title')
{{__('index.consulting_free')}}
@endsection

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif



    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{__('index.consulting_free_date')}}</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">{{__('index.Home')}}</a>
                            </li>
                            <li>{{__('index.consulting_free_date')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
               <!-- <p>سجل بياناتك الآن وسيقوم بالتواصل معك أحد مطورين الأعمال</p> -->
                <h2>{{__('index.signup_contact')}}</h2>
                <div class="bar"></div>
                <p class="strong">{{__('index.choose_time')}}</p>
                <div class="bar"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="contact-image">
                        <img src="{{asset('front/assets/img/الإستمارات.jpg')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form-inner">
                        <form  action="{{route('sendConsulting')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        @guest('customer')
                                            <input type="text" name="name" id="name" class="form-control" required data-error="{{__('index.enter_name')}}" placeholder="{{__('index.name')}} ">
                                            <div class="help-block with-errors"></div>
                                        @else
                                            <input type="text" name="name" id="name" class="form-control" readonly value="{{auth('customer')->user()->name}}" data-error="{{__('index.enter_name')}}" placeholder="{{__('index.name')}} ">
                                            <div class="help-block with-errors"></div>
                                        @endguest

                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="activity" id="email" class="form-control" required data-error="{{__('index.enter_job')}}" placeholder="{{__('index.job')}}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                {{-- <div class="row"> --}}
                                @guest('customer')
                                    <div class="col-md-6">


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

                                @guest('customer')
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="phone" id="phone_number" required data-error="{{__('index.enter_mobile')}}" class="form-control" placeholder="{{__('index.mobile')}} ">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                @else

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="phone" id="phone_number" readonly value="{{auth('customer')->user()->phone}}" data-error="{{__('index.enter_mobile')}}" class="form-control" placeholder="{{__('index.mobile')}} ">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                @endguest
                                {{-- </div> --}}

                               

           

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name_comppany" id="msg_subject" class="form-control" required data-error="{{__('index.enter_activity')}}" placeholder="{{__('index.activity')}} ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="data" id="msg_subject" class="form-control" required data-error="{{__('index.enter_day')}}" placeholder="{{__('index.day')}}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

<!-- <div class="col-lg-6 col-md-6">-->
<!--    <div class="form-group">-->
<!--        <input type="time" name="time" id="msg_subject" class="form-control" required data-error="ادخل الوقت المحدد" placeholder="الوقت ">-->
<!--        <div class="help-block with-errors"></div>-->
<!--    </div>-->
<!--</div> -->

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="Message" class="form-control"  id="message" cols="30" rows="5" required data-error="{{__('index.enter_consulting')}}" placeholder="{{__('index.ur_consulting')}}"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
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

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">{{__('index.send_consulting')}}</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

@endsection


@section('js')
@endsection
