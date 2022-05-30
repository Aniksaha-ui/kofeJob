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
						<!-- /sidebar -->
						
						<div class="col-xl-9 col-md-8">
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="view-project-detail">Overview & Discussions</a>
									</li>
								
									<li class="nav-item">
										<a class="nav-link" href="project-payment">Payments</a>
									</li>
								</ul>
							</nav>
							
							<!-- project list -->
							<div class="my-projects">
							<!-- project list -->
							<div class="my-projects-list pro-list-view">
								<div class="row">
									<div class="col-lg-10 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info">
														<h2>{{$projectDetails->projectName}}</h2>
														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		@if($projectDetails->priceType=="fixed")
																<h3 class="client-price me-2">${{$projectDetails->fixedPrice}}</h3>
																<p class="amnt-type">({{$projectDetails->priceType}})</p>
																@endif
																@if($projectDetails->priceType=="hourly")
																<h3 class="client-price me-2">${{$projectDetails->hourlyPrice}}</h3>
																<p class="amnt-type">({{$projectDetails->priceType}})</p>
																@endif
																@if($projectDetails->priceType=="biding")
																<h3 class="client-price me-2">${{$projectDetails->bidingPrice}}</h3>
																<p class="amnt-type">({{$projectDetails->priceType}})</p>
																@endif

																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p class="text-center">Designer Name</p>
																		<p class="text-center">{{$projectDetails->name}}</p>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Number of bidding</p>
																		<h5 class="text-center">5</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															@if($projectDetails->priceType=="fixed")
																<h3 class="client-price me-2">${{$projectDetails->fixedPrice}}</h3>
																<p class="amnt-type">({{$projectDetails->priceType}})</p>
																@endif
																@if($projectDetails->priceType=="hourly")
																<h3 class="client-price me-2">${{$projectDetails->hourlyPrice}}</h3>
																<p class="amnt-type">({{$projectDetails->priceType}})</p>
																@endif
																@if($projectDetails->priceType=="biding")
																<h3 class="client-price me-2">${{$projectDetails->bidingPrice}}</h3>
																<p class="amnt-type">({{$projectDetails->priceType}})</p>
																@endif

															<h5>in 12 Days</h5>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="#" class="hired-detail">Hired on {{$projectDetails->startingDate}}</a>
												
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 d-flex flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="prj-proposal-count text-center hired">
													<div class="prj-proposal-count text-center hired">
													{{$projectStatus->status}}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /project list -->
							
							</div>
							<div class="pro-post widget-box">								
								<h3 class="pro-title">Project Description</h3>
								<div class="pro-overview">
									<h2 class="text-primary text-center">{{$projectDetails->projectName}}</h2>
									<p>{!! $projectDetails->description !!}</p>
								</div>	
							</div>
							
							<div class="pro-post widget-box">
								<h3 class="pro-title">Skills Required</h3>
								<div class="pro-content">
									<div class="tags">
										@foreach ($expertise as $row)
										<span class="badge badge-pill badge-design">{{$row}}</span>
										@endforeach
									</div>
								</div>
							</div>
							
						</div>
						<!-- project list -->
					
					</div>							
				</div>
			</div>
			
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection