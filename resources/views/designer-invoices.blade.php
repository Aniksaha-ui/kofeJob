<?php $page="designer-invoices";?>
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
											<a href="designer-project-proposals" class="nav-link">
												<i class="material-icons">business_center</i> Projects
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-favourites" class="nav-link">
												<i class="material-icons">local_play</i> Favourites
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-review" class="nav-link">
												<i class="material-icons">record_voice_over</i> Reviews
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-portfolio" class="nav-link">
												<i class="material-icons">pie_chart</i> Portfolio
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-chats" class="nav-link">
												<i class="material-icons">chat</i> Messages
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-membership" class="nav-link">
												<i class="material-icons">person_add</i> Membership
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-verify-identity" class="nav-link">
												<i class="material-icons">person_pin</i> Verify Identity
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-withdraw-money" class="nav-link active">
												<i class="material-icons">wifi_tethering</i> Payments
											</a>
										</li>
										<li class="nav-item">
											<a href="designer-profile-settings" class="nav-link">
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
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="designer-withdraw-money">Withdraw Funds</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="designer-invoices"> Invoices</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="designer-transaction-history"> Transaction History</a>
									</li>
								</ul>
							</nav>	
							<div class="transaction-table card">
								<div class="card-header">
									<div class="row justify-content-between align-items-center">
										<div class="col">
											<h5 class="card-title">All Invoices</h5>
										</div>
										<div class="col-auto d-flex align-items-center flex-wrap transaction-shortby">
												<div class="sort-by sort-show">
													<span class="sort-title">Show</span>
													<span class="sortby-fliter">
														<select class="select">
															<option>5</option>
															<option class="sorting">4</option>
															<option class="sorting">3</option>
															<option class="sorting">6</option>
															<option class="sorting">3</option>
														</select>
													</span>
												</div>
												<div class="export-item sort-show sort-by"><i class="fas fa-download"></i> Export</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive table-box">
										<table class="table">
											<thead>
												<tr class="thead-pink">
													<th>Invoice Number</th>
													<th>Client Name</th>
													<th>Created Date</th>
													<th>Amount</th>
													<th>Due Date</th>
													<th>Status</th>
													<th>Paid On</th>
												</tr>
											</thead>
											<tbody class="table table-hover table-center">

												<tr>
													<td><a href="view-invoice" class="invoice-id">INV-5622</a></td>
													<td>Amaze Tech</td>
													<td>16 Sep 2021</td>
													<td>$150</td>
													<td>22 Oct 2021</td>
													<td><span class="badge bg-success-light">Paid</span></td>
													<td>22 Oct 2021, 10:45pm</td>
												</tr>
												<tr>
													<td><a href="view-invoice" class="invoice-id">INV-4545</a></td>
													<td>Park Inc</td>
													<td>12 Sep 2021</td>
													<td>$150</td>
													<td>25 Oct 2021</td>
													<td><span class="badge bg-warning-light">Partially Paid</span></td>
													<td>25 Oct 2021, 10:45pm</td>
												</tr>
												<tr>
													<td><a href="view-invoice" class="invoice-id">INV-2254</a></td>
													<td>Tech Zone </td>
													<td>10 Sep 2021</td>
													<td>$150</td>
													<td>15 Oct 2021</td>
													<td><span class="badge bg-success-light">Paid</span></td>
													<td>10 Oct 2021, 10:45pm</td>
												</tr>
												<tr>
													<td><a href="view-invoice" class="invoice-id">INV-1582</a></td>
													<td>Abc Software</td>
													<td>13 Sep 2021</td>
													<td>$150</td>
													<td>28 Oct 2021</td>
													<td><span class="badge bg-danger-light">Overdue</span></td>
													<td>13 Oct 2021, 10:45pm</td>
												</tr>
												<tr>
													<td><a href="view-invoice" class="invoice-id">INV-1526</a></td>
													<td>Host Technologies</td>
													<td>12 Sep 2021</td>
													<td>$150</td>
													<td>29 Oct 2021</td>
													<td><span class="badge bg-warning-light">Partially Paid</span></td>
													<td>29 Oct 2021, 10:45pm</td>
												</tr>
												<tr>
													<td><a href="view-invoice" class="invoice-id">INV-1200</a></td>
													<td>Alfred Tech </td>
													<td>05 Sep 2021</td>
													<td>$150</td>
													<td>15 Oct 2021</td>
													<td><span class="badge bg-warning-light">Partially Paid</span></td>
													<td>15 Oct 2021, 10:45pm</td>
												</tr>
												<tr>
													<td><a href="view-invoice" class="invoice-id">INV-1212</a></td>
													<td>Kind Softwares </td>
													<td>02 Sep 2021</td>
													<td>$150</td>
													<td>22 Oct 2021</td>
													<td><span class="badge bg-success-light">Paid</span></td>
													<td>22 Oct 2021, 10:45pm</td>
												</tr>
												<tr>
													<td><a href="view-invoice" class="invoice-id">INV-1456</a></td>
													<td>Tech Zone </td>
													<td>10 Sep 2021</td>
													<td>$150</td>
													<td>15 Oct 2021</td>
													<td><span class="badge bg-danger-light">Overdue</span></td>
													<td>10 Oct 2021, 10:45pm</td>
												</tr>
												<tr>
													<td><a href="view-invoice" class="invoice-id">INV-1236</a></td>
													<td>Abc Software</td>
													<td>13 Sep 2021</td>
													<td>$150</td>
													<td>28 Oct 2021</td>
													<td><span class="badge bg-danger-light">Overdue</span></td>
													<td>13 Oct 2021, 10:45pm</td>
												</tr>
												<tr>
													<td><a href="view-invoice" class="invoice-id">INV-1566</a></td>
													<td>Park Inc</td>
													<td>12 Sep 2021</td>
													<td>$150</td>
													<td>25 Oct 2021</td>
													<td><span class="badge bg-success-light">Paid</span></td>
													<td>25 Oct 2021, 10:45pm</td>
												</tr>
											</tbody>
										</table>
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
@endsection