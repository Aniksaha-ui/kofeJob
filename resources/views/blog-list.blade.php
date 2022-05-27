<?php $page="blog-list";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Blog List</h2>
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">				
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="blog-view">
							
								<!-- Blog Post -->
								<div class="blog-single-post pro-post widget-box">
									<div class="blog-image">
										<a href="blog-details"><img alt="" src="assets/img/blog/blog-01.jpg" class="img-fluid"></a>
									</div>
									<h3 class="blog-title">Your next job starts right here</h3>
									<div class="blog-info clearfix">
										<div class="post-left">
											<ul>
												<li>
													<div class="post-author">
														<a href="designer-details"><img src="assets/img/img-02.jpg" alt="Post Author"> <span>John Doe</span></a>
													</div>
												</li>
												<li><i class="far fa-calendar"></i>4 May 2021</li>
												<li><i class="far fa-comments"></i>12 Comments</li>
												<li><i class="fas fa-tags"></i>job Tips</li>
											</ul>
										</div>
									</div>
									<div class="blog-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris ullamco laborisut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										<a href="blog-details" class="read-more">Read More</a>
									</div>
								</div>
								<!-- /Blog Post -->
								
								<!-- Blog Post -->
								<div class="blog-single-post pro-post widget-box">
									<div class="blog-image">
										<a href="blog-details"><img alt="" src="assets/img/blog/blog-02.jpg" class="img-fluid"></a>
									</div>
									<h3 class="blog-title">What are the benefits of applying job Online?</h3>
									<div class="blog-info clearfix">
										<div class="post-left">
											<ul>
												<li>
													<div class="post-author">
														<a href="designer-details"><img src="assets/img/img-03.jpg" alt="Post Author"> <span>Nick Joe</span></a>
													</div>
												</li>
												<li><i class="far fa-calendar"></i>4 May 2021</li>
												<li><i class="far fa-comments"></i>12 Comments</li>
												<li><i class="fas fa-tags"></i>Job Tips</li>
											</ul>
										</div>
									</div>
									<div class="blog-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris ullamco laborisut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										<a href="blog-details" class="read-more">Read More</a>
									</div>
								</div>
								<!-- /Blog Post -->
								
								<!-- Blog Post -->
								<div class="blog-single-post pro-post widget-box">
									<div class="blog-image">
									<div class="video">
										<iframe src="https://www.youtube.com/embed/ExJZAegsOis" width="940"></iframe>
									</div>
								</div>
									<h3 class="blog-title">Mock job interview to get a job</h3>
									<div class="blog-info clearfix">
										<div class="post-left">
											<ul>
												<li>
													<div class="post-author">
														<a href="designer-details"><img src="assets/img/img-03.jpg" alt="Post Author"> <span>Nick Joe</span></a>
													</div>
												</li>
												<li><i class="far fa-calendar"></i>4 May 2021</li>
												<li><i class="far fa-comments"></i>12 Comments</li>
												<li><i class="fas fa-tags"></i>Job Tips</li>
											</ul>
										</div>
									</div>
									<div class="blog-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit laboris ullamco laborisut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										<a href="blog-details" class="read-more">Read More</a>
									</div>
								</div>
								<!-- /Blog Post -->
								
								<!-- Blog Pagination -->
								<div class="row pb-4">
									<div class="col-md-12">
										<div class="blog-pagination text-center">
											<ul class="paginations">
												<li><a href="#"> <i class="fas fa-angle-left"></i> Previous</a></li>
												<li><a href="#">1</a></li>
												<li><a href="#" class="active">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Blog Pagination -->
								
							</div>
						</div>
					
						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

							<!-- Latest Posts -->
							<div class=" pro-post widget-box post-widget">
								<h4 class="pro-title">Latest Posts</h4>
								<div class="pro-content pt-0">
									<ul class="latest-posts">
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-03.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">Kofejob - How to get job through online?</a>
												</h4>
												<a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 2 May 2021</a>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-02.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">People who completed NAND technology got job 90% </a>
												</h4>
												<a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 3 May 2021</a>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-01.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">There are many variations of passages</a>
												</h4>
												<a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 4 May 2021</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Latest Posts -->

							<!-- Categories -->
							<div class=" pro-post widget-box category-widget">
								<h4 class="pro-title">Blog Categories</h4>
								<div class="pro-content">
									<ul class="category-link">
										<li><a href="#">Web Development</a></li>
										<li><a href="#">IT Consultancy</a></li>
										<li><a href="#">Email Marketing</a></li>
										<li><a href="#">Business Consulting</a></li>
										<li><a href="#">Apps Development</a></li>
										<li><a href="#">SEO Optimizations</a></li>
									</ul>
								</div>
							</div>
							<!-- /Categories -->

							<!-- Tags -->
							<div class=" pro-post widget-box tags-widget">
								<h4 class="pro-title">Tags</h4>
								<div class="pro-content">
									<ul class="tags">
										<li><a href="#" class="tag">Employer</a></li>
										<li><a href="#" class="tag">Student</a></li>
										<li><a href="#" class="tag">Freelancer</a></li>
										<li><a href="#" class="tag">Designer</a></li>
										<li><a href="#" class="tag">Jobs</a></li>
										<li><a href="#" class="tag">designer</a></li>
										<li><a href="#" class="tag">Coding</a></li>
										<li><a href="#" class="tag">Skills</a></li>
										<li><a href="#" class="tag">Knowledge</a></li>
										<li><a href="#" class="tag">Node Js</a></li>
										<li><a href="#" class="tag">Courses</a></li>
										<li><a href="#" class="tag">Engineer</a></li>
										<li><a href="#" class="tag">Online</a></li>
										<li><a href="#" class="tag">Study</a></li>
										<li><a href="#" class="tag">Project</a></li>
										<li><a href="#" class="tag">Experience</a></li>
										<li><a href="#" class="tag">Freshers</a></li>
									</ul>
								</div>
							</div>
							<!-- /Tags -->
							
							<!-- Share Widget -->	
							<div class="pro-post widget-box post-widget">
								<h3 class="pro-title">Share</h3>
								<div class="pro-content">
									<a href="#" class="share-icon"><i class="fas fa-share-alt"></i> Share</a>
								</div>
							</div>
							<!-- /Share Widget -->
							
						</div>
						<!-- /Blog Sidebar -->
						
					</div>
				</div>
			</div>		
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection