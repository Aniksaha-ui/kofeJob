<?php $page="manage-projects";?>
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
										<a class="nav-link active" href="files">Files</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="project-payment">Payments</a>
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
													<div class="row justify-content-between align-items-center">
														<div class="col">
															<h5 class="card-title">Files</h5>
														</div>
														<div class="col-auto">
															<a data-bs-toggle="modal" href="#file" class="btn btn-primary btn-rounded"><i class="fas fa-plus"></i> Add files</a>
														</div>
													</div>
												</div>
												<div class="card-body">
													<div class="table-responsive table-box">
														<table class="table table-center table-hover datatable">
															<thead class="thead-pink">
																<tr>
																	<th>File Preview</th>
																	<th>Title</th>
																	<th>Description</th>
																	<th>Type</th>
																	<th>Size</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><img src="assets/img/file-logo.png" class="img-fluid" alt="Logo"></td>
																	<td> Image for Section background  </td>
																	<td><p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
																		<a href="#" class="read-text">Readmore</a>
																	</td>
																	<td>Png</td>
																	<td>20KB</td>
																	<td>
																		<div class="action">
																			<a href="javascript:void(0);" class="file-circle me-2"><i class="fas fa-cloud-download-alt"></i></a>
																			<a data-bs-toggle="modal" href="#edit-file" class="file-circle me-2"><i class="fas fa-pen"></i></a>
																			<a href="javascript:void(0);" class="file-circle"><i class="fas fa-trash-alt"></i></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><img src="assets/img/file-logo.png" class="img-fluid" alt="Logo"></td>
																	<td> Image for Footer </td>
																	<td><p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
																		<a href="#" class="read-text">Readmore</a>
																	</td>
																	<td>Png</td>
																	<td>22KB</td>
																	<td>
																		<div class="action">
																			<a href="javascript:void(0);" class="file-circle me-2"><i class="fas fa-cloud-download-alt"></i></a>
																			<a data-bs-toggle="modal" href="#edit-file" class="file-circle me-2"><i class="fas fa-pen"></i></a>
																			<a href="javascript:void(0);" class="file-circle"><i class="fas fa-trash-alt"></i></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><img src="assets/img/file-logo.png" class="img-fluid" alt="Logo"></td>
																	<td> Image for Login</td>
																	<td><p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
																		<a href="#" class="read-text">Readmore</a>
																	</td>
																	<td>Png</td>
																	<td>12KB</td>
																	<td>
																		<div class="action">
																			<a href="javascript:void(0);" class="file-circle me-2"><i class="fas fa-cloud-download-alt"></i></a>
																			<a data-bs-toggle="modal" href="#edit-file" class="file-circle me-2"><i class="fas fa-pen"></i></a>
																			<a href="javascript:void(0);" class="file-circle"><i class="fas fa-trash-alt"></i></a>
																		</div>
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
						</div>							
					</div>
				</div>
			</div>	
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
		
		<!-- The Modal -->
		<div class="modal fade" id="file">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="mb-0">Add Files</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">		
						<form action="files">
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
							<div class="submit-section text-end">
								<button type="submit" class="btn btn-primary submit-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /The Modal -->
		
		<!-- Edit Modal -->
		<div class="modal fade" id="edit-file">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="mb-0">Edit Files</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">		
						<form action="files">
							<div class="modal-info">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control" value="Image for Section background">
										</div>
										<div class="form-group">
											<label>Link</label>
											<input type="text" class="form-control" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
										</div>
										<div class="d-flex align-items-center">
											<img src="assets/img/file-logo.png" class="img-fluid me-2" alt="Logo">
											<label class="br-0 file-upload image-upbtn">
												upload Files <input type="file">
											</label>
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
		<!-- /Edit Modal -->
@endsection