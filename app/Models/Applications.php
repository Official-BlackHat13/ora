<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;
use App\Models\User;

class Applications extends Model
{
    use HasFactory;
    protected $table="receive_applications";
    protected $appends=['jobs','candidate'];
    function getJobsAttribute(){
        return Job::select('id','job_title','job_category','project','salary','total_post','qualification','experience','last_date','qualification')->where('id',$this->attributes['job_id'])->first();
        
    }
    function getCandidateAttribute()
    {
        return User::select('id','name','email','mobile')->where('id',$this->attributes['user_id'])->first();
    }
}
