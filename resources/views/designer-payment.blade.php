<?php $page="designer-withdraw-money";?>
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
											<a href="designer-project-proposals" class="nav-link active">
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
							<div class="page-title">
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="designer-view-project-detail">Overview & Discussions</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="designer-milestones">Milestones</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="designer-task">Tasks</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="designer-files">Files</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="designer-payment">Payments</a>
									</li>
								</ul>
							</nav>
							
							<!-- project list -->
							<div class="my-projects-view">
								<div class="row">
									<div class="col-lg-12">
										<div class="card">
											<div class="project-table">                                                                                                   
												<div class="card-body">
													<h4>PAYMENTS PAID FOR THIS PROJECT</h4>
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
							<!-- project list -->
						
						</div>							
					</div>
				</div>
			</div>	
			
			<!-- /Page Content -->

        </div>
		<!-- /Main Wrapper -->
@endsection