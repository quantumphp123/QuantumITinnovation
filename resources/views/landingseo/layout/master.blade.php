<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NSZSCKV');</script>
    <!-- End Google Tag Manager -->
    <!--favicon icon-->
    <link rel="icon" href="{{asset('landing2/img/favicon.png')}}" type="image/png" sizes="16x16">

    <!--title-->
<title>Quantum-SEO Landing Page Template</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--google-font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <!--fontawesome-->
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/collection/components/icon/icon.min.css">


    <!--build:css-->
    <link rel="stylesheet" href="{{asset('landingseo/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landingseo/css/xamin-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landingseo/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landingseo/css/style2.css')}}">
    <link rel="stylesheet" type="text/css" href="{(asset('landingseo/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!--new code-->
<!--wow-css-->
    <link rel="stylesheet" type="text/css" href="{{asset('landingseo/css/wow.css')}}">
<!--end-->

<!--new code end-->
@yield('after-style')

    <!-- endbuild -->
    
    <!-- Responsive -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSZSCKV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --> 
    @include('landingseo.partials.header')
    @yield('content')
    @include('landingseo.partials.footer')
    
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html"> <span class="fas fa-angle-up"></span> </div>

    <!--scroll bottom to top button end-->
    <!--build:js--> 
<script src="{{asset('landingseo/js/jquery-3.5.1.min.js')}}"></script> 
<script src="{{asset('landingseo/js//jquery.easing.min.js')}}"></script> 
<script src="{{asset('landingseo/js/jquery.easing.min.js')}}"></script> 
<script src="{{asset('landingseo/js/countdown.min.')}}"></script> 
<script src="{{asset('landingseo/js/jquery.waypoints.min.js')}}"></script> 
<script src="{{asset('landingseo/js/app.js')}}"></script> 
<script src="{{asset('landingseo/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('landingseo/js/custom.js')}}"></script> 

<!-- Bootstrap JS --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/fontawesome.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script> 
<!-- Owl Carousel JS --> 

<!-- Slick JS --> 
<!-- Wow JS --> 
<script src="{{asset('landingseo/js/wow.min.js')}}"></script> 
<!-- Custom JS--> 
<script src="{{asset('landingseo/js/xamin-custom.js')}}"></script>
  

    @yield('after-script')
   
        

<!--End of Tawk.to Script-->

</html>