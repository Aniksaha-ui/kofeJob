<?php $page="membership-plans";?>
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
											<a href="membership-plans" class="nav-link active">
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
						
						<div class="col-xl-9 col-md-8 mx-auto"> 
							<div class="freelance-title" id="plan">
								<h3>Employer Packages</h3>
								<p> Choose the best pricing that suites your requirements</p>
							</div>	
							<div class="row">
								<div class="col-lg-4">
									<div class="package-detail">
										<h4>Basic Plan</h4>
										<p>Go Pro, Best for the individuals</p>
										<h3 class="package-price">$19.00</h3>
										<div class="package-feature">
											<ul>
												<li>12 Project Credits</li>
												<li>10 Allowed Services</li>
												<li>20 Days visibility</li>
												<li>5 Featured Services</li>
												<li>20 Days visibility</li>
												<li>30 Days Package Expiry</li>
												<li class="non-check">Profile Featured</li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary price-btn btn-block">Select Plan</a>
									</div>
								</div>
								
								<div class="col-lg-4">
									<div class="package-detail">
										<h4>Business </h4>
										<p>Highest selling package features</p>
										<h3 class="package-price">$29.00</h3>
										<div class="package-feature">
											<ul>
												<li>15 Project Credits</li>
												<li>12 Allowed Services</li>
												<li>25 Days visibility</li>
												<li>10 Featured Services</li>
												<li>30 Days visibility</li>
												<li>40 Days Package Expiry</li>
												<li>Profile Featured</li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary price-btn btn-block">Select Plan</a>
									</div>
								</div>
								
								<div class="col-lg-4">
									<div class="package-detail">
										<h4>The Unlimita </h4>
										<p>Drive crazy, unlimited on the go</p>
										<h3 class="package-price">$79.00</h3>
										<div class="package-feature">
											<ul>
												<li>Unlimited Project Credits</li>
												<li>Unlimited Services</li>
												<li>Services Never Expire</li>
												<li>20 Featured Services</li>
												<li>Services Never Expire</li>
												<li>Package Never Expire</li>
												<li>Profile Featured</li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary price-btn btn-block">Select Plan</a>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-6">
									<div class="member-plan pro-box">
										<div class="pro-head">
											<h2><i class="fa fa-check-circle orange-text" aria-hidden="true"></i> Plan Details</h2>
										</div>
										<div class="pro-body member-detail">
											<div class="row">
												<div class="col-6">
													<h4 class="mb-0">The Ultima</h4>
													<div class="yr-amt">Anually Price</div>													
													<div class="expiry-on">Expiry On</div>												
													<div class="expiry">24 JAN 2022</div>									
												</div>
												<div class="col-6 change-plan">
													<h3>$1200</h3>
													<div class="yr-duration">Duration: One Year</div>
													<a href="#plan" class="btn btn-primary btn-plan black-btn">Change Plan</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">Statement</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive table-box">
												<table class="table table-center table-hover datatable">
													<thead class="thead-pink">
														<tr>
															<th>Purchased Date</th>
															<th>Details</th>
															<th>Expiry Date</th>
															<th>Type</th>
															<th>Status</th>
															<th>Price</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>15 July 2021</td>
															<td>
																<p class="mb-0">The Unlimita</p>
																<a href="#" class="read-text">Invoice : IVIP12023598</a>
															</td>
															<td>15th July 2022</td>
															<td>Yearly</td>
															<td class="text-danger">Inactive</td>
															<td>$200.00</td>
														</tr>
														<tr>
															<td>15 July 2022</td>
															<td>
																<p class="mb-0">The Unlimita</p>
																<a href="#" class="read-text">Invoice : IVIP12023598</a>
															</td>
															<td>15th July 2023</td>
															<td>Yearly</td>
															<td class="text-success">Active</td>
															<td>$200.00</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="text-end mt-3">
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
				</div>
			</div>	
			
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection