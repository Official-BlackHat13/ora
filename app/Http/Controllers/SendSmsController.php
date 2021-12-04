<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempMobileValidate;
use Illuminate\Support\Facades\Auth;
use App\Models\Applications;
use Mail;
use App\Models\User;

class SendSmsController extends Controller
{
    public function sendsms(Request $req){ 
		// SMS type or template 
		// 1 - send sms while Registration(sendOtp)
		// 2 - send sms while submited Application form(application)
		// 3 - send sms while user forgot your password(password)
		if($req->smsType=="sendotp"){
			$mobile_otp= $this->saveOtp($req->mobile);	
			$message='OTP for Registration on Digital India Corporation Online Recruitment Portal is '.$mobile_otp .'-Digital India Corporation';
			$templateid="1307161416825804392";
			$smsservicetype="otpmsg";
		}
		if($req->smsType=="application"){
			$message='Your Application for the post of '.$req->post.', your application ID is '.$req->application_id .'-Digital India Corporation';  
			$templateid="1307160811135080003";
			$smsservicetype="singlemsg";
		}
		if($req->smsType=="password"){
			$message='Your new password on Digital India Corporation Recruitment Portal for user id '.$req->email.' is '.$req->password .'-Digital India Corporation'; 
			 $templateid="1307161416849891745";
			 $smsservicetype="otpmsg";
		}
        $username="mlasia-visphd"; //username of the department
        $password="Visphd@12345"; //password of the department
        $senderid="visphd"; //senderid of the deparment
        
        $deptSecureKey= "eb9c1965-637d-4715-a8a8-ac122cbf2dc7"; //departsecure key for encryption of message...
        $encryp_password=sha1(trim($password));
        $key=hash('sha512',trim($username).trim($senderid).trim($message).trim($deptSecureKey));
        $data = array(
            "username" => trim($username),
            "password" => trim($encryp_password),
            "senderid" => trim($senderid),
            "content" => trim($message),
            "smsservicetype" =>$smsservicetype,
            "mobileno" =>trim($req->mobile),
            "key" => trim($key),
			"templateid" => trim($templateid)
        );
        $url = "https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT";
        $fields = '';
        foreach($data as $key => $value) {
            $fields .= $key . '=' . $value . '&';
        }
        rtrim($fields, '&');
        $post = curl_init();
        curl_setopt($post,CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($post, CURLOPT_URL, $url);
        curl_setopt($post, CURLOPT_POST, count($data));
        curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($post); //result from mobile seva server
        curl_close($post);
        //$this->sendemail($req->email,$req->name);
        return response()->json(['msg'=>$result]);
    } 
    public function sendemail($email,$msg)
    {
        $email_otp= $this->saveOtp($email);
        // Mail::send('email.registration', ['user' => $email_otp], function ($m) use ($email) {
        //     $m->to($email)->subject('Your registrion!');
        // });
        // $message='OTP for Registration on Digital India Corporation Online Recruitment Portal is '.$email_otp .'-Digital India Corporation';
        //     // $purpose = $request->purpose;
        //     Mail::raw($message, function ($message) use ($email){
        //         $message->subject('Digital India Corporation (DIC) Admin');
        //         $message->to('ku.ashish1@gmail.com');
        //         $message->getSwiftMessage()
        //                 ->getHeaders()
        //                 ->addTextHeader('x-mailgun-native-send', 'true');
        //     });
        //     if (Mail::failures()) {
        //         return response()->json(['success' => false, 'result' => null, 'error' => "Mail Not send! Please Try Again"], 401);
        //     }
       return response()->json(['msg'=>'hello']);
    }
    public function validateOtp(Request $req)
    {
        if($req->mobile){
            $mobile_code=TempMobileValidate::select('code')->where('mobile',$req->mobile)->orderBy('id','Desc')->first();
        }
        // return response()->json($mobile_code->code);
        // if($req->email){247669
        //     $email_code=TempMobileValidate::select('code')->where('mobile',$req->email)->orderBy('id','Desc')->first();
        // }
        // if(isset($email_code) && isset($mobile_code)){
        //     if(($email_code==$req->email_code) && ($mobile_code==$req->mobile_code)){
        //         return response()->json(['msg'=>'successfully validate otp'],200);
        //     }
        //     return response()->json(['error'=>'either mobile or email otp is incorrect'],422);
        // }
        if(isset($mobile_code)){
            if((int)$mobile_code->code==(int)$req->mobile_otp){
                return response()->json(['msg'=>'successfully validate otp'],200);
            }
            return response()->json(['error'=>'either mobile or email otp is incorrect'],422);
        }
        return response()->json(['error'=>'either mobile or email otp is incorrect'],422); 
    }
    public function saveOtp($mobile)
    {
        $code=mt_rand(100000, 999999);
        $tempOtp=new TempMobileValidate;
        $tempOtp->mobile=$mobile;
        $tempOtp->code=$code;
        $tempOtp->save();
        return $code;
    }
}
