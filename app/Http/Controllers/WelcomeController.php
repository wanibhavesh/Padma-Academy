<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marq;
use App\Division;
use App\Category;
use App\Content;
use App\Chapter;
use App\Contactus;
use App\StudyAbroad;
use App\StudyAbroadPost;
use App\BlogCategory;
use App\Blogs;
class WelcomeController extends Controller
{
    public function index()
    {
        $marq = Marq::all()->toArray();
        $cat = Category::all()->toArray();
        $divi = Division::all()->toArray();
        $chapt = Chapter::all()->toArray();
        $content = Content::all()->toArray();
        $blog = BlogCategory::all()->toArray();
        return view('welcome',compact('marq','divi','cat','chapt','content','blog'));
    }
    
    public function fetch($value)
    {
        $content = Content::where('class_slug',$value)->get();
        $chapter_slug="";
        $subtopic_slug="";
        
        $i=1;
        foreach($content as $item)
        {
            if($i==1)
            {
                $temp=$item->post_id;
                $i=$i-1;
            }
	        if($item->post_id < $temp)
	        {
		        $temp=$item->post_id;
            }
        }
        
        
        
        
        foreach($content as $item)
        {
            if($item->post_id==$temp)
            {
                $chapter_slug=$item->chapter_slug;
                $subtopic_slug=$item->subtopic_slug;
            }
        }
        return redirect(url('content/'.$value.'/'.$chapter_slug.'/'.$subtopic_slug));
    }
    public function contact()
    {
        return view('main.contact');
    }
    public function contactwrite(Request $request)
    {
        $contact=new Contactus;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();
        
        return redirect(url('http://padmaacademy.com/contactus'));
    }
    
    public function studyabroad()
    {
        return view('studyabroad');
    }
    public function studyabroadwrite(Request $request)
    {
        $sa=new StudyAbroad;
        $sa->name=$request->name;
        $sa->email=$request->email;
        $sa->questions=$request->questions;
        $sa->save();
        $headers = 'From: studyabroad@padmaacademy.com';
        $text= "Email by :- ".$sa->email." \n\n".$sa->questions;
        mail("wanibhavesh767@gmail.com","Admission in German University by Padma Academy",$text, $headers);
        
        return redirect(url('http://padmaacademy.com/studyabroad'));
    }    
    
    public function studyabroadblogs()
    {
        $sap=StudyAbroadPost::all()->toArray();
        return view('studyabroadblogs',compact('sap'));
    }
    
    
    public function fetchcode($code)
    {
        if($code=='all')
        {
            $name=Category::where('category_code',$code)->first();
            $div=Division::orderBy('class_id','asc')->get();
            $data['name']=$name->category_name;
            return view('main.choose',$data,compact('div'));    
        }
        else{
            $name=Category::where('category_code',$code)->first();
            $div=Division::where('category_code',$code)->get();
            $data['name']=$name->category_name;
            return view('main.choose',$data,compact('div'));
        }
    }
    
    public function studyabroadpost($slug)
    {
        $content = StudyAbroadPost::where('topic_slug',$slug)->first();
        $post= StudyAbroadPost::orderBy('topic_number','asc')->get();
        return view('studyabroadpost',compact('content','post'));
    }
    
    
    public function getblogs($slug)
    {
        $fetch = Blogs::where('category_slug',$slug)->get();
        return view('allblogs',compact('fetch'));
    }
    
    public function displayblogs($category,$slug)
    {
        $blog = Blogs::where('category_slug',$category)->where('slug',$slug)->first();
        $related = Blogs::where('category_slug',$category)->get();
        return view('blogs',compact('blog','related'));
    }
    
}
