<?php $page="designer-profile-settings";?>
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
											<a href="designer-profile-settings" class="nav-link active">
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
							<div class="pro-pos">
								<nav class="user-tabs mb-4">
									<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
										<li class="nav-item">
											<a class="nav-link active" href="designer-profile-settings">Profile Settings</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="designer-change-password">Change Password</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="designer-delete-account">Delete Account</a>
										</li>
									</ul>
								</nav>
								<div class="setting-content">																		
									<form action="designer-profile">
										<div class="card">
											<div class="pro-head">
												<h3 class="pro-title without-border mb-0">Profile Basics </h3>
											</div>	
											<div class="pro-body">
												<div class="row">
													<div class="form-group col-md-6">
														<label>Username</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Email Address</label>
														<input type="email" class="form-control">

													</div>
													<div class="form-group col-md-6">
														<label>Dispaly Name</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Designation</label>
														<input type="email" class="form-control">

													</div>
													<div class="form-group col-md-6">
														<label>Hourly Rate</label>
														<input type="text" class="form-control">
														<p class="light-pink-text mb-0">Provide your hourly rate without currency symbol</p>
													</div>
													<div class="form-group col-md-6">
														<label>Contact Number</label>
														<input type="email" class="form-control">

													</div>
													<div class="form-group col-md-6">
														<label>Gender</label>
														<select name="price" class="form-control select">
															<option value="0">Male</option>
															<option value="1" >Female</option>
														</select>
													</div>
													<div class="form-group col-md-6">
														<label>Type</label>
														<select name="price" class="form-control select">
															<option value="0">Select Freelancer Type</option>
															<option value="1" >Freelancer</option>
														</select>
													</div>
													<div class="form-group col-md-6">
														<label>Language </label>
														<input type="text" class="form-control">
													</div>
												</div>												
												<div class="form-row pro-pad pt-0">
													<div class="form-group col-md-6 pro-pic">
														<label>Profile Picture</label>
														<div class="d-flex align-items-center">														
															<div class="upload-images">
																<img src="assets/img/img-02.jpg" alt="Image">
																<a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
															</div>
															<label class="file-upload image-upbtn ms-3">
																Change Image <input type="file">
															</label>
														</div>
														<p>Image size 300*300</p>
													</div>
													<div class="form-group col-md-6 pro-pic">
														<label>Banner Image</label>
														<div class="d-flex align-items-center">														
															<div class="upload-images">
																<img src="assets/img/img-02.jpg" alt="Image">
																<a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
															</div>
															<label class="file-upload image-upbtn ms-3">
																Change Image <input type="file">
															</label>
														</div>
														<p>Image size 1024*100</p>
													</div>
												</div>
											</div>
										</div>
									
										<div class="card">
											<div class="pro-head">
												<h3 class="pro-title without-border mb-0">Location</h3>
											</div>
											<div class="pro-body">
												<div class="row">
													<div class="form-group col-md-12">
														<label>Address</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>State</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Zipcode</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Country</label>
														<select name="price" class="form-control select">
															<option value="0">India</option>
															<option value="1" >China</option>
															<option value="2">Japan</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="pro-head">
												<h3 class="pro-title without-border mb-0">Overview</h3>
											</div>
											<div class="pro-body">
												<div class="row">
													<div class="form-group col-md-12">
														<textarea class="form-control" rows="5"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<div class="form-row">
											<div class="col-md-12 col-xl-4 d-flex">
												<div class="pro-card flex-fill mb-3">
													<div class="pro-head">
														<h3 class="pro-title without-border mb-0">Skills</h3>
														<a href="#" class="btn fund-btn skill-add">Add More</a>
													</div>
													<div class="pro-body skill-info">
														<div class="form-row align-items-center skill-cont">
															<div class="form-group col-md-10">
																<input type="text" class="form-control" value="Front End designer">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
														<div class="form-row align-items-center skill-cont">
															<div class="form-group col-md-10">
																<input type="text" class="form-control" value="Front End designer">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
														<div class="form-row align-items-center skill-cont">
															<div class="form-group col-md-10">
																<input type="text" class="form-control" value="Front End designer">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
														<div class="form-row align-items-center skill-cont">
															<div class="form-group col-md-10">
																<input type="text" class="form-control" value="Front End designer">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
														<div class="form-row align-items-center skill-cont">
															<div class="form-group col-md-10">
																<input type="text" class="form-control" value="Front End designer">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
														<div class="form-row align-items-center skill-cont">
															<div class="form-group col-md-10">
																<input type="text" class="form-control" value="Front End designer">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-12 col-xl-8">
												<div class="card">
													<div class="pro-head">
														<h3 class="pro-title without-border mb-0">Awards / Certificates</h3>
														<a href="#" class="btn fund-btn add-award">Add More</a>
													</div>
													<div class="pro-body  award-info">
														<div class="form-row align-items-center award-cont">
															<div class="form-group col-md-2">
																<img alt="profile image" src="assets/img/img.jpg" class="avatar-medium">
															</div>
															<div class="form-group col-md-5">
																<input type="text" class="form-control" value="Best Game Designer">
															</div>
															<div class="form-group col-md-3">
																<input type="text" class="form-control datetimepicker" value="05/10/2020">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
														<div class="form-row align-items-center award-cont">
															<div class="form-group col-md-2">
																<img alt="profile image" src="assets/img/img.jpg" class="avatar-medium">
															</div>
															<div class="form-group col-md-5">
																<input type="text" class="form-control" value="Best Game Designer">
															</div>
															<div class="form-group col-md-3">
																<input type="text" class="form-control datetimepicker" value="05/10/2020">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
														<div class="form-row align-items-center award-cont">
															<div class="form-group col-md-2">															
																<img alt="profile image" src="assets/img/img.jpg" class="avatar-medium">
															</div>
															<div class="form-group col-md-5">
																<input type="text" class="form-control" value="Best Game Designer">
															</div>
															<div class="form-group col-md-3">
																<input type="text" class="form-control datetimepicker" value="05/10/2020">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
													</div>
												</div>
												
												<div class="card">
													<div class="pro-head">
														<h3 class="pro-title without-border mb-0">Languages</h3>
														<a href="#" class="btn fund-btn add-lang">Add More</a>
													</div>
													<div class="pro-body  lang-info">
														<div class="form-row align-items-center lang-cont">
															<div class="form-group col-md-7">
																<input type="text" class="form-control" value="English">
															</div>
															<div class="form-group col-md-3">
																<input type="text" class="form-control" value="100">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
														<div class="form-row align-items-center lang-cont">
															<div class="form-group col-md-7">
																<input type="text" class="form-control" value="Russian">
															</div>
															<div class="form-group col-md-3">
																<input type="text" class="form-control" value="90">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
														<div class="form-row align-items-center lang-cont">
															<div class="form-group col-md-7">
																<input type="text" class="form-control" value="Germany">
															</div>
															<div class="form-group col-md-3">
																<input type="text" class="form-control" value="90">
															</div>
															<div class="form-group col-md-2">
																<a href="#" class="btn trash-icon"><i class="far fa-trash-alt"></i></a>
															</div>
														</div>
													</div>
												</div>											
											</div>										
										</div>
										
										<div class="card">
											<div class="pro-head">
												<h3 class="pro-title without-border mb-0">Experience</h3>
												<a href="#" class="btn fund-btn add-exp">Add More</a>
											</div>
											<div class="pro-body">
												<div class="exp-info">
													<div class="row exp-cont">
														<div class="form-group col-md-6">
															<label>Title</label>
															<input type="text" class="form-control">
														</div>
														<div class="form-group col-md-6">
															<label>Company name</label>
															<input type="text" class="form-control">
														</div>
														<div class="form-group col-md-6">
															<label>Start date</label>
															<input type="text" class="form-control datetimepicker" placeholder="Select Date">
														</div>
														<div class="form-group col-md-6">
															<label>End Date</label>
															<input type="text" class="form-control datetimepicker" placeholder="Select Date">
														</div>
														<div class="form-group col-md-12">
															<label class="custom_check">
																<input type="checkbox" name="rem_password">
																<span class="checkmark"></span> I'm currently working here
															</label>
														</div>
														<div class="form-group col-md-12">
															<label>Summary</label>
															<textarea class="form-control" rows="5"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="pro-head">
												<h3 class="pro-title without-border mb-0">Educational Details</h3>
												<a href="#" class="btn fund-btn">Add More Skills</a>
											</div>
											<div class="pro-body">
												<div class="row">
													<div class="form-group col-md-12">
														<label>Degree Title</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>University/College</label>
														<select name="price" class="form-control select">
															<option value="0">Select University/College </option>
															<option value="1" >University</option>
															<option value="2">University</option>
														</select>
													</div>
													<div class="form-group col-md-6">
														<label>Start year</label>
														<input type="text" class="form-control datetimepicker">
													</div>
													<div class="form-group col-md-6">
														<label>End year</label>
														<input type="text" class="form-control datetimepicker">
													</div>
													<div class="form-group col-md-12">
														<label>Summary</label>
														<textarea class="form-control" rows="5"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="pro-head">
												<h3 class="pro-title without-border mb-0">Social Links</h3>
											</div>
											<div class="pro-body">
												<div class="row">
													<div class="form-group col-md-6">
														<label>Facebook</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Dribble</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Twitter</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>LinkedIn</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Behance</label>
														<input type="text" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label>Behance</label>
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</div>
										
										<div class="card text-end">
											<div class="pro-body">
												<button class="btn btn-secondary click-btn btn-plan">Cancel</button>
												<button class="btn btn-primary click-btn btn-plan" type="submit">Update</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection