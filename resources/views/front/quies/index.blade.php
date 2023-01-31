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
                <div class="col">
                    <input type="text" readonly value="هل يوجد إتصال كاف لكل الإدارات للحصول على المعلومات وإتخاذ الإجراءات ؟" class="form-control">
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Area -->

@endsection


@section('js')
@endsection

