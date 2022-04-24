<main role="main">

  <div id="main-header">@include("includes.header")</div>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <link rel="icon" href="assets/images/favicon.png">

    <title>Shalcos | Manufactures</title>
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">
    <link  href="{{asset('assets/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <!-- <script src="{{asset('assets/js/1-11-2-jquery.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    



  </head>
  <body>

  

  



@yield("content")

  




<div id="main-footer">@include("includes.footer")</div> 
</main>




<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
<!--<script>
  $(function(){
    $("#main-header").load("includes/header.html");
    $("#main-footer").load("includes/footer.html");
  });

</script>-->

<script>
  $(document).ready(function() {
    
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };

  
$("#main_banner").owlCarousel({
    navigation : false,
    slideSpeed : 5000,
    paginationSpeed : 400,
    items : 1,
    pagination: true,
    dots: true,
    autoPlay : 5000,
    autoPlaySpeed: 2000,
    autoPlayTimeout: 2000,
    slideSpeed : 800,
    singleItem:true,
 
    // "singleItem:true" is a shortcut for:

    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false


      responsive:{
        0:{
          items:1,
          nav:true
        },
        600:{
          items:1,
          nav:true
        },
        1000:{
          items:1,
          nav:true,
          loop:false
        }
      }
    });

    
    
$("#gallery").owlCarousel({
    navigation : false,
    slideSpeed : 5000,
    paginationSpeed : 400,
    items : 4,
    pagination: true,
    dots: true,
    autoPlay : 5000,
    autoPlaySpeed: 2000,
    autoPlayTimeout: 2000,
    slideSpeed : 800,
    singleItem:false,
    nav:true,
    navigation: true,
    navigationText: ["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
    // "singleItem:true" is a shortcut for:

    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false


      responsive:{
        0:{
          items:2,
          nav:true
        },
        600:{
          items:3,
          nav:false
        },
        1000:{
          items:4,
          nav:true,
          loop:false
        }
      }
    });


      

    
  });
  </script>

  <script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>

  <script type="text/javascript">
    $("[data-fancybox]").fancybox({
      // Options will go here
    });

  </script>

    
    </body>
</html>