@extends('front.layouts.master')
@section('title')
{{__('index.new_signup')}}
@endsection

@section('content')
    <!-- Start Page Banner -->


    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{__('index.new_signup')}}</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"> {{__('index.Home')}}</a>
                            </li>
                            <li>{{__('index.new_signup')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- End Page Banner -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Start Register Area -->
    <section class="register-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="register-image">
                        <img src="{{asset('front/assets/img/login-form.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="register-form">
                        <h2> {{__('index.sign_now')}}</h2>

                        <form action="{{route('GuestRegister')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label>{{__('index.user')}}</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                               
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

                            <div class="form-group">
                                <label>{{__('index.phone')}}</label>
                                <input type="number" maxlength="11" name="phone" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>{{__('index.email')}}</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>{{__('index.address')}}</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>{{__('index.pass')}}</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-group">
                                <label>{{__('index.confirm_pass')}}</label>
                                <input type="password" class="form-control" name="password_confirmation" required>
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


                            <button type="submit" class="default-btn">{{__('index.new_signup2')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Register Area -->

@endsection


@section('js')
@endsection
