@extends('web.layouts.master')

@section('title')
	Our Blood 
@endsection


@section('content')
		<!--====== Preloader ======-->
		<div id="preloader">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="object_one"></div>
					<div class="object" id="object_two"></div>
					<div class="object" id="object_three"></div>
					<div class="object" id="object_four"></div>
				</div>
			</div>
		</div>
	
		<!--====== Header Start ======-->
		<header class="site-header sticky-header transparent-header">
			<div class="header-topbar  d-none d-sm-block">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-auto">
							<ul class="contact-info">
								<li><a href="#"><i class="far fa-envelope"></i> ourblood@gmail.com</a></li>
								<li><a href="#"><i class="far fa-map-marker-alt"></i> 250 Main Street, 2nd Floor, USA</a></li>
							</ul>
						</div>
						<div class="col-auto d-none d-md-block">
							<ul class="social-icons">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-behance"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="navbar-wrapper">
				<div class="container">
					<div class="navbar-inner">
						<div class="site-logo">
							<a href="/"><img src="/assets/img/logo.png" alt=""></a>
						</div>
						<div class="nav-menu">
							<ul>
								<li class="current">
									<a href="/">Home</a>
									
								</li>
								{{-- <li>
									<a href="">Project</a>
									<ul class="submenu">
										<li><a href="">Project One</a></li>
									</ul>
								</li> --}}
								<li>
									<a href="">Events</a>
								</li>
								{{-- <li>
									<a href="">News</a>
									<ul class="submenu">
										<li><a href="">News Standard</a></li>
									</ul>
								</li> --}}
								<li>
									<a href="#">Pages</a>
									<ul class="submenu">
										<li><a href="">About</a></li>
										<li><a href="">Company Overview</a></li>
										<li><a href="">Team Member</a></li>
										<li><a href="">Pricing</a></li>
										<li><a href="">FAQ</a></li>
										<li><a href="">Testimonials</a></li>
									</ul>
								</li>
								<li><a href="/contact">Contact</a></li>
								@if (auth()->check())
								<li>
									<a href="/dashboard">{{ Auth::user()->name }}</a>
								</li>
								<form method="POST" action="{{ route('logout') }}">
									@csrf
			
									<a class="list-group-item list-group-item-action bg-transparent text-danger fw-bold" href="{{ route('logout') }}"
											 onclick="event.preventDefault();
													this.closest('form').submit();">
													<i class="fas fa-power-off me-2"> </i> 
										{{ __('Logout') }}
								</a>
								</form> 
								@else 
					
								<li>
									<a href="{{ route('login') }}">Login</a>
								</li>
							
								<li>
									<a href="{{ route('register') }}">register</a>
								</li>
								@endif
							</ul>
						</div>
						<div class="navbar-extra d-flex align-items-center">
							<a href="{{ route('register') }}" class="main-btn nav-btn d-none d-sm-inline-block">
								Donate Now <i class="far fa-arrow-right"></i>
							</a>
							<a href="#" class="nav-toggler">
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mobile-menu-panel">
				<div class="panel-logo">
					<a href="#"><img src="assets/img/logo-white.png" alt="Funden"></a>
				</div>
				<ul class="panel-menu">
					<li class="current">
						<a href="/">Home</a>
						
					</li>
					{{-- <li>
						<a href="">Project</a>
						<ul class="submenu">
							<li><a href="">Project One</a></li>
							
						</ul>
					</li> --}}
					<li>
						<a href="">Events</a>
					</li>
					<li>
						<a href="">News</a>
						<ul class="submenu">
							<li><a href="">News Standard</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Pages</a>
						<ul class="submenu">
							<li><a href="">About</a></li>
							<li><a href="">Company Overview</a></li>
							<li><a href="">Team Member</a></li>
							<li><a href="">Pricing</a></li>
							<li><a href="">FAQ</a></li>
						</ul>
					</li>
					<li><a href="/contact">Contact</a></li>
				</ul>
				<li>
					<a href="{{ route('login') }}">Login</a>
				</li>
				<li>
					<a href="{{ route('register') }}">register</a>
				</li>

				<div class="panel-extra">
					<a href="{{ route('register') }}" class="main-btn btn-white">
						Donate Now <i class="far fa-arrow-right"></i>
					</a>
				</div>
				<a href="#" class="panel-close">
					<i class="fal fa-times"></i>
				</a>
			</div>
		</header>
		<!--====== Header End ======-->
	
		<!--====== Hero Area Start ======-->
		<section class="hero-area-two">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-8 col-sm-11">
						<div class="hero-text">
							<h1 class="title wow fadeInLeft" data-wow-delay="0.2s">
								Our Blood
							</h1>
							<p class="wow fadeInLeft" data-wow-delay="0.3s">
								When you donate blood, you stimulate bone marrow cells to renew their activities, increase their effectiveness, and stimulate blood circulation, in addition to saving someone else's life.						
							</p>
							<ul class="hero-btn">
								<li class="wow fadeInUp" data-wow-delay="0.4s">
									<a href="project-2.html" class="main-btn">Donate A Little Blood <i class="far fa-arrow-right"></i></a>
								</li>
								<li class="wow fadeInUp" data-wow-delay="0.5s">
									<a src="https://www.youtube.com/embed/5avynttN2k8" class="video-btn" data-lity><i class="fas fa-play"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-8 col-sm-10 mx-auto wow fadeInRight" data-wow-delay="0.2s">
						<div class="hero-img text-lg-right">
							<img src="/assets/img/hero/hero-two-img.png" alt="Img">
						</div>
					</div>
				</div>
			</div>
			<div class="hero-shapes">
				<div class="hero-line-one">
					<img src="/assets/img/hero/hero-line-3.png" alt="Line">
				</div>
				<div class="hero-line-two">
					<img src="/assets/img/hero/hero-line-2.png" alt="Line">
				</div>

			</div>
		</section>
		<!--====== Hero Area End ======-->
	
		<!--====== About Section Start ======-->
		<section class="about-section-two">
			<div class="about-form-area">
				<div class="container">
					<div class="about-donation-form">
						<div class="donation-heading">
							<h3 style="font-size:30px" class="title">just Donate</h3>
							<span class="shadow-text">Our Blood</span>
						</div>
						<form action="#">
							<div class="form-wrap">
								<ul class="donation-amount">
									<li>A+ , A-</li>
									<li>B+ , B-</li> 
									<li>AB+ , AB-</li>
									<li>O+ , O-</li>
								</ul>
								<button type="submit" class="main-btn btn-white">Donate Now <i class="far fa-arrow-right"></i></button>
							</div>
						</form>
					</div>
					<div class="about-video wow fadeInDown" data-wow-delay="0.2s">
						<a src="https://www.youtube.com/embed/XbZxtPdrA04" class="video-btn" data-lity><i class="fas fa-play"></i></a>
					</div>
				</div>
			</div>
			<div class="about-text-area">
				<div class="container">
					<div class="row align-items-end justify-content-xl-start">
						<div class="col-xl-5 col-lg-7 col-md-8 order-xl-2">
							<div class="about-text">
								<div class="common-heading mb-30">
									<span class="tagline">
										<i class="fas fa-plus"></i> Conditions
										<span class="heading-shadow-text">Conditions</span>
									</span>
									<h2 class="title">Conditions For Donating Blood</h2>
								</div>
								<p>
									Sedut perspiciatis unde omnis iste natus voluptatem accusan tium dolore dantiumy totam rem apeam, eaque ipsa quaventore veritatis quasi architecto beatae.
								</p>
								<ul class="check-list mt-30">
									<li>
										<h5 class="title">Highest Success Rates</h5>	
										<p>Quis autem vel eum iure reprehenderit quin</p>
									</li>
									<li>
										<h5 class="title">Raise Funds With Crowdfunding</h5>
										<p>Voluptate esse quam nihil molestiae consequatur</p>
									</li>
									<li>
										<h5 class="title">Millions in Funding</h5>
										<p>Accusan tium dolore dantiumy totam apeam</p>
									</li>
								</ul>
								<a href="#" class="main-btn btn-dark mt-40">Learn More <i class="far fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="col-xl-5 order-xl-1 wow fadeInUp">
							<div class="about-curved-img">
								<img src="assets/img/about/man-with-laptop.png" alt="Image">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="about-shape">
				<img src="/assets/img/about/about-shape.png" alt="Shape">
			</div>
		</section>
		<!--====== About Section End ======-->
	
		<!--====== Project Section Start ======-->
		<section class="project-section project-section-two">
			<div class="container fluid-extra-padding">
				<div class="common-heading text-center color-version-white mb-30">
					<span class="tagline">
						<i class="fas fa-plus"></i> Popular Projects
						<span class="heading-shadow-text">Our Projects</span>
					</span>
					<h2 class="title">Explore Our Projects</h2>
				</div>
				<div class="row justify-content-center project-items project-style-one">
					<div class="col-lg-4 col-md-6 col-sm-10">
						<div class="project-item mt-30">
							<div class="thumb" style="background-image: url(assets/img/project/project-grid-01.jpg);"></div>
							<div class="content">
								<div class="cats">
									<a href="#">Video & Movies</a>
								</div>
								<div class="author">
									<img src="assets/img/author-thumbs/01.jpg" alt="Thumb">
									<a href="#">James W. Barrows</a>
								</div>
								<h5 class="title">
									<a href="project-details.html">Best Romantic & Action English Movie Release in 2022.</a>
								</h5>
								<div class="project-stats">
									<div class="stats-value">
										<span class="value-title">Raised of <span class="value">$59,689</span></span>
										<span class="stats-percentage">79%</span>
									</div>
									<div class="stats-bar" data-value="79">
										<div class="bar-line"></div>
									</div>
								</div>
								<span class="date"><i class="far fa-calendar-alt"></i> 14 June 2021</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-10">
						<div class="project-item mt-30">
							<div class="thumb" style="background-image: url(assets/img/project/project-grid-02.jpg);"></div>
							<div class="content">
								<div class="cats">
									<a href="#">Educations</a>
								</div>
								<div class="author">
									<img src="assets/img/author-thumbs/02.jpg" alt="Thumb">
									<a href="#">James W. Barrows</a>
								</div>
								<h5 class="title">
									<a href="project-details.html">Needs Blood here you will find It</a>
								</h5>
								<div class="project-stats">
									<div class="stats-value">
										<span class="value-title">Raised of <span class="value">$59,689</span></span>
										<span class="stats-percentage">87%</span>
									</div>
									<div class="stats-bar" data-value="87">
										<div class="bar-line"></div>
									</div>
								</div>
								<span class="date"><i class="far fa-calendar-alt"></i> 14 June 2021</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-10">
						<div class="project-item mt-30">
							<div class="thumb" style="background-image: url(assets/img/project/project-grid-03.jpg);"></div>
							<div class="content">
								<div class="cats">
									<a href="#">Technology</a>
								</div>
								<div class="author">
									<img src="assets/img/author-thumbs/03.jpg" alt="Thumb">
									<a href="#">James W. Barrows</a>
								</div>
								<h5 class="title">
									<a href="project-details.html">Original Shinecon VR Pro Virtual  Reality 3D Glasses VRBOX</a>
								</h5>
								<div class="project-stats">
									<div class="stats-value">
										<span class="value-title">Raised of <span class="value">$59,689</span></span>
										<span class="stats-percentage">85%</span>
									</div>
									<div class="stats-bar" data-value="85">
										<div class="bar-line"></div>
									</div>
								</div>
								<span class="date"><i class="far fa-calendar-alt"></i> 14 June 2021</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-10">
						<div class="project-item mt-30">
							<div class="thumb" style="background-image: url(assets/img/project/project-grid-04.jpg);"></div>
							<div class="content">
								<div class="cats">
									<a href="#">Clothes</a>
								</div>
								<div class="author">
									<img src="assets/img/author-thumbs/01.jpg" alt="Thumb">
									<a href="#">James W. Barrows</a>
								</div>
								<h5 class="title">
									<a href="project-details.html">Fundraising For The People And Causes You Care About</a>
								</h5>
								<div class="project-stats">
									<div class="stats-value">
										<span class="value-title">Raised of <span class="value">$59,689</span></span>
										<span class="stats-percentage">83%</span>
									</div>
									<div class="stats-bar" data-value="83">
										<div class="bar-line"></div>
									</div>
								</div>
								<span class="date"><i class="far fa-calendar-alt"></i> 14 June 2021</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-10">
						<div class="project-item mt-30">
							<div class="thumb" style="background-image: url(assets/img/project/project-grid-05.jpg);"></div>
							<div class="content">
								<div class="cats">
									<a href="#">Covid -19</a>
								</div>
								<div class="author">
									<img src="assets/img/author-thumbs/02.jpg" alt="Thumb">
									<a href="#">James W. Barrows</a>
								</div>
								<h5 class="title">
									<a href="project-details.html">COVID-19 Vaccine Have Already Begun Introduced Countries</a>
								</h5>
								<div class="project-stats">
									<div class="stats-value">
										<span class="value-title">Raised of <span class="value">$59,689</span></span>
										<span class="stats-percentage">93%</span>
									</div>
									<div class="stats-bar" data-value="93">
										<div class="bar-line"></div>
									</div>
								</div>
								<span class="date"><i class="far fa-calendar-alt"></i> 14 June 2021</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-10">
						<div class="project-item mt-30">
							<div class="thumb" style="background-image: url(assets/img/project/project-grid-06.jpg);"></div>
							<div class="content">
								<div class="cats">
									<a href="#">Business</a>
								</div>
								<div class="author">
									<img src="assets/img/author-thumbs/03.jpg" alt="Thumb">
									<a href="#">James W. Barrows</a>
								</div>
								<h5 class="title">
									<a href="project-details.html">Mobile First Is Just Not Goodies Enough Meet Journey</a>
								</h5>
								<div class="project-stats">
									<div class="stats-value">
										<span class="value-title">Raised of <span class="value">$59,689</span></span>
										<span class="stats-percentage">70%</span>
									</div>
									<div class="stats-bar" data-value="70">
										<div class="bar-line"></div>
									</div>
								</div>
								<span class="date"><i class="far fa-calendar-alt"></i> 14 June 2021</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--====== Project Section End ======-->
	
		<!--====== Feature Section Start ======-->
		<section class="feature-section feature-section-one section-gap">
			<div class="container">
				<div class="row justify-content-lg-between justify-content-center align-items-center">
					<div class="col-xl-4 col-lg-5 col-md-8 col-sm-10">
						<div class="feature-content mb-md-50">
							<div class="common-heading mb-45">
								<span class="tagline">
									<i class="fas fa-plus"></i> What we do
									<span class="heading-shadow-text">Features</span>
								</span>
								<h2 class="title">Why Choose us</h2>
							</div>
							<!-- Fancy Icon List -->
							<div class="fancy-icon-list">
								<div class="fancy-list-item">
									<div class="icon">
										<i class="flaticon-debit-card"></i>
									</div>
									<div class="content">
										<h4 class="title">Fast & Easy Payouts</h4>
										<p>Sed ut perspiciatis unde omnis iste natus voluptatem accusan doloremque</p>
									</div>
								</div>
								<div class="fancy-list-item">
									<div class="icon">
										<i class="flaticon-payment"></i>
									</div>
									<div class="content">
										<h4 class="title">Global Payment Processing</h4>
										<p>Sed ut perspiciatis unde omnis iste natus voluptatem accusan doloremque</p>
									</div>
								</div>
								<div class="fancy-list-item">
									<div class="icon">
										<i class="flaticon-wallet-1"></i>
									</div>
									<div class="content">
										<h4 class="title">Many Payment Options</h4>
										<p>Sed ut perspiciatis unde omnis iste natus voluptatem accusan doloremque</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-10">
						<div class="funden-video with-video-shape">
							<img src="assets/img/video/02.jpg" alt="Image">
							<a  href="//www.youtube.com/watch?v=XSGBVzeBUbk" class="video-popup" data-lity><i class="fas fa-play"></i></a>
							<img src="assets/img/video/video-shape.png" alt="Image" class="video-shape">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--====== Feature Section End ======-->
	
		<!--====== Counter With Image Text Block Start ======-->
		<section class="counter-with-image-text-block">
			<div class="image-text-block-area">
				<div class="container">
					<div class="image-text-block-slider">
						<div class="single-slider">
							<div class="image-text-block text-block-one">
								<div class="block-img">
									<img src="assets/img/text-block/01.jpg" alt="Image">
								</div>
								<div class="block-content">
									<div class="common-heading mb-40">
										<span class="tagline">
											<i class="fas fa-plus"></i> top Funding stories
											<span class="heading-shadow-text">Top Stories</span>
										</span>
										<h2 class="title">Meet William & Michael</h2>
									</div>
									<p class="mb-30">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
										totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
										dicta sunt explicabo enim ipsam voluptatem
									</p>
									<p class="italic-text">
										On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
										and demoralized
									</p>
									<a href="company-overview.html" class="main-btn bordered-btn mt-40">Learn More <i class="far fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="single-slider">
							<div class="image-text-block text-block-one">
								<div class="block-img">
									<img src="assets/img/text-block/01.jpg" alt="Image">
								</div>
								<div class="block-content">
									<div class="common-heading mb-40">
										<span class="tagline">
											<i class="fas fa-plus"></i> top Funding stories
											<span class="heading-shadow-text">Top Stories</span>
										</span>
										<h2 class="title">Meet William & Michael</h2>
									</div>
									<p class="mb-30">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
										totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
										dicta sunt explicabo enim ipsam voluptatem
									</p>
									<p class="italic-text">
										On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
										and demoralized
									</p>
									<a href="company-overview.html" class="main-btn bordered-btn mt-40">Learn More <i class="far fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="counter-boxes-area primary-soft-bg">
				<div class="container">
					<div class="row counter-boxes justify-content-lg-between justify-content-center">
						<div class="col-xl-auto col-lg-3 col-md-6 col-sm-8">
							<div class="counter-box mb-60">
								<div class="icon">
									<i class="flaticon-crowdfunding"></i>
								</div>
								<div class="content">
									<div class="count-wrap">
										<span class="count">3598</span>
										<span class="suffix">+</span>
									</div>
									<h6 class="title">We’ve Project Complate</h6>
									<p>Sed ut perspiciatis unde <br> menste natus error</p>
								</div>
							</div>
						</div>
						<div class="col-xl-auto col-lg-3 col-md-6 col-sm-8">
							<div class="counter-box mb-60">
								<div class="icon">
									<i class="flaticon-ecological"></i>
								</div>
								<div class="content">
									<div class="count-wrap">
										<span class="count">9634</span>
										<span class="suffix">+</span>
									</div>
									<h6 class="title">Trusted Global Partners</h6>
									<p>Quis autem veleucmure <br> reprehenderit quein</p>
								</div>
							</div>
						</div>
						<div class="col-xl-auto col-lg-3 col-md-6 col-sm-8">
							<div class="counter-box mb-60">
								<div class="icon">
									<i class="flaticon-badges"></i>
								</div>
								<div class="content">
									<div class="count-wrap">
										<span class="count">8565</span>
										<span class="suffix">+</span>
									</div>
									<h6 class="title">Global Awards Winning</h6>
									<p>Sed ut perspiciatis unde <br> menste natus error</p>
								</div>
							</div>
						</div>
						<div class="col-xl-auto col-lg-3 col-md-6 col-sm-8">
							<div class="counter-box mb-60">
								<div class="icon">
									<i class="flaticon-support"></i>
								</div>
								<div class="content">
									<div class="count-wrap">
										<span class="count">4756</span>
										<span class="suffix">+</span>
									</div>
									<h6 class="title">24/7 Active Volunteer</h6>
									<p>Quis autem veleucmure <br> reprehenderit quein</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--====== Counter With Image Text Block End ======-->
	
		<!--====== Testimonials Start ======-->
		<section class="testimonials-section section-gap">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-8 col-lg-10">
						<div class="common-heading text-center mb-30">
							<span class="tagline">
								<i class="fas fa-plus"></i> clients Feedback
								<span class="heading-shadow-text">Testimonials</span>
							</span>
							<h2 class="title">What People's Say</h2>
						</div>
						<div class="testimonial-boxes">
							<div class="testimonial-box-two mt-30 wow fadeInUp" data-wow-delay="0s">
								<div class="author-img">
									<img src="assets/img/author-thumbs/07.png" alt="Thumb">
								</div>
								<div>
									<p class="testimonial-desc">
										"Sed perspiciat unde omnis iste natus error voluptatem accusantium dolorem audantium
										totam aperiam eaque quae abillo inventore veritatis Quis autem vel eum iure
										reprehenderit qui in ea voluptate"
									</p>
									<div class="author-info">
										<h5 class="name">Howard A. Guest</h5>
										<p class="position">Web Developer</p>
									</div>
								</div>
								<div class="rating-wrap">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="testimonial-box-two mt-30 wow fadeInUp" data-wow-delay="0.1s">
								<div class="author-img">
									<img src="assets/img/author-thumbs/08.png" alt="Thumb">
								</div>
								<div>
									<p class="testimonial-desc">
										"On the other hands denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee"
									</p>
									<div class="author-info">
										<h5 class="name">Randall S. Rosenow</h5>
										<p class="position">CEO & Founder</p>
									</div>
								</div>
								<div class="rating-wrap">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<div class="testimonial-box-two mt-30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="author-img">
									<img src="assets/img/author-thumbs/09.png" alt="Thumb">
								</div>
								<div>
									<p class="testimonial-desc">
										"At vero eoset accusamus et iusto odio dignissimos ducimus blandit praesentium voluptatum deleniti atque corrupti quos dolores et quastiy molestias excepturi sint occaecati cupiditate"
									</p>
									<div class="author-info">
										<h5 class="name">Christopher D. Greer</h5>
										<p class="position">Senior Manager</p>
									</div>
								</div>
								<div class="rating-wrap">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--====== Testimonials End ======-->
	
		<!--====== Partners Section With CTA Start ======-->
		<section class="partners-with-cta">
			<div class="cta-boxes">
				<div class="container">
					<div class="row no-gutters justify-content-center">
						<div class="col-lg-6 col-md-10">
							<div class="cta-box cta-primary-overly" style="background-image: url(assets/img/cta/02.jpg);">
								<h2 class="cta-title">Start Fundraising?</h2>
								<p>Quis autem vel eum iure reprehenderit quien voluptate velit esse quam nihil molestiae
									consequatur illum dolorem</p>
								<a href="events.html" class="main-btn btn-white">Start a Funden <i class="far fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-10">
							<div class="cta-box mt-40" style="background-image: url(assets/img/cta/03.jpg);">
								<h2 class="cta-title">Start Fundraising?</h2>
								<p>Quis autem vel eum iure reprehenderit quien voluptate velit esse quam nihil molestiae
									consequatur illum dolorem</p>
								<a href="#" class="main-btn">just Donate <i class="far fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="partners-logos">
				<div class="container">
					<div class="row partners-logos-two">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="logo mb-30">
								<a href="#"><img src="assets/img/partners/01.png" alt="Image"></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="logo mb-30">
								<a href="#"><img src="assets/img/partners/02.png" alt="Image"></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="logo mb-30">
								<a href="#"><img src="assets/img/partners/03.png" alt="Image"></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="logo mb-30">
								<a href="#"><img src="assets/img/partners/04.png" alt="Image"></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="logo mb-30">
								<a href="#"><img src="assets/img/partners/05.png" alt="Image"></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="logo mb-30">
								<a href="#"><img src="assets/img/partners/06.png" alt="Image"></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="logo mb-30">
								<a href="#"><img src="assets/img/partners/07.png" alt="Image"></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="logo mb-30">
								<a href="#"><img src="assets/img/partners/08.png" alt="Image"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--====== Partners Section With CTA End ======-->
	
		<!--====== Latest News Start ======-->
		<section class="latest-blog-section section-gap-extra-bottom">
			<div class="container">
				<div class="common-heading text-center mb-30">
					<span class="tagline">
						<i class="fas fa-plus"></i> Latest News & Blog
						<span class="heading-shadow-text">News Blog</span>
					</span>
					<h2 class="title">Get Every Single Update</h2>
				</div>
				<div class="row justify-content-center latest-blog-posts style-two">
					<div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.1s">
						<div class="latest-post-box mt-30">
							<div class="post-thumb">
								<img src="assets/img/latest-news/01.jpg" alt="Image">
							</div>
							<div class="post-content">
								<a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 14 June 2021</a>
								<h6 class="title">
									<a href="news-details.html">Standing Out From Crowds mproving Mobile Experience</a>
								</h6>
								<a href="#" class="post-link">Read More <i class="far fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.2s">
						<div class="latest-post-box mt-30">
							<div class="post-thumb">
								<img src="assets/img/latest-news/02.jpg" alt="Image">
							</div>
							<div class="post-content">
								<a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 14 June 2021</a>
								<h6 class="title">
									<a href="#">Five Rules Of App Localization China Money Dating And App Store</a>
								</h6>
								<a href="#" class="post-link">Read More <i class="far fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.3s">
						<div class="latest-post-box mt-30">
							<div class="post-thumb">
								<img src="assets/img/latest-news/03.jpg" alt="Image">
							</div>
							<div class="post-content">
								<a href="#" class="post-date"><i class="far fa-calendar-alt"></i> 14 June 2021</a>
								<h6 class="title">
									<a href="#">How To Use Underlined Text Improve User Experience</a>
								</h6>
								<a href="#" class="post-link">Read More <i class="far fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--====== Latest News End ======-->
		{{-- <!--====== Footer Start ======-->
<footer class="site-footer with-footer-cta with-footer-bg">
    <div class="footer-cta">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-7 col-md-8 col-sm-10">
                    <span class="cta-tagline">25 Years Of Experience In Crowdfunding</span>
                    <h3 class="cta-title">Raise Hand to Promote Best Products</h3>
                </div>
                <div class="col-lg-auto col-md-6">
                    <a href="events.html" class="main-btn bordered-btn bordered-white mt-md-30">
                        Promote Your Products <i class="far fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-content-area">
        <div class="container">
            <div class="footer-widgets">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="widget about-widget">
                            <div class="footer-logo">
                                <img src="assets/img/logo-white.png" alt="Funden">
                            </div>
                            <p>
                                Sed ut perspiciatis unde omn iste natus error sit voluptatem
                            </p>
                            <div class="newsletter-form">
                                <h5 class="form-title">Join Newsletters</h5>
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit"><i class="far fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="widget nav-widget">
                            <h4 class="widget-title">Our Projects</h4>
                            <ul>
                                <li><a href="#">Medical & Health</a></li>
                                <li><a href="#">Educations</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Food & Clothes</a></li>
                                <li><a href="#">Video & Movies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget nav-widget">
                            <h4 class="widget-title">Support</h4>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Conditions</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Faq & Terms</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-auto col-md-5 col-sm-8">
                        <div class="widget contact-widget">
                            <h4 class="widget-title">Contact Us</h4>
                            <ul class="info-list">
                                <li>
                                    <span class="icon"><i class="far fa-phone"></i></span>
                                    <span class="info">
                                        <span class="info-title">Phone Number</span>
                                        <a href="#">+012(345) 78 93</a>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon"><i class="far fa-envelope-open"></i></span>
                                    <span class="info">
                                        <span class="info-title">Email Address</span>
                                        <a href="#">OurBlood@gmail.com</a>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon"><i class="far fa-map-marker-alt"></i></span>
                                    <span class="info">
                                        <span class="info-title">Locations</span>
                                        <a href="#">59 Main Street, USA</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="row flex-md-row-reverse">
                    <div class="col-md-6">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="copyright-text">© 2021 <a href="#">OurBlood</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer End ======-->

<!--====== jquery js ======-->
<script src="/assets/js/jquery.min.js"></script>
<!--====== Bootstrap js ======-->
<script src="/assets/js/bootstrap.min.js"></script>
<!--====== Inview js ======-->
<script src="/assets/js/jquery.inview.min.js"></script>
<!--====== Slick js ======-->
<script src="/assets/js/slick.min.js"></script>
<!--====== Lity js ======-->
<script src="/assets/js/lity.min.js"></script>
<!--====== Wow js ======-->
<script src="/assets/js/wow.min.js"></script>
<!--====== Main js ======-->
<script src="/assets/js/main.js"></script>

</body>

</html> --}}
@endsection