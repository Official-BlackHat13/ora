<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    @if(Auth::user()->role==2)
                    <div class="card">
                        <div class="card-header bg-primary" style="border-bottom: none;padding: 10px !important;">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="page-header-title">
                                        <div class="d-inline">
                                            <h4 class="text-light">Job List</h4>
                                        </div>
                                    </div>
                                    <div class="page-header-breadcrumb">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="{{url('dashboard')}}"> <i class="feather icon-home text-warning"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!" class="text-default">Jobs</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{url('jobs')}}" class="text-success">Jobs</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="alert alert-success" id="alert-success" style="display:none;">

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <button type="button" class="btn btn-primary rounded" id="AddJobs">
                                            <i class="feather icon-plus"></i>Add Jobs
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- used this area for search -->

                        <div class="card-block">
                            <div class="table-responsive">
                                <table id="dom-jqry" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <!--<th>S.No</th>-->
                                            <th style="word-wrap: break-word">Project</th>
                                            <th>Job Title</th>
                                            <th>Job Category</th>
                                            <th>Job Type</th>
                                            <th style="width:3%;">Created By</th>
                                            <th style="width:3%;">Status</th>
											<th style="width:10%;">Created At</th>
											<th style="width:10%;">Last Date</th>
                                            <th style="width:13%;">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($jobs) && count($jobs))
                                        @foreach($jobs as $key=>$job)
                                        <tr>
                                            <!--<th>{{$key+1}}</th>-->
                                            <td style="width:20%;white-space: unset;">{{$job->project}}</td>
                                            <td>{{$job->job_title}}</td>
                                            <td>{{$job->job_category}}</td>
                                            <td>{{$job->position_type}}</td>
                                            <td>{{$job->created_name}}</td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="js-small jobStatus" id="jobStatus{{$key}}" data-job="{{$job->id}}" {{$job->status==1 ? "checked" :""}}>
                                                    <label class="custom-control-label" for="jobStatus{{$key}}"></label>
                                                </div>
                                            </td>
											<td>{{date('d-m-Y',strtotime($job->created_at))}}</td>
											<td>{{date('d-m-Y',strtotime($job->last_date))}}</td>
                                            <td><span class="btn btn-primary btn-sm rounded editJob" title="Edit" data-job="{{$job}}"><i class="feather icon-edit"></i></span>
                                            <span class="btn btn-primary btn-sm rounded viewJob" title="View" data-job="{{$job}}"><i class="feather icon-eye"></i></span>
                                        </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="9" class="text-center">No data found</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>  
                    @else
                        <script>
                            window.location.href = "{{url('/dashboard')}}";
                        </script>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- modal code start -->
    @include('jobs.add_edit_modal')                  
    @include('jobs.job_view_modal')
    <!-- modal code end -->
    <script>
        $(document).ready(function(){
            $(".jobStatus").on("change",function(){
                var id= $(this).data('job');
                $.ajax({
                    type:'GET',
                    url:"{{url('/job-change-status')}}",
                    data:{id:id},
                    success:function(data) {
                        $("#alert-success").text(data.result);
                        $("#alert-success").show();
                        setTimeout(function() { 
                            $("#alert-success").fadeTo(2000, 500).slideUp(500, function(){
                                $("#alert-success").hide();
                                });    
                            }, 500);  
                    }
                });
            })
            // for hide the add or update message
            setTimeout(function() {
                $(".alert").hide().fadeOut(500);
            }, 2000);
        });
    </script>
</div>