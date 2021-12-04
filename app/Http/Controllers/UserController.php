<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

    public function userInfo(Request $req)
    {
        
        if($req->photo_card){
            $photo_card= $this->fileUpload($req->photo_card,'userdocument',$req->job_id);
            // dd($photo_card);
            $req->request->remove('photo_card');
            $req->request->add(['photo_card_new'=>$photo_card]);  
        }
        if($req->pan_card){
            $pan_card= $this->fileUpload($req->pan_card,'userdocument',$req->job_id);
            $req->request->remove('pan_card');
            $req->request->add(['pan_card_new'=>$pan_card]); 
        }
        $req->request->remove('_token');
        $updateUserinfo=User::find(Auth::user()->id);
        $updateUserinfo->user_info=json_encode($req->all(),true);
        $updateUserinfo->login_count=1;
        if($updateUserinfo->save()){
            // return redirect('/dashboard')->with('success', "User info add successful");
        }
        return redirect('/')->with('success', "something is wrong");
    }
    
    public function fileUpload($data,$folder)
    {
        // $uploadFile=[];
        // foreach ($data as $key => $value) {
			$fileName = str_replace(' ', '_', $data[0]->getClientOriginalName());
            $new_name = time().'_'.$fileName;
				$data[0]->move(public_path('/upload_document/'.Auth::user()->id.'/'.$folder), $new_name);	
				// $uploadFile[]=$new_name;
		//  }
        return $new_name;
    }
}
