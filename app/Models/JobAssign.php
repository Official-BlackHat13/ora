<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Job;

class JobAssign extends Model
{
    use HasFactory;
	protected $table="assign_job_to_member";
	protected $appends=['job','members'];
	public function getJobAttribute()
    {
		$job = Job::select('job_title')->where('id',$this->attributes['job_id'])->first();
		if($job){
			return $job->job_title;
		}
        
    }
	public function getMembersAttribute()
    {
		$users = json_decode($this->attributes['user_ids']);
		if($users && count($users)){
			$members = [];
			foreach($users as $key => $user){
				$member = new \stdClass();
				$user_name = User::select('name')->where('id',$user)->first();
				if($user_name){
					$member->id = $user;
					$member->name=$user_name->name;
				}
				$members[$key] = $member;
			}
			return $members;
		}
        return "asd";
    }
}
