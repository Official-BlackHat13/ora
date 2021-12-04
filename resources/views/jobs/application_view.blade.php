<!-- modal code start -->
<style>
    #job_description {
        white-space: unset;
        font-size: 13px;
        text-align: left;
    }

    ul {
        list-style-type: disc;
    }
</style>
<div class="modal fade" id="ViewJobDescription" tabindex="-1" role="dialog" aria-labelledby="AddBoxesLabel"
    aria-hidden="true" data-backdrop="static"  data-keyboard="false">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <span class="text-center" id="t_division" style="background: #e87948; color:#fff;"></span>
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="AddBoxesLabel">Job Details</h5>
                <span> Last Date of Application: <span id="last_date_span"></span></span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="dom-jqry" class="container-fluid">
                    <div class="row">
                        <div class="mt-1 col-6 col-md-3 font-weight-bold"> Name of Applicant</div>
                        <div class="mt-1 col-6 col-md-3" id="t_job_title"></div>
                        <div class="mt-1 col-6 col-md-3 font-weight-bold">Father's Name</div>
                        <div class="mt-1 col-6 col-md-3" id="t_job_category"></div>
                        <div class="mt-1 col-6 col-md-3 font-weight-bold"> Mother's Name</div>
                        <div class="mt-1 col-6 col-md-3" id="t_job_category"></div>
                    </div>
                    
                    <div class="row">
                        <div class="mt-1 col-6 col-md-3 font-weight-bold"> Project</div>
                        <div class="mt-1 col-6 col-md-3" id="t_project"></div>
                        <div class="mt-1 col-6 col-md-3 font-weight-bold">Travel Required</div>
                        <div class="mt-1 col-6 col-md-3" id="t_is_travel"></div>
                        <div class="mt-1 col-6 col-md-3 font-weight-bold"> Location</div>
                        <div class="mt-1 col-6 col-md-3" id="t_location"></div>
                        <div class="mt-1 col-6 col-md-3 font-weight-bold">Position Type</div>
                        <div class="mt-1 col-6 col-md-3" id="t_position_type"></div>
                        <div class="mt-1 col-6 col-md-3 font-weight-bold"> Salary(Monthly)</div>
                        <div class="mt-1 col-6 col-md-3" id="t_salary"></div>
                        <div class="mt-1 col-6 col-md-3 font-weight-bold">No. of Post</div>
                        <div class="mt-1 col-6 col-md-3" id="t_total_post"></div>
                        <div class="mt-1 col-6 col-md-3 font-weight-bold"> Qualification</div>
                        <div class="mt-1 col-6 col-md-3" id="t_qualification"></div>
                        <div class="mt-1 col-6 col-md-3 font-weight-bold"> Experience(Years)</div>
                        <div class="mt-1 col-6 col-md-3" id="t_experience"></div>

                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 font-weight-bold text-center"
                            style="background: #e87948; color:#fff;">Job Details</div>
                        <div class="col-12 col-md-12" id="job_description"></div>
                    </div>

                    </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    @if(!Auth::user())
                    <a href="{{url('register')}}" class="btn btn-primary float-right">Apply<a>
                            @endif
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal code end -->
<script type="text/javascript">
    $(document).on("click", ".viewJob", function () {
        // alert("SDds");
        var job = $(this).data('job');
        console.log(job);
        $("#t_job_title").text(job.job_title);
        job.division ? $("#t_division").text("Division:" + job.division) : '';
        job.band ? $("#may_be_hide").show(): $("#may_be_hide").hide();
	$("#t_band").text(job.band)
        $("#t_report_to").text(job.report_to);
        $("#t_job_category").text(job.job_category);
        $("#t_project").text(job.project);
        $("#t_is_travel").text(job.is_travel ? "YES" : "NO");
        $("#t_location").text(job.location);
        $("#t_position_type").text(job.position_type);
        $("#t_qualification").text(job.qualification);
        $("#t_salary").text(job.salary);
        $("#t_total_post").text(job.total_post);
        $("#t_experience").text(job.experience);
        $("#t_job_id").text(job.id);
        $("#last_date_span").text(job.last_date);
        $("#job_description").html(job.job_description);
        $('#ViewJobDescription').modal('toggle');
    });
</script>