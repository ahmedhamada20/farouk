<!-- Start Footer Area -->
<div class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo" >
                        <a href="{{route('home')}}">
                            <img src="{{asset(settingSite()->image)}}"  width="120px" height="40px" class="black-logo" alt="image">
                            <img src="{{asset(settingSite()->image)}}"  width="120px" height="40px" class="white-logo" alt="image">
                        </a>
                    </div>
                    <p>{!! settingSite()->notes!!}</p>
                    <ul class="social">
                        <li>
                            <a href="{{settingSite()->facebook}}" class="facebook" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settingSite()->twitter}}" class="twitter" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settingSite()->YouTube}}" class="youtube" target="_blank">
                                <i class='fa fa-youtube'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{settingSite()->instagram}}" class="linkedin" target="_blank">
                                <i class='fa fa-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/2{{settingSite()->phone}}" class="whatsapp" target="_blank">
                                <i class='fa fa-whatsapp'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>{{__('index.links')}}</h3>

                    <ul class="quick-links">
                        <li>
                            <a href="{{route('home.consulting')}}">{{__('index.Free_consultation')}}</a>
                        </li>
                        <li>
                            <a href="{{route('GuestRegister')}}">{{__('index.signup')}}</a>
                        </li>
                        <li>
                            <a href="{{route('home.Agency')}}">{{__('index.agency')}}</a>
                        </li>
                        <li>
                            <a href="{{route('home.jops')}}">{{__('index.jobs')}} </a>
                        </li>
                        <li>
                            <a href="{{ route('home.bloges') }}">{{__('index.blogs')}}</a>
                        </li>
                        <li>
                            <a href="{{route('home.policy')}}">{{__('index.politic')}}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>{{__('index.offer')}}</h3>

                    <ul class="quick-links">
                        @foreach(App\Models\Category::whereStatus(true)->get() as $category)
                        <li>
                            <a href="{{route('home.servicesDetails', preg_replace('/\s+/', '-',  $category->name))}}">{{$category->name}}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3>{{__('index.happy')}}</h3>

                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon">
                                <i class='bx bx-user-pin'></i>
                            </div>
                            <span>{{__('index.mobile')}} : </span>

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



                        </li>
                        <li>
                            <div class="icon">
                                <i class='bx bx-map'></i>
                            </div>
                            <span>{{__('index.address')}}:</sp
                            an>

                            <a href="https://www.google.com/maps/place/%D8%B4%D8%B1%D9%83%D8%A9+%D9%81%D8%A7%D8%B1%D9%88%D9%82+%D8%AC%D8%B1%D9%88%D8%A8+%D9%84%D9%84%D8%AA%D8%AC%D8%A7%D8%B1%D9%87+%D8%A7%D9%84%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%8A%D8%A9+%D9%88%D8%A7%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D9%87%E2%80%AD/@30.0004233,31.1907028,17z/data=!3m1!4b1!4m5!3m4!1s0x145847a4cfa22eb3:0x26fc3c08fad1c5c3!8m2!3d30.0004233!4d31.1885141?hl=ar" target="_blank">
                            {{__('index.address_note')}}
                            </a>
                        </li>
                        <li>
                            <div class="icon">
                                <i class='bx bx-envelope'></i>
                            </div>
                            <span>{{__('index.email')}} :</span>

                            <a href="mailto: {{settingSite()->email}}">{{settingSite()->email}}</a>


                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=201100335441&data=AWBEWDhvx4fQyIGUI4GPSgD7VmvoGBuxxFeoEXwb6esXC8GkncOVYiCYjEDwMfqC3IOHW9ai1odp7rU-yHZNFQfJgBtkB03lZjT32kWqRXbn52a-L0ow2x5diNGSl76ii2qXGdNKvyF0tI16mxzqW1IefGoFZiDeuNyfKz2fpAh-uPaMlWxafYs4M0rTrl_8ipMNiiSQ1EyBUiIXoX5VcU21PpS5BVNkl-csJvm6bJ3UJAUJrHnFnFcl0JkwT5cHktkUrvoJ1Xy_Zu3L529TZA&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR30yiYiwkjBQPfnRVTacpj6YLwndw9QNJTCUf2W6cd1IBEpZFkJCQChyr4" style="
    position: fixed;
    width: 50px;
    height: 50px;
    bottom: 13px;
    right: 20px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    z-index: 2147483647!important;
" class="floating" target="_blank">
        <i class="fa fa-whatsapp float-button"></i>
    </a>
</div>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p>


                    {{__('index.copy_right')}}
                        © {{date('Y')}} | {{date('Y')+1}}
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 text-center">
                    <img src="{{asset('front/accepted-payment-methods.png')}}" style="height : 50px" >
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-chevron-up'></i>
</div>
<!-- End Go Top Area -->

<!-- Dark version -->
<!--<div class="dark-version">-->
<!--    <label id="switch" class="switch">-->
<!--        <input type="checkbox" onchange="toggleTheme()" id="slider">-->
<!--        <span class="slider round"></span>-->
<!--    </label>-->
<!--</div>-->



<!-- Dark version -->


