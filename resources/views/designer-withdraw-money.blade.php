<?php $page="designer-withdraw-money";?>
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
										<a class="nav-link active" href="designer-withdraw-money">Withdraw Funds</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="designer-invoices"> Invoices</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="designer-transaction-history"> Transaction History</a>
									</li>
								</ul>
							</nav>	
						
							<div class="row">
								<div class="col-md-12">
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
											<label class="custom_radio me-4">
												<input type="radio" name="budget" value="Yes" checked="">
												<span class="checkmark"></span> Paypal
											</label>
											<label class="custom_radio">
												<input type="radio" name="budget" value="Yes">
												<span class="checkmark"></span> Card
											</label>
											<div class="bootstrap-tags text-start ps-0">
												<span class="badge badge-pill badge-skills">$50</span> 
												<span class="badge badge-pill badge-skills">$100</span> 
												<span class="badge badge-pill badge-skills">$150</span> 
											</div>
															
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="card_number">Card Number</label>
														<input class="form-control" id="card_number" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="first_name">First Name</label>
														<input class="form-control" id="first_name" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="last_name">Last Name</label>
														<input class="form-control" id="last_name" type="text">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="expiry_on">Expires on</label>
														<input class="form-control" id="expiry_on" type="text">
													</div>
												</div>
												<div class="col-md-8">
													<div class="form-group">
														<label for="cvv">CVV (Security Code) </label>
														<input class="form-control" id="cvv" type="text">
													</div>
												</div>
												<div class="col-md-8 btn-pad">
													<a href="#" class="btn-primary click-btn">Continue</a>
												</div>
											</div>
										</div>			
									</div>										
								</div>	
															
								<div class="col-md-6 mb-2">	
									<div class="card">						
										<div class="wallet-detail card-body">
											<div class="wallet-title pt-0 ps-0">
												<h3 class="mb-0">Wallet</h3>
											</div>
											<div class="wallet-bal">
												<span class="dol-circle"><i class="fa fa-dollar-sign" aria-hidden="true"></i></span>
												<div class="wallet-amt">
													<p>Available Balance</p>
													<h3 class="mb-0">$250.60 </h3>
												</div>
											</div>
											<div class="wallet-content">
												<div class="wallet-pay">
													<p>Total Credit</p>
													<h3 class="mb-0">$500.00</h3>
												</div>
												<div class="wallet-pay">
													<p>Total Credit</p>
													<h3 class="mb-0">$500.00</h3>
												</div>
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