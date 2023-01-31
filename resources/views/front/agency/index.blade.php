@extends('front.layouts.master')
@section('title')
{{__('index.agency')}}
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


<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>{{__('index.agency')}}</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}"> {{__('index.Home')}}</a>
                        </li>
                        <li>{{__('index.agency')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



  <!-- Start Contact Info Area -->
  <section class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="flaticon-email-1"></i>
                    </div>

                    <h3>{{__('index.email')}}
                    </h3>

                    <p>{{ settingSite()->email }}</p>
                    {{-- <p><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#c1a9a4adadae81b2b1a8b9efa2aeac"><span class="__cf_email__" data-cfemail="1e767b7272715e6d6e7766307d7173">[email&#160;protected]</span></a></p> --}}
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="flaticon-pin"></i>
                    </div>

                    <h3>{{__('index.address')}}</h3>
                    <p>                            <a href="https://www.google.com/maps/place/%D8%B4%D8%B1%D9%83%D8%A9+%D9%81%D8%A7%D8%B1%D9%88%D9%82+%D8%AC%D8%B1%D9%88%D8%A8+%D9%84%D9%84%D8%AA%D8%AC%D8%A7%D8%B1%D9%87+%D8%A7%D9%84%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%8A%D8%A9+%D9%88%D8%A7%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D9%87%E2%80%AD/@30.0004233,31.1907028,17z/data=!3m1!4b1!4m5!3m4!1s0x145847a4cfa22eb3:0x26fc3c08fad1c5c3!8m2!3d30.0004233!4d31.1885141?hl=ar" target="_blank">
                    {{__('index.address_note')}}
                            </a></p>
                    {{-- <p><a href="https://www.google.com/maps/@24.9045273,91.8523559,15z" target="_blank">2750 Quadra Street Victoria Road, New York, Canada</a></p> --}}
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="flaticon-call"></i>
                    </div>

                    <h3>{{__('index.mobile')}}</h3>
                    <div class="row">
                        <div class="col">
                            <p>
                                <a href="tel:{{ settingSite()->phone }}">{{ settingSite()->phone }}</a>
                            </p>

                            <p><a href="tel:0235826260">0235826260</a></p>
                          
                        </div>
                        <div class="col">

                            <p><a href="tel:01009656756">01009656756</a></p>
                         
                            <p><a href="tel:0235858737">0235858737</a></p>
                        </div>
                    </div>
              
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Area -->


    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                {{-- <span>Get in Touch</span> --}}
                <h2>{{__('index.agency')}}</h2>
                <div class="bar"></div>
            </div>

            <div class="contact-form">
                <form action="{{ route('sendAgency') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>{{ __('index.nameOne') }}<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid

                                @enderror" required data-error="{{ __('index.namerequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>{{ __('index.namelast') }}<span class="text-danger">*</span></label>
                                <input type="text" name="name_laset" id="name" class="form-control @error('name_laset') is-invalid

                                @enderror" required data-error="{{ __('index.namerequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                     


                        <div class="row">
                            <div class="col-lg-6 col-md-6 p-2">
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

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>{{ __('index.phone') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="phone"  id="phone_number" required data-error="{{ __('index.phonerequired') }}" class="form-control @error('phone') is-invalid
    
                                    @enderror">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
    
                        </div>
                       

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>{{ __('index.email') }}<span class="text-danger">*</span></label>
                                <input type="email" name="email"  id="email" class="form-control @error('email') is-invalid

                                @enderror" required data-error="{{ __('index.emailrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>{{__('index.activity')}}<span class="text-danger">*</span></label>
                                <input type="text" name="subject"  id="msg_subject" class="form-control @error('subject') is-invalid

                                @enderror" required data-error="{{ __('index.subjectrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>{{__('index.com')}}<span class="text-danger">*</span></label>
                                <input type="text" name="name_comppany"  id="msg_subject" class="form-control @error('subject') is-invalid

                                @enderror" required data-error="{{ __('index.subjectrequired') }}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>{{__('index.ur_mes')}}<span class="text-danger">*</span></label>
                                <textarea name="message"  class="form-control @error('message') is-invalid

                                @enderror" id="message" cols="30" rows="6" data-error="{{ __('index.Messagerequired') }}"></textarea>
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
                            <button type="submit" class="default-btn">
                            {{__('index.agency2')}}
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
