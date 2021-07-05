<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
     <!-- Site Metas -->
    <title>WELCOME</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('resources/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{URL::asset('/resources/css/responsive.css')}}" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="resources/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loaders/loader-app.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->
    <header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="{{ asset('/images/logos/logo-app.png')}}" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#features">Features</a></li>
                       <!--<li><a class="nav-link" href="#download">Download</a></li>--> 
                        <li><a class="nav-link" href="#pricing">Pricing</a></li>
                        <li><a class="nav-link" href="#clients">Clients</a></li>
                        <li><a class="nav-link" href="#faqs">FAQs</a></li>
						<li><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>	
	
	<section id="home" class="cd-hero js-cd-hero">
		<ul class="cd-hero__slider">
			<li class="cd-hero__slide cd-hero__slide--selected js-cd-slide">
				<div class="cd-hero__content cd-hero__content--half-width">
					<h2>Bievenue a notre bibliothèque </h2>
					<p>Dans  Notre d'bibliothèque 

                        Interviews, signatures, idées de lecture, podcasts, portraits ... Lisez! vous fait découvrir les livres différemment.
                        
                        Partageons le plaisir de lire ensemble!</p>
				<!--	<a href="#0" class="hvr-bounce-to-right cd-hero__btn">App Store</a>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn cd-hero__btn--secondary">GooglePlay</a>-->
				</div> <!-- .cd-hero__content -->

				<div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
					<img src="uploads/app_iphone_01.png" class="img-fluid" alt="tech 1">
				</div> <!-- .cd-hero__content -->
			</li>

			<!--<li class="cd-hero__slide js-cd-slide">
				<div class="cd-hero__content cd-hero__content--half-width">
					<h2>Familiarize Your Creative Apps</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn">App Store</a>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn cd-hero__btn--secondary">GooglePlay</a>
				</div>  .cd-hero__content -->

			<!--	<div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
					<img src="uploads/app_iphone_02.png" class="img-fluid" alt="tech 1">
				</div> .cd-hero__content 
			</li>

			<li class="cd-hero__slide js-cd-slide">
				<div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
					<img src="uploads/app_iphone_01.png" class="img-fluid" alt="tech 2">
				</div>  .cd-hero__content 

				<div class="cd-hero__content cd-hero__content--half-width">
					<h2>Familiarize Your Creative Apps</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn">App Store</a>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn cd-hero__btn--secondary">GooglePlay</a>
				</div>  .cd-hero__content 
				
			</li>

			<li class="cd-hero__slide js-cd-slide">
				<div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
					<img src="uploads/app_iphone_02.png" class="img-fluid" alt="tech 2">
				</div>  .cd-hero__content 

				<div class="cd-hero__content cd-hero__content--half-width">
					<h2>Familiarize Your Creative Apps</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn">App Store</a>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn cd-hero__btn--secondary">GooglePlay</a>
				</div>  .cd-hero__content 
				
			</li>

			<li class="cd-hero__slide js-cd-slide">
				<div class="cd-hero__content cd-hero__content--half-width">
					<h2>Familiarize Your Creative Apps</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn">App Store</a>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn cd-hero__btn--secondary">GooglePlay</a>
				</div>  .cd-hero__content

				<div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
					<img src="uploads/app_iphone_01.png" class="img-fluid" alt="tech 1">
				</div>  .cd-hero__content 
			</li>
		</ul> .cd-hero__slider 

		<div class="cd-hero__nav js-cd-nav">
			<nav>
				<span class="cd-hero__marker cd-hero__marker--item-1 js-cd-marker"></span>
				
				<ul>
					<li class="cd-selected"><a href="#0">01</a></li>
					<li><a href="#0">02</a></li>
					<li><a href="#0">03</a></li>
					<li><a href="#0">04</a></li>
					<li><a href="#0">05</a></li>
				</ul>
			</nav> 
		</div>  .cd-hero__nav -->
	</section> <!-- .cd-hero -->

	
	<div id="about" class="section wb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h3>About Us</h3>
						<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br>auctor nisi elit consequat ipsum, nec sagittis sem!</p>
					</div><!-- end title -->
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-6">
					<div class="about-left">
						<img src="uploads/about-01.png" class="img-fluid" alt="" />
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="about-right">
						<h2>Easy customization </h2>
						<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem."</p>
					</div>
				</div>
			</div>
			
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-6">
					<div class="about-right">
						<h2>Get started </h2>
						<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem."</p>
					</div>
				</div>
				<div class="col-lg-7 col-md-6">
					<div class="about-left">
						<img src="uploads/about-02.png" class="img-fluid" alt="" />
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
    <div id="features" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Fonctionnalités de la bibliothèque</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br>auctor nisi elit consequat ipsum, nec sagittis sem!</p>
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-new-file effect-1"></i>		
						</div>
						<h2>Easy to Customize</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-price-tag effect-1"></i>
						</div>
						<h2>eCommerce Ready</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-windows effect-1"></i>
						</div>
						<h2>Browser Compatible</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-wordpress-logo effect-1" ></i>
						</div>
						<h2>WordPress Installation</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-pantone effect-1"></i>
						</div>
						<h2>Limitless Colors</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-cloud-computing effect-1"></i>
						</div>
						<h2>Lifetime Update</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
            </div>
			
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="how-its-work clearfix">
        <div class="hc colon1">
            <h2>1</h2>
            <h3>Aller A bibliothèque </h3>
            <p>Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div><!-- end col -->

        <div class="hc colon2">
            <h2>2</h2>
            <h3>Cree Un Compte</h3>
            <p>Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div><!-- end col -->

        <div class="hc colon3">
            <h2>3</h2>
            <h3>Se Connecter Sur SiteWeb</h3>
            <p>Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div><!-- end col -->  

        <div class="hc colon4">
            <h2>4</h2>
            <h3>Enjoy</h3>
            <p>Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div><!-- end col -->  
    </div><!-- end how-its-work -->

    <div id="screenshots" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Captures d'écran de l'application</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br>auctor nisi elit consequat ipsum, nec sagittis sem!</p>
            </div><!-- end title -->

            <div class="owl-screenshots swiper-container">
				<div class="mobilescreen-image"></div>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="service-widget">
							<div class="post-media entry wow fadeIn">
								<a href="uploads/screenshot_01.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
								<img src="uploads/screenshot_01.png" alt="" class="img-fluid img-rounded">
								<div class="magnifier"></div>
							</div>
						</div><!-- end service -->
					</div>
					<div class="swiper-slide">
						<div class="service-widget">
							<div class="post-media entry wow fadeIn">
								<a href="uploads/screenshot_02.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
								<img src="uploads/screenshot_02.png" alt="" class="img-fluid img-rounded">
								<div class="magnifier"></div>
							</div>
						</div><!-- end service -->
					</div>
					<div class="swiper-slide">
						<div class="service-widget">
							<div class="post-media entry wow fadeIn">
								<a href="uploads/screenshot_03.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
								<img src="uploads/screenshot_03.png" alt="" class="img-fluid img-rounded">
								<div class="magnifier"></div>
							</div>
						</div><!-- end service -->
					</div>
					<div class="swiper-slide">
						<div class="service-widget">
							<div class="post-media entry wow fadeIn">
								<a href="uploads/screenshot_04.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
								<img src="uploads/screenshot_04.png" alt="" class="img-fluid img-rounded">
								<div class="magnifier"></div>
							</div>
						</div><!-- end service -->
					</div>
					<div class="swiper-slide">
						<div class="service-widget">
							<div class="post-media entry wow fadeIn">
								<a href="uploads/screenshot_05.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
								<img src="uploads/screenshot_05.png" alt="" class="img-fluid img-rounded">
								<div class="magnifier"></div>
							</div>
						</div><!-- end service -->
					</div>
					<div class="swiper-slide">
						<div class="service-widget">
							<div class="post-media entry wow fadeIn">
								<a href="uploads/screenshot_06.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
								<img src="uploads/screenshot_06.png" alt="" class="img-fluid img-rounded">
								<div class="magnifier"></div>
							</div>
						</div><!-- end service -->
					</div>
					<div class="swiper-slide">
						<div class="service-widget">
							<div class="post-media entry wow fadeIn">
								<a href="uploads/screenshot_01.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
								<img src="uploads/screenshot_01.png" alt="" class="img-fluid img-rounded">
								<div class="magnifier"></div>
							</div>
						</div><!-- end service -->
					</div>
					<div class="swiper-slide">
						<div class="service-widget">
							<div class="post-media entry wow fadeIn">
								<a href="uploads/screenshot_02.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
								<img src="uploads/screenshot_02.png" alt="" class="img-fluid img-rounded">
								<div class="magnifier"></div>
							</div>
						</div><!-- end service -->
					</div>
					<div class="swiper-slide">
						<div class="service-widget">
							<div class="post-media entry wow fadeIn">
								<a href="uploads/screenshot_03.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
								<img src="uploads/screenshot_03.png" alt="" class="img-fluid img-rounded">
								<div class="magnifier"></div>
							</div>
						</div><!-- end service -->
					</div>
					<div class="swiper-slide">
						<div class="service-widget">
							<div class="post-media entry wow fadeIn">
								<a href="uploads/screenshot_04.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
								<img src="uploads/screenshot_04.png" alt="" class="img-fluid img-rounded">
								<div class="magnifier"></div>
							</div>
						</div><!-- end service -->
					</div>
				</div>
				<div class="swiper-pagination"></div>
				<div class="swiper-button-next">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</div>
				<div class="swiper-button-prev">
					<i class="fa fa-angle-left" aria-hidden="true"></i>
				</div>
            </div><!-- end row -->			
        </div><!-- end container -->
    </div><!-- end section -->

  <!--
	  <div id="download" class="section noover download-bg">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-6 col-sm-12">
                    <div class="customwidget text-left">
                        <h1>Download Start</h1>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id felis rhoncus, ultrices dolor quis, faucibus velit. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>  end col -->
               <!-- <div class="col-md-6 iphones">
                    <div class="text-center image-center">
                        <img src="uploads/iphones.png" alt="" class="img-fluid wow fadeInUp">
                    </div>
                </div>
            </div> end row 
        </div> end container 
	</div> end section

-->
	
	<!--<div class="download-icons">
		<div class="box-icon">
			<div class="btn-buy apple-button">
				<a href="#"><i class="flaticon-android"></i> Download on the <strong>Google Play</strong></a>
			</div>
			<div class="btn-buy apple-button">
				<a href="#"><i class="flaticon-apple"></i> Download on the <strong>App Store</strong></a>
			</div>
			<div class="btn-buy apple-button">
				<a href="#"><i class="flaticon-windows"></i> Download on the <strong>Windows Store</strong></a>
			</div>
		</div>
	</div> -->

    <div id="team" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>L'EQUIPE</h3>
                <p class="lead">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, true generator<br> on the Internet. It uses a dictionary of over..</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="uploads/team_01.jpg">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">WADIE</h3>
                            <span class="post">Rapport </span>
							<p>Lorem Ipsum is simply dummy text of the printing and typeseing industry</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="uploads/team_02.jpg">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">MOHAMED SADOUQ</h3>
                            <span class="post">UI Designer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typeseing industry</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="uploads/team_03.jpg">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">SOUHAIL BAKIOUI</h3>
                            <span class="post">Developer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typeseing industry</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section stats-box" style="background-image:url('uploads/ben_img_2.jpg');">
        <div class="container">
            <div class="row text-left stat-wrap">
                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="text-center">
						<span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-apple"></i></span>
						<p class="stat_count_download">12500</p>
						<h3>App Store</h3>
					</div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="text-center">
						<span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-amazon-logo"></i></span>
						<p class="stat_count_download">31000</p>
						<h3>Amazon</h3>
					</div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="text-center">
						<span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-android"></i></span>
						<p class="stat_count_download">15788</p>
						<h3>Google Play</h3>
					</div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="text-center">
						<span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-windows"></i></span>
						<p class="stat_count_download">21000</p>
						<h3>Windows App</h3>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Pricing</h3>
                <p>Get the red carpet treatment <strong>just $39 per month!</strong> It is estimated that 3.5 million established by personal blogs.<br> From each other, we share paid WordPress themes WP Service...</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="price-value">100DH
                            <span class="month">monthly</span>
                        </div>
                        <h3 class="title">Standard</h3>
                        <ul class="pricing-content">
                            <li>50 GB Disk Space</li>
                            <li>50 Email Accounts</li>
                            <li>50 GB Monthly Bandwidth</li>
                            <li>10 Subdomains</li>
                            <li>15 Domains</li>
                        </ul>
                        <a href="#" class="pricingTable-signup hvr-bounce-to-right">Sign Up</a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable active">
                        <div class="price-value">250DH
                            <span class="month">6 months</span>
                        </div>
                        <h3 class="title">Standar</h3>
                        <ul class="pricing-content">
                            <li>60 GB Disk Space</li>
                            <li>60 Email Accounts</li>
                            <li>60 GB Monthly Bandwidth</li>
                            <li>15 Subdomains</li>
                            <li>20 Domains</li>
                        </ul>
                        <a href="#" class="pricingTable-signup hvr-bounce-to-right">Sign Up</a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="price-value">3000DH
                            <span class="month">yearly</span>
                        </div>
                        <h3 class="title">Premium</h3>
                        <ul class="pricing-content">
                            <li>70 GB Disk Space</li>
                            <li>70 Email Accounts</li>
                            <li>70 GB Monthly Bandwidth</li>
                            <li>20 Subdomains</li>
                            <li>25 Domains</li>
                        </ul>
                        <a href="#" class="pricingTable-signup hvr-bounce-to-right">Sign Up</a>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="clients" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Happy Clients</h3>
                <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about Appfast website template!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="offset-md-2 col-md-8 ">
						<div class="testi-carousel owl-carousel owl-theme">
							<div class="testimonial">
								<p class="description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
								</p>
								<h3 class="title">williamson</h3>
								<span class="post">Web Developer</span>
							</div>
		 
							<div class="testimonial">
								<p class="description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
								</p>
								<h3 class="title">Kristina</h3>
								<span class="post">Web Designer</span>
							</div>
		 
							<div class="testimonial">
								<p class="description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
								</p>
								<h3 class="title">Miranda Joy</h3>
								<span class="post">Web Developer</span>
							</div>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	
	<div id="faqs" class="section lb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="accordion" id="accordionExample">
					  <div class="card">
						<div class="card-header" id="headingOne">
						  <h5 class="mb-0">
							<a href="" class="btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
Pourqoi Cette SiteWeb							</a>
						  </h5>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						  <div class="card-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. 
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header" id="headingTwo">
						  <h5 class="mb-0">
							<a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								How to install this app ?
							</a>
						  </h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						  <div class="card-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. 
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header" id="headingThree">
						  <h5 class="mb-0">
							<a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							  Lorem ipsum dolor sit amet
							</a>
						  </h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						  <div class="card-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. 
						  </div>
						</div>
					  </div>
					</div>					
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="faq-right">
						<img src="uploads/about-02.png" class="img-fluid" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="contact" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get in Touch</h3>
				<div class="info-box" data-toggle="tooltip" data-placement="bottom" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.">
					<i class="fa fa-question-circle" aria-hidden="true"></i>
				</div>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="text-center pdi">
                                    <button type="submit" value="SEND" id="submit" class="hvr-bounce-to-right get-btn">Get a Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end section -->

    <footer class="footer">
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-12"> 
					<div class="subscribe-text">
						<h3>Subscribe for Newsletter</h3>
						<p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>
					</div>
					
					<div class="subscribe-form">
						<form>
							<input class="form-control" id="subscribe_email" name="email" placeholder="Email Address..." required="" type="email">
							<button type="submit" class="btn subscribe-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                    
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">ProApp</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="resources/js/all.js"></script>
    <!-- ALL PLUGINS -->
	<script src="resources/js/main.js"></script>
    <script src="resources/js/custom.js"></script>
	<script src="resources/js/swiper.min.js"></script>
	<script>
		var swiper = new Swiper('.swiper-container', {
			loop: true,
			effect: 'coverflow',
			centeredSlides: true,
			loopFillGroupWithBlank: true,
			slidesPerView: 3,
            initialSlide: 3,
            keyboardControl: true,
            mousewheelControl: false,
            lazyLoading: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
                1199: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                767: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                575: {
                    slidesPerView: 1,
                    spaceBetween: 3,
                }
            }
		});
	  </script>

</body>
</html>