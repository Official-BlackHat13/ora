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
<div class="modal fade" id="AddBoxes" tabindex="-1" role="dialog" aria-labelledby="AddBoxesLabel" aria-hidden="true"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl" style="max-width: 95%!important" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-center">
                <h5 class="modal-title text-center" id="AddBoxesLabel">Digital India Corporation</h5>
                <h6>Application for the post of <span class="job_title"></span></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('job-apply') }}" id="jobApplyForm" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="job_id" name="job_id">
                <div class="modal-body m-4">

                    <div class="ml-1"><span class="badge badge-primary">!</span> Each column should be filled.
                        Digital India Corporation may not
                        consider this application, unless all columns have been filled.</div>
                    <div class="ml-1"><span class="badge badge-primary">!</span> All fields with <span
                            class="text-danger"><strong>*</strong></span> are Mandarory</div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="first_name">1. Name of Applicant <span
                                        class="text-danger"><strong>*</strong></span> <span
                                        style="font-size: 11px;">(As per 10th certificate)</span></label>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="first_name"
                                            placeholder="First Name" name="first_name" value="" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="middle_name"
                                            placeholder="Middle Name" name="middle_name" value="">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="last_name" placeholder="Last Name"
                                            name="last_name" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="father_name">2. Father Name <span
                                        class="text-danger"><strong>*</strong></span> <span
                                        style="font-size: 11px;">(As per 10th certificate)</span></label>
                                <input type="text" class="form-control" id="father_name" placeholder="Father Name"
                                    name="father_name" value="" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="mother_name">3. Mother Name <span
                                        class="text-danger"><strong>*</strong></span> <span
                                        style="font-size: 11px;">(As per 10th certificate)</span></label>
                                <input type="text" class="form-control" id="mother_name" placeholder="Mother Name"
                                    name="mother_name" value="" required>
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
                                    class="text-danger"><strong>*</strong></span> <span style="font-size: 11px;">(in
                                    case of
                                    married-"YES" ,Otherwise-"NO")</span></label>
                            <div class="form-group">

                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="Yes" name="marital_status">
                                        Yes
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
                                <label for="spouse_name">5. Spouse Name <span style="font-size: 11px;">(in cash of
                                        married applicants)</span></label>
                                <input type="text" class="form-control" id="spouse_name" placeholder="Spouse Name"
                                    name="spouse_name" value="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="dob">6. Date Of Birth <span class="text-danger"><strong>*</strong></span>
                                </label>
                                <input id="dob" class="form-control" type="date" name="dob" placeholder="DD/MM/YYYY"
                                    required />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Age on Advertise Date:</label>
                                <p id="calculate_age"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="sex">7. Gender <span class="text-danger"><strong>*</strong></span> </label>
                            <div class="form-group">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="male" checked name="sex">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="female" name="sex"> Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nationality">8. Nationality <span
                                        class="text-danger"><strong>*</strong></span> </label>
                                <input type="text" class="form-control" id="nationality"
                                    placeholder="Your Nationality" name="nationality" value="Indian" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="project">9. Category <span class="text-danger"><strong>*</strong></span>
                            </label>
                            <div class="form-group">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="gen" checked
                                            name="category"> GEN
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="obc" name="category"> OBC
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="sc" name="category"> SC
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="st" name="category"> ST
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
                                            placeholder="Permanent Address" rows="4" required></textarea>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control" id="pin_code" min="111111"
                                            max="999999" placeholder="Pin Code" name="pin_code" required>
                                    </div>
                                </div>
                                <label for="p_address" style="padding-left:12px;">Phone No. <span
                                        style="font-size: 11px;">(with STD
                                        Codes like 01123456789)</span></label>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input type="number" class="form-control" id="p_office" placeholder="Office"
                                            name="p_office">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="number" class="form-control" id="p_residence"
                                            placeholder="Residence" name="p_residence">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="number" class="form-control" id="mobile" required
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
                                        <label for="email">E-Mail <span style="font-size: 11px;"> (Like: xyz@abc.pqr
                                                )</span></label>
                                        <input type="email" class="form-control" id="email" required
                                            placeholder="E-Mail" name="email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="c_address">11. Address for Correspondence with pin code <span
                                    class="text-danger"><strong>*</strong></span> </label> <label>
                                <input type="checkbox" value="" id="checked">
                                (<span class="cr"><i
                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                <span>Same as Permanet Address)</span>
                            </label>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <textarea class="form-control" id="c_address" name="c_address"
                                            placeholder="Correspondence Address" rows="4" required></textarea>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control" id="c_pin_code" min="100001"
                                            max="999999" placeholder="Pin Code" required name="c_pin_code">
                                    </div>
                                </div>
                                <label for="c_office" style="padding-left:12px;">Phone No. <span
                                        style="font-size: 11px;">(with STD
                                        Codes)</span></label>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input type="number" class="form-control" id="c_office" placeholder="Office"
                                            name="c_office">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="number" class="form-control" id="c_residence"
                                            placeholder="Residence" name="c_residence">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="number" class="form-control" required id="c_mobile"
                                            placeholder="Mobile" name="c_mobile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="previous_interview_detail">12. Have you been interviewed for recruitment in any
                                post in Digital India Corporation Earlier? If yes, for which Position & year</label>
                            <div class="form-group">
                                <textarea class="form-control" id="previous_interview_detail"
                                    name="previous_interview_detail" placeholder="Previous Interview Details in DIC"
                                    rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="previous_interview_detail">13. Academic & Professional qualifications <span
                                    class="text-danger"><strong>*</strong></span> <span
                                    style="font-size: 11px;"><b>(beginning from SSC (10th) to your latest qualification,
                                        Document size should not more than 500 KB. If your university is not mention in
                                        list, Please type here)</b></span></label>
                            <button type="button" class="ml-3 btn btn-warning btn-sm rounded " id="AddAcadmic">
                                <i class="feather icon-plus"></i>
                            </button>
                            <div class="form-group ">
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
                                    <?php
                                    $board_options = '<datalist id="pboards">';
                                    foreach ($boards as $key => $board) {
                                        $board_options .= '<option value="' . $board . '">' . $board . '</option>';
                                    }
                                    $board_options .= '</datalist>';
                                    ?>
                                    <tbody class="col-lg-12">
                                        <tr>
                                            <td><input type="text" class="form-control" value="10th" readonly
                                                    placeholder="Degree">
                                                <input type="hidden" value="10th" name="acadmic_degree[]">
                                            </td>
                                            <td><input type="text" list="pboards" class="form-control myselect"
                                                    placeholder="Institute / Board / University" name="acadmic_board[]"
                                                    required><?php echo $board_options; ?></td>
                                            <td><input type="text" class="form-control" placeholder="Degree Name"
                                                    name="acadmic_degree_name[]" required></td>
                                            <td><input type="text" class="form-control"
                                                    placeholder="Subject(s)/Specialization" name="acadmic_sub[]"
                                                    required></td>
                                            <td><input type="number" class="form-control" placeholder="Year"
                                                    max="{{ date('Y') }}" min="1970" name="acadmic_passing_year[]"
                                                    required></td>
                                            <td><input type="number" min="0.00" max="100.00" step=".01"
                                                    class="form-control" placeholder="Marks %"
                                                    name="acadmic_obtain_mark[]" required></td>
                                            <td><input type="text" class="form-control" placeholder="Division"
                                                    name="acadmic_rank[]" required></td>
                                            <td>
                                                <label for="acadmic_file_1"
                                                    class="feather icon-upload border p-1 bg-warning rounded"></label><input
                                                    style="width:0; height:0;" class="acadmic_file" required
                                                    id="acadmic_file_1" name="acadmic_file[]"
                                                    onchange="ValidateSize(this)" type="file" /><span
                                                    class="acadmic_file_1"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control" value="12th" readonly
                                                    placeholder="Degree">
                                                <input type="hidden" value="12th" name="acadmic_degree[]">
                                            </td>
                                            <td><input type="text" list="pboards" class="form-control myselect"
                                                    placeholder="Institute / Board / University" name="acadmic_board[]"
                                                    required><?php echo $board_options; ?></td>
                                            <td><input type="text" class="form-control" placeholder="Degree Name"
                                                    name="acadmic_degree_name[]" required></td>
                                            <td><input type="text" class="form-control"
                                                    placeholder="Subject(s)/Specialization" name="acadmic_sub[]"
                                                    required></td>
                                            <td><input type="number" class="form-control" placeholder="Year"
                                                    max="2021" min="1970" name="acadmic_passing_year[]" required></td>
                                            <td><input type="number" class="form-control" placeholder="Marks %"
                                                    name="acadmic_obtain_mark[]" required></td>
                                            <td><input type="text" class="form-control" placeholder="Division"
                                                    name="acadmic_rank[]" required></td>
                                            <td>
                                                <label for="acadmic_file_2"
                                                    class="feather icon-upload border p-1 bg-warning rounded"></label><input
                                                    style="width:0; height:0;" class="acadmic_file" required
                                                    id="acadmic_file_2" name="acadmic_file[]"
                                                    onchange="ValidateSize(this)" type="file" /><span
                                                    class="acadmic_file_2"></span>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                    name="field_of_specialization" placeholder="Fields of Specialization" rows="4"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="is_gov_employed">15. Are You employed in any Govt. / Semi-Govt. / Public Sector
                                Undertaking / Autonomous Bodies</label>
                            <div class="form-group">
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
                                        <p class="pt-2 pr-2">If "Yes", the application should be forwarded through
                                            proper channel or NOC to be produced at the time of interview.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="previous_interview_detail">16. Work Experience <span
                                    style="font-size: 11px;"><b>(Latest First)</b> (Document should not more than 500
                                    KB)</span></label>
                            <button type="button" class="ml-3 btn btn-warning btn-sm rounded" id="AddWordExperience">
                                <i class="feather icon-plus"></i>
                            </button>
                            <div class="form-group ">
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
                            <div class="form-group">
                                <div class="table-responsive dt-responsive">
                                    <table id="relevent_experience_table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr style="font-size: 11px;">
                                                <th class="text-md-center" style="width:5%">S.No</th>
                                                <th class="text-md-center" style="width:35%"> Type of Experience </th>
                                                <th class="text-md-center" style="width:55%">Details of Experience with
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
                            <label for="patent_work">18. Field of specialization, summary of R&D and other work done
                                with list of patents, Publications and reports, if any.</label>
                            <div class="form-group">
                                <textarea class="form-control" id="patent_work" name="patent_work"
                                    placeholder="Field of specialization" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="association_affilication">19. Association & Affilication with Professional
                                Bodies</label>
                            <div class="form-group">
                                <textarea class="form-control" id="association_affilications"
                                    name="association_affilication" placeholder="Association & Affilication"
                                    rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="significant_achivements">20. Any Significant achivements during your career
                                which may support your candidature for consideration to the position</label>
                            <div class="form-group">
                                <textarea class="form-control" id="significant_achivements"
                                    name="significant_achivements" placeholder="Significant Achivements"
                                    rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="suitable_position">21. Why do you think you are suitable for the
                                position? <span class="text-danger"><strong>*</strong></span> </label>
                            <div class="form-group">
                                <textarea class="form-control" id="suitable_position" name="suitable_position"
                                    placeholder="Why do you think you are suitable for the position?" rows="5"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="reference">22. Please furnish two professional reference <span
                                    class="text-danger"><strong>*</strong></span>
                                <ul>
                                    <li class="ml-4" style="list-style: circle;"><b>References from
                                            relatives,friends,etc. should be avoided.</b></li>
                                </ul>
                            </label>
                            <div class="form-group ">
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="reference1_name">(1). Name <span
                                                    class="text-danger"><strong>*</strong></span> </label>
                                            <input type="text" class="form-control" id="reference1_name"
                                                placeholder="Name" name="reference1_name" value="" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="reference1_fax">Fax Number</label>
                                            <input type="number" class="form-control" id="reference1_fax"
                                                placeholder="Fax" name="reference1_fax" value="">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="reference1_email">E-mail <span
                                                    class="text-danger"><strong>*</strong></span> </label>
                                            <input type="email" class="form-control" id="reference1_email"
                                                placeholder="E-mail" name="reference1_email" value="" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="reference1_address">Address</label>
                                            <textarea class="form-control" id="reference1_address"
                                                name="reference1_address" placeholder="Referee Address."
                                                rows="3"></textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="how_referee1_know_you">How does referee know you <span
                                                    class="text-danger"><strong>*</strong></span> </label>
                                            <textarea class="form-control" id="how_referee1_know_you"
                                                name="how_referee1_know_you" placeholder="How does referee know you."
                                                rows="3" required></textarea>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="reference1_tel_no">Tel. No. (Off.)</label>
                                            <input type="number" class="form-control" id="reference1_tel_no"
                                                placeholder="Tel. No. With STD Code" name="reference1_tel_no" value="">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="reference1_res_no">(Res.)</label>
                                            <input type="number" class="form-control" id="reference1_res_no"
                                                placeholder="Res. No. With STD Code" name="reference1_res_no" value="">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="reference1_mobile">(Mobile) <span
                                                    class="text-danger"><strong>*</strong></span> </label>
                                            <input type="number" class="form-control" id="reference1_mobile"
                                                placeholder="Referee Mobile No." name="reference1_mobile" value=""
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="reference2_name">(2). Name <span
                                                    class="text-danger"><strong>*</strong></span> </label>
                                            <input type="text" class="form-control" id="reference2_name"
                                                placeholder="Name" name="reference2_name" value="" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="reference2_fax">Fax Number</label>
                                            <input type="number" class="form-control" id="reference2_fax"
                                                placeholder="Fax" name="reference2_fax" value="">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="reference2_email">E-mail <span
                                                    class="text-danger"><strong>*</strong></span> </label>
                                            <input type="email" class="form-control" id="reference2_email"
                                                placeholder="E-Mail" name="reference2_email" value="" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="reference2_address">Address</label>
                                            <textarea class="form-control" id="reference2_address"
                                                name="reference2_address" placeholder="Referee Address."
                                                rows="3"></textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="how_referee2_know_you">How does referee know you <span
                                                    class="text-danger"><strong>*</strong></span> </label>
                                            <textarea class="form-control" id="how_referee2_know_you"
                                                name="how_referee2_know_you" placeholder="How does referee know you."
                                                rows="3" required></textarea>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="reference2_tel_no">Tel. No. (Off.)</label>
                                            <input type="number" class="form-control" id="reference2_tel_no"
                                                placeholder="Tel. No. (Off.)" name="reference2_tel_no" value="">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="reference2_res_no">(Res.)</label>
                                            <input type="number" class="form-control" id="reference2_res_no"
                                                placeholder="Res." name="reference2_res_no" value="">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="reference2_mobile">(Mobile) <span
                                                    class="text-danger"><strong>*</strong></span> </label>
                                            <input type="number" class="form-control" id="reference2_mobile"
                                                placeholder="Mobile" name="reference2_mobile" value="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="upload_document">23. Upload Document(s) (Document should not more than 500
                                KB):</label>
                            <div class="form-group ">
                                <ol>
                                    <li>
                                        <label>Your Photo <span class="text-danger"><strong>*</strong></span>
                                            (upload png/jpeg/jpg)</label>
                                        <label for="photo_card"
                                            class="feather icon-upload border p-1 bg-warning rounded"></label>
                                        <input style="width:0; height:0;" id="photo_card" name="photo_card[]"
                                            type="file" required />
                                        <img src="#" id="photo_card_image" style="display:none" width="80px"
                                            height="80px" />
                                    </li>
                                    <li>
                                        <label>Your Singnature <span class="text-danger"><strong>*</strong></span>
                                            (Upload png/jpeg/jpg)</label>
                                        <label for="sign_card"
                                            class="feather icon-upload border p-1 bg-warning rounded"></label>
                                        <input style="width:0; height:0;" id="sign_card" name="sign_card[]" type="file"
                                            required />
                                        <img src="#" id="sign_card_image" style="display:none" width="80px"
                                            height="80px" />
                                    </li>
                                    <li>
                                        <label>ID Proof <span class="text-danger"><strong>*</strong></span> (upload
                                            pdf)</label>
                                        <label for="aadhar_card"
                                            class="feather icon-upload border p-1 bg-warning rounded"></label>
                                        <input style="width:0; height:0;" id="aadhar_card" name="aadhar_card[]"
                                            type="file" required />
                                        <span id="aadhar_card_image"></span>
                                    </li>
                                    <li>
                                        <label>Upload Resume <span class="text-danger"><strong>*</strong></span>
                                            (upload pdf)</label>
                                        <label for="pan_card"
                                            class="feather icon-upload border p-1 bg-warning rounded"></label>
                                        <input style="width:0; height:0;" id="pan_card" name="pan_card[]" type="file"
                                            required />
                                        <span id="pan_card_image"></span>
                                    </li>
                                    <li>
                                        <label>Upload 10th Cerificate <span
                                                class="text-danger"><strong>*</strong></span> (upload pdf)</label>
                                        <label for="tenth_cer"
                                            class="feather icon-upload border p-1 bg-warning rounded"></label>
                                        <input style="width:0; height:0;" id="tenth_cer" name="tenth_cer[]" type="file"
                                            required />
                                        <span id="tenth_image"></span>
                                    </li>
                                    <li>
                                        <label>Upload 10+2 Certificate <span
                                                class="text-danger"><strong>*</strong></span> (upload pdf)</label>
                                        <label for="twelve_cer"
                                            class="feather icon-upload border p-1 bg-warning rounded"></label>
                                        <input style="width:0; height:0;" id="twelve_cer" name="twelve_cer[]"
                                            type="file" required />
                                        <span id="twelve_image"></span>
                                    </li>
                                    <li>
                                        <label>Upload Graduation Certificate <span
                                                class="text-danger"><strong>*</strong></span> (upload pdf)</label>
                                        <label for="graduation_cer"
                                            class="feather icon-upload border p-1 bg-warning rounded"></label>
                                        <input style="width:0; height:0;" id="graduation_cer" name="graduation_cer[]"
                                            type="file" required />
                                        <span id="graduation_image"></span>
                                    </li>
                                    <li>
                                        <label>Experience Certificates <span
                                                class="text-danger"><strong>*</strong></span> (kindly upload your
                                            all experience certificates in single pdf)</label>
                                        <label for="experience_certi"
                                            class="feather icon-upload border p-1 bg-warning rounded"></label>
                                        <input style="width:0; height:0;" id="experience_certi"
                                            name="experience_certi[]" type="file" required />
                                        <span id="experience_certi_image"></span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="declaration">Declaration:</label>
                            <div class="form-group ">
                                <ol>
                                    <li>
                                        I certify that all information provided in this application is true, complete
                                        and correct to the best of my knowledge and belief. I understand that any false
                                        information or omission of information may disqualify me from consideration for
                                        employment and may result in dismissal from the job, if discovered at a later
                                        date.
                                    </li>
                                    <li>I understand that this application does not create a contract of employment nor
                                        gurarantee for employment.</li>
                                    <li>I have read and understood the above declaration before signing this.</li>
                                </ol>
                            </div>
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
<script src="https://cdn.jsdelivr.net/jquery.validation/1.13.1/additional-methods.js"></script>
<script type="text/javascript">
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
        $('#calculate_age').text(agevar);
    });

    $(document).on("click", ".apply", function() {
        var job = $(this).data('job');
        $(".job_title").text(job.job_title);
        $("#job_id").val(job.id);
        $("#acadmic").html('');
        $('#AddBoxes').modal('toggle');
    });
    var accadmic_count = 3;
    $(document).ready(function() {
        var degree_name = ['Graduation', 'Post Graduation', 'Ph. D'];
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
                '</td><td><input type="text" class="form-control" placeholder="Degree Name" name="acadmic_degree_name[]"></td><td><input type="text" class="form-control" placeholder="Subject(s)/Specialization" name="acadmic_sub[]"></td><td><input type="number" class="form-control" placeholder="Year" max="2021" min="1970" name="acadmic_passing_year[]"></td><td><input type="number" class="form-control" placeholder="Marks %" name="acadmic_obtain_mark[]"></td><td><input type="text" class="form-control" placeholder="Division" name="acadmic_rank[]"></td><td><label for="acadmic_file_' +
                accadmic_count +
                '" class="feather icon-upload border p-1 bg-warning rounded"></label><input style="width:0; height:0;" class="acadmic_file" id="acadmic_file_' +
                accadmic_count +
                '" name="acadmic_file[]" onchange="ValidateSize(this)" type="file" required/><i class="feather icon-minus removeAcadmic border ml-1 p-1 bg-danger rounded"></i><p class="acadmic_file_' +
                accadmic_count + '"></p></td></tr>';
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
            '" class="feather icon-upload border p-1 bg-warning rounded"></label><input style="width:0; height:0;" id="work_file' +
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
                //var size =
                if ((id != "experience_certi_image") && (Math.floor(input.files[0].size / 1000) > 500)) {
                    alert("Please upload file less than 500 KB.");
                    return false;
                }
                var extension = e.target.fileName.split('.').pop().toLowerCase();
                if (id == "aadhar_card_image" || id == "pan_card_image" || id == "tenth_image" || id ==
                    "twelve_image" || id == "experience_certi_image" || id == "graduation_image") {
                    if (extension != "pdf") {
                        alert("Please upload valid pdf file format");
                    } else {
                        $('#' + id).text(e.target.fileName);
                    }
                } else {
                    var fileTypes = ['jpg', 'jpeg', 'png'];
                    if (fileTypes.indexOf(extension) > -1) {
                        $('#' + id).attr('src', e.target.result);
                        $('#' + id).show();
                    } else {
                        alert("Please upload valid jpg/jpeg file format");
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
    $("#graduation_cer").change(function() {
        readURL(this, "graduation_image");
    });
    $("#experience_certi").change(function() {
        readURL(this, "experience_certi_image");
    });
    $(function() {
        $("form#jobApplyForm").validate({
            errorClass: "text-danger",
            rules: {
                'acadmic_degree_name[]': {
                    required: true
                },
                'acadmic_board[]': {
                    required: true
                },
                'acadmic_sub[]': {
                    required: true
                },
                'acadmic_passing_year[]': {
                    required: true
                },
                'acadmic_obtain_mark[]': {
                    required: true
                },
                'acadmic_rank[]': {
                    required: true
                },
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
                //   'acadmic_file[]':{
                //     required:true,
                //     extension: "png|jpeg|jpg",
                // 	filesize:500 
                //   },
                'tenth_cer[]': {
                    required: true,
                    extension: "pdf"
                },
                'twelve_cer[]': {
                    required: true,
                    extension: "pdf"
                },
                'graduation_cer[]': {
                    required: true,
                    extension: "pdf"
                },
                'photo_card[]': {
                    required: true,
                    extension: "png|jpeg|jpg"
                },
                'sign_card[]': {
                    required: true,
                    extension: "png|jpeg|jpg"
                },
                'aadhar_card[]': {
                    required: true,
                    extension: "pdf"
                },
                'experience_certi[]': {
                    required: true,
                    // extension: "png|jpeg|jpg"
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

                'pan_card[]': {
                    required: true,
                    extension: "pdf|doc|docx"
                }
            },
            // Specify validation error messages
            messages: {
                'acadmic_degree_name[]': {
                    required: "Please enter degree Name"
                },
                'acadmic_board[]': {
                    required: "Please enter Institute / Board / University"
                },
                'acadmic_sub[]': {
                    required: "Please enter Subjects"
                },
                'acadmic_passing_year[]': {
                    required: "Please enter passing year"
                },
                'acadmic_obtain_mark[]': {
                    required: "Please enter obtain mark"
                },
                'acadmic_rank[]': {
                    required: "Please enter rank"
                },
                first_name: {
                    required: "Please enter your First Name",
                    maxlength: "Max Length 50 Char",
                    minlength: "Min Length 3 Char",
                },
                // 'acadmic_file[]':{
                //     required:"marksheet is required",
                //     extension: "Please Upload png|jpeg|jpg only",
                // 	filesize:"please upload max 500 kb file"  
                //   },
                'tenth_cer[]': {
                    required: "10th Certificate is required",
                    extension: "Please Upload pdf only"
                },
                'twelve_cer[]': {
                    required: "10+2 Certificate is required",
                    extension: "Please Upload pdf only"
                },

                'graduation_cer[]': {
                    required: "Gradution Certificate is required",
                    extension: "Please Upload pdf only"
                },
                'photo_card[]': {
                    required: "please upload your photo",
                    extension: "please upload png|jpeg|jpg only"
                },
                'sign_card[]': {
                    required: "please upload your signature",
                    extension: "please upload png|jpeg|jpg only"
                },
                'pan_card[]': {
                    required: "please upload your Resume",
                    extension: "please upload pdf only"
                },
                'aadhar_card[]': {
                    required: "please upload your ID Proof",
                    extension: "please upload pdf only"
                },
                'experience_certi[]': {
                    required: "please upload your all Experience Certificates in single pdf",
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
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
