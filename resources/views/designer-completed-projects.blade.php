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
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="designer-project-proposals">My Proposals</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="designer-ongoing-projects">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="designer-hired-projects ">Hired Projects</a>
									</li>

									<li class="nav-item">
										<a class="nav-link active" href="designer-completed-projects">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="designer-cancelled-projects">Cancelled Projects</a>
									</li>
								</ul>
							</nav> 
							@foreach($completedProjects as $row)
							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12 flex-wrap">
										<div class="projects-cancelled-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info project">
														<h2>{{$row->projectName}}</h2>
														
														<div class="proposal-client">
															<h4 class="title-info">Client Price</h4>
															<div class="d-flex">
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
															</div>
														</div>
													</div>
													<div class="project-hire-info project">
														<div class="content-divider"></div>
														<div class="proposer-info project">
															<div class="proposer-img">
																<img src="assets/img/designer/designer-01.jpg" alt="" class="img-fluid">
															</div>
															<div class="proposer-detail">
																	@if($row->seller_name!="NULL")
																	<h4>{{$row->seller_name}}</h4>
																	<li><i class="fas fa-star text-primary"></i>{{$row->review}}</li>
																	@endif
															</div>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-center project">
															<a href={{ url('proposal-view-project?id='.$row->projectId) }} class="projects-btn">View Project</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /project list -->
							{{$completedProjects->links()}}
						@endforeach
							
						
							
							<!-- pagination -->
						
							<!-- /pagination -->
							
						</div>
					</div>
				</div>
			</div>	
			
			<!-- /Page Content -->

        </div>
		<!-- /Main Wrapper -->
@endsection