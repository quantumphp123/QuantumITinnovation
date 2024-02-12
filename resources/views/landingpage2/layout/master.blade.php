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
    <title>Quantum App-Development</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--google-font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
     <!-- Favicon -->
    <link rel="shortcut icon" href="https://quantumitinnovation.com/assets/images/favicon.png"/>

    <!-- Fontawesome Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/collection/components/icon/icon.min.css">

    <!--build:css-->
    <link rel="stylesheet" href="{{asset('landing2/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing2/css/xamin-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing2/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing2/css/style2.css')}}">
    <link rel="stylesheet" type="text/css" href="{(asset('landing2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


@yield('after-style')

    <!-- endbuild -->
    
    <!-- Responsive -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSZSCKV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --> 

    @include('landingpage2.partials.header')
    @yield('content')
    @include('landingpage2.partials.footer')
    
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    <script src="{{asset('landing2/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('landing2/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('landing2/js/countdown.min.js')}}"></script>
    <script src="{{asset('landing2/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('landing2/js/jquery.rcounterup-2.js')}}"></script>
    <script src="{{asset('landing2/js/validator.min.js')}}"></script>
    <script src="{{asset('landing2/js/app.js')}}"></script>
   <script src="{{asset('landing2/js/bootstrap.min.js')}}"></script>

<!-- wow -->
    <link rel="stylesheet" href="https://quantumitinnovation.com/landing/css/wow.css">
    


    <!-- Magnific Popup JS -->
    <script src="https://quantumitinnovation.com/landing/js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/fontawesome.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- Owl Carousel JS -->
   
     <!-- Wow JS -->
    <script src="https://quantumitinnovation.com/landing/js/wow.min.js"></script>
   
    <!-- Custom JS-->
    <script src="https://quantumitinnovation.com/landing/js/xamin-custom.js"></script>
    

   
   
 
    <!-- Custom JS-->
    
    <!--endbuild-->
   
    
    
    @yield('after-script')
   
        
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f00a0ba760b2b560e6fbd49/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</html>