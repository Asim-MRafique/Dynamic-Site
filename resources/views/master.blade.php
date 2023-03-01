<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>New Vision HTML CSS Template</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" /> <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
    <link href="{{config('app.url')}}/theme/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="{{asset('theme/slick/slick.css')}}" rel="stylesheet" /> <!-- https://kenwheeler.github.io/slick/ -->
    <link href="{{asset('theme/slick/slick-theme.css')}}" rel="stylesheet" />
	<link href="{{asset('theme/css/bootstrap.min.css')}}" rel="stylesheet" /> <!-- https://getbootstrap.com -->
	<link href="{{asset('theme/css/templatemo-new-vision.css')}}" rel="stylesheet" />


</head>
<body>

<div class="container-fluid">
    @include('header')
    @yield('content')
</div>

<script src="{{asset('theme/js/jquery-3.4.1.min.js')}}"> </script>
<script src="{{asset('theme/slick/slick.min.js')}}"> </script>
<script src="{{asset('theme/js/bootstrap.min.js')}}"> </script>
<script src="{{asset('theme/js/templatemo-script.js')}}"></script>
@stack('footer-section')

</body>
</html>