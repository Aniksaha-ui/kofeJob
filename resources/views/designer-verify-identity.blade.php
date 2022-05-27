<?php $page="designer-verify-identity";?>
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
											<a href="designer-portfolio" class="nav-link">
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
											<a href="designer-verify-identity" class="nav-link active">
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
						
						<!-- Verification Details -->
						<div class="col-xl-9 col-md-8">
							<div class="card">
								<div class="payment-list wallet card-body">
									<h3>Verification Details</h3>	
									<form action="designer-dashboard">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="first_name">Your Name</label>
													<input class="form-control" id="first_name" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="last_name">Contact Number</label>
													<input class="form-control" id="last_name" type="text">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label for="card_number">CNIC / Passport / NIN / SSN</label>
													<input class="form-control" id="card_number" type="text">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label>Upload Document</label>
													<div class="uplod">
														<label class="file-upload image-upbtn">
															Select Document <input type="file">
														</label>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label for="comment">Address</label>
													<textarea class="form-control" rows="5" id="comment"></textarea>
													<p class="mt-2">Your account information should match with the document that you are providing.</p>
												</div>
											</div>
											<div class="col-md-12 text-end">
												<button type="submit" class="btn-primary click-btn">Submit verification</button>
											</div>
										</div>
									</form>
								</div>			
							</div>				
						</div>
						<!-- Verification Details -->
						
					</div>
				</div>
			</div>				
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection