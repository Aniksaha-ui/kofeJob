<?php $page="pagee";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Home Banner -->
			<section class="section home-banner row-middle">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-8 col-lg-7">
							<div class="banner-content">
								<div class="rating d-flex">
									<i class="fas fa-star checked"></i>
									<i class="fas fa-star checked"></i>
									<i class="fas fa-star checked"></i>
									<i class="fas fa-star checked"></i>
									<i class="fas fa-star checked"></i>
									<h5>Trused by over 2M+ users</h5> 
								</div>
								<h1>Get the perfect <span class="orange-text">designers & Projects</span></h1>
								<p>With the world's #1 designers marketplace</p>
								<form class="form"  name="store" id="store" action="project">
									<div class="form-inner">
										<div class="input-group">
											<span class="drop-detail">
												<select class="form-control select" name="storeID">
													<option value="project">Projects</option>
													<option value="designer">Freelancers</option>
												</select>
											</span>
											<input type="email" class="form-control" placeholder="Search here">
											<button class="btn btn-primary sub-btn" type="submit">Search Now</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-4 col-lg-5">
							<div class="banner-img">
								<img src="assets/img/banner-img.png" class="img-fluid" alt="banner">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Home Banner -->
	
			<!-- Our Feature -->
			<section class="section feature">
				<div class="container">
					<div class="row">					
								
						<!-- Feature Item -->
						<div class="col-md-4">
							<div class="feature-item freelance-count">
								<div class="feature-icon">
									<img src="assets/img/icon/icon-01.png" class="img-fluid" alt="">
								</div>
								<div class="feature-content">
									<h3>919,207</h3>
									<p>freelance designers</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->
						
						<!-- Feature Item -->
						<div class="col-md-4">
							<div class="feature-item">
								<div class="feature-icon">
									<img src="assets/img/icon/icon-02.png" class="img-fluid" alt="">
								</div>
								<div class="feature-content">
									<h3>25 - 100+</h3>
									<p>designers  per project</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->
						
						<!-- Feature Item -->
						<div class="col-md-4">
							<div class="feature-item comp-project">
								<div class="feature-icon">
									<img src="assets/img/icon/icon-03.png" class="img-fluid" alt="">
								</div>
								<div class="feature-content">
									<h3>388,615</h3>
									<p>completed projects</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->									
												
					</div>
				</div>
			</section>	
			<!-- /Our Feature -->			
			
			<!--- Developed Project  -->
			<section class="section work">
				<div class="container-fluid">
					<div class="row">					
								
						<!-- Feature Item -->
						<div class="col-md-6 work-box bg1">
							<div class="work-content">
								<h2>I need a Developed <span>Project</span></h2>
								<p>Get the perfect Developed project for your budget from our creative community.</p>
								<a href="project"><i class="fas fa-long-arrow-alt-right long-arrow"></i></a>
							</div>
						</div>
						<!-- /Feature Item -->
						
						<div class="col-md-6 work-box bg2">
							<div class="work-content">
								<h2>I want to <span>work</span></h2>
								<p>Do you want to earn money, find unlimited clients and build your freelance career?</p>
								<a href="designer"><i class="fas fa-long-arrow-alt-right long-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--- /Developed Project  -->
			
			<!-- Projects -->
			<section class="section projects">
				<div class="container">
				<div class="row">
					<div class="col-12 col-md-12 mx-auto">
						<div class="section-header text-center">	
							<div class="section-line"></div>
							<h2 class="header-title">Get Inspired<br> By Development Projects</h2>
							<p>High Performing Solutions To Your</p>
						</div>
					</div>
				</div>
					
				<div class="row">
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="project-item">
							<div class="project-img">
								<a href="project"><img src="assets/img/project/project-01.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5>ANDROID APPS</h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon">
									</div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5>designers</h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="project-item">
							<div class="project-img">
								<a href="project"><img src="assets/img/project/project-02.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5>LARAVEL</h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon">
									</div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5>designers</h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project-Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="project-item">
							<div class="project-img">
								<a href="project"><img src="assets/img/project/project-03.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5>React</h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon">
									</div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5>designers</h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="project-item">
							<div class="project-img">
								<a href="project"><img src="assets/img/project/project-04.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5>GOLANG</h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon">
									</div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5>designers</h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="project-item">
							<div class="project-img">
								<a href="project"><img src="assets/img/project/project-01.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5>.NET</h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon">
									</div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5>designers</h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="project-item">
							<div class="project-img">
								<a href="project"><img src="assets/img/project/project-04.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5>JAVA</h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon">
									</div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5>designers</h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="project-item">
							<div class="project-img">
								<a href="project"><img src="assets/img/project/project-03.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5>PYTHON</h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon">
									</div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5>designers</h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project-Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="project-item">
							<div class="project-img">
								<a href="project"><img src="assets/img/project/project-01.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5>ANGULAR</h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon">
									</div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5>designers</h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
				</div>
				
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="see-all"> 
							<a href="project" class="btn all-btn">SEE ALL PROJECT</a>
						</div>
					</div>
				</div>
				</div>
			</section>
			<!-- /Projects -->
		
			<!-- Subscribe -->
			<section class="section subscribe">
				<div class="container">
					<div class="row align-items-center">					
						<div class="col-md-4"> 
							<img src="assets/img/subscribe.png" class="img-fluid" alt="subscribe">
						</div>
						<div class="col-md-6"> 
							<h3>Subscribe To Get Discounts, Updates & More</h3>
							<p>Monthly product updates, industry news and more!</p>
							<form action="#">
								<div class="form-inner">
									<div class="input-group">
										<input type="email" class="form-control" placeholder="Enter Email Address">
										<button class="btn btn-primary sub-btn" type="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End Subscribe -->	
		
			<!-- Top Instructor -->
			<section class="section designer">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-12 col-12 mx-auto">
							<div class="section-header text-center">
								<div class="section-line"></div>
								<h2 class="header-title">Most Hired designers</h2>
								<p>Work with talented people at the most affordable price</p>
							</div>
						</div>
					</div>
					
				<div id="designers-slider" class="owl-carousel owl-theme designers-slider">
					<div class="freelance-widget">
						<div class="freelance-content">
							<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
							<div class="freelance-img">
								<a href="#">
									<img src="assets/img/user/avatar-1.jpg" alt="User Image">
									<span class="verified"><i class="fas fa-check-circle"></i></span>
								</a>
							</div>
							<div class="freelance-info">
								<h3><a href="#">George Wells</a></h3>
								<div class="freelance-specific">UI/UX Designer</div>
								<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">4.7 (32)</span>
								</div>
								<div class="freelance-tags">
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
								</div>
								<div class="freelancers-price">$25 Hourly</div>
							</div>
						</div>
						<div class="cart-hover">
							<a href="designer-details" class="btn-cart" tabindex="-1">View Profile</a>
						</div>
					</div>
					<div class="freelance-widget">
						<div class="freelance-content">
							<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
							<div class="freelance-img">
								<a href="#">
									<img src="assets/img/user/avatar-2.jpg" alt="User Image">
									<span class="verified"><i class="fas fa-check-circle"></i></span>
								</a>
							</div>
							<div class="freelance-info">
								<h3><a href="#">Timothy Smith</a></h3>
								<div class="freelance-specific">PHP designer</div>
								<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Illinois, USA</div>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">3.5 (25)</span>
								</div>
								<div class="freelance-tags">
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
								</div>
								<div class="freelancers-price">Free</div>
							</div>
						</div>
						<div class="cart-hover">
							<a href="designer-details" class="btn-cart" tabindex="-1">View Profile</a>
						</div>
					</div>
					<div class="freelance-widget">
						<div class="freelance-content">
							<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
							<div class="freelance-img">
								<a href="#">
									<img src="assets/img/user/avatar-3.jpg" alt="User Image">
									<span class="verified"><i class="fas fa-check-circle"></i></span>
								</a>
							</div>
							<div class="freelance-info">
								<h3><a href="#">Janet Paden</a></h3>
								<div class="freelance-specific">Graphic Designer</div>
								<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>New York, USA</div>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">4.1 (30)</span>
								</div>
								<div class="freelance-tags">
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
								</div>
								<div class="freelancers-price">$27 Hourly</div>
							</div>
						</div>
						<div class="cart-hover">
							<a href="designer-details" class="btn-cart" tabindex="-1">View Profile</a>
						</div>
					</div>
					<div class="freelance-widget">
						<div class="freelance-content">
							<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
							<div class="freelance-img">
								<a href="#">
									<img src="assets/img/img-03.jpg" alt="User Image">
									<span class="verified"><i class="fas fa-check-circle"></i></span>
								</a>
							</div>
							<div class="freelance-info">
								<h3><a href="#">James Douglas</a></h3>
								<div class="freelance-specific">iOS designer</div>
								<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Florida, USA</div>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">4.3 (31)</span>
								</div>
								<div class="freelance-tags">
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
								</div>
								<div class="freelancers-price">$23 Hourly</div>
							</div>
						</div>
						<div class="cart-hover">
							<a href="designer-details" class="btn-cart" tabindex="-1">View Profile</a>
						</div>
					</div>
					<div class="freelance-widget">
						<div class="freelance-content">
							<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
							<div class="freelance-img">
								<a href="#">
									<img src="assets/img/img-03.jpg" alt="User Image">
									<span class="verified"><i class="fas fa-check-circle"></i></span>
								</a>
							</div>
							<div class="freelance-info">
								<h3><a href="#">Richard Wilson</a></h3>
								<div class="freelance-specific">UI/UX Designer</div>
								<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">4.7 (32)</span>
								</div>
								<div class="freelance-tags">
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
								</div>
								<div class="freelancers-price">$25 Hourly</div>
							</div>
						</div>
						<div class="cart-hover">
							<a href="designer-details" class="btn-cart" tabindex="-1">View Profile</a>
						</div>
					</div>
					<div class="freelance-widget">
						<div class="freelance-content">
							<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
							<div class="freelance-img">
								<a href="#">
									<img src="assets/img/img-03.jpg" alt="User Image">
									<span class="verified"><i class="fas fa-check-circle"></i></span>
								</a>
							</div>
							<div class="freelance-info">
								<h3><a href="#">Richard Wilson</a></h3>
								<div class="freelance-specific">UI/UX Designer</div>
								<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">4.7 (32)</span>
								</div>
								<div class="freelance-tags">
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
								</div>
								<div class="freelancers-price">$25 Hourly</div>
							</div>
						</div>
						<div class="cart-hover">
							<a href="designer-details" class="btn-cart" tabindex="-1">View Profile</a>
						</div>
					</div>
					<div class="freelance-widget">
						<div class="freelance-content">
							<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
							<div class="freelance-img">
								<a href="#">
									<img src="assets/img/img-03.jpg" alt="User Image">
									<span class="verified"><i class="fas fa-check-circle"></i></span>
								</a>
							</div>
							<div class="freelance-info">
								<h3><a href="#">Richard Wilson</a></h3>
								<div class="freelance-specific">UI/UX Designer</div>
								<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">4.7 (32)</span>
								</div>
								<div class="freelance-tags">
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
								</div>
								<div class="freelancers-price">$25 Hourly</div>
							</div>
						</div>
						<div class="cart-hover">
							<a href="designer-details" class="btn-cart" tabindex="-1">View Profile</a>
						</div>
					</div>
					<div class="freelance-widget">
						<div class="freelance-content">
							<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
							<div class="freelance-img">
								<a href="#">
									<img src="assets/img/img-03.jpg" alt="User Image">
									<span class="verified"><i class="fas fa-check-circle"></i></span>
								</a>
							</div>
							<div class="freelance-info">
								<h3><a href="#">Richard Wilson</a></h3>
								<div class="freelance-specific">UI/UX Designer</div>
								<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">4.7 (32)</span>
								</div>
								<div class="freelance-tags">
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
								</div>
								<div class="freelancers-price">$25 Hourly</div>
							</div>
						</div>
						<div class="cart-hover">
							<a href="designer-details" class="btn-cart" tabindex="-1">View Profile</a>
						</div>
					</div>
					<div class="freelance-widget">
						<div class="freelance-content">
							<a data-toggle="modal" href="#rating" class="favourite favourited"><i class="fas fa-star"></i></a>
							<div class="freelance-img">
								<a href="#">
									<img src="assets/img/img-04.jpg" alt="User Image">
									<span class="verified"><i class="fas fa-check-circle"></i></span>
								</a>
							</div>
							<div class="freelance-info">
									<h3><a href="#">Richard Wilson</a></h3>
									<div class="freelance-specific">UI/UX Designer</div>
									<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">4.8 (55)</span>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelancers-price">$25 Hourly</div>
								</div>
							</div>
								<div class="cart-hover">
									<a href="designer-details" class="btn-cart" tabindex="-1">View Profile</a>
								</div>
					</div>
					<div class="freelance-widget">
						<div class="freelance-content">
							<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
							<div class="freelance-img">
								<a href="#">
									<img src="assets/img/img-03.jpg" alt="User Image">
									<span class="verified"><i class="fas fa-check-circle"></i></span>
								</a>
							</div>
							<div class="freelance-info">
								<h3><a href="#">Richard Wilson</a></h3>
								<div class="freelance-specific">UI/UX Designer</div>
								<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">5.0 (4)</span>
								</div>
								<div class="freelance-tags">
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
									<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
								</div>
								<div class="freelancers-price">Free</div>
							</div>
						</div>
						<div class="cart-hover">
							<a href="designer-details" class="btn-cart" tabindex="-1">View Profile</a>
						</div>
					</div>
				</div>
				
				</div>
			</section>
			<!-- End designer -->
		
			<!-- Review -->
			<section class="section testimonial-section review">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section-header text-center">
								<div class="section-line"></div>
								<h2 class="header-title">Top Reviews</h2>
								<p>High Performing designers To Your</p>
							</div>
						</div>
					</div>
				<div id="testimonial-slider" class="owl-carousel owl-theme testimonial-slider">
							
					<!-- Review Widget -->
					<div class="review-blog">
						<div class="review-top d-flex align-items-center">
							<div class="review-img">
								<a href="review"><img class="img-fluid" src="assets/img/review/review-01.jpg" alt="Post Image"></a>
							</div>
							<div class="review-info">
								<h3>Davis Payerf</h3>
								<h5>CEO</h5>								
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">4.7</span>
								</div>
							</div>
						</div>
						<div class="review-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
						</div>
					</div>
					<!-- / Review Widget -->
					
					<!-- Review Widget -->
					<div class="review-blog">
						<div class="review-top d-flex align-items-center">
							<div class="review-img">
								<a href="review"><img class="img-fluid" src="assets/img/review/review-02.jpg" alt="Post Image"></a>
							</div>
							<div class="review-info">
								<h3>Davis Payerf</h3>
								<h5>PROJECT LEAD</h5>								
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">4.8</span>
								</div>
							</div>
						</div>
						<div class="review-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
						</div>
					</div>
					<!-- /Review Widget -->
					
					<!-- Review Widget -->
					<div class="review-blog">
						<div class="review-top d-flex align-items-center">
							<div class="review-img">
								<a href="review"><img class="img-fluid" src="assets/img/review/review-03.jpg" alt="Post Image"></a>
							</div>
							<div class="review-info">
								<h3>Davis Payerf</h3>
								<h5>TEAM LEAD</h5>								
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">5.0</span>
								</div>
							</div>
						</div>
						<div class="review-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
						</div>
					</div>
					<!-- /Review Widget -->
					
					<!-- Review Widget -->
					<div class="review-blog">
						<div class="review-top d-flex align-items-center">
							<div class="review-img">
								<a href="review"><img class="img-fluid" src="assets/img/review/review-02.jpg" alt="Post Image"></a>
							</div>
							<div class="review-info">
								<h3>Davis Payerf</h3>
								<h5>PROJECT LEAD</h5>								
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="average-rating">3.2</span>
								</div>
							</div>
						</div>
						<div class="review-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
						</div>
					</div>
					<!-- /Review Widget -->
				</div>
				
				</div>
			</section>
			<!-- / Review -->
		
			<!-- News -->
			<section class="section news">
				<div class="container">				
					<div class="row">
						<div class="col-12">
							<div class="section-header text-center">
								<div class="section-line"></div>
								<h2 class="header-title">Feature Blog</h2>
								<p>High Performing designers To Your</p>
							</div>
						</div>
					</div>
					
					<div>	
						<div class="row blog-grid-row">
							<div class="col-md-4">
							
								<!-- Blog Post -->
								<div class="blog grid-blog">
									<div class="blog-image">
										<a href="blog-details"><img class="img-fluid" src="assets/img/blog/blog-01.jpg" alt="Post Image"></a>
									</div>
									<div class="blog-content">
										<ul class="entry-meta meta-item">
											<li>
												<div class="post-author">
													<a href="designer-details"><img src="assets/img/img-02.jpg" alt="Post Author"> <span> David Lee</span></a>
												</div>
											</li>
											<li><i class="far fa-clock"></i> 4 Oct 2021</li>
										</ul>
										<h3 class="blog-title"><a href="blog-details">Your next job starts right here</a></h3>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
									</div>
								</div>
								<!-- /Blog Post -->
								
							</div>
							<div class="col-md-4">
							
								<!-- Blog Post -->
								<div class="blog grid-blog">
									<div class="blog-image">
										<a href="blog-details"><img class="img-fluid" src="assets/img/blog/blog-02.jpg" alt="Post Image"></a>
									</div>
									<div class="blog-content">
										<ul class="entry-meta meta-item">
											<li>
												<div class="post-author">
													<a href="designer-details"><img src="assets/img/img-03.jpg" alt="Post Author"> <span> Deborah Angel</span></a>
												</div>
											</li>
											<li><i class="far fa-clock"></i> 10 Oct 2021</li>
										</ul>
										<h3 class="blog-title"><a href="blog-details">People who completed NAND?</a></h3>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
									</div>
								</div>
								<!-- /Blog Post -->
								
							</div>
							<div class="col-md-4">
							
								<!-- Blog Post -->
								<div class="blog grid-blog">
									<div class="blog-image">
										<a href="blog-details"><img class="img-fluid" src="assets/img/blog/blog-03.jpg" alt="Post Image"></a>
									</div>
									<div class="blog-content">
										<ul class="entry-meta meta-item">
											<li>
												<div class="post-author">
													<a href="designer-details"><img src="assets/img/img-04.jpg" alt="Post Author"> <span>Darren Elder</span></a>
												</div>
											</li>
											<li><i class="far fa-clock"></i> 3 Nov 2021</li>
										</ul>
										<h3 class="blog-title"><a href="blog-details">Kofejob - How to get job through online?</a></h3>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
									</div>
								</div>
								<!-- /Blog Post -->
								
							</div>					
						</div>			
					</div>
				</div>
			</section>
			<!-- / News -->

		
        </div>
		<!-- /Main Wrapper -->
@endsection