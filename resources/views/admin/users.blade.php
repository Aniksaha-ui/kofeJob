<?php $page="users";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">{{$title}}</h3>
								
							</div>
							<div class="col-auto">
								<a href="#" class="btn add-button me-2" data-bs-toggle="modal" data-bs-target="#add-category">
									<i class="fas fa-plus"></i>
								</a>
								<a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
									<i class="fas fa-filter"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<div class="card filter-card" id="filter_inputs">
						<div class="card-body pb-0">
							<form action="#" method="post">
								<div class="row filter-row">
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Name</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control">										
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Expertise</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<button class="btn btn-primary btn-block" type="submit">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- /Search Filter -->

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-center table-hover mb-0 datatable">
											<thead>
												<tr>
													
													<th>Name</th>
													<th>Email</th>	
													<th>Expertise</th>	
													<th>Joined date</th>	
													<th>Address</th>	
													<th>Active Status</th>	
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($user as $row)
												<tr>
													<td>
														{{$row->name}}
													</td>
													<td>
														{{$row->email}}
													</td>
													<td>{{$row->stack}}</td>
													<td>
													 {{$row->created_at}}
													</td>
													<td>{{$row->address}}</td>
													@if($row->active==1)
													<td>Active</td>
													@endif
													@if($row->active==0)
													<td>inactive</td>
													@endif
													<td class="text-end">
														<a href="javascript:void(0);" 
														id="{{ $row->id }}"
														onclick="productview(this.id)"
														class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#edit-category"><i class="far fa-edit"></i></a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												@endforeach
												
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		</div>
		<!-- /Main Wrapper -->
		
		<!-- Add Modal -->
		<div class="modal fade custom-modal" id="add-category">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">

					<div class="modal-header flex-wrap">
						<div class="text-center w-100 mb-3">
							<img src="../assets_admin/img/logo-small.png" alt="">
						</div>
						<h4 class="modal-title">Add New User</h4>
						<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
					</div>

					<div class="modal-body">
						<form>
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control">
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control">
							</div>
							<div class="form-group">
								<label>User Type</label>
								<select class="form-control form-select">
									<option>Select</option>
									<option>Frontend designer</option>
									<option>Graphic Designer</option>
								</select>
							</div>
							<div class="mt-4">
								<button type="submit" class="btn btn-primary btn-block">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Add Modal -->
		
		<!-- edit Modal -->
		<div class="modal fade custom-modal" id="edit-category">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">

					<div class="modal-header flex-wrap">
						<div class="text-center w-100 mb-3">
							<img src="../assets_admin/img/logo-small.png" alt="">
						</div>
						<h4 class="modal-title">Edit User</h4>
						<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
					</div>

					<div class="modal-body">
						<form method="post" action="{{route('user.update')}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<input type="text" hidden="true" name="id" id="id" />
								<label>Name</label>
								<input type="text" class="form-control" id="name" name="name">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" id="email" name="email" >
							</div>
							<div class="form-group">
								<label>Address</label>
								<input name="address" id="address" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Joining Date</label>
								<input type="text" name="created_at" id="created_at" class="form-control">
							</div>
						
							<div class="mt-4">
								<button type="submit" class="btn btn-primary btn-block">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Add Modal -->

		<!-- Delete Modal -->
		<div class="modal custom-modal fade" id="delete_category" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-header">
							<h3>Delete</h3>
							<p>Are you sure want to delete?</p>
						</div>
						<div class="modal-btn delete-action">
							<div class="row">
								<div class="col-6">
									<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
								</div>
								<div class="col-6">
									<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->

		
<script type="text/javascript">
    function productview(id){
        $.ajax({
         url: "{{ url('/admin/userDetails') }}/"+id, 
         type: "GET",
         dataType:"json",
         success:function(data){
		console.log(data.userDetails.name);
       $('#name').val(data.userDetails.name);
       $('#id').val(data.userDetails.id);
       $('#email').val(data.userDetails.email);
       $('#address').val(data.userDetails.address);
       $('#created_at').val(data.userDetails.created_at);
        }  
        })
    }


</script>

@endsection