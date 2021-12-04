<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use App\Models\Applications;
use App\Models\User;
use DB;
use Redirect;



class DashboardController extends Controller
{
    public function index(Request $request){
        
        // dd(Auth::user()->user_info);
        if(Auth::user()->role==0)
        {
            if(Auth::user()->login_count<1){
                $data['content']='jobs.zero_page';
                return view('layouts.app',compact('data'));
            }
            $applied=Applications::where('user_id',Auth::user()->id)->pluck('job_id')->toArray();
			$jobs=Job::select('id','job_title','job_category','project','is_travel','location','position_type','salary','total_post','qualification','experience','status','job_description','last_date','created_by','created_at')->where('status',1)->whereDate('last_date','>=',date('Y-m-d'))->orderBy('created_at','Desc')->get();
			
			$candidate_apply = Job::select('id','job_title','job_category','project','is_travel','location','position_type','salary','total_post','qualification','experience','status','job_description','last_date','created_by','created_at')->whereIn('id',Applications::where('user_id',Auth::user()->id)->pluck('job_id'))->orderBy('created_at','Desc')->get();
			
			$boards = DB::table('boards')->where('status',1)->orderBy('university','ASC')->pluck('university');
            $data['content']='admin.candidate-dashboard';
            return view('layouts.app',compact('data','jobs','applied','candidate_apply','boards'));
        }
		if(Auth::user()->role==2){
            $jobs=job::where('status',1)->orderBy('created_at','DESC')->get();
			$job_ids=Job::where('created_by',Auth::user()->id)->pluck('id');
			$recived_application = Applications::whereIn('job_id',$job_ids)->orderBy('created_at','DESC')->limit(10)->get();
            $data['content']='admin.hr-dashboard';
            return view('layouts.app',compact('data','jobs','recived_application'));
        }
		if(Auth::user()->role==1){
            $data['content']='admin.dashboard';
            return view('layouts.app',compact('data'));
        }
		if(Auth::user()->role==3){
            $data['content']='admin.dashboard';
            return view('layouts.app',compact('data'));
        }
	if(Auth::user()->role==4){
         return redirect('received-applications'); 
       }
    }

	public function chnagePassword(Request $req){
		if(Auth::user()){
			$check = User::where('email',Auth::user()->email)->update(['password'=>bcrypt($req->password)]);
			return redirect('/')->with('success', "Your Password have been changed successfully! Please Login Again");		//return Redirect::back()->with('msg', "Your Password have been changed successfully");
		}
		return redirect('/')->with('success', "Somthing get wrong ! please contact to admin");	
		//return Redirect::back()->with('msg', "Somthing get wrong ! please contact to admin");
	}
}
