 <!-- 
 		NAME: HOME PAGE
 		AUTHOR: WA
 		DATE: 02-04-2014
  -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8"/>
 	<!-- BOOTSTRAP -->
 		<!-- reponsive cho safari -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

				
				

				{{ HTML::style('public/frontend/css/hover.css') }}
 				<!-- Latest compiled and minified CSS -->
 				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

 				<!-- Optional theme -->
 				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

 				<!-- FONT AWSOME -->
 				<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

 				<!-- MY STYLE -->
 				
 				{{ HTML::style('public/frontend/css/style.css') }}

 				{{ HTML::style('public/frontend/css/mobile.css') }}

 				<!-- Jquery -->
 				<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

 				<!-- Latest compiled and minified JavaScript -->
 				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


 </head>
 <body>
 		
 				@include('layouts.frontend.header')


 				

 @yield('content')


 @include('layouts.frontend.footer')

 				





@yield('script')






 </body>
 </html>