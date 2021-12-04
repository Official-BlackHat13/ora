<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-yellow update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">Total Jobs</h4>
                                            <h6 class="text-white m-b-0">{{ count($jobs) ? count($jobs) : 0}}</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <canvas id="update-chart-1" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-9 col-xs-9 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Job List</h5>
                                    <!--<div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                        </ul>
                                    </div>-->
                                </div>
                                <div class="card-block">
                                    <table id="dom-jqry" class="table table-striped table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th style="white-space:unset;">Project</th>
                                                <th>Job Title</th>
                                                <th>Job Category</th>
                                                <th>Position Type</th>
                                                <th style="width:18%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($jobs) && count($jobs))
                                            @foreach($jobs as $key=>$job)
                                            <tr>
                                                <th>{{$key+1}}</th>
                                                <td style="white-space:unset;">{{$job->project}}</td>
                                                <td>{{$job->job_title}}</td>
                                                <td>{{$job->job_category}}</td>
                                                <td>{{$job->position_type}}</td>
                                                <td>@if(!in_array($job->id, $applied))
                                                        {{-- <span class="btn btn-primary btn-sm rounded apply" title="Apply job" data-job="{{$job}}">Apply</span> --}}
                                                        <span class="btn btn-primary btn-sm rounded applynew" title="Apply job" data-job="{{$job}}">Apply</span>
                                                    @endif
                                                <span class="btn btn-primary btn-sm rounded viewJob" title="Job Description" data-job="{{$job}}"><i class="feather icon-file-text"></i></span>
                                            </td>
                                            </tr>
                                            @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6" class="text-center">No data found</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <h5> Applied Jobs</h5>
                            <div class="card-block">
                                    <table id="dom-jqry" class="table table-striped table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th style="white-space:unset;">Project</th>
                                                <th>Job Title</th>
                                                <th>Job Category</th>
                                                <th>Position Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($candidate_apply) && count($candidate_apply))
                                            @foreach($candidate_apply as $key=>$job)
                                            <tr>
                                                <th>{{$key+1}}</th>
                                                <td style="white-space:unset;">{{$job->project}}</td>
                                                <td>{{$job->job_title}}</td>
                                                <td>{{$job->job_category}}</td>
                                                <td>{{$job->position_type}}</td>
                                                <td><a href="{{url('receive-application/'.$job->id)}}" title="view applied job" class="btn btn-primary btn-sm rounded applied"><i class="feather icon-eye"></i></a> 
											<!--	<a href="{{url('edit-application/'.$job->id)}}" title="edit applied job" class="btn btn-primary btn-sm rounded applied"><i class="feather icon-edit"></i></a> -->
                                            </td>
                                            </tr>
                                            @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6" class="text-center">Still you have not applied for any job</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <!-- modal code start -->                 
    @include('jobs.job_view_modal')
    {{-- @include('jobs.job_apply_modal') --}}
    {{-- @include('jobs.job_apply_modal_new') --}}
    <!-- modal code end -->
</div>