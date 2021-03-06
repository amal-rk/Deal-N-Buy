<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Buy Cars at Deal N Buy</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{ url('car-deal-assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ url('car-deal-assets/css/slider.css') }}" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="{{ url('car-deal-assets/js/jquery-1.9.0.min.js') }}"></script> 
<script type="text/javascript" src="{{ url('car-deal-assets/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ url('car-deal-assets/js/easing.js') }}"></script>
<script type="text/javascript" src="{{ url('car-deal-assets/js/jquery.nivo.slider.js') }}"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	body, .header, .content .headertop_desc{
	background: rgb(3,116,208);
	background: linear-gradient(142deg, rgba(3,116,208,1), rgba(0,239,189,1)); 
	}
	a {
		color:black !important;
	}
	.rupees{
		color: blueviolet !important;
	}
	.grid_1_of_5, .images_1_of_5{
		padding:11px;
		width: 280px;
	}
	.checked {
  		color: orange;
	}
</style>
<body>
	<div class="header">
		<div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="contact.html">Sitemap</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="account_desc">
					<ul>
						<li><a href="contact.html">Register</a></li>
						<li><a href="contact.html">Login</a></li>
						<li><a href="preview.html">Delivery</a></li>
						<li><a href="#">Checkout</a></li>
						<li><a href="#" style="color: black;">My Account</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
	  	</div>
  	  	<div class="wrap">
			<div class="header_top">
				<div class="logo">
					<a href="index.html"><img src="{{ url('car-deal-assets/images/3.svg') }}" alt="" /></a>
					<!-- <h1 style="
					 font-weight: 200 !important;
					">
					Deal 'N' Buy</h1> -->
				</div>
				<div class="header_top_right">
					<div class="cart">
						<p style="margin-bottom:0;">
							<span>Language</span>
							<div id="dd" class="wrapper-dropdown-2"> <!-- (empty) -->
								<ul class="dropdown">
								<li>
									<!-- you have no items in your Shopping cart -->
									English
								</li>
								<li>
									France
								</li>
								</ul>
							</div>
						</p>
					</div>
					<div class="search_box">
						<form>
							<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" style="display:inline-block;border: radius 10px;"><input type="submit" value="">
						</form>
					</div>
						<div class="clear">
					</div>
				</div>
				<script type="text/javascript">
					function DropDown(el) {
						this.dd = el;
						this.initEvents();
					}
					DropDown.prototype = {
						initEvents : function() {
							var obj = this;

							obj.dd.on('click', function(event){
								$(this).toggleClass('active');
								event.stopPropagation();
							});	
						}
					}

					$(function() {

						var dd = new DropDown( $('#dd') );

						$(document).click(function() {
							// all dropdowns
							$('.wrapper-dropdown-2').removeClass('active');
						});

					});
				</script>
				<div class="clear"></div>
			</div>     
   		</div>
   	</div>
   <!------------End Header ------------>
	<div class="main">
		<div class="wrap">
			<div class="content">
				<div class="content_top">
					<div class="heading">
						<h3>New Deals</h3>
					</div>
				</div>
				<div class="section group">
					<div class="grid_1_of_5 images_1_of_5">
						<div class="container" style="width:240px;"> 
							<div id="myCarousel1" class="carousel slide" data-ride="carousel">
						
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
								<img src="{{ url('car-deal-assets/images/car1.jpg') }}" alt="Los Angeles" style="width:100%;">
								</div>
						
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car2.jpg') }}" alt="Chicago" style="width:100%;">
								</div>
							
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car3.jpg') }}" alt="New york" style="width:100%;">
								</div>
							</div>
						
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel1" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel1" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
						{{-- <a href="preview.html"><img src="{{ url('car-deal-assets/images/car1.jpg') }}" alt="" /></a> --}}
						<h4><a href="preview.html">End Game</a></h4>
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">620.87 &euro;</span></p>
							</div>
							{{-- <div class="add-cart">								
								<h4><a href="preview.html">Add to Cart</a></h4>
							</div> --}}
							<div class="address">London</div>
							<div class="date">16-05-1999</div>
							<div class="">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>					 
					</div>
					<div class="grid_1_of_5 images_1_of_5">
						<div class="container" style="width:240px;"> 
							<div id="myCarousel2" class="carousel slide" data-ride="carousel">
						
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
								<img src="{{ url('car-deal-assets/images/car4.jpg') }}" alt="Los Angeles" style="width:100%;">
								</div>
						
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car5.jpg') }}" alt="Chicago" style="width:100%;">
								</div>
							
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car6.jpg') }}" alt="New york" style="width:100%;">
								</div>
							</div>
						
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel2" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel2" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
						{{-- <a href="preview.html"><img src="{{ url('car-deal-assets/images/car2.jpg') }}" alt="" /></a> --}}
						<h4><a href="preview.html">Sorority Wars</a></h4>
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">620.87 &euro;</span></p>
							</div>
							{{-- <div class="add-cart">								
								<h4><a href="preview.html">Add to Cart</a></h4>
							</div> --}}
							<div class="clear"></div>
						</div>
						<div class="address">London</div>
						<div class="date">16-05-2019</div>
						<div class="">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<div class="grid_1_of_5 images_1_of_5">
						<div class="container" style="width:240px;"> 
							<div id="myCarousel3" class="carousel slide" data-ride="carousel">
						
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
								<img src="{{ url('car-deal-assets/images/car7.jpg') }}" alt="Los Angeles" style="width:100%;">
								</div>
						
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car8.jpg') }}" alt="Chicago" style="width:100%;">
								</div>
							
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car9.jpg') }}" alt="New york" style="width:100%;">
								</div>
							</div>
						
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel3" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel3" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
						{{-- <a href="preview.html"><img src="{{ url('car-deal-assets/images/car3.jpg') }}" alt="" /></a> --}}
						<h4><a href="preview.html">Twilight New Moon</a></h4>
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">899.75 &euro;</span></p>
							</div>
							{{-- <div class="add-cart">								
								<h4><a href="preview.html">Add to Cart</a></h4>
							</div> --}}
							<div class="clear"></div>
						</div>
						<div class="address">London</div>
						<div class="date">16-05-2019</div>
						<div class="">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<div class="grid_1_of_5 images_1_of_5">
						<div class="container" style="width:240px;"> 
							<div id="myCarousel4" class="carousel slide" data-ride="carousel">
						
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
								<img src="{{ url('car-deal-assets/images/car10.jpg') }}" alt="Los Angeles" style="width:100%;">
								</div>
						
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car1.jpg') }}" alt="Chicago" style="width:100%;">
								</div>
							
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car2.jpg') }}" alt="New york" style="width:100%;">
								</div>
							</div>
						
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel4" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel4" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
						{{-- <a href="preview.html"><img src="{{ url('car-deal-assets/images/car4.jpg') }}" alt="" /></a> --}}
						<h4><a href="preview.html">Avatar</a></h4>
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">599.00 &euro;</span></p>
							</div>
							{{-- <div class="add-cart">								
								<h4><a href="preview.html">Add to Cart</a></h4>
							</div> --}}
							<div class="clear"></div>
							<div class="address">London</div>
							<div class="date">16-05-2019</div>
							<div class="">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
					<div class="grid_1_of_5 images_1_of_5">
						<div class="container" style="width:240px;"> 
							<div id="myCarousel5" class="carousel slide" data-ride="carousel">
						
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
								<img src="{{ url('car-deal-assets/images/car3.jpg') }}" alt="Los Angeles" style="width:100%;">
								</div>
						
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car4.jpg') }}" alt="Chicago" style="width:100%;">
								</div>
							
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car5.jpg') }}" alt="New york" style="width:100%;">
								</div>
							</div>
						
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel5" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel5" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
						{{-- <a href="preview.html"><img src="{{ url('car-deal-assets/images/car5.jpg') }}" alt="" /></a> --}}
							<h4><a href="preview.html">Black Swan</a></h4>
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">679.87 &euro;</span></p>
							</div>
							{{-- <div class="add-cart">								
								<h4><a href="preview.html">Add to Cart</a></h4>
							</div> --}}
							<div class="clear"></div>
							<div class="address">London</div>
							<div class="date">16-05-2019</div>
							<div class="">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>				     
					</div>
				</div>

				<!-- <div class="content_bottom">
					<div class="heading">
						<h3>Feature Products</h3>
					</div>
				</div> -->

				<div class="section group">
					<div class="grid_1_of_5 images_1_of_5">
						<div class="container" style="width:240px;"> 
							<div id="myCarousel6" class="carousel slide" data-ride="carousel">
						
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
								<img src="{{ url('car-deal-assets/images/car6.jpg') }}" alt="Los Angeles" style="width:100%;">
								</div>
						
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car7.jpg') }}" alt="Chicago" style="width:100%;">
								</div>
							
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car8.jpg') }}" alt="New york" style="width:100%;">
								</div>
							</div>
						
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel6" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel6" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
						{{-- <a href="preview.html"><img src="{{ url('car-deal-assets/images/car6.jpg') }}" alt="" /></a> --}}
						<h4><a href="preview.html">Beauty and the beast</a></h4>
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">620.87 &euro;</span></p>
							</div>
							{{-- <div class="add-cart">								
								<h4><a href="preview.html">Add to Cart</a></h4>
							</div> --}}
							<div class="clear"></div>
							<div class="address">London</div>
							<div class="date">16-05-2019</div>
							<div class="">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
					<div class="grid_1_of_5 images_1_of_5">
						<div class="container" style="width:240px;"> 
							<div id="myCarousel7" class="carousel slide" data-ride="carousel">
						
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
								<img src="{{ url('car-deal-assets/images/car9.jpg') }}" alt="Los Angeles" style="width:100%;">
								</div>
						
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car10.jpg') }}" alt="Chicago" style="width:100%;">
								</div>
							
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car1.jpg') }}" alt="New york" style="width:100%;">
								</div>
							</div>
						
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel7" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel7" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
						{{-- <a href="preview.html"><img src="{{ url('car-deal-assets/images/car7.jpg') }}" alt="" /></a> --}}
						<h4><a href="preview.html">Eclipse</a></h4>
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">620.87 &euro;</span></p>
							</div>
							{{-- <div class="add-cart">								
								<h4><a href="preview.html">Add to Cart</a></h4>
							</div> --}}
							<div class="clear"></div>
							<div class="address">London</div>
							<div class="date">16-05-2019</div>
							<div class="">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
					<div class="grid_1_of_5 images_1_of_5">
						<div class="container" style="width:240px;"> 
							<div id="myCarousel8" class="carousel slide" data-ride="carousel">
						
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
								<img src="{{ url('car-deal-assets/images/car2.jpg') }}" alt="Los Angeles" style="width:100%;">
								</div>
						
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car3.jpg') }}" alt="Chicago" style="width:100%;">
								</div>
							
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car4.jpg') }}" alt="New york" style="width:100%;">
								</div>
							</div>
						
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel8" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel8" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
						{{-- <a href="preview.html"><img src="{{ url('car-deal-assets/images/car8.jpg') }}" alt="" /></a> --}}
						<h4><a href="preview.html">Coraline</a></h4>
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">899.75 &euro;</span></p>
							</div>
							{{-- <div class="add-cart">								
								<h4><a href="preview.html">Add to Cart</a></h4>
							</div> --}}
							<div class="clear"></div>
							<div class="address">London</div>
							<div class="date">16-05-2019</div>
							<div class="">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
					<div class="grid_1_of_5 images_1_of_5">
						<div class="container" style="width:240px;"> 
							<div id="myCarousel9" class="carousel slide" data-ride="carousel">
						
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
								<img src="{{ url('car-deal-assets/images/car5.jpg') }}" alt="Los Angeles" style="width:100%;">
								</div>
						
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car6.jpg') }}" alt="Chicago" style="width:100%;">
								</div>
							
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car7.jpg') }}" alt="New york" style="width:100%;">
								</div>
							</div>
						
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel9" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel9" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
						{{-- <a href="preview.html"><img src="{{ url('car-deal-assets/images/car9.jpg') }}" alt="" /></a> --}}
						<h4><a href="preview.html">Unstoppable</a></h4>
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">599.00 &euro;</span></p>
							</div>
							{{-- <div class="add-cart">								
								<h4><a href="preview.html">Add to Cart</a></h4>
							</div> --}}
							<div class="clear"></div>
							<div class="address">London</div>
							<div class="date">16-05-2019</div>
							<div class="">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
					<div class="grid_1_of_5 images_1_of_5">
						<div class="container" style="width:240px;"> 
							<div id="myCarousel10" class="carousel slide" data-ride="carousel">
						
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
								<img src="{{ url('car-deal-assets/images/car8.jpg') }}" alt="Los Angeles" style="width:100%;">
								</div>
						
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car9.jpg') }}" alt="Chicago" style="width:100%;">
								</div>
							
								<div class="item">
								<img src="{{ url('car-deal-assets/images/car10.jpg') }}" alt="New york" style="width:100%;">
								</div>
							</div>
						
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel10" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel10" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>
						</div>
						{{-- <a href="preview.html"><img src="{{ url('car-deal-assets/images/car10.jpg') }}" alt="" /></a> --}}
						<h4><a href="preview.html">Priest 3D</a></h4>
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees">679.87 &euro;</span></p>
							</div>
							{{-- <div class="add-cart">								
								<h4><a href="preview.html">Add to Cart</a></h4>
							</div> --}}
							<div class="clear"></div>
							<div class="address">London</div>
							<div class="date">16-05-2019</div>
							<div class="">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>				     
					</div>
				</div>
			</div>
		</div>
	</div>

   	<div class="footer">
   	  	<div class="wrap">	
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h4>Information</h4>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
					<ul>
						<li><a href="contact.html">Sign In</a></li>
						<li><a href="index.html">View Cart</a></li>
						<li><a href="#">My Wishlist</a></li>
						<li><a href="#">Track My Order</a></li>
						<li><a href="contact.html">Help</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
					<ul>
						<li><span>+91-123-456789</span></li>
						<li><span>+00-123-000000</span></li>
					</ul>
					<div class="social-icons">
						<h4>Follow Us</h4>
						<ul>
							<li><a href="#" target="_blank"><img src="{{ url('car-deal-assets/images/facebook.png') }}" alt="" /></a></li>
							<li><a href="#" target="_blank"><img src="{{ url('car-deal-assets/images/twitter.png') }}" alt="" /></a></li>
							<li><a href="#" target="_blank"><img src="{{ url('car-deal-assets/images/skype.png') }}" alt="" /> </a></li>
							<li><a href="#" target="_blank"> <img src="{{ url('car-deal-assets/images/linkedin.png') }}" alt="" /></a></li>
							<div class="clear"></div>
						</ul>
					</div>
				</div>
			</div>			
        </div>
    </div>

    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>

    <a href="#" id="toTop">
		<span id="toTopHover"> </span>
	</a>
</body>
</html>

