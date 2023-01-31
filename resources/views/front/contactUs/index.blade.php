@extends('front.layouts.master')
@section('title')
{{__('index.slider1')}}
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
                        <h2>{{__('index.slider1')}}</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">{{__('index.Home')}}</a>
                            </li>
                            <li>{{__('index.slider1')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Quote Area -->
    <section class="quote-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="quote-form">
                        <div class="content">
                            <h3>{{__('index.slider1')}}</h3>
                        </div>
                        <form method="POST" action="{{ route('sendmessage') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                       required placeholder="{{ __('index.name') }}">
                            </div>
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
                               <div class="form-group">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                       required placeholder="{{ __('index.phone') }}">
                            </div>



                            <div class="form-group">
                                <input type="text" class="form-control @error('activity') is-invalid @enderror"
                                       name="activity" required placeholder="{{ __('index.activity') }}">
                            </div>





                            <div class="form-group">
                                <input type="text" class="form-control @error('name_comppany') is-invalid @enderror"
                                       name="name_comppany" required placeholder="{{ __('index.name_comppany') }}">
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <p>- {{__('index.choose_needs')}} -</p>


                                <input type="checkbox" id="vehiclec1" name="vehicle1[]" value="التسويق الرقمي">
                                <label for="vehiclec1">{{__('index.digital_marketing')}}</label><br>
                                
                                <input type="checkbox" id="vehiclec3" name="vehicle1[]" value="قواعد بيانات">
                                <label for="vehiclec3">{{__('index.digital_content')}}</label><br>
                                
                                <input type="checkbox" id="vehiclec2" name="vehicle1[]" value="تصميم وتطوير المواقع">
                                <label for="vehiclec2">{{__('index.digital_transformation')}}</label><br>
                                
                                <input type="checkbox" id="vehiclec6" name="vehicle1[]" value="تطوير الأعمال">
                                <label for="vehiclec6">{{__('index.digital_systems')}}</label><br>                                
                                
                                <input type="checkbox" id="vehiclec4" name="vehicle1[]" value="المدير الرقمي">
                                <label for="vehiclec4">{{__('index.Digital_Director')}}</label><br>
                                
                                <input type="checkbox" id="vehiclec5" name="vehicle1[]" value="منصة تارجت">
                                <label for="vehiclec5">{{__('index.digital_trade')}}</label><br>
                                
                                


                            </div>
<br>

                            <div class="form-group">
                                <textarea class="form-control" name="Message" 
                                          placeholder="{{ __('index.Message') }}"></textarea>
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

                            <div class="quote-btn">
                                <button type="submit" class="default-btn">
                                    {{__('index.sendMessage')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="quote-image">
                        <img src="{{asset('front/assets/img/الإستمارات.jpg')}}" alt="image">
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

@endsection


@section('js')

@endsection
