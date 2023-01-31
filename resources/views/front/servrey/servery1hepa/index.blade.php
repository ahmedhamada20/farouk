@extends('front.layouts.master')
@section('title')
    استقصاء تطوير المواقع
@endsection

@section('content')
    <!-- Start Page Banner -->


    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>استقصاء تطوير المواقع</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"> {{__('index.Home')}}</a>
                            </li>
                            <li>استقصاء تطوير المواقع</li>
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
                        <h2 class="text-danger">  استقصاء تطوير المواقع </h2>

                        <form action="{{route('home.servery1_needs_post')}}" method="post" autocomplete="off">
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> الاسم </label>

                                    <input type="text" name="name" required class="form-control">
                                    <input type="hidden" name="serverasdasdsad" value="اسم المستخدم">
                                </div>
                            </div>
                            
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> رقم الهاتف ( كود الدوله ) </label>
                                    <input type="hidden" name="phone" value="رقم الهاتف ( كود الدوله )"
                                           class="form-control">
                                    <input type="text" name="server_phone" required class="form-control">
                                </div>
                            </div>
                            
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">مجال الموقع : </label>
                                    <input type="text" name="name_1" required class="form-control">
                                    <input type="hidden" name="server_1" value="مجال الموقع" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">هل لديك domain name : </label>
                                    <input type="text" name="name_2" required class="form-control">
                                    <input type="hidden" name="server_2" value="هل لديك domain name" class="form-control">
                                </div>
                            </div>
                            
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> هل لديك موقع سابق ؟  </label>
                                    <input type="hidden" name="name_4" value="هل لديك موقع سابق ؟"
                                           class="form-control">
                                    <select name="server_4" class="hessine" id="txtcountryTwo" required>
                                        <option value="" disabled selected>--اختر اجابة--</option>
                                        <option value="يوجد">يوجد</option>
                                        <option value="لا يوجد">لا يوجد</option>
                                    </select>
                                </div>
                            </div>
                            
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> هل لديك محتوى لموقعك جاهز للنشر   </label>
                                    <input type="hidden" name="name_5" value="هل لديك محتوى لموقعك جاهز للنشر"
                                           class="form-control">
                                    <select name="server_5" class="hessine" required>
                                        <option value="" disabled selected>--اختر اجابة--</option>
                                        <option value="أقل من 50 %">أقل من 50 % </option>
                                        <option value="أكثر من60 %">أكثر من60 %</option>
                                        <option value="لا يوجد محتوي">لا يوجد محتوي</option>
                                    </select>
                                </div>
                            </div>


                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> الغرض من إنشاء الموقع ؟     </label>
                                    <input type="hidden" name="name_6" value="الغرض من إنشاء الموقع ؟"
                                           class="form-control">
                                    <select name="server_6" class="hessine" required>
                                        <option value="" disabled selected>--اختر اجابة--</option>
                                        <option value="موقع تعريفي">موقع تعريفي </option>
                                        <option value="متجر أو موقع بحركة شراء">متجر أو موقع بحركة شراء</option>
                                        <option value="كلاهما">كلاهما</option>
                                    </select>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> إختر نظام إدارة محتوي موقعك المناسب لك  ؟    </label>
                                    <input type="hidden" name="name_7" value="إختر نظام إدارة محتوي موقعك المناسب لك  ؟"
                                           class="form-control">
                                    <select name="server_7" class="hessine" required>
                                        <option value="" disabled selected>--اختر اجابة--</option>
                                        <option value="جوملا">جوملا  </option>
                                        <option value="ورد بريس">ورد بريس </option>
                                        <option value="لارفيل">لارفيل </option>
                                        <option value="لا أعرف">لا أعرف </option>
                                    </select>
                                </div>
                            </div>





                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">أخبرنا عن نماذج مواقع مميزة فى مجالك ( اسم أو رابط ) ؟</label>
                                    <input type="text" name="name_3" required class="form-control">
                                    <input type="hidden" name="server_3" value="أخبرنا عن نماذج مواقع مميزة فى مجالك  ( اسم أو رابط ) ؟" class="form-control">
                                </div>
                            </div>


                            <button type="submit" class="default-btn">ارسال</button>
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
