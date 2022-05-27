<?php $page="milestones";?>
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
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="view-project-detail">Overview & Discussions</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="milestones">Milestones</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tasks">Tasks</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="files">Files</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="project-payment">Payments</a>
									</li>
								</ul>
							</nav>
							
							<!-- project list -->
							<div class="my-projects-view">
								<div class="row">
									<div class="col-lg-12">
										<div class="">
											<div class="card">
												<div class="card-header">
													<h5 class="card-title">Payments</h5>
												</div>
												<div class="card-body">
													<div class="table-responsive table-box">
														<table class="table table-center table-hover datatable">
															<thead class="thead-pink">
																<tr>
																	<th>Client </th>
																	<th>Name </th>
																	<th>Type of Payment</th>
																	<th>Payment</th>
																	<th>Status  </th>
																	<th>Date Paid</th>
																	<th>Invoice</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																	<div class="d-flex align-items-center"><span><img src="assets/img/company/img-1.png" class="img-fluid avatar-md rounded-circle me-2" alt="Logo"></span> <span>Amaze Tech</span></div></td>
																	<td>Research</td>
																	<td><span class="badge badge-pill bg-outline-red">Milestone</span></td>
																	<td>$54</td>
																	<td><span class="badge badge-pill bg-outline-green">Completed</span></td>
																	<td>  20th October 2018</td>
																	<td><a href="#" class="file-circle"><i class="far fa-copy"></i></a>
																	</td>
																</tr>
																<tr>
																	<td>
																	<div class="d-flex align-items-center"><span><img src="assets/img/company/img-2.png" class="img-fluid avatar-md rounded-circle me-2" alt="Logo"></span> <span>Park Inc</span></div></td>
																	<td>Design</td>
																	<td><span class="badge badge-pill bg-outline-red">Milestone</span></td>
																	<td>$52</td>
																	<td><span class="badge badge-pill bg-outline-green">Completed</span></td>
																	<td>  25th October 2018</td>
																	<td><a href="#" class="file-circle"><i class="far fa-copy"></i></a>
																	</td>
																</tr>
																<tr>
																	<td>
																	<div class="d-flex align-items-center"><span><img src="assets/img/company/img-3.png" class="img-fluid avatar-md rounded-circle me-2" alt="Logo"></span> <span>Tech Zone</span></div></td>
																	<td>Development</td>
																	<td><span class="badge badge-pill bg-outline-red">Milestone</span></td>
																	<td>$40</td>
																	<td><span class="badge badge-pill bg-outline-green">Completed</span></td>
																	<td>  28th October 2018</td>
																	<td><a href="#" class="file-circle"><i class="far fa-copy"></i></a>
																	</td>
																</tr>
																<tr>
																	<td>
																	<div class="d-flex align-items-center"><span><img src="assets/img/company/img-4.png" class="img-fluid avatar-md rounded-circle me-2" alt="Logo"></span> <span>Abc Software</span></div></td>
																	<td>Research</td>
																	<td><span class="badge badge-pill bg-outline-red">Milestone</span></td>
																	<td>$25</td>
																	<td><span class="badge badge-pill bg-outline-green">Completed</span></td>
																	<td>  29th October 2018</td>
																	<td><a href="#" class="file-circle"><i class="far fa-copy"></i></a>
																	</td>
																</tr>
																<tr>
																	<td>
																	<div class="d-flex align-items-center"><span><img src="assets/img/company/img-5.png" class="img-fluid avatar-md rounded-circle me-2" alt="Logo"></span> <span>Host Technologies</span></div></td>
																	<td>Development</td>
																	<td><span class="badge badge-pill bg-outline-red">Milestone</span></td>
																	<td>$32</td>
																	<td><span class="badge badge-pill bg-outline-green">Completed</span></td>
																	<td>  24th October 2018</td>
																	<td><a href="#" class="file-circle"><i class="far fa-copy"></i></a>
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
							</div>						
						</div>							
					</div>
				</div>
			</div>				
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection