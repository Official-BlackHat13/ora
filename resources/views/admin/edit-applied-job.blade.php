<div class="pcoded-content" >
<?php //print_r($app->user_data);die;?>
<?php $jobDetail=json_decode($app->user_data);?>
    <div class="modal-header bg-warning text-center">
        <h5 class="modal-title text-center" id="AddBoxesLabel">Digital India Corporation</h5>
        <h6>Update your Application of post <b>{{$app->jobs->job_title}}</b><span class="job_title"></span></h6>
    </div>
    <form action="{{url('job-apply')}}" id="jobEditForm" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="job_id" name="job_id" value="{{$app->job_id}}">
        <div class="modal-body bg-primary">
            <div class="row">
                <p class="text-center ml-1">*Each column should be filled. Digital India Corporation may not
                    consider this application, unless all columns have been filled.</p>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="first_name">1. Name of Applicant</label>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="first_name" placeholder="First Name"
                                    name="first_name" value="{{$jobDetail->first_name}}" required>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="middle_name"
                                    placeholder="Middle Name" name="middle_name" value="{{$jobDetail->middle_name}}">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="last_name" placeholder="Last Name"
                                    name="last_name" value="{{$jobDetail->last_name}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="father_name">2. Father Name</label>
                        <input type="text" class="form-control" id="father_name" placeholder="Father Name"
                            name="father_name" value="{{$jobDetail->father_name}}" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="mother_name">3. Mother Name</label>
                        <input type="text" class="form-control" id="mother_name" placeholder="Mother Name"
                            name="mother_name" value="{{$jobDetail->mother_name}}" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="marital_status">4. Marital Status <span style="font-size: 11px;">(in cash of
                            maride-"YES" ,Otherwise-"NO")</span></label>
                    <div class="form-group">

                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="Yes" <?php echo $jobDetail->marital_status=="Yes" ? 'checked' : '' ?>
                                    name="marital_status">Yes
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="No" <?php echo $jobDetail->marital_status=="No" ? 'checked' : '' ?>
                                    name="marital_status">No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="spouse_name">5. Spouse Name <span style="font-size: 11px;">(in cash of
                                married applicants)</span></label>
                        <input type="text" class="form-control" id="spouse_name" placeholder="Spouse Name"
                            name="spouse_name" value="{{$jobDetail->spouse_name}}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="dob">6. Date Of Birth</label>
                        <input id="dob" class="form-control" type="date" name="dob" value="{{$jobDetail->dob}}" placeholder="YYYY/MM/DD"
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
                    <label for="sex">7. Gender</label>
                    <div class="form-group">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="male" <?php echo $jobDetail->sex=="male" ? 'checked' : '' ?> name="sex">
                                Male
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="female" <?php echo $jobDetail->sex=="female" ? 'checked' : '' ?> name="sex"> Female
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nationality">8. Nationality</label>
                        <input type="text" class="form-control" id="nationality" placeholder="Your Nationality" name="nationality" value="{{$jobDetail->nationality}}" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="project">9. Category</label>
                    <div class="form-group">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="gen" <?php echo $jobDetail->category=="gen" ? 'checked' : '' ?>
                                    name="category">GEN
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="obc" <?php echo $jobDetail->category=="obc" ? 'checked' : '' ?> name="category"> OBC
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="sc" <?php echo $jobDetail->category=="sc" ? 'checked' : '' ?> name="category"> SC
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="st" <?php echo $jobDetail->category=="st" ? 'checked' : '' ?> name="category"> ST
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="p_address">10. Permanent Address with pin code</label>
                    <div class="form-group border p-2 rounded">
                        <div class="row">
                            <div class="col-lg-9">
                                <textarea class="form-control" id="p_address" name="p_address"
                                    placeholder="Permanent Address" rows="4" required>{{$jobDetail->p_address}}</textarea>
                            </div>
                            <div class="col-lg-3">
                                <input type="number" class="form-control" id="pin_code" min="111111" value="{{$jobDetail->pin_code}}"
                                    max="999999" placeholder="Pin Code" name="pin_code" required>
                            </div>
                        </div>
                        <label for="p_address p-2">Phone No. <span style="font-size: 11px;">(with STD
                                Codes)</span></label>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="number" class="form-control" id="p_office" placeholder="Office" value="{{$jobDetail->p_office}}"
                                    name="p_office">
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" id="p_residence" placeholder="Residence" value="<?php echo isset($jobDetail->p_residence) ? $jobDetail->p_residence : '' ?>"
                                    name="p_residence">
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" id="mobile" required placeholder="Mobile" name="mobile" value="{{$jobDetail->mobile}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fax p-2">Fax</label>
                                <input type="number" class="form-control" value="{{$jobDetail->fax}}" id="fax" placeholder="Fax" name="fax">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">E-Mail</label>
                                <input type="email" class="form-control" id="email"  value="{{$jobDetail->email}}" required
                                    placeholder="E-Mail" name="email">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="c_address">11. Address for Correspondence with pin code </label> <label>
                                        <input type="checkbox" value="" id="checked">
                                        (<span class="cr"><i
                                                class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                        <span>Same as Permanet Address)</span>
                                    </label>
                    <div class="form-group border p-2 rounded">
                        <div class="row">
                            <div class="col-lg-9">
                                <textarea class="form-control" id="c_address" name="c_address"
                                    placeholder="Correspondence Address" rows="4" required>{{$jobDetail->c_address}}</textarea>
                            </div>
                            <div class="col-lg-3">
                                <input type="number" class="form-control" id="c_pin_code" min="100001" value="{{$jobDetail->c_pin_code}}"
                                    max="999999" placeholder="Pin Code" required name="c_pin_code">
                            </div>
                        </div>
                        <label for="c_office p-2">Phone No. <span style="font-size: 11px;">(with STD
                                Codes)</span></label>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="number" class="form-control" id="c_office" placeholder="Office" value="{{$jobDetail->c_office}}"
                                    name="c_office">
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" id="c_residence" placeholder="Residence" value="<?php echo isset($jobDetail->c_residence) ? $jobDetail->c_residence : ''; ?>"
                                    name="c_residence">
                            </div>
                            <div class="col-lg-4">
                                <input type="number" class="form-control" required id="c_mobile" value="{{$jobDetail->c_mobile}}"
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
                            rows="4">{{$jobDetail->previous_interview_detail}}</textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="previous_interview_detail">13. Academic & Professional qualifications <span
                            style="font-size: 11px;"><b>(beginning with the latest qualification and up to
                                SSC)</b></span></label><button type="button"
                        class="ml-3 btn btn-info btn-sm rounded " id="AddAcadmic">
                        <i class="feather icon-plus"></i>
                    </button>
                    <div class="form-group border rounded p-1">
                        <table id="dom-jqry" class="table table-striped table-bordered">
                            <thead>
                                <tr style="font-size: 11px;">
                                    <th>Examination / </br> Degree</th>
                                    <th>Name of the Institute /</br> Board University</th>
                                    <th>Main Subject(s) /</br> Specialization</th>
                                    <th>Year of </br> Passing</th>
                                    <th>Aggregate </br>% of Marks</th>
                                    <th>Division</th>
                                    <th>Upload document</br>(pdf,jpeg)</th>
                                </tr>
                            </thead>
                            <tbody class="col-lg-12" id="acadmic">
                                @if(isset($jobDetail->acadmic_degree))
                                    @foreach($jobDetail->acadmic_degree as $key=>$acadmic)
                                    <tr style="font-size: 11px;">
                                        <td><input type="text" class="form-control" placeholder="Degree" value="{{$acadmic}}" name="acadmic_degree[]"></td>
                                        <td><input type="text" class="form-control" placeholder="Board" name="acadmic_board[]" value="{{$jobDetail->acadmic_board[$key]}}"></td>
                                        <td><input type="text" class="form-control" placeholder="Subject" name="acadmic_sub[]" value="{{$jobDetail->acadmic_sub[$key]}}"></td>
                                        <td><input type="number" class="form-control" placeholder="Passing Year" max="2021" min="1970" name="acadmic_passing_year[]" value="{{$jobDetail->acadmic_passing_year[$key]}}"></th>
                                        <td><input type="number" class="form-control" placeholder="Marks %" name="acadmic_obtain_mark[]" value="{{$jobDetail->acadmic_obtain_mark[$key]}}"></td>
                                        <td><input type="text" class="form-control" placeholder="Rank" name="acadmic_rank[]" value="{{$jobDetail->acadmic_rank[$key]}}"></td>
                                        <td><label for="acadmic_file{{$key}}" class="feather icon-upload border p-1 bg-info rounded"></label><input style="display: none;" id="acadmic_file{{$key}}" name="acadmic_file[]" type="file"/><span id="acadmic_file_image"></span><i class="feather icon-minus removeAcadmic border ml-1 p-1 bg-danger rounded"></i></td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="field_of_specialization">14. Fields of Specialization</label>
                    <div class="form-group">
                        <textarea class="form-control" id="field_of_specialization"
                            name="field_of_specialization" placeholder="Fields of Specialization" rows="4"
                            required>{{$jobDetail->field_of_specialization}}</textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="is_gov_employed">15. Are You employed in any Govt. / Semi-Govt. / Public Sector
                        Undertaking / Autonomous Bodies</label>
                    <div class="form-group border rounded">
                        <div class="row">
                            <div class="col-lg-3 pl-5">
                                <div class="form-check-inline pt-3">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="Yes" <?php echo $jobDetail->is_gov_employed=="Yes" ? "checked" :''; ?> name="is_gov_employed"> Yes
                                    </label>
                                </div>
                                <div class="form-check-inline pt-3">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="No" <?php echo $jobDetail->is_gov_employed=="No" ? "checked" :''; ?>
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
                    <label for="present_employment">16. Details of present employment</label>
                    <div class="form-group border rounded p-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="present_employment_name">i). Name of the organization with
                                    address</label>
                                <textarea class="form-control" id="present_employment_name"
                                    name="present_employment_name"
                                    placeholder="Name of the organization with address" rows="4"
                                    required>{{$jobDetail->present_employment_name}}</textarea>
                            </div>
                            <div class="col-lg-12">
                                <label for="present_employment_designation">ii). Designation of the post
                                    held</label>
                                <textarea class="form-control" id="present_employment_designation"
                                    name="present_employment_designation"
                                    placeholder="Designation of the post held" rows="2" required>{{$jobDetail->present_employment_designation}}</textarea>
                            </div>
                            <div class="col-lg-12">
                                <label for="present_employment_ctc">iii). Total salary if on CTC/Consolidated
                                    basis</label>
                                <textarea class="form-control" id="present_employment_ctc"
                                    name="present_employment_ctc"
                                    placeholder="Total salary if on CTC/Consolidated basis" rows="2"
                                    required>{{$jobDetail->present_employment_ctc}}</textarea>
                            </div>
                            <div class="col-lg-12">
                                <label for="present_employment_other_benefits">iv). Any other
                                    emoluments/Benefits (other than salary) available</label>
                                <textarea class="form-control" id="present_employment_other_benefits"
                                    name="present_employment_other_benefits"
                                    placeholder="Any other emoluments/Benefits (other than salary) available"
                                    rows="2">{{$jobDetail->present_employment_other_benefits}}</textarea>
                            </div>
                            <div class="col-lg-12">
                                <label for="present_employment_other_information">v). Any other relevant
                                    information</label>
                                <textarea class="form-control" id="present_employment_other_information"
                                    name="present_employment_other_information"
                                    placeholder="Any other relevant information" rows="2">{{$jobDetail->present_employment_other_information}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="previous_interview_detail">17. Work Experience <span
                            style="font-size: 11px;"><b>(Latest First)</b></span></label>
                    <button type="button" class="ml-3 btn btn-info btn-sm rounded " id="AddWordExperience">
                        <i class="feather icon-plus"></i>
                    </button>
                    <div class="form-group border rounded p-1">
                        <table id="dom-jqry" class="table table-striped table-bordered">
                            <thead>
                                <tr style="font-size: 11px;">
                                    <th rowspan="2" class="text-md-center" style="width:18%">Name And </br>
                                        Nature of the </br> Organization</th>
                                    <th rowspan="2" class="text-md-center" style="width:16%"> Designation
                                        </br>&</br> Grade</th>
                                    <th rowspan="2" class="text-md-center" style="width:20%">Total </br> Salary
                                        </br> drawn </th>
                                    <th colspan="2" class="text-md-center">period of service</th>
                                    <th rowspan="2" class="text-md-center" style="width:27%">Role of Applicant
                                        </br> and Significant </br>Contribution</th>
                                    <th class="text-md-center" rowspan="2" style="width:5%">Action</th>
                                </tr>
                                <tr style="font-size: 11px;">
                                    <th>From</th>
                                    <th>To</th>
                                </tr>
                            </thead>
                            @if(isset($jobDetail->work_o_name))
                                @foreach($jobDetail->work_o_name as $key1=>$organization)
                                <tr style="font-size: 11px;">
                                    <td><input type="text" class="form-control" placeholder="Organization Name" name="work_o_name[]" value="{{$organization}}"></td>
                                    <td><input type="text" class="form-control" placeholder="Designation" name="work_o_designation[]" value="{{$jobDetail->work_o_designation[$key1]}}"></td>
                                    <td><input type="number" class="form-control" placeholder="Salary" name="work_o_salary[]" value="{{$jobDetail->work_o_salary[$key1]}}"></td>
                                    <td><input type="date" class="form-control" placeholder="From" name="work_o_from[]" value="{{$jobDetail->work_o_from[$key1]}}"></td>
                                    <td><input type="date" class="form-control" placeholder="To" name="work_o_to[]" value="{{$jobDetail->work_o_to[$key1]}}"></td>
                                    <td><input type="text" class="form-control" placeholder="Role" name="work_o_role[]" value="{{$jobDetail->work_o_role[$key1]}}"></td>
                                    <td><label for="work_file[]" class="feather icon-upload border p-1 bg-info rounded"></label><input style="display: none;" id="work_file[]" name="work_file[]" type="file"/><i class="feather icon-minus removeWorkExperience border ml-1 p-1 bg-danger rounded"></i></td>
                                </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="previous_interview_detail">18. Detail of Experience Relavant to the Post
                        applied</label>
                    <button type="button" class="ml-3 btn btn-info btn-sm rounded " id="AddRelavantExperience"><i class="feather icon-plus"></i>
                    </button>
                    <div class="form-group border rounded p-1">
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
                                @if(isset($jobDetail->relevent_type))
                                    @foreach($jobDetail->relevent_type as $key2=>$relevent)
                                    <tr><td>{{$key2+1}}</td>
                                        <td><input type="text" class="form-control relevent_experience_type" placeholder="Relevent Experience Type" name="relevent_type[]" value="{{$relevent}}"></td>
                                        <td><input type="text" class="form-control relevent_experience_detail" placeholder="Relevent Experience Detail" name="relevent_detail[]" value="{{$jobDetail->relevent_detail[$key2]}}"></td>
                                        <td><button type="button" class="btn btn-danger btn-sm rounded removeReleventExperience"><i class="feather icon-minus"></i></button></td>
                                    </tr>
                                    @endforeach	
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="patent_work">19. Field of specialization, summary of R&D and other work done
                        with list of patents, Publications and reports, if any.</label>
                    <div class="form-group">
                        <textarea class="form-control" id="patent_work" name="patent_work"
                            placeholder="Field of specialization" rows="5">{{$jobDetail->patent_work}}</textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="association_affilication">20. Association & Affilication with Professional
                        Bodies</label>
                    <div class="form-group">
                        <textarea class="form-control" id="association_affilications"
                            name="association_affilication" placeholder="Association & Affilication"
                            rows="5">{{$jobDetail->association_affilication}}</textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="significant_achivements">21. Any Significant achivements during your career
                        which may support your candidature for consideration to the position</label>
                    <div class="form-group">
                        <textarea class="form-control" id="significant_achivements"
                            name="significant_achivements" placeholder="Significant Achivements"
                            rows="5">{{$jobDetail->significant_achivements}}</textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="suitable_position">22. Why do you think you are suitable for the
                        position?</label>
                    <div class="form-group">
                        <textarea class="form-control" id="suitable_position" name="suitable_position"
                            placeholder="Why do you think you are suitable for the position?" rows="5"
                            required>{{$jobDetail->suitable_position}}</textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="reference">23. Please furnish two professional reference <ul>
                            <li class="ml-4" style="list-style: circle;"><b>References from
                                    relatives,friends,etc. should be avoided.</b></li>
                        </ul></label>
                    <div class="form-group border rounded p-1">
                        <div class="form-group border rounded p-1">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="reference1_name">(1). Name</label>
                                    <input type="text" class="form-control" id="reference1_name"
                                        placeholder="Name" name="reference1_name" value="{{$jobDetail->reference1_name}}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="reference1_fax">Fax Number</label>
                                    <input type="number" class="form-control" id="reference1_fax"
                                        placeholder="Fax" name="reference1_fax" value="{{$jobDetail->reference1_fax}}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="reference1_email">E-mail</label>
                                    <input type="email" class="form-control" id="reference1_email"
                                        placeholder="E-mail" name="reference1_email" value="{{$jobDetail->reference1_email}}" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="reference1_address">Address</label>
                                    <textarea class="form-control" id="reference1_address"
                                        name="reference1_address" placeholder="Referee Address."
                                        rows="3">{{$jobDetail->reference1_address}}</textarea>
                                </div>
                                <div class="col-lg-6">
                                    <label for="how_referee1_know_you">How does referee know you</label>
                                    <textarea class="form-control" id="how_referee1_know_you"
                                        name="how_referee1_know_you" placeholder="How does referee know you."
                                        rows="3" required>{{$jobDetail->how_referee1_know_you}}</textarea>
                                </div>
                                <div class="col-lg-4">
                                    <label for="reference1_tel_no">Tel. No. (Off.)</label>
                                    <input type="number" class="form-control" id="reference1_tel_no"
                                        placeholder="Tel. No. With STD Code" name="reference1_tel_no" value="{{$jobDetail->reference1_tel_no}}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="reference1_res_no">(Res.)</label>
                                    <input type="number" class="form-control" id="reference1_res_no"
                                        placeholder="Res. No. With STD Code" name="reference1_res_no" value="{{$jobDetail->reference1_res_no}}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="reference1_mobile">(Mobile)</label>
                                    <input type="number" class="form-control" id="reference1_mobile"
                                        placeholder="Referee Mobile No." name="reference1_mobile" value="{{$jobDetail->reference1_mobile}}"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group border rounded p-1">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="reference2_name">(2). Name</label>
                                    <input type="text" class="form-control" id="reference2_name"
                                        placeholder="Name" name="reference2_name" value="{{$jobDetail->reference2_name}}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="reference2_fax">Fax Number</label>
                                    <input type="number" class="form-control" id="reference2_fax"
                                        placeholder="Fax" name="reference2_fax" value="{{$jobDetail->reference2_fax}}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="reference2_email">E-mail</label>
                                    <input type="email" class="form-control" id="reference2_email"
                                        placeholder="E-Mail" name="reference2_email" value="{{$jobDetail->reference2_email}}" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="reference2_address">Address</label>
                                    <textarea class="form-control" id="reference2_address"
                                        name="reference2_address" placeholder="Referee Address."
                                        rows="3">{{$jobDetail->reference2_address}}</textarea>
                                </div>
                                <div class="col-lg-6">
                                    <label for="how_referee2_know_you">How does referee know you</label>
                                    <textarea class="form-control" id="how_referee2_know_you"
                                        name="how_referee2_know_you" placeholder="How does referee know you."
                                        rows="3" required>{{$jobDetail->how_referee2_know_you}}</textarea>
                                </div>
                                <div class="col-lg-4">
                                    <label for="reference2_tel_no">Tel. No. (Off.)</label>
                                    <input type="number" class="form-control" id="reference2_tel_no"
                                        placeholder="Tel. No. (Off.)" name="reference2_tel_no" value="{{$jobDetail->reference2_tel_no}}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="reference2_res_no">(Res.)</label>
                                    <input type="number" class="form-control" id="reference2_res_no"
                                        placeholder="Res." name="reference2_res_no" value="{{$jobDetail->reference2_res_no}}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="reference2_mobile">(Mobile)</label>
                                    <input type="number" class="form-control" id="reference2_mobile"
                                        placeholder="Mobile" name="reference2_mobile" value="{{$jobDetail->reference2_mobile}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="upload_document">Upload Document(s):</label>
                    <div class="form-group border rounded p-1">
                        <ol>
                            <li>
                                <label>Your Photo</label>
                                <label for="photo_card"
                                    class="feather icon-upload border p-1 bg-info rounded"></label>
                                <input style="display: none;" id="photo_card" name="photo_card[]" type="file" />
                                @if(isset($jobDetail->candidate_photo))
                                 <img src="{{url('').'/public/'.$jobDetail->candidate_photo[0]}}" id="photo_card_image" width="80px"
                                    height="80px" />
                                @endif
                            </li>
                            <li>
                                <label>Your Singnature</label>
                                <label for="sign_card"
                                    class="feather icon-upload border p-1 bg-info rounded"></label>
                                <input style="display: none;" id="sign_card" name="sign_card[]" type="file" />
                                @if(isset($jobDetail->candidate_sign))
									<img src="{{url('').'/public/'.$jobDetail->candidate_sign[0]}}" id="sign_card_image" width="80px"
                                    height="80px" />
								@endif
                            </li>
                            <li>
                                <label>ID Proof</label>
									<label for="aadhar_card"
                                    class="feather icon-upload border p-1 bg-info rounded"></label> 
								@if(isset($jobDetail->candidate_aadhar))
									<label><a href="{{url('').'/public/'.$jobDetail->candidate_aadhar[0]}}"> old id Proof</a></label>
								@endif
                                <input style="display: none;" id="aadhar_card" name="aadhar_card[]"
                                    type="file" />
                                <span id="aadhar_card_image"></span>
                            </li>
                            <li>
                                <label>Upload Resume(upload pdf, jpeg, jpg)</label>
                                <label for="pan_card"
                                    class="feather icon-upload border p-1 bg-info rounded"></label> 
								@if(isset($jobDetail->candidate_pan))
								<label><a href="{{url('').'/public/'.$jobDetail->candidate_pan[0]}}"> old Resume</a></label>
								@endif
                                <input style="display: none;" id="pan_card" name="pan_card[]" type="file" />
                                <span id="pan_card_image"></span>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="declaration">Declaration:</label>
                    <div class="form-group border rounded p-1">
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
            <button type="submit" class="btn btn-primary btn-out">Update</button>
        </div>
    </form>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<script type="text/javascript">
	function getAge(dateString) {
	  var now = new Date();
	  var today = new Date(now.getYear(),now.getMonth(),now.getDate());
	  var yearNow = now.getYear();
	  var monthNow = now.getMonth();
	  var dateNow = now.getDate();
	  var dob = new Date(dateString.substring(6,10), dateString.substring(0,2)-1, dateString.substring(3,5) );
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
		var monthAge = 12 + monthNow -monthDob;
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

	  if ( age.years > 1 ) yearString = " years";
	  else yearString = " year";
	  if ( age.months> 1 ) monthString = " months";
	  else monthString = " month";
	  if ( age.days > 1 ) dayString = " days";
	  else dayString = " day";

	  if ( (age.years > 0) && (age.months > 0) && (age.days > 0) )
		ageString = age.years + yearString + ", " + age.months + monthString + ", and " + age.days + dayString + " .";
	  else if ( (age.years == 0) && (age.months == 0) && (age.days > 0) )
		ageString = "Only " + age.days + dayString + " !";
	  else if ( (age.years > 0) && (age.months == 0) && (age.days == 0) )
		ageString = age.years + yearString ;
	  else if ( (age.years > 0) && (age.months > 0) && (age.days == 0) )
		ageString = age.years + yearString + " and " + age.months + monthString + " .";
	  else if ( (age.years == 0) && (age.months > 0) && (age.days > 0) )
		ageString = age.months + monthString + " and " + age.days + dayString + " .";
	  else if ( (age.years > 0) && (age.months == 0) && (age.days > 0) )
		ageString = age.years + yearString + " and " + age.days + dayString + " .";
	  else if ( (age.years == 0) && (age.months > 0) && (age.days == 0) )
		ageString = age.months + monthString + " .";
	  else ageString = "Oops! Could not calculate your age!";
	  return ageString;
	}

	var age = document.getElementById('dob').value;
	agesplit = age.split('-');
	var ddd = agesplit[2];
	var mmm = agesplit[1];
	var yyy = agesplit[0];
	var datebnalo = mmm+'/'+ddd+'/'+yyy;
	var agevar = getAge(datebnalo);
	document.getElementById('calculate_age').innerText=agevar;
	function readURL(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.fileName = input.files[0].name;
            reader.onload = function (e) {
                if (id == "aadhar_card_image" || id == "pan_card_image") {
                    $('#' + id).text(e.target.fileName);
                } else {
                    // alert("Sd");
                    $('#' + id).attr('src', e.target.result);
                    $('#' + id).show();
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
	$(document).on("click",'#checked',function(){
		if($(this).is(':checked')){
			$('#c_address').val($('#p_address').val());
			$('#c_pin_code').val($('#pin_code').val());
			$('#c_office').val($('#p_office').val());
			$('#c_residence').val($('#p_residence').val());
			$('#c_mobile').val($('#mobile').val());
		}else{
			$('#c_address').val('');
			$('#c_pin_code').val('');
			$('#c_office').val('');
			$('#c_residence').val('');
			$('#c_mobile').val('');
		}
	});
	$(document).on("blur","#dob",function(){
		var age = $(this).val();
		agesplit = age.split('-');
		var ddd = agesplit[2];
		var mmm = agesplit[1];
		var yyy = agesplit[0];
		var datebnalo = mmm+'/'+ddd+'/'+yyy;
		var agevar = getAge(datebnalo);
		$('#calculate_age').text(agevar);
	});
	
    // $(document).on("click", ".apply", function () {
    //     var job = $(this).data('job');
    //     console.log(job);
    //     $(".job_title").text(job.job_title);
    //     $("#job_id").val(job.id);
    //     $("#acadmic").html('');
    //     $("#AddWordExperience").html('');
    //     $("#AddRelavantExperience").html('');
    //     $('#AddBoxes').modal('toggle');
    // });
    // Add remove code for Acadmic
	var accadmic_count=100;
    $(document).on("click", "#AddAcadmic", function () {
		
        $("#acadmic").append('<tr><td><input type="text" class="form-control" placeholder="Degree" name="acadmic_degree[]"></td><td><input type="text" class="form-control" placeholder="Board" name="acadmic_board[]"></td><td><input type="text" class="form-control" placeholder="Subject" name="acadmic_sub[]"></td><td><input type="number" class="form-control" placeholder="Passing Year" max="2021" min="1970" name="acadmic_passing_year[]"></td><td><input type="number" class="form-control" placeholder="Marks %" name="acadmic_obtain_mark[]"></td><td><input type="text" class="form-control" placeholder="Rank" name="acadmic_rank[]"></td><td><label for="acadmic_file_'+accadmic_count+'" class="feather icon-upload border p-1 bg-info rounded"></label><input style="display: none;" id="acadmic_file_'+accadmic_count+'" name="acadmic_file[]" type="file"/><span id="acadmic_file_image"></span><i class="feather icon-minus removeAcadmic border ml-1 p-1 bg-danger rounded"></i></td></tr>');
		accadmic_count++;
    });
    $(document).on("click", ".removeAcadmic", function () {
        $(this).parent().parent().remove();
    });
    // Add Remove code for Required Skill Set
    $(document).on("click", "#AddWordExperience", function () {
        // ;
        // var count = parseInt($('#requiedSkillCount').val()) + 1;
        $("#work_experience").append('<tr><td><input type="text" class="form-control" placeholder="Organization Name" name="work_o_name[]"></td><td><input type="text" class="form-control" placeholder="Designation" name="work_o_designation[]"></td><td><input type="number" class="form-control" placeholder="Salary" name="work_o_salary[]"></td><td><input type="date" class="form-control" placeholder="From" name="work_o_from[]"></td><td><input type="date" class="form-control" placeholder="To" name="work_o_to[]"></td><td><input type="text" class="form-control" placeholder="Role" name="work_o_role[]"></td><td><label for="work_file_'+accadmic_count+'" class="feather icon-upload border p-1 bg-info rounded"></label><input style="display: none;" id="work_file_'+accadmic_count+'" name="work_file[]" type="file"/><i class="feather icon-minus removeWorkExperience border ml-1 p-1 bg-danger rounded"></i></td></tr>');
        // $('#requiedSkillCount').val(count);
    });
    $(document).on("click", ".removeWorkExperience", function () {
        $(this).parent().parent().remove();
    });

    $(document).on("click", "#AddRelavantExperience", function () {
        var tableLength = document.getElementById("relevent_experience_table").rows.length;
        $("#relavant_experience").append('<tr><td>' + tableLength + '</td><td><input type="text" class="form-control relevent_experience_type" placeholder="Relevent Experience Type" name="relevent_type[]"></td><td><input type="text" class="form-control relevent_experience_detail" placeholder="Relevent Experience Detail" name="relevent_detail[]"></td><td><button type="button" class="btn btn-danger btn-sm rounded removeReleventExperience"><i class="feather icon-minus"></i></button></td></tr>');
    });
    $(document).on("click", ".removeReleventExperience", function () {
        $(this).parent().parent().remove();
        var tableRows = document.getElementById("relevent_experience_table").rows.length;
        if (tableRows) {
            for (let index = 0; index < tableRows; index++) {
                document.getElementById("relevent_experience_table").rows[index].firstChild.innerHTML = index;
            }
        }
    });
    
    $("#photo_card").change(function () {
        readURL(this, "photo_card_image");
    });
    $("#sign_card").change(function () {
        readURL(this, "sign_card_image");
    });
    $("#pan_card").change(function () {
        readURL(this, "pan_card_image");
    });
    $("#aadhar_card").change(function () {
        readURL(this, "aadhar_card_image");
    });
    $(document).on('change',".acadmic_file",function () {
        // alert("call read");
        readURL(this, "acadmic_file_image");
    });
    // $("form").submit(function(e){
    //     e.preventDefault();
    // });
    // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form#jobEditForm").validate({
    // Specify validation rules
    errorClass: "text-danger",
    rules: {
      first_name: {
          required:true,
          maxlength:50,
          minlength:3
      },
      father_name:{
          required:true,
          maxlength:50,
          minlength:3
      },
      mother_name:"required",
      dob:{
            required:true,
            date: true
            },
      nationality:"required",
      p_address:"required",
      pin_code:{
        required:true,
        min: 100001,
        max: 999999
      },
      mobile:{
        required:true,
        min: 1000000000,
        max: 9999999999
      },
      email:{
          required:true,
          email:true
      },
      c_address:"required",
      c_pin_code:{
        required:true,
        min: 100001,
        max: 999999
      },
      c_mobile:{
        required:true,
        min: 1000000000,
        max: 9999999999
      },
      field_of_specialization:{
        required:true,
        maxlength:2000,
        minlength:100
      },
      present_employment_name:{
        required:true,
        maxlength:2000,
        minlength:10
      },
      present_employment_designation:"required",
      present_employment_ctc:"required",
      suitable_position:{
          required:true,
          minlength:100,
          maxlength:1000
          },
      reference1_name:"required",
      reference1_email:{
          required:true,
          email:true
      },
      how_referee1_know_you:"required",
      reference1_mobile:{
        required:true,
        min:1000000000,
        max:9999999999
      },
      reference2_name:"required",
      reference2_email:{
        required:true,
        email:true 
      },
      how_referee2_know_you:"required",
      reference2_mobile:{
        required:true,
        min: 1000000000,
        max: 9999999999
      },
      pan_card:{
          required:true,
          accept:"application/pdf,image/jpeg,image/jpg"
      }
    },
    // Specify validation error messages
    messages: {
        first_name: {
          required:"Please enter your First Name",
          maxlength:"Max Length 50 Char",
          minlength:"Min Length 3 Char",
        },
        father_name:{
          required:"Please enter Father Name",
          maxlength:"Max Length 50 Char",
          minlength:"Min Length 3 Char",
        },
        mother_name:"Please Enter Mother Name",
        dob:{
            required:"Please Enter DOB",
            date:"please fill valid date"
            },
        nationality:"Please Enter Nationality",
        p_address:"Please Enter Your Parament Address",
        pin_code:{
            required:"Please Enter Pin Code",
            min: "Plese fill valid Pin Code",
            max: "Plese fill valid Pin Code"
        },
        mobile:{
            required:"Please Enter Valid Mobile No",
            min: "Please Filled Valid Mobile No",
            max: "Please Filled Valid Mobile No"
            },
        email:{
          required:"E-mail is required",
          email:"plese fill valid email id"
        },
        c_address:"Please Enter Your Corresponding Address",
        c_pin_code:{
            required:"Please Enter Pin Code",
            min: "Please fill valid Pin Code",
            max: "Please fill valid Pin Code"
        },
        c_mobile:{
            required:"Please Enter Valid Mobile No",
            min: "Please Filled Valid Mobile No",
            max: "Please Filled Valid Mobile No"
        },
        field_of_specialization:{
            required:"Specialization Field is required",
            maxlength:"Max Length:2000 char",
            minlength:"Min Length:100 char"
        },
        present_employment_name:{
            required:"Employment Name and Address is required",
            maxlength:"Max Length:2000 char",
            minlength:"Min Length:10 char"
        },
        present_employment_designation:"Designation is required",
        present_employment_ctc:"Please shared you ctc details",
        suitable_position : {
          required : "Describe how you are suitable for this position",
          minlength : "Min Length:100 Char",
          maxlength : "Max Length:1000 Char"
          },
        reference1_name:"Referee Name is required field",
        reference1_email:{
          required:"E-mail is Required Field",
          email:"Please Provide a Valid Email -id",
        },
        how_referee1_know_you:"Please describe how referee know you ?",
        reference1_mobile:{
            required:"Please Enter Valid Mobile No",
            min: "Please Filled Valid Mobile No",
            max: "Please Filled Valid Mobile No"
        },
        reference2_name:"Referee Name is required field",
        reference2_email:{
          required:"E-mail is Required Field",
          email:"Please Provide a Valid Email -id",
        },
        how_referee2_know_you:"Please describe how referee know you ?",
        reference2_mobile:{
            required:"Please Enter Valid Mobile No",
            min: "Please Filled Valid Mobile No",
            max: "Please Filled Valid Mobile No"
        },
        pan_card:{
          required:"Resume is required field",
          accept:"Resume should be in jpeg,jpeg,pdf"
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
