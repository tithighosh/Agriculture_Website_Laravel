<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="/assets/img/favicon.ico" rel="icon">

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
                            <a href="#" class="nav-item nav-link active" style="color: white;">Product</a>
						</div>
						<div class="navbar-nav mr-auto">
                            <a href="#" class="nav-item nav-link active" style="color: white;">{{$user['name']}}</a>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item">
                                <a style="color: white" href="{{route('logout')}}">Logout</a>
                            </div>
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
                        <a style="text-decoration: none; color:  #4e73df; float: left;" class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
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
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-detail-top">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                        <img style="height: 300px; width: 200px" src="{{asset('upload/'.$product['imageURL'])}}" alt="Product Image">
                                </div>
                                <div class="col-md-7">
                                    <form method="post">
                                        @csrf
                                        <div class="product-content">
                                            <div class="title"><h2>{{$product['productName']}}</h2></div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <h4>Price:</h4>
                                                <p>{{$product['price']}}</p>
                                            </div>
                                            <div class="quantity">
                                                <h4>Quantity:</h4>
                                                <div class="qty">
                                                    <input type="hidden" name="catName" value="{{$product['category']}}">
                                                    <input type="hidden" name="productName" value="{{$product['productName']}}">
                                                    <i class="fa fa-minus"></i>
                                                    <input type="text" value="1" name="quantity">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="p-size">
                                                <h4>Category:</h4>
                                                <div class="btn-group btn-group-sm">
                                                    <div>{{$product['category']}}</div>
                                                </div> 
                                            </div>
                                            <div class="p-color">
                                                <h4>Available:</h4>
                                                <div class="btn-group btn-group-sm">
                                                    <div>{{$product['price']}}</div>
                                                </div> 
                                            </div>
                                            <div class="action">
                                                <button  class="btn" onclick="myFunction()"><i class="fa fa-shopping-bag"></i>Buy Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row product-detail-bottom">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="description" class="container tab-pane active">
                                        <p>
                                            {{$product['description']}}
                                        </p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        
                        
                    
                    <!-- Side Bar Start -->
                    
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product Detail End -->
        
        <!-- Brand Start -->
    
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

        <script>
            function myFunction() {
                alert("Successfully Pusrchased Successfully");
            }
        </script>

    </body>
</html>