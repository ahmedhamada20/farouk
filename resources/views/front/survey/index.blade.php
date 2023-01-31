@extends('front.layouts.master')
@section('title')
    إستقصاء تحديد إتجاهات
@endsection

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>إستقصاء تحديد إتجاهات</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">الرئيسية</a>
                            </li>
                            <li>إستقصاء تحديد إتجاهات</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <!-- Start Team Area -->
    <section class="team-area pb-70">
        <div class="container">
            <div class="section-title">
                {{--            <span>Team Member</span>--}}
                <h2>إستقصاء تحديد إتجاهات</h2>
                <div class="bar"></div>
            </div>


            <div class="row">
                <div class="col-lg-12 col-sm-12">

                    <form class=" bg-white px-4" action="">

                        <div class="row">
                            <div class="col-lg-6">
                                <p class="fw-bold">هل يوجد إتصال كاف لكل الإدارات للحصول على المعلومات وإتخاذ الإجراءات ؟</p>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="exampleForm" id="radioExample1" />
                                    <label class="form-check-label" for="radioExample1">
                                        نعم
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="exampleForm" id="radioExample3" />
                                    <label class="form-check-label" for="radioExample3">
                                        لا
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="exampleForm" id="radioExample4" />
                                    <label class="form-check-label" for="radioExample4">
                                        اخري
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <p class="fw-bold">هل تجد مشكلة فى تنفيذ  المهام المحاسبية للإدارة المالية حاليا  ؟</p>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="exampleForm" id="radioExample5" />
                                    <label class="form-check-label" for="radioExample5">
                                        نعم
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="exampleForm" id="radioExample6" />
                                    <label class="form-check-label" for="radioExample6">
                                        لا
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="exampleForm" id="radioExample7" />
                                    <label class="form-check-label" for="radioExample7">
                                        اخري
                                    </label>
                                </div>
                            </div>

                        </div>


                   

                    </form>
                    <div class="text-end">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End Team Area -->

@endsection


@section('js')
@endsection

