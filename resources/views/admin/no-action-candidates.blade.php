<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-header bg-warning primary">
                                    <h5>Received Applications</h5>
                                        <?php
						$job_id_excel='';
						if(isset($_GET['job_id'])){
						$job_id_excel= $_GET['job_id'];
					} ?>
                                        <a href="{{url('export-to-excel?job_id=').$job_id_excel}}" class="btn btn-primary btn-sm"
                                        onclick="printExcel();" style="float: right;">Export Excel</a>
                                        <span class="btn btn-light btn-sm"
                                        onclick="printDiv();" style="float: right;">Export</span>
                                </div>
                                <div class="card-header ">
                                    <form action="{{url('received-applications')}}" class="row" method="get"
                                        id="get_candidate">
                                        <label class="col-md-2">Select Job</label>
                                        <select name="job_id" id="job_id" class="form-control col-md-5">
                                            <option value="" @if(request()->get('job_id')=='') selected @endif >--Select
                                                Job-</option>
                                            @foreach($jobs as $job)
                                            <option value="{{$job->id}}" @if(request()->get('job_id')==$job->id)
                                                selected @endif @if($job->last_date >= date('Y-m-d')) class="bg-success"
                                                @else class="bg-warning" @endif>{{$job->job_title}} ({{$job->project}})
                                            </option>
                                            @endforeach
                                        </select>

                                    </form>

                                </div>
                                <div class="card-block" id="printable">
                                    <div class="table-responsive dt-responsive">
                                        <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr class="bg-warning text-primary">
                                                    <th>S.No</th>
                                                    <th>Applyed Date</th>
													<th>Name</th>
                                                    <th>Candidate Email</th>
													<th>Mobile</th>
                                                    <th>Detail</th>
                                                    @if(Auth::user()->role!=2 && Auth::user()->role!=4)<th>Action</th>@endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(isset($apps) && count($apps))
                                                @foreach($apps as $key=>$app)
												<?php $candi_data = json_decode($app->user_data);
												//echo "<pre>";
												//print_r($candi_data);
												?>
                                                <tr>
                                                    <th>{{$key+1}}</th>
                                                    <td>{{date('d-M-Y',strtotime($app->created_at))}}</td>
													<td>{{$candi_data->first_name ." ".$candi_data->middle_name." ".$candi_data->last_name }}</td>
                                                    <td>{{$candi_data->email}}</td>
                                                    <td>{{$candi_data->mobile}}</td>
                                                    <td><a target="_blank"  href="{{url('receive-application/'.$app->id)}}"
                                                            title="Candidate Detail"
                                                            class="btn btn-primary btn-sm rounded applied"><i
                                                                class="feather icon-eye"></i></a></td>
                                                    @if(Auth::user()->role!=2 && Auth::user()->role!=4)<td>
                                                        <div class="switch-toggle switch-3 switch-candy">
                                                            <input id="select{{$app->id}}"
                                                                data-job_id="{{$app->job_id}}"
                                                                data-user_id="{{$app->user_id}}"
                                                                name="status{{$app->id}}" value="1" class="checkbox"
                                                                type="radio" <?php echo $app->status==1 ? "checked":'';
                                                            ?> />
                                                            <label for="select{{$app->id}}" onclick="">Shortlist</label>
                                                            <input id="na{{$app->id}}" name="status{{$app->id}}"
                                                                data-job_id="{{$app->job_id}}"
                                                                data-user_id="{{$app->user_id}}" type="radio" value="0"
                                                                class="checkbox" <?php echo $app->status==0 ?
                                                            "checked":'';?> />
                                                            <label for="na{{$app->id}}" class="disabled"
                                                                onclick="">N/A</label>
                                                            <input id="reject{{$app->id}}" name="status{{$app->id}}"
                                                                data-user_id="{{$app->user_id}}"
                                                                data-job_id="{{$app->job_id}}" type="radio" value="2"
                                                                class="checkbox" <?php echo $app->status==2 ?
                                                            "checked":'';?>/>
                                                            <label for="reject{{$app->id}}" onclick="">Reject</label>
                                                        </div>
                                                    </td>@endif
                                                </tr>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('.checkbox').on('change', function () {
        var job_id = $(this).data('job_id');
        var user_id = $(this).data('user_id');
        var status = $(this).val();
        $.ajax({
            type: 'GET',
            url: "{{url('/application-change-status')}}",
            data: { job_id: job_id, status: status, user_id: user_id },
            success: function (data) {
                alert("Status Change Successfully");
                location.reload();
            }
        });
    });
    $('#job_id').on('change', function () {
        $('#get_candidate').submit();
    })
    function printDiv() {
        var printContents = document.getElementById("printable").innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>