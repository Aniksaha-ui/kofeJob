<?php $page="designer-favourites";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Page Content -->			
			<div class="content bookmark">					
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
											<a href="designer-favourites" class="nav-link active">
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
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="designer-favourites">Bookmarked Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="designer-invitations">Invitations</a>
									</li>
								</ul>
							</nav>
							<!-- project list -->
							<div class="my-projects-view">
								<div class="row">
									<div class="col-lg-12">
										<div class="pro-post mb-4">
											<div class="project-table">
												<div class="table-responsive">														
													<h3>INVITATIONS</h3>
													<table class="table table-hover table-center mb-0 datatable">
														<thead class="thead-pink">
															<tr>
																<th>Project name</th>
																<th>Client Detail</th>
																<th>Invite date </th>
																<th>Location</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>3D Renders and Amazon Product Store images/Video</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="project-details" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="assets/img/company/img-5.png" alt="User Image">
																		</a>
																		<a href="project-details"><span class="profile-name">Host Technologies </span><span>UI/UX Designer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td>18 Oct 2021</td>
																<td><h2 class="table-avatar"><img src="assets/img/flags/us.png" class="me-2" alt="" height="16"> USA</h2></td>
																<td>
																	<div class="table-action">
																		<a href="javascript:void(0);" class="me-2"><i class="fab fa-rocketchat"></i></a>
																		<a href="javascript:void(0);" class="orange-text"><i class="material-icons">delete_sweep</i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>Website Designer Required For Directory Theme</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="project-details" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="assets/img/company/img-6.png" alt="User Image">
																		</a>
																		<a href="project-details"><span class="profile-name">Alfred Tech </span><span>PHP designer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td>19 Oct 2021</td>
																<td><h2 class="table-avatar"><img src="assets/img/flags/de.png" class="me-2" alt="" height="16"> GERMANY</h2></td>
																<td>
																	<div class="table-action">
																		<a href="javascript:void(0);" class="me-2"><i class="fab fa-rocketchat"></i></a>
																		<a href="javascript:void(0);" class="orange-text"><i class="material-icons">delete_sweep</i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>WooCommerce Product Page Back Up Restoration</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="project-details" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="assets/img/company/img-7.png"alt="User Image">
																		</a>
																		<a href="project-details"><span class="profile-name">Kind Softwares </span><span>Graphic Designer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td>20 Oct 2021</td>
																<td><h2 class="table-avatar"><img src="assets/img/flags/de.png" class="me-2" alt="" height="16"> GERMANY</h2></td>
																<td>
																	<div class="table-action">
																		<a href="javascript:void(0);" class="me-2"><i class="fab fa-rocketchat"></i></a>
																		<a href="javascript:void(0);" class="orange-text"><i class="material-icons">delete_sweep</i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>Laravel Backend designer to finish ongoing project</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="project-details" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="assets/img/company/img-8.png" alt="User Image">
																		</a>
																		<a href="project-details"><span class="profile-name">Particles Inc </span><span>iOS designer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td>22 Oct 2021</td>
																<td><h2 class="table-avatar"><img src="assets/img/flags/us.png" class="me-2" alt="" height="16"> USA</h2></td>
																<td>
																	<div class="table-action">
																		<a href="javascript:void(0);" class="me-2"><i class="fab fa-rocketchat"></i></a>
																		<a href="javascript:void(0);" class="orange-text"><i class="material-icons">delete_sweep</i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>3D Renders and Amazon Product Store images/Video</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="project-details" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="assets/img/company/img-9.png"alt="User Image">
																		</a>
																		<a href="project-details"><span class="profile-name">Soft Technologies </span><span>UI/UX Designer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td>39 Oct 2021</td>
																<td><h2 class="table-avatar"><img src="assets/img/flags/us.png" class="me-2" alt="" height="16"> USA</h2></td>
																<td>
																	<div class="table-action">
																		<a href="javascript:void(0);" class="me-2"><i class="fab fa-rocketchat"></i></a>
																		<a href="javascript:void(0);" class="orange-text"><i class="material-icons">delete_sweep</i></a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>	
									</div>
								</div>								
							</div>
							<!-- project list -->
							
						</div>
					</div>
				</div>
			</div>							
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection