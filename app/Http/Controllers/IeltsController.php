<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IeltsUser;
use Session;
use App\Writingque;
use App\Useressay;
use App\RegisterIeltsTest;
use App\ListeningAns;
use App\ListenUser;
class IeltsController extends Controller
{
    public function index()
    {
        Session::flush();
        $data['error']="";
        return view('ielts.ieltsregister',$data);
    }
    public function indexlogin()
    {
        $data['error']="";
        $non_verified = IeltsUser::where('verified','0')->get();
        foreach($non_verified as $del)
        {
            $perf_del_op = IeltsUser::where('id',$del->id)->delete();
        }
        if(Session::get('mail'))
        {
            return redirect(url('/ieltsdashboard'));
        }
        else{
            return view('ielts.ieltslogin',$data);
        }
    }
    public function login(Request $request)
    {
        Session::forget('mail');
        Session::save();
        $check = IeltsUser::where('email',$request->email)->where('password',$request->password)->where('verified',1)->first();
        if($check)
        {
            if(($check->email == $request->email) && ($check->password == $request->password) && ($check->verified == 1)){
                session()->put('mail', $request->email);
                $data['email']=$request->email;
                return redirect(url('/ieltsdashboard'));
            }
    
        }
        else{
            $data['error']="Something is wrong";
            return view('ielts.ieltslogin',$data);
        }
    }
    
    public function userregister(Request $request)
    {
        Session::flush();
        $data['error']="";
        $already = IeltsUser::where('email',$request->email)->first();
        $flag=1;
        if($already)
        {
            if($already->verified == 1){
                $data['error']="Email already register";
                return view('ielts.ieltsregister',$data);
            }
            else{
                $cont= IeltsUser::where('email',$request->email)->delete();
                $ielts_users= new IeltsUser;
                $ielts_users->name=$request->name;
                $ielts_users->email=$request->email;
                $ielts_users->password=$request->password;
                $ielts_users->otp=rand(100000,999999);
                $ielts_users->verified=0;
                $ielts_users->save();
                $headers = 'From: ielts@padmaacademy.com';
                $text="Hey ".$ielts_users->name.",\n\nTo authenticate, please use the One Time Password (OTP): ".$ielts_users->otp."\n\nYour password is ".$ielts_users->password."\n\nALL THE BEST FOR YOUR IELTS" ;
                mail($ielts_users->email,"Padma Academy IELTS Registration OTP",$text, $headers);
                return redirect(url('ieltsotp/'.$request->email));
            }
        }
        else{
            $ielts_users= new IeltsUser;
            $ielts_users->name=$request->name;
            $ielts_users->email=$request->email;
            $ielts_users->password=$request->password;
            $ielts_users->otp=rand(100000,999999);
            $ielts_users->verified=0;
            $ielts_users->save();
            $headers = 'From: ielts@padmaacademy.com';
            $text="Hey ".$ielts_users->name.",\n\nTo authenticate, please use the One Time Password (OTP): ".$ielts_users->otp."\n\nYour password is ".$ielts_users->password."\n\nALL THE BEST FOR YOUR IELTS" ;
            mail($ielts_users->email,"Padma Academy IELTS Registration OTP",$text, $headers);
            return redirect(url('ieltsotp/'.$request->email));
        }
    }
    public function otpverification($email)
    {
        $check = IeltsUser::where('email',$email)->first();
        if($check)
        {
            $data['error']="";
            $data['email']=$email;
            return view('ielts.ieltsotp',$data);
        }
    }
    public function otpcheck(Request $request)
    {
        $check = IeltsUser::where('email',$request->email)->first();
        if($check->otp == $request->otp)
        {
            $check->verified = 1;
            $check->save();
            session()->put('mail', $request->email);
            $data['email']=$request->email;
            return redirect(url('/ieltsdashboard'));
        }
        else{
            return redirect(url('ieltsotp/'.$request->email));
        }
    }
    
    public function dashboard()
    {
        $data['email'] = session::get('mail');
        $check = IeltsUser::where('email',$data['email'])->first();
        $no_essay = Useressay::where('user',$data['email'])->count();
        $no_listening = ListenUser::where('user',$data['email'])->count();
        $data['noessay']=$no_essay;
        $data['no_listening']=$no_listening;
        $test = Useressay::where('user',$data['email'])->get();
        $ltest = ListenUser::where('user',$data['email'])->get();
        return view('ielts.ieltsdashboard',$data,compact('check','test','ltest'));
    }
    
    public function writingtest($testname)
    {
        $content = Writingque::where('slug',$testname)->first();
        return view('ielts.ieltswriting',compact('content'));
    }
    
    public function postieltswriting(Request $request)
    {
        $post = new Useressay;
        $post->slug = $request->slug;
        $post->ans1 = $request->ans1;
        $post->user = $request->user;
        $post->ans2 = $request->ans2;
        $post->band ="In Review";
        $post->publish ="0";
        $post->save();
        return redirect('/ieltsdashboard');
    }
    
    public function getreadieltswriting($slug)
    {
        $readpost = Useressay::where('slug',$slug)->where('publish','1')->get();
        $question = Writingque::where('slug',$slug)->first();
        $seo = RegisterIeltsTest::where('slug',$slug)->first();
        $user= IeltsUser::all()->toArray();
        if($readpost && $question)
        {
            return view('allanswerieltswriting',compact('readpost','question','user','seo'));
        }
        
    }
    
}
