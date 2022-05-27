<?php $page="designer-portfolio";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="designer-profile"><img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<p class="mb-2">Welcome,</p>
										<h3 class="mb-0"><a href="designer-profile">John Danie S.</a></h3>
										<p class="mb-0">@johndaniee</p>
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											<a href="designer-dashboard" class="nav-link">
												<i class="material-icons">verified_user</i> Dashboard
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-project-proposals" class="nav-link">
												<i class="material-icons">business_center</i> Projects
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-favourites" class="nav-link">
												<i class="material-icons">local_play</i> Favourites
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-review" class="nav-link">
												<i class="material-icons">record_voice_over</i> Reviews
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-portfolio" class="nav-link active">
												<i class="material-icons">pie_chart</i> Portfolio
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-chats" class="nav-link">
												<i class="material-icons">chat</i> Messages
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-membership" class="nav-link">
												<i class="material-icons">person_add</i> Membership
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-verify-identity" class="nav-link">
												<i class="material-icons">person_pin</i> Verify Identity
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-withdraw-money" class="nav-link">
												<i class="material-icons">wifi_tethering</i> Payments
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-profile-settings" class="nav-link">
												<i class="material-icons">settings</i>  Settings
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
						<div class="col-xl-9 col-md-8">
							<div class="portfolio-item">
								<div class="pro-head p-0 pb-4">
									<h3 class="mb-0">Portfolio</h3>
									<a class="btn btn-primary back-btn br-0" data-bs-toggle="modal" href="#portfolio">+ Add Portfolio</a>
								</div>
								<div class="pro-content pt-4 pb-4">
									<div class="row">
										<div class="col-sm-6 col-lg-4">
											<div class="project-widget">
												<div class="portfolio-img">
													<img class="img-fluid" alt="User Image" src="assets/img/project-1.jpg">
													<div class="portfolio-live">
													<div class="portfolio-content">
														<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="fas fa-pen"></i></a>
														<a href="#" class="port-icon"><i class="fas fa-trash-alt"></i></a>
													</div>
													</div>
												</div>
												<div class="portfolio-detail">
													<h3 class="pro-name">Razor Website Design</h3>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-4">
											<div class="project-widget">
												<div class="portfolio-img">
													<img class="img-fluid" alt="User Image" src="assets/img/project-2.jpg">
													<div class="portfolio-live">
													<div class="portfolio-content">
														<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="fas fa-pen"></i></a>
														<a href="#" class="port-icon"><i class="fas fa-trash-alt"></i></a>
													</div>
													</div>
												</div>
												<div class="portfolio-detail">
													<h3 class="pro-name">Transport Website</h3>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-4">
											<div class="project-widget">
												<div class="portfolio-img">
													<img class="img-fluid" alt="User Image" src="assets/img/project-3.jpg">
													<div class="portfolio-live">
													<div class="portfolio-content">
														<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="fas fa-pen"></i></a>
														<a href="#" class="port-icon"><i class="fas fa-trash-alt"></i></a>
													</div>
													</div>
												</div>
												<div class="portfolio-detail">
													<h3 class="pro-name">Wordpress Website</h3>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-4">
											<div class="project-widget">
												<div class="portfolio-img">
													<img class="img-fluid" alt="User Image" src="assets/img/project-4.jpg">
													<div class="portfolio-live">
													<div class="portfolio-content">
														<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="fas fa-pen"></i></a>
														<a href="#" class="port-icon"><i class="fas fa-trash-alt"></i></a>
													</div>
													</div>
												</div>
												<div class="portfolio-detail">
													<h3 class="pro-name">Mobile App</h3>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-4">
											<div class="project-widget">
												<div class="portfolio-img">
													<img class="img-fluid" alt="User Image" src="assets/img/project-5.jpg">
													<div class="portfolio-live">
													<div class="portfolio-content">
														<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="fas fa-pen"></i></a>
														<a href="#" class="port-icon"><i class="fas fa-trash-alt"></i></a>
													</div>
													</div>
												</div>
												<div class="portfolio-detail">
													<h3 class="pro-name">Healthcare Website</h3>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-4">
											<div class="project-widget">
												<div class="portfolio-img">
													<img class="img-fluid" alt="User Image" src="assets/img/project-6.jpg">
													<div class="portfolio-live">
													<div class="portfolio-content">
														<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="fas fa-pen"></i></a>
														<a href="#" class="port-icon"><i class="fas fa-trash-alt"></i></a>
													</div>
													</div>
												</div>
												<div class="portfolio-detail">
													<h3 class="pro-name">Injury Website</h3>
												</div>
											</div>
										</div>
									</div>
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
							</div>
						</div>
					</div>
				</div>
			</div>					
			<!-- /Page Content -->

        </div>
		<!-- /Main Wrapper -->
	
	<!-- The Modal -->
		<div class="modal fade" id="portfolio">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4>Add Portfolio</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">
						<div class="port-title">
							<h3>Simple & Best Way To Showcase Your Work</h3>
						</div>						
						<form action="designer-portfolio">
							<div class="modal-info">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Link</label>
											<input type="text" class="form-control">
										</div>
										<label class="br-0 file-upload image-upbtn">
											upload Files <input type="file">
										</label>
									</div>
								</div>
							</div>
							<div class="submit-section text-right">
								<a data-bs-dismiss="modal" class="btn btn-primary black-btn submit-btn">Cancel</a>
								<button type="submit" class="btn btn-primary submit-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- The Modal -->
		<div class="modal fade" id="portfolio-edit">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Portfolio</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">
						<div class="port-title">
							<h3>Simple & Best Way To Showcase Your Work</h3>
						</div>						
						<form action="designer-portfolio">
							<div class="modal-info">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control" value="Portfolio Name">
										</div>
										<div class="form-group">
											<label>Link</label>
											<input type="text" class="form-control" value="Http://www.example.com//john...">
										</div>
										<label class="br-0 file-upload image-upbtn">
											upload Files <input type="file">
										</label>
									</div>
								</div>
							</div>
							<div class="submit-section text-right">
								<a data-bs-dismiss="modal" class="btn btn-primary black-btn submit-btn">Cancel</a>
								<a href="designer-portfolio" class="btn btn-primary submit-btn">Submit</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection