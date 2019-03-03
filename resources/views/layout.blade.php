<!DOCTYPE HTML>
<html>

<head>
    <title>themelot.net - Couponia - Index shop layout 4</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Koupon HTML5 Template" />
    <meta name="description" content="Koupon - Premiun HTML5 Template for Coupons Website">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="css/boostrap.css">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="css/font_awesome.css">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="css/mystyles.css">


</head>

<body class="boxed" style="background-image: url(img/textures/wood-1.jpg)">


    <div class="global-wrap">


        <!-- //////////////////////////////////
	//////////////MAIN HEADER///////////// 
	////////////////////////////////////-->
        <div class="top-main-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="index.html" class="logo mt5">
                            <img src="img/logo-small-dark.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                    </div>
                    <div class="col-md-6 col-md-offset-4">
                        <div class="pull-right">
                            <ul class="login-register">
                                @auth
                                    <!--
                                    <li class="shopping-cart shopping-cart-white"><a href="page-cart.html"><i class="fa fa-shopping-cart"></i>My
                                            Cart</a>
                                        <div class="shopping-cart-box">
                                            <ul class="shopping-cart-items">
                                                <li>
                                                    <a href="product-shop-sidebar.html">
                                                        <img src="img/70x70.png" alt="Image Alternative text" title="AMaze" />
                                                        <h5>New Glass Collection</h5><span class="shopping-cart-item-price">$150</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product-shop-sidebar.html">
                                                        <img src="img/70x70.png" alt="Image Alternative text" title="Gamer Chick" />
                                                        <h5>Playstation Accessories</h5><span class="shopping-cart-item-price">$170</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="list-inline text-center">
                                                <li><a href="page-cart.html"><i class="fa fa-shopping-cart"></i> View Cart</a>
                                                </li>
                                                <li><a href="page-checkout.html"><i class="fa fa-check-square"></i>
                                                        Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                @else
                                    <li>
                                        <a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top">
                                            <i class="fa fa-sign-in"></i> Ingresar
                                        </a>
                                    </li>
                                    <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i
                                                class="fa fa-edit"></i>Registrarse</a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="main main-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                        <nav>
                            <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="#">Admin</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--
                    <div class="col-md-6">
                        <div class="pull-right">
                            <div class="header-search-bar">
                                <label>Search</label>
                                <input type="text" placeholder="Glasses, Shoes, ect" />
                                <button><i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            -->
            </div>
        </header>
        <!-- LOGIN REGISTER LINKS CONTENT -->
        <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-sign-in dialog-icon"></i>
            <h3>Member Login</h3>
            <h5>Welcome back, friend. Login to get started</h5>
            <form class="dialog-form">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="email@domain.com" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="My secret password" class="form-control">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me
                    </label>
                </div>
                <input type="submit" value="Sign in" class="btn btn-primary">
            </form>
            <ul class="dialog-alt-links">
                <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
                </li>
                <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
                </li>
            </ul>
        </div>


        <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-edit dialog-icon"></i>
            <h3>Member Register</h3>
            <h5>Ready to get best offers? Let's get started!</h5>
            <form class="dialog-form">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="email@domain.com" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="My secret password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" placeholder="Type your password again" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Your Area</label>
                            <input type="password" placeholder="Boston" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Postal/Zip</label>
                            <input type="password" placeholder="12345" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Get hot offers via e-mail
                    </label>
                </div>
                <input type="submit" value="Sign up" class="btn btn-primary">
            </form>
            <ul class="dialog-alt-links">
                <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
                </li>
            </ul>
        </div>


        <div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="icon-retweet dialog-icon"></i>
            <h3>Password Recovery</h3>
            <h5>Fortgot your password? Don't worry we can deal with it</h5>
            <form class="dialog-form">
                <label>E-mail</label>
                <input type="text" placeholder="email@domain.com" class="span12">
                <input type="submit" value="Request new password" class="btn btn-primary">
            </form>
        </div>
        <!-- END LOGIN REGISTER LINKS CONTENT -->




        <div class="gap"></div>


        <!-- //////////////////////////////////
	//////////////END MAIN HEADER////////// 
	////////////////////////////////////-->


        <!-- //////////////////////////////////
	//////////////PAGE CONTENT///////////// 
	////////////////////////////////////-->



        <div class="container">
            <h2>Últimos cupones</h2>
            <div class="row row-wrap">
                <div class="col-md-4">
                    <div class="product-banner">
                        <img src="img/800x600.png" alt="Image Alternative text" title="Gamer Chick" />
                        <div class="product-banner-inner">
                            <h5>Playstation Accsories</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-banner">
                        <img src="img/800x600.png" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                        <div class="product-banner-inner">
                            <h5>Canon Cameras</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-banner">
                        <img src="img/800x600.png" alt="Image Alternative text" title="AMaze" />
                        <div class="product-banner-inner">
                            <h5>New Glass Collections</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar-left">
                        <h3 class="mb20">I am looking for</h3>
                        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                            <li><a href="#"><i class="fa fa-cutlery"></i>Food & Drink</a>
                            </li>
                            <li><a href="#"><i class="fa fa-calendar"></i>Events</a>
                            </li>
                            <li><a href="#"><i class="fa fa-female"></i>Beauty</a>
                            </li>
                            <li><a href="#"><i class="fa fa-bolt"></i>Fitness</a>
                            </li>
                            <li><a href="#"><i class="fa fa-headphones"></i>Electronics</a>
                            </li>
                            <li><a href="#"><i class="fa fa-image"></i>Furniture</a>
                            </li>
                            <li><a href="#"><i class="fa fa-umbrella"></i>Fashion</a>
                            </li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping</a>
                            </li>
                            <li><a href="#"><i class="fa fa-home"></i>Home & Graden</a>
                            </li>
                            <li><a href="#"><i class="fa fa-plane"></i>Travel</a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <h1 class="mb20">Weekly Featured <small><a href="#">View All</a></small></h1>
                    <div class="row row-wrap">
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="img/800x600.png" alt="Image Alternative text" title="a turn" />
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="4.9/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Diving with Sharks</h5>
                                    <p class="product-desciption">Ridiculus dictum aliquam vitae sollicitudin lacinia
                                        nisl platea</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$142</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To
                                                    Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="img/800x600.png" alt="Image Alternative text" title="Food is Pride" />
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="3.4/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star-half-empty"></i>
                                        </li>
                                        <li><i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Best Pasta</h5>
                                    <p class="product-desciption">Ridiculus dictum aliquam vitae sollicitudin lacinia
                                        nisl platea</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$159</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To
                                                    Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="img/800x600.png" alt="Image Alternative text" title="AMaze" />
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="3.5/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star-half-empty"></i>
                                        </li>
                                        <li><i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">New Glass Collection</h5>
                                    <p class="product-desciption">Ridiculus dictum aliquam vitae sollicitudin lacinia
                                        nisl platea</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$61</span>
                                            </li>
                                            <li><span class="product-old-price">$133</span>
                                            </li>
                                            <li><span class="product-save">Save 46%</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To
                                                    Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
            <div class="text-center">
                <h1 class="mb20">New Arrivals</h1>
                <div class="row row-wrap">
                    <div class="col-md-4">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/800x600.png" alt="Image Alternative text" title="a turn" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.2/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Diving with Sharks</h5>
                                <p class="product-desciption">Lacinia penatibus justo urna quis accumsan arcu faucibus</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$185</span>
                                        </li>
                                        <li><span class="product-old-price">$294</span>
                                        </li>
                                        <li><span class="product-save">Save 63%</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/800x600.png" alt="Image Alternative text" title="Food is Pride" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.4/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Best Pasta</h5>
                                <p class="product-desciption">Lacinia penatibus justo urna quis accumsan arcu faucibus</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$93</span>
                                        </li>
                                        <li><span class="product-old-price">$137</span>
                                        </li>
                                        <li><span class="product-save">Save 68%</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/800x600.png" alt="Image Alternative text" title="AMaze" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">New Glass Collection</h5>
                                <p class="product-desciption">Lacinia penatibus justo urna quis accumsan arcu faucibus</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$35</span>
                                        </li>
                                        <li><span class="product-old-price">$108</span>
                                        </li>
                                        <li><span class="product-save">Save 32%</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/800x600.png" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="4.6/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Best Camera</h5>
                                <p class="product-desciption">Lacinia penatibus justo urna quis accumsan arcu faucibus</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$272</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/800x600.png" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.6/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Beach Holidays</h5>
                                <p class="product-desciption">Lacinia penatibus justo urna quis accumsan arcu faucibus</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$195</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/800x600.png" alt="Image Alternative text" title="Old No7" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="4.9/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Jack Daniels Huge Pack</h5>
                                <p class="product-desciption">Lacinia penatibus justo urna quis accumsan arcu faucibus</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$108</span>
                                        </li>
                                        <li><span class="product-old-price">$204</span>
                                        </li>
                                        <li><span class="product-save">Save 53%</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <a href="#" class="btn btn-primary btn-lg">Explore All New Items</a>
            </div>
            <div class="gap"></div>
        </div>


        <!-- //////////////////////////////////
	//////////////END PAGE CONTENT///////// 
	////////////////////////////////////-->



        <!-- //////////////////////////////////
	//////////////MAIN FOOTER////////////// 
	////////////////////////////////////-->

        <footer class="main">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row row-wrap">
                        <div class="col-md-3">
                            <a href="index.html">
                                <img src="img/logo.png" alt="logo" title="logo" class="logo">
                            </a>
                            <ul class="list list-social">
                                <li>
                                    <a class="fa fa-facebook box-icon" href="#" data-toggle="tooltip" title="Facebook"></a>
                                </li>
                                <li>
                                    <a class="fa fa-twitter box-icon" href="#" data-toggle="tooltip" title="Twitter"></a>
                                </li>
                                <li>
                                    <a class="fa fa-flickr box-icon" href="#" data-toggle="tooltip" title="Flickr"></a>
                                </li>
                                <li>
                                    <a class="fa fa-linkedin box-icon" href="#" data-toggle="tooltip" title="LinkedIn"></a>
                                </li>
                                <li>
                                    <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>
                                </li>
                            </ul>
                            <p>Placerat mattis arcu curae adipiscing blandit ipsum sociis ipsum interdum facilisis ante
                                dis vel senectus aenean egestas pharetra nascetur magnis</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Sign Up to the Newsletter</h4>
                            <div class="box">
                                <form>
                                    <div class="form-group mb10">
                                        <label>E-mail</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <p class="mb10">Risus nec primis cum amet massa donec</p>
                                    <input type="submit" class="btn btn-primary" value="Sign Up" />
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4>Couponia on Twitter</h4>
                            <!-- START TWITTER -->
                            <div class="twitter-ticker" id="twitter-ticker"></div>
                            <!-- END TWITTER -->
                        </div>
                        <div class="col-md-3">
                            <h4>Recent News</h4>
                            <ul class="thumb-list">
                                <li>
                                    <a href="#">
                                        <img src="img/70x70.png" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                        <h5 class="thumb-list-item-title"><a href="#">Nibh amet</a></h5>
                                        <p class="thumb-list-item-desciption">Volutpat habitant rhoncus pretium non</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/70x70.png" alt="Image Alternative text" title="AMaze" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                        <h5 class="thumb-list-item-title"><a href="#">Imperdiet vel</a></h5>
                                        <p class="thumb-list-item-desciption">Torquent penatibus torquent taciti
                                            torquent</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/70x70.png" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                        <h5 class="thumb-list-item-title"><a href="#">Nullam vitae</a></h5>
                                        <p class="thumb-list-item-desciption">Proin natoque ligula dui et</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Copyright © 2014, Your Store, All Rights Reserved</p>
                        </div>
                        <div class="col-md-6 col-md-offset-2">
                            <div class="pull-right">
                                <ul class="list-inline list-payment">
                                    <li>
                                        <img src="img/payment/american-express-curved-32px.png" alt="Image Alternative text"
                                            title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/cirrus-curved-32px.png" alt="Image Alternative text"
                                            title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/discover-curved-32px.png" alt="Image Alternative text"
                                            title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/ebay-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/maestro-curved-32px.png" alt="Image Alternative text"
                                            title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/mastercard-curved-32px.png" alt="Image Alternative text"
                                            title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/visa-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //////////////////////////////////
	//////////////END MAIN  FOOTER///////// 
	////////////////////////////////////-->



        <!-- Scripts queries -->
        <script src="js/jquery.js"></script>
        <script src="js/boostrap.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/flexnav.min.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/tweet.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/fitvids.min.js"></script>
        <script src="js/mail.min.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/masonry.js"></script>
        <script src="js/nicescroll.js"></script>

        <!-- Custom scripts -->
        <script src="js/custom.js"></script>
    </div>
</body>

</html>s
