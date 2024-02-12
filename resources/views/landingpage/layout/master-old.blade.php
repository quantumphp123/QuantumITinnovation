<!doctype html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QUANTUM</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('landing/images/fav.png')}}"/>
    <!--google-font-->
 <link href="https://fonts.googleapis.com/css2?family=Lexend+Tera&family=Montserrat:wght@300&family=Nunito+Sans&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('landing/css/style.css')}}">
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('landing/css/bootstrap.min.css')}}">
    <!--<link rel="stylesheet" type="text/css" href="http://jsfiddle.net/LKP66/3/css/result-light.css"-->
    <!-- Fontawesome Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/collection/components/icon/icon.min.css">
    <!-- ionicons CSS -->
    <link rel="stylesheet" href="{{asset('landing/css/ionicons.min.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('landing/css/flaticon.css')}}">
    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{asset('landing/css/Chart.min.css')}}">
    <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('landing/css/magnific-popup.css')}}">
    <!-- owl-carousel -->
        <link rel="stylesheet" href="{{asset('landing/css/owl.carousel.min.css')}}">
    <!-- wow -->
        <link rel="stylesheet" href="{{asset('landing/css/wow.css')}}">
    <!-- Slick -->

        <link rel="stylesheet" href="{{asset('landing/css/slick-theme.css')}}">
            <link rel="stylesheet" href="{{asset('landing/css/slick.css')}}">
            
    <!-- REVOLUTION STYLE SHEETS -->

    <link rel="stylesheet" href="{{asset('landing/css/rs6.css')}}">
    <!-- Xamin custom -->
    <link rel="stylesheet" href="{{asset('landing/css/xamin-style.css')}}">
    <!--validation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    <!-- Responsive -->

            <link rel="stylesheet" href="{{asset('landing/css/responsive.css')}}">
   
</head>

<body>
    <!-- Loader
    <div id="loading">
        <div id="loading-center">
            <img src="images/loader.gif" alt="loader">
        </div>
    </div>
     loading end -->
    <!-- Header -->

@include('landingpage.partials.headers')
@yield('content')
@include('landingpage.partials.footer')
 <!-- Footer
        -- Footer End-->
        <!-- back-to-top -->
        <div id="back-to-top">
            <a class="top" href="#top" id="top"> <i class="fa fa-chevron-up"></i> </a>
        </div>
        <!-- back-to-top End -->
        <!-- jQuery, Popper JS -->
        <script src="{{asset('landing/js/jquery-3.4.1.min.js')}}"></script>
        <script>$(document).ready(function() {
    $('#contact-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh fa-spin'
        },
        submitHandler: function(validator, form, submitButton) {
            var that = form
            console.log(that);
                $.ajax({           
                    url: 'https://script.google.com/macros/s/AKfycbyqxVHm4Kcx1Tk5U4GCLDontvfDri_vA-MTeNlBoPSVTMyKsra8/exec',
                    data: $(this).serialize(), 
                    jsonp: 'cb', 
                    jsonpCallback: 'bingo', 
                    dataType:'jsonp', 
                    success: function bingo(data){
                        console.log(data); 
                        if (data == 'Error') {
                            alertForm({form: that, type: 'alert-danger', msg: 'Danger'});
                            return;
                        }
                        alertForm({form: that, type: 'alert-success', msg: 'Success'});
                        that.find('textarea').val('');
                    }, 
                    error: function(){
                        alertForm({form: that, type: 'alert-danger', msg: 'Danger.'});
                    }
                });
            
            function alertForm(alert) {
                var div = $('<div class="alert ' + alert.type + '" style="display: none;">' + alert.msg + '</div>');        
                alert.form.prepend(div);
                div.slideDown(400).delay(3000).slideUp(400, function() {
                    alert.form.closest('.modal').modal('hide');
                    div.remove();    
                });
            }
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        
                    }
                }
            },
            mail: {
                validators: {
                    notEmpty: {
                        
                    },
                    emailAddress: {
                        
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                       
                    },
                    digits: {
                        
                    }
                }
            },
            message: {
                validators: {
                    notEmpty: {
                       
                    }
                }
            },
        }
    })
});      
$('#contact-form').on('submit', function(e) {
    e.preventDefault(); 
    var that = $(e.target); 
});   		</script>
        <script src="{{asset('landing/js/popper.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/fontawesome.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
        <!-- Appear JS -->
        <script src="{{asset('landing/js/appear.js')}}"></script>
        <!-- Countdown JS -->
        <script src="{{asset('landing/js/countdown.js')}}"></script>
        <!-- CountTo JS -->
        <script src="{{asset('landing/js/jquery.countTo.js')}}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{asset('landing/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{asset('landing/js/owl.carousel.min.js')}}"></script>
        <!-- Chart JS -->
        <script src="{{asset('landing/js/Chart.min.js')}}"></script>
        <script src="{{asset('landing/js/Chart.bundle.min.js')}}"></script>
        <!-- Slick JS -->
        <script src="{{asset('landing/js/slick.min.js')}}"></script>
        <!-- Wow JS -->
        <script src="{{asset('landing/js/wow.min.js')}}"></script>
        <!-- Isotope JS-->
        <script src="{{asset('landing/js/isotope.pkgd.min.js')}}"></script>
        <!-- REVOLUTION SLIDER JS-->
        <script src="{{asset('landing/js/revolution.tools.min.js')}}"></script>
        <script src="{{asset('landing/js/rs6.min.js')}}"></script>
        <script src="{{asset('landing/js/revslider-custom.js')}}"></script>
        <!-- Custom JS-->
        <script src="{{asset('landing/js/xamin-custom.js')}}"></script>
        <script>
            // Gallery image hover
$( ".img-wrapper" ).hover(
  function() {
    $(this).find(".img-overlay").animate({opacity: 1}, 600);
  }, function() {
    $(this).find(".img-overlay").animate({opacity: 0}, 600);
  }
);

// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

// Add overlay
$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#gallery").append($overlay);

// Hide overlay on default
$overlay.hide();

// When an image is clicked
$(".img-overlay").click(function(event) {
  // Prevents default behavior
  event.preventDefault();
  // Adds href attribute to variable
  var imageLocation = $(this).prev().attr("href");
  // Add the image src to $image
  $image.attr("src", imageLocation);
  // Fade in the overlay
  $overlay.fadeIn("slow");
});

// When the overlay is clicked
$overlay.click(function() {
  // Fade out the overlay
  $(this).fadeOut("slow");
});

// When next button is clicked
$nextButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  // All of the images in the gallery
  var $images = $("#image-gallery img");
  // If there is a next image
  if ($nextImg.length > 0) { 
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    // Otherwise fade in the first image
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When previous button is clicked
$prevButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  // Fade in the next image
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When the exit button is clicked
$exitButton.click(function() {
  // Fade out the overlay
  $("#overlay").fadeOut("slow");
});
        </script>
        <script>
            $(document).ready(function(){
  $(".content").slice(0, 4).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 4).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text("No More").addClass("noContent");
    }
  });
  
})
        </script>
    </body>

</html>
