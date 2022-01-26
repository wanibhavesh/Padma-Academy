<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Content;
use App\Chapter;
use App\Division;


class ContentController extends Controller
{
    
  
    public function index($value)
    {
        $table= Content::all()->toArray();
        $data['pass']=$value;
        $data['error']="";
        $div =Division::all()->toArray();
        $chap= Chapter::where('class_slug',$value)->get();
        return view('admin.content',$data,compact('div','chap','table'));
    }
    
    
    
    
    public function store(Request $request)
    {
            
            $content = new Content;
            $post_id=0;
            $slug = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->name))); 
            
            $check=Content::where('chapter_slug',$request->chapter)->where('class_slug',$request->clas)->get();
            $check_name=Content::where('chapter_slug',$request->chapter)->where('class_slug',$request->clas)->where('subtopic_slug',$slug)->value('subtopic_slug');
            $user= Chapter::where('chapter_slug',$request->chapter)->value('chapter_number');
            
            $flag=1;
            foreach($check as $item)
            {
                if($item->subtopic_number==$request->number)
                {
                    $flag=0;
                }
            }
            if($check_name=="")
            {
                
                if($flag==1)
                {
                    
                    $chapn = strval($user);
                    
                    if($request->number < 10)
                    {
                        $subtopicn = '0'.strval($request->number);
                    }
                    else{
                        $subtopicn = strval($request->number);
                    }
                    
                    $post_id=(double)$chapn.".".$subtopicn;
                    
                    $content->class_slug= $request->clas;
                    $content->chapter_slug= $request->chapter;
                    $content->subtopic= $request->name;
                    $content->subtopic_number= $request->number;
                    $content->content= $request->editor1;
                    $content->title= $request->title;
                    $content->keyword= $request->keyword;
                    $content->description= $request->description;
                    $content->subtopic_slug= $slug;
                    $content->chapter_number=$user;
                    $content->post_id=$post_id;
                    $content->save();
                    return redirect()->back();
                }
                else
                {
                    $div =Division::all()->toArray();
                    $chap= Chapter::where('class_slug',$request->clas)->get();
                    $data['pass']=$request->clas;
                    $data['error']="Subtopic number already register";
                    return view('admin.content',$data,compact('div','chap'));
                }
            }
            else
            {
                    $div =Division::all()->toArray();
                    $chap= Chapter::where('class_slug',$request->clas)->get();
                    $data['pass']=$request->clas;
                    $data['error']="Subtopic Name already register";
                    return view('admin.content',$data,compact('div','chap'));
            }
            
    }
}
