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
											<a href={{url('/designer-project-proposals')}} class="nav-link ">
												<i class="material-icons">business_center</i> projects
											</a>
										</li>
										<li class="nav-item">
											<a href="{{url('favorite')}}" class="nav-link active">
												<i class="material-icons">local_play</i> Favourites
											</a>
										</li>
										<li class="nav-item">
											<a href="#designer-review" class="nav-link">
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
						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3 class="text-center">My Proposal</h3>
							</div>
						
							
							<!-- Proposals list -->
							<table class="table table-striped">
                                <thead>
                                  <tr class="bg-primary">
                                    <th scope="col">SL</th>
                                    <th scope="col">Designer Id</th>
                                    <th scope="col">Designer Name</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($favoriteSeller as $row)
                                    <tr>
                                        <th scope="row">{{$row->id}}</th>
                                        <td>{{$row->designerId}}</td>
                                        <td>{{$row->designerName}}</td>
                                        <td><a href="{{ url('deleteFavoriteDesigner?id='.$row->designerId) }}" class="btn btn-danger btn-sm">
                                            Delete
                                        </a></td>
                                      </tr>
                                    @endforeach
                                 
                                  
                                </tbody>
                              </table>
							<!-- /Proposals list -->
							<br><br>
							<div class="d-flex align-items-center justify-content-center">
								{{$favoriteSeller->links()}}

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