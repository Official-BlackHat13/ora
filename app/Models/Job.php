<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobRollsNResponsibility;
use App\Models\JobDesirableSkill;
use App\Models\JobRequiredSkill;
use App\Models\JobCategory;
use App\Models\JobType;
use App\Models\User;
use App\Models\Department;

class Job extends Model
{
    use HasFactory;
	protected $appends = ['dep','created_name'];
    public function rolls() 
    {
        return $this->hasMany(JobRollsNResponsibility::class);
    }
    public function requiredSkills() 
    {
        return $this->hasMany(JobRequiredSkill::class);
    }
    public function desiredSkills() 
    {
        return $this->hasMany(JobDesirableSkill::class);
    }
    public function getJobCategoryAttribute($data)
    {
        $category=JobCategory::where('id',$data)->first();
        if($category){
            return $category->category;
        }
        return $data;
    }
    public function getPositionTypeAttribute($data)
    {
        $position=JobType::where('id',$data)->first();
        if($position){
            return $position->type;
        }
        return $data;
    }
	public function getDepAttribute(){
		$dep_id=User::select('dep_id')->where('id',$this->created_by)->first();
		if($dep_id){
			$dep = Department::where('id',$dep_id->dep_id)->first();
			return  $dep ? $dep->name : '';
		}
		return '';
	}
	public function getCreatedNameAttribute(){
		$user=User::find($this->created_by);
		if($user){
			return $user->name;
		}
		return '';
	}
	
    
}
