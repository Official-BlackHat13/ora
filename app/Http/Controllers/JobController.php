<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobType;
use App\Models\Applications;
use Redirect;
use Validator;
use App\Http\Controllers\SendSmsController;
use App\Models\User;
use App\Models\Department;
use App\Models\JobAssign;

class JobController extends Controller
{
    // functions for job Categories
    public function departmets(Request $request){
        $departments=Department::get();
        $data['content']='jobs.departments';
        return view('layouts.app',compact('data','departments'));
    }
	public function users(Request $request){
        $users=User::where('role',2)->orderBy('created_at','desc')->get();
		$departments=Department::get();
        $data['content']='admin.user';
        return view('layouts.app',compact('data','users','departments'));
    }
	public function committees(Request $request){
        $users=User::where('role',3)->orderBy('created_at','desc')->get();
		$departments=Department::get();
        $data['content']='admin.committee';
        return view('layouts.app',compact('data','users','departments'));
    }
	public function userAddEdit(Request $request){
        if($request->user_id){
            $user=User::find($request->user_id);
        }else{
            $validate_user = Validator::make($request->all(), [
                'email' => 'required|unique:users',
            ], $messages = [
                'required' => 'email id is required',
                'unique'=>'email id should be unique'
            ]);
            if ($validate_user->fails()) {
                return Redirect::back()->with('warning', $validate_user->errors()->first());
            }
            $user=new User;
        }
		$role=0;
		$msg = "User Add/Update Successfully";
		if(Auth::user()->role ==1){
			$role=2;
			$msg = "User (HR) Add/Update Successfully";
		}
		if(Auth::user()->role ==2){
			$role=3;
			$msg = "Committee Member Add/Update Successfully";
		}
        $user->name=$request->name;
		$user->email=$request->email;
		$user->mobile=$request->mobile;
		$user->role= $role;
		$user->password=bcrypt('secret'.$request->dep_id);
		$user->dep_id=$request->dep_id;
        $user->save();
        if($user){
            return Redirect::back()->with('success', $msg);
        }else{
            return Redirect::back()->with('warning', "get Some Error! please Contact to Admin");
        }
    }
	public function departmetsAddEdit(Request $request){
		if($request->dep_id){
            $dep=Department::find($request->dep_id);
        }else{
            $validate_dep = Validator::make($request->all(), [
                'name' => 'required|unique:departments',
            ], $messages = [
                'required' => 'department is required',
                'unique'=>'department name should be unique'
            ]);
            if ($validate_dep->fails()) {
                return Redirect::back()->with('warning', $validate_dep->errors()->first());
            }
            $dep=new Department;
        }
        $dep->name=$request->name;
        $dep->save();
        if($dep){
            return Redirect::back()->with('success', "Department Add/Update Successfully");
        }else{
            return Redirect::back()->with('warning', "get Some Error! please Contact to Admin");
        }
	}
	public function categories_index(Request $request){
        $categories=JobCategory::get();
        $data['content']='jobs.category';
        return view('layouts.app',compact('data','categories'));
    }
    public function categories_add_edit(Request $request)
    {
        if($request->cat_id){
            $cat=JobCategory::find($request->cat_id);
        }else{
            $validate_cat = Validator::make($request->all(), [
                'category' => 'required|unique:job_categories',
            ], $messages = [
                'required' => 'category is required',
                'unique'=>'category should be unique'
            ]);
            if ($validate_cat->fails()) {
                return Redirect::back()->with('warning', $validate_cat->errors()->first());
            }
            $cat=new JobCategory;
        }
        $cat->category=$request->category;
        $cat->save();
        if($cat){
            return Redirect::back()->with('success', "Category Add/Update Successfully");
        }else{
            return Redirect::back()->with('warning', "get Some Error! please Contact to Admin");
        }
    }
	public function jobAssign(Request $request){
		$dep_hrs = User::where('dep_id',Auth::user()->dep_id)->where('role',2)->pluck('id');
		$jobs=Job::select('id','job_title','status','last_date')->whereIn('created_by',$dep_hrs)->get();
		$job_ids=Job::whereIn('created_by',$dep_hrs)->pluck('id');
		$committes = User::where('dep_id',Auth::user()->dep_id)->where('role',3)->get();
		$assigns = JobAssign::whereIn('job_id',$job_ids)->get();
		//return $assigns;
		$data['content']='jobs.job_assign';
		return view('layouts.app',compact('data','jobs','committes','assigns'));
	}
	public function AddEditjobAssign(Request $request){
		$assign_job = JobAssign::where('job_id',$request->job_id)->where('committee_for',$request->committee_for)->first();
		$doc="";
		if($request->approval_doc){
			$doc = $this->fileUpload($request->approval_doc,'admin',$request->job_id); 
		}
		if($assign_job){
			$assign_job->user_ids = json_encode($request->user_ids);
			$assign_job->committee_for = $request->committee_for;
			$assign_job->approval_doc = $doc[0];
			$assign_job->save() ;
		}else{
			$assign_job = new JobAssign;
			$assign_job->job_id = $request->job_id;
			$assign_job->committee_for = $request->committee_for;
			$assign_job->approval_doc = $doc[0];
			$assign_job->user_ids = json_encode($request->user_ids);
			$assign_job->save() ;
		}
		return Redirect::back()->with('success', "Job Assign/Update Successfully");
	}
    // functions for job Types
    public function types_index(Request $request){
        $types=JobType::get();
        $data['content']='jobs.type';
        return view('layouts.app',compact('data','types'));
    }
    public function type_add_edit(Request $request)
    {
        if($request->type_id){
            $type=JobType::find($request->type_id);
        }else{
            $validate_type = Validator::make($request->all(), [
                'type' => 'required|unique:job_type',
            ], $messages = [
                'required' => 'Job Type is required',
                'unique'=>'Job Type should be unique'
            ]);
            if ($validate_type->fails()) {
                return Redirect::back()->with('warning', $validate_type->errors()->first());
            }
            $type=new JobType;
        }
        $type->type=$request->type;
        $type->save();
        if($type){
            return Redirect::back()->with('success', "Job Type Add/Update Successfully");
        }else{
            return Redirect::back()->with('warning', "get Some Error! please Contact to Admin");
        }
    }
    

    //function for job posting 
    public function job_posting(Request $request){
        $types=JobType::where('status',1)->get();
        $categories=JobCategory::where('status',1)->get();
        $data['content']='jobs.job_list';
        // return (Auth::user()->role);
        if(Auth::user() && Auth::user()->role==0 || Auth::user() && Auth::user()->role==1){
            $jobs=Job::select('id','job_title','job_category','project','is_travel','band','report_to','division','location','position_type','salary','total_post','qualification','experience','status','job_description','last_date','created_by','created_at')->where('status',1)->whereDate('last_date','>=',date('Y-m-d'))->orderBy('created_at','Desc')->get();
            $data['content']='jobs.job_list';
            return view('layouts.app',compact('data','jobs','types','categories'));
        }
        else if(Auth::user() && Auth::user()->role==2){
				// for HR
			$dep_hrs = User::where('dep_id',Auth::user()->dep_id)->pluck('id');
            $jobs=Job::select('id','job_title','job_category','project','band','report_to','division','is_travel','location','position_type','salary','total_post','qualification','experience','status','job_description','last_date','created_by','created_at')->whereIn('created_by',$dep_hrs)->orderBy('created_at','Desc')->get();
            $data['content']='jobs.job_list';
            return view('layouts.app',compact('data','jobs','types','categories'));
        }else{
            $jobs=Job::select('id','job_title','job_category','project','band','report_to','division','is_travel','location','position_type','salary','total_post','qualification','experience','status','job_description','last_date','created_by','created_at')->where('status',1)->whereDate('last_date','>=',date('Y-m-d'))->orderBy('created_at','Desc')->get();
            $data['content']='admin.jobs-posting';
            return view('layouts.app',compact('data','jobs','types','categories'));
        }
    }
    public function job_add_edit(Request $request)
    {
        
        if($request->job_id && Auth::user()->dep_id ){
			
			$dep_hrs = User::where('dep_id',Auth::user()->dep_id)->pluck('id');
            $job=Job::whereIn('created_by',$dep_hrs)->where('id',$request->job_id)->first();
			if(empty($job)){
				return Redirect::back()->with('warning', "You dont have edit Permission! please Contact to Admin");
			}
        }else{
           if(Auth::user()->dep_id){
                $job=new Job;
           }else{
                return Redirect::back()->with('warning', "You dont have edit Permission! please Contact to Admin");
           }
        }
        $job->job_title=$request->job_title;
        $job->job_category=$request->job_category;
        $job->project=$request->project;
        $job->location=$request->location;
        $job->position_type=$request->position_type;
        $job->salary=$request->salary;
		$job->band=$request->band;
		$job->division=$request->division;
		$job->report_to=$request->report_to;
        $job->total_post = $request->total_post;
        $job->qualification = $request->qualification;
        $job->experience = $request->experience;
        $job->is_travel = $request->is_travel;
        $job->job_description = $request->Job_description;
        $job->last_date = $request->last_post;
        $job->created_by = Auth::user()->id;
        $job->save();
        if($job){
            return Redirect::back()->with('success', "Job Add/Update Successfully");
        }else{
            return Redirect::back()->with('warning', "get Some Error! please Contact to Admin");
        }
    }
    public function job_change_status(Request $request)
    {
        if(($request->id) && (Auth::user()->role==2)){
            $jobId=Job::find($request->id);
            if($jobId->status){
                $jobId->status=0;
            }
            else{
                $jobId->status=1;
            }
            $jobId->save();
            return response()->json(['success' => true, 'result' => "status change successfully", 'error' => null], 200);
        }
        return response()->json(['success' => false, 'result' => null, 'error' => 'Something wrong'], 422);
    }
    public function active_jobs(Request $request)
    {
        $jobs=job::where('status',1)->whereDate('last_date','>',date('Y-m-d'))->get();
    }
    public function Apply(Request $request)
    {
        // return response()->json($request->all());
        $maximumPoints  = 100;
        $request->request->remove('_token');
        $per=0;
        foreach($request->all() as $key=>$value){
            if(!empty($value)){
                $per=$per+1.61;
            }
        }

        // $req->request->remove('_token');
        // $updateUserinfo=User::find(Auth::user()->id);

        if($request->acadmic_file){
            $acadmic=$this->fileUpload($request->acadmic_file,'accdmic_N_Professional',$request->job_id);
            $request->request->remove('acadmic_file'); 
            $request->request->add(['acadmic_file_url'=>$acadmic]);
        }
        if($request->work_file){
            $work_experience=$this->fileUpload($request->work_file,'work_experience',$request->job_id);
            $request->request->remove('work_file');
            $request->request->add(['work_file_url'=>$work_experience]);
        }
        if($request->photo_card){
            $photo=$this->fileUpload($request->photo_card,'other',$request->job_id);
            $request->request->remove('photo_card');
            $request->request->add(['candidate_photo'=>$photo]);
        }
        if($request->sign_card){
            $sign=$this->fileUpload($request->sign_card,'other',$request->job_id);
            $request->request->remove('sign_card');
            $request->request->add(['candidate_sign'=>$sign]);
        }
        if($request->aadhar_card){
            //  use for ID proof
            $aadhar=$this->fileUpload($request->aadhar_card,'other',$request->job_id);
            $request->request->remove('aadhar_card');
            $request->request->add(['candidate_aadhar'=>$aadhar]);
        }
        if($request->pan_card){
            //  use for upload resume
            $pan=$this->fileUpload($request->pan_card,'other',$request->job_id);
            $request->request->remove('pan_card');
            $request->request->add(['candidate_pan'=>$pan]);
        }
		if($request->twelve_cer){
            //  use for upload 12th certificate
            $twelve=$this->fileUpload($request->twelve_cer,'accdmic_N_Professional',$request->job_id);
            $request->request->remove('twelve_cer');
            $request->request->add(['twelve_cer_url'=>$twelve]);  
        }
		if($request->tenth_cer){
            //  use for upload thenth certificate
            $tenth=$this->fileUpload($request->tenth_cer,'accdmic_N_Professional',$request->job_id);
            $request->request->remove('tenth_cer');
            $request->request->add(['tenth_cer_url'=>$tenth]);
        }
        if($request->graduation_cer){
            //  use for upload gradution certificate
            $gradution=$this->fileUpload($request->graduation_cer,'accdmic_N_Professional',$request->job_id);
            $request->request->remove('graduation_cer');
            $request->request->add(['graduation_cer_url'=>$gradution]);
        }
        if($request->experience_certi){
            //  use for upload experience certificate
            $experience=$this->fileUpload($request->experience_certi,'accdmic_N_Professional',$request->job_id);
            $request->request->remove('experience_certi');
            $request->request->add(['experience_certi_url'=>$experience]);
        }
        $userinfo=User::find(Auth::user()->id);
        $userinfo->user_data=json_encode($request->all(),true);
        $userinfo->profile_per=$per;
        $userinfo->save();

        if($request->apply_job){ 
            $app=Applications::where('job_id',$request->job_id)->where('user_id',Auth::user()->id)->first();
            if($app){
                
            }else{
                $app=new Applications;	
            }
            $app->job_id=$request->job_id;
            $app->user_id=Auth::user()->id;
            
            $app->save();
            if($app){
                $jobtitle=Job::select('job_title')->where('id',$request->job_id)->first();
                    $req1 = new Request;
                    $req1->mobile = Auth::user()->mobile ? Auth::user()->mobile : '7895801111';
                    $req1->smsType = "application";
                    $req1->post = $jobtitle->job_title;
                    $req1->application_id=$app->id."-".$request->job_id."-".Auth::user()->id;
                    $sms = new SendSmsController;
                    $sms->sendsms($req1);
                // return Redirect::back()->with('success', "Your application submited/updated successfully");
            }
        }
        return Redirect::back()->with('error', "get Some Error! please Contact to Admin");
    }
    public function fileUpload($data,$folder,$job_id)
    {
        // upload_document/user_id/job_id/accdmic_N_Professional
        // upload_document/user_id/job_id/work_experience
        // upload_document/user_id/job_id/other
        // $data should be array and $folder have location/name of folder
        $uploadFile=[];
        foreach ($data as $key => $value) {
			$fileName = str_replace(' ', '_', $value->getClientOriginalName());
            $new_name = time().$key.'_'.$fileName;
			if($folder=="admin"){
				$value->move(public_path('/'.$folder.'/'.Auth::user()->id.'/'.$job_id), $new_name);
				$uploadFile[]='/'.$folder.'/'.Auth::user()->id.'/'.$job_id.'/'.$new_name;
			}else{
				$value->move(public_path('/upload_document/'.Auth::user()->id.'/'.$job_id.'/'.$folder), $new_name);	
				$uploadFile[]='/upload_document/'.Auth::user()->id.'/'.$job_id.'/'.$folder.'/'.$new_name;
			} 
        }
        return $uploadFile;
    }
	public function forgotPassword(Request $req){
		if($req->mobile){
			$checkUser = User::select('email','password')->where('mobile',$req->mobile)->first();
			if(isset($checkUser) && $checkUser->email){
				$new_password=mt_rand(10000,99999);
				$req1 = new Request;
				$req1->mobile = $req->mobile;
				$req1->smsType = "password";
				$req1->password = "ORA".$new_password;
				$req1->email=$checkUser->email;
				$check = User::where('mobile',$req->mobile)->update(['password'=>bcrypt("ORA".$new_password)]);	
				if($check){
					$sms = new SendSmsController;
					$res = $sms->sendsms($req1);
					//return redirect('/')->with('success', $res);
					return redirect('/')->with('success', "Your new password has been sent to your registered mobile number");
				}
				//$checkUser->password = bcrypt("ORA".$new_password);
				//$checkUser->save();
				return Redirect::back()->with('success', "Password not reset ! please contact to admin");
			}
			return Redirect::back()->with('success', "Mobile Number is Not registered");
		}
		return Redirect::back()->with('success', "Register Mobile Number is required");
	}
}
