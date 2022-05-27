<?php $page="manage-projects";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Page Content -->			
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						
						<!-- sidebar -->
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="user-account-details"><img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<p class="mb-2">Welcome,</p>
										<a href="user-account-details"><h3 class="mb-0">John Danie S.</h3></a>
										<p class="mb-0">@johndaniee</p>
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											<a href="dashboard" class="nav-link">
												<i class="material-icons">verified_user</i> Dashboard
											</a>
										</li>
										<li class="nav-item">
											<a href="manage-projects" class="nav-link active">
												<i class="material-icons">business_center</i> Projects
											</a>
										</li>
										<li class="nav-item">
											<a href="favourites" class="nav-link">
												<i class="material-icons">local_play</i> Favourites
											</a>
										</li>
										<li class="nav-item">
											<a href="review" class="nav-link">
												<i class="material-icons">record_voice_over</i> Reviews
											</a>
										</li>
										<li class="nav-item">
											<a href="chats" class="nav-link">
												<i class="material-icons">chat</i> Messages
											</a>
										</li>
										<li class="nav-item">
											<a href="membership-plans" class="nav-link">
												<i class="material-icons">person_add</i> Membership
											</a>
										</li>
										<li class="nav-item">
											<a href="milestones" class="nav-link">
												<i class="material-icons">pie_chart</i> Milestones
											</a>
										</li>
										<li class="nav-item">
											<a href="verify-identity" class="nav-link">
												<i class="material-icons">person_pin</i> Verify Identity
											</a>
										</li>
										<li class="nav-item">
											<a href="deposit-funds" class="nav-link">
												<i class="material-icons">wifi_tethering</i> Payments
											</a>
										</li>
										<li class="nav-item">
											<a href="profile-settings" class="nav-link">
												<i class="material-icons">settings</i> Settings
											</a>
										</li>
										<li class="nav-item">
											<a href="index" class="nav-link">
												<i class="material-icons">power_settings_new</i> Logout
											</a>
										</li>
									</ul>
								</div>
							</div>					
						</div>
						<!-- /sidebar -->
						
						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs project-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="manage-projects">All Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="pending-projects">Pending Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="ongoing-projects">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="completed-projects">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="cancelled-projects">Cancelled Projects</a>
									</li>
								</ul>
							</nav>
							
							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12">
										<div class="projects-delete-details align-items-center">
											<div class="project-info">
												<span>Dreamguystech</span>
												<h2>Create website wordpress for a Brand </h2>
												<div class="customer-info">
													<ul class="list-details">
														<li>
															<div class="slot">
																<p>Price type</p>
																<h5>Fixed</h5>
															</div>
														</li>
														<li>
															<div class="slot">
																<p>Location</p>
																<h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5>
															</div>
														</li>
														<li>
															<div class="slot">
																<p>Expiry</p>
																<h5>4 Days Left</h5>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="project-hire-info">
												<div class="content-divider"></div>
												<div class="projects-amount">
													<h3>$500.00</h3>
													<h5>in 12 Days</h5>
												</div>
												<div class="content-divider"></div>
												<div class="projects-action text-center">
													<a href="#" class="projects-btn">Repost </a>
													<h4 class="mb-0"><a href="#" class="cancelled-badge">Delete Project</a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project list -->
							
							
							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12">
										<div class="projects-delete-details align-items-center">
											<div class="project-info">
												<span>Dreamguystech</span>
												<h2>Email automation set up and segmentation </h2>
												<div class="customer-info">
													<ul class="list-details">
														<li>
															<div class="slot">
																<p>Price type</p>
																<h5>Fixed</h5>
															</div>
														</li>
														<li>
															<div class="slot">
																<p>Location</p>
																<h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5>
															</div>
														</li>
														<li>
															<div class="slot">
																<p>Expiry</p>
																<h5>4 Days Left</h5>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="project-hire-info">
												<div class="content-divider"></div>
												<div class="projects-amount">
													<h3>$500.00</h3>
													<h5>in 12 Days</h5>
												</div>
												<div class="content-divider"></div>
												<div class="projects-action text-center">
													<a href="#" class="projects-btn">Repost </a>
													<h4 class="mb-0"><a href="#" class="cancelled-badge">Delete Project</a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project list -->
							
							
							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12">
										<div class="projects-delete-details align-items-center">
											<div class="project-info">
												<span>Dreamguystech</span>
												<h2>Build me a website by CMS-Wordpress </h2>
												<div class="customer-info">
													<ul class="list-details">
														<li>
															<div class="slot">
																<p>Price type</p>
																<h5>Fixed</h5>
															</div>
														</li>
														<li>
															<div class="slot">
																<p>Location</p>
																<h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5>
															</div>
														</li>
														<li>
															<div class="slot">
																<p>Expiry</p>
																<h5>4 Days Left</h5>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="project-hire-info">
												<div class="content-divider"></div>
												<div class="projects-amount">
													<h3>$500.00</h3>
													<h5>in 12 Days</h5>
												</div>
												<div class="content-divider"></div>
												<div class="projects-action text-center">
													<a href="#" class="projects-btn">Repost </a>
													<h4 class="mb-0"><a href="#" class="cancelled-badge">Delete Project</a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project list -->
							
							
							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12">
										<div class="projects-delete-details align-items-center">
											<div class="project-info">
												<span>Dreamguystech</span>
												<h2>Make responsive emails theme for new ecommerce website</h2>
												<div class="customer-info">
													<ul class="list-details">
														<li>
															<div class="slot">
																<p>Price type</p>
																<h5>Fixed</h5>
															</div>
														</li>
														<li>
															<div class="slot">
																<p>Location</p>
																<h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5>
															</div>
														</li>
														<li>
															<div class="slot">
																<p>Expiry</p>
																<h5>4 Days Left</h5>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="project-hire-info">
												<div class="content-divider"></div>
												<div class="projects-amount">
													<h3>$500.00</h3>
													<h5>in 12 Days</h5>
												</div>
												<div class="content-divider"></div>
												<div class="projects-action text-center">
													<a href="#" class="projects-btn">Repost </a>
													<h4 class="mb-0"><a href="#" class="cancelled-badge">Delete Project</a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project list -->
							
							
							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12">
										<div class="projects-delete-details align-items-center">
											<div class="project-info">
												<span>Dreamguystech</span>
												<h2>Woocomerce pdf view error on wordpress website </h2>
												<div class="customer-info">
													<ul class="list-details">
														<li>
															<div class="slot">
																<p>Price type</p>
																<h5>Fixed</h5>
															</div>
														</li>
														<li>
															<div class="slot">
																<p>Location</p>
																<h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5>
															</div>
														</li>
														<li>
															<div class="slot">
																<p>Expiry</p>
																<h5>4 Days Left</h5>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="project-hire-info">
												<div class="content-divider"></div>
												<div class="projects-amount">
													<h3>$500.00</h3>
													<h5>in 12 Days</h5>
												</div>
												<div class="content-divider"></div>
												<div class="projects-action text-center">
													<a href="#" class="projects-btn">Repost </a>
													<h4 class="mb-0"><a href="#" class="cancelled-badge">Delete Project</a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project list -->
							
							<!-- pagination -->
							<div class="row">
								<div class="col-md-12">
									<ul class="paginations list-pagination">
										<li><a href="#"> <i class="fas fa-angle-left"></i> Previous</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#" class="active">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- /pagination -->
							
						</div>
					</div>
				</div>
			</div>	
			
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection