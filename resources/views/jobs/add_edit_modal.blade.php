<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<div class="modal fade" id="AddBoxes" tabindex="-1" role="dialog" aria-labelledby="AddBoxesLabel" aria-hidden="true" data-backdrop="static"  data-keyboard="false">
    <div class="modal-dialog modal-lg" style="max-width: 80%!important" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="AddBoxesLabel">Add Job</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('job-add-edit')}}" method="post">
                @csrf
                <input type="hidden" id="job_id" name="job_id" value="">
                <div class="modal-body bg-primary1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="job_title">Job Title</label>
                                <input type="text" class="form-control" id="job_title" placeholder="Enter Job title"
                                    name="job_title" value="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="job_category">Job Category</label>
                                <select class="form-control" placeholder="Select Job Category" id="job_category"
                                    name="job_category">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
						<div class="col-lg-4">
                            <div class="form-group">
                                <label for="division">Division</label>
                                <input type="text" class="form-control" id="division" placeholder="Enter Division"
                                    name="division">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="project">Project</label>
                                <input type="text" class="form-control" id="project" placeholder="Enter project"
                                    name="project">
                            </div>
                        </div>
						<div class="col-lg-4">
                            <div class="form-group">
                                <label for="band">Band</label>
                                <input type="text" class="form-control" id="band" placeholder="Enter Band"
                                    name="band">
                            </div>
                        </div>
						<div class="col-lg-4">
                            <div class="form-group">
                                <label for="report_to">Report To</label>
                                <input type="text" class="form-control" id="report_to" placeholder="Enter Report To"
                                    name="report_to">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" placeholder="Enter Location"
                                    name="location">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="position_type">Position Type</label>
                                <select class="form-control" placeholder="Select Position Type" id="position_type"
                                    name="position_type">
                                    @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="qualification">Qualification</label>
                                <input type="text" class="form-control" id="qualification"
                                    placeholder="Enter Qualification" name="qualification">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="is_travel">Travel Required</label>
                                <select class="form-control" placeholder="Select Travel Required" id="is_travel" name="is_travel">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="salary">Salary(Monthly)</label>
                                <input type="text" class="form-control" id="salary" placeholder="Enter Salary" name="salary">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="total_post">No. of Post</label>
                                <input type="number" class="form-control" min="0" max="1000" id="total_post"
                                    placeholder="Enter No. of Post" name="total_post">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="experience">Experience(In Years)</label>
                                <input type="text" class="form-control" id="experience" placeholder="Enter Experience"
                                    name="experience">
                            </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="last_recived_date">Last Date</label>
                                <input type="date" class="form-control" id="last_date"
                                    placeholder="Last Application Received Date" name="last_post">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="Job_description">Job Description</label>
                                <textarea name="Job_description" id="Job_description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-out">Save/Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'Job_description' );
</script>
<script type="text/javascript">
    $(document).on("click", ".editJob", function() {
      var job = $(this).data('job');
      $('#is_travel option[value="'+job.is_travel+'"]').attr('selected','selected');
      $('#position_type option').each(function(){
        if ($(this).text() == job.position_type) {
          $(this).attr('selected', 'selected');
        }
      });
      $('#job_category option').each(function(){
        if ($(this).text() == job.job_category) {
            $(this).attr('selected', 'selected');
        }
      });
      $("#job_title").val(job.job_title);
	  $("#division").val(job.division);
	  $("#band").val(job.band);
	  $("#report_to").val(job.report_to);
      $("#project").val(job.project);
      $("#location").val(job.location);
      $("#qualification").val(job.qualification);
      $("#salary").val(job.salary);
      $("#total_post").val(job.total_post);
      $("#experience").val(job.experience);
      $("#last_date").val(job.last_date);
      $("#job_id").val(job.id);
      CKEDITOR.instances['Job_description'].setData(job.job_description);
      $("#AddBoxesLabel").text("Edit Job");
      $('#AddBoxes').modal('toggle');
  });
  $(document).on("click", "#AddJobs", function() {
      $("#job_title").val('');
	  $("#division").val('');
	  $("#band").val('');
	  $("#report_to").val('');
      $("#project").val('');
      $("#location").val('');
      $("#qualification").val('');
      $("#salary").val('');
      $("#total_post").val('');
      $("#experience").val('');
      $("#job_id").val('');
	  CKEDITOR.instances['Job_description'].setData('');
      $("#AddBoxesLabel").text("Add Job");
      $('#AddBoxes').modal('toggle');
  });
  </script>
 <style>
	.bg-primary1{
		color: #443da9;
	}
</style>