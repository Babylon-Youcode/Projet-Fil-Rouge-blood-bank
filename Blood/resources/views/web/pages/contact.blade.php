@extends('web.layouts.master')

@section('title')
	Our Blood-Contact 
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
	<header class="site-header sticky-header">
		<div class="header-topbar d-none d-sm-block">
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
						<a href="/"><img src="assets/img/logo.png" alt="Funden"></a>
					</div>
					<div class="nav-menu">
						<ul>
							<li>
								<a href="/">Home</a>
								
							</li>
							<li>
								<a href="#">Project</a>
								{{-- <ul class="submenu">
									<li><a href="project-1.html">Project One</a></li>
									<li><a href="project-2.html">Project Two</a></li>
									<li><a href="project-3.html">Project Three</a></li>
									<li><a href="project-details.html">Project Details</a></li>
								</ul> --}}
							</li>
							<li>
								<a href="#">Events</a>
							</li>
							<li>
								<a href="#">News</a>
								<ul class="submenu">
									<li><a href="news-standard.html">News Standard</a></li>
									<li><a href="news-details.html">News Details</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Pages</a>
								<ul class="submenu">
									<li><a href="about.html">About</a></li>
									<li><a href="company-overview.html">Company Overview</a></li>
									<li><a href="team-member.html">Team Member</a></li>
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="faq.html">FAQ</a></li>
								</ul>
							</li>
							<li class="current"><a href="#">Contact</a></li>
						</ul>
					</div>
					<div class="navbar-extra d-flex align-items-center">
						<a href="#" class="main-btn nav-btn d-none d-sm-inline-block">
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
				<a href="index.html"><img src="assets/img/logo-white.png" alt=""></a>
			</div>
			<ul class="panel-menu">
				<li>
					<a href="#">Home</a>
					{{-- <ul class="submenu">
						<li><a href="index.html">Home One</a></li>
						<li><a href="index-2.html">Home Two</a></li>
					</ul> --}}
				</li>
				<li>
					<a href="#">Project</a>
					<ul class="submenu">
						<li><a href="project-1.html">Project One</a></li>
						<li><a href="project-2.html">Project Two</a></li>
						<li><a href="project-3.html">Project Three</a></li>
						<li><a href="project-details.html">Project Details</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Events</a>
				</li>
				<li>
					<a href="#">News</a>
					<ul class="submenu">
						<li><a href="news-standa">News Standard</a></li>
						<li><a href="">News Details</a></li>
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
						<li><a href="">Testimonials</a></li>
					</ul>
				</li>
				<li class="current"><a href="/contact">Contact</a></li>
			</ul>
			<div class="panel-extra">
				<a href="events.html" class="main-btn btn-white">
					Donate Now <i class="far fa-arrow-right"></i>
				</a>
			</div>
			<a href="#" class="panel-close">
				<i class="fal fa-times"></i>
			</a>
		</div>
	</header>
	<!--====== Header End ======-->


<!--====== Page Title Start ======-->
<section class="page-title-area">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-8">
                <h1 class="page-title">Contact Us</h1>
            </div>
            <div class="col-auto">
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--====== Page Title End ======-->

<!--====== Contact Section Start ======-->
<section class="contact-section section-gap-extra-bottom">
    <div class="container">
        <!-- Contact Info Start -->
        <div class="row align-items-center justify-content-center">
            <div class="col-lx-4 col-lg-5 col-sm-10">
                <div class="contact-info-text mb-md-70">
                    <div class="common-heading mb-30">
                        <span class="tagline">
                            <i class="fas fa-plus"></i> Donate Projects
                            <span class="heading-shadow-text">Donate</span>
                        </span>
                        <h2 class="title">Ready to Get More Information</h2>
                    </div>
                    <p>
                        Sedut perspiciatis unde omnis natus voluptatem accusantium dolore dantiumy totam apeam eaquey quaventore veritatis architecto beatae.
                    </p>
                    <a href="events.html" class="main-btn mt-35">Get Free Quote <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 offset-xl-1">
                <div class="contact-info-boxes">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6 col-sm-10">
                            <div class="info-box text-center wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon">
                                    <i class="flaticon-place"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Our Location</h5>
                                    <p>
                                        5075 Main Road, D- Block, 2nd Floor, New York
                                    </p>
                                </div>
                            </div>
                            <div class="info-box text-center mt-30 mb-sm-30 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="icon">
                                    <i class="flaticon-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Email Address</h5>
                                    <p>
                                        OurBlood@gmail.com <br>
                                       
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-10">
                            <div class="info-box text-center wow fadeInUp" data-wow-delay="0.3s">
                                <div class="icon">
                                    <i class="flaticon-phone-call-1"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Support 24/7</h5>
                                    <p>
                                        +012 (345) 689 37 <br>
                                        012345687
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Info End -->
        <div class="contact-from-area">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="contact-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d48372.81123152747!2d-73.96448279177292!3d40.733408396164116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1627206548218!5m2!1sen!2sbd" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <form action="#">
                            <h3 class="form-title">Send Us Message</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-field mb-25">
                                        <label for="name">Your Name</label>
                                        <input type="text" placeholder="Willie M. Stanley" id="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-field mb-25">
                                        <label for="phone-number">Phone Number</label>
                                        <input type="text" placeholder="Willie M. Stanley" id="phone-number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-field mb-25">
                                        <label for="email">Email Address</label>
                                        <input type="text" placeholder="support@gmail.com" id="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-field mb-25">
                                        <label for="subject">Subject</label>
                                        <input type="text" placeholder="I would like to" id="subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-field mb-30">
                                        <label for="message">Write Message</label>
                                        <textarea id="message" placeholder="Hello"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-field">
                                        <button class="main-btn">Send Us Message <i class="far fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Contact Section End ======-->

@endsection