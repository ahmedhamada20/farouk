<!doctype html>
<html lang="en" dir="{{App::getLocale() == 'ar' ? 'rtl' : 'ltr'}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @include('front.layouts.head')
    <meta name="description" content="@yield('description')">


    @yield('canonical')
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S9GWSJ9B9X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S9GWSJ9B9X');
</script>


<meta name="google-site-verification" content="XoVN76a4hPlSpjk7EkuDB6jbjvnaGh676Hra91oOiYo" />






<body>

@include('front.layouts.navbar')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@yield('content')

@include('front.layouts.footer')
@include('front.layouts.footerjs')
</body>
</html>
