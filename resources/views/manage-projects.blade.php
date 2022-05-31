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
											<a href={{url('/designer-project-proposals')}} class="nav-link active">
												<i class="material-icons">business_center</i> projects
											</a>
										</li>
										<li class="nav-item">
											<a href="{{url('favorite')}}" class="nav-link ">
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
							<div class="page-title">
								<div class="row">
									<div class="col-md-6">
										<h3>Manage Projects</h3>
									</div>
									
								</div>
							</div>
							<nav class="user-tabs project-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<h3 class="text-danger">My Projects</h3>
									</li>
								
								
								</ul>
							</nav>
							@foreach($projectRequirement as $row)
							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-10 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info">
														
														<h2>{{$row->projectName}}</h2>
														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		<p>Price type</p>
																		<h5>{{$row->priceType}}</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
						                                                <p class="text-center">Seller Name</p>								<p class="text-center">{{$row->name}}</p>
																		{{-- <h5><img src="assets/img/en.png" height="13" alt="Lang"> UK</h5> --}}
																	</div>
																</li>
															
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															@if($row->priceType=="fixed")
																<h3 class="client-price me-2">${{$row->fixedPrice}}</h3>
																<p class="amnt-type">({{$row->priceType}})</p>
																@endif
																@if($row->priceType=="hourly")
																<h3 class="client-price me-2">${{$row->hourlyPrice}}</h3>
																<p class="amnt-type">({{$row->priceType}})</p>
																@endif
																@if($row->priceType=="biding")
																<h3 class="client-price me-2">${{$row->bidingPrice}}</h3>
																<p class="amnt-type">({{$row->priceType}})</p>
																@endif

															<h5 class="text-secondary">upload in <br> {{$row->created_at}}</h5>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center">
															<a href="{{ url('view-project-detail?id='.$row->id) }}" class="projects-btn">View Details</a>
															<a href="{{ url('setCompleteProject?id='.$row->id) }}" class="projects-btn">Complete Project</a>
															<a href="#" class="hired-detail">Start on {{$row->startingDate}}</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 d-flex flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body p-2">
												<div class="prj-proposal-count text-center hired">
													{{-- @if($row->designer_id!=0)
													<h3>Hired</h3>
													@endif
													@if($row->designer_id==0)
													<h3>Not Yet </h3>
													@endif --}}
													<h3>{{$row->status}}</h3>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /project list -->
						
							@endforeach
							<!-- pagination -->
							{{ $projectRequirement->links() }}

							<!-- /pagination -->
							
						</div>
					</div>
				</div>
			</div>	
			
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection