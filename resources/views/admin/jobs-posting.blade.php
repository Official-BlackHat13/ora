<link href="/public/files/assets/css/home.css" rel="stylesheet">
<link href="/public/files/assets/css/basictable.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="/public/files/assets/js/jquery.basictable.js"></script>

<div class="pcoded-content main-bg">
		<div class="container-fluid">	
                <div class="row p-l-10 p-r-10 header">
					<div class="col-lg-6">
							<a href="https://dic.gov.in" target="new"><h2> Digital India Corporation</h2></a>
							
                            <!--<img src="{{url('public')}}/files/assets/images/logo.png" alt="logo.png"> -->
					</div>
				
					<div class="col-lg-6 d-none d-lg-block text-lg-right">
						<span ><img src="{{url('public')}}/files/assets/images/logos.png" alt="logos" title="logos"></span>
						
					</div>
				</div>
				
			</div>	
		<div class="subheader">
				
				<h3 class="text-light"> Online Recruitment Application</h3>
		</div>


    <div class="pcoded-inner-content">
        
		
		<div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
				
				
					
					<div class="container-fluid">	
						<div class="row m-t-20">
						

                        <div class="col-lg-8 ">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h4>Job Opening(s)</h4>
                                </div>
                                
                                <div class="card-block">
                                    <table id="dom-jqry" class="table table-striped table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
												<th>Division</th>
                                                <th >Project</th>
                                                <th>Job Title</th>
                                                <th>Job Category</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($jobs) && count($jobs))
                                            @foreach($jobs as $key=>$job)
                                            <tr>
                                                <td>{{$key+1}}</td>
												<td>{{$job->division ? $job->division : $job->dep}}</td>
                                                <td style="white-space: unset;">{{$job->project}}</td>
                                                <td>{{$job->job_title}}</td>
                                                <td>{{$job->job_category}}</td>
                                                <td><span class="btn btn-primary btn-sm rounded viewJob" title="Job Description" data-job="{{$job}}"><i class="feather icon-eye"></i></span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5" class="text-center">no new job post available now..</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
								</div>
                            </div>
						<div class="col-lg-4">
								<section class="login-block">

								<div class="container-fluid">
									<div class="row">
										<div class="col-sm-12">
											@if (session('status'))
												
												<div class="mb-4 font-medium text-sm text-green-600">
													{{ session('status') }}
												</div>
											@endif
											<form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
												@csrf
											   
												<div class="auth-box card">
												
													<div class="card-block">
														<div class="row m-b-20">
															<div class="col-md-12">
																<h3 class="text-center txt-primary">Sign In</h3>
															</div>
														</div>
														@if(isset($errors))
														<div class="row m-b-20">
															<div class="col-md-12 alert-danger">
																<h5 class="text-center ">{{$errors->first()}}</h5>
															</div>
														</div>
														@endif
														@if(session('success'))
														<div class="row m-b-20">
															<div class="col-md-12 alert-info">
																<h5 class="text-center ">{{session('success')}}</h5>
															</div>
														</div>
														@endif
														<div class="form-group form-primary">
															<input type="email" name="email" :value="old('email')" required autofocus  class="form-control"  placeholder="Email">
															<span class="form-bar"></span>
														</div>
														<div class="form-group form-primary">
															<input type="password" name="password" required autocomplete="current-password" class="form-control" required="" placeholder="Password">
															<span class="form-bar"></span>
														</div>
														<div class="row m-t-25 text-left">
															<div class="col-12">
																<div class="checkbox-fade fade-in-primary">
																	<label>
																		<input type="checkbox" value="">
																		<span class="cr"><i
																				class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
																		<span class="text-inverse">Remember me</span>
																	</label>
																</div>
																<div class="forgot-phone text-right f-right">
																	@if (Route::has('password.request'))
																		<a href="{{ route('password.request') }}" class="text-right f-w-600">
																			{{ __('Forgot your password?') }}
																		</a>
																	@endif
																</div>
															</div>
														</div>
														<div class="row m-t-30">
															<div class="col-md-12">
																<button type="submit"
																	class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('Login') }}</button>
															</div>
														</div>
														<p class="text-inverse text-left">Don't have an account?
															<a  href="{{ route('register') }}"> <b class="f-w-600">Register here </b></a>
														</p>
													</div>
													
												
													
												</div>
												
											</form>
										</div>
									</div>
								</div>
							</section>
						</div>	
					</div>	
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
			
		
		<div class="container-fluid p-50" id="contactus">	
			<div  class="row">
				<div class="col-sm-4 col-md-4">
					<h5 class="text-primary m-b-10"><i class="fa fa-building"></i> Research Development Office</h5>
					<p class="p-indent"> <i class="fa fa-map-marker text-primary"></i> Electronics Niketan Annexe,<br />6 CGO Complex Lodhi Road, New Delhi-110003</p>

				</div>
				<div class="col-sm-4 col-md-4">
					<h5 class="text-primary m-b-10"><i class="fa fa-building"></i> Registered Office </h5>
					<p class="p-indent"><i class="fa fa-map-marker text-primary"></i> 4th Floor, Samruddhi Venture Park,<br />Central MIDC Road #2, Andheri (East), Mumbai</p>
				</div>
				<div class="col-sm-4 col-md-4">
					<h5 class="text-primary m-b-10"><i class="fa fa-address-book"></i> Contact Us </h5>
					<p >
					<i class="fa fa-phone-square text-primary"></i> Delhi: +91-11-24360199 / 24301756<br />
					<i class="fa fa-phone-square text-primary"></i> Mumbai: +91-22-2831-2930/ 31</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">	
			<div class="row p-l-10 p-r-10 footer">	
				<div class="col-md-6 text-left">
				<h6 >Copyright © Digital India Corporation</h6>
				</div>
				<div class="col-md-6 text-right d-none d-md-block">
				<h6 >This site can be best viewed on Google Chrome</h6>
				</div>
			</div>
		</div>
		
    </div>
    
	
	
    <!-- modal code start -->                 
    @include('jobs.job_view_modal')
    <!-- modal code end -->
	

</div>

	<script type="text/javascript">
    $(document).ready(function() {
      $('.table').basictable();
    });
  </script>