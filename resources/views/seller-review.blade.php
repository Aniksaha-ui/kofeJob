<?php $page="designer-project-proposals";?>
@extends('layout.mainlayout')
@section('content')		



<!-- Page Content -->			
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-3 col-md-3 theiaStickySidebar">
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
											<a href={{url('/designer-project-proposals')}} class="nav-link ">
												<i class="material-icons">business_center</i> projects
											</a>
										</li>
										<li class="nav-item">
											<a href="{{url('favorite')}}" class="nav-link ">
												<i class="material-icons">local_play</i> Favourites
											</a>
										</li>
										<li class="nav-item">
											<a href="#designer-review" class="nav-link active">
												<i class="material-icons">record_voice_over</i> Reviews
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
						<div class="col-xl-5 col-md-5">
							<div class="page-title">
								<h3 class="text-center">Give Review</h3>
							</div>
						
							
							<!-- Proposals list -->
							<form method="post" action="{{route('review.store')}}" enctype="multipart/form-data">
								@csrf	
								<div class="title-box widget-box">
									<!-- Project Title -->
									<div class="title-content">
										<div class="title-detail">
											<h3>Designer Name</h3>
											<div class="form-group mb-0">
												<select name="userId"  class="form-control select">
												@foreach ($users as $row)
													<option value={{$row->designer_id}} >{{$row->designer_name}}</option>
												@endforeach	
											</select>
											
											</div>
										</div>					
									</div>
									<!-- /Project Title -->
									
								
									
									<div class="title-content">
										<div class="title-detail">
											<h3 class="px-1">Comment</h3>
											<div class="form-group mb-0">
												<textarea type="text"
												cols="15" rows="10"
												name="ratingDescription"
												class="form-control" placeholder="Enter Customer"></textarea>
											</div>
										</div>					
									</div>

									{{-- ratings --}}
									<div class="title-content">
										<div class="title-detail">
											<h3 class="px-1">Ratings</h3>
											<div class="form-group mb-0">
												<input type="text"
												max="5"
												min="1"
												name="ratings"
												class="form-control" placeholder="Enter your rate" required></textarea>
											</div>
										</div>					
									</div>
									{{-- ratings --}}

									<!-- seller id -->
									<div class="title-content">
										<div class="title-detail">
											<h3></h3>
											<div class="form-group mb-0">
												<input type="text"
												hidden="true" 
												name="seller_id"
												value={{$sellerId}}
												class="form-control" placeholder="Enter Customer">
											</div>
										</div>					
									</div>
									<!-- seller id -->	

									<div class="row">
										<div class="col-md-12 text-end">
											<div class="btn-item">
												<button type="submit" class="btn next-btn">Submit</button>
											</div>
										</div>
									</div>
									
								</div>
								<!-- Project Title -->

							</form>	
							
						</div>

						{{-- show review --}}
						<div class="col-xl-4 col-md-4 px-5">
							<div class="page-title">
								<h3 class="text-center">Reviewed Designers Information</h3>
							</div>
						
							
							<!-- Proposals list -->
							<table class="table table-striped">
                                <thead>
                                  <tr class="bg-primary">
                                    <th scope="col">SL</th>
                                    <th scope="col">Designer Name</th>
                                    <th scope="col">Ratings</th>
                                    <th scope="col">Description</th>
								</tr>
                                </thead>
                                <tbody>
                                    @foreach ($reviewedUser as $row)
                                    <tr>
                                        <th scope="row">{{$row->id}}</th>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->ratings}}</td>
                                        <td>{{$row->ratingDescription}}</td>
                                      </tr>
                                    @endforeach
                                 
                                  
                                </tbody>
                              </table>
							<!-- /Proposals list -->
							<br><br>
							<div class="d-flex align-items-center justify-content-center">
								{{$reviewedUser->links()}}

							</div>
							
						</div>

						{{-- show review --}}

					</div>
				</div>
			</div>	
			
			<!-- /Page Content -->

		

        </div>
		<!-- /Main Wrapper -->
@endsection
