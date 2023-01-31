@extends('front.layouts.master')
@section('title')
{{__('index.politics')}}
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



    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{__('index.rolls')}}</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">{{__('index.Home')}}</a>
                            </li>
                            <li>{{__('index.rolls')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Contact Info Area -->

    <!-- End Contact Info Area -->


    <!-- Start Contact Area -->
    <section class="contact-area pb-100 "  style="margin-right: 39px;"  dir="rtl">
        <div class="container">
            <br class="section-title">
                {{-- <span>Get in Touch</span> --}}
               <br>
                <h3>{{__('index.politics1')}} </h3>

            <br>

            <br>

            <div class="bar"></div>
            </div>


            <h4>{{__('index.date')}}:21/12/2022</h4>
        <br>
	<div class="container">
	<div class="row">
	<div class="col-md-12" style="text-align: justify;">
	            <h3>
                {{__('index.politics2')}}
            </h3>
            <p>
            {{__('index.politics3')}}
            </p>
            <h3>
            {{__('index.politics4')}}
            </h3>
            <p>
            {{__('index.politics5')}}
            </p>

            <h3>
            {{__('index.politics6')}}
            </h3>
            <p>
            {{__('index.politics7')}}
            </p>

            <h3>
            {{__('index.politics8')}}
            </h3>
            <p>
            {{__('index.politics9')}}
            </p>

            <h3>
            {{__('index.politics10')}}
            </h3>
            <p>
            {{__('index.politics11')}}
            </p>

	</div>
	</div>
	</div>

    </section>
    <!-- End Contact Area -->

@endsection


@section('js')
@endsection
