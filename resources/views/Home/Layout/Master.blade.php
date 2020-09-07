<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Pi Solution là nhà cung cấp các giải pháp công nghệ toàn diện cho các doanh nghiệp, đặc biệt là doanh nghiệp Start-up. Tư vấn và tạo ra các sản phẩm công nghệ dựa trên nền tảng blockchain, livestream, điện toán phân tán nhằm tối ưu hóa các quy trình quản trị.">
    <meta name="author" content="Pi Solution">

	<title>Pi Solution | @yield('title')</title>
	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="landing/images/logo/favicon.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="landing/images/logo/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="landing/images/logo/favicon.png">
	<link rel="apple-touch-icon-precomposed" href="landing/images/logo/favicon.png">	
		
	<link rel="stylesheet" type="text/css" href="landing/libraries/lightslider/lightslider.min.css" />
	
	<link rel="stylesheet" type="text/css" href="landing/revolution/css/settings.css">
 
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="landing/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="landing/revolution/css/navigation.css?v={{time()}}"> 
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="landing/libraries/lib.css" />
	<link rel="stylesheet" type="text/css" href="landing/css/plugins.css" />
	<link rel="stylesheet" type="text/css" href="landing/css/navigation-menu.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="landing/css/footer.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/shortcodes.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/woocommerce.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/header.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/style-2.css?v={{time()}}" />
	<link rel="stylesheet" type="text/css" href="landing/css/style.css?v={{time()}}" />

	<!--[if lt IE 9]>
		<script src="landing/js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=187681425351598&autoLogAppEvents=1" nonce="lJKoxoqA"></script>
	
	<div class="preloader">
        <div class="cws_loader">
            <span>LOADING...</span>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
        </div>
    </div>
	<a id="top"></a>
	<div class="corporate-home-light container-fluid no-padding">
				
		@include('Home.Layout.Header')
		
		@yield('content')
		
	</div>
	
	@include('Home.Layout.Footer')
	
	<!-- JQuery v1.11.3 -->
 	<!--<script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>-->
	<script src="landing/js/jquery.min.js"></script>
	<!-- Library JS -->
	<script src="landing/libraries/lib.js"></script>
	<!--<script src="landing/js/mailchip.js"></script> -->

	<script type="text/javascript" src="landing/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="landing/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="landing/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="landing/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="landing/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="landing/revolution/js/extensions/revolution.extension.navigation.min.js"></script>	
	<!--Maps -->
	
	<script src="landing/js/jquery-jvectormap.min.js"></script>
	<script src="landing/js/jquery-jvectormap-world-mill.js"></script>
	<script src="landing/js/wow.js"></script>
	<script src="landing/js/jquery.bxslider.min.js"></script>
	<script src="landing/js/theme.js"></script>
	<script src="landing/js/custom.js"></script>
	@yield('script')
	<!-- Library - Theme JS -->	
	<script src="landing/js/functions.js?v={{time()}}"></script>
	<script>
		$(window).on("load", function(){
			setInterval(function(){
				$('.preloader').fadeOut('zoom-in');
			}, 1500);
			
		});
	</script>
</body>
</html>
