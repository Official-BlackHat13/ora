
<div class="pcoded-content" id="printable">
    <style>
        @media print{
            .btn-out{
                display: none;
            }
            .row {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
                border: black;
            }
            .col-xs-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }
            .col-lg-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
			
			.col-lg-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }
            .col-xs-2{
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.666665%;
                flex: 0 0 16.666665%;
                max-width: 16.666665%;
            }
            .col-xs-3{
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
			.col-xs-5{
				-webkit-box-flex: 0;
                -ms-flex: 0 0 41.6%;
                flex: 0 0 41.6%;
                max-width: 41.6%;
			}
			.col-xs-10{
				-webkit-box-flex: 0;
                -ms-flex: 0 0 83.0%;
                flex: 0 0 83.0%;
                max-width: 83.0%;
			}
            label {
                display: inline-block;
                margin-bottom: .1rem;
            }
            .form-check-inline {
                float: left;
            }
        }
    </style>
    <div class="pcoded-inner-content">
        <div class="main-body">
		<?php //print_r($app->user_data);die;?>
            <?php $jobDetail=json_decode($app->user_data);?>
            <div class="page-wrapper">
                <div class="page-body">
                    <h4 class="text-center ml-1"> Name of the post Applied: <b>{{$app->jobs->job_title}}</b></h4>
                    <hr>
                    <div class="row">						
							<div class="col-lg-12 col-xs-12">
								<label class="text-danger">NA** = Not Available</label>
							</div>
							<div class="col-lg-9 col-xs-9">
							<div class="row">
								
								<div class="col-lg-6 col-xs-6">
									<label for="first_name"><b>1. Name of Applicant:(As per 10th certificate)</b></label>
								</div>
								<div class="col-lg-6 col-xs-6 text-uppercase">
									<label for="first_name"><b>{{$jobDetail->sex=="male" ? "Mr." : "Ms."}} {{$jobDetail->first_name}} {{$jobDetail->middle_name}} {{$jobDetail->last_name}}</b></label>
								</div>
								<div class="col-lg-6 col-xs-6">
									<label for="father_name"><b>2. Father's Name:(As per 10th certificate)</b></label>
								</div>
								<div class="col-lg-6 col-xs-6">
									<label for="first_name">Mr. {{$jobDetail->father_name}}</label>
								</div>
								<div class="col-lg-6 col-xs-6">
									<label for="mother_name"><b>3. Mother's Name:(As per 10th certificate)</b></label>
								</div>
								<div class="col-lg-6 col-xs-6">
									<label for="first_name">Ms. {{$jobDetail->mother_name}}</label>
								</div>
								@if(isset($jobDetail->mismatch))
								<div class="col-lg-12 col-xs-12 border rounded">
									<label class="col-xs-12" for="mismatch"><b>if there is any mismatch in Name appears on your documents,Please specify.</b></label>
									<label class="col-xs-12" for="mismatch">{{$jobDetail->mismatch}}</label>
								</div>
								@endif
								<div class="col-lg-6 col-xs-6">
									<label for="marital_status"><b>4. Marital Status</b></label>
								</div>
								<div class="col-lg-6 col-xs-6">
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" disabled value="Yes" <?php echo $jobDetail->marital_status=="Yes" ? 'checked' : '' ?>  name="marital_status">Yes
										</label>
									</div>
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" disabled value="No" <?php echo $jobDetail->marital_status=="No" ? 'checked' : '' ?> name="marital_status">No
										</label>
									</div>
								</div>
								
								<div class="col-lg-6 col-xs-6">
									<label><b>5. Spouse Name</b></label>
								</div>
								<div class="col-lg-6 col-xs-6">
									@if($jobDetail->marital_status=="Yes")
										<label>{{$jobDetail->sex=="male" ? "Ms." : "Mr."}} {{$jobDetail->spouse_name}}</label>
									@endif
								</div>
								<div class="col-lg-6 col-xs-6">
									<label for="dob"><b>6. Date Of Birth</b></label>
								</div>
								<div class="col-lg-6 col-xs-6"><label id="dob">{{date("d-m-Y",strtotime($jobDetail->dob))}}</label></div>
								<div class="col-lg-6 col-xs-6">
									<label for="sex"><b>7. Gender</b></label>
								</div>
								<div class="col-lg-6 col-xs-6">
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" disabled value="male" <?php echo $jobDetail->sex=="male" ? 'checked' : '' ?> name="sex">
											Male
										</label>
									</div>
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" disabled value="female" <?php echo $jobDetail->sex=="female" ? 'checked' : '' ?> name="sex"> Female
										</label>
									</div>
								</div>
								<div class="col-lg-6 col-xs-6">
									<label for="nationality"><b>8. Nationality</b></label>
								</div>
								<div class="col-lg-6 col-xs-6">
									<label>{{$jobDetail->nationality}}</label>
								</div>
								<div class="col-lg-6 col-xs-6">
									<label for="project"><b>9. Category</b></label>
								</div>
								<div class="col-lg-6 col-xs-6">
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" value="gen" disabled <?php echo $jobDetail->category=="gen" ? 'checked' : '' ?> >GEN
										</label>
									</div>
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" value="obc" disabled <?php echo $jobDetail->category=="obc" ? 'checked' : '' ?> > OBC
										</label>
									</div>
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" value="sc" disabled <?php echo $jobDetail->category=="sc" ? 'checked' : '' ?> > SC
										</label>
									</div>
									<div class="form-check-inline">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" value="st" disabled <?php echo $jobDetail->category=="st" ? 'checked' : '' ?> > ST
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-xs-3" style="height:200px;">
							@if(isset($jobDetail->candidate_photo))<img class="border rounded p-2" src="{{url('').'/public/'.$jobDetail->candidate_photo[0]}}" id="photo_card_image" width="150px;" height="80%" />
							@endif
							@if(isset($jobDetail->candidate_sign))<img class="border rounded" src="{{url('').'/public/'.$jobDetail->candidate_sign[0]}}" id="sign_card_image" width="150px;" height="20%" />@endif
						</div>
					</div>
					<div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <label for="p_address"><b>10. Permanent Address with pin code</b></label>
                            <div class="form-group border p-2 rounded">
                                <div class="row">
                                    <div class="col-lg-12 col-xs-12"><label>{{$jobDetail->p_address}}, <b>Pin Code:</b>{{$jobDetail->pin_code}}</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-xs-4">
                                        <label>Office Phone No. : {{$jobDetail->p_office ? $jobDetail->p_office :  'NA**'}}</label>
                                    </div>
                                    <div class="col-lg-4 col-xs-4">
                                        <label>Residence Phone No.: {{$jobDetail->p_residence ? $jobDetail->p_residence : 'NA**'}}</label>
                                    </div>
                                    <div class="col-lg-4 col-xs-4">
                                        <label>Mobile:{{$jobDetail->mobile}}</label>
                                    </div>
                                    <div class="col-lg-4 col-xs-4">
                                        <label>Fax: {{$jobDetail->fax ? $jobDetail->fax : 'NA**'}}</label>
                                    </div>
                                    <div class="col-lg-4 col-xs-4">
                                        <label>E-Mail:{{$jobDetail->email}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <label for="c_address"><b>11. Address for Correspondence with pin code</b></label>
                            <div class="form-group border p-2 rounded">
                                <div class="row">
                                    <div class="col-lg-12 col-xs-12">
                                        <label>{{$jobDetail->c_address}}, <b>Pin Code:</b>{{$jobDetail->c_pin_code}}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-xs-4">
                                        <label>Office Phone No.:  {{$jobDetail->c_office ? $jobDetail->c_office : 'NA**'}}</label>
                                    </div>
                                    <div class="col-lg-4 col-xs-4">
                                        <label>Residence: {{$jobDetail->c_residence ? $jobDetail->c_residence : 'NA**'}}</label>
                                    </div>
                                    <div class="col-lg-4 col-xs-4">
                                        <label>Mobile:{{$jobDetail->c_mobile}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <label for="previous_interview_detail"><b>12. Have you been interviewed for recruitment in any
                                post in Digital India Corporation Earlier? </b></label>
                        </div>
                        <div class="col-lg-2">
                            <label for="previous_interview_detail">{{$jobDetail->previous_interview_detail}}</label>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <label for="previous_interview_detail"><b>13. Academic & Professional qualifications <span
                                    style="font-size: 11px;"><b>(beginning with the latest qualification and up to
                                        SSC)</b></b></span></label>
                            <div class="form-group border rounded p-1">
                                <table id="dom-jqry" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="font-size: 11px;">
                                            <th>Examination / </br> Degree</th>
                                            <th>Name of the Institute /</br> Board University</th>
											<th>Degree Name</th>
                                            <th>Main Subject(s) /</br> Specialization</th>
                                            <th>Year of </br> Passing</th>
                                            <th>% of marks</th>
                                            <th>Division/<br>Grade</th>
                                            <th>view <br>document(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="col-lg-12 col-xs-12" id="acadmic">
									<?php //print_r($app->user_data);?>
									@if(isset($jobDetail->acadmic_degree))
                                        @foreach($jobDetail->acadmic_degree as $key=>$acadmic)
										@if($acadmic)
                                        <tr style="font-size: 11px;">
                                            <td>{{$acadmic}}</td>
                                            <td>{{$jobDetail->acadmic_board[$key]}}</td>
											<td>
												@if(isset($jobDetail->acadmic_degree_name) && count($jobDetail->acadmic_degree_name))
												{{ $jobDetail->acadmic_degree_name[$key] }}
												@endif</td>
                                            <td>{{$jobDetail->acadmic_sub[$key]}}</td>
                                            <td>{{$jobDetail->acadmic_passing_year[$key]}}</th>
                                            <td>{{$jobDetail->acadmic_obtain_mark[$key]}}</td>
                                            <td>{{$jobDetail->acadmic_rank[$key]}}</td>
                                            <td>@if(isset($jobDetail->acadmic_file_url) && isset($jobDetail->acadmic_file_url[$key]))
												<a target="_blank" href="{{url('').'/public'.$jobDetail->acadmic_file_url[$key]}}"> view</a>
												@else
													document Not uploaded
												@endif
											</td>
                                        </tr>
										@endif
                                        @endforeach
									@else
										<tr style="font-size: 11px;">
                                            <td colspan="8">Data Not found</td>
                                        </tr>	
									@endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-5">
                            <label for="field_of_specialization"><b>14. Fields of Specialization</b></label>
                        </div>
                        <div class="col-lg-8 col-xs-7">
                            <label style="white-space: break-spaces !important" for="field_of_specialization">{{$jobDetail->field_of_specialization}}</label>
                        </div>
                        <div class="col-lg-8">
                            <label for="is_gov_employed"><b>15. Are You employed in any Govt. / Semi-Govt. / Public Sector
                                Undertaking / Autonomous Bodies</b></label>
                        </div>
                        <div class="col-lg-4 col-xs-4">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" disabled value="Yes"<?php echo $jobDetail->is_gov_employed=="Yes" ? "checked" :''; ?> name="is_gov_employed"> Yes
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" disabled value="No" <?php echo $jobDetail->is_gov_employed=="No" ? "checked" :''; ?> name="is_gov_employed">
                                    No
                                </label>
                            </div>
                        </div>
					</div>
					<div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <label for="previous_interview_detail"><b>16. Work Experience <span
                                    style="font-size: 11px;"><b>(Latest
                                        First)</b></b></span></label>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <div class="col-lg-12 col-xs-12 border rounded p-1">
                                <table id="dom-jqry" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="font-size: 11px;">
                                            <th style="width:18%">Name And </br>
                                                Nature of the </br> Organization</th>
                                            <th style="width:16%"> Designation
                                                </br>&</br> Grade</th>
                                            <th style="width:12%">Monthly </br> Salary</th>
                                            <th >Service<br />Start Date</th>
											<th >Service<br />End Date</th>
                                            <th style="width:27%">Role of Applicant
                                                </br> and Significant </br>Contribution</th>
                                            <th class="text-md-center" style="width:5%">Document(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="col-lg-12 col-xs-12" id="work_experience">
									@if(isset($jobDetail->work_o_name))
										<?php $diffrence =0; ?>
                                        @foreach($jobDetail->work_o_name as $key1=>$organization)
									<?php
										
										if($jobDetail->work_o_to[$key1] && $jobDetail->work_o_from[$key1]){
											$diffrence +=  strtotime($jobDetail->work_o_to[$key1]) - strtotime($jobDetail->work_o_from[$key1]);
										}
									// $diffrence +=  strtotime($jobDetail->work_o_to[$key1] ? $jobDetail->work_o_to[$key1] : $app->created_at) - strtotime($jobDetail->work_o_from[$key1]);
									?>
                                        <tr style="font-size: 11px;">
                                            <td>{{$organization}}</td>
                                            <td> {{$jobDetail->work_o_designation[$key1]}}</td>
                                            <td>{{$jobDetail->work_o_salary[$key1]}}</td>
                                            <td>
												@if($jobDetail->work_o_from[$key1])
												{{ date("d-m-Y",strtotime($jobDetail->work_o_from[$key1]))}}
												@endif
											</td>
                                            <td>
												@if($jobDetail->work_o_to[$key1])
											{{ date("d-m-Y",strtotime($jobDetail->work_o_to[$key1])) }}</td>
												@endif
											<td style="white-space: break-spaces !important">{{$jobDetail->work_o_role[$key1]}}</td>
                                            <td class="text-md-center">
												@if(isset($jobDetail->work_file_url) && isset($jobDetail->work_file_url[$key1]))
													<a target="_blank" href="{{url('').'/public'.$jobDetail->work_file_url[$key1]}}"> view</a>
													<!--<a href="{{url('').'/public/'.$jobDetail->work_file_url[$key1]}}" download> view</a> -->
												@else
													<span style="white-space: break-spaces !important">Not uploaded document</span>
												@endif
											</td>
                                        </tr>
                                        @endforeach
										<?php
										$modMonth = $diffrence % (60*60*24*365);
										$totalExperience = floor($diffrence/(60*60*24*365)) ." Year(s) ". floor(($modMonth) / (60*60*24*30.4))  ." Month(s)";
											echo "<p>Total Experience: <b>".$totalExperience."</b><p>";
										?>
									@else
										<tr style="font-size: 11px;">
										<td colspan="7">Data Not found</td>
										</tr>
									@endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <label for="previous_interview_detail"><b>17. Detail of Experience Relavant to the Post
                                applied</b></label>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <div class="form-group border rounded p-1">
                                <div class="table-responsive dt-responsive">
                                    <table id="relevent_experience_table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-md-center" style="width:35%"> Type of Experience </th>
                                                <th class="text-md-center" style="width:55%">Details of Experience with
                                                    specific achivements. Also Please specify timelines.</th>
                                            </tr>
                                        </thead>
                                        <tbody class="col-lg-12 col-xs-12" id="relavant_experience">
										@if(isset($jobDetail->relevent_type))
                                            @foreach($jobDetail->relevent_type as $key2=>$relevent)
                                            <tr>
                                                <td>{{$relevent}}</td>
                                                <td>{{$jobDetail->relevent_detail[$key2]}}</td>
                                            </tr>
                                            @endforeach
										@else
											<tr style="font-size: 11px;">
												<td colspan="3">Data Not found</td>
											</tr>	
										@endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="patent_work"><b>18. Field of specialization, summary of R&D and other work done
                                with list of patents, Publications and reports, if any.</b></label>
                        </div>
                        <div class="col-lg-12">
							<div class="form-group border rounded p-1">
								<label for="patent_work">{{$jobDetail->patent_work ? $jobDetail->patent_work : "N/A"}}</label>
							</div>
                        </div>
                        <div class="col-lg-10">
                            <label for="association_affilication"><b>19. Association & Affilication with Professional
                                Bodies</b></label>
                        </div>
                        <div class="col-lg-2">
                            <label class=" border rounded p-1" for="patent_work">{{$jobDetail->association_affilication ? $jobDetail->association_affilication: "N/A"}}</label>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <label for="significant_achivements"><b>20. Any Significant achivements during your career
                                which may support your candidature for consideration to the position</b></label>
                            <div class="form-group border rounded p-1">
                                <label for="patent_work">{{$jobDetail->significant_achivements ? $jobDetail->significant_achivements: "N/A"}}</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <label for="suitable_position"><b>21. Why do you think you are suitable for the
                                position?</b></label>
                            <div class="form-group border rounded p-1">
                                <label for="patent_work">{{$jobDetail->suitable_position}}</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <label for="reference"><b>22. Please furnish two professional reference <ul>
                                    <li class="ml-4" style="list-style: circle;"><b>References from
                                            relatives,friends,etc. should be avoided.</b></li>
                                </ul></b></label>
                            <div class="form-group border rounded p-1">
                                <div class="form-group border rounded p-1">
                                    <div class="row">
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference1_name"><b>(1). Name</b></label>
                                        </div>
                                        <div class="col-lg-3 col-xs-3">
                                            <label for="patent_work">{{$jobDetail->reference1_name}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference1_fax"><b>Fax Number</b></label>
                                        </div>
                                        <div class="col-lg-5 col-xs-5">
                                            <label for="patent_work">{{$jobDetail->reference1_fax ? $jobDetail->reference1_fax : 'NA**'}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference1_email"><b>E-mail</b></label>
                                        </div>
                                        <div class="col-lg-3 col-xs-3">
                                            <label for="patent_work">{{$jobDetail->reference1_email}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference1_address"><b>Address</b></label>
                                        </div>
                                        <div class="col-lg-4 col-xs-5">
                                            <label for="patent_work">{{$jobDetail->reference1_address}}</label>
                                        </div>
										<div class="col-lg-2 col-xs-2">
                                            <label for="reference1_tel_no"><b>Tel. No. (Off.)</b></label>
                                        </div>
                                        <div class="col-lg-3 col-xs-3">
                                            <label for="patent_work">{{$jobDetail->reference1_tel_no ? $jobDetail->reference1_tel_no : 'NA**'}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="how_referee1_know_you"><b>How does referee know you</b></label>
                                        </div>
                                        <div class="col-lg-5 col-xs-5">
                                            <label for="patent_work">{{$jobDetail->how_referee1_know_you}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference1_res_no"><b>Res. Number</b></label>
                                        </div>
                                        <div class="col-lg-3 col-xs-3">
                                            <label for="patent_work">{{$jobDetail->reference1_res_no ? $jobDetail->reference1_res_no : 'NA**'}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference1_mobile"><b>Mobile Number</b></label>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <label for="patent_work">{{$jobDetail->reference1_mobile}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group border rounded p-1">
                                    <div class="row">
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference2_name"><b>(2). Name</b></label>
                                        </div>
                                        <div class="col-lg-3 col-xs-3">
                                            <label for="patent_work">{{$jobDetail->reference2_name}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference2_fax"><b>Fax Number</b></label>
                                        </div>
                                        <div class="col-lg-5 col-xs-5">
                                            <label for="patent_work">{{$jobDetail->reference2_fax ? $jobDetail->reference2_fax : 'NA**'}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference2_email"><b>E-mail</b></label>
                                        </div>
                                        <div class="col-lg-3 col-xs-3">
                                            <label for="patent_work">{{$jobDetail->reference2_email}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference2_address"><b>Address</b></label>
                                        </div>
                                        <div class="col-lg-5 col-xs-5">
                                            <label for="patent_work">{{$jobDetail->reference2_address}}</label>
                                        </div>
										<div class="col-lg-2 col-xs-2">
                                            <label for="reference2_tel_no"><b>Tel. No. (Off.)</b></label>
                                        </div>
                                        <div class="col-lg-3 col-xs-3">
                                            <label for="patent_work">{{$jobDetail->reference2_tel_no ? $jobDetail->reference2_tel_no : 'NA**'}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="how_referee2_know_you"><b>How does referee know you</b></label>
                                        </div>
                                        <div class="col-lg-5 col-xs-5">
                                            <label for="patent_work">{{$jobDetail->how_referee2_know_you}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference2_res_no"><b>Res.Number</b></label>
                                        </div>
                                        <div class="col-lg-3 col-xs-3">
                                            <label for="patent_work">{{$jobDetail->reference2_res_no ? $jobDetail->reference2_res_no : 'NA**'}}</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <label for="reference2_mobile"><b>Mobile Number</b></label>
                                        </div>
                                        <div class="col-lg-3 col-xs-3">
                                            <label for="patent_work">{{$jobDetail->reference2_mobile}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <label for="upload_document">Uploaded Document(s):</label>
                            <div class="form-group border rounded p-1">
                                <div class="row">
                                    <div class="col-lg-3 col-xs-3">
                                        <label>1. ID Proof</label>
                                    </div>
                                    <div class="col-lg-3 col-xs-3">
                                        <span id="aadhar_card_image">
										@if(isset($jobDetail->candidate_aadhar))
											<a target="_blank" href="{{url('').'/public'.$jobDetail->candidate_aadhar[0]}}"> view</a>
											<!--<a href="{{url('').'/public/'.$jobDetail->candidate_aadhar[0]}}" download>click for download</a>-->
										@endif
										</span>
                                    </div>
                                    <div class="col-lg-3 col-xs-3">
                                        <label>2. Resume</label>
                                    </div>
                                    <div class="col-lg-3 col-xs-3">
                                        <span id="pan_card_image">
										@if(isset($jobDetail->candidate_pan))
											<a target="_blank" href="{{url('').'/public'.$jobDetail->candidate_pan[0]}}"> view</a>
											<!--<a href="{{url('').'/public/'.$jobDetail->candidate_pan[0]}}" download>click for download</a>-->
										@endif
										</span>
                                    </div>
									<div class="col-lg-3 col-xs-3">
                                        <label>3. 10<span style="font-size: 50%;vertical-align: top;">th</span>  Certificate</label>
                                    </div>
                                    <div class="col-lg-3 col-xs-3">
                                        <span id="aadhar_card_image">
										@if(isset($jobDetail->tenth_cer_url))
											<a target="_blank" href="{{url('').'/public'.$jobDetail->tenth_cer_url[0]}}"> view</a>
											<!--<a href="{{url('').'/public/'.$jobDetail->tenth_cer_url[0]}}" download>click for download</a>-->
										@endif
										</span>
                                    </div>
									<div class="col-lg-3 col-xs-3">
                                        <label>4. 12<span style="font-size: 50%;vertical-align: top;">th</span> Certificate</label>
                                    </div>
                                    <div class="col-lg-3 col-xs-3">
                                        <span id="aadhar_card_image">
										@if(isset($jobDetail->twelve_cer_url))
											<a target="_blank" href="{{url('').'/public'.$jobDetail->twelve_cer_url[0]}}"> view</a>
											<!--<a href="{{url('').'/public/'.$jobDetail->twelve_cer_url[0]}}" download>click for download</a>-->
										@endif
										</span>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-12 col-xs-12">
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
						<div class="col-lg-6 col-xs-6">
						<button class="btn btn-primary" onclick="printDiv();">Print</button>
						</div>
						<div class="col-lg-6 col-xs-6 text-right">{{date("Y-m-d")}}</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript" src="public/files/assets/js/jquery.basictable.js"></script>
<script>
    function printDiv() {
     var printContents = document.getElementById("printable").innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
}
window.onload = getAge;
function getAge(dateString) {
  var dateString = document.getElementById("dob").innerText;
	agesplit = dateString.split('-');
	var ddd = agesplit[0];
	var mmm = agesplit[1];
	var yyy = agesplit[2];
	dateString1 = mmm+'/'+ddd+'/'+yyy;
  //alert(dateString);
  var now = new Date();
  var today = new Date(now.getYear(),now.getMonth(),now.getDate());

  var yearNow = now.getYear();
  var monthNow = now.getMonth();
  var dateNow = now.getDate();

  var dob = new Date(dateString1.substring(6,10),
                     dateString1.substring(0,2)-1,                   
                     dateString1.substring(3,5)                  
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
    ageString = age.years + yearString + ", " + age.months + monthString + ", " + age.days + dayString + " .";
  else if ( (age.years == 0) && (age.months == 0) && (age.days > 0) )
    ageString = "Only " + age.days + dayString + " !";
  else if ( (age.years > 0) && (age.months == 0) && (age.days == 0) )
    ageString = age.years + yearString ;
  else if ( (age.years > 0) && (age.months > 0) && (age.days == 0) )
    ageString = age.years + yearString + " " + age.months + monthString + " .";
  else if ( (age.years == 0) && (age.months > 0) && (age.days > 0) )
    ageString = age.months + monthString + " " + age.days + dayString + " .";
  else if ( (age.years > 0) && (age.months == 0) && (age.days > 0) )
    ageString = age.years + yearString + " " + age.days + dayString + " .";
  else if ( (age.years == 0) && (age.months > 0) && (age.days == 0) )
    ageString = age.months + monthString + " .";
  else ageString = "Oops! Could not calculate your age!";

  document.getElementById("dob").innerText=dateString + ", " +ageString;
  //return ageString;
}
</script>

</script>

	