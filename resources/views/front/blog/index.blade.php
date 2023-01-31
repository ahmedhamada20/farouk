@extends('front.layouts.master')
@section('title')
    {{ $blog->name}}
@endsection
@section('description')


    {{ $blog->name}}

@endsection

@section('canonical')


    @if(app()->getLocale() == 'ar')
        <link rel="canonical" href="https://faroukgroup.com/ar/blogDetails/{{$blog->name}}">


    @else
        <link rel="canonical" href="https://faroukgroup.com/blogDetails/{{$blog->name}}">
    @endif

@endsection
@section('content')

  <!-- Start Page Banner -->
  <div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>{{__('index.blog_details')}}</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}"> {{__('index.Home')}}</a>
                        </li>
                        <li>{{__('index.blog_details')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12" style="text-align: justify !important;">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="{{asset($blog->image ?? 'front/assets/img/blog-details.jpg')}}" width="829px" height="498px" alt="image">
                        </div>

                        <div class="article-content" >

                            <br>
                            {!! $blog->notes!!}



                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">

                        <section class="widget widget_spix_posts_thumb">
                            <h3 class="widget-title">{{__('index.other_blogs')}}</h3>
                            @foreach(App\Models\Blog::where('status',true)->get() as $blogs)

                            <article class="item">
                                <a href="{{route('home.blogDetails', preg_replace('/\s+/', '-',  $blogs->name))}}" class="thumb">
                                    <img src="{{asset($blogs->image)}}" width="100px" height="100px" alt="">
{{--                                    <span class="fullimage cover" style="background-image: url()" role="img"></span>--}}
                                </a>
                                <div class="info">
                                    <span>{{$blogs->create_at}}</span>
                                    <h4 class="title usmall"><a href="{{route('home.blogDetails', preg_replace('/\s+/', '-',  $blogs->name))}}">{{$blogs->name}}</a></h4>
                                </div>
                            </article>
                            @endforeach
                        </section>


                        <section class="widget widget_categories">
                            <h3 class="widget-title">{{__('index.categories')}}</h3>

                            <ul>
                                @forelse (categoryActive() as $category)
                                <li><a href="{{route('home.servicesDetails', preg_replace('/\s+/', '-',  $category->name))}}">{{$category->name}}</a></li>

                                @empty

                                @endforelse


                            </ul>
                        </section>

                    </aside>
                </div>
            </div>
        </div>


{{--        <div class="row mb-3">--}}
{{--            <div class="col-4 offset-2" style="--}}
{{--    margin-right: 116px;--}}
{{--    margin-top: 42px;--}}
{{--">--}}

{{--                <a class="btn btn-outline-primary comp-option-1"--}}
{{--                   href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"><i--}}
{{--                            class="fa fa-facebook" style="color: blue"></i>  </a>--}}
{{--            </div>--}}



{{--        </div>--}}


        <div class="row">
            <div class="col">
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="
    margin-left: 813px;
    margin-top: 61px;
">
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_google_plus"></a>
                    <a class="a2a_button_whatsapp"></a>
                    <a class="a2a_button_line"></a>
                    <a class="a2a_button_skype"></a>
                    <a class="a2a_button_viber"></a>
                    <a class="a2a_button_facebook_messenger"></a>
                </div>
                <script async src="https://static.addtoany.com/menu/page.js"></script>
            </div>
        </div>



    </section>
    <!-- End Blog Details Area -->





@endsection


@section('js')
@endsection
