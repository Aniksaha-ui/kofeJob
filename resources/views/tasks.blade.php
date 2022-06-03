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
								<a href="{{url('myReview')}}" class="nav-link">
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
							<h2 class="nav-link" >Overview & Discussions</h2>
						</li>
						<li>
							@if($status==0)
								<div class="d-flex align-items-center justify-content-md-end justify-content-center">
									<a href="javascript:void(0)"><i class="fas fa-heart heart fa-2x me-2 orange-text"></i></a> 
									<a data-bs-toggle="modal" href="#taskmodal" class="btn bid-btn">Send Proposal <i class="fas fa-long-arrow-alt-right"></i></a>
								</div>
							
							@endif
							@if($status==1)
								<div class="d-flex align-items-center justify-content-md-end justify-content-center">
										<h3>Already Send Proposal</h3>
								</div>
							@endif
							
						
						<li>	
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
													<h3 class="client-price me-2">${{$projectDetails->bidingPrice ? $projectDetails->bidingPrice : 'Not Yet'}}</h3>
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
													<h3 class="client-price me-2">${{$projectDetails->bidingPrice ? $projectDetails->bidingPrice : 'Not Yet'}}</h3>
													<p class="amnt-type">({{$projectDetails->priceType}})</p>
													@endif

												<h5>in 12 Days</h5>
											</div>
											<div class="content-divider"></div>
											<div class="projects-action text-center">
												<a href="#" class="hired-detail">Project Start on <b>{{$projectDetails->startingDate}}</b></a>
									
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
											@if($projectDetails->designer_id!='NULL')
											<h3>Hired</h3>
											@endif
											@if($projectDetails->designer_id=='NULL')
											<h3>Not Yet </h3>
											<a href="chats" class="btn btn-chat">Chat Now</a>

											@endif
									
									
									
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
	
		
		<!-- The Modal -->
		<div class="modal fade" id="taskmodal">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Applied for - {{{$projectDetails->projectName}}}}</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">		
						<form method="post" action="{{route('proposal.insert')}}" enctype="multipart/form-data">
							@csrf
							<div class="modal-info">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Cover Letter</label>
											<textarea name="cover_letter" class="form-control" rows="5"></textarea>
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="form-group">
											<label></label>
											<input type="text" name="id"
											value={{$project_id}} class="form-control" hidden="true"/>
										</div>
									</div>

									@if($projectDetails->priceType=='biding')
									<div class="col-md-12">
										<div class="form-group">
											<label>Biding Price</label>
											<input type="text" name="price"
											value="" class="form-control"/>
										</div>
									</div>
									@endif
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
@endsection