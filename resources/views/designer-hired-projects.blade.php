<?php $page="designer-project-proposals";?>
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
										<h3 class="mb-0"><a href="designer-profile">Anik Saha</a></h3>
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
											<a href={{url('/designer-project-proposals')}} class="nav-link active">
												<i class="material-icons">business_center</i> Designers Profile
											</a>
										</li>
										<li class="nav-item">
											<a href="#designer-favourites" class="nav-link">
												<i class="material-icons">local_play</i> Favourites
											</a>
										</li>
										<li class="nav-item">
											<a href="#designer-review" class="nav-link">
												<i class="material-icons">record_voice_over</i> Reviews
											</a>
										</li>
										<li class="nav-item">
											<a href={{url('/designer-milestones')}}  class="nav-link">
												<i class="material-icons">record_voice_over</i> All Customer Proposal
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="material-icons">chat</i> Messages
											</a>
										</li>
									
										<li class="nav-item">
											<a href="designer-verify-identity" class="nav-link">
												<i class="material-icons">person_pin</i> Verify Identity
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="material-icons">wifi_tethering</i> ALL Payments 
											</a>
										</li>
										<li class="nav-item">
											<a href="#designer-profile-settings" class="nav-link">
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
								<h3 class="text-center">My Proposal</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="designer-project-proposals">ALL Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="designer-ongoing-projects">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="designer-hired-projects ">Hired Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="designer-completed-projects">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="designer-cancelled-projects">Cancelled Projects</a>
									</li>
								</ul>
							</nav> 
							
							<!-- Proposals list -->
							<div class="proposals-section">
								<h3 class="page-subtitle">My Proposals</h3>
								
								<!-- Proposals -->
								@foreach($hiredProject as $row)
								<div class="designer-proposals">
									<div class="project-proposals align-items-center freelancer">
										<div class="proposals-info">
											<div class="proposals-detail">
												<h3 class="proposals-title">{{$row->projectName}}</h3>
												<div class="proposals-content">
													<div class="proposal-img">
														<div class="text-md-center">
															<img src="assets/img/designer/designer-01.jpg" alt="" class="img-fluid">
															<h4>{{$row->name}}</h4>
															<span class="info-btn">{{$row->role}}</span>
														</div>
													</div>
													<div class="proposal-client">
														<h4 class="title-info">Priceing Type</h4>
														@if($row->priceType==="fixed")
														<h2 class="client-price">${{$row->priceType}}</h2>
														<span class="price-type">(${{$row->fixedPrice}})</span>
														@endif

														
														@if($row->priceType==="hourly")
														<h2 class="client-price">${{$row->priceType}}</h2>
														<span class="price-type">(${{$row->hourlyPrice}})</span>
														@endif

														@if($row->priceType==="Biding")
														<h2 class="client-price">${{$row->priceType}}</h2>
														<span class="price-type">(${{$row->bidingPrice}})</span>
														@endif

													</div>
													<div class="proposal-type">
														<h4 class="title-info">Project Period</h4>
														<h3>{{$row->projectPeriod}}</h3>
													</div>
												</div>
											</div>
											<div class="project-hire-info">
												<div class="content-divider-1"></div>
												<div class="projects-amount">
													<p>Status</p>
													<h3 class="text-danger">{{$row->status}}</h3>
												</div>
												<div class="content-divider-1"></div>
												<div class="projects-action text-center">
													{{-- <a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a> --}}
													<a href={{ url('proposal-view-project?id='.$row->projectId) }} class="projects-btn">View Project</a>
												
												</div>
											</div> 
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Description</h5>
											<p>{!!$row->description!!}</p>
										</div>
									</div>
								</div>
								<!-- Proposals --> 
								@endforeach
						
								
							</div>
							<!-- /Proposals list -->
							
							<div class="d-flex align-items-center justify-content-center">
								{{$hiredProject->links()}}

							</div>
							
						</div>
					</div>
				</div>
			</div>	
			
			<!-- /Page Content -->

			<!-- The Modal -->
			<div class="modal fade" id="file">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">EDIT PROPOSAL</h4>
							<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a></span>
						</div>
						<div class="modal-body">		
							<form action="#">
								<div class="modal-info">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Cost</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Days</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control summernote" rows="5"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section text-end">
									<button type="submit" class="btn btn-primary submit-btn">Save Proposal</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
		

        </div>
		<!-- /Main Wrapper -->
@endsection