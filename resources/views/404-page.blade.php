<?php $page="404-page";?>
@extends('layout.mainlayout')
@section('content')		

<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Page Not Found -->
							<div class="empty-content text-center">
								<img src="assets/img/404.png" alt="logo" class="img-fluid">
								<h2>Page not <span class="orange-text">found</span></h2>
								<p>Oops! Looks like you followed a bad link.</p>
								<p>If you think this is a problem with us, please tell us.</p>
								<div class="btn-item">
									<a class="btn get-btn" href="index">GO TO HOME</a>
									<a class="btn courses-btn" href="#">BACK</a>
								</div>
							</div>
							<!-- / Page Not Found -->
								
						</div>
					</div>
				</div>
			</div>					
			<!-- /Page Content -->

        </div>
		<!-- /Main Wrapper -->
@endsection