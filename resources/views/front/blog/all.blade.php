@extends('front.layouts.master')
@section('title')
{{__('index.blogs')}}
@endsection

@section('content')


       <!-- Start Page Banner -->
       <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{__('index.blogs')}}</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"> {{__('index.Home')}}</a>
                            </li>
                            <li>{{__('index.blogs')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


       <!-- Start Blog Area -->
       <section class="blog-area pt-100 pb-100">
        <div class="container-fluid">
            <div class="row">


                   @foreach(App\Models\Blog::where('status',true)->get() as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="image">
                                <a href="{{route('home.blogDetails', preg_replace('/\s+/', '-',  $blog->name))}}">
                                    <img src="{{asset($blog->image ?? 'front/assets/img/blog/blog-1.jpg')}}"
                                         width="403px" height="310px" alt="image">
                                </a>
                            </div>
                            <div class="content">
                            <span>
                                {{$blog->created_at->format('Y-m-d')}}
                            </span>

                                <h3>
                                    <a href="{{route('home.blogDetails', preg_replace('/\s+/', '-',  $blog->name))}}">{{Str::limit($blog->name, 28)}}</a>
                                </h3>
                                <a href="{{route('home.blogDetails', preg_replace('/\s+/', '-',  $blog->name))}}" class="blog-btn">{{__('index.read_more')}} <i
                                        class='bx bx-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>


    </section>
    <!-- End Blog Area -->

@endsection


@section('js')
@endsection
