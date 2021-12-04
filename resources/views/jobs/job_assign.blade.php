<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header" style="background-color: #404e67; border-bottom: none;padding: 10px !important;">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="page-header-title">
                                        <div class="d-inline">
                                            <h4 class="text-primary">Assign Job List </h4>
                                        </div>
                                    </div>
                                    <div class="page-header-breadcrumb">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="{{url('dashboard')}}"> <i class="feather icon-home text-warning"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{url('users')}}" class="text-success">Assign Job List</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="page-header-breadcrumb">
                                        <button type="button" class="btn btn-primary rounded" id="AddDepartment">
                                            <i class="feather icon-plus"></i>Assign Job
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal code start -->
                        <div class="modal fade" id="AddUser" tabindex="-1" role="dialog"
                            aria-labelledby="AddUserLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary">
                                        <h5 class="modal-title text-white" id="AddUserLabel"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{url('job-assign')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="modal-body">
											<div class="form-group">
                                                <label for="job_id" class="text-primary">Select Job</label>
                                                <select class="form-control" id="job_id" name="job_id">
													<option value="" selected>--select Job--</option>
													@foreach($jobs as $job)
														<option value="{{$job->id}}">{{$job->job_title}}</option>
													@endforeach
												</select>
                                            </div>
											<div class="form-group">
                                                <label for="committee_for" class="text-primary">Select Commitee For</label>
												<select class="form-control" id="committee_for" name="committee_for">
													<option value="" selected>--select--</option>
													<option value="1">Scanning</option>
													<option value="2">Interview</option>
												</select>
                                            </div>
											<div class="form-group">
                                                <label class="text-primary">Select Commitee Members</label>
													<div class="row">
													@foreach($committes as $committe)
														<div class="col-md-1"><input type="checkbox" name="user_ids[]" value="{{$committe->id}}"></div> <div class="col-md-5">{{$committe->name}}</div>
													@endforeach
													</div>
                                            </div>
											<div class="form-group">
												<label class="text-primary">Upload Approval Letter <span style="font-size:10px;">(Upload png/jpeg/jpg)</span></label>
												<label for="approval_doc"
													class="text-primary feather icon-upload border p-1 bg-warning rounded"></label>
												<input style="display: none;" id="approval_doc" name="approval_doc[]" type="file" />
												<!-- <img src="#" id="approval_doc_image" style="display:none" width="80px"
                                            height="80px" /> -->
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save/Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal code end -->
                        <!-- used this area for search -->
						
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th style="width:20%">Job Title</th>
											<th style="width:20%">Commitee For</th>
                                            <th>Members List</th>
											<th style="width:20%">Approval Letter</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($assigns) && count($assigns))
                                        @foreach($assigns as $key=>$assign)
                                        <tr>
                                            <th>{{$assign->job}}</th>
											<td>
											@if($assign->committee_for==1)
												Sccaning	
											@endif
											@if($assign->committee_for==2)
												Interview
											@endif
											</td>
                                            <td>
												@if($assign->members && count($assign->members))
													@foreach($assign->members as $key1=>$mem)
													<span class="badge badge-warning">{{$mem->name}}</span>
													@endforeach
												@else
													ashish
												@endif
											</td>
											<th>
											@if($assign->approval_doc)
												<a class="btn btn-small btn-primary" target="_blank" href="{{url('').'/public'.$assign->approval_doc}}"> view</a>
											@else
												Approval Letter Pending
											@endif
											</th>
                                        </tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="2" class="text-center">No data found</td>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).on("click", ".editDep", function() {
        var user = $(this).data('user');
        $("#AddUserLabel").text("Edit Assign Job");
        $('#AddUser').modal('toggle');
    });
    $(document).on("click", "#AddDepartment", function() {
        $("#AddUserLabel").text("Add Assign Job");
        $('#AddUser').modal('toggle');
    });
    </script>
</div>