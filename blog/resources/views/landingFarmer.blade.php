<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="{{asset('img/favicon.ico')}}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{asset('lib/slick/slick-theme.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style1.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="#" class="nav-item nav-link active" style="color: white;">Home</a>
						</div>
						<div class="navbar-nav mr-auto">
                            <a href="#" class="nav-item nav-link active" style="color: white;">{{$name}}</a>
                        </div>
                        <div class="navbar-nav">
                                <a style="color: white" href="{{route('logout')}}">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <a style="text-decoration: none; color:  #4e73df; float: left;" class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
							<div class="sidebar-brand-icon rotate-n-15">
								<h2><i class="fab fa-pagelines"></i></h2>
							</div>
							<h1><div class="sidebar-brand-text mx-3">Agro Glow</div></h1>
						</a>
					</div>
					<div class="col-md-4"></div>
                    
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container header-slider normal-slider">
                            <div class="header-slider-item">
                                <img class="container" style="width: 800px; height:350px;position: center" src="{{asset('img/farmers.jpg')}}" alt="Slider Image" />
                            </div>
                            <div class="header-slider-item">
                                <img class="container" style="width: 800px; height:350px; position: center" src="{{asset('img/farmers1.jpg')}}" alt="Slider Image" />
                            </div>
                            <div class="header-slider-item">
                                <img class="container" style="width: 800px; height:350px; position: center" src="{{asset('img/farmers2.jpg')}}" alt="Slider Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        
        <!-- Feature End-->      
        
        <!-- Category Start-->
        
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:01829747029">+01829747029</a>
                    </div>
                </div>
            </div>
        </div><br>
        <!-- Call to Action End -->       
        <div class="recent-product product">
            <div class="section-header">
                <h1 style="text-align: center;">Our Products</h1>
            </div>
        </div>
        
        <!-- Featured Product Start -->
		<div class="row container-fluid">
		@for($i = 0; $i<count($product); $i++) 
			<div class="col-md-3">
				<div class="product-item">
					<div class="product-title">
						<a href="#">{{$product[$i]['productName']}}</a>
						<div class="ratting">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
					<div class="product-image">
						<a href="{{route('addCart', $product[$i]['id'])}}">
							<img style="height: 200px; width: 150px" src="{{asset('upload/'.$product[$i]['imageURL'])}}" alt="Product Image">
						</a>
						
					</div>
					<div class="product-price">
						<h3><span>$</span>{{$product[$i]['price']}}</h3>
						<a class="btn" href="#"><i class="fa fa-shopping-cart"></i>Buy Now</a>
					</div>
				</div>
			</div>
        @endfor 
		</div>
        <!-- Featured Product End -->       
        
        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Subscribe Our Newsletter</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <input type="email" value="Your email here">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->        
        
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1 style="text-align: center;">Recent Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    @for($i = 0; $i<count($product); $i++)
                    <div class="col-lg-5">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="{{route('addCart', $product[$i]['id'])}}">{{$product[$i]['productName']}}</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="{{route('addCart', $product[$i]['id'])}}>">
                                    <img style="height: 200px; width: 150px" src="{{asset('upload/'.$product[$i]['imageURL'])}}" alt="Product Image">
                                </a>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>{{$product[$i]['price']}}</h3>
                                <a class="btn" href="{{$product[$i]['price']}}"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    @endfor 
                </div>
            </div>
        </div>
        <!-- Recent Product End -->
        
        <!-- Review Start -->
        
        <!-- Review End -->        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>65/C Road-52 Banani</p>
                                <p><i class="fa fa-envelope"></i>arefink910@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+01911927497</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-12">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="{{asset('img/payment-method.png')}}" alt="Payment Method" />
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="container" style="color: white; text-align: center;">Agro Glow</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/slick/slick.min.js')}}"></script>
        
        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>