<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div id="dummyModal" role="dialog" class="modal fade bd-example-modal-lg">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title text-center" id="AddBoxesLabel">Digital India Corporation</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Welcome  <span class="name">{{Auth::user()->name}}!</span></h5>

                                    <form action="{{ route('user_info') }}" id="" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <input type="hidden" id="" name="job_id">
                                        <div class="modal-body m-4">

                                            <div class="form-group form-primary">
                                                <input type="text" name="Address" class="form-control"
                                                    placeholder="Address" id="">
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="form-group form-primary">
                                                <input type="text" name="most_recent_employer" class="form-control"
                                                    placeholder="Most recent employer" id="">
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="form-group form-primary">
                                                <input type="text" name="highest_qualification" class="form-control"
                                                    placeholder="Highest qualification" id="">
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="form-group form-primary">
                                                <input type="number" name="No_of_years_of_exp" class="form-control"
                                                    placeholder="No. of years of experience" id="">
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="form-group form-primary">
                                                <input type="text" name="top_3_skills" class="form-control"
                                                    placeholder="Top 3 skills" id="">
                                                <span class="form-bar"></span>
                                            </div>
                                            <div>
                                                <label>Upload Resume(upload pdf)</label>
                                                <label for="pan_card"
                                                    class="feather icon-upload border p-1 bg-warning rounded"></label>
                                                <input style="display: none;" id="pan_card" name="pan_card[]"
                                                    type="file" required />
                                                <span id="pan_card_image"></span>
                                            </div>
                                            <div>
                                                <label>Your Photo (Upload png/jpeg/jpg)</label>
                                                <label for="photo_card"
                                                    class="feather icon-upload border p-1 bg-warning rounded"></label>
                                                <input style="display: none;" id="photo_card" name="photo_card[]"
                                                    type="file" required />
                                                <img src="#" id="photo_card_image" style="display:none" width="80px"
                                                    height="80px" />
                                            </div>



                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <input type="submit" name="submit" value="submit" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    // $(document).on("click", ".applynew", function() {
    //     var job = $(this).data('job');
    //     $(".job_title").text(job.job_title);
    //     $("#job_id").val(job.id);
    //     $("#acadmic").html('');
    // });
    $('document').ready(function() {
        $('#dummyModal').modal('show');
    });
</script>
