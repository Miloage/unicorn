<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>@yield('title', app_name())</title>
    @stack('before-styles')
    <link rel="stylesheet" type="text/css" href="/css/weui.min.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-weui.min.css">
    <link rel="stylesheet" type="text/css" href="/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    @stack('after-styles')
</head>
<body ontouchstart>
    @yield('header')
    <!--主体-->
    <div class='weui-content'>
        @yield('content')
    </div>
    <div class="foot-black"></div>

    @yield('footer')
<!-- Scripts -->
@stack('before-scripts')
<script type="text/javascript" src="/js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/js/fastclick.js"></script>
<script type="text/javascript">
  $(function() {
    FastClick.attach(document.body);
  });
</script>
<script type="text/javascript" src="/js/jquery-weui.js"></script>
<script type="text/javascript" src="/js/swiper.js"></script>
<script type="text/javascript" src="/js/city-picker.min.js"></script>
@stack('after-scripts')
</body>
</html>