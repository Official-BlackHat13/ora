<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Rejected Candidates(in Scanning)</h5>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive dt-responsive">
                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr class="bg-warning">
                                            <th>S.No</th>
                                            <th>Job Description</th>
                                            <th>Candidate Detail</th>
                                            <th>Apply Date</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($apps) && count($apps))
                                        @foreach($apps as $key=>$app) 
                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <td style="width:60%;white-space: unset;">{{$app->jobs->job_title}}<span style="display: block;">{{$app->jobs->project}}</span><span style="display: block;">{{$app->jobs->qualification}}</span></td>
                                            <td>{{$app->candidate->name}}<span style="display: block;">{{$app->candidate->email}}</span><span style="display: block;">{{$app->candidate->mobile}}</span></td>
                                            <td>{{date('d-M-Y',strtotime($app->created_at))}}</td>
                                            <!-- <td>
                                                <div class="switch-toggle switch-3 switch-candy">
                                                    <input id="select{{$app->id}}" data-job_id="{{$app->job_id}}" data-user_id="{{$app->user_id}}" name="status{{$app->id}}" value="1" class="checkbox" type="radio" <?php echo $app->status==1 ? "checked":''; ?> />
                                                    <label for="select{{$app->id}}" onclick="">Select</label>
                                                    <input id="na{{$app->id}}" name="status{{$app->id}}" data-job_id="{{$app->job_id}}" data-user_id="{{$app->user_id}}" type="radio" value="0" class="checkbox" <?php echo $app->status==0 ? "checked":'';?> />
                                                    <label for="na{{$app->id}}" class="disabled" onclick="">N/A</label>
                                                    <input id="reject{{$app->id}}" name="status{{$app->id}}" data-user_id="{{$app->user_id}}" data-job_id="{{$app->job_id}}" type="radio" value="2" class="checkbox" <?php echo $app->status==2 ? "checked":'';?>/>
                                                    <label for="reject{{$app->id}}" onclick="">Reject</label>
                                                </div>
                                            </td> -->
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