<?php $page="verify-identity";?>
@extends('layout.mainlayout')
@section('content')		


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
											<a href="manage-projects" class="nav-link">
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
											<a href="verify-identity" class="nav-link active">
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
						
						<!-- Verification Details -->
						<div class="col-xl-9 col-md-8">
							<div class="card">
								<div class="payment-list wallet card-body">
									<h3>Verification Details</h3>
									<form action="dashboard">
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
														<label class="file-upload image-upbtn mb-0">
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
												<a href="#" class="btn btn-primary click-btn">Submit verification</a>
											</div>
										</div>
									</form>
								</div>			
							</div>				
						</div>
						<!-- /Verification Details -->
						
					</div>
				</div>
			</div>	


        </div>
		<!-- /Main Wrapper -->
@endsection