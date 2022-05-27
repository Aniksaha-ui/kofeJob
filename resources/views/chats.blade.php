<?php $page="chats";?>
@extends('layout.mainlayout')
@section('content')		


<!-- Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 back-text">
							<a href="dashboard" class="btn btn-primary back-btn"><i class="fa fa-chevron-left"></i> Back </a>
						</div>
						<div class="col-md-12">
							
							<div class="chat-window">
							
								<!-- Chat Left -->
								<div class="chat-cont-left">
									<div class="chat-header">
										<form class="chat-search">
											<div class="input-group">
												<div class="input-group-prepend">
													<i class="fas fa-search icon-circle"></i>
												</div>
												<input type="text" class="form-control rounded-pill" placeholder="Search">
											</div>
										</form>
									</div>
									<div class="chat-users-list">
										<div class="chat-scroll">
											<a href="javascript:void(0);" class="media d-flex">
												<div class="media-img-wrap flex-shrink-0">
													<div class="avatar avatar-away">
														<img src="assets/img/img-02.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body flex-grow-1">
													<div>
														<div class="user-name">Andrew Glover </div>
														<div class="user-last-chat">It seems logical that the </div>
													</div>
													<div>
														<div class="last-chat-time block">05 min</div>
														<div class="badge bgg-yellow badge-pill">11</div>
													</div>
												</div>
											</a>
											<a href="javascript:void(0);" class="media read-chat active d-flex">
												<div class="media-img-wrap flex-shrink-0">
													<div class="avatar avatar-online">
														<img src="assets/img/img-03.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
												</div>
												<div class="media-body flex-grow-1">
													<div>
														<div class="user-name">Mickey Bernier </div>
														<div class="user-last-chat">Lorem Ipsum is simply dummy text</div>
													</div>
													<div>
														<div class="last-chat-time block">05 Min</div>
														<div class="badge bgg-yellow badge-pill">5</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- /Chat Left -->
							
								<!-- Chat Right -->
								<div class="chat-cont-right">
									<div class="chat-header">
										<a id="back_user_list" href="javascript:void(0)" class="back-user-list">
											<i class="material-icons">chevron_left</i>
										</a>
										<div class="media d-flex">
											<div class="media-img-wrap flex-shrink-0">
												<div class="avatar avatar-online">
													<img src="assets/img/img-05.jpg" alt="User Image" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body flex-grow-1">
												<div class="user-name">Doris Brown </div>
												<div class="user-status">online</div>
											</div>
										</div>
										<div class="chat-options">
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#voice_call">
												<i class="material-icons icon-grey">local_phone</i>
											</a>
											<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#video_call">
												<i class="material-icons icon-grey">videocam</i>
											</a>
											<a href="javascript:void(0)">
												<i class="material-icons">more_vert</i>
											</a>
										</div>
									</div>
									<div class="chat-body">
										<div class="chat-scroll">
											<ul class="list-unstyled">
												<li class="media received d-flex">
													<div class="avatar flex-shrink-0">
														<img src="assets/img/img-02.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
													<div class="media-body flex-grow-1">
														<div class="msg-box">
															<div>
																<p>Good morning.....</p>
																<ul class="chat-msg-info">
																	<li>
																		<div class="chat-time">
																			<span>10:00 AM</span>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</li>
												<li class="media sent d-flex">
													<div class="avatar flex-shrink-0">
														<img src="assets/img/img-05.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
													<div class="media-body flex-grow-1">
														<div class="msg-box">
															<div>
																<p>Good morning, How are you? What about our next meeting?</p>
																<ul class="chat-msg-info">
																	<li>
																		<div class="chat-time">
																			<span>10:02 AM</span>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</li>
												<li class="media received d-flex">
													<div class="avatar flex-shrink-0">
														<img src="assets/img/img-02.jpg" alt="User Image" class="avatar-img rounded-circle">
													</div>
													<div class="media-body flex-grow-1">
														<div class="msg-box">
															<div>
																<p>I am good thanks</p>
																<ul class="chat-msg-info">
																	<li>
																		<div class="chat-time">
																			<span>10:03 AM</span>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</li>												
											</ul>
										</div>
									</div>
									<div class="chat-footer">
										<div class="input-group">
											<div class="avatar">
												<img src="assets/img/img-05.jpg" alt="User Image" class="avatar-img rounded-circle">
											</div>
											<input type="text" class="input-msg-send form-control" placeholder="Reply...">
											<div class="btn-file btn">
												<i class="far fa-grin fa-1x"></i>
											</div>
											<div class="btn-file btn">
												<i class="fa fa-paperclip"></i>
												<input type="file">
											</div>
											<button type="button" class="btn btn-primary msg-send-btn rounded-pill"><i class="fab fa-telegram-plane"></i></button>
										</div>
									</div>
								</div>
								<!-- /Chat Right -->
								
							</div>				
						</div>													
					</div>					
				</div>
			</div>	
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
		<!-- Voice Call Modal -->
		<div class="modal fade call-modal" id="voice_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<!-- Outgoing Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img alt="User Image" src="assets/img/img-05.jpg" class="call-avatar">
										<h4>Darren Elder</h4>
										<span>Connecting...</span>
									</div>							
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-bs-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="voice-call" class="btn call-item call-start"><i class="material-icons">call</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Outgoing Call -->
					</div>
				</div>
			</div>
		</div>
		<!-- /Voice Call Modal -->
		
		<!-- Video Call Modal -->
		<div class="modal fade call-modal" id="video_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
					
						<!-- Incoming Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img class="call-avatar" src="assets/img/img-05.jpg" alt="User Image">
										<h4>Darren Elder</h4>
										<span>Calling ...</span>
									</div>							
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-bs-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="video-call" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Incoming Call -->
						
					</div>
				</div>
			</div>
		</div>
		<!-- Video Call Modal -->
@endsection