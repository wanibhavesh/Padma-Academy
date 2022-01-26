<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StudyAbroadPost;

class StudyAbroadController extends Controller
{
    public function index()
    {
        $data['error']="";
        return view('admin.studyabroadcontent', $data);
    }
    
    
    public function store(Request $request)
    {
            
            $study_abroad_post = new StudyAbroadPost;
            $post_id=0;
            $name=$request->topicname;
            $slug = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->topicname))); 
            
            $check = StudyAbroadPost::where('topic_number',$request->number)->get();
            
            $flag=1;
            foreach($check as $item)
            {
                if($item->topic_number==$request->number)
                {
                    $flag=0;
                }
            }
            if($flag==1)
            {
                $study_abroad_post->topic= $name;
                $study_abroad_post->topic_number= $request->number;
                $study_abroad_post->content= $request->editor1;
                $study_abroad_post->title= $request->title;
                $study_abroad_post->keyword= $request->keyword;
                $study_abroad_post->description= $request->description;
                $study_abroad_post->topic_slug= $slug;
                $study_abroad_post->image= $request->image;
                $study_abroad_post->save();
                return redirect()->back();
            }
            else
            {
                    $data['error']="Topic Number already register";
                    return view('admin.studyabroadcontent',$data);
            }
    }
    public function table()
    {
        $table= StudyAbroadPost::all()->toArray();
        return view('admin.studyabroadtable',compact('table'));

    }
    
    public function mycontent($id)
    {
        $data['error']="";
        $cont = StudyAbroadPost::where('id',$id)->first();
        return view('admin.studyabroadeditcontent',$data,compact('cont'));
    }
    
    public function updatecontent(Request $request,$id)
    {
            
            $study_abroad_post = StudyAbroadPost::where('id',$id)->first();;
            $name = $request->topicname;
            $slug = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->topicname))); 
            
            
            if($study_abroad_post->topic_number == $request->number)
            {
                $study_abroad_post->topic= $name;
                $study_abroad_post->topic_number= $request->number;
                $study_abroad_post->content= $request->editor1;
                $study_abroad_post->title= $request->title;
                $study_abroad_post->keyword= $request->keyword;
                $study_abroad_post->description= $request->description;
                $study_abroad_post->topic_slug= $slug;
                $study_abroad_post->image= $request->image;
                $study_abroad_post->save();
                return redirect(route('studyabroadtablecontent'));
            }
            else if($study_abroad_post->topic_number != $request->number)
            {
                $flag=1;
                $check = StudyAbroadPost::where('topic_number',$request->number)->get();
                foreach($check as $item)
                {
                    if($item->topic_number == $request->number)
                    {
                        $flag=0;
                    }
                }
                if($flag==1){
                    $study_abroad_post->topic= $name;
                    $study_abroad_post->topic_number= $request->number;
                    $study_abroad_post->content= $request->editor1;
                    $study_abroad_post->title= $request->title;
                    $study_abroad_post->keyword= $request->keyword;
                    $study_abroad_post->description= $request->description;
                    $study_abroad_post->topic_slug= $slug;
                    $study_abroad_post->image= $request->image;
                    $study_abroad_post->save();
                    return redirect(route('studyabroadtablecontent'));
                }
                else
                {
                    $cont = StudyAbroadPost::where('id',$id)->first();
                    $data['error']="Topic Number already register";
                    return view('admin.studyabroadeditcontent',$data,compact('cont'));
                }
            }
    }
   
   public function destroy($id)
    {
        $cont= StudyAbroadPost::where('id',$id)->delete();
        return redirect()->back();
    }
    
}
