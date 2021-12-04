<div class="modal fade" id="forget_password" tabindex="-1" role="dialog" aria-labelledby="AddBoxesLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-center">
                <h5 class="modal-title text-center" id="AddBoxesLabel">Digital India Corporation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('change-password')}}" id="change_pass" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body ">
                    <div class="row">
                        <label class="col-lg-5" for="password">New Password</label>
                        <div class="col-lg-7">
                            <input type="password" class="form-control" id="password" placeholder="New Password"
                                name="password" value="" required>
                        </div>
                        <label class="col-lg-5 mt-1" for="c_password">Confirm Password</label>
                        <div class="col-lg-7 mt-1">
                            <input type="password" class="form-control" id="c_password" placeholder="Confirm Password"
                                name="c_password" value="" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).on("click", ".change", function () {
        $('#forget_password').modal('toggle');
    });
    $(function () {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $("form#change_pass").validate({
            // Specify validation rules
            errorClass: "text-danger",
            rules: {
                password: {
                    required: true,
                    minlength: 5
                },
                c_password: {
                    required: true,
                    minlength: 5,
					equalTo : "#password"
                }
            },
            messages: {
                password: {
                    required: "Please Enter New Password",
                    minlength: "Min 5 Char Required",
                },
                c_password: {
                    required: "Please Enter Confirm Password",
                    minlength: "Min 5 Char Required",
					equalTo: "Password should be same as new password",
                },
            }
        });
    });
</script>