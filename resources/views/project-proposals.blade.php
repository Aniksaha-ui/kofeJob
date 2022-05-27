<?php $page="manage-projects";?>
@extends('layout.mainlayout')
@section('content')		


<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Dashboard</h2>
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Page Content -->			
			<div class="content">
				<div class="container">
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
								<h3>Proposals</h3>
							</div>
							<nav class="user-tabs mb-4">
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
										<a class="nav-link" href="cancelled-projects">Cancelled Projects</a>
									</li>
								</ul>
							</nav> 
						
							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-10 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info">
														<span>Dreamguystech</span>
														<h2>Website Designer Required For Directory Theme</h2>
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
														<div class="projects-amount proposals">
															<h3>$500.00</h3>
															<h5>in 12 Days</h5>
														</div> 
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 d-flex flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body p-2">
												<div class="prj-proposal-count text-center">
													<span>5</span>
													<h3>Proposals</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /project list -->
							
							<!-- Proposals list -->
							<div class="proposals-section mb-4">
								<h3 class="page-subtitle">Proposals By freelancer</h3>
								<div class="proposal-card">
								
									<!-- Proposals -->
									<div class="project-proposals align-items-center">
										<div class="proposals-info">
											<div class="proposer-info">
												<div class="proposer-img">
													<img src="assets/img/user/avatar-1.jpg" alt="" class="img-fluid">
												</div>
												<div class="proposer-detail">
													<h4>George Wells</h4>
													<ul class="proposal-details">
														<li> February 26, 2021</li>
														<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
														<li> <a href="designer-profile" class="font-semibold text-primary">View Profile</a></li>
													</ul>
												</div>
											</div>
											<div class="proposer-bid-info">
												<div class="proposer-bid">
													<h3>$480.00</h3>
													<h5>in 11 Days</h5>
												</div>
												<div class="proposer-confirm">
													<a data-bs-toggle="modal" href="#hire" class="projects-btn">Hire Now</a>
												</div>
											</div>
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. 
											Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. 
											Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. 
											In tortor neque sapien praesent porttitor cursus sed cum
											<span id="dots">...</span>
											<span id="more">Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus
											</span><span id="myBtn" class="text-primary font-bold readmore">Readmore</span></p>
										</div>
									</div>
									<!-- Proposals -->
									
									<!-- Proposals -->
									<div class="project-proposals align-items-center">
										<div class="proposals-info">
											<div class="proposer-info">
												<div class="proposer-img">
													<img src="assets/img/user/avatar-2.jpg" alt="" class="img-fluid">
												</div>
												<div class="proposer-detail">
													<h4>Hannah Finn</h4>
													<ul class="proposal-details">
														<li> October 26, 2021</li>
														<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
														<li> <a href="designer-profile" class="font-semibold text-primary">View Profile</a></li>
													</ul>
												</div>
											</div>
											<div class="proposer-bid-info">
												<div class="proposer-bid">
													<h3>$220.00</h3>
													<h5>in 15 Days</h5>
												</div>
												<div class="proposer-confirm">
													<a data-bs-toggle="modal" href="#hire" class="projects-btn">Hire Now</a>
												</div>
											</div>
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. 
											Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. 
											Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. 
											In tortor neque sapien praesent porttitor cursus sed cum
											<span id="dots1">...</span>
											<span id="myBtn1" class="text-primary font-bold readmore">Readmore</span></p>
										</div>
									</div>
									<!-- Proposals -->
									
									<!-- Proposals -->
									<div class="project-proposals align-items-center mb-0">
										<div class="proposals-info">
											<div class="proposer-info">
												<div class="proposer-img">
													<img src="assets/img/user/avatar-3.jpg" alt="" class="img-fluid">
												</div>
												<div class="proposer-detail">
													<h4>Timothy Smith</h4>
													<ul class="proposal-details">
														<li> October 28, 2021</li>
														<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
														<li> <a href="designer-profile" class="font-semibold text-primary">View Profile</a></li>
													</ul>
												</div>
											</div>
											<div class="proposer-bid-info">
												<div class="proposer-bid">
													<h3>$300.00</h3>
													<h5>in 12 Days</h5>
												</div>
												<div class="proposer-confirm">
													<a data-bs-toggle="modal" href="#hire" class="projects-btn">Hire Now</a>
												</div>
											</div>
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. 
											Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. 
											Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. 
											In tortor neque sapien praesent porttitor cursus sed cum
											<span id="dots2">...</span>
											<span id="myBtn2" class="text-primary font-bold readmore">Readmore</span></p>
										</div>
									</div>
									<!-- Proposals -->
									
								</div>
							</div>
							<!-- /Proposals list -->
							
							<!-- pagination -->
							<div class="row">
								<div class="col-md-12">
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
							<!-- /pagination -->
							
						</div>
					</div>
				</div>
			</div>	
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
		<!-- The Modal -->
		<div class="modal fade custom-modal" id="hire">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content bg-modal">
					<div class="modal-header">
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="text-center pt-0 mb-4">
							<img src="assets/img/logo-01.png" alt="logo" class="img-fluid mb-1">
							<h5 class="modal-title">Discuss your project with David</h5>
						</div>
						<form action="view-project-detail">
							<div class="modal-info">
								<div class="row">
									<div class="col-12 col-md-12">
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="First name & Lastname">
										</div> 
										<div class="form-group">
											<input type="email" name="name" class="form-control" placeholder="Email Address">
										</div> 
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="Phone Number">
										</div> 
										<div class="form-group">
											<textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
										</div> 
										<div class="form-group row">
											<div class="col-12 col-md-4 pr-0">
												<label class="file-upload">
													Add Attachment <input type="file" />
												</label>
											</div>											
											<div class="col-12 col-md-8">
												<p class="mb-1">Allowed file types: zip, pdf, png, jpg</p>
												<p>Max file size: 50 MB</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary btn-block submit-btn">Hire Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /The Modal -->
@endsection