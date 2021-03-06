<!DOCTYPE html>
<html>
<head>
<title>Family Planning 2020</title>
<link rel="shortcut icon" href="{{ asset('/images/fav.png') }}">
<link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/vendor.css') }}">
<link href="{{ URL::to('src/frontend/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ URL::to('src/frontend/css/style.css') }}" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">	
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="src/frontend/js/jquery-1.11.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="src/lightgallery/css/lightgallery.css" rel="stylesheet">
<link rel="stylesheet" href="src/frontend/css/flexslider.css" type="text/css" media="screen" />

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<script src="{{ URL::to('src/frontend/js/modernizr.js') }}"></script>
<!--Start-smoth-scrolling-->
		<script type="text/javascript" src="{{ URL::to('src/frontend/js/move-top.js') }}"></script>
		<script type="text/javascript" src="{{ URL::to('src/frontend/js/easing.js') }}"></script>	
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--end-smoth-scrolling-->
<!--animated-css-->
		<link href="{{ URL::to('src/frontend/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet"  href="{{ URL::to('src/lightslider/css/lightslider.css') }}"/>
		<script src="{{ URL::to('src/frontend/js/wow.min.js') }}"></script>
		<script>
		 new WOW().init();
		</script>
		
<!--animated-css-->


</head>
<body>
      @yield('content')

      
      
      <script type="text/javascript">
        var baseUrl = "{{ URL::to('/') }}";
      </script>
      
</body>
</html>