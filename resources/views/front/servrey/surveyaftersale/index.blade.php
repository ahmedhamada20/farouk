@extends('front.layouts.master')
@section('title')
استبيان رضا العملاء 
@endsection

@section('content')
    <!-- Start Page Banner -->


    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>استبيان رضا العملاء</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"> {{__('index.Home')}}</a>
                            </li>
                            <li>استبيان رضا العملاء</li>
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
                        <img src="{{asset('front/assets/img/aftersales.jpg')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="register-form">
                        <h2 class="text-danger">  استبيان رضا العملاء</h2>

                        <form action="{{route('home.surveyaftersalePost')}}" method="post" autocomplete="off">
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
                                    <label class="mb-1 h6"> الخدمة المتعاقد عليها  ؟  </label>
                                    <input type="hidden" name="name_1" value="الخدمة المتعاقد عليها  ؟"
                                           class="form-control">
                                    <select name="server_1" class="hessine" id="txtcountryTwo" required>
                                        <option value="" disabled selected>--اختر اجابة--</option>
                                        <option value="التسويق الرقمي">التسويق الرقمي</option>
                                        <option value="قاعدة بيانات تارجت">قاعدة بيانات تارجت</option>
                                        <option value="تصميم وتطوير المواقع">تصميم وتطوير المواقع</option>
                                        <option value="تطوير الأعمال">تطوير الأعمال</option>
                                        <option value="المدير الرقمي">المدير الرقمي</option>
                                        <option value="منصة تارجت">منصة تارجت</option>
                                    </select>
                                    
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> ما مدى رضاك عن جودة الخدمة ؟   </label>
                                    <input type="hidden" name="name_2" value="ما مدى رضاك عن جودة الخدمة ؟"
                                           class="form-control">
                                    <select name="server_2" class="hessine" required>
                                        <option value="" disabled selected>--اختر اجابة--</option>
                                        
                                        <option value="رَاضٍ جداً">رَاضٍ جداً  </option>
                                        <option value="رَاضٍ"> رَاضٍ</option>
                                        <option value="غير رَاضٍ">غير رَاضٍ </option>
                                    </select>
                                   <!--  <input type="text" name="answer_server_2" class="form-control">-->
                                </div>
                                
                            </div>


                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> ما مدى رضاك عن مقدم الخدمة ؟     </label>
                                    <input type="hidden" name="name_3" value="ما مدى رضاك عن مقدم الخدمة ؟"
                                           class="form-control">
                                    <select name="server_3" class="hessine" required>
                                    <option value="" disabled selected>--اختر اجابة--</option>
                                        <option value="رَاضٍ جداً">رَاضٍ جداً  </option>
                                        <option value="رَاضٍ"> رَاضٍ</option>
                                        <option value="غير رَاضٍ">غير رَاضٍ </option>
                                    </select>
                                   <!--  <input type="text" name="answer_server_3" class="form-control">-->
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> ما مدي رضاك عن النتيجة المرجوه من الخدمة ؟     </label>
                                
                                    
                                     <input type="hidden" name="name_3" value="ما مدي رضاك عن النتيجة المرجوه من الخدمة ؟"
                                           class="form-control">
                                    
                                    
                                    <select name="server_4" class="hessine" required>
                                    <option value="" disabled selected>--اختر اجابة--</option>
                                        <option value="رَاضٍ جداً">رَاضٍ جداً  </option>
                                        <option value="رَاضٍ"> رَاضٍ</option>
                                        <option value="غير رَاضٍ">غير رَاضٍ </option>
                                    </select>
                                   <!--  <input type="text" name="answer_server_4" class="form-control">-->
                                </div>
                            </div>





                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> ما مدي إحتمالية الحصول على خدمة أخرى معنا ؟     </label>
                                    <input type="hidden" name="name_5" value="ما مدي إحتمالية الحصول على خدمة أخرى معنا ؟"
                                           class="form-control">
                                    <select name="server_5" class="hessine" required>
                                    <option value="" disabled selected>--اختر اجابة--</option>
                                        <option value="مؤكد">مؤكد </option>
                                        <option value="فرصة كبيرة">فرصة كبيرة </option>
                                        <option value="فرصة ضئيلة">فرصة ضئيلة </option>
                                    </select>
                                    <textarea type="text" name="answer_server_5" class="form-control" placeholder="نسعد بتلقي استفساراتكم وملاحظاتكم" rows="4"></textarea>
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
