<?php $page="designer-project-proposals";?>
@extends('layout.mainlayout')
@section('content')	
<div class="content">
    <div class="container">					
        <div class="row">
            <div class="col-md-6 offset-md-3">							
                <!-- Register Tab Content -->
                <div class="account-content">
                    <div class="align-items-center justify-content-center">
                        <div class="login-right">
                            <div class="login-header text-center">
                                <a href="index.html"><img src="assets/img/logo-01.png" alt="logo" class="img-fluid"></a>
                                <h3>Join Kofejob</h3>
                                <p>Make the most of your professional life</p>
                            </div>
                            <nav class="user-tabs mb-4">
                                <ul role="tablist" class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a href="#developer" data-bs-toggle="tab" class="nav-link active">Designer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#company" data-bs-toggle="tab" class="nav-link">Seller</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="tab-content pt-0">
                                <div role="tabpanel" id="developer" class="tab-pane fade active show">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf					
                                        
                                        <div class="form-group form-focus">
                                            <input id="name" type="name"    
                                            @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                            class="form-control floating">
                                            <label class="focus-label">User Name</label>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                        <div class="form-group form-focus">
                                            <input id="email" type="email"
                                             class="form-control floating" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            <label class="focus-label">Email</label>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                      
                                        <div class="form-group form-focus">
                                            <input id="password"  type="password" 
                                            @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" class="form-control floating">
                                            <label class="focus-label">Password</label>


                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                       
                                        <div class="form-group form-focus mb-0">
                                            <input id="password-confirm" type="password" class="form-control floating" name="password_confirmation" required autocomplete="new-password">
                                            <label class="focus-label">Confirm Password</label>
                                        </div>	
                                        <div class="dont-have">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rem_password">
                                                <span class="checkmark"></span> You agree to the Kofejob <a href="privacy-policy.html">User Agreement, Privacy Policy,</a> and <a href="privacy-policy.html">Cookie Policy</a>.
                                            </label>
                                        </div>
                                        <div>
                                            <input type="text"
                                            id="role" hidden="true" name="role" value="designer"/>
                                        </div>

                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Register</button>	
                                        <div class="login-or">
                                            <p>Or login with</p>
                                        </div>
                                        <div class="row social-login">
                                            <div class="col-4">
                                                <a href="#" class="btn btn-twitter btn-block"> Twitter</a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#" class="btn btn-facebook btn-block"> Facebook</a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#" class="btn btn-google btn-block"> Google</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-6 text-start">
                                            <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                        </div>
                                        <div class="col-6 text-end dont-have">Already on Kofejob <a href="login.html">Click here</a></div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" id="company" class="tab-pane fade">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf					
                                        
                                        <div class="form-group form-focus">
                                            <input id="name" type="name"    
                                            @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                            class="form-control floating">
                                            <label class="focus-label">User Name</label>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                        <div class="form-group form-focus">
                                            <input id="email" type="email"
                                             class="form-control floating" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            <label class="focus-label">Email</label>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                      
                                        <div class="form-group form-focus">
                                            <input id="password"  type="password" 
                                            @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" class="form-control floating">
                                            <label class="focus-label">Password</label>


                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                       
                                        <div class="form-group form-focus mb-0">
                                            <input id="password-confirm" type="password" class="form-control floating" name="password_confirmation" required autocomplete="new-password">
                                            <label class="focus-label">Confirm Password</label>
                                        </div>	
                                        <div class="dont-have">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rem_password">
                                                <span class="checkmark"></span> You agree to the Kofejob <a href="privacy-policy.html">User Agreement, Privacy Policy,</a> and <a href="privacy-policy.html">Cookie Policy</a>.
                                            </label>
                                        </div>
                                        <div>
                                            <input type="text"
                                            id="role" hidden="true" name="role" value="seller"/>
                                        </div>

                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Register</button>	
                                        <div class="login-or">
                                            <p>Or login with</p>
                                        </div>
                                        <div class="row social-login">
                                            <div class="col-4">
                                                <a href="#" class="btn btn-twitter btn-block"> Twitter</a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#" class="btn btn-facebook btn-block"> Facebook</a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#" class="btn btn-google btn-block"> Google</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-6 text-start">
                                            <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                        </div>
                                        <div class="col-6 text-end dont-have">Already on Kofejob <a href="login.html">Click here</a></div>
                                        </div>
                                    </form>
                                </div>
                            </div>										
                        </div>
                    </div>
                </div>
                <!-- /Register Tab Content -->
                    
            </div>
        </div>
    </div>
</div>

@endsection