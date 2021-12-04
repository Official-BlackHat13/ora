<!-- Stepper CSS -->
{{-- <link href="{{url('public/stepper/css/addons-pro/steppers.css')}}" rel="stylesheet">
<!-- Stepper CSS - minified-->
<link href="{{url('public/stepper/css/addons-pro/steppers.min.css')}}" rel="stylesheet">

<!-- Stepper JavaScript -->
<script type="text/javascript" src="{{url('public/stepper')}}/js/addons-pro/steppers.js"></script>
<!-- Stepper JavaScript - minified -->
<script type="text/javascript" src="{{url('public/stepper')}}/js/addons-pro/steppers.min.js"></script> --}}

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }

</style>

<div class="modal fade" id="AddBoxesnew" tabindex="-1" role="dialog" aria-labelledby="AddBoxesLabel"
    aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl" style="max-width: 95%!important" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-center">
                <h5 class="modal-title text-center" id="AddBoxesLabel">Digital India Corporation</h5>
                <h6>Application for the post of <span class="job_title"></span></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div id="tab1">Personal Details
                            <div class="ml-1"><span class="badge badge-primary">!</span> Each column should be
                                filled. Digital India Corporation may not consider this application, unless all columns
                                have been filled.</div>
                            <div class="ml-1"><span class="badge badge-primary">!</span> All fields with <span
                                    class="text-danger"><strong>*</strong></span> are Mandarory
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="first_name">1. Name of Applicant <span
                                                class="text-danger"><strong>*</strong></span> <span
                                                style="font-size: 11px;">(As per 10th certificate)</span></label>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="first_name"
                                                    placeholder="First Name" name="first_name" value="">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="middle_name"
                                                    placeholder="Middle Name" name="middle_name" value="">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="last_name"
                                                    placeholder="Last Name" name="last_name" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="father_name">2. Father Name <span
                                                class="text-danger"><strong>*</strong></span> <span
                                                style="font-size: 11px;">(As per 10th certificate)</span></label>
                                        <input type="text" class="form-control" id="father_name"
                                            placeholder="Father Name" name="father_name" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="mother_name">3. Mother Name <span
                                                class="text-danger"><strong>*</strong></span> <span
                                                style="font-size: 11px;">(As per 10th certificate)</span></label>
                                        <input type="text" class="form-control" id="mother_name"
                                            placeholder="Mother Name" name="mother_name" value="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="mother_name">if there is any mismatch in Name appears on your
                                            documents,Please specify.</label>
                                        <textarea name="mismatch" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="marital_status">4. Marital Status <span
                                            class="text-danger"><strong>*</strong></span> <span
                                            style="font-size: 11px;">(in case of
                                            married-"YES" ,Otherwise-"NO")</span></label>
                                    <div class="form-group">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" value="Yes"
                                                    name="marital_status"> Yes
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" value="No" checked
                                                    name="marital_status"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="spouse_name">5. Spouse Name <span style="font-size: 11px;">(in case
                                                of married applicants)</span></label>
                                        <input type="text" class="form-control" id="spouse_name"
                                            placeholder="Spouse Name" name="spouse_name" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="dob">6. Date Of Birth <span
                                                class="text-danger"><strong>*</strong></span> </label>
                                        <input id="dob" class="form-control" type="date" name="dob"
                                            placeholder="DD/MM/YYYY" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Age on Advertise Date:</label>
                                        <p id="calculate_age"><input type="number" class="form-control" id=""
                                                placeholder="age" name="#"></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="sex">7. Gender <span class="text-danger"><strong>*</strong></span>
                                    </label>
                                    <div class="form-group">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" value="male" checked
                                                    name="sex">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" value="female" name="sex">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nationality">8. Nationality <span
                                                class="text-danger"><strong>*</strong></span> </label>
                                        <input type="text" class="form-control" id="nationality"
                                            placeholder="Your Nationality" name="nationality" value="Indian">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="project">9. Category <span
                                            class="text-danger"><strong>*</strong></span> </label>
                                    <div class="form-group">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" value="gen" checked
                                                    name="category"> GEN
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" value="obc"
                                                    name="category"> OBC
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" value="sc" name="category">
                                                SC
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" value="st" name="category">
                                                ST
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="p_address">10. Permanent Address with pin code <span
                                            class="text-danger"><strong>*</strong></span> </label>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <textarea class="form-control" id="p_address" name="p_address"
                                                    placeholder="Permanent Address" rows="4"></textarea>
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control" id="pin_code" min="111111"
                                                    max="999999" placeholder="Pin Code" name="pin_code">
                                            </div>
                                        </div>
                                        <label for="p_address" style="padding-left:12px;">Phone No. <span
                                                style="font-size: 11px;">(with STD
                                                Codes like 01123456789)</span></label>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="p_office"
                                                    placeholder="Office" name="p_office">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="p_residence"
                                                    placeholder="Residence" name="p_residence">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="mobile"
                                                    placeholder="Mobile" name="mobile">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="fax p-2">Fax</label>
                                                <input type="number" class="form-control" id="fax" placeholder="Fax"
                                                    name="fax">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="email">E-Mail <span style="font-size: 11px;"> (Like:
                                                        xyz@abc.pqr )</span></label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="E-Mail" name="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="c_address">11. Address for Correspondence with pin code <span
                                            class="text-danger"><strong>*</strong></span> </label> <label>
                                        <input type="checkbox" value="" id="checked">
                                        <span class="cr"><i
                                                class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                        <span>Same as Permanet Address)</span>
                                    </label>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <textarea class="form-control" id="c_address" name="c_address"
                                                    placeholder="Correspondence Address" rows="4"></textarea>
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control" id="c_pin_code"
                                                    min="100001" max="999999" placeholder="Pin Code" name="c_pin_code">
                                            </div>
                                        </div>
                                        <label for="c_office" style="padding-left:12px;">Phone No. <span
                                                style="font-size: 11px;">(with STD
                                                Codes)</span></label>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="c_office"
                                                    placeholder="Office" name="c_office">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="c_residence"
                                                    placeholder="Residence" name="c_residence">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="number" class="form-control" id="c_mobile"
                                                    placeholder="Mobile" name="c_mobile">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="previous_interview_detail">12. Have you been interviewed for recruitment
                                        in any
                                        post in Digital India Corporation Earlier? If yes, for which Position &
                                        year</label>
                                    <div class="form-group">
                                        <textarea class="form-control" id="previous_interview_detail"
                                            name="previous_interview_detail"
                                            placeholder="Previous Interview Details in DIC" rows="4"></textarea>
                                    </div>
                                </div>


                                <button type="button" id="" onclick="nextPrev1()">Next</button>
                            </div>


                            <div class="" id="tab2">Academic Background
                                <div class="col-lg-12">
                                    <label for="previous_interview_detail">13. Academic & Professional qualifications
                                        <span class="text-danger"><strong>*</strong></span> <span
                                            style="font-size: 11px;"><b>(beginning with the latest qualification and up
                                                to
                                                SSC, Document should not more than 500 KB. If your university is not
                                                mention in list, Please type here)</b></span></label>
                                    <button type="button" class="ml-3 btn btn-warning btn-sm rounded " id="AddAcadmic">
                                        <i class="feather icon-plus"></i>
                                    </button>
                                    <div class="form-group border rounded p-1">
                                        <table id="dom-jqry" class="table table-striped table-bordered">
                                            <thead>
                                                <tr style="font-size: 11px;">
                                                    <th>Examination / <br> Degree</th>
                                                    <th>Name of the Institute /<br> Board / University</th>
                                                    <th>Degree Name</th>
                                                    <th>Main Subject(s) / <br> Specialization</th>
                                                    <th style="width:10%;">Year of </br> Passing</th>
                                                    <th>Aggregate <br>% of Marks</th>
                                                    <th>Division/<br>Grade</th>
                                                    <th>Upload Marksheet</br>(pdf,jpeg)</th>
                                                </tr>
                                            </thead>
                                            <tbody class="col-lg-12" id="acadmic">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="field_of_specialization">14. Fields of Specialization <span
                                            class="text-danger"><strong>*</strong></span> </label>
                                    <div class="form-group">
                                        <textarea class="form-control" id="field_of_specialization"
                                            name="field_of_specialization" placeholder="Fields of Specialization"
                                            rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="is_gov_employed">15. Are You employed in any Govt. / Semi-Govt. / Public
                                        Sector
                                        Undertaking / Autonomous Bodies</label>
                                    <div class="form-group border rounded">
                                        <div class="row">
                                            <div class="col-lg-3 pl-5">
                                                <div class="form-check-inline pt-3">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" value="Yes"
                                                            name="is_gov_employed"> Yes
                                                    </label>
                                                </div>
                                                <div class="form-check-inline pt-3">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" value="No" checked
                                                            name="is_gov_employed"> No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <p class="pt-2 pr-2">If "Yes", the application should be forwarded
                                                    through
                                                    proper channel or NOC to be produced at the time of interview.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" id="" onclick="nextPrev2()">Previous</button>
                                <button type="button" id="" onclick="nextPrev2()">Next</button>
                            </div>


                            <div class="" id="tab3">Experience
                                <div class="col-lg-12">
                                    <label for="previous_interview_detail">16. Work Experience <span
                                            style="font-size: 11px;"><b>(Latest First)</b> (Document should not more
                                            than 500 KB)</span></label>
                                    <button type="button" class="ml-3 btn btn-warning btn-sm rounded"
                                        id="AddWordExperience">
                                        <i class="feather icon-plus"></i>
                                    </button>
                                    <div class="form-group border rounded p-1">
                                        <table id="dom-jqry" class="table table-striped table-bordered">
                                            <thead>
                                                <tr style="font-size: 11px;">
                                                    <th>Name and Nature of the Organization</th>
                                                    <th>Designation & Grade</th>
                                                    <th>Monthly Salary (INR)</th>
                                                    <th>Service Start Date</th>
                                                    <th>Service End Date</th>
                                                    <th>Role of Applicant and Significant Contribution</th>
                                                    <th>Upload document (pdf,jpeg)</th>
                                                </tr>
                                            </thead>
                                            <tbody class="col-lg-12" id="work_experience">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="previous_interview_detail">17. Detail of Experience Relavant to the Post
                                        applied</label>
                                    <button type="button" class="ml-3 btn btn-warning btn-sm rounded "
                                        id="AddRelavantExperience"><i class="feather icon-plus"></i>
                                    </button>
                                    <div class="form-group border rounded p-1">
                                        <div class="table-responsive dt-responsive">
                                            <table id="relevent_experience_table"
                                                class="table table-striped table-bordered">
                                                <thead>
                                                    <tr style="font-size: 11px;">
                                                        <th class="text-md-center" style="width:5%">S.No</th>
                                                        <th class="text-md-center" style="width:35%"> Type of
                                                            Experience </th>
                                                        <th class="text-md-center" style="width:55%">Details of
                                                            Experience with
                                                            specific achivements. Also Please specify timelines.</th>
                                                        <th class="text-md-center" style="width:5%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="col-lg-12" id="relavant_experience">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="patent_work">18. Field of specialization, summary of R&D and other work
                                        done
                                        with list of patents, Publications and reports, if any.</label>
                                    <div class="form-group">
                                        <textarea class="form-control" id="patent_work" name="patent_work"
                                            placeholder="Field of specialization" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="association_affilication">19. Association & Affilication with
                                        Professional
                                        Bodies</label>
                                    <div class="form-group">
                                        <textarea class="form-control" id="association_affilications"
                                            name="association_affilication" placeholder="Association & Affilication"
                                            rows="5"></textarea>
                                    </div>
                                </div>

                                <button type="button" id="" onclick="nextPrev3()">Previous</button>
                                <button type="button" id="" onclick="nextPrev3()">Next</button>
                            </div>


                            <div class="" id="tab4">
                                submit
                                {{-- <button type="button" id="prevBtn" onclick="nextPrev(3)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(4)">Submit</button> --}}
                            </div>

                            {{-- <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                            </div> --}}

                            <!-- Circles which indicates the steps of the form: -->
                            {{-- <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div> --}}

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // var currentTab = 0; // Current tab is set to be the first tab (0)
    // showTab(currentTab); // Display the current tab

    // function showTab(n) {
    //     // This function will display the specified tab of the form...
    //     // console.log(x[n]);
    //     var x = document.getElementsByClassName("tab");
    //     x[n].style.display = "block";
    //     //... and fix the Previous/Next buttons:
    //     if (n == 0) {
    //         document.getElementById("prevBtn").style.display = "none";
    //     } else {
    //         document.getElementById("prevBtn").style.display = "inline";
    //     }
    //     if (n == (x.length - 1)) {
    //         document.getElementById("nextBtn").innerHTML = "Submit";
    //     } else {
    //         document.getElementById("nextBtn").innerHTML = "Next";
    //     }
    //     //... and run a function that will display the correct step indicator:
    //     fixStepIndicator(n)
    // }
    $("#tab1").show();
    $("#tab2").hide();
    $("#tab3").hide();
    $("#tab4").hide();
    function nextPrev1() {
        $("#tab1").hide();
        $("#tab2").show();
            // $("#tab2").css('display:block');
            // $("#tab"+n).show();
            // $("#tab"+(n-1)).hide();
            // $("#tab1").css('display:none');
    }
    function nextPrev2() {
        $("#tab3").show();
        $("#tab2").hide();
    }
    function nextPrev3() {
        $("#tab3").show();
        $("#tab2").hide();
    }
    function nextPrev4() {
            // $("#tab4").css('display:block');
            // // $("#tab"+n).show();
            // // $("#tab"+(n-1)).hide();
            // $("#tab3").css('display:none');
    }

    // function nextPrev(n) {
    //     // This function will figure out which tab to display
    //     var x = document.getElementsByClassName("tab");
    //     // Exit the function if any field in the current tab is invalid:
    //     // if (n == 1) return false;
    //     if (n == 1 && !validateForm()) return false;
    //     // Hide the current tab:
    //     // console.log(x[currentTab]);
    //     x[currentTab].style.display = "none";
    //     // Increase or decrease the current tab by 1:
    //     currentTab = currentTab + n;
    //     // if you have reached the end of the form...
    //     if (currentTab >= x.length) {
    //         // ... the form gets submitted:
    //         document.getElementById("regForm").submit();
    //         return false;
    //     }
    //     // Otherwise, display the correct tab:
    //     showTab(currentTab);
    // }

    // function validateForm() {
    //     // This function deals with validation of the form fields
    //     var x, y, i, valid = true;
    //     x = document.getElementsByClassName("tab");
    //     y = x[currentTab].getElementsByTagName("input");
    //     // A loop that checks every input field in the current tab:
    //     for (i = 0; i < y.length; i++) {
    //         // If a field is empty...
    //         if (y[i].value == "") {
    //             // add an "invalid" class to the field:
    //             y[i].className += " invalid";
    //             // and set the current valid status to false
    //             valid = true;
    //         }
    //     }
    //     // If the valid status is true, mark the step as finished and valid:
    //     if (valid) {
    //         document.getElementsByClassName("step")[currentTab].className += " finish";
    //     }
    //     return valid; // return the valid status
    // }

    // function fixStepIndicator(n) {
    //     // This function removes the "active" class of all steps...
    //     var i, x = document.getElementsByClassName("step");
    //     for (i = 0; i < x.length; i++) {
    //         x[i].className = x[i].className.replace(" active", "");
    //     }
    //     //... and adds the "active" class on the current step:
    //     x[n].className += " active";
    // }
    $(document).on("click", ".applynew", function() {
        var job = $(this).data('job');
        $(".job_title").text(job.job_title);
        $("#job_id").val(job.id);
        $("#acadmic").html('');
        $('#AddBoxesnew').modal('toggle');
    });
</script>

{{-- <script type="text/javascript">
    // $(document).ready(function () {
    //     $('.stepper').mdbStepper();
    // })
    
    // javascript
    $(document).ready(function() {
        $("#spouse_name").prop("readonly", true);
    });
    $(document).on("click", 'input[name="marital_status"]', function() {
        if ($(this).val() == "Yes") {
            $("#spouse_name").prop("readonly", false);
        }
        if ($(this).val() == "No") {
            $("#spouse_name").prop("readonly", true);
        }
    });

    function ValidateSize(file) {
        var FileSize = file.files[0].size / 1024; // in MiB
        var getthisid = file.id;
        if (FileSize > 600) {
            alert('File size exceeds 500 KB');
            // $(file).val(''); //for clearing with Jquery
        } else {
            var parts = file.files[0].name.split('.');
            var extentions = parts[parts.length - 1];
            var myarr = ["jpeg", "jpg", "pdf"];
            if (myarr.indexOf(extentions) > -1) {
                document.getElementsByClassName(getthisid)[0].innerHTML = file.files[0].name;
            } else {
                alert("Please upload valid jpg/jpeg/pdf file format");
            }
        }
    }

    function maxdate(e) {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0 so need to add 1 to make it 1!
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        if (e.value > today) {
            alert("Please Filled Valid Date");
            e.value = today;
        } else {
            if (e.name == "work_o_to[]") {
                //console.log(e.parentElement.previousSibling.firstChild.value);
                if (e.parentElement.previousSibling.firstChild.value) {
                    if (e.parentElement.previousSibling.firstChild.value > e.value) {
                        alert("Please Fill greater then or equal From Date");
                        e.value = e.parentElement.previousSibling.firstChild.value;
                    }
                } else {
                    alert("Please Fill Form Date First");
                    e.value = '';
                }
            }
        }
    }

    function getAge(dateString) {
        var now = new Date();
        var today = new Date(now.getYear(), now.getMonth(), now.getDate());

        var yearNow = now.getYear();
        var monthNow = now.getMonth();
        var dateNow = now.getDate();

        var dob = new Date(dateString.substring(6, 10),
            dateString.substring(0, 2) - 1,
            dateString.substring(3, 5)
        );

        var yearDob = dob.getYear();
        var monthDob = dob.getMonth();
        var dateDob = dob.getDate();
        var age = {};
        var ageString = "";
        var yearString = "";
        var monthString = "";
        var dayString = "";


        yearAge = yearNow - yearDob;

        if (monthNow >= monthDob)
            var monthAge = monthNow - monthDob;
        else {
            yearAge--;
            var monthAge = 12 + monthNow - monthDob;
        }

        if (dateNow >= dateDob)
            var dateAge = dateNow - dateDob;
        else {
            monthAge--;
            var dateAge = 31 + dateNow - dateDob;

            if (monthAge < 0) {
                monthAge = 11;
                yearAge--;
            }
        }

        age = {
            years: yearAge,
            months: monthAge,
            days: dateAge
        };

        if (age.years > 1) yearString = " years";
        else yearString = " year";
        if (age.months > 1) monthString = " months";
        else monthString = " month";
        if (age.days > 1) dayString = " days";
        else dayString = " day";


        if ((age.years > 0) && (age.months > 0) && (age.days > 0))
            ageString = age.years + yearString + ", " + age.months + monthString + ", and " + age.days + dayString +
            " .";
        else if ((age.years == 0) && (age.months == 0) && (age.days > 0))
            ageString = "Only " + age.days + dayString + " !";
        else if ((age.years > 0) && (age.months == 0) && (age.days == 0))
            ageString = age.years + yearString;
        else if ((age.years > 0) && (age.months > 0) && (age.days == 0))
            ageString = age.years + yearString + " and " + age.months + monthString + " .";
        else if ((age.years == 0) && (age.months > 0) && (age.days > 0))
            ageString = age.months + monthString + " and " + age.days + dayString + " .";
        else if ((age.years > 0) && (age.months == 0) && (age.days > 0))
            ageString = age.years + yearString + " and " + age.days + dayString + " .";
        else if ((age.years == 0) && (age.months > 0) && (age.days == 0))
            ageString = age.months + monthString + " .";
        else ageString = "Oops! Could not calculate your age!";

        return ageString;
    }


    $(document).on("click", '#checked', function() {
        if ($(this).is(':checked')) {
            $('#c_address').val($('#p_address').val());
            $('#c_pin_code').val($('#pin_code').val());
            $('#c_office').val($('#p_office').val());
            $('#c_residence').val($('#p_residence').val());
            $('#c_mobile').val($('#mobile').val());
        } else {
            $('#c_address').val('');
            $('#c_pin_code').val('');
            $('#c_office').val('');
            $('#c_residence').val('');
            $('#c_mobile').val('');
        }
    });
    $(document).on("blur", "#dob", function() {
        var age = $(this).val();

        agesplit = age.split('-');
        var ddd = agesplit[2];

        var mmm = agesplit[1];

        var yyy = agesplit[0];

        var datebnalo = mmm + '/' + ddd + '/' + yyy;

        var agevar = getAge(datebnalo);
        //var days = (current_date - new Date(age)) / (1000 * 60 * 60 * 24);
        //var year = parseInt((Math.floor(days))/365.25);
        //var month = parseInt(((Math.floor(days))/365.25)/12);
        //var day = ((((Math.floor(days))/365.25)/12) - parseInt(((Math.floor(days))/365.25)/12))*12;
        //console.log(getAge((date_format(new Date(age),'DD-MM-YYYY'))));
        $('#calculate_age').text(agevar);
    });

    $(document).on("click", ".apply", function() {
        var job = $(this).data('job');
        $(".job_title").text(job.job_title);
        $("#job_id").val(job.id);
        console.log(job);
        $("#acadmic").html('');
        //$("#AddWordExperience").html('');
        //$("#AddRelavantExperience").html('');
        $('#AddBoxes').modal('toggle');
    });
    var accadmic_count = 1;
    $(document).ready(function() {
        var degree_name = ['10th', '12th', 'Graduation', 'Post Graduation', 'Ph. D'];
        var options = '';
        $(degree_name).each(function(i, v) {
            options += '<option value="' + v + '">' + v + '</option>';
        });
        var board_name = <?php echo json_encode($boards); ?>;
        var board_options = '<datalist id="boards">';
        $(board_name).each(function(i, v) {
            board_options += '<option value="' + v + '">' + v + '</option>';
        });
        board_options += '</datalist>';
        $(document).on("click", "#AddAcadmic", function() {
            var html_data =
                '<tr><td><select  class="form-control" placeholder="Degree" name="acadmic_degree[]">' +
                options +
                '</select></td><td><input type="text" list="boards" class="form-control myselect" placeholder="Institute / Board / University" name="acadmic_board[]">' +
                board_options +
                '</td><td><input type="text" class="form-control" placeholder="Degree Name" name="acadmic_degree_name[]"</td><td><input type="text" class="form-control" placeholder="Subject(s)/Specialization" name="acadmic_sub[]"></td><td><input type="number" class="form-control" placeholder="Year" max="2021" min="1970" name="acadmic_passing_year[]"></td><td><input type="number" class="form-control" placeholder="Marks %" name="acadmic_obtain_mark[]"></td><td><input type="text" class="form-control" placeholder="Division" name="acadmic_rank[]"></td><td><label for="acadmic_file_' +
                accadmic_count +
                '" class="feather icon-upload border p-1 bg-warning rounded"></label><input style="display: none;" class="acadmic_file" id="acadmic_file_' +
                accadmic_count +
                '" name="acadmic_file[]" onchange="ValidateSize(this)" type="file" required/><i class="feather icon-minus removeAcadmic border ml-1 p-1 bg-danger rounded"></i><p class="acadmic_file_' +
                accadmic_count + '"><p></td></tr>';
            $("#acadmic").append(html_data);
            accadmic_count++;
        });
        $(document).on("click", ".removeAcadmic", function() {
            $(this).parent().parent().remove();
        });
    });

    // Add Remove code for Required Skill Set
    $(document).on("click", "#AddWordExperience", function() {
        // ;
        // var count = parseInt($('#requiedSkillCount').val()) + 1;
        $("#work_experience").append(
            '<tr><td><input type="text" class="form-control" placeholder="Organization Name" name="work_o_name[]"></td><td><input type="text" class="form-control" placeholder="Designation" name="work_o_designation[]"></td><td><input type="number" class="form-control" placeholder="Salary" name="work_o_salary[]"></td><td><input type="date" class="form-control" placeholder="From"  oninvalid="Please Enter Valid Date" onchange="maxdate(this)" name="work_o_from[]"></td><td><input type="date" onchange="maxdate(this)" class="form-control" placeholder="To" name="work_o_to[]"></td><td><input type="text" class="form-control" placeholder="Role" name="work_o_role[]"></td><td><label for="work_file' +
            accadmic_count +
            '" class="feather icon-upload border p-1 bg-warning rounded"></label><input style="display: none;" id="work_file' +
            accadmic_count +
            '" name="work_file[]" onchange="ValidateSize(this)" type="file" required/><i class="feather icon-minus removeWorkExperience border ml-1 p-1 bg-danger rounded"></i><p class="work_file' +
            accadmic_count + '"><p></td></tr>');
        accadmic_count++;
        // $('#requiedSkillCount').val(count);
    });
    $(document).on("click", ".removeWorkExperience", function() {
        $(this).parent().parent().remove();
    });

    $(document).on("click", "#AddRelavantExperience", function() {
        var tableLength = document.getElementById("relevent_experience_table").rows.length;
        $("#relavant_experience").append('<tr><td>' + tableLength +
            '</td><td><input type="text" class="form-control relevent_experience_type" placeholder="Relevent Experience Type" name="relevent_type[]"></td><td><input type="text" class="form-control relevent_experience_detail" placeholder="Relevent Experience Detail" name="relevent_detail[]"></td><td><button type="button" class="btn btn-danger btn-sm rounded removeReleventExperience"><i class="feather icon-minus"></i></button></td></tr>'
            );
    });
    $(document).on("click", ".removeReleventExperience", function() {
        $(this).parent().parent().remove();
        var tableRows = document.getElementById("relevent_experience_table").rows.length;
        if (tableRows) {
            for (let index = 0; index < tableRows; index++) {
                document.getElementById("relevent_experience_table").rows[index].firstChild.innerHTML = index;
            }
        }
    });

    function readURL(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.fileName = input.files[0].name;
            reader.onload = function(e) {
                console.log();
                //var size =
                if (Math.floor(input.files[0].size / 1000) > 500) {
                    alert("Please upload file lessthen 500 KB.");
                    return false;
                }
                var extension = e.target.fileName.split('.').pop().toLowerCase();
                if (id == "aadhar_card_image" || id == "pan_card_image" || id == "tenth_image" || id ==
                    "twelve_image") {
                    if (extension != "pdf") {
                        alert("Please upload valid pdf file formate");
                    } else {
                        $('#' + id).text(e.target.fileName);
                    }
                } else {
                    var fileTypes = ['jpg', 'jpeg', 'png'];
                    if (fileTypes.indexOf(extension) > -1) {
                        $('#' + id).attr('src', e.target.result);
                        $('#' + id).show();
                    } else {
                        alert("Please upload valid jpg/jpeg file formate");
                    }
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#photo_card").change(function() {
        readURL(this, "photo_card_image");
    });
    $("#sign_card").change(function() {
        readURL(this, "sign_card_image");
    });
    $("#pan_card").change(function() {
        readURL(this, "pan_card_image");
    });
    $("#aadhar_card").change(function() {
        readURL(this, "aadhar_card_image");
    });
    $("#tenth_cer").change(function() {
        readURL(this, "tenth_image");
    });
    $("#twelve_cer").change(function() {
        readURL(this, "twelve_image");
    });

    $(function() {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $("form#jobApplyForm").validate({
            // Specify validation rules
            errorClass: "text-danger",
            rules: {
                first_name: {
                    required: true,
                    maxlength: 50,
                    minlength: 3
                },
                father_name: {
                    required: true,
                    maxlength: 50,
                    minlength: 3
                },
                mother_name: "required",
                dob: {
                    required: true,
                    date: true
                },
                nationality: "required",
                p_address: "required",
                pin_code: {
                    required: true,
                    min: 100001,
                    max: 999999
                },
                acadmic_file: {
                    filesize: 1
                },
                tenth_cer: {
                    required: true,
                    extension: "png|jpeg|jpg"
                },
                twelve_cer: {
                    required: true,
                    extension: "png|jpeg|jpg"
                },
                photo_card: {
                    required: true,
                    extension: "png|jpeg|jpg"
                },
                sign_card: {
                    required: true,
                    extension: "png|jpeg|jpg"
                },
                aadhar_card: {
                    required: true,
                    extension: "pdf"
                },
                mobile: {
                    required: true,
                    min: 1000000000,
                    max: 9999999999
                },
                email: {
                    required: true,
                    email: true
                },
                c_address: "required",
                c_pin_code: {
                    required: true,
                    min: 100001,
                    max: 999999
                },
                c_mobile: {
                    required: true,
                    min: 1000000000,
                    max: 9999999999
                },
                p_office: {
                    min: 1000000000,
                    max: 9999999999
                },
                p_residence: {
                    min: 1000000000,
                    max: 9999999999
                },
                c_office: {
                    min: 1000000000,
                    max: 9999999999
                },
                c_residence: {
                    min: 1000000000,
                    max: 9999999999
                },
                fax: {
                    min: 1000000000,
                    max: 9999999999
                },
                //field_of_specialization:{
                // required:true,
                // maxlength:2000,
                // minlength:100
                //},
                present_employment_name: {
                    required: true,
                    maxlength: 2000,
                    minlength: 10
                },
                present_employment_designation: "required",
                present_employment_ctc: "required",
                suitable_position: {
                    required: true,
                    minlength: 100,
                    maxlength: 1000
                },
                reference1_name: "required",
                reference1_email: {
                    required: true,
                    email: true
                },
                reference1_fax: {
                    min: 1000000000,
                    max: 9999999999
                },
                reference1_tel_no: {
                    min: 1000000000,
                    max: 9999999999
                },
                reference1_res_no: {
                    min: 1000000000,
                    max: 9999999999
                },
                how_referee1_know_you: "required",
                reference1_mobile: {
                    required: true,
                    min: 1000000000,
                    max: 9999999999
                },
                reference2_name: "required",
                reference2_email: {
                    required: true,
                    email: true
                },
                how_referee2_know_you: "required",
                reference2_mobile: {
                    required: true,
                    min: 1000000000,
                    max: 9999999999
                },
                reference2_fax: {
                    min: 1000000000,
                    max: 9999999999
                },
                reference2_tel_no: {
                    min: 1000000000,
                    max: 9999999999
                },
                reference2_res_no: {
                    min: 1000000000,
                    max: 9999999999
                },
                pan_card: {
                    required: true,
                    extension: "pdf|doc|docx"
                }
            },
            // Specify validation error messages
            messages: {
                first_name: {
                    required: "Please enter your First Name",
                    maxlength: "Max Length 50 Char",
                    minlength: "Min Length 3 Char",
                },
                acadmic_file: {
                    filesize: "please upload max 500 kb file"
                },
                tenth_cer: {
                    required: "10th Certificate is required",
                    extension: "Please Upload png|jpeg|jpg only"
                },
                twelve_cer: {
                    required: "10+2 Certificate is required",
                    extension: "Please Upload png|jpeg|jpg only"
                },
                photo_card: {
                    required: "please upload your photo",
                    extension: "please upload png|jpeg|jpg only"
                },
                sign_card: {
                    required: "please upload your signature",
                    extension: "please upload png|jpeg|jpg only"
                },
                aadhar_card: {
                    required: true,
                    extension: "pdf"
                },
                father_name: {
                    required: "Please enter Father Name",
                    maxlength: "Max Length 50 Char",
                    minlength: "Min Length 3 Char",
                },
                mother_name: "Please Enter Mother Name",
                dob: {
                    required: "Please Enter DOB",
                    date: "please fill valid date"
                },
                nationality: "Please Enter Nationality",
                p_address: "Please Enter Your Parament Address",
                pin_code: {
                    required: "Please Enter Pin Code",
                    min: "Plese fill valid Pin Code",
                    max: "Plese fill valid Pin Code"
                },
                mobile: {
                    required: "Please Enter Valid Mobile No",
                    min: "Please Filled Valid Mobile No",
                    max: "Please Filled Valid Mobile No"
                },
                email: {
                    required: "E-mail is required",
                    email: "plese fill valid email id"
                },
                c_address: "Please Enter Your Corresponding Address",
                c_pin_code: {
                    required: "Please Enter Pin Code",
                    min: "Please fill valid Pin Code",
                    max: "Please fill valid Pin Code"
                },
                c_mobile: {
                    required: "Please Enter Valid Mobile No",
                    min: "Please Filled Valid Mobile No",
                    max: "Please Filled Valid Mobile No"
                },
                c_office: {
                    min: "Please Filled Valid Number",
                    max: "Please Filled Valid Number"
                },
                c_residence: {
                    min: "Please Filled Valid Number",
                    max: "Please Filled Valid Number"
                },
                p_office: {
                    min: "Please Filled Valid Number",
                    max: "Please Filled Valid Number"
                },
                p_residence: {
                    min: "Please Filled Valid Number",
                    max: "Please Filled Valid Number"
                },
                fax: {
                    min: "Please Filled Valid Number",
                    max: "Please Filled Valid Number"
                },
                //field_of_specialization:{
                //    required:"Specialization Field is required",
                //    maxlength:"Max Length:2000 char",
                //    minlength:"Min Length:100 char"
                //},
                present_employment_name: {
                    required: "Employment Name and Address is required",
                    maxlength: "Max Length:2000 char",
                    minlength: "Min Length:10 char"
                },
                present_employment_designation: "Designation is required",
                present_employment_ctc: "Please shared you ctc details",
                suitable_position: {
                    required: "Describe how you are suitable for this position",
                    minlength: "Min Length:100 Char",
                    maxlength: "Max Length:1000 Char"
                },
                reference1_name: "Referee Name is required field",
                reference1_email: {
                    required: "E-mail is Required Field",
                    email: "Please Provide a Valid Email -id",
                },
                reference1_fax: {
                    min: "Please Filled valid Fax Number",
                    max: "Please Filled valid Fax Number"
                },
                reference1_tel_no: {
                    min: "Please Filled valid Telephone Number",
                    max: "Please Filled valid Telephone Number"
                },
                reference1_res_no: {
                    min: "Please Filled valid Residence Number",
                    max: "Please Filled valid Residence Number"
                },
                how_referee1_know_you: "Please describe how referee know you ?",
                reference1_mobile: {
                    required: "Please Enter Valid Mobile No",
                    min: "Please Filled Valid Mobile No",
                    max: "Please Filled Valid Mobile No"
                },
                reference2_name: "Referee Name is required field",
                reference2_email: {
                    required: "E-mail is Required Field",
                    email: "Please Provide a Valid Email -id",
                },
                how_referee2_know_you: "Please describe how referee know you ?",
                reference2_mobile: {
                    required: "Please Enter Valid Mobile No",
                    min: "Please Filled Valid Mobile No",
                    max: "Please Filled Valid Mobile No"
                },
                reference2_fax: {
                    min: "Please Filled Valid Fax No",
                    max: "Please Filled Valid Fax No"
                },
                reference2_tel_no: {
                    min: "Please Filled Valid Telephone No",
                    max: "Please Filled Valid Telephone No"
                },
                reference2_res_no: {
                    min: "Please Filled Valid Residence No",
                    max: "Please Filled Valid Residence No"
                },
                pan_card: {
                    required: "Resume is required field",
                    extension: "Resume should be in pdf|doc|docx"
                }
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                //   console.log(form);
                form.submit();
            }
        });
    });
</script> --}}
