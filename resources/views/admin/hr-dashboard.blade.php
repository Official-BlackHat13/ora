<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    @if(Auth::user()->role == 2)
                    <div class="row">

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-yellow update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">Total Post</h4>
                                            <h6 class="text-white m-b-0"><a class="text-white" href="{{url('jobs')}}">{{ count($jobs) ? count($jobs) : 0}}</a></h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <canvas id="update-chart-1" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                                @if(isset($jobs) && count($jobs))
									<div class="card-footer">
										<p class="text-white m-b-0"><span class="text-primary">Latest Job:</span> {{$jobs[0]->job_title}}</p> 
									</div>
									@endif
                            </div>
                        </div>


                        <div class="col-xl-9 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Latest 5 Job Posting</h5>
                                    <!-- <span class="text-muted">For more details,  <a href="{{url('jobs')}}">click here</a>.</span> -->
                                    <div class="card-header-right">
                                        <!--<ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i>
                                            </li>
                                        </ul>-->
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive dt-responsive">
                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr class="bg-warning">
                                            <th>S.No</th>
                                            <th style="white-space: unset;">Project</th>
                                            <th>Job Title</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($jobs) && count($jobs))
                                        @foreach($jobs as $key=>$job)
                                        @if($key<5)
                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <td style="white-space: unset;">{{$job->project}}</td>
                                            <td>{{$job->job_title}}</td>
                                            <td>{{$job->created_at}}</td>
                                            <td>
                                            <span class="btn btn-primary btn-sm rounded viewJob" data-job="{{$job}}"><i class="feather icon-eye"></i></span>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">No data found</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-12 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Latest Received Applications</h5>
                                    <div class="card-header-right">
                                        <!--<ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i>
                                            </li>
                                        </ul> -->
										<a class="btn btn-small btn-primary" href="{{url('received-applications')}}">more</a>
                                    </div>
                                </div>
                                <div class="card-block">
                               
                                     <div class="table-responsive">
                                        <table class="table table-hover  table-borderless">
                                            <thead>
                                                <tr>
                                                    <!--<th>
                                                        <div class="chk-option">
                                                            <div class="checkbox-fade fade-in-primary">
                                                                <label class="check-task">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i
                                                                            class="cr-icon feather icon-check txt-default"></i>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        Application
                                                    </th>-->
                                                    <th>Name</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th>Applied</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<!--<td>
                                                        <div class="chk-option">
                                                            <div class="checkbox-fade fade-in-primary">
                                                                <label class="check-task">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i
                                                                            class="cr-icon feather icon-check txt-default"></i>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="d-inline-block align-middle">
                                                            <h6>Able Pro</h6>
                                                            <p class="text-muted m-b-0">Powerful
                                                                Admin Theme</p>
                                                        </div>
                                                    </td>-->
												
                                                
												@foreach($recived_application as $application)
												<tr>
												<?php $candi_data = json_decode($application->user_data);
												//echo "<pre>";
												//print_r($candi_data);
												?>
                                                    <td>{{$candi_data->first_name ." ".$candi_data->middle_name." ".$candi_data->last_name }}</td>
                                                    <td>{{$candi_data->mobile}}</td>
                                                    <td>{{$candi_data->email}}</td>
                                                    <td>{{date('d-m-Y',strtotime($application->created_at))}}</td>
                                                </tr>
												@endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @else
                        Auth::logout();
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @include('jobs.job_view_modal')
</div>