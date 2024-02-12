
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    @yield('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- CSS
        ============================================ -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <link rel="stylesheet" href="{{asset('assets/js/OwlCarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/OwlCarousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style-main.css')}}">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
          <!--<link rel="stylesheet" type="text/css" href="..\Robotic-project\style.css">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Nunito+Sans|PT+Sans&display=swap" rel="stylesheet">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">




    <!-- <link rel="stylesheet" href="assets/css/.css"> -->
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NSZSCKV');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSZSCKV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('website.partials.header2')
@yield('content')



@include('website.partials.footer')






 <!-- JS
    ============================================ --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
     <script src="{{asset('assets/js/OwlCarousel/dist/owl.carousel.js')}}"></script>
    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!-- jQuery JS -->
        <!--<script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>-->

    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    

    <!-- Swiper Slider JS -->
    <script src="{{asset('assets/js/plugins/swiper.min.js')}}"></script>

    <!-- Light gallery JS -->
    <script src="{{asset('assets/js/plugins/lightgallery.min.js')}}"></script>

    <!-- Waypoints JS -->
    <script src="{{asset('assets/js/plugins/waypoints.min.js')}}"></script>

    <!-- Counter down JS -->
    <script src="{{asset('assets/js/plugins/countdown.min.js')}}"></script>

    <!-- Isotope JS -->
    <script src="{{asset('assets/js/plugins/isotope.min.js')}}"></script>

    <!-- Masonry JS -->
    <script src="{{asset('assets/js/plugins/masonry.min.js')}}"></script>

    <!-- ImagesLoaded JS -->
    <script src="{{asset('assets/js/plugins/images-loaded.min.js')}}"></script>

    <!-- Wavify JS -->
    <script src="{{asset('assets/js/plugins/wavify.js')}}"></script>

    <!-- jQuery Wavify JS -->
    <script src="{{asset('assets/js/plugins/jquery.wavify.js')}}"></script>

    <!-- circle progress JS -->
    <script src="{{asset('assets/js/plugins/circle-progress.min.js')}}"></script>

    <!-- counterup JS -->
    <script src="{{asset('assets/js/plugins/counterup.min.js')}}"></script>

    <!-- wow JS -->
    <script src="{{asset('assets/js/plugins/wow.min.js')}}"></script>

    <!-- animation text JS -->
    <script src="{{asset('assets/js/plugins/animation-text.min.js')}}"></script>

    <!-- Vivus JS -->
    <script src="{{asset('assets/js/plugins/vivus.min.js')}}"></script>

    <!-- Some plugins JS -->
    <script src="{{asset('assets/js/plugins/some-plugins.js')}}"></script>
    

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script src="{{asset('validation.js')}}"></script>
    @yield('after-script')
</body>


<script type="text/javascript">
    function deferVideo() {

    //defer html5 video loading
  $("video source").each(function() {
    var sourceFile = $(this).attr("data-src");
    $(this).attr("src", sourceFile);
    var video = this.parentElement;
    video.load();
    // uncomment if video is not autoplay
    //video.play();
  });
}
window.onload = deferVideo;
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b5f1877e21878736ba27384/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</html>
