<?php $page="deposit-funds";?>
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
											<a href="manage-projects" class="nav-link">
												<i class="material-icons">business_center</i> Projects
											</a>
										</li>
										<li class="nav-item">
											<a href="favourites" class="nav-link">
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
											<a href="deposit-funds" class="nav-link active">
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
										<a class="nav-link active" href="deposit-funds">Deposit Funds</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="withdraw-money">Withdraw Money</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="transaction-history">Transaction History</a>
									</li>
								</ul>
							</nav>
														
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="payment-list wallet card-body">
											<h3>Add Wallet</h3>
											<div class="form-group profile-group">
												<div class="input-group">
													<div class="input-group-prepend">
														<button class="btn dol-btn" type="submit">$</button>
													</div>
													<input type="text" class="form-control">										
												</div>
											</div>
															
											<div class="row">
												<div class="col-md-6 mb-2">
													<label class="custom_radio">
														<input type="radio" name="budget" checked="">
														<span class="checkmark"></span> Debit or Credit Card
													</label>
												</div>
												<div class="col-md-6 text-end">
													<p>All major cards accepted</p>
												</div>
												<div class="col-md-8">
													<div class="form-group">
														<label>Card Number</label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Expiry Date</label>
														<input class="form-control" type="text" placeholder="MM/YY">
													</div>
												</div>
												<div class="col-md-8">
													<div class="form-group">
														<label>Cardholder Name</label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>CCV / CVV </label>
														<input class="form-control" id="cvv" type="text">
													</div>
												</div>
												<div class="col-md-12 mb-5">
													<img src="assets/img/card.png" alt="" width="200">
												</div>
												<div class="col-md-12">
													<ul class="card-list">
														<li class="tot-border">
															<label class="custom_radio">
																<input type="radio" name="pyapal">
																<span class="checkmark"></span> Paypal
															</label>
														</li>
														<li class="tot-border">
															<label class="custom_radio">
																<input type="radio" name="pyapal">
																<span class="checkmark"></span> Paytm
															</label>
														</li>
														<li class="tot-border">
															<label class="custom_radio">
																<input type="radio" name="pyapal">
																<span class="checkmark"></span> Skrill
															</label>
														</li>
														<li>
															<label class="custom_radio">
																<input type="radio" name="pyapal">
																<span class="checkmark"></span> Bank Deposit
															</label>
														</li>
													</ul>											
												</div>
											</div>									
										</div>
									</div>
								</div>	
							
								<div class="col-md-8 col-lg-6">
									<div class="card">
										<div class="payment-process card-body">
											<ul>
												<li class="pt-0">
													<label class="total">Deposit Currency</label>
													<div class="sort-by sort-show">
														<span class="sortby-fliter">
															<select class="select">
																<option class="sorting">Dollar</option>
																<option class="sorting">Euro</option>
																<option class="sorting">Yen</option>
															</select>
														</span>
													</div>
												</li>
												<li>
													<label class="total">Deposit Amount</label>
													<div class="input-group dep-amt mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1">$</span>
														</div>
														<input type="text" class="form-control" value="2100" aria-label="Username" aria-describedby="basic-addon1">
													</div>
												</li>
												<li class="tot-border">
													<label class="total">Processing Fee</label>
													<label class="price">$63.30</label>
												</li>
												<li>
													<label class="total">Total</label>
													<label class="price">$2,163.30</label>
												</li>
											</ul>
											<div class="mt-3">
												<a href="#" class="btn pay-btn btn-block" tabindex="0"> Confirm and pay</a>
												<p class="mb-0">You agree to authorize the use of your card for this deposit and future payments.</p>
											</div>
										</div>			
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