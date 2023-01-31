@extends('front.layouts.master')
@section('title')

@endsection

@section('content')

    <!-- Start Page Banner -->
    <div class="page-banner-area item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Error Page</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Error Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Error Area -->
    <section class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <img src="assets/img/404-error.png" alt="error">

                        <h3>Error 404 : Page Not Found</h3>
                        <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>

                        <a href="index.html" class="default-btn">
                            Go to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Error Area -->

@endsection


@section('js')
@endsection
