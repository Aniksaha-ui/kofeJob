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
											<a href="milestones" class="nav-link active">
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
										<a class="nav-link active" href="milestones">Milestones</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tasks">Tasks</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="files">Files</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="project-payment">Payments</a>
									</li>
								</ul>
							</nav>
							
							<div class="my-projects-view">
								<div class="row">
									<div class="col-lg-12">
										<div class="">
											<div class="card ">
												<div class="card-header">
													<div class="row justify-content-between align-items-center">
														<div class="col">
															<h5 class="card-title">Milestone</h5>
														</div>
														<div class="col-auto">
															<a data-bs-toggle="modal" href="#file" class="btn btn-primary btn-rounded"><i class="fas fa-plus"></i> Add Milestone</a>
														</div>
													</div>
												</div>
												<div class="card-body">												
													<div class="table-responsive table-box">
														<table class="table table-center table-hover datatable">
															<thead class="thead-pink">
																<tr>
																	<th>Name</th>
																	<th>Budget</th>
																	<th>Progress</th>
																	<th>Start Date</th>
																	<th>End Date</th>
																	<th>Paid</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Research</td>
																	<td>$60</td>
																	<td>
																		<p class="mb-0 orange-text text-center">25%</p>
																		<div class="progress progress-md mb-0">
																			<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</td>
																	<td>20th October 2021</td>
																	<td>31th October 2021</td>
																	<td><span class="badge badge-pill bg-success-dark">Paid</span></td>
																	<td><a href="javascript:void(0);"><span class="badge badge-pill bg-grey-light">Pay now</span></a></td>
																</tr>
																<tr>
																	<td>Design</td>
																	<td>$60</td>
																	<td>
																		<p class="mb-0 orange-text text-center">50%</p>
																		<div class="progress progress-md mb-0">
																			<div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</td>
																	<td>02th October 2021</td>
																	<td>31th October 2021</td>
																	<td><span class="badge badge-pill bg-success-dark">Paid</span></td>
																	<td><a href="javascript:void(0);"><span class="badge badge-pill bg-pink-dark">Pay now</span></a></td>
																</tr>
																<tr>
																	<td>Research</td>
																	<td>$60</td>
																	<td>
																		<p class="mb-0 orange-text text-center">75%</p>
																		<div class="progress progress-md mb-0">
																			<div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</td>
																	<td>05th October 2021</td>
																	<td>12th October 2021</td>
																	<td><span class="badge badge-pill bg-grey-dark">UnPaid</span></td>
																	<td><a href="javascript:void(0);"><span class="badge badge-pill bg-pink-dark">Pay now</span></a></td>
																</tr>
																<tr>
																	<td>Development</td>
																	<td>$50</td>
																	<td>
																		<p class="mb-0 orange-text text-center">60%</p>
																		<div class="progress progress-md mb-0">
																			<div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																	</td>
																	<td>15th October 2021</td>
																	<td>18th October 2021</td>
																	<td><span class="badge badge-pill bg-grey-dark">UnPaid</span></td>
																	<td><a href="javascript:void(0);"><span class="badge badge-pill bg-pink-dark">Pay now</span></a></td>
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
				</div>
			</div>				
			<!-- /Page Content -->


        </div>
		<div class="modal fade" id="file">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Files</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">		
						<form action="milestones">
							<div class="modal-info">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Milestone Name</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Budget</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Start Date</label>
											<input type="text" class="form-control datetimepicker">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>End Date</label>
											<input type="text" class="form-control datetimepicker">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Progress</label>
											<div class="slidecontainer">
												<input type="range" min="1" max="100" value="50" class="rangslider" id="myRange">
												<p class="text-muted">Progress <span id="demo"></span> %</p>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Description</label>
											<textarea class="form-control" rows="5"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="submit-section text-end">
								<button type="submit" class="btn btn-primary submit-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection