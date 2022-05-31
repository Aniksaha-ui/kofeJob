<?php $page="designer";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Breadcrumb -->
			
				<div class="container mt-5">
				
				</div>
			
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->			
			<div class="content mt-5">
				<div class="container mt-5">
					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Search Filter -->
							
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
							
							<!-- /Search Filter -->
							
						</div>
						
						<div class="col-md-12 col-lg-8 col-xl-9">
							<div class="sort-tab">
								<div class="row align-items-center">
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="d-flex align-items-center">
										   <div class="freelance-view">
											  <h4>Showing 1 - 12 of 455</h4>
										   </div>
										</div>
									 </div>
									 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
										<div class="d-flex justify-content-sm-end">
										   <div class="sort-by">
											  <select class="custom-select form-select">
												 <option>Relevance</option>
												 <option>Rating</option>
												 <option>Popular</option>
												 <option>Latest</option>
												 <option>Free</option>
											  </select>
										   </div>
										</div>
									</div>
								</div>
						   </div>
			   
						
							
							<div class="row">
								@foreach ($designers as $row)
								<div class="col-md-6 col-lg-6 col-xl-4">
									<div class="freelance-widget">
										<div class="freelance-content">
											
											<div class="freelance-img">
												<a href="#">
													<img src="assets/img/user/avatar-12.jpg" alt="User Image">
													<span class="verified"><i class="fas fa-check-circle"></i></span>
												</a>
											</div>
											<div class="freelance-info">
												<h3><a href="#">{{$row->name}}</a></h3>
												<div class="rating">
													<span class="average-rating">Email:{{$row->email}}</span>
												</div>
												<div class="freelance-specific">{{$row->stack}}</div>
												<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>{{$row->address}}</div>
											
												{{-- <div class="freelance-tags">
													<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
													<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
													<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
												</div> --}}
												<div class="freelancers-price">Free</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-center">
											<div class="cart-hover">
												<a href={{ url('designer-details?id='.$row->id.'&&postid='.$postId) }} class="btn-cart" tabindex="-1">View Profile</a>
											</div>

											<div class="cart-hover ms-5">
												<a href={{ url('addfavorite?id='.$row->id) }} class="btn-cart" tabindex="-1">Add to Favorite</a>
											</div>
										</div>
										
									</div>
								</div>
								@endforeach
								<div class="d-flex align-items-center justify-content-center">
								{{ $designers->links() }}

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
		<div class="modal fade" id="rating">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header d-block b-0 pb-0">
						<span class="modal-close float-end"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">		
						<form action="project">
							<div class="modal-info">
								<div class="text-center pt-0 mb-5">
									<h3>Please login to Favourite Freelancer</h3>
								</div>
								<div class="submit-section text-center">
									<button  data-bs-dismiss="modal" class="btn btn-primary black-btn click-btn">Cancel</button>
									<button type="submit" class="btn btn-primary click-btn">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /The Modal -->
@endsection