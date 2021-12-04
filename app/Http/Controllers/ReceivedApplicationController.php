<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempMobileValidate;
use Illuminate\Support\Facades\Auth;
use App\Models\Applications;
use Mail;
use App\Models\User;
use App\Models\Job;
use DB;
use DateTime;


class ReceivedApplicationController extends Controller
{
    public function getApplyJob(Request $req,$job_id)
    {
        if(Auth::user()->role==0 && $job_id){
            $app =Applications::where('user_id',Auth::user()->id)->where('job_id',$job_id)->first();
            $data['content']='admin.jobs-applied-by-candidate';
			//return response()->json(json_decode($app->user_data));
			
            return view('layouts.app',compact('data','app'));
        }
        if((Auth::user()->role==2 || Auth::user()->role==3)  && $job_id){
            $app =Applications::where('id',$job_id)->first();
            $data['content']='admin.jobs-applied-by-candidate';
            return view('layouts.app',compact('data','app'));
        }

        return response()->json(["error"=>"Get Somthing error ! please contact to admnistrator"],422);
    }
    // fun for hr
    public function appliedCandidate(Request $req)
    {
		//return $req->all();
		
        if(Auth::user()->role==2 || Auth::user()->role==3 || Auth::user()->role==4){
			//return response()->json(Auth::user()->role);
			$dep_hrs = User::where('dep_id',Auth::user()->dep_id)->pluck('id');
			$jobs=Job::select('id','job_title','last_date','project')->whereIn('created_by',$dep_hrs)->where('status',1)->orderBy('created_at','Desc')->get();
			if($req->job_id && $req->job_id != "all"){
				$apps = Applications::where('job_id',$req->job_id)->where('status',0)->get();
			}else{
				$apps = [];
			}
			if(Auth::user()->role==4){
				$jobs=Job::select('id','job_title','last_date','project')->where('status',1)->orderBy('created_at','Desc')->get();
			}
           
            $data['content']='admin.no-action-candidates';
            // return response()->json($apps);
            return view('layouts.app',compact('data','apps','jobs'));
        }
        return response()->json(["error"=>"Get Somthing error ! please contact to admnistrator"],422);
    }  
    public function selectCandidate(Request $req)
    {
        if(Auth::user()->role==2){
            $dep_hrs = User::where('dep_id',Auth::user()->dep_id)->pluck('id');
			$dep_jobs = Job::whereIn('created_by',$dep_hrs)->pluck('id');
            $apps = Applications::whereIn('job_id',$dep_jobs)->where('status',1)->get();
            $data['content']='admin.selected-candidate';
            return view('layouts.app',compact('data','apps'));
        }
        return response()->json(["error"=>"Get Somthing error ! please contact to admnistrator"],422);
    }  
    public function rejectCandidate(Request $req)
    {
        if(Auth::user()->role==2){
            $dep_hrs = User::where('dep_id',Auth::user()->dep_id)->pluck('id');
			$dep_jobs = Job::whereIn('created_by',$dep_hrs)->pluck('id');
            $apps = Applications::whereIn('job_id',$dep_jobs)->where('status',2)->get();
            $data['content']='admin.rejected_candidate';
            return view('layouts.app',compact('data','apps'));
        }
        return response()->json(["error"=>"Get Somthing error ! please contact to admnistrator"],422);
    } 
    public function appChangeStatus(Request $req)
    {
        if(Auth::user()->role==2){
            $app=Applications::where('job_id',$req->job_id)->where('user_id',$req->user_id)->first();
            $app->status=$req->status;
            $app->save();
            return response()->json(["msg"=>$app],200);
        }
        return response()->json(["error"=>"Get Somthing error ! please contact to admnistrator"],422);
    }
	public function editApplication($job_id)
    {
        if(Auth::user()->role==0 && $job_id){
            $app =Applications::where('user_id',Auth::user()->id)->where('job_id',$job_id)->first();
            $data['content']='admin.edit-applied-job';
            return view('layouts.app',compact('data','app'));
        }
        return response()->json(["error"=>"Get Somthing error ! please contact to admnistrator"],422);
    }
    public function editApplyJob(Request $req)
    {
        return $request->all();
    }
	public function exportToExcel(Request $req){
		//$dep_hrs = User::where('dep_id',Auth::user()->dep_id)->pluck('id');
		//$jobs=Job::whereIn('created_by',$dep_hrs)->where('status',1)->orderBy('created_at','Desc')->get();
		if($req->job_id){
			//return $req->job_id;
			//$apps = DB::table('receive_applications')->select('user_data')->where('job_id',$req->job_id)->where('status',0)->get()->toArray();
			$apps = Applications::select('user_data','job_id','user_id')->where('job_id',$req->job_id)->where('status',0)->get();
			// Excel file name for download 
			$fileName = "job" . date('Ymd') . ".xls"; 
			 
			// Headers for download 
			header("Content-Disposition: attachment; filename=\"$fileName\""); 
			header("Content-Type: application/vnd.ms-excel"); 
			 
			//$flag = false; 
			foreach($apps as $key=>$row) { 
				if($key==0) { 
				//return ($row->user_data);
					// display column names as first row 
					echo $apps[0]->jobs->job_title."\n";
					echo "S. No \t Candidate Name \t Gender \t Father Name \t Mother Name \t DOB \t Age on(".date('d-m-Y',strtotime($row->jobs->last_date)).") \t Mobile \t Email \t Address \t Education & Qualification \t Designation \t Org Name \t From \t To \t Total Experience \t Salary \n";
				} 
				$data = json_decode($row->user_data);
				$name = $data->first_name ." ".$data->middle_name." ".$data->last_name;				
				// calculate Age on last date of applied job
				$diff = strtotime($row->jobs->last_date) - strtotime($data->dob);
                $age=$this->getAge($diff);
				$address = preg_replace("/\r|\n/", " ", $data->p_address);
				$qualification = '';
				$desig = '';
				$org_name = '';
				$from = '';
				$to = '';
				$total = 0;
				$salary='';
				//return $data;
				if(isset($data->acadmic_degree) && count($data->acadmic_degree)){
					foreach($data->acadmic_degree as $quali=>$edu){
						//return $data->acadmic_passing_year[$quali];
						$board = $data->acadmic_board[$quali];
						$passing_year=$data->acadmic_passing_year[$quali];
                        $degree_name= $data->acadmic_degree_name[$quali];
						$qualification .= $edu."(".$degree_name.")" ." from ".$board." in".$passing_year.",";
					}
				}
				if(isset($data->work_o_designation) && count($data->work_o_designation)){
					foreach($data->work_o_designation as $key_work=>$designation){
						//return $data->acadmic_passing_year[$quali];
						$desig .= $designation.",";
						$org_name .= $data->work_o_name[$key_work].",";
						$from .= $data->work_o_from[$key_work] ? date("d-m-Y",strtotime($data->work_o_from[$key_work])).",":"Null";
						$to .= $data->work_o_to[$key_work] ? date("d-m-Y",strtotime($data->work_o_to[$key_work])).",":"Null";
						$salary .= $data->work_o_salary[$key_work].",";
                        if($data->work_o_to[$key_work] && $data->work_o_from[$key_work]){
                            $total +=  strtotime($data->work_o_to[$key_work]) - strtotime($data->work_o_from[$key_work]);
                         } 
					}
				}
                $total=$this->getAge($total);
				echo ($key+1) . "\t". $name ."\t" . $data->sex . "\t". $data->father_name ."\t". $data->mother_name  ."\t". $data->dob. "\t". $age. "\t". $data->mobile . "\t" .$data->email."\t". $address. "\t" . $qualification ."\t".$desig."\t". $org_name ."\t".$from."\t".$to."\t".$total."\t".$salary."\n";
			} 
			 
			exit;
			//return response()->json(['data'=>$apps],200);
		}
		//return $req->all();
	}
    public function getAge($seconds)
    {
        $year = floor((floor($seconds / 86400))/365);
        $remain_diff_days = floor(($seconds-($year*86400*365))/86400);
        $month = floor($remain_diff_days/30);
        $days = $remain_diff_days%30;
        return "$year year(s) $month month(s) $days day(s)";
    }
}