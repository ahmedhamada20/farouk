@extends('front.layouts.master')
@section('title')
    استقصاء تحديد اتجاهات
@endsection

@section('content')
    <!-- Start Page Banner -->


    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>استقصاء تحديد اتجاهات</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"> {{__('index.Home')}}</a>
                            </li>
                            <li>استقصاء تحديد اتجاهات</li>
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
                        <h2 class="text-danger">  استقصاء تحديد اتجاهات </h2>

                        <form action="{{route('home.marketing_needs_post')}}" method="post" autocomplete="off">
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> اسم الشركة والنشاط على الإنترنت ؟ </label>

                                    <input type="text" name="name_1" required class="form-control">
                                    <input type="hidden" name="server_1" value="اسم الشركة والنشاط على الإنترنت ؟"
                                           class="form-control">
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> بداية تواجد الشركة على الإنترنت ؟ </label>
                                    <input type="hidden" name="server_2" value="بداية تواجد الشركة على الإنترنت ؟"
                                           class="form-control">
                                    <input type="text" name="name_2" required class="form-control">
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> هل حجم الشركة الفعلي يمثل حجمها على الانترنت ؟ </label>
                                    <input type="hidden" name="server_3"
                                           value="هل حجم الشركة الفعلي يمثل حجمها على الانترنت ؟" class="form-control">

                                    <input type="text" name="name_3" required class="form-control">
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> هل لديكم منافسين متواجدين على الإنترنت بشكل قوي؟ أذكر 3 على الأقل ؟ </label>
                                    <input type="hidden" name="server_4"
                                           value="هل لديكم منافسين متواجدين على الإنترنت بشكل قوي؟ أذكر 3 على الأقل ؟"
                                           class="form-control">

                                    <input type="text" name="name_4" required class="form-control">
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> ما الذي يميز منتجك أو خدماتك عن المنافسين ؟ </label>
                                    <input type="hidden" name="server_5"
                                           value="ما الذي يميز منتجك أو خدماتك عن المنافسين ؟" class="form-control">

                                    <input type="text" name="name_5" required class="form-control">
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> هل لدي النشاط هوية بصرية (لوجو، شعار، موقع، صفحات تواصل) ؟ </label>
                                    <input type="hidden" name="server_6"
                                           value="هل لدي النشاط هوية بصرية (لوجو، شعار، موقع، صفحات تواصل) ؟"
                                           class="form-control">

                                    <input type="text" name="name_6" required class="form-control">
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">ما هي وسيلة التواصل مع العملاء القدامى ؟</label>
                                    <input type="hidden" name="server_7"
                                           value="ما هي وسيلة التواصل مع العملاء القدامى ؟" class="form-control">

                                    <input type="text" name="name_7" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> ما هي نسبة تحويل العملاء القدامي لعملاء جدد ؟ </label>
                                    <input type="hidden" name="server_8"
                                           value="ما هي نسبة تحويل العملاء القدامي لعملاء جدد ؟" class="form-control">

                                    <input type="text" name="name_8" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6"> هل إعلانتكم السابقة كانت على الفيسبوك ، تويتر ، انستقرام ،
                                        جوجل ، لينكد ؟ </label>
                                    <input type="hidden" name="server_9"
                                           value="هل إعلانتكم السابقة كانت على الفيسبوك ، تويتر ، انستقرام ، جوجل ، لينكد ؟"
                                           class="form-control">

                                    <input type="text" name="name_9" required class="form-control">
                                </div>
                            </div>


                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">ما هي أفضل طريقة تحقق بها مبيعات واتساب ، عبر الهاتف، رسائل على السوشيال، اجتماعات ؟</label>

                                    <input type="hidden" name="server_10"
                                           value="ما هي أفضل طريقة تحقق بها مبيعات واتساب ، عبر الهاتف، رسائل على السوشيال، اجتماعات ؟"
                                           class="form-control">

                                    <input type="text" name="name_10" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">ما هو المنتج أو الخدمة الذي ترغب في الإعلان عنها ؟</label>

                                    <input type="hidden" name="server_11"
                                           value="ما هو المنتج أو الخدمة الذي ترغب في الإعلان عنها ؟"
                                           class="form-control">

                                    <input type="text" name="name_11" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">ما هي نسبة تحويل عملائك من محتملين لفعليين من المتابعة المستمرة ؟</label>
                                    <input type="hidden" name="server_12"
                                           value="ما هي نسبة تحويل عملائك من محتملين لفعليين من المتابعة المستمرة ؟"
                                           class="form-control">

                                    <input type="text" name="name_12" required class="form-control">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">من هم عملاؤك من حيث الدولة، والنوع، والسن، والوظيفة، والاهتمام اذكر قدر المستطاع ؟</label>


                                    <input type="hidden" name="server_13"
                                           value="من هم عملاؤك من حيث الدولة، والنوع، والسن، والوظيفة، والاهتمام اذكر قدر المستطاع ؟"
                                           class="form-control">

                                    <input type="text" name="name_13" required class="form-control">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">هل تتبع سياسية تسعيرا؟ وما هي ؟</label>
                                    <input type="hidden" name="server_14" value="هل تتبع سياسية تسعيرا؟ وما هي ؟"
                                           class="form-control">

                                    <input type="text" name="name_14" required class="form-control">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">لو كانت لديك تجربه سابقه إعلانيه، ما هو معدل التحويل السابق لكم ؟</label>
                                    <input type="hidden" name="server_15"
                                           value="لو كانت لديك تجربه سابقه إعلانيه، ما هو معدل التحويل السابق لكم ؟"
                                           class="form-control">

                                    <input type="text" name="name_15" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">اعرض لنا آخر تجربه تسويقية ناجحة لكم على الإنترنت ؟</label>
                                    <input type="hidden" name="server_16"
                                           value="اعرض لنا آخر تجربه تسويقية ناجحة لكم على الإنترنت ؟"
                                           class="form-control">

                                    <input type="text" name="name_16" required class="form-control">
                                </div>
                            </div>


                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">ما هو تارجت المبيعات المستهدف طبقا لاخر خطه تسويق ؟</label>
                                    <input type="hidden" name="server_17"
                                           value="ما هو تارجت المبيعات المستهدف طبقا لاخر خطه تسويق ؟"
                                           class="form-control">

                                    <input type="text" name="name_17" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">ما هي نسبة الشكاوى لديكم ؟</label>
                                    <input type="hidden" name="server_18" value="ما هي نسبة الشكاوى لديكم ؟"
                                           class="form-control">

                                    <input type="text" name="name_18" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">نسبة الترشيحات من عمالئكم من حجم المبيعات الفعلي كم بالمئة
                                        ؟</label>

                                    <input type="hidden" name="server_19"
                                           value="نسبة الترشيحات من عمالئكم من حجم المبيعات الفعلي كم بالمئة ؟"
                                           class="form-control">

                                    <input type="text" name="name_19" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">متوسط عدد العملاء الفعليين شهرياً عن آخر 6 أشهر ؟</label>
                                    <input type="hidden" name="server_20"
                                           value="متوسط عدد العملاء الفعليين شهرياً عن آخر 6 أشهر ؟"
                                           class="form-control">

                                    <input type="text" name="name_20" required class="form-control">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">في حالة عدم الترويج الإلكتروني لخدماتكم، كيف تحصل على عملائك حالياً ؟</label>

                                    <input type="hidden" name="server_21"
                                           value="في حالة عدم الترويج الإلكتروني لخدماتكم، كيف تحصل على عملائك حالياً ؟"
                                           class="form-control">

                                    <input type="text" name="name_21" required class="form-control">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">الاعلانات التي تمت خلال فترة 6 أشهر ؟</label>
                                    <input type="hidden" name="server_22" value="الاعلانات التي تمت خلال فترة 6 أشهر ؟"
                                           class="form-control">

                                    <input type="text" name="name_22" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">ما هي دورة حياة العميل لديكم ؟</label>
                                    <input type="hidden" name="server_23" value="ما هي دورة حياة العميل لديكم ؟"
                                           class="form-control">

                                    <input type="text" name="name_23" required class="form-control">
                                </div>
                            </div>
       <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">كيف تقيم سياسة التسعير الخاصة بمنتجاتك أو خدماتك لعملائك مقارنة بالمنافسين ؟</label>
                                    <input type="hidden" name="server_24" value="كيف تقيم سياسة التسعير الخاصة بمنتجاتك أو خدماتك لعملائك مقارنة بالمنافسين ؟"
                                           class="form-control">

                                    <input type="text" name="name_24" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">ما هي المنتجات الأكثر طلباً؟</label>
                                    <input type="hidden" name="server_25" value="ما هي المنتجات الأكثر طلباً؟"
                                           class="form-control">

                                    <input type="text" name="name_25" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">ما هي نسبة التواصل الناجح من العملاء من نسبة الدخول على الموقع أو التواصل على السوشيال ميديا ؟</label>
                                    <input type="hidden" name="server_26" value="ما هي نسبة التواصل الناجح من العملاء من نسبة الدخول على الموقع أو التواصل على السوشيال ميديا ؟"
                                           class="form-control">

                                    <input type="text" name="name_26" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">ما هي المنتجات والخدمات التي تُعلن عنها وليس التي تُقدمها الشركة بشكل عام ؟</label>
                                    <input type="hidden" name="server_27" value="ما هي المنتجات والخدمات التي تُعلن عنها وليس التي تُقدمها الشركة بشكل عام ؟"
                                           class="form-control">

                                    <input type="text" name="name_27" required class="form-control">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col">
                                    <label class="mb-1 h6">اسمك </label>
                                    <input type="text" name="name" required class="form-control">
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
