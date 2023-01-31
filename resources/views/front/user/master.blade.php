<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('front.user.layouts.head')
</head>

<body class="fixed-left" style="font-family: 'Cairo', sans-serif;">
@include('front.user.layouts.Loader')


<div id="wrapper">
    @include('front.user.layouts.Sidebar')
    <div class="content-page">
        <div class="content">
            @include('front.user.layouts.topbar')
            <div class="page-content-wrapper ">

                <div class="container-fluid">
                    @yield('content')


                </div>

            </div>
        </div>
  @include('front.user.layouts.footer')
    </div>
</div>
@include('front.user.layouts.footerjs')
</body>
</html>
