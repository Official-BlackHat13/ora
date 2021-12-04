<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    * {
        box-sizing: border-box;
    }

    /* body {
        background-color: #f1f1f1;
    } */

    #regForm {
        /* background-color: #ffffff; */
        margin: 40px auto;
        font-family: Raleway;
        padding: 40px;
        width: 100%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    /* input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #302f2f;
    } */

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #0275d8;
        color: #ffffff;
        border: none;
        padding: 20px 20px;
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
        background-color: #66b2f5;
    }

    #AddAcadmic {
        width: 100px;
    }

    #AddWordExperience {
        width: 100px;
    }

    #application_model {
        max-width: 1000px;
        min-width: 1000px;
        /* align-content: center; */
    }

    .input_field {
        border: 0;
        padding: 0;
        z-index: 1;
        background-color: transparent;
        border-bottom: 2px solid #eee;
        font: inherit;
        font-size: 14px;
        line-height: 30px;
        /* &:focus, &:valid  */
        outline: 0;
        border-bottom-color: #665856;
        /* &+.input_label  */
        color: #665856;

    }

    .input {
        display: flex;
        flex-direction: column-reverse;
        position: relative;
        padding-top: 10px;
        /* & + .input */
        margin-top: 10px;
    }

    .input_label {
        color: #8597a3;
        position: absolute;
        top: 20px;

    }

</style>
<div class="modal fade" id="AddBoxesnew" tabindex="-1" role="dialog" aria-labelledby="AddBoxesLabel"
    aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl" role="document" id="application_model">
        <div class="modal-content">
            <div class="modal-header bg-primary text-center">
                <h5 class="modal-title text-center" id="AddBoxesLabel">Digital India Corporation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="regForm" method="post" enctype="multipart/form-data" action="{{ route('job-apply') }}">
                @csrf
                <input type="hidden" id="job_id" name="job_id" value="0" />
                <input type="hidden" id="apply_job" name="apply_job" value="0" />
                @php
                    @$userdata = json_decode(Auth::user()->user_data);
                @endphp
                <!-- One "tab" for each step in the form: -->

                <div id="jobapply">
                    <div class="tab">
                        <div class="col-lg-12">
                            <div class="row">
                                <label for="first_name input_field">1. Name of Applicant</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control input_field" id="first_name"
                                        placeholder="First Name" name="first_name"
                                        value="{{ isset($userdata->first_name) ? $userdata->first_name : '' }}"
                                        required>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control input_field" id="middle_name"
                                        placeholder="Middle Name" name="middle_name"
                                        value="{{ isset($userdata->middle_name) ? $userdata->middle_name : '' }}">
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control input_field" id="last_name"
                                        placeholder="Last Name" name="last_name"
                                        value="{{ isset($userdata->last_name) ? $userdata->last_name : '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <label for="father_name input_field">2. Father's Name</label>
                                <div class="col-lg-4">
                                <input type="text" class="form-control input_field" id="father_name" placeholder="Father Name"
                                    name="father_name"
                                    value="{{ isset($userdata->father_name) ? $userdata->father_name : '' }}"
                                    required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="mother_name">3. Mother's Name </label>
                                <input type="text" class="form-control inline" id="mother_name" placeholder="Mother Name"
                                    name="mother_name"
                                    value="{{ isset($userdata->mother_name) ? $userdata->mother_name : '' }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="marital_status">4. Marital Status </label>
                            <div class="form-group">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input"
                                            value="{{ isset($userdata->marital_status) ? $userdata->marital_status : '' }}"
                                            name="marital_status"> Single
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input"
                                            value="{{ isset($userdata->marital_status) ? $userdata->marital_status : '' }}"
                                            checked name="marital_status"> Married
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input"
                                            value="{{ isset($userdata->marital_status) ? $userdata->marital_status : '' }}"
                                            name="marital_status"> Divorced
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input"
                                            value="{{ isset($userdata->marital_status) ? $userdata->marital_status : '' }}"
                                            name="marital_status"> Widowed
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input"
                                            value="{{ isset($userdata->marital_status) ? $userdata->marital_status : '' }}"
                                            name="marital_status"> Complicated
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="spouse_name">5. Spouse Name </label>
                                <input type="text" class="form-control" id="spouse_name" placeholder="Spouse Name"
                                    name="spouse_name"
                                    value="{{ isset($userdata->spouse_name) ? $userdata->spouse_name : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="dob">6. Date Of Birth </label>
                                <input id="dob" class="form-control" type="date" name="dob" placeholder="DD/MM/YYYY"
                                    value="{{ isset($userdata->dob) ? $userdata->dob : '' }}" required />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="sex">7. Gender</label>
                            <div class="form-group">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input"
                                            value="{{ isset($userdata->sex) ? $userdata->sex : '' }}" checked
                                            name="sex">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input"
                                            value="{{ isset($userdata->sex) ? $userdata->sex : '' }}" name="sex">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="nationality">8. Nationality</label>
                                <input type="text" class="form-control" id="nationality"
                                    placeholder="Your Nationality" name="nationality"
                                    value="{{ isset($userdata->nationality) ? $userdata->nationality : '' }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="project">9. Category</label>
                            <div class="form-group">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input"
                                            value="{{ isset($userdata->category) ? $userdata->category : '' }}"
                                            checked name="category"> GEN
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input"
                                            value="{{ isset($userdata->category) ? $userdata->category : '' }}"
                                            name="category"> OBC
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input"
                                            value="{{ isset($userdata->category) ? $userdata->category : '' }}"
                                            name="category"> SC
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input"
                                            value="{{ isset($userdata->category) ? $userdata->category : '' }}"
                                            name="category"> ST
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <label for="p_address">10. Permanent Address</label>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-9">
                                    <textarea class="form-control" id="p_address" name="p_address"
                                        placeholder="Permanent Address" rows="4"
                                        value="{{ isset($userdata->p_address) ? $userdata->p_address : '' }}"
                                        name="category" required></textarea>
                                </div>
                                <div class="col-lg-3">
                                    <input type="number" class="form-control" id="pin_code" min="111111" max="999999"
                                        placeholder="Pin Code" name="pin_code"
                                        value="{{ isset($userdata->pin_code) ? $userdata->pin_code : '' }}" required>
                                </div>
                            </div>
                        </div>
                        <label for="c_address">11. Address for Correspondence</label>
                        <label>
                            <input type="checkbox" value="" id="checked">
                            (<span class="cr"><i
                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                            <span>Same as Permanet Address)</span>
                        </label>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-9">
                                    <textarea class="form-control" id="c_address" name="c_address"
                                        placeholder="Correspondence Address" rows="4"
                                        value="{{ isset($userdata->c_address) ? $userdata->c_address : '' }}"
                                        required></textarea>
                                </div>
                                <div class="col-lg-3">
                                    <input type="number" class="form-control" id="c_pin_code" min="100001"
                                        max="999999" placeholder="Pin Code" required name="c_pin_code"
                                        value="{{ isset($userdata->c_pin_code) ? $userdata->c_pin_code : '' }}">
                                </div>
                            </div><br>
                            <label for="c_office" style="padding-left:10px;">Phone No.</label>
                            <div class="row">
                                <div class="col-lg-4">
                                    <input type="number" class="form-control" id="c_office" placeholder="Office"
                                        name="c_office"
                                        value="{{ isset($userdata->c_office) ? $userdata->c_office : '' }}">
                                </div>
                                <div class="col-lg-4">
                                    <input type="number" class="form-control" required id="c_mobile"
                                        placeholder="Mobile" name="c_mobile"
                                        value="{{ isset($userdata->c_mobile) ? $userdata->c_mobile : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="email">E-Mail</label>
                                <input type="email" class="form-control" id="email"
                                    value="{{ isset($userdata->email) ? $userdata->email : '' }}" required
                                    placeholder="E-Mail" name="email">
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="col-lg-12">
                            <div class="form-group ">
                                <table id="dom-jqry" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="font-size: 11px;">
                                            <th>Level</th>
                                            <th>Board</th>
                                            <th>Degree</th>
                                            <th>Subject</th>
                                            <th style="width:10%;">Passing Year</th>
                                            <th>Marks</th>
                                            <th>Grade</th>
                                            <th>Doc</th>
                                        </tr>
                                    </thead>
                                    <tbody class="col-lg-12">
                                        <tr>
                                            <td><input type="text" class="form-control" value="10th" readonly
                                                    placeholder="Degree">
                                                <input type="hidden" value="10th" name="acadmic_degree[]">
                                            </td>
                                            <td><input type="text" list="pboards" class="form-control myselect"
                                                    placeholder="Institute / Board / University" name="acadmic_board[]"
                                                    required><datalist id="pboards">
                                                    <option value="A.P. University of Law">A.P. University
                                                        of Law</option>
                                                    <option value="Acharya N. G. Ranga Agricultural University">
                                                        Acharya N. G. Ranga Agricultural University</option>
                                                    <option value="Acharya Nagarjuna University">Acharya
                                                        Nagarjuna University</option>
                                                    <option value="Adikavi Nannaya University">Adikavi
                                                        Nannaya University</option>
                                                    <option value="Alagappa University">Alagappa University
                                                    </option>
                                                    <option value="Aliah University">Aliah University
                                                    </option>
                                                    <option value="Anand Agricultural University">Anand
                                                        Agricultural University</option>
                                                    <option value="Andhra Pradesh Open University">Andhra
                                                        Pradesh Open University</option>
                                                    <option value="Andhra University">Andhra University
                                                    </option>
                                                    <option value="Anna University of Technology Tirunelveli">
                                                        Anna University of Technology Tirunelveli</option>
                                                    <option value="Anna University of Technology, Chennai">
                                                        Anna University of Technology, Chennai</option>
                                                    <option value="Anna University of Technology, Coimbatore">
                                                        Anna University of Technology, Coimbatore</option>
                                                    <option value="Anna University of Technology, Madurai">
                                                        Anna University of Technology, Madurai</option>
                                                    <option value="Anna University of Technology, Tiruchirappalli">
                                                        Anna University of Technology, Tiruchirappalli
                                                    </option>
                                                    <option value="Anna University, Chennai">Anna
                                                        University, Chennai</option>
                                                    <option value="Annamalai University">Annamalai
                                                        University</option>
                                                    <option value="Aryabhatta Knowledge University">
                                                        Aryabhatta Knowledge University</option>
                                                    <option value="Assam Agricultural University">Assam
                                                        Agricultural University</option>
                                                    <option
                                                        value="Atal Bihari Vajpayee Indian Institute of Information Technology and Management, Gwalior">
                                                        Atal Bihari Vajpayee Indian Institute of Information
                                                        Technology and Management, Gwalior</option>
                                                    <option value="Awdhesh Pratap Singh University">Awdhesh
                                                        Pratap Singh University</option>
                                                    <option
                                                        value="Ayush and Health Sciences University of Chhattisgarh">
                                                        Ayush and Health Sciences University of Chhattisgarh
                                                    </option>
                                                    <option value="B. R. Ambedkar Bihar University">B. R.
                                                        Ambedkar Bihar University</option>
                                                    <option value="Baba Farid University of Health Sciences">
                                                        Baba Farid University of Health Sciences</option>
                                                    <option value="Baba Ghulam Shah Badhshah University">
                                                        Baba Ghulam Shah Badhshah University</option>
                                                    <option value="Bangalore University">Bangalore
                                                        University</option>
                                                    <option value="Barkatullah University">Barkatullah
                                                        University</option>
                                                    <option value="Bastar University">Bastar University
                                                    </option>
                                                    <option value="Bengal Engineering and Science University, Shibpur">
                                                        Bengal Engineering and Science University, Shibpur
                                                    </option>
                                                    <option value="Berhampur University">Berhampur
                                                        University</option>
                                                    <option value="Bhagat Phool Singh Mahila Vishwavidyalaya">
                                                        Bhagat Phool Singh Mahila Vishwavidyalaya</option>
                                                    <option value="Bharat Ratna Dr. B. R. Ambedkar University">
                                                        Bharat Ratna Dr. B. R. Ambedkar University</option>
                                                    <option value="Bharathiar University">Bharathiar
                                                        University</option>
                                                    <option value="Bharathidasan University">Bharathidasan
                                                        University</option>
                                                    <option value="Bhupendra Narayan Mandal University">
                                                        Bhupendra Narayan Mandal University</option>
                                                    <option value="Bidhan Chandra Krishi Viswavidyalaya">
                                                        Bidhan Chandra Krishi Viswavidyalaya</option>
                                                    <option
                                                        value="BIEAP - Andhra Pradesh Board of Intermediate Education">
                                                        BIEAP - Andhra Pradesh Board of Intermediate
                                                        Education</option>
                                                    <option value="Biju Patnaik University of Technology">
                                                        Biju Patnaik University of Technology</option>
                                                    <option value="Birsa Agricultural University">Birsa
                                                        Agricultural University</option>
                                                    <option value="BSEAP - Andhra Pradesh Board of Secondary Education">
                                                        BSEAP - Andhra Pradesh Board of Secondary Education
                                                    </option>
                                                    <option value="BSEB - Bihar School Examination Board">
                                                        BSEB - Bihar School Examination Board</option>
                                                    <option value="BSEH - Haryana Board of School Education (HBSE)">
                                                        BSEH - Haryana Board of School Education (HBSE)
                                                    </option>
                                                    <option value="Bundelkhand University">Bundelkhand
                                                        University</option>
                                                    <option value="Calicut University">Calicut University
                                                    </option>
                                                    <option value="CBSE - Central Board of Secondary Education">
                                                        CBSE - Central Board of Secondary Education</option>
                                                    <option
                                                        value="Centre for Environmental and Planning Technology University">
                                                        Centre for Environmental and Planning Technology
                                                        University</option>
                                                    <option value="CGBSE - Chhattisgarh Board of Secondary Education">
                                                        CGBSE - Chhattisgarh Board of Secondary Education
                                                    </option>
                                                    <option value="Chanakya National Law University">
                                                        Chanakya National Law University</option>
                                                    <option
                                                        value="Chandra Shekhar Azad University of Agriculture and Technology">
                                                        Chandra Shekhar Azad University of Agriculture and
                                                        Technology</option>
                                                    <option
                                                        value="Chaudhary Charan Singh Haryana Agricultural University">
                                                        Chaudhary Charan Singh Haryana Agricultural
                                                        University</option>
                                                    <option value="Chaudhary Charan Singh University">
                                                        Chaudhary Charan Singh University</option>
                                                    <option value="Chaudhary Devi Lal University">Chaudhary
                                                        Devi Lal University</option>
                                                    <option
                                                        value="Chaudhary Sarwan Kumar Himachal Pradesh Krishi Vishvavidyalaya">
                                                        Chaudhary Sarwan Kumar Himachal Pradesh Krishi
                                                        Vishvavidyalaya</option>
                                                    <option value="Chhatrapati Shahu Ji Maharaj University">
                                                        Chhatrapati Shahu Ji Maharaj University</option>
                                                    <option value="Chhatrapati Shahuji Maharaj Medical University">
                                                        Chhatrapati Shahuji Maharaj Medical University
                                                    </option>
                                                    <option value="Chhattisgarh Swami Vivekanand Technical University">
                                                        Chhattisgarh Swami Vivekanand Technical University
                                                    </option>
                                                    <option value="Cochin University of Science and Technology">
                                                        Cochin University of Science and Technology</option>
                                                    <option value="Davangere University">Davangere
                                                        University</option>
                                                    <option value="Deen Dayal Upadhyay Gorakhpur University">
                                                        Deen Dayal Upadhyay Gorakhpur University</option>
                                                    <option
                                                        value="Deenbandhu Chhotu Ram University of Science and Technology">
                                                        Deenbandhu Chhotu Ram University of Science and
                                                        Technology</option>
                                                    <option value="Delhi Technological University">Delhi
                                                        Technological University</option>
                                                    <option value="Devi Ahilya University">Devi Ahilya
                                                        University</option>
                                                    <option value="Dharamsinh Desai University">Dharamsinh
                                                        Desai University</option>
                                                    <option value="Dibrugarh University">Dibrugarh
                                                        University</option>
                                                    <option value="Doon University">Doon University</option>
                                                    <option value="Dr. B. R. Ambedkar University">Dr. B. R.
                                                        Ambedkar University</option>
                                                    <option value="Dr. B.R. Ambedkar University, Srikakulam">Dr.
                                                        B.R. Ambedkar University, Srikakulam</option>
                                                    <option value="Dr. Babasaheb Ambedkar Marathwada University">
                                                        Dr. Babasaheb Ambedkar Marathwada University
                                                    </option>
                                                    <option value="Dr. Babasaheb Ambedkar Open University">
                                                        Dr. Babasaheb Ambedkar Open University</option>
                                                    <option value="Dr. Babasaheb Ambedkar Technological University">
                                                        Dr. Babasaheb Ambedkar Technological University
                                                    </option>
                                                    <option value="Dr. Balasaheb Sawant Konkan Krishi Vidyapeeth">
                                                        Dr. Balasaheb Sawant Konkan Krishi Vidyapeeth
                                                    </option>
                                                    <option
                                                        value="Dr. Nandamuri Taraka Rama Rao University of Health Sciences, Andhra Pradesh">
                                                        Dr. Nandamuri Taraka Rama Rao University of Health
                                                        Sciences, Andhra Pradesh</option>
                                                    <option value="Dr. Panjabrao Deshmukh Krishi Vidyapeeth">Dr.
                                                        Panjabrao Deshmukh Krishi Vidyapeeth</option>
                                                    <option value="Dr. Ram Manohar Lohia Avadh University">
                                                        Dr. Ram Manohar Lohia Avadh University</option>
                                                    <option value="Dr. Ram Manohar Lohia National Law University">
                                                        Dr. Ram Manohar Lohia National Law University
                                                    </option>
                                                    <option value="Dr. Shakuntala Misra Rehabilitation University">
                                                        Dr. Shakuntala Misra Rehabilitation University
                                                    </option>
                                                    <option
                                                        value="Dr. Yashwant Singh Parmar University of Horticulture and Forestry">
                                                        Dr. Yashwant Singh Parmar University of Horticulture
                                                        and Forestry</option>
                                                    <option value="Dravidian University">Dravidian
                                                        University</option>
                                                    <option value="Fakir Mohan University">Fakir Mohan
                                                        University</option>
                                                    <option value="G. B. Pant University of Agriculture and Technology">
                                                        G. B. Pant University of Agriculture and Technology
                                                    </option>
                                                    <option value="Gauhati University">Gauhati University
                                                    </option>
                                                    <option value="Gautam Buddh Technical University">Gautam
                                                        Buddh Technical University</option>
                                                    <option value="Gautam Buddha University">Gautam Buddha
                                                        University</option>
                                                    <option value="Goa University">Goa University</option>
                                                    <option
                                                        value="GSEB - Gujarat Secondary and Higher Secondary Education Board">
                                                        GSEB - Gujarat Secondary and Higher Secondary
                                                        Education Board</option>
                                                    <option value="Gujarat Ayurved University">Gujarat
                                                        Ayurved University</option>
                                                    <option value="Gujarat Forensic Sciences University">
                                                        Gujarat Forensic Sciences University</option>
                                                    <option value="Gujarat National Law University">Gujarat
                                                        National Law University</option>
                                                    <option value="Gujarat Technological University">Gujarat
                                                        Technological University</option>
                                                    <option value="Gujarat University">Gujarat University
                                                    </option>
                                                    <option value="Gulbarga University">Gulbarga University
                                                    </option>
                                                    <option
                                                        value="Guru Angad Dev Veterinary and Animal Sciences University">
                                                        Guru Angad Dev Veterinary and Animal Sciences
                                                        University</option>
                                                    <option value="Guru Gobind Singh Indraprastha University">
                                                        Guru Gobind Singh Indraprastha University</option>
                                                    <option
                                                        value="Guru Jambheshwar University of Science and Technology">
                                                        Guru Jambheshwar University of Science and
                                                        Technology</option>
                                                    <option value="Guru Nanak Dev University">Guru Nanak Dev
                                                        University</option>
                                                    <option value="Hemchandracharya North Gujarat University">
                                                        Hemchandracharya North Gujarat University</option>
                                                    <option value="Hidayatullah National Law University">
                                                        Hidayatullah National Law University</option>
                                                    <option value="Himachal Pradesh Technical University">
                                                        Himachal Pradesh Technical University</option>
                                                    <option value="Himachal Pradesh University">Himachal
                                                        Pradesh University</option>
                                                    <option value="HPBOSE - Himachal Pradesh Board of School Education">
                                                        HPBOSE - Himachal Pradesh Board of School Education
                                                    </option>
                                                    <option value="ICSE - Indian School Certificate Examinations?">
                                                        ICSE - Indian School Certificate Examinations?
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology Design and Manufacturing, Kurnool ">
                                                        Indian Institute of Information Technology Design
                                                        and Manufacturing, Kurnool </option>
                                                    <option
                                                        value="Indian Institute of Information Technology Tiruchirappalli">
                                                        Indian Institute of Information Technology
                                                        Tiruchirappalli</option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Agartala">
                                                        Indian Institute of Information Technology, Agartala
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Allahabad">
                                                        Indian Institute of Information Technology,
                                                        Allahabad</option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Bhagalpur">
                                                        Indian Institute of Information Technology,
                                                        Bhagalpur</option>
                                                    <option value="Indian Institute of Information Technology, Bhopal">
                                                        Indian Institute of Information Technology, Bhopal
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Design and Manufacturing, Jabalpur">
                                                        Indian Institute of Information Technology, Design
                                                        and Manufacturing, Jabalpur</option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Design and Manufacturing, Kancheepuram">
                                                        Indian Institute of Information Technology, Design
                                                        and Manufacturing, Kancheepuram</option>
                                                    <option value="Indian Institute of Information Technology, Dharwad">
                                                        Indian Institute of Information Technology, Dharwad
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Guwahati">
                                                        Indian Institute of Information Technology, Guwahati
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Kalyani">
                                                        Indian Institute of Information Technology, Kalyani
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Kota">
                                                        Indian Institute of Information Technology, Kota
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Kottayam">
                                                        Indian Institute of Information Technology, Kottayam
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Lucknow">
                                                        Indian Institute of Information Technology, Lucknow
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Manipur">
                                                        Indian Institute of Information Technology, Manipur
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Nagpur">
                                                        Indian Institute of Information Technology, Nagpur
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Pune">
                                                        Indian Institute of Information Technology, Pune
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Raichur">
                                                        Indian Institute of Information Technology, Raichur
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Ranchi">
                                                        Indian Institute of Information Technology, Ranchi
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Sonepat">
                                                        Indian Institute of Information Technology, Sonepat
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Sri City">
                                                        Indian Institute of Information Technology, Sri City
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Surat">
                                                        Indian Institute of Information Technology, Surat
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Una">
                                                        Indian Institute of Information Technology, Una
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Vadodara ">
                                                        Indian Institute of Information Technology, Vadodara
                                                    </option>
                                                    <option value="Indian Institute of Management Ahmedabad">
                                                        Indian Institute of Management Ahmedabad</option>
                                                    <option value="Indian Institute of Management Amritsar">
                                                        Indian Institute of Management Amritsar</option>
                                                    <option value="Indian Institute of Management Bangalore">
                                                        Indian Institute of Management Bangalore</option>
                                                    <option value="Indian Institute of Management Bodh Gaya">
                                                        Indian Institute of Management Bodh Gaya</option>
                                                    <option value="Indian Institute of Management Calcutta">
                                                        Indian Institute of Management Calcutta</option>
                                                    <option value="Indian Institute of Management Indore">
                                                        Indian Institute of Management Indore</option>
                                                    <option value="Indian Institute of Management Jammu">
                                                        Indian Institute of Management Jammu</option>
                                                    <option value="Indian Institute of Management Kashipur">
                                                        Indian Institute of Management Kashipur</option>
                                                    <option value="Indian Institute of Management Kozhikode">
                                                        Indian Institute of Management Kozhikode</option>
                                                    <option value="Indian Institute of Management Lucknow">
                                                        Indian Institute of Management Lucknow</option>
                                                    <option value="Indian Institute of Management Nagpur">
                                                        Indian Institute of Management Nagpur</option>
                                                    <option value="Indian Institute of Management Raipur">
                                                        Indian Institute of Management Raipur</option>
                                                    <option value="Indian Institute of Management Ranchi">
                                                        Indian Institute of Management Ranchi</option>
                                                    <option value="Indian Institute of Management Rohtak">
                                                        Indian Institute of Management Rohtak</option>
                                                    <option value="Indian Institute of Management Sambalpur">
                                                        Indian Institute of Management Sambalpur</option>
                                                    <option value="Indian Institute of Management Shillong">
                                                        Indian Institute of Management Shillong</option>
                                                    <option value="Indian Institute of Management Sirmaur">
                                                        Indian Institute of Management Sirmaur</option>
                                                    <option value="Indian Institute of Management Tiruchirappalli">
                                                        Indian Institute of Management Tiruchirappalli
                                                    </option>
                                                    <option value="Indian Institute of Management Udaipur">
                                                        Indian Institute of Management Udaipur</option>
                                                    <option value="Indian Institute of Management Visakhapatnam">
                                                        Indian Institute of Management Visakhapatnam
                                                    </option>
                                                    <option value="Indian Institute of Technology (BHU) Varanasi">
                                                        Indian Institute of Technology (BHU) Varanasi
                                                    </option>
                                                    <option value="Indian Institute of Technology (ISM) Dhanbad">
                                                        Indian Institute of Technology (ISM) Dhanbad
                                                    </option>
                                                    <option value="Indian Institute of Technology Bhilai">
                                                        Indian Institute of Technology Bhilai</option>
                                                    <option value="Indian Institute of Technology Bhubaneswar">
                                                        Indian Institute of Technology Bhubaneswar</option>
                                                    <option value="Indian Institute of Technology Bombay">
                                                        Indian Institute of Technology Bombay</option>
                                                    <option value="Indian Institute of Technology Delhi">
                                                        Indian Institute of Technology Delhi</option>
                                                    <option value="Indian Institute of Technology Dharwad">
                                                        Indian Institute of Technology Dharwad</option>
                                                    <option value="Indian Institute of Technology Gandhinagar">
                                                        Indian Institute of Technology Gandhinagar</option>
                                                    <option value="Indian Institute of Technology Goa">
                                                        Indian Institute of Technology Goa</option>
                                                    <option value="Indian Institute of Technology Guwahati">
                                                        Indian Institute of Technology Guwahati</option>
                                                    <option value="Indian Institute of Technology Hyderabad">
                                                        Indian Institute of Technology Hyderabad</option>
                                                    <option value="Indian Institute of Technology Indore">
                                                        Indian Institute of Technology Indore</option>
                                                    <option value="Indian Institute of Technology Jammu">
                                                        Indian Institute of Technology Jammu</option>
                                                    <option value="Indian Institute of Technology Jodhpur">
                                                        Indian Institute of Technology Jodhpur</option>
                                                    <option value="Indian Institute of Technology Kanpur">
                                                        Indian Institute of Technology Kanpur</option>
                                                    <option value="Indian Institute of Technology Kharagpur">
                                                        Indian Institute of Technology Kharagpur</option>
                                                    <option value="Indian Institute of Technology Madras">
                                                        Indian Institute of Technology Madras</option>
                                                    <option value="Indian Institute of Technology Mandi">
                                                        Indian Institute of Technology Mandi</option>
                                                    <option value="Indian Institute of Technology Palakkad">
                                                        Indian Institute of Technology Palakkad</option>
                                                    <option value="Indian Institute of Technology Patna">
                                                        Indian Institute of Technology Patna</option>
                                                    <option value="Indian Institute of Technology Roorkee">
                                                        Indian Institute of Technology Roorkee</option>
                                                    <option value="Indian Institute of Technology Ropar">
                                                        Indian Institute of Technology Ropar</option>
                                                    <option value="Indian Institute of Technology Tirupati">
                                                        Indian Institute of Technology Tirupati</option>
                                                    <option value="Indira Gandhi Agricultural University">
                                                        Indira Gandhi Agricultural University</option>
                                                    <option value="Indira Kala Sangeet University">Indira
                                                        Kala Sangeet University</option>
                                                    <option value="Indraprastha Institute of Information Technology">
                                                        Indraprastha Institute of Information Technology
                                                    </option>
                                                    <option value="ISC - Indian School Certificate">ISC -
                                                        Indian School Certificate</option>
                                                    <option value="Islamic University of Science and Technology">
                                                        Islamic University of Science and Technology
                                                    </option>
                                                    <option value="Jadavpur University">Jadavpur University
                                                    </option>
                                                    <option
                                                        value="Jagadguru Ramanadacharya Rajasthan Sanskrit University">
                                                        Jagadguru Ramanadacharya Rajasthan Sanskrit
                                                        University</option>
                                                    <option value="Jai Narain Vyas University">Jai Narain
                                                        Vyas University</option>
                                                    <option value="Jai Prakash University">Jai Prakash
                                                        University</option>
                                                    <option value="Jawaharlal Nehru Agricultural University">
                                                        Jawaharlal Nehru Agricultural University</option>
                                                    <option
                                                        value="Jawaharlal Nehru Architecture and Fine Arts University">
                                                        Jawaharlal Nehru Architecture and Fine Arts
                                                        University</option>
                                                    <option
                                                        value="Jawaharlal Nehru Technological University, Anantapur">
                                                        Jawaharlal Nehru Technological University, Anantapur
                                                    </option>
                                                    <option
                                                        value="Jawaharlal Nehru Technological University, Hyderabad">
                                                        Jawaharlal Nehru Technological University, Hyderabad
                                                    </option>
                                                    <option value="Jawaharlal Nehru Technological University, Kakinada">
                                                        Jawaharlal Nehru Technological University, Kakinada
                                                    </option>
                                                    <option value="Jiwaji University">Jiwaji University
                                                    </option>
                                                    <option
                                                        value="JKBOSE - Jammu and Kashmir State Board of School Education">
                                                        JKBOSE - Jammu and Kashmir State Board of School
                                                        Education</option>
                                                    <option value="Kakatiya University">Kakatiya University
                                                    </option>
                                                    <option value="Kameshwar Singh Darbhanga Sanskrit University">
                                                        Kameshwar Singh Darbhanga Sanskrit University
                                                    </option>
                                                    <option value="Kannada University">Kannada University
                                                    </option>
                                                    <option value="Kannur University">Kannur University
                                                    </option>
                                                    <option value="Karnatak University">Karnatak University
                                                    </option>
                                                    <option value="Karnataka Samskrit University">Karnataka
                                                        Samskrit University</option>
                                                    <option value="Karnataka State Law University">Karnataka
                                                        State Law University</option>
                                                    <option value="Karnataka State Open University">
                                                        Karnataka State Open University</option>
                                                    <option value="Karnataka State Women's University">
                                                        Karnataka State Women's University</option>
                                                    <option
                                                        value="Karnataka Veterinary, Animal and Fisheries Sciences University">
                                                        Karnataka Veterinary, Animal and Fisheries Sciences
                                                        University</option>
                                                    <option value="Kavi Kulguru Kalidas Sanskrit Vishwavidyalaya">
                                                        Kavi Kulguru Kalidas Sanskrit Vishwavidyalaya
                                                    </option>
                                                    <option value="Kerala Agricultural University">Kerala
                                                        Agricultural University</option>
                                                    <option value="Kerala University of Fisheries and Ocean Studies">
                                                        Kerala University of Fisheries and Ocean Studies
                                                    </option>
                                                    <option value="Kerala University of Health Sciences">
                                                        Kerala University of Health Sciences</option>
                                                    <option value="Kerala Veterinary and Animal Sciences University">
                                                        Kerala Veterinary and Animal Sciences University
                                                    </option>
                                                    <option value="Kolhan University">Kolhan University
                                                    </option>
                                                    <option value="Krantiguru Shyamji Krishna Verma Kachchh University">
                                                        Krantiguru Shyamji Krishna Verma Kachchh University
                                                    </option>
                                                    <option value="Krishna Kanta Handique State Open University">
                                                        Krishna Kanta Handique State Open University
                                                    </option>
                                                    <option value="Krishna University">Krishna University
                                                    </option>
                                                    <option value="KSGH Music and Performing Arts University">
                                                        KSGH Music and Performing Arts University</option>
                                                    <option value="Kumaun University">Kumaun University
                                                    </option>
                                                    <option value="Kurukshetra University">Kurukshetra
                                                        University</option>
                                                    <option
                                                        value="Kushabhau Thakre Patrakarita Avam Jansanchar University">
                                                        Kushabhau Thakre Patrakarita Avam Jansanchar
                                                        University</option>
                                                    <option value="Kuvempu University">Kuvempu University
                                                    </option>
                                                    <option
                                                        value="Lala Lajpat Rai University of Veterinary and Animal Sciences">
                                                        Lala Lajpat Rai University of Veterinary and Animal
                                                        Sciences</option>
                                                    <option value="Lalit Narayan Mithila University">Lalit
                                                        Narayan Mithila University</option>
                                                    <option value="M. J. P. Rohilkhand University">M. J. P.
                                                        Rohilkhand University</option>
                                                    <option value="Madhya Pradesh Bhoj Open University">
                                                        Madhya Pradesh Bhoj Open University</option>
                                                    <option
                                                        value="Madhya Pradesh Pashu-Chikitsa Vigyan Vishwavidyalaya">
                                                        Madhya Pradesh Pashu-Chikitsa Vigyan Vishwavidyalaya
                                                    </option>
                                                    <option value="Madurai Kamaraj University">Madurai
                                                        Kamaraj University</option>
                                                    <option value="Magadh University">Magadh University
                                                    </option>
                                                    <option value="Mahamaya Technical University">Mahamaya
                                                        Technical University</option>
                                                    <option value="Maharaja Ganga Singh University">Maharaja
                                                        Ganga Singh University</option>
                                                    <option value="Maharaja Krishnakumarsinhji Bhavnagar University">
                                                        Maharaja Krishnakumarsinhji Bhavnagar University
                                                    </option>
                                                    <option value="Maharaja Sayajirao University of Baroda">
                                                        Maharaja Sayajirao University of Baroda</option>
                                                    <option
                                                        value="Maharana Pratap University of Agriculture and Technology">
                                                        Maharana Pratap University of Agriculture and
                                                        Technology</option>
                                                    <option value="Maharashtra Animal and Fishery Sciences University">
                                                        Maharashtra Animal and Fishery Sciences University
                                                    </option>
                                                    <option value="Maharashtra University of Health Sciences">
                                                        Maharashtra University of Health Sciences</option>
                                                    <option value="Maharishi Dayanand University">Maharishi
                                                        Dayanand University</option>
                                                    <option value="Maharishi Mahesh Yogi Vedic Vishwavidyalaya">
                                                        Maharishi Mahesh Yogi Vedic Vishwavidyalaya</option>
                                                    <option value="Maharshi Dayanand Saraswati University">
                                                        Maharshi Dayanand Saraswati University</option>
                                                    <option value="Maharshi Panini Sanskrit University">
                                                        Maharshi Panini Sanskrit University</option>
                                                    <option value="Mahatma Gandhi Chitrakoot Gramoday University">
                                                        Mahatma Gandhi Chitrakoot Gramoday University
                                                    </option>
                                                    <option value="Mahatma Gandhi Kashi Vidyapeeth">Mahatma
                                                        Gandhi Kashi Vidyapeeth</option>
                                                    <option value="Mahatma Gandhi University">Mahatma Gandhi
                                                        University</option>
                                                    <option value="Mahatma Gandhi University, Nalgonda">
                                                        Mahatma Gandhi University, Nalgonda</option>
                                                    <option value="Mahatma Phule Krishi Vidyapeeth">Mahatma
                                                        Phule Krishi Vidyapeeth</option>
                                                    <option
                                                        value="Makhanlal Chaturvedi National University of Journalism">
                                                        Makhanlal Chaturvedi National University of
                                                        Journalism</option>
                                                    <option value="Mangalore University">Mangalore
                                                        University</option>
                                                    <option value="Manonmaniam Sundaranar University">
                                                        Manonmaniam Sundaranar University</option>
                                                    <option
                                                        value="Manyavar Sri Kanshi Ram Ji Urdu, Arabi~Farsi University">
                                                        Manyavar Sri Kanshi Ram Ji Urdu, Arabi~Farsi
                                                        University</option>
                                                    <option value="Marathwada Agricultural University">
                                                        Marathwada Agricultural University</option>
                                                    <option
                                                        value="Maulana Mazharul Haque Arabic and Persian University">
                                                        Maulana Mazharul Haque Arabic and Persian University
                                                    </option>
                                                    <option value="Mohanlal Sukhadia University">Mohanlal
                                                        Sukhadia University</option>
                                                    <option value="Mother Teresa Women's University">Mother
                                                        Teresa Women's University</option>
                                                    <option value="MPBSE - Madhya Pradesh Board of Secondary Education">
                                                        MPBSE - Madhya Pradesh Board of Secondary Education
                                                    </option>
                                                    <option
                                                        value="MSBSHSE ? Maharashtra State Board Of Secondary and Higher Secondary Education">
                                                        MSBSHSE ? Maharashtra State Board Of Secondary and
                                                        Higher Secondary Education</option>
                                                    <option value="Nalanda Open University">Nalanda Open
                                                        University</option>
                                                    <option
                                                        value="Narendra Dev University of Agriculture and Technology">
                                                        Narendra Dev University of Agriculture and
                                                        Technology</option>
                                                    <option value="National Academy of Legal Studies and Research">
                                                        National Academy of Legal Studies and Research
                                                    </option>
                                                    <option value="National Institute of Technology Agartala">
                                                        National Institute of Technology Agartala</option>
                                                    <option value="National Institute of Technology Allahabad">
                                                        National Institute of Technology Allahabad</option>
                                                    <option value="National Institute of Technology Andhra Pradesh">
                                                        National Institute of Technology Andhra Pradesh
                                                    </option>
                                                    <option value="National Institute of Technology Arunachal Pradesh">
                                                        National Institute of Technology Arunachal Pradesh
                                                    </option>
                                                    <option value="National Institute of Technology Bhopal">
                                                        National Institute of Technology Bhopal</option>
                                                    <option value="National Institute of Technology Calicut">
                                                        National Institute of Technology Calicut</option>
                                                    <option value="National Institute of Technology Delhi">
                                                        National Institute of Technology Delhi</option>
                                                    <option value="National Institute of Technology Durgapur">
                                                        National Institute of Technology Durgapur</option>
                                                    <option value="National Institute of Technology Goa">
                                                        National Institute of Technology Goa</option>
                                                    <option value="National Institute of Technology Hamirpur">
                                                        National Institute of Technology Hamirpur</option>
                                                    <option value="National Institute of Technology Jaipur">
                                                        National Institute of Technology Jaipur</option>
                                                    <option value="National Institute of Technology Jalandhar">
                                                        National Institute of Technology Jalandhar</option>
                                                    <option value="National Institute of Technology Jamshedpur">
                                                        National Institute of Technology Jamshedpur</option>
                                                    <option value="National Institute of Technology Karnataka">
                                                        National Institute of Technology Karnataka</option>
                                                    <option value="National Institute of Technology Kurukshetra">
                                                        National Institute of Technology Kurukshetra
                                                    </option>
                                                    <option value="National Institute of Technology Manipur">
                                                        National Institute of Technology Manipur</option>
                                                    <option value="National Institute of Technology Meghalaya">
                                                        National Institute of Technology Meghalaya</option>
                                                    <option value="National Institute of Technology Mizoram">
                                                        National Institute of Technology Mizoram</option>
                                                    <option value="National Institute of Technology Nagaland">
                                                        National Institute of Technology Nagaland</option>
                                                    <option value="National Institute of Technology Nagpur">
                                                        National Institute of Technology Nagpur</option>
                                                    <option value="National Institute of Technology Patna">
                                                        National Institute of Technology Patna</option>
                                                    <option value="National Institute of Technology Puducherry">
                                                        National Institute of Technology Puducherry</option>
                                                    <option value="National Institute of Technology Raipur">
                                                        National Institute of Technology Raipur</option>
                                                    <option value="National Institute of Technology Rourkela">
                                                        National Institute of Technology Rourkela</option>
                                                    <option value="National Institute of Technology Sikkim">
                                                        National Institute of Technology Sikkim</option>
                                                    <option value="National Institute of Technology Silchar">
                                                        National Institute of Technology Silchar</option>
                                                    <option value="National Institute of Technology Srinagar">
                                                        National Institute of Technology Srinagar</option>
                                                    <option value="National Institute of Technology Surat">
                                                        National Institute of Technology Surat</option>
                                                    <option value="National Institute of Technology Tiruchirappalli">
                                                        National Institute of Technology Tiruchirappalli
                                                    </option>
                                                    <option value="National Institute of Technology Uttarakhand">
                                                        National Institute of Technology Uttarakhand
                                                    </option>
                                                    <option value="National Institute of Technology Warangal">
                                                        National Institute of Technology Warangal</option>
                                                    <option value="National Law Institute University">
                                                        National Law Institute University</option>
                                                    <option value="National Law School of India University">
                                                        National Law School of India University</option>
                                                    <option value="National Law University, Delhi">National
                                                        Law University, Delhi</option>
                                                    <option value="National Law University, Jodhpur">
                                                        National Law University, Jodhpur</option>
                                                    <option value="National Law University, Orissa">National
                                                        Law University, Orissa</option>
                                                    <option value="National University of Advanced Legal Studies">
                                                        National University of Advanced Legal Studies
                                                    </option>
                                                    <option value="National University of Study and Research in Law">
                                                        National University of Study and Research in Law
                                                    </option>
                                                    <option value="Netaji Subhas Open University">Netaji
                                                        Subhas Open University</option>
                                                    <option value="Nilamber-Pitamber University">
                                                        Nilamber-Pitamber University</option>
                                                    <option value="NIOS ? National Institute of Open Schooling">
                                                        NIOS ? National Institute of Open Schooling</option>
                                                    <option value="North Maharashtra University">North
                                                        Maharashtra University</option>
                                                    <option value="North Orissa University">North Orissa
                                                        University</option>
                                                    <option value="Orissa University of Agriculture and Technology">
                                                        Orissa University of Agriculture and Technology
                                                    </option>
                                                    <option value="Osmania University">Osmania University
                                                    </option>
                                                    <option value="Palamuru University">Palamuru University
                                                    </option>
                                                    <option
                                                        value="Pandit Bhagwat Dayal Sharma University of Health Sciences">
                                                        Pandit Bhagwat Dayal Sharma University of Health
                                                        Sciences</option>
                                                    <option value="Pandit Ravishankar Shukla University">
                                                        Pandit Ravishankar Shukla University</option>
                                                    <option value="Pandit Sundarlal Sharma (Open) University">
                                                        Pandit Sundarlal Sharma (Open) University</option>
                                                    <option value="Panjab University, Chandigarh">Panjab
                                                        University, Chandigarh</option>
                                                    <option value="Patna University">Patna University
                                                    </option>
                                                    <option value="Periyar University">Periyar University
                                                    </option>
                                                    <option value="Potti Sreeramulu Telugu University">Potti
                                                        Sreeramulu Telugu University</option>
                                                    <option value="Presidency University, Kolkata">
                                                        Presidency University, Kolkata</option>
                                                    <option value="PSEB ? Punjab School Education Board">
                                                        PSEB ? Punjab School Education Board</option>
                                                    <option value="Punjab Agricultural University">Punjab
                                                        Agricultural University</option>
                                                    <option value="Punjab Technical University">Punjab
                                                        Technical University</option>
                                                    <option value="Punjabi University">Punjabi University
                                                    </option>
                                                    <option value="Rabindra Bharati University">Rabindra
                                                        Bharati University</option>
                                                    <option value="Rai University, Ahmedabad">Rai
                                                        University, Ahmedabad</option>
                                                    <option value="Rajasthan Agricultural University">
                                                        Rajasthan Agricultural University</option>
                                                    <option value="Rajasthan Ayurved University">Rajasthan
                                                        Ayurved University</option>
                                                    <option value="Rajasthan Technical University">Rajasthan
                                                        Technical University</option>
                                                    <option value="Rajasthan University of Health Sciences">
                                                        Rajasthan University of Health Sciences</option>
                                                    <option value="Rajendra Agricultural University">
                                                        Rajendra Agricultural University</option>
                                                    <option value="Rajiv Gandhi National University of Law">
                                                        Rajiv Gandhi National University of Law</option>
                                                    <option value="Rajiv Gandhi Technical University">Rajiv
                                                        Gandhi Technical University</option>
                                                    <option value="Rajiv Gandhi University of Health Sciences">
                                                        Rajiv Gandhi University of Health Sciences</option>
                                                    <option value="Rajiv Gandhi University of Knowledge Technologies">
                                                        Rajiv Gandhi University of Knowledge Technologies
                                                    </option>
                                                    <option value="Ranchi University">Ranchi University
                                                    </option>
                                                    <option value="Rani Channamma University">Rani Channamma
                                                        University</option>
                                                    <option value="Rani Durgavati University">Rani Durgavati
                                                        University</option>
                                                    <option value="Rashtrasant Tukadoji Maharaj Nagpur University">
                                                        Rashtrasant Tukadoji Maharaj Nagpur University
                                                    </option>
                                                    <option value="Ravenshaw University">Ravenshaw
                                                        University</option>
                                                    <option value="Rayalaseema University">Rayalaseema
                                                        University</option>
                                                    <option value="RBSE - Board of Secondary Education Rajasthan">
                                                        RBSE - Board of Secondary Education Rajasthan
                                                    </option>
                                                    <option value="Sambalpur University">Sambalpur
                                                        University</option>
                                                    <option value="Sampurnanand Sanskrit University">
                                                        Sampurnanand Sanskrit University</option>
                                                    <option value="Sant Gadge Baba Amravati University">Sant
                                                        Gadge Baba Amravati University</option>
                                                    <option value="Sardar Patel University">Sardar Patel
                                                        University</option>
                                                    <option
                                                        value="Sardar Vallabhbhai Patel University of Agriculture and Technology">
                                                        Sardar Vallabhbhai Patel University of Agriculture
                                                        and Technology</option>
                                                    <option value="Sardarkrushinagar Dantiwada Agricultural University">
                                                        Sardarkrushinagar Dantiwada Agricultural University
                                                    </option>
                                                    <option value="Sarguja University">Sarguja University
                                                    </option>
                                                    <option value="Satavahana University">Satavahana
                                                        University</option>
                                                    <option value="Saurashtra University">Saurashtra
                                                        University</option>
                                                    <option
                                                        value="Sher-e-Kashmir University of Agricultural Sciences and Technology of Kashmir">
                                                        Sher-e-Kashmir University of Agricultural Sciences
                                                        and Technology of Kashmir</option>
                                                    <option value="Shivaji University">Shivaji University
                                                    </option>
                                                    <option value="Shree Somnath Sanskrit University">Shree
                                                        Somnath Sanskrit University</option>
                                                    <option
                                                        value="Shreemati Nathibai Damodar Thackersey Women's University">
                                                        Shreemati Nathibai Damodar Thackersey Women's
                                                        University</option>
                                                    <option value="Shri Jagannath Sanskrit Vishvavidyalaya">
                                                        Shri Jagannath Sanskrit Vishvavidyalaya</option>
                                                    <option value="Shri Mata Vaishno Devi University">Shri
                                                        Mata Vaishno Devi University</option>
                                                    <option value="Sidho Kanho Birsha University">Sidho
                                                        Kanho Birsha University</option>
                                                    <option value="Sido Kanhu University">Sido Kanhu
                                                        University</option>
                                                    <option value="Solapur University">Solapur University
                                                    </option>
                                                    <option value="Sree Sankaracharya University of Sanskrit">
                                                        Sree Sankaracharya University of Sanskrit</option>
                                                    <option value="Sri Krishnadevaraya University">Sri
                                                        Krishnadevaraya University</option>
                                                    <option value="Sri Padmavati Mahila Visvavidyalayam">Sri
                                                        Padmavati Mahila Visvavidyalayam</option>
                                                    <option value="Sri Venkateswara Institute of Medical Sciences">
                                                        Sri Venkateswara Institute of Medical Sciences
                                                    </option>
                                                    <option value="Sri Venkateswara University">Sri
                                                        Venkateswara University</option>
                                                    <option value="Sri Venkateswara Vedic University">Sri
                                                        Venkateswara Vedic University</option>
                                                    <option value="Sri Venkateswara Veterinary University">
                                                        Sri Venkateswara Veterinary University</option>
                                                    <option value="Swami Ramanand Teerth Marathwada University">
                                                        Swami Ramanand Teerth Marathwada University</option>
                                                    <option value="Tamil Nadu Agricultural University">Tamil
                                                        Nadu Agricultural University</option>
                                                    <option value="Tamil Nadu Dr. Ambedkar Law University">
                                                        Tamil Nadu Dr. Ambedkar Law University</option>
                                                    <option value="Tamil Nadu Dr. M.G.R. Medical University">
                                                        Tamil Nadu Dr. M.G.R. Medical University</option>
                                                    <option value="Tamil Nadu Open University">Tamil Nadu
                                                        Open University</option>
                                                    <option value="Tamil Nadu Physical Education and Sports University">
                                                        Tamil Nadu Physical Education and Sports University
                                                    </option>
                                                    <option value="Tamil Nadu Teacher Education University">
                                                        Tamil Nadu Teacher Education University</option>
                                                    <option
                                                        value="Tamil Nadu Veterinary and Animal Sciences University">
                                                        Tamil Nadu Veterinary and Animal Sciences University
                                                    </option>
                                                    <option value="Tamil University">Tamil University
                                                    </option>
                                                    <option value="Telangana University">Telangana
                                                        University</option>
                                                    <option value="Thiruvalluvar University">Thiruvalluvar
                                                        University</option>
                                                    <option value="Tilka Manjhi Bhagalpur University">Tilka
                                                        Manjhi Bhagalpur University</option>
                                                    <option value="Tumkur University">Tumkur University
                                                    </option>
                                                    <option value="University of Agricultural Sciences, Bangalore">
                                                        University of Agricultural Sciences, Bangalore
                                                    </option>
                                                    <option value="University of Agricultural Sciences, Dharwad">
                                                        University of Agricultural Sciences, Dharwad
                                                    </option>
                                                    <option value="University of Burdwan">University of
                                                        Burdwan</option>
                                                    <option value="University of Calcutta">University of
                                                        Calcutta</option>
                                                    <option value="University of Gour Banga">University of
                                                        Gour Banga</option>
                                                    <option value="University of Jammu">University of Jammu
                                                    </option>
                                                    <option value="University of Kalyani">University of
                                                        Kalyani</option>
                                                    <option value="University of Kashmir">University of
                                                        Kashmir</option>
                                                    <option value="University of Kerala">University of
                                                        Kerala</option>
                                                    <option value="University of Kota">University of Kota
                                                    </option>
                                                    <option value="University of Lucknow">University of
                                                        Lucknow</option>
                                                    <option value="University of Madras">University of
                                                        Madras</option>
                                                    <option value="University of Mumbai">University of
                                                        Mumbai</option>
                                                    <option value="University of Mysore">University of
                                                        Mysore</option>
                                                    <option value="University of North Bengal">University of
                                                        North Bengal</option>
                                                    <option value="University of Pune">University of Pune
                                                    </option>
                                                    <option value="University of Rajasthan">University of
                                                        Rajasthan</option>
                                                    <option
                                                        value="UP Board - Board of High School and Intermediate Education Uttar Pradesh">
                                                        UP Board - Board of High School and Intermediate
                                                        Education Uttar Pradesh</option>
                                                    <option value="Utkal University">Utkal University
                                                    </option>
                                                    <option value="Utkal University of Culture">Utkal
                                                        University of Culture</option>
                                                    <option value="Uttar Banga Krishi Vishwavidyalaya">Uttar
                                                        Banga Krishi Vishwavidyalaya</option>
                                                    <option
                                                        value="Uttar Pradesh King George's University of Dental Sciences">
                                                        Uttar Pradesh King George's University of Dental
                                                        Sciences</option>
                                                    <option value="Uttar Pradesh Rajarshi Tandon Open University">
                                                        Uttar Pradesh Rajarshi Tandon Open University
                                                    </option>
                                                    <option value="Uttarakhand Open University">Uttarakhand
                                                        Open University</option>
                                                    <option value="Uttarakhand Technical University">
                                                        Uttarakhand Technical University</option>
                                                    <option value="Uttaranchal Sanskrit University">
                                                        Uttaranchal Sanskrit University</option>
                                                    <option value="Vardhaman Mahaveer Open University">
                                                        Vardhaman Mahaveer Open University</option>
                                                    <option value="Veer Bahadur Singh Purvanchal University">
                                                        Veer Bahadur Singh Purvanchal University</option>
                                                    <option value="Veer Kunwar Singh University">Veer Kunwar
                                                        Singh University</option>
                                                    <option value="Veer Narmad South Gujarat University">
                                                        Veer Narmad South Gujarat University</option>
                                                    <option value="Veer Surendra Sai University of Technology, Burla">
                                                        Veer Surendra Sai University of Technology, Burla
                                                    </option>
                                                    <option value="Vidyasagar University">Vidyasagar
                                                        University</option>
                                                    <option value="Vijayanagara Sri Krishnadevaraya University">
                                                        Vijayanagara Sri Krishnadevaraya University</option>
                                                    <option value="Vikram University">Vikram University
                                                    </option>
                                                    <option value="Vikrama Simhapuri University">Vikrama
                                                        Simhapuri University</option>
                                                    <option value="Vinoba Bhave University">Vinoba Bhave
                                                        University</option>
                                                    <option value="Visvesvaraya Technological University">
                                                        Visvesvaraya Technological University</option>
                                                    <option value="WBBSE - West Bengal Board of Secondary Education">
                                                        WBBSE - West Bengal Board of Secondary Education
                                                    </option>
                                                    <option
                                                        value="WBCHSE - West Bengal Council of Higher Secondary Education">
                                                        WBCHSE - West Bengal Council of Higher Secondary
                                                        Education</option>
                                                    <option
                                                        value="West Bengal National University of Juridical Sciences">
                                                        West Bengal National University of Juridical
                                                        Sciences</option>
                                                    <option value="West Bengal State University">West Bengal
                                                        State University</option>
                                                    <option
                                                        value="West Bengal University of Animal and Fishery Sciences">
                                                        West Bengal University of Animal and Fishery
                                                        Sciences</option>
                                                    <option value="West Bengal University of Health Sciences">
                                                        West Bengal University of Health Sciences</option>
                                                    <option value="West Bengal University of Technology">
                                                        West Bengal University of Technology</option>
                                                    <option value="Yashwantrao Chavan Maharashtra Open University">
                                                        Yashwantrao Chavan Maharashtra Open University
                                                    </option>
                                                    <option value="YMCA University of Science and Technology">
                                                        YMCA University of Science and Technology</option>
                                                    <option value="Yogi Vemana University">Yogi Vemana
                                                        University</option>
                                                </datalist></td>
                                            <td><input type="text" class="form-control" placeholder="Degree Name"
                                                    name="acadmic_degree_name[]" required></td>
                                            <td><input type="text" class="form-control"
                                                    placeholder="Subject(s)/Specialization" name="acadmic_sub[]"
                                                    required></td>
                                            <td><input type="number" class="form-control" placeholder="Year"
                                                    max="2021" min="1970" name="acadmic_passing_year[]" required>
                                            </td>
                                            <td><input type="number" min="0.00" max="100.00" step=".01"
                                                    class="form-control" placeholder="Marks %"
                                                    name="acadmic_obtain_mark[]" required></td>
                                            <td><input type="text" class="form-control" placeholder="Division"
                                                    name="acadmic_rank[]" required>
                                            </td>
                                            <td>
                                                <label for="acadmic_file_1"
                                                    class="feather icon-upload border p-1 bg-warning rounded"></label><input
                                                    style="width:0; height:0;" class="acadmic_file"
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
                                                    required><datalist id="pboards">
                                                    <option value="A.P. University of Law">A.P. University
                                                        of Law</option>
                                                    <option value="Acharya N. G. Ranga Agricultural University">
                                                        Acharya N. G. Ranga Agricultural University</option>
                                                    <option value="Acharya Nagarjuna University">Acharya
                                                        Nagarjuna University</option>
                                                    <option value="Adikavi Nannaya University">Adikavi
                                                        Nannaya University</option>
                                                    <option value="Alagappa University">Alagappa University
                                                    </option>
                                                    <option value="Aliah University">Aliah University
                                                    </option>
                                                    <option value="Anand Agricultural University">Anand
                                                        Agricultural University</option>
                                                    <option value="Andhra Pradesh Open University">Andhra
                                                        Pradesh Open University</option>
                                                    <option value="Andhra University">Andhra University
                                                    </option>
                                                    <option value="Anna University of Technology Tirunelveli">
                                                        Anna University of Technology Tirunelveli</option>
                                                    <option value="Anna University of Technology, Chennai">
                                                        Anna University of Technology, Chennai</option>
                                                    <option value="Anna University of Technology, Coimbatore">
                                                        Anna University of Technology, Coimbatore</option>
                                                    <option value="Anna University of Technology, Madurai">
                                                        Anna University of Technology, Madurai</option>
                                                    <option value="Anna University of Technology, Tiruchirappalli">
                                                        Anna University of Technology, Tiruchirappalli
                                                    </option>
                                                    <option value="Anna University, Chennai">Anna
                                                        University, Chennai</option>
                                                    <option value="Annamalai University">Annamalai
                                                        University</option>
                                                    <option value="Aryabhatta Knowledge University">
                                                        Aryabhatta Knowledge University</option>
                                                    <option value="Assam Agricultural University">Assam
                                                        Agricultural University</option>
                                                    <option
                                                        value="Atal Bihari Vajpayee Indian Institute of Information Technology and Management, Gwalior">
                                                        Atal Bihari Vajpayee Indian Institute of Information
                                                        Technology and Management, Gwalior</option>
                                                    <option value="Awdhesh Pratap Singh University">Awdhesh
                                                        Pratap Singh University</option>
                                                    <option
                                                        value="Ayush and Health Sciences University of Chhattisgarh">
                                                        Ayush and Health Sciences University of Chhattisgarh
                                                    </option>
                                                    <option value="B. R. Ambedkar Bihar University">B. R.
                                                        Ambedkar Bihar University</option>
                                                    <option value="Baba Farid University of Health Sciences">
                                                        Baba Farid University of Health Sciences</option>
                                                    <option value="Baba Ghulam Shah Badhshah University">
                                                        Baba Ghulam Shah Badhshah University</option>
                                                    <option value="Bangalore University">Bangalore
                                                        University</option>
                                                    <option value="Barkatullah University">Barkatullah
                                                        University</option>
                                                    <option value="Bastar University">Bastar University
                                                    </option>
                                                    <option value="Bengal Engineering and Science University, Shibpur">
                                                        Bengal Engineering and Science University, Shibpur
                                                    </option>
                                                    <option value="Berhampur University">Berhampur
                                                        University</option>
                                                    <option value="Bhagat Phool Singh Mahila Vishwavidyalaya">
                                                        Bhagat Phool Singh Mahila Vishwavidyalaya</option>
                                                    <option value="Bharat Ratna Dr. B. R. Ambedkar University">
                                                        Bharat Ratna Dr. B. R. Ambedkar University</option>
                                                    <option value="Bharathiar University">Bharathiar
                                                        University</option>
                                                    <option value="Bharathidasan University">Bharathidasan
                                                        University</option>
                                                    <option value="Bhupendra Narayan Mandal University">
                                                        Bhupendra Narayan Mandal University</option>
                                                    <option value="Bidhan Chandra Krishi Viswavidyalaya">
                                                        Bidhan Chandra Krishi Viswavidyalaya</option>
                                                    <option
                                                        value="BIEAP - Andhra Pradesh Board of Intermediate Education">
                                                        BIEAP - Andhra Pradesh Board of Intermediate
                                                        Education</option>
                                                    <option value="Biju Patnaik University of Technology">
                                                        Biju Patnaik University of Technology</option>
                                                    <option value="Birsa Agricultural University">Birsa
                                                        Agricultural University</option>
                                                    <option value="BSEAP - Andhra Pradesh Board of Secondary Education">
                                                        BSEAP - Andhra Pradesh Board of Secondary Education
                                                    </option>
                                                    <option value="BSEB - Bihar School Examination Board">
                                                        BSEB - Bihar School Examination Board</option>
                                                    <option value="BSEH - Haryana Board of School Education (HBSE)">
                                                        BSEH - Haryana Board of School Education (HBSE)
                                                    </option>
                                                    <option value="Bundelkhand University">Bundelkhand
                                                        University</option>
                                                    <option value="Calicut University">Calicut University
                                                    </option>
                                                    <option value="CBSE - Central Board of Secondary Education">
                                                        CBSE - Central Board of Secondary Education</option>
                                                    <option
                                                        value="Centre for Environmental and Planning Technology University">
                                                        Centre for Environmental and Planning Technology
                                                        University</option>
                                                    <option value="CGBSE - Chhattisgarh Board of Secondary Education">
                                                        CGBSE - Chhattisgarh Board of Secondary Education
                                                    </option>
                                                    <option value="Chanakya National Law University">
                                                        Chanakya National Law University</option>
                                                    <option
                                                        value="Chandra Shekhar Azad University of Agriculture and Technology">
                                                        Chandra Shekhar Azad University of Agriculture and
                                                        Technology</option>
                                                    <option
                                                        value="Chaudhary Charan Singh Haryana Agricultural University">
                                                        Chaudhary Charan Singh Haryana Agricultural
                                                        University</option>
                                                    <option value="Chaudhary Charan Singh University">
                                                        Chaudhary Charan Singh University</option>
                                                    <option value="Chaudhary Devi Lal University">Chaudhary
                                                        Devi Lal University</option>
                                                    <option
                                                        value="Chaudhary Sarwan Kumar Himachal Pradesh Krishi Vishvavidyalaya">
                                                        Chaudhary Sarwan Kumar Himachal Pradesh Krishi
                                                        Vishvavidyalaya</option>
                                                    <option value="Chhatrapati Shahu Ji Maharaj University">
                                                        Chhatrapati Shahu Ji Maharaj University</option>
                                                    <option value="Chhatrapati Shahuji Maharaj Medical University">
                                                        Chhatrapati Shahuji Maharaj Medical University
                                                    </option>
                                                    <option value="Chhattisgarh Swami Vivekanand Technical University">
                                                        Chhattisgarh Swami Vivekanand Technical University
                                                    </option>
                                                    <option value="Cochin University of Science and Technology">
                                                        Cochin University of Science and Technology</option>
                                                    <option value="Davangere University">Davangere
                                                        University</option>
                                                    <option value="Deen Dayal Upadhyay Gorakhpur University">
                                                        Deen Dayal Upadhyay Gorakhpur University</option>
                                                    <option
                                                        value="Deenbandhu Chhotu Ram University of Science and Technology">
                                                        Deenbandhu Chhotu Ram University of Science and
                                                        Technology</option>
                                                    <option value="Delhi Technological University">Delhi
                                                        Technological University</option>
                                                    <option value="Devi Ahilya University">Devi Ahilya
                                                        University</option>
                                                    <option value="Dharamsinh Desai University">Dharamsinh
                                                        Desai University</option>
                                                    <option value="Dibrugarh University">Dibrugarh
                                                        University</option>
                                                    <option value="Doon University">Doon University</option>
                                                    <option value="Dr. B. R. Ambedkar University">Dr. B. R.
                                                        Ambedkar University</option>
                                                    <option value="Dr. B.R. Ambedkar University, Srikakulam">Dr.
                                                        B.R. Ambedkar University, Srikakulam</option>
                                                    <option value="Dr. Babasaheb Ambedkar Marathwada University">
                                                        Dr. Babasaheb Ambedkar Marathwada University
                                                    </option>
                                                    <option value="Dr. Babasaheb Ambedkar Open University">
                                                        Dr. Babasaheb Ambedkar Open University</option>
                                                    <option value="Dr. Babasaheb Ambedkar Technological University">
                                                        Dr. Babasaheb Ambedkar Technological University
                                                    </option>
                                                    <option value="Dr. Balasaheb Sawant Konkan Krishi Vidyapeeth">
                                                        Dr. Balasaheb Sawant Konkan Krishi Vidyapeeth
                                                    </option>
                                                    <option
                                                        value="Dr. Nandamuri Taraka Rama Rao University of Health Sciences, Andhra Pradesh">
                                                        Dr. Nandamuri Taraka Rama Rao University of Health
                                                        Sciences, Andhra Pradesh</option>
                                                    <option value="Dr. Panjabrao Deshmukh Krishi Vidyapeeth">Dr.
                                                        Panjabrao Deshmukh Krishi Vidyapeeth</option>
                                                    <option value="Dr. Ram Manohar Lohia Avadh University">
                                                        Dr. Ram Manohar Lohia Avadh University</option>
                                                    <option value="Dr. Ram Manohar Lohia National Law University">
                                                        Dr. Ram Manohar Lohia National Law University
                                                    </option>
                                                    <option value="Dr. Shakuntala Misra Rehabilitation University">
                                                        Dr. Shakuntala Misra Rehabilitation University
                                                    </option>
                                                    <option
                                                        value="Dr. Yashwant Singh Parmar University of Horticulture and Forestry">
                                                        Dr. Yashwant Singh Parmar University of Horticulture
                                                        and Forestry</option>
                                                    <option value="Dravidian University">Dravidian
                                                        University</option>
                                                    <option value="Fakir Mohan University">Fakir Mohan
                                                        University</option>
                                                    <option value="G. B. Pant University of Agriculture and Technology">
                                                        G. B. Pant University of Agriculture and Technology
                                                    </option>
                                                    <option value="Gauhati University">Gauhati University
                                                    </option>
                                                    <option value="Gautam Buddh Technical University">Gautam
                                                        Buddh Technical University</option>
                                                    <option value="Gautam Buddha University">Gautam Buddha
                                                        University</option>
                                                    <option value="Goa University">Goa University</option>
                                                    <option
                                                        value="GSEB - Gujarat Secondary and Higher Secondary Education Board">
                                                        GSEB - Gujarat Secondary and Higher Secondary
                                                        Education Board</option>
                                                    <option value="Gujarat Ayurved University">Gujarat
                                                        Ayurved University</option>
                                                    <option value="Gujarat Forensic Sciences University">
                                                        Gujarat Forensic Sciences University</option>
                                                    <option value="Gujarat National Law University">Gujarat
                                                        National Law University</option>
                                                    <option value="Gujarat Technological University">Gujarat
                                                        Technological University</option>
                                                    <option value="Gujarat University">Gujarat University
                                                    </option>
                                                    <option value="Gulbarga University">Gulbarga University
                                                    </option>
                                                    <option
                                                        value="Guru Angad Dev Veterinary and Animal Sciences University">
                                                        Guru Angad Dev Veterinary and Animal Sciences
                                                        University</option>
                                                    <option value="Guru Gobind Singh Indraprastha University">
                                                        Guru Gobind Singh Indraprastha University</option>
                                                    <option
                                                        value="Guru Jambheshwar University of Science and Technology">
                                                        Guru Jambheshwar University of Science and
                                                        Technology</option>
                                                    <option value="Guru Nanak Dev University">Guru Nanak Dev
                                                        University</option>
                                                    <option value="Hemchandracharya North Gujarat University">
                                                        Hemchandracharya North Gujarat University</option>
                                                    <option value="Hidayatullah National Law University">
                                                        Hidayatullah National Law University</option>
                                                    <option value="Himachal Pradesh Technical University">
                                                        Himachal Pradesh Technical University</option>
                                                    <option value="Himachal Pradesh University">Himachal
                                                        Pradesh University</option>
                                                    <option value="HPBOSE - Himachal Pradesh Board of School Education">
                                                        HPBOSE - Himachal Pradesh Board of School Education
                                                    </option>
                                                    <option value="ICSE - Indian School Certificate Examinations?">
                                                        ICSE - Indian School Certificate Examinations?
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology Design and Manufacturing, Kurnool ">
                                                        Indian Institute of Information Technology Design
                                                        and Manufacturing, Kurnool </option>
                                                    <option
                                                        value="Indian Institute of Information Technology Tiruchirappalli">
                                                        Indian Institute of Information Technology
                                                        Tiruchirappalli</option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Agartala">
                                                        Indian Institute of Information Technology, Agartala
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Allahabad">
                                                        Indian Institute of Information Technology,
                                                        Allahabad</option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Bhagalpur">
                                                        Indian Institute of Information Technology,
                                                        Bhagalpur</option>
                                                    <option value="Indian Institute of Information Technology, Bhopal">
                                                        Indian Institute of Information Technology, Bhopal
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Design and Manufacturing, Jabalpur">
                                                        Indian Institute of Information Technology, Design
                                                        and Manufacturing, Jabalpur</option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Design and Manufacturing, Kancheepuram">
                                                        Indian Institute of Information Technology, Design
                                                        and Manufacturing, Kancheepuram</option>
                                                    <option value="Indian Institute of Information Technology, Dharwad">
                                                        Indian Institute of Information Technology, Dharwad
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Guwahati">
                                                        Indian Institute of Information Technology, Guwahati
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Kalyani">
                                                        Indian Institute of Information Technology, Kalyani
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Kota">
                                                        Indian Institute of Information Technology, Kota
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Kottayam">
                                                        Indian Institute of Information Technology, Kottayam
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Lucknow">
                                                        Indian Institute of Information Technology, Lucknow
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Manipur">
                                                        Indian Institute of Information Technology, Manipur
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Nagpur">
                                                        Indian Institute of Information Technology, Nagpur
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Pune">
                                                        Indian Institute of Information Technology, Pune
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Raichur">
                                                        Indian Institute of Information Technology, Raichur
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Ranchi">
                                                        Indian Institute of Information Technology, Ranchi
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Sonepat">
                                                        Indian Institute of Information Technology, Sonepat
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Sri City">
                                                        Indian Institute of Information Technology, Sri City
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Surat">
                                                        Indian Institute of Information Technology, Surat
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Una">
                                                        Indian Institute of Information Technology, Una
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Vadodara ">
                                                        Indian Institute of Information Technology, Vadodara
                                                    </option>
                                                    <option value="Indian Institute of Management Ahmedabad">
                                                        Indian Institute of Management Ahmedabad</option>
                                                    <option value="Indian Institute of Management Amritsar">
                                                        Indian Institute of Management Amritsar</option>
                                                    <option value="Indian Institute of Management Bangalore">
                                                        Indian Institute of Management Bangalore</option>
                                                    <option value="Indian Institute of Management Bodh Gaya">
                                                        Indian Institute of Management Bodh Gaya</option>
                                                    <option value="Indian Institute of Management Calcutta">
                                                        Indian Institute of Management Calcutta</option>
                                                    <option value="Indian Institute of Management Indore">
                                                        Indian Institute of Management Indore</option>
                                                    <option value="Indian Institute of Management Jammu">
                                                        Indian Institute of Management Jammu</option>
                                                    <option value="Indian Institute of Management Kashipur">
                                                        Indian Institute of Management Kashipur</option>
                                                    <option value="Indian Institute of Management Kozhikode">
                                                        Indian Institute of Management Kozhikode</option>
                                                    <option value="Indian Institute of Management Lucknow">
                                                        Indian Institute of Management Lucknow</option>
                                                    <option value="Indian Institute of Management Nagpur">
                                                        Indian Institute of Management Nagpur</option>
                                                    <option value="Indian Institute of Management Raipur">
                                                        Indian Institute of Management Raipur</option>
                                                    <option value="Indian Institute of Management Ranchi">
                                                        Indian Institute of Management Ranchi</option>
                                                    <option value="Indian Institute of Management Rohtak">
                                                        Indian Institute of Management Rohtak</option>
                                                    <option value="Indian Institute of Management Sambalpur">
                                                        Indian Institute of Management Sambalpur</option>
                                                    <option value="Indian Institute of Management Shillong">
                                                        Indian Institute of Management Shillong</option>
                                                    <option value="Indian Institute of Management Sirmaur">
                                                        Indian Institute of Management Sirmaur</option>
                                                    <option value="Indian Institute of Management Tiruchirappalli">
                                                        Indian Institute of Management Tiruchirappalli
                                                    </option>
                                                    <option value="Indian Institute of Management Udaipur">
                                                        Indian Institute of Management Udaipur</option>
                                                    <option value="Indian Institute of Management Visakhapatnam">
                                                        Indian Institute of Management Visakhapatnam
                                                    </option>
                                                    <option value="Indian Institute of Technology (BHU) Varanasi">
                                                        Indian Institute of Technology (BHU) Varanasi
                                                    </option>
                                                    <option value="Indian Institute of Technology (ISM) Dhanbad">
                                                        Indian Institute of Technology (ISM) Dhanbad
                                                    </option>
                                                    <option value="Indian Institute of Technology Bhilai">
                                                        Indian Institute of Technology Bhilai</option>
                                                    <option value="Indian Institute of Technology Bhubaneswar">
                                                        Indian Institute of Technology Bhubaneswar</option>
                                                    <option value="Indian Institute of Technology Bombay">
                                                        Indian Institute of Technology Bombay</option>
                                                    <option value="Indian Institute of Technology Delhi">
                                                        Indian Institute of Technology Delhi</option>
                                                    <option value="Indian Institute of Technology Dharwad">
                                                        Indian Institute of Technology Dharwad</option>
                                                    <option value="Indian Institute of Technology Gandhinagar">
                                                        Indian Institute of Technology Gandhinagar</option>
                                                    <option value="Indian Institute of Technology Goa">
                                                        Indian Institute of Technology Goa</option>
                                                    <option value="Indian Institute of Technology Guwahati">
                                                        Indian Institute of Technology Guwahati</option>
                                                    <option value="Indian Institute of Technology Hyderabad">
                                                        Indian Institute of Technology Hyderabad</option>
                                                    <option value="Indian Institute of Technology Indore">
                                                        Indian Institute of Technology Indore</option>
                                                    <option value="Indian Institute of Technology Jammu">
                                                        Indian Institute of Technology Jammu</option>
                                                    <option value="Indian Institute of Technology Jodhpur">
                                                        Indian Institute of Technology Jodhpur</option>
                                                    <option value="Indian Institute of Technology Kanpur">
                                                        Indian Institute of Technology Kanpur</option>
                                                    <option value="Indian Institute of Technology Kharagpur">
                                                        Indian Institute of Technology Kharagpur</option>
                                                    <option value="Indian Institute of Technology Madras">
                                                        Indian Institute of Technology Madras</option>
                                                    <option value="Indian Institute of Technology Mandi">
                                                        Indian Institute of Technology Mandi</option>
                                                    <option value="Indian Institute of Technology Palakkad">
                                                        Indian Institute of Technology Palakkad</option>
                                                    <option value="Indian Institute of Technology Patna">
                                                        Indian Institute of Technology Patna</option>
                                                    <option value="Indian Institute of Technology Roorkee">
                                                        Indian Institute of Technology Roorkee</option>
                                                    <option value="Indian Institute of Technology Ropar">
                                                        Indian Institute of Technology Ropar</option>
                                                    <option value="Indian Institute of Technology Tirupati">
                                                        Indian Institute of Technology Tirupati</option>
                                                    <option value="Indira Gandhi Agricultural University">
                                                        Indira Gandhi Agricultural University</option>
                                                    <option value="Indira Kala Sangeet University">Indira
                                                        Kala Sangeet University</option>
                                                    <option value="Indraprastha Institute of Information Technology">
                                                        Indraprastha Institute of Information Technology
                                                    </option>
                                                    <option value="ISC - Indian School Certificate">ISC -
                                                        Indian School Certificate</option>
                                                    <option value="Islamic University of Science and Technology">
                                                        Islamic University of Science and Technology
                                                    </option>
                                                    <option value="Jadavpur University">Jadavpur University
                                                    </option>
                                                    <option
                                                        value="Jagadguru Ramanadacharya Rajasthan Sanskrit University">
                                                        Jagadguru Ramanadacharya Rajasthan Sanskrit
                                                        University</option>
                                                    <option value="Jai Narain Vyas University">Jai Narain
                                                        Vyas University</option>
                                                    <option value="Jai Prakash University">Jai Prakash
                                                        University</option>
                                                    <option value="Jawaharlal Nehru Agricultural University">
                                                        Jawaharlal Nehru Agricultural University</option>
                                                    <option
                                                        value="Jawaharlal Nehru Architecture and Fine Arts University">
                                                        Jawaharlal Nehru Architecture and Fine Arts
                                                        University</option>
                                                    <option
                                                        value="Jawaharlal Nehru Technological University, Anantapur">
                                                        Jawaharlal Nehru Technological University, Anantapur
                                                    </option>
                                                    <option
                                                        value="Jawaharlal Nehru Technological University, Hyderabad">
                                                        Jawaharlal Nehru Technological University, Hyderabad
                                                    </option>
                                                    <option value="Jawaharlal Nehru Technological University, Kakinada">
                                                        Jawaharlal Nehru Technological University, Kakinada
                                                    </option>
                                                    <option value="Jiwaji University">Jiwaji University
                                                    </option>
                                                    <option
                                                        value="JKBOSE - Jammu and Kashmir State Board of School Education">
                                                        JKBOSE - Jammu and Kashmir State Board of School
                                                        Education</option>
                                                    <option value="Kakatiya University">Kakatiya University
                                                    </option>
                                                    <option value="Kameshwar Singh Darbhanga Sanskrit University">
                                                        Kameshwar Singh Darbhanga Sanskrit University
                                                    </option>
                                                    <option value="Kannada University">Kannada University
                                                    </option>
                                                    <option value="Kannur University">Kannur University
                                                    </option>
                                                    <option value="Karnatak University">Karnatak University
                                                    </option>
                                                    <option value="Karnataka Samskrit University">Karnataka
                                                        Samskrit University</option>
                                                    <option value="Karnataka State Law University">Karnataka
                                                        State Law University</option>
                                                    <option value="Karnataka State Open University">
                                                        Karnataka State Open University</option>
                                                    <option value="Karnataka State Women's University">
                                                        Karnataka State Women's University</option>
                                                    <option
                                                        value="Karnataka Veterinary, Animal and Fisheries Sciences University">
                                                        Karnataka Veterinary, Animal and Fisheries Sciences
                                                        University</option>
                                                    <option value="Kavi Kulguru Kalidas Sanskrit Vishwavidyalaya">
                                                        Kavi Kulguru Kalidas Sanskrit Vishwavidyalaya
                                                    </option>
                                                    <option value="Kerala Agricultural University">Kerala
                                                        Agricultural University</option>
                                                    <option value="Kerala University of Fisheries and Ocean Studies">
                                                        Kerala University of Fisheries and Ocean Studies
                                                    </option>
                                                    <option value="Kerala University of Health Sciences">
                                                        Kerala University of Health Sciences</option>
                                                    <option value="Kerala Veterinary and Animal Sciences University">
                                                        Kerala Veterinary and Animal Sciences University
                                                    </option>
                                                    <option value="Kolhan University">Kolhan University
                                                    </option>
                                                    <option value="Krantiguru Shyamji Krishna Verma Kachchh University">
                                                        Krantiguru Shyamji Krishna Verma Kachchh University
                                                    </option>
                                                    <option value="Krishna Kanta Handique State Open University">
                                                        Krishna Kanta Handique State Open University
                                                    </option>
                                                    <option value="Krishna University">Krishna University
                                                    </option>
                                                    <option value="KSGH Music and Performing Arts University">
                                                        KSGH Music and Performing Arts University</option>
                                                    <option value="Kumaun University">Kumaun University
                                                    </option>
                                                    <option value="Kurukshetra University">Kurukshetra
                                                        University</option>
                                                    <option
                                                        value="Kushabhau Thakre Patrakarita Avam Jansanchar University">
                                                        Kushabhau Thakre Patrakarita Avam Jansanchar
                                                        University</option>
                                                    <option value="Kuvempu University">Kuvempu University
                                                    </option>
                                                    <option
                                                        value="Lala Lajpat Rai University of Veterinary and Animal Sciences">
                                                        Lala Lajpat Rai University of Veterinary and Animal
                                                        Sciences</option>
                                                    <option value="Lalit Narayan Mithila University">Lalit
                                                        Narayan Mithila University</option>
                                                    <option value="M. J. P. Rohilkhand University">M. J. P.
                                                        Rohilkhand University</option>
                                                    <option value="Madhya Pradesh Bhoj Open University">
                                                        Madhya Pradesh Bhoj Open University</option>
                                                    <option
                                                        value="Madhya Pradesh Pashu-Chikitsa Vigyan Vishwavidyalaya">
                                                        Madhya Pradesh Pashu-Chikitsa Vigyan Vishwavidyalaya
                                                    </option>
                                                    <option value="Madurai Kamaraj University">Madurai
                                                        Kamaraj University</option>
                                                    <option value="Magadh University">Magadh University
                                                    </option>
                                                    <option value="Mahamaya Technical University">Mahamaya
                                                        Technical University</option>
                                                    <option value="Maharaja Ganga Singh University">Maharaja
                                                        Ganga Singh University</option>
                                                    <option value="Maharaja Krishnakumarsinhji Bhavnagar University">
                                                        Maharaja Krishnakumarsinhji Bhavnagar University
                                                    </option>
                                                    <option value="Maharaja Sayajirao University of Baroda">
                                                        Maharaja Sayajirao University of Baroda</option>
                                                    <option
                                                        value="Maharana Pratap University of Agriculture and Technology">
                                                        Maharana Pratap University of Agriculture and
                                                        Technology</option>
                                                    <option value="Maharashtra Animal and Fishery Sciences University">
                                                        Maharashtra Animal and Fishery Sciences University
                                                    </option>
                                                    <option value="Maharashtra University of Health Sciences">
                                                        Maharashtra University of Health Sciences</option>
                                                    <option value="Maharishi Dayanand University">Maharishi
                                                        Dayanand University</option>
                                                    <option value="Maharishi Mahesh Yogi Vedic Vishwavidyalaya">
                                                        Maharishi Mahesh Yogi Vedic Vishwavidyalaya</option>
                                                    <option value="Maharshi Dayanand Saraswati University">
                                                        Maharshi Dayanand Saraswati University</option>
                                                    <option value="Maharshi Panini Sanskrit University">
                                                        Maharshi Panini Sanskrit University</option>
                                                    <option value="Mahatma Gandhi Chitrakoot Gramoday University">
                                                        Mahatma Gandhi Chitrakoot Gramoday University
                                                    </option>
                                                    <option value="Mahatma Gandhi Kashi Vidyapeeth">Mahatma
                                                        Gandhi Kashi Vidyapeeth</option>
                                                    <option value="Mahatma Gandhi University">Mahatma Gandhi
                                                        University</option>
                                                    <option value="Mahatma Gandhi University, Nalgonda">
                                                        Mahatma Gandhi University, Nalgonda</option>
                                                    <option value="Mahatma Phule Krishi Vidyapeeth">Mahatma
                                                        Phule Krishi Vidyapeeth</option>
                                                    <option
                                                        value="Makhanlal Chaturvedi National University of Journalism">
                                                        Makhanlal Chaturvedi National University of
                                                        Journalism</option>
                                                    <option value="Mangalore University">Mangalore
                                                        University</option>
                                                    <option value="Manonmaniam Sundaranar University">
                                                        Manonmaniam Sundaranar University</option>
                                                    <option
                                                        value="Manyavar Sri Kanshi Ram Ji Urdu, Arabi~Farsi University">
                                                        Manyavar Sri Kanshi Ram Ji Urdu, Arabi~Farsi
                                                        University</option>
                                                    <option value="Marathwada Agricultural University">
                                                        Marathwada Agricultural University</option>
                                                    <option
                                                        value="Maulana Mazharul Haque Arabic and Persian University">
                                                        Maulana Mazharul Haque Arabic and Persian University
                                                    </option>
                                                    <option value="Mohanlal Sukhadia University">Mohanlal
                                                        Sukhadia University</option>
                                                    <option value="Mother Teresa Women's University">Mother
                                                        Teresa Women's University</option>
                                                    <option value="MPBSE - Madhya Pradesh Board of Secondary Education">
                                                        MPBSE - Madhya Pradesh Board of Secondary Education
                                                    </option>
                                                    <option
                                                        value="MSBSHSE ? Maharashtra State Board Of Secondary and Higher Secondary Education">
                                                        MSBSHSE ? Maharashtra State Board Of Secondary and
                                                        Higher Secondary Education</option>
                                                    <option value="Nalanda Open University">Nalanda Open
                                                        University</option>
                                                    <option
                                                        value="Narendra Dev University of Agriculture and Technology">
                                                        Narendra Dev University of Agriculture and
                                                        Technology</option>
                                                    <option value="National Academy of Legal Studies and Research">
                                                        National Academy of Legal Studies and Research
                                                    </option>
                                                    <option value="National Institute of Technology Agartala">
                                                        National Institute of Technology Agartala</option>
                                                    <option value="National Institute of Technology Allahabad">
                                                        National Institute of Technology Allahabad</option>
                                                    <option value="National Institute of Technology Andhra Pradesh">
                                                        National Institute of Technology Andhra Pradesh
                                                    </option>
                                                    <option value="National Institute of Technology Arunachal Pradesh">
                                                        National Institute of Technology Arunachal Pradesh
                                                    </option>
                                                    <option value="National Institute of Technology Bhopal">
                                                        National Institute of Technology Bhopal</option>
                                                    <option value="National Institute of Technology Calicut">
                                                        National Institute of Technology Calicut</option>
                                                    <option value="National Institute of Technology Delhi">
                                                        National Institute of Technology Delhi</option>
                                                    <option value="National Institute of Technology Durgapur">
                                                        National Institute of Technology Durgapur</option>
                                                    <option value="National Institute of Technology Goa">
                                                        National Institute of Technology Goa</option>
                                                    <option value="National Institute of Technology Hamirpur">
                                                        National Institute of Technology Hamirpur</option>
                                                    <option value="National Institute of Technology Jaipur">
                                                        National Institute of Technology Jaipur</option>
                                                    <option value="National Institute of Technology Jalandhar">
                                                        National Institute of Technology Jalandhar</option>
                                                    <option value="National Institute of Technology Jamshedpur">
                                                        National Institute of Technology Jamshedpur</option>
                                                    <option value="National Institute of Technology Karnataka">
                                                        National Institute of Technology Karnataka</option>
                                                    <option value="National Institute of Technology Kurukshetra">
                                                        National Institute of Technology Kurukshetra
                                                    </option>
                                                    <option value="National Institute of Technology Manipur">
                                                        National Institute of Technology Manipur</option>
                                                    <option value="National Institute of Technology Meghalaya">
                                                        National Institute of Technology Meghalaya</option>
                                                    <option value="National Institute of Technology Mizoram">
                                                        National Institute of Technology Mizoram</option>
                                                    <option value="National Institute of Technology Nagaland">
                                                        National Institute of Technology Nagaland</option>
                                                    <option value="National Institute of Technology Nagpur">
                                                        National Institute of Technology Nagpur</option>
                                                    <option value="National Institute of Technology Patna">
                                                        National Institute of Technology Patna</option>
                                                    <option value="National Institute of Technology Puducherry">
                                                        National Institute of Technology Puducherry</option>
                                                    <option value="National Institute of Technology Raipur">
                                                        National Institute of Technology Raipur</option>
                                                    <option value="National Institute of Technology Rourkela">
                                                        National Institute of Technology Rourkela</option>
                                                    <option value="National Institute of Technology Sikkim">
                                                        National Institute of Technology Sikkim</option>
                                                    <option value="National Institute of Technology Silchar">
                                                        National Institute of Technology Silchar</option>
                                                    <option value="National Institute of Technology Srinagar">
                                                        National Institute of Technology Srinagar</option>
                                                    <option value="National Institute of Technology Surat">
                                                        National Institute of Technology Surat</option>
                                                    <option value="National Institute of Technology Tiruchirappalli">
                                                        National Institute of Technology Tiruchirappalli
                                                    </option>
                                                    <option value="National Institute of Technology Uttarakhand">
                                                        National Institute of Technology Uttarakhand
                                                    </option>
                                                    <option value="National Institute of Technology Warangal">
                                                        National Institute of Technology Warangal</option>
                                                    <option value="National Law Institute University">
                                                        National Law Institute University</option>
                                                    <option value="National Law School of India University">
                                                        National Law School of India University</option>
                                                    <option value="National Law University, Delhi">National
                                                        Law University, Delhi</option>
                                                    <option value="National Law University, Jodhpur">
                                                        National Law University, Jodhpur</option>
                                                    <option value="National Law University, Orissa">National
                                                        Law University, Orissa</option>
                                                    <option value="National University of Advanced Legal Studies">
                                                        National University of Advanced Legal Studies
                                                    </option>
                                                    <option value="National University of Study and Research in Law">
                                                        National University of Study and Research in Law
                                                    </option>
                                                    <option value="Netaji Subhas Open University">Netaji
                                                        Subhas Open University</option>
                                                    <option value="Nilamber-Pitamber University">
                                                        Nilamber-Pitamber University</option>
                                                    <option value="NIOS ? National Institute of Open Schooling">
                                                        NIOS ? National Institute of Open Schooling</option>
                                                    <option value="North Maharashtra University">North
                                                        Maharashtra University</option>
                                                    <option value="North Orissa University">North Orissa
                                                        University</option>
                                                    <option value="Orissa University of Agriculture and Technology">
                                                        Orissa University of Agriculture and Technology
                                                    </option>
                                                    <option value="Osmania University">Osmania University
                                                    </option>
                                                    <option value="Palamuru University">Palamuru University
                                                    </option>
                                                    <option
                                                        value="Pandit Bhagwat Dayal Sharma University of Health Sciences">
                                                        Pandit Bhagwat Dayal Sharma University of Health
                                                        Sciences</option>
                                                    <option value="Pandit Ravishankar Shukla University">
                                                        Pandit Ravishankar Shukla University</option>
                                                    <option value="Pandit Sundarlal Sharma (Open) University">
                                                        Pandit Sundarlal Sharma (Open) University</option>
                                                    <option value="Panjab University, Chandigarh">Panjab
                                                        University, Chandigarh</option>
                                                    <option value="Patna University">Patna University
                                                    </option>
                                                    <option value="Periyar University">Periyar University
                                                    </option>
                                                    <option value="Potti Sreeramulu Telugu University">Potti
                                                        Sreeramulu Telugu University</option>
                                                    <option value="Presidency University, Kolkata">
                                                        Presidency University, Kolkata</option>
                                                    <option value="PSEB ? Punjab School Education Board">
                                                        PSEB ? Punjab School Education Board</option>
                                                    <option value="Punjab Agricultural University">Punjab
                                                        Agricultural University</option>
                                                    <option value="Punjab Technical University">Punjab
                                                        Technical University</option>
                                                    <option value="Punjabi University">Punjabi University
                                                    </option>
                                                    <option value="Rabindra Bharati University">Rabindra
                                                        Bharati University</option>
                                                    <option value="Rai University, Ahmedabad">Rai
                                                        University, Ahmedabad</option>
                                                    <option value="Rajasthan Agricultural University">
                                                        Rajasthan Agricultural University</option>
                                                    <option value="Rajasthan Ayurved University">Rajasthan
                                                        Ayurved University</option>
                                                    <option value="Rajasthan Technical University">Rajasthan
                                                        Technical University</option>
                                                    <option value="Rajasthan University of Health Sciences">
                                                        Rajasthan University of Health Sciences</option>
                                                    <option value="Rajendra Agricultural University">
                                                        Rajendra Agricultural University</option>
                                                    <option value="Rajiv Gandhi National University of Law">
                                                        Rajiv Gandhi National University of Law</option>
                                                    <option value="Rajiv Gandhi Technical University">Rajiv
                                                        Gandhi Technical University</option>
                                                    <option value="Rajiv Gandhi University of Health Sciences">
                                                        Rajiv Gandhi University of Health Sciences</option>
                                                    <option value="Rajiv Gandhi University of Knowledge Technologies">
                                                        Rajiv Gandhi University of Knowledge Technologies
                                                    </option>
                                                    <option value="Ranchi University">Ranchi University
                                                    </option>
                                                    <option value="Rani Channamma University">Rani Channamma
                                                        University</option>
                                                    <option value="Rani Durgavati University">Rani Durgavati
                                                        University</option>
                                                    <option value="Rashtrasant Tukadoji Maharaj Nagpur University">
                                                        Rashtrasant Tukadoji Maharaj Nagpur University
                                                    </option>
                                                    <option value="Ravenshaw University">Ravenshaw
                                                        University</option>
                                                    <option value="Rayalaseema University">Rayalaseema
                                                        University</option>
                                                    <option value="RBSE - Board of Secondary Education Rajasthan">
                                                        RBSE - Board of Secondary Education Rajasthan
                                                    </option>
                                                    <option value="Sambalpur University">Sambalpur
                                                        University</option>
                                                    <option value="Sampurnanand Sanskrit University">
                                                        Sampurnanand Sanskrit University</option>
                                                    <option value="Sant Gadge Baba Amravati University">Sant
                                                        Gadge Baba Amravati University</option>
                                                    <option value="Sardar Patel University">Sardar Patel
                                                        University</option>
                                                    <option
                                                        value="Sardar Vallabhbhai Patel University of Agriculture and Technology">
                                                        Sardar Vallabhbhai Patel University of Agriculture
                                                        and Technology</option>
                                                    <option value="Sardarkrushinagar Dantiwada Agricultural University">
                                                        Sardarkrushinagar Dantiwada Agricultural University
                                                    </option>
                                                    <option value="Sarguja University">Sarguja University
                                                    </option>
                                                    <option value="Satavahana University">Satavahana
                                                        University</option>
                                                    <option value="Saurashtra University">Saurashtra
                                                        University</option>
                                                    <option
                                                        value="Sher-e-Kashmir University of Agricultural Sciences and Technology of Kashmir">
                                                        Sher-e-Kashmir University of Agricultural Sciences
                                                        and Technology of Kashmir</option>
                                                    <option value="Shivaji University">Shivaji University
                                                    </option>
                                                    <option value="Shree Somnath Sanskrit University">Shree
                                                        Somnath Sanskrit University</option>
                                                    <option
                                                        value="Shreemati Nathibai Damodar Thackersey Women's University">
                                                        Shreemati Nathibai Damodar Thackersey Women's
                                                        University</option>
                                                    <option value="Shri Jagannath Sanskrit Vishvavidyalaya">
                                                        Shri Jagannath Sanskrit Vishvavidyalaya</option>
                                                    <option value="Shri Mata Vaishno Devi University">Shri
                                                        Mata Vaishno Devi University</option>
                                                    <option value="Sidho Kanho Birsha University">Sidho
                                                        Kanho Birsha University</option>
                                                    <option value="Sido Kanhu University">Sido Kanhu
                                                        University</option>
                                                    <option value="Solapur University">Solapur University
                                                    </option>
                                                    <option value="Sree Sankaracharya University of Sanskrit">
                                                        Sree Sankaracharya University of Sanskrit</option>
                                                    <option value="Sri Krishnadevaraya University">Sri
                                                        Krishnadevaraya University</option>
                                                    <option value="Sri Padmavati Mahila Visvavidyalayam">Sri
                                                        Padmavati Mahila Visvavidyalayam</option>
                                                    <option value="Sri Venkateswara Institute of Medical Sciences">
                                                        Sri Venkateswara Institute of Medical Sciences
                                                    </option>
                                                    <option value="Sri Venkateswara University">Sri
                                                        Venkateswara University</option>
                                                    <option value="Sri Venkateswara Vedic University">Sri
                                                        Venkateswara Vedic University</option>
                                                    <option value="Sri Venkateswara Veterinary University">
                                                        Sri Venkateswara Veterinary University</option>
                                                    <option value="Swami Ramanand Teerth Marathwada University">
                                                        Swami Ramanand Teerth Marathwada University</option>
                                                    <option value="Tamil Nadu Agricultural University">Tamil
                                                        Nadu Agricultural University</option>
                                                    <option value="Tamil Nadu Dr. Ambedkar Law University">
                                                        Tamil Nadu Dr. Ambedkar Law University</option>
                                                    <option value="Tamil Nadu Dr. M.G.R. Medical University">
                                                        Tamil Nadu Dr. M.G.R. Medical University</option>
                                                    <option value="Tamil Nadu Open University">Tamil Nadu
                                                        Open University</option>
                                                    <option value="Tamil Nadu Physical Education and Sports University">
                                                        Tamil Nadu Physical Education and Sports University
                                                    </option>
                                                    <option value="Tamil Nadu Teacher Education University">
                                                        Tamil Nadu Teacher Education University</option>
                                                    <option
                                                        value="Tamil Nadu Veterinary and Animal Sciences University">
                                                        Tamil Nadu Veterinary and Animal Sciences University
                                                    </option>
                                                    <option value="Tamil University">Tamil University
                                                    </option>
                                                    <option value="Telangana University">Telangana
                                                        University</option>
                                                    <option value="Thiruvalluvar University">Thiruvalluvar
                                                        University</option>
                                                    <option value="Tilka Manjhi Bhagalpur University">Tilka
                                                        Manjhi Bhagalpur University</option>
                                                    <option value="Tumkur University">Tumkur University
                                                    </option>
                                                    <option value="University of Agricultural Sciences, Bangalore">
                                                        University of Agricultural Sciences, Bangalore
                                                    </option>
                                                    <option value="University of Agricultural Sciences, Dharwad">
                                                        University of Agricultural Sciences, Dharwad
                                                    </option>
                                                    <option value="University of Burdwan">University of
                                                        Burdwan</option>
                                                    <option value="University of Calcutta">University of
                                                        Calcutta</option>
                                                    <option value="University of Gour Banga">University of
                                                        Gour Banga</option>
                                                    <option value="University of Jammu">University of Jammu
                                                    </option>
                                                    <option value="University of Kalyani">University of
                                                        Kalyani</option>
                                                    <option value="University of Kashmir">University of
                                                        Kashmir</option>
                                                    <option value="University of Kerala">University of
                                                        Kerala</option>
                                                    <option value="University of Kota">University of Kota
                                                    </option>
                                                    <option value="University of Lucknow">University of
                                                        Lucknow</option>
                                                    <option value="University of Madras">University of
                                                        Madras</option>
                                                    <option value="University of Mumbai">University of
                                                        Mumbai</option>
                                                    <option value="University of Mysore">University of
                                                        Mysore</option>
                                                    <option value="University of North Bengal">University of
                                                        North Bengal</option>
                                                    <option value="University of Pune">University of Pune
                                                    </option>
                                                    <option value="University of Rajasthan">University of
                                                        Rajasthan</option>
                                                    <option
                                                        value="UP Board - Board of High School and Intermediate Education Uttar Pradesh">
                                                        UP Board - Board of High School and Intermediate
                                                        Education Uttar Pradesh</option>
                                                    <option value="Utkal University">Utkal University
                                                    </option>
                                                    <option value="Utkal University of Culture">Utkal
                                                        University of Culture</option>
                                                    <option value="Uttar Banga Krishi Vishwavidyalaya">Uttar
                                                        Banga Krishi Vishwavidyalaya</option>
                                                    <option
                                                        value="Uttar Pradesh King George's University of Dental Sciences">
                                                        Uttar Pradesh King George's University of Dental
                                                        Sciences</option>
                                                    <option value="Uttar Pradesh Rajarshi Tandon Open University">
                                                        Uttar Pradesh Rajarshi Tandon Open University
                                                    </option>
                                                    <option value="Uttarakhand Open University">Uttarakhand
                                                        Open University</option>
                                                    <option value="Uttarakhand Technical University">
                                                        Uttarakhand Technical University</option>
                                                    <option value="Uttaranchal Sanskrit University">
                                                        Uttaranchal Sanskrit University</option>
                                                    <option value="Vardhaman Mahaveer Open University">
                                                        Vardhaman Mahaveer Open University</option>
                                                    <option value="Veer Bahadur Singh Purvanchal University">
                                                        Veer Bahadur Singh Purvanchal University</option>
                                                    <option value="Veer Kunwar Singh University">Veer Kunwar
                                                        Singh University</option>
                                                    <option value="Veer Narmad South Gujarat University">
                                                        Veer Narmad South Gujarat University</option>
                                                    <option value="Veer Surendra Sai University of Technology, Burla">
                                                        Veer Surendra Sai University of Technology, Burla
                                                    </option>
                                                    <option value="Vidyasagar University">Vidyasagar
                                                        University</option>
                                                    <option value="Vijayanagara Sri Krishnadevaraya University">
                                                        Vijayanagara Sri Krishnadevaraya University</option>
                                                    <option value="Vikram University">Vikram University
                                                    </option>
                                                    <option value="Vikrama Simhapuri University">Vikrama
                                                        Simhapuri University</option>
                                                    <option value="Vinoba Bhave University">Vinoba Bhave
                                                        University</option>
                                                    <option value="Visvesvaraya Technological University">
                                                        Visvesvaraya Technological University</option>
                                                    <option value="WBBSE - West Bengal Board of Secondary Education">
                                                        WBBSE - West Bengal Board of Secondary Education
                                                    </option>
                                                    <option
                                                        value="WBCHSE - West Bengal Council of Higher Secondary Education">
                                                        WBCHSE - West Bengal Council of Higher Secondary
                                                        Education</option>
                                                    <option
                                                        value="West Bengal National University of Juridical Sciences">
                                                        West Bengal National University of Juridical
                                                        Sciences</option>
                                                    <option value="West Bengal State University">West Bengal
                                                        State University</option>
                                                    <option
                                                        value="West Bengal University of Animal and Fishery Sciences">
                                                        West Bengal University of Animal and Fishery
                                                        Sciences</option>
                                                    <option value="West Bengal University of Health Sciences">
                                                        West Bengal University of Health Sciences</option>
                                                    <option value="West Bengal University of Technology">
                                                        West Bengal University of Technology</option>
                                                    <option value="Yashwantrao Chavan Maharashtra Open University">
                                                        Yashwantrao Chavan Maharashtra Open University
                                                    </option>
                                                    <option value="YMCA University of Science and Technology">
                                                        YMCA University of Science and Technology</option>
                                                    <option value="Yogi Vemana University">Yogi Vemana
                                                        University</option>
                                                </datalist></td>
                                            <td><input type="text" class="form-control" placeholder="Degree Name"
                                                    name="acadmic_degree_name[]" required></td>
                                            <td><input type="text" class="form-control"
                                                    placeholder="Subject(s)/Specialization" name="acadmic_sub[]"
                                                    required></td>
                                            <td><input type="number" class="form-control" placeholder="Year"
                                                    max="2021" min="1970" name="acadmic_passing_year[]" required>
                                            </td>
                                            <td><input type="number" class="form-control" placeholder="Marks %"
                                                    name="acadmic_obtain_mark[]" required></td>
                                            <td><input type="text" class="form-control" placeholder="Division"
                                                    name="acadmic_rank[]" required>
                                            </td>
                                            <td>
                                                <label for="acadmic_file_2"
                                                    class="feather icon-upload border p-1 bg-warning rounded"></label><input
                                                    style="width:0; height:0;" class="acadmic_file"
                                                    id="acadmic_file_2" name="acadmic_file[]"
                                                    onchange="ValidateSize(this)" type="file" /><span
                                                    class="acadmic_file_2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control" value="Graduation" readonly
                                                    placeholder="Degree">
                                                <input type="hidden" value="Graduation" name="acadmic_degree[]">
                                            </td>
                                            <td><input type="text" list="pboards" class="form-control myselect"
                                                    placeholder="Institute / Board / University" name="acadmic_board[]"
                                                    required><datalist id="pboards">
                                                    <option value="A.P. University of Law">A.P. University
                                                        of Law</option>
                                                    <option value="Acharya N. G. Ranga Agricultural University">
                                                        Acharya N. G. Ranga Agricultural University</option>
                                                    <option value="Acharya Nagarjuna University">Acharya
                                                        Nagarjuna University</option>
                                                    <option value="Adikavi Nannaya University">Adikavi
                                                        Nannaya University</option>
                                                    <option value="Alagappa University">Alagappa University
                                                    </option>
                                                    <option value="Aliah University">Aliah University
                                                    </option>
                                                    <option value="Anand Agricultural University">Anand
                                                        Agricultural University</option>
                                                    <option value="Andhra Pradesh Open University">Andhra
                                                        Pradesh Open University</option>
                                                    <option value="Andhra University">Andhra University
                                                    </option>
                                                    <option value="Anna University of Technology Tirunelveli">
                                                        Anna University of Technology Tirunelveli</option>
                                                    <option value="Anna University of Technology, Chennai">
                                                        Anna University of Technology, Chennai</option>
                                                    <option value="Anna University of Technology, Coimbatore">
                                                        Anna University of Technology, Coimbatore</option>
                                                    <option value="Anna University of Technology, Madurai">
                                                        Anna University of Technology, Madurai</option>
                                                    <option value="Anna University of Technology, Tiruchirappalli">
                                                        Anna University of Technology, Tiruchirappalli
                                                    </option>
                                                    <option value="Anna University, Chennai">Anna
                                                        University, Chennai</option>
                                                    <option value="Annamalai University">Annamalai
                                                        University</option>
                                                    <option value="Aryabhatta Knowledge University">
                                                        Aryabhatta Knowledge University</option>
                                                    <option value="Assam Agricultural University">Assam
                                                        Agricultural University</option>
                                                    <option
                                                        value="Atal Bihari Vajpayee Indian Institute of Information Technology and Management, Gwalior">
                                                        Atal Bihari Vajpayee Indian Institute of Information
                                                        Technology and Management, Gwalior</option>
                                                    <option value="Awdhesh Pratap Singh University">Awdhesh
                                                        Pratap Singh University</option>
                                                    <option
                                                        value="Ayush and Health Sciences University of Chhattisgarh">
                                                        Ayush and Health Sciences University of Chhattisgarh
                                                    </option>
                                                    <option value="B. R. Ambedkar Bihar University">B. R.
                                                        Ambedkar Bihar University</option>
                                                    <option value="Baba Farid University of Health Sciences">
                                                        Baba Farid University of Health Sciences</option>
                                                    <option value="Baba Ghulam Shah Badhshah University">
                                                        Baba Ghulam Shah Badhshah University</option>
                                                    <option value="Bangalore University">Bangalore
                                                        University</option>
                                                    <option value="Barkatullah University">Barkatullah
                                                        University</option>
                                                    <option value="Bastar University">Bastar University
                                                    </option>
                                                    <option value="Bengal Engineering and Science University, Shibpur">
                                                        Bengal Engineering and Science University, Shibpur
                                                    </option>
                                                    <option value="Berhampur University">Berhampur
                                                        University</option>
                                                    <option value="Bhagat Phool Singh Mahila Vishwavidyalaya">
                                                        Bhagat Phool Singh Mahila Vishwavidyalaya</option>
                                                    <option value="Bharat Ratna Dr. B. R. Ambedkar University">
                                                        Bharat Ratna Dr. B. R. Ambedkar University</option>
                                                    <option value="Bharathiar University">Bharathiar
                                                        University</option>
                                                    <option value="Bharathidasan University">Bharathidasan
                                                        University</option>
                                                    <option value="Bhupendra Narayan Mandal University">
                                                        Bhupendra Narayan Mandal University</option>
                                                    <option value="Bidhan Chandra Krishi Viswavidyalaya">
                                                        Bidhan Chandra Krishi Viswavidyalaya</option>
                                                    <option
                                                        value="BIEAP - Andhra Pradesh Board of Intermediate Education">
                                                        BIEAP - Andhra Pradesh Board of Intermediate
                                                        Education</option>
                                                    <option value="Biju Patnaik University of Technology">
                                                        Biju Patnaik University of Technology</option>
                                                    <option value="Birsa Agricultural University">Birsa
                                                        Agricultural University</option>
                                                    <option value="BSEAP - Andhra Pradesh Board of Secondary Education">
                                                        BSEAP - Andhra Pradesh Board of Secondary Education
                                                    </option>
                                                    <option value="BSEB - Bihar School Examination Board">
                                                        BSEB - Bihar School Examination Board</option>
                                                    <option value="BSEH - Haryana Board of School Education (HBSE)">
                                                        BSEH - Haryana Board of School Education (HBSE)
                                                    </option>
                                                    <option value="Bundelkhand University">Bundelkhand
                                                        University</option>
                                                    <option value="Calicut University">Calicut University
                                                    </option>
                                                    <option value="CBSE - Central Board of Secondary Education">
                                                        CBSE - Central Board of Secondary Education</option>
                                                    <option
                                                        value="Centre for Environmental and Planning Technology University">
                                                        Centre for Environmental and Planning Technology
                                                        University</option>
                                                    <option value="CGBSE - Chhattisgarh Board of Secondary Education">
                                                        CGBSE - Chhattisgarh Board of Secondary Education
                                                    </option>
                                                    <option value="Chanakya National Law University">
                                                        Chanakya National Law University</option>
                                                    <option
                                                        value="Chandra Shekhar Azad University of Agriculture and Technology">
                                                        Chandra Shekhar Azad University of Agriculture and
                                                        Technology</option>
                                                    <option
                                                        value="Chaudhary Charan Singh Haryana Agricultural University">
                                                        Chaudhary Charan Singh Haryana Agricultural
                                                        University</option>
                                                    <option value="Chaudhary Charan Singh University">
                                                        Chaudhary Charan Singh University</option>
                                                    <option value="Chaudhary Devi Lal University">Chaudhary
                                                        Devi Lal University</option>
                                                    <option
                                                        value="Chaudhary Sarwan Kumar Himachal Pradesh Krishi Vishvavidyalaya">
                                                        Chaudhary Sarwan Kumar Himachal Pradesh Krishi
                                                        Vishvavidyalaya</option>
                                                    <option value="Chhatrapati Shahu Ji Maharaj University">
                                                        Chhatrapati Shahu Ji Maharaj University</option>
                                                    <option value="Chhatrapati Shahuji Maharaj Medical University">
                                                        Chhatrapati Shahuji Maharaj Medical University
                                                    </option>
                                                    <option value="Chhattisgarh Swami Vivekanand Technical University">
                                                        Chhattisgarh Swami Vivekanand Technical University
                                                    </option>
                                                    <option value="Cochin University of Science and Technology">
                                                        Cochin University of Science and Technology</option>
                                                    <option value="Davangere University">Davangere
                                                        University</option>
                                                    <option value="Deen Dayal Upadhyay Gorakhpur University">
                                                        Deen Dayal Upadhyay Gorakhpur University</option>
                                                    <option
                                                        value="Deenbandhu Chhotu Ram University of Science and Technology">
                                                        Deenbandhu Chhotu Ram University of Science and
                                                        Technology</option>
                                                    <option value="Delhi Technological University">Delhi
                                                        Technological University</option>
                                                    <option value="Devi Ahilya University">Devi Ahilya
                                                        University</option>
                                                    <option value="Dharamsinh Desai University">Dharamsinh
                                                        Desai University</option>
                                                    <option value="Dibrugarh University">Dibrugarh
                                                        University</option>
                                                    <option value="Doon University">Doon University</option>
                                                    <option value="Dr. B. R. Ambedkar University">Dr. B. R.
                                                        Ambedkar University</option>
                                                    <option value="Dr. B.R. Ambedkar University, Srikakulam">Dr.
                                                        B.R. Ambedkar University, Srikakulam</option>
                                                    <option value="Dr. Babasaheb Ambedkar Marathwada University">
                                                        Dr. Babasaheb Ambedkar Marathwada University
                                                    </option>
                                                    <option value="Dr. Babasaheb Ambedkar Open University">
                                                        Dr. Babasaheb Ambedkar Open University</option>
                                                    <option value="Dr. Babasaheb Ambedkar Technological University">
                                                        Dr. Babasaheb Ambedkar Technological University
                                                    </option>
                                                    <option value="Dr. Balasaheb Sawant Konkan Krishi Vidyapeeth">
                                                        Dr. Balasaheb Sawant Konkan Krishi Vidyapeeth
                                                    </option>
                                                    <option
                                                        value="Dr. Nandamuri Taraka Rama Rao University of Health Sciences, Andhra Pradesh">
                                                        Dr. Nandamuri Taraka Rama Rao University of Health
                                                        Sciences, Andhra Pradesh</option>
                                                    <option value="Dr. Panjabrao Deshmukh Krishi Vidyapeeth">Dr.
                                                        Panjabrao Deshmukh Krishi Vidyapeeth</option>
                                                    <option value="Dr. Ram Manohar Lohia Avadh University">
                                                        Dr. Ram Manohar Lohia Avadh University</option>
                                                    <option value="Dr. Ram Manohar Lohia National Law University">
                                                        Dr. Ram Manohar Lohia National Law University
                                                    </option>
                                                    <option value="Dr. Shakuntala Misra Rehabilitation University">
                                                        Dr. Shakuntala Misra Rehabilitation University
                                                    </option>
                                                    <option
                                                        value="Dr. Yashwant Singh Parmar University of Horticulture and Forestry">
                                                        Dr. Yashwant Singh Parmar University of Horticulture
                                                        and Forestry</option>
                                                    <option value="Dravidian University">Dravidian
                                                        University</option>
                                                    <option value="Fakir Mohan University">Fakir Mohan
                                                        University</option>
                                                    <option value="G. B. Pant University of Agriculture and Technology">
                                                        G. B. Pant University of Agriculture and Technology
                                                    </option>
                                                    <option value="Gauhati University">Gauhati University
                                                    </option>
                                                    <option value="Gautam Buddh Technical University">Gautam
                                                        Buddh Technical University</option>
                                                    <option value="Gautam Buddha University">Gautam Buddha
                                                        University</option>
                                                    <option value="Goa University">Goa University</option>
                                                    <option
                                                        value="GSEB - Gujarat Secondary and Higher Secondary Education Board">
                                                        GSEB - Gujarat Secondary and Higher Secondary
                                                        Education Board</option>
                                                    <option value="Gujarat Ayurved University">Gujarat
                                                        Ayurved University</option>
                                                    <option value="Gujarat Forensic Sciences University">
                                                        Gujarat Forensic Sciences University</option>
                                                    <option value="Gujarat National Law University">Gujarat
                                                        National Law University</option>
                                                    <option value="Gujarat Technological University">Gujarat
                                                        Technological University</option>
                                                    <option value="Gujarat University">Gujarat University
                                                    </option>
                                                    <option value="Gulbarga University">Gulbarga University
                                                    </option>
                                                    <option
                                                        value="Guru Angad Dev Veterinary and Animal Sciences University">
                                                        Guru Angad Dev Veterinary and Animal Sciences
                                                        University</option>
                                                    <option value="Guru Gobind Singh Indraprastha University">
                                                        Guru Gobind Singh Indraprastha University</option>
                                                    <option
                                                        value="Guru Jambheshwar University of Science and Technology">
                                                        Guru Jambheshwar University of Science and
                                                        Technology</option>
                                                    <option value="Guru Nanak Dev University">Guru Nanak Dev
                                                        University</option>
                                                    <option value="Hemchandracharya North Gujarat University">
                                                        Hemchandracharya North Gujarat University</option>
                                                    <option value="Hidayatullah National Law University">
                                                        Hidayatullah National Law University</option>
                                                    <option value="Himachal Pradesh Technical University">
                                                        Himachal Pradesh Technical University</option>
                                                    <option value="Himachal Pradesh University">Himachal
                                                        Pradesh University</option>
                                                    <option value="HPBOSE - Himachal Pradesh Board of School Education">
                                                        HPBOSE - Himachal Pradesh Board of School Education
                                                    </option>
                                                    <option value="ICSE - Indian School Certificate Examinations?">
                                                        ICSE - Indian School Certificate Examinations?
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology Design and Manufacturing, Kurnool ">
                                                        Indian Institute of Information Technology Design
                                                        and Manufacturing, Kurnool </option>
                                                    <option
                                                        value="Indian Institute of Information Technology Tiruchirappalli">
                                                        Indian Institute of Information Technology
                                                        Tiruchirappalli</option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Agartala">
                                                        Indian Institute of Information Technology, Agartala
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Allahabad">
                                                        Indian Institute of Information Technology,
                                                        Allahabad</option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Bhagalpur">
                                                        Indian Institute of Information Technology,
                                                        Bhagalpur</option>
                                                    <option value="Indian Institute of Information Technology, Bhopal">
                                                        Indian Institute of Information Technology, Bhopal
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Design and Manufacturing, Jabalpur">
                                                        Indian Institute of Information Technology, Design
                                                        and Manufacturing, Jabalpur</option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Design and Manufacturing, Kancheepuram">
                                                        Indian Institute of Information Technology, Design
                                                        and Manufacturing, Kancheepuram</option>
                                                    <option value="Indian Institute of Information Technology, Dharwad">
                                                        Indian Institute of Information Technology, Dharwad
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Guwahati">
                                                        Indian Institute of Information Technology, Guwahati
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Kalyani">
                                                        Indian Institute of Information Technology, Kalyani
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Kota">
                                                        Indian Institute of Information Technology, Kota
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Kottayam">
                                                        Indian Institute of Information Technology, Kottayam
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Lucknow">
                                                        Indian Institute of Information Technology, Lucknow
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Manipur">
                                                        Indian Institute of Information Technology, Manipur
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Nagpur">
                                                        Indian Institute of Information Technology, Nagpur
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Pune">
                                                        Indian Institute of Information Technology, Pune
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Raichur">
                                                        Indian Institute of Information Technology, Raichur
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Ranchi">
                                                        Indian Institute of Information Technology, Ranchi
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Sonepat">
                                                        Indian Institute of Information Technology, Sonepat
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Sri City">
                                                        Indian Institute of Information Technology, Sri City
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Surat">
                                                        Indian Institute of Information Technology, Surat
                                                    </option>
                                                    <option value="Indian Institute of Information Technology, Una">
                                                        Indian Institute of Information Technology, Una
                                                    </option>
                                                    <option
                                                        value="Indian Institute of Information Technology, Vadodara ">
                                                        Indian Institute of Information Technology, Vadodara
                                                    </option>
                                                    <option value="Indian Institute of Management Ahmedabad">
                                                        Indian Institute of Management Ahmedabad</option>
                                                    <option value="Indian Institute of Management Amritsar">
                                                        Indian Institute of Management Amritsar</option>
                                                    <option value="Indian Institute of Management Bangalore">
                                                        Indian Institute of Management Bangalore</option>
                                                    <option value="Indian Institute of Management Bodh Gaya">
                                                        Indian Institute of Management Bodh Gaya</option>
                                                    <option value="Indian Institute of Management Calcutta">
                                                        Indian Institute of Management Calcutta</option>
                                                    <option value="Indian Institute of Management Indore">
                                                        Indian Institute of Management Indore</option>
                                                    <option value="Indian Institute of Management Jammu">
                                                        Indian Institute of Management Jammu</option>
                                                    <option value="Indian Institute of Management Kashipur">
                                                        Indian Institute of Management Kashipur</option>
                                                    <option value="Indian Institute of Management Kozhikode">
                                                        Indian Institute of Management Kozhikode</option>
                                                    <option value="Indian Institute of Management Lucknow">
                                                        Indian Institute of Management Lucknow</option>
                                                    <option value="Indian Institute of Management Nagpur">
                                                        Indian Institute of Management Nagpur</option>
                                                    <option value="Indian Institute of Management Raipur">
                                                        Indian Institute of Management Raipur</option>
                                                    <option value="Indian Institute of Management Ranchi">
                                                        Indian Institute of Management Ranchi</option>
                                                    <option value="Indian Institute of Management Rohtak">
                                                        Indian Institute of Management Rohtak</option>
                                                    <option value="Indian Institute of Management Sambalpur">
                                                        Indian Institute of Management Sambalpur</option>
                                                    <option value="Indian Institute of Management Shillong">
                                                        Indian Institute of Management Shillong</option>
                                                    <option value="Indian Institute of Management Sirmaur">
                                                        Indian Institute of Management Sirmaur</option>
                                                    <option value="Indian Institute of Management Tiruchirappalli">
                                                        Indian Institute of Management Tiruchirappalli
                                                    </option>
                                                    <option value="Indian Institute of Management Udaipur">
                                                        Indian Institute of Management Udaipur</option>
                                                    <option value="Indian Institute of Management Visakhapatnam">
                                                        Indian Institute of Management Visakhapatnam
                                                    </option>
                                                    <option value="Indian Institute of Technology (BHU) Varanasi">
                                                        Indian Institute of Technology (BHU) Varanasi
                                                    </option>
                                                    <option value="Indian Institute of Technology (ISM) Dhanbad">
                                                        Indian Institute of Technology (ISM) Dhanbad
                                                    </option>
                                                    <option value="Indian Institute of Technology Bhilai">
                                                        Indian Institute of Technology Bhilai</option>
                                                    <option value="Indian Institute of Technology Bhubaneswar">
                                                        Indian Institute of Technology Bhubaneswar</option>
                                                    <option value="Indian Institute of Technology Bombay">
                                                        Indian Institute of Technology Bombay</option>
                                                    <option value="Indian Institute of Technology Delhi">
                                                        Indian Institute of Technology Delhi</option>
                                                    <option value="Indian Institute of Technology Dharwad">
                                                        Indian Institute of Technology Dharwad</option>
                                                    <option value="Indian Institute of Technology Gandhinagar">
                                                        Indian Institute of Technology Gandhinagar</option>
                                                    <option value="Indian Institute of Technology Goa">
                                                        Indian Institute of Technology Goa</option>
                                                    <option value="Indian Institute of Technology Guwahati">
                                                        Indian Institute of Technology Guwahati</option>
                                                    <option value="Indian Institute of Technology Hyderabad">
                                                        Indian Institute of Technology Hyderabad</option>
                                                    <option value="Indian Institute of Technology Indore">
                                                        Indian Institute of Technology Indore</option>
                                                    <option value="Indian Institute of Technology Jammu">
                                                        Indian Institute of Technology Jammu</option>
                                                    <option value="Indian Institute of Technology Jodhpur">
                                                        Indian Institute of Technology Jodhpur</option>
                                                    <option value="Indian Institute of Technology Kanpur">
                                                        Indian Institute of Technology Kanpur</option>
                                                    <option value="Indian Institute of Technology Kharagpur">
                                                        Indian Institute of Technology Kharagpur</option>
                                                    <option value="Indian Institute of Technology Madras">
                                                        Indian Institute of Technology Madras</option>
                                                    <option value="Indian Institute of Technology Mandi">
                                                        Indian Institute of Technology Mandi</option>
                                                    <option value="Indian Institute of Technology Palakkad">
                                                        Indian Institute of Technology Palakkad</option>
                                                    <option value="Indian Institute of Technology Patna">
                                                        Indian Institute of Technology Patna</option>
                                                    <option value="Indian Institute of Technology Roorkee">
                                                        Indian Institute of Technology Roorkee</option>
                                                    <option value="Indian Institute of Technology Ropar">
                                                        Indian Institute of Technology Ropar</option>
                                                    <option value="Indian Institute of Technology Tirupati">
                                                        Indian Institute of Technology Tirupati</option>
                                                    <option value="Indira Gandhi Agricultural University">
                                                        Indira Gandhi Agricultural University</option>
                                                    <option value="Indira Kala Sangeet University">Indira
                                                        Kala Sangeet University</option>
                                                    <option value="Indraprastha Institute of Information Technology">
                                                        Indraprastha Institute of Information Technology
                                                    </option>
                                                    <option value="ISC - Indian School Certificate">ISC -
                                                        Indian School Certificate</option>
                                                    <option value="Islamic University of Science and Technology">
                                                        Islamic University of Science and Technology
                                                    </option>
                                                    <option value="Jadavpur University">Jadavpur University
                                                    </option>
                                                    <option
                                                        value="Jagadguru Ramanadacharya Rajasthan Sanskrit University">
                                                        Jagadguru Ramanadacharya Rajasthan Sanskrit
                                                        University</option>
                                                    <option value="Jai Narain Vyas University">Jai Narain
                                                        Vyas University</option>
                                                    <option value="Jai Prakash University">Jai Prakash
                                                        University</option>
                                                    <option value="Jawaharlal Nehru Agricultural University">
                                                        Jawaharlal Nehru Agricultural University</option>
                                                    <option
                                                        value="Jawaharlal Nehru Architecture and Fine Arts University">
                                                        Jawaharlal Nehru Architecture and Fine Arts
                                                        University</option>
                                                    <option
                                                        value="Jawaharlal Nehru Technological University, Anantapur">
                                                        Jawaharlal Nehru Technological University, Anantapur
                                                    </option>
                                                    <option
                                                        value="Jawaharlal Nehru Technological University, Hyderabad">
                                                        Jawaharlal Nehru Technological University, Hyderabad
                                                    </option>
                                                    <option value="Jawaharlal Nehru Technological University, Kakinada">
                                                        Jawaharlal Nehru Technological University, Kakinada
                                                    </option>
                                                    <option value="Jiwaji University">Jiwaji University
                                                    </option>
                                                    <option
                                                        value="JKBOSE - Jammu and Kashmir State Board of School Education">
                                                        JKBOSE - Jammu and Kashmir State Board of School
                                                        Education</option>
                                                    <option value="Kakatiya University">Kakatiya University
                                                    </option>
                                                    <option value="Kameshwar Singh Darbhanga Sanskrit University">
                                                        Kameshwar Singh Darbhanga Sanskrit University
                                                    </option>
                                                    <option value="Kannada University">Kannada University
                                                    </option>
                                                    <option value="Kannur University">Kannur University
                                                    </option>
                                                    <option value="Karnatak University">Karnatak University
                                                    </option>
                                                    <option value="Karnataka Samskrit University">Karnataka
                                                        Samskrit University</option>
                                                    <option value="Karnataka State Law University">Karnataka
                                                        State Law University</option>
                                                    <option value="Karnataka State Open University">
                                                        Karnataka State Open University</option>
                                                    <option value="Karnataka State Women's University">
                                                        Karnataka State Women's University</option>
                                                    <option
                                                        value="Karnataka Veterinary, Animal and Fisheries Sciences University">
                                                        Karnataka Veterinary, Animal and Fisheries Sciences
                                                        University</option>
                                                    <option value="Kavi Kulguru Kalidas Sanskrit Vishwavidyalaya">
                                                        Kavi Kulguru Kalidas Sanskrit Vishwavidyalaya
                                                    </option>
                                                    <option value="Kerala Agricultural University">Kerala
                                                        Agricultural University</option>
                                                    <option value="Kerala University of Fisheries and Ocean Studies">
                                                        Kerala University of Fisheries and Ocean Studies
                                                    </option>
                                                    <option value="Kerala University of Health Sciences">
                                                        Kerala University of Health Sciences</option>
                                                    <option value="Kerala Veterinary and Animal Sciences University">
                                                        Kerala Veterinary and Animal Sciences University
                                                    </option>
                                                    <option value="Kolhan University">Kolhan University
                                                    </option>
                                                    <option value="Krantiguru Shyamji Krishna Verma Kachchh University">
                                                        Krantiguru Shyamji Krishna Verma Kachchh University
                                                    </option>
                                                    <option value="Krishna Kanta Handique State Open University">
                                                        Krishna Kanta Handique State Open University
                                                    </option>
                                                    <option value="Krishna University">Krishna University
                                                    </option>
                                                    <option value="KSGH Music and Performing Arts University">
                                                        KSGH Music and Performing Arts University</option>
                                                    <option value="Kumaun University">Kumaun University
                                                    </option>
                                                    <option value="Kurukshetra University">Kurukshetra
                                                        University</option>
                                                    <option
                                                        value="Kushabhau Thakre Patrakarita Avam Jansanchar University">
                                                        Kushabhau Thakre Patrakarita Avam Jansanchar
                                                        University</option>
                                                    <option value="Kuvempu University">Kuvempu University
                                                    </option>
                                                    <option
                                                        value="Lala Lajpat Rai University of Veterinary and Animal Sciences">
                                                        Lala Lajpat Rai University of Veterinary and Animal
                                                        Sciences</option>
                                                    <option value="Lalit Narayan Mithila University">Lalit
                                                        Narayan Mithila University</option>
                                                    <option value="M. J. P. Rohilkhand University">M. J. P.
                                                        Rohilkhand University</option>
                                                    <option value="Madhya Pradesh Bhoj Open University">
                                                        Madhya Pradesh Bhoj Open University</option>
                                                    <option
                                                        value="Madhya Pradesh Pashu-Chikitsa Vigyan Vishwavidyalaya">
                                                        Madhya Pradesh Pashu-Chikitsa Vigyan Vishwavidyalaya
                                                    </option>
                                                    <option value="Madurai Kamaraj University">Madurai
                                                        Kamaraj University</option>
                                                    <option value="Magadh University">Magadh University
                                                    </option>
                                                    <option value="Mahamaya Technical University">Mahamaya
                                                        Technical University</option>
                                                    <option value="Maharaja Ganga Singh University">Maharaja
                                                        Ganga Singh University</option>
                                                    <option value="Maharaja Krishnakumarsinhji Bhavnagar University">
                                                        Maharaja Krishnakumarsinhji Bhavnagar University
                                                    </option>
                                                    <option value="Maharaja Sayajirao University of Baroda">
                                                        Maharaja Sayajirao University of Baroda</option>
                                                    <option
                                                        value="Maharana Pratap University of Agriculture and Technology">
                                                        Maharana Pratap University of Agriculture and
                                                        Technology</option>
                                                    <option value="Maharashtra Animal and Fishery Sciences University">
                                                        Maharashtra Animal and Fishery Sciences University
                                                    </option>
                                                    <option value="Maharashtra University of Health Sciences">
                                                        Maharashtra University of Health Sciences</option>
                                                    <option value="Maharishi Dayanand University">Maharishi
                                                        Dayanand University</option>
                                                    <option value="Maharishi Mahesh Yogi Vedic Vishwavidyalaya">
                                                        Maharishi Mahesh Yogi Vedic Vishwavidyalaya</option>
                                                    <option value="Maharshi Dayanand Saraswati University">
                                                        Maharshi Dayanand Saraswati University</option>
                                                    <option value="Maharshi Panini Sanskrit University">
                                                        Maharshi Panini Sanskrit University</option>
                                                    <option value="Mahatma Gandhi Chitrakoot Gramoday University">
                                                        Mahatma Gandhi Chitrakoot Gramoday University
                                                    </option>
                                                    <option value="Mahatma Gandhi Kashi Vidyapeeth">Mahatma
                                                        Gandhi Kashi Vidyapeeth</option>
                                                    <option value="Mahatma Gandhi University">Mahatma Gandhi
                                                        University</option>
                                                    <option value="Mahatma Gandhi University, Nalgonda">
                                                        Mahatma Gandhi University, Nalgonda</option>
                                                    <option value="Mahatma Phule Krishi Vidyapeeth">Mahatma
                                                        Phule Krishi Vidyapeeth</option>
                                                    <option
                                                        value="Makhanlal Chaturvedi National University of Journalism">
                                                        Makhanlal Chaturvedi National University of
                                                        Journalism</option>
                                                    <option value="Mangalore University">Mangalore
                                                        University</option>
                                                    <option value="Manonmaniam Sundaranar University">
                                                        Manonmaniam Sundaranar University</option>
                                                    <option
                                                        value="Manyavar Sri Kanshi Ram Ji Urdu, Arabi~Farsi University">
                                                        Manyavar Sri Kanshi Ram Ji Urdu, Arabi~Farsi
                                                        University</option>
                                                    <option value="Marathwada Agricultural University">
                                                        Marathwada Agricultural University</option>
                                                    <option
                                                        value="Maulana Mazharul Haque Arabic and Persian University">
                                                        Maulana Mazharul Haque Arabic and Persian University
                                                    </option>
                                                    <option value="Mohanlal Sukhadia University">Mohanlal
                                                        Sukhadia University</option>
                                                    <option value="Mother Teresa Women's University">Mother
                                                        Teresa Women's University</option>
                                                    <option value="MPBSE - Madhya Pradesh Board of Secondary Education">
                                                        MPBSE - Madhya Pradesh Board of Secondary Education
                                                    </option>
                                                    <option
                                                        value="MSBSHSE ? Maharashtra State Board Of Secondary and Higher Secondary Education">
                                                        MSBSHSE ? Maharashtra State Board Of Secondary and
                                                        Higher Secondary Education</option>
                                                    <option value="Nalanda Open University">Nalanda Open
                                                        University</option>
                                                    <option
                                                        value="Narendra Dev University of Agriculture and Technology">
                                                        Narendra Dev University of Agriculture and
                                                        Technology</option>
                                                    <option value="National Academy of Legal Studies and Research">
                                                        National Academy of Legal Studies and Research
                                                    </option>
                                                    <option value="National Institute of Technology Agartala">
                                                        National Institute of Technology Agartala</option>
                                                    <option value="National Institute of Technology Allahabad">
                                                        National Institute of Technology Allahabad</option>
                                                    <option value="National Institute of Technology Andhra Pradesh">
                                                        National Institute of Technology Andhra Pradesh
                                                    </option>
                                                    <option value="National Institute of Technology Arunachal Pradesh">
                                                        National Institute of Technology Arunachal Pradesh
                                                    </option>
                                                    <option value="National Institute of Technology Bhopal">
                                                        National Institute of Technology Bhopal</option>
                                                    <option value="National Institute of Technology Calicut">
                                                        National Institute of Technology Calicut</option>
                                                    <option value="National Institute of Technology Delhi">
                                                        National Institute of Technology Delhi</option>
                                                    <option value="National Institute of Technology Durgapur">
                                                        National Institute of Technology Durgapur</option>
                                                    <option value="National Institute of Technology Goa">
                                                        National Institute of Technology Goa</option>
                                                    <option value="National Institute of Technology Hamirpur">
                                                        National Institute of Technology Hamirpur</option>
                                                    <option value="National Institute of Technology Jaipur">
                                                        National Institute of Technology Jaipur</option>
                                                    <option value="National Institute of Technology Jalandhar">
                                                        National Institute of Technology Jalandhar</option>
                                                    <option value="National Institute of Technology Jamshedpur">
                                                        National Institute of Technology Jamshedpur</option>
                                                    <option value="National Institute of Technology Karnataka">
                                                        National Institute of Technology Karnataka</option>
                                                    <option value="National Institute of Technology Kurukshetra">
                                                        National Institute of Technology Kurukshetra
                                                    </option>
                                                    <option value="National Institute of Technology Manipur">
                                                        National Institute of Technology Manipur</option>
                                                    <option value="National Institute of Technology Meghalaya">
                                                        National Institute of Technology Meghalaya</option>
                                                    <option value="National Institute of Technology Mizoram">
                                                        National Institute of Technology Mizoram</option>
                                                    <option value="National Institute of Technology Nagaland">
                                                        National Institute of Technology Nagaland</option>
                                                    <option value="National Institute of Technology Nagpur">
                                                        National Institute of Technology Nagpur</option>
                                                    <option value="National Institute of Technology Patna">
                                                        National Institute of Technology Patna</option>
                                                    <option value="National Institute of Technology Puducherry">
                                                        National Institute of Technology Puducherry</option>
                                                    <option value="National Institute of Technology Raipur">
                                                        National Institute of Technology Raipur</option>
                                                    <option value="National Institute of Technology Rourkela">
                                                        National Institute of Technology Rourkela</option>
                                                    <option value="National Institute of Technology Sikkim">
                                                        National Institute of Technology Sikkim</option>
                                                    <option value="National Institute of Technology Silchar">
                                                        National Institute of Technology Silchar</option>
                                                    <option value="National Institute of Technology Srinagar">
                                                        National Institute of Technology Srinagar</option>
                                                    <option value="National Institute of Technology Surat">
                                                        National Institute of Technology Surat</option>
                                                    <option value="National Institute of Technology Tiruchirappalli">
                                                        National Institute of Technology Tiruchirappalli
                                                    </option>
                                                    <option value="National Institute of Technology Uttarakhand">
                                                        National Institute of Technology Uttarakhand
                                                    </option>
                                                    <option value="National Institute of Technology Warangal">
                                                        National Institute of Technology Warangal</option>
                                                    <option value="National Law Institute University">
                                                        National Law Institute University</option>
                                                    <option value="National Law School of India University">
                                                        National Law School of India University</option>
                                                    <option value="National Law University, Delhi">National
                                                        Law University, Delhi</option>
                                                    <option value="National Law University, Jodhpur">
                                                        National Law University, Jodhpur</option>
                                                    <option value="National Law University, Orissa">National
                                                        Law University, Orissa</option>
                                                    <option value="National University of Advanced Legal Studies">
                                                        National University of Advanced Legal Studies
                                                    </option>
                                                    <option value="National University of Study and Research in Law">
                                                        National University of Study and Research in Law
                                                    </option>
                                                    <option value="Netaji Subhas Open University">Netaji
                                                        Subhas Open University</option>
                                                    <option value="Nilamber-Pitamber University">
                                                        Nilamber-Pitamber University</option>
                                                    <option value="NIOS ? National Institute of Open Schooling">
                                                        NIOS ? National Institute of Open Schooling</option>
                                                    <option value="North Maharashtra University">North
                                                        Maharashtra University</option>
                                                    <option value="North Orissa University">North Orissa
                                                        University</option>
                                                    <option value="Orissa University of Agriculture and Technology">
                                                        Orissa University of Agriculture and Technology
                                                    </option>
                                                    <option value="Osmania University">Osmania University
                                                    </option>
                                                    <option value="Palamuru University">Palamuru University
                                                    </option>
                                                    <option
                                                        value="Pandit Bhagwat Dayal Sharma University of Health Sciences">
                                                        Pandit Bhagwat Dayal Sharma University of Health
                                                        Sciences</option>
                                                    <option value="Pandit Ravishankar Shukla University">
                                                        Pandit Ravishankar Shukla University</option>
                                                    <option value="Pandit Sundarlal Sharma (Open) University">
                                                        Pandit Sundarlal Sharma (Open) University</option>
                                                    <option value="Panjab University, Chandigarh">Panjab
                                                        University, Chandigarh</option>
                                                    <option value="Patna University">Patna University
                                                    </option>
                                                    <option value="Periyar University">Periyar University
                                                    </option>
                                                    <option value="Potti Sreeramulu Telugu University">Potti
                                                        Sreeramulu Telugu University</option>
                                                    <option value="Presidency University, Kolkata">
                                                        Presidency University, Kolkata</option>
                                                    <option value="PSEB ? Punjab School Education Board">
                                                        PSEB ? Punjab School Education Board</option>
                                                    <option value="Punjab Agricultural University">Punjab
                                                        Agricultural University</option>
                                                    <option value="Punjab Technical University">Punjab
                                                        Technical University</option>
                                                    <option value="Punjabi University">Punjabi University
                                                    </option>
                                                    <option value="Rabindra Bharati University">Rabindra
                                                        Bharati University</option>
                                                    <option value="Rai University, Ahmedabad">Rai
                                                        University, Ahmedabad</option>
                                                    <option value="Rajasthan Agricultural University">
                                                        Rajasthan Agricultural University</option>
                                                    <option value="Rajasthan Ayurved University">Rajasthan
                                                        Ayurved University</option>
                                                    <option value="Rajasthan Technical University">Rajasthan
                                                        Technical University</option>
                                                    <option value="Rajasthan University of Health Sciences">
                                                        Rajasthan University of Health Sciences</option>
                                                    <option value="Rajendra Agricultural University">
                                                        Rajendra Agricultural University</option>
                                                    <option value="Rajiv Gandhi National University of Law">
                                                        Rajiv Gandhi National University of Law</option>
                                                    <option value="Rajiv Gandhi Technical University">Rajiv
                                                        Gandhi Technical University</option>
                                                    <option value="Rajiv Gandhi University of Health Sciences">
                                                        Rajiv Gandhi University of Health Sciences</option>
                                                    <option value="Rajiv Gandhi University of Knowledge Technologies">
                                                        Rajiv Gandhi University of Knowledge Technologies
                                                    </option>
                                                    <option value="Ranchi University">Ranchi University
                                                    </option>
                                                    <option value="Rani Channamma University">Rani Channamma
                                                        University</option>
                                                    <option value="Rani Durgavati University">Rani Durgavati
                                                        University</option>
                                                    <option value="Rashtrasant Tukadoji Maharaj Nagpur University">
                                                        Rashtrasant Tukadoji Maharaj Nagpur University
                                                    </option>
                                                    <option value="Ravenshaw University">Ravenshaw
                                                        University</option>
                                                    <option value="Rayalaseema University">Rayalaseema
                                                        University</option>
                                                    <option value="RBSE - Board of Secondary Education Rajasthan">
                                                        RBSE - Board of Secondary Education Rajasthan
                                                    </option>
                                                    <option value="Sambalpur University">Sambalpur
                                                        University</option>
                                                    <option value="Sampurnanand Sanskrit University">
                                                        Sampurnanand Sanskrit University</option>
                                                    <option value="Sant Gadge Baba Amravati University">Sant
                                                        Gadge Baba Amravati University</option>
                                                    <option value="Sardar Patel University">Sardar Patel
                                                        University</option>
                                                    <option
                                                        value="Sardar Vallabhbhai Patel University of Agriculture and Technology">
                                                        Sardar Vallabhbhai Patel University of Agriculture
                                                        and Technology</option>
                                                    <option value="Sardarkrushinagar Dantiwada Agricultural University">
                                                        Sardarkrushinagar Dantiwada Agricultural University
                                                    </option>
                                                    <option value="Sarguja University">Sarguja University
                                                    </option>
                                                    <option value="Satavahana University">Satavahana
                                                        University</option>
                                                    <option value="Saurashtra University">Saurashtra
                                                        University</option>
                                                    <option
                                                        value="Sher-e-Kashmir University of Agricultural Sciences and Technology of Kashmir">
                                                        Sher-e-Kashmir University of Agricultural Sciences
                                                        and Technology of Kashmir</option>
                                                    <option value="Shivaji University">Shivaji University
                                                    </option>
                                                    <option value="Shree Somnath Sanskrit University">Shree
                                                        Somnath Sanskrit University</option>
                                                    <option
                                                        value="Shreemati Nathibai Damodar Thackersey Women's University">
                                                        Shreemati Nathibai Damodar Thackersey Women's
                                                        University</option>
                                                    <option value="Shri Jagannath Sanskrit Vishvavidyalaya">
                                                        Shri Jagannath Sanskrit Vishvavidyalaya</option>
                                                    <option value="Shri Mata Vaishno Devi University">Shri
                                                        Mata Vaishno Devi University</option>
                                                    <option value="Sidho Kanho Birsha University">Sidho
                                                        Kanho Birsha University</option>
                                                    <option value="Sido Kanhu University">Sido Kanhu
                                                        University</option>
                                                    <option value="Solapur University">Solapur University
                                                    </option>
                                                    <option value="Sree Sankaracharya University of Sanskrit">
                                                        Sree Sankaracharya University of Sanskrit</option>
                                                    <option value="Sri Krishnadevaraya University">Sri
                                                        Krishnadevaraya University</option>
                                                    <option value="Sri Padmavati Mahila Visvavidyalayam">Sri
                                                        Padmavati Mahila Visvavidyalayam</option>
                                                    <option value="Sri Venkateswara Institute of Medical Sciences">
                                                        Sri Venkateswara Institute of Medical Sciences
                                                    </option>
                                                    <option value="Sri Venkateswara University">Sri
                                                        Venkateswara University</option>
                                                    <option value="Sri Venkateswara Vedic University">Sri
                                                        Venkateswara Vedic University</option>
                                                    <option value="Sri Venkateswara Veterinary University">
                                                        Sri Venkateswara Veterinary University</option>
                                                    <option value="Swami Ramanand Teerth Marathwada University">
                                                        Swami Ramanand Teerth Marathwada University</option>
                                                    <option value="Tamil Nadu Agricultural University">Tamil
                                                        Nadu Agricultural University</option>
                                                    <option value="Tamil Nadu Dr. Ambedkar Law University">
                                                        Tamil Nadu Dr. Ambedkar Law University</option>
                                                    <option value="Tamil Nadu Dr. M.G.R. Medical University">
                                                        Tamil Nadu Dr. M.G.R. Medical University</option>
                                                    <option value="Tamil Nadu Open University">Tamil Nadu
                                                        Open University</option>
                                                    <option value="Tamil Nadu Physical Education and Sports University">
                                                        Tamil Nadu Physical Education and Sports University
                                                    </option>
                                                    <option value="Tamil Nadu Teacher Education University">
                                                        Tamil Nadu Teacher Education University</option>
                                                    <option
                                                        value="Tamil Nadu Veterinary and Animal Sciences University">
                                                        Tamil Nadu Veterinary and Animal Sciences University
                                                    </option>
                                                    <option value="Tamil University">Tamil University
                                                    </option>
                                                    <option value="Telangana University">Telangana
                                                        University</option>
                                                    <option value="Thiruvalluvar University">Thiruvalluvar
                                                        University</option>
                                                    <option value="Tilka Manjhi Bhagalpur University">Tilka
                                                        Manjhi Bhagalpur University</option>
                                                    <option value="Tumkur University">Tumkur University
                                                    </option>
                                                    <option value="University of Agricultural Sciences, Bangalore">
                                                        University of Agricultural Sciences, Bangalore
                                                    </option>
                                                    <option value="University of Agricultural Sciences, Dharwad">
                                                        University of Agricultural Sciences, Dharwad
                                                    </option>
                                                    <option value="University of Burdwan">University of
                                                        Burdwan</option>
                                                    <option value="University of Calcutta">University of
                                                        Calcutta</option>
                                                    <option value="University of Gour Banga">University of
                                                        Gour Banga</option>
                                                    <option value="University of Jammu">University of Jammu
                                                    </option>
                                                    <option value="University of Kalyani">University of
                                                        Kalyani</option>
                                                    <option value="University of Kashmir">University of
                                                        Kashmir</option>
                                                    <option value="University of Kerala">University of
                                                        Kerala</option>
                                                    <option value="University of Kota">University of Kota
                                                    </option>
                                                    <option value="University of Lucknow">University of
                                                        Lucknow</option>
                                                    <option value="University of Madras">University of
                                                        Madras</option>
                                                    <option value="University of Mumbai">University of
                                                        Mumbai</option>
                                                    <option value="University of Mysore">University of
                                                        Mysore</option>
                                                    <option value="University of North Bengal">University of
                                                        North Bengal</option>
                                                    <option value="University of Pune">University of Pune
                                                    </option>
                                                    <option value="University of Rajasthan">University of
                                                        Rajasthan</option>
                                                    <option
                                                        value="UP Board - Board of High School and Intermediate Education Uttar Pradesh">
                                                        UP Board - Board of High School and Intermediate
                                                        Education Uttar Pradesh</option>
                                                    <option value="Utkal University">Utkal University
                                                    </option>
                                                    <option value="Utkal University of Culture">Utkal
                                                        University of Culture</option>
                                                    <option value="Uttar Banga Krishi Vishwavidyalaya">Uttar
                                                        Banga Krishi Vishwavidyalaya</option>
                                                    <option
                                                        value="Uttar Pradesh King George's University of Dental Sciences">
                                                        Uttar Pradesh King George's University of Dental
                                                        Sciences</option>
                                                    <option value="Uttar Pradesh Rajarshi Tandon Open University">
                                                        Uttar Pradesh Rajarshi Tandon Open University
                                                    </option>
                                                    <option value="Uttarakhand Open University">Uttarakhand
                                                        Open University</option>
                                                    <option value="Uttarakhand Technical University">
                                                        Uttarakhand Technical University</option>
                                                    <option value="Uttaranchal Sanskrit University">
                                                        Uttaranchal Sanskrit University</option>
                                                    <option value="Vardhaman Mahaveer Open University">
                                                        Vardhaman Mahaveer Open University</option>
                                                    <option value="Veer Bahadur Singh Purvanchal University">
                                                        Veer Bahadur Singh Purvanchal University</option>
                                                    <option value="Veer Kunwar Singh University">Veer Kunwar
                                                        Singh University</option>
                                                    <option value="Veer Narmad South Gujarat University">
                                                        Veer Narmad South Gujarat University</option>
                                                    <option value="Veer Surendra Sai University of Technology, Burla">
                                                        Veer Surendra Sai University of Technology, Burla
                                                    </option>
                                                    <option value="Vidyasagar University">Vidyasagar
                                                        University</option>
                                                    <option value="Vijayanagara Sri Krishnadevaraya University">
                                                        Vijayanagara Sri Krishnadevaraya University</option>
                                                    <option value="Vikram University">Vikram University
                                                    </option>
                                                    <option value="Vikrama Simhapuri University">Vikrama
                                                        Simhapuri University</option>
                                                    <option value="Vinoba Bhave University">Vinoba Bhave
                                                        University</option>
                                                    <option value="Visvesvaraya Technological University">
                                                        Visvesvaraya Technological University</option>
                                                    <option value="WBBSE - West Bengal Board of Secondary Education">
                                                        WBBSE - West Bengal Board of Secondary Education
                                                    </option>
                                                    <option
                                                        value="WBCHSE - West Bengal Council of Higher Secondary Education">
                                                        WBCHSE - West Bengal Council of Higher Secondary
                                                        Education</option>
                                                    <option
                                                        value="West Bengal National University of Juridical Sciences">
                                                        West Bengal National University of Juridical
                                                        Sciences</option>
                                                    <option value="West Bengal State University">West Bengal
                                                        State University</option>
                                                    <option
                                                        value="West Bengal University of Animal and Fishery Sciences">
                                                        West Bengal University of Animal and Fishery
                                                        Sciences</option>
                                                    <option value="West Bengal University of Health Sciences">
                                                        West Bengal University of Health Sciences</option>
                                                    <option value="West Bengal University of Technology">
                                                        West Bengal University of Technology</option>
                                                    <option value="Yashwantrao Chavan Maharashtra Open University">
                                                        Yashwantrao Chavan Maharashtra Open University
                                                    </option>
                                                    <option value="YMCA University of Science and Technology">
                                                        YMCA University of Science and Technology</option>
                                                    <option value="Yogi Vemana University">Yogi Vemana
                                                        University</option>
                                                </datalist></td>
                                            <td><input type="text" class="form-control" placeholder="Degree Name"
                                                    name="acadmic_degree_name[]" required></td>
                                            <td><input type="text" class="form-control"
                                                    placeholder="Subject(s)/Specialization" name="acadmic_sub[]"
                                                    required></td>
                                            <td><input type="number" class="form-control" placeholder="Year"
                                                    max="2021" min="1970" name="acadmic_passing_year[]" required>
                                            </td>
                                            <td><input type="number" class="form-control" placeholder="Marks %"
                                                    name="acadmic_obtain_mark[]" required></td>
                                            <td><input type="text" class="form-control" placeholder="Division"
                                                    name="acadmic_rank[]" required>
                                            </td>
                                            <td>
                                                <label for="acadmic_file_3"
                                                    class="feather icon-upload border p-1 bg-warning rounded"></label><input
                                                    style="width:0; height:0;" class="acadmic_file"
                                                    id="acadmic_file_3" name="acadmic_file[]"
                                                    onchange="ValidateSize(this)" type="file" /><span
                                                    class="acadmic_file_3"></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="col-lg-12" id="acadmic">
                                    </tbody>
                                </table>
                            </div>
                            <div style="float:right;">
                                <button type="button" class="btn btn-warning btn-sm rounded " id="AddAcadmic">
                                    <i class="feather icon-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="col-lg-12">
                            <div class="form-group ">
                                <table id="dom-jqry" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="font-size: 11px;">
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Salary</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Role</th>
                                            <th>Doc</th>
                                        </tr>
                                    </thead>
                                    <tbody class="col-lg-12" id="work_experience">
                                    </tbody>
                                </table>
                            </div>
                            <div style="float:right;">
                                <button type="button" class="ml-3 btn btn-warning btn-sm rounded"
                                    id="AddWordExperience">
                                    <i class="feather icon-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="col-lg-12">
                            <label for="declaration">Declaration:</label>
                            <div class="form-group border rounded p-1">
                                I certify that all information provided in this application
                                is true, complete and correct to the best of my knowledge and belief. I
                                understand that any false information or omission of information may disqualify me
                                from consideration for employment and may result in dismissal from the job, if
                                discovered at a later date.
                                I understand that this application does not create a contract of
                                employment nor gurarantee for employment.
                                I have read and understood the above declaration before signing this.
                            </div>
                        </div>
                        <div style="float:right;">
                            {{-- <input type="checkbox" id="i_agree" name="i_agree" value="" required><label for="i_agree">I Agree</label><br> --}}
                            <input type="checkbox" id="i_agree" name="i_agree" value="" required /><label> I
                                Agree</label>
                        </div>
                    </div>

                    <div style="overflow:auto;">
                        <div style="float:right;"><br>
                            <button class="btn btn-primary" type="button" id="prevBtn"
                                onclick="nextPrev(-1)">Previous</button>
                            <button class="btn btn-primary" type="button" id="nextBtn"
                                onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:30px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.13.1/additional-methods.js"></script>
<script type="text/javascript">
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        // console.log(x[n]);
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }


    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        // if (n == 1) return false;
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        // console.log(x[currentTab]);
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = true;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }

    $('#profileupdate').on('click', function() {
        $('#AddBoxesnew').modal('toggle');
    });
    $(document).on("click", ".applynew", function() {
        var job = $(this).data('job');
        $(".job_title").text(job.job_title);
        $("#job_id").val(job.id);
        $("#apply_job").val(1);
        $("#acadmic").html('');
        $('#AddBoxesnew').modal('toggle');
    });

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
        $("#apply_job").val(1);
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
        // var board_name = <?php //echo json_encode($boards);
?>;
        var board_name;
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
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
