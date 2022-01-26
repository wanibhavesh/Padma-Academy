<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Division;
use App\Chapter;
use App\Content;
class EditClassController extends Controller
{
   
    public function update($id)
    {
        $cat = Category::all()->toArray();
        $div = Division::where('class_id',$id)->get();
        return view('admin.editclass',compact('cat','div'));
    }
    public function display($id)
    {
        $chap= Chapter::where('chapter_id',$id)->get();
        $div = Division::all()->toArray();
        return view('admin.editchapter',compact('div','chap'));
    }
    
    public function store(Request $request,$id)
    {
            
                 $this->validate($request,[
                'name' => 'required',
                'code' => 'required',
                'img'=>'required',
                'hover' => 'required',
            ]);
            $divi = Division::where('class_id',$id)->first();
            $slug1 = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->code))); 
            $slug2 = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->name))); 
            $slug= $slug1.'-'.$slug2;
            $divi->class_name= strtoupper($request->name);
            $divi->category_code= $request->code;
            $divi->class_image= $request->img;
            $divi->hover= $request->hover;
           
            
            
            $chap = Chapter::where('class_slug',$divi->class_slug)->get();
            foreach($chap as $items)
            {
                $items->class_slug= $slug;
                $items->save();
            }
            
            
            $cont = Content::where('class_slug',$divi->class_slug)->get();
            foreach($cont as $items)
            {
                $items->class_slug= $slug;
                $items->save();
            }
            
            $divi->class_slug= $slug;
            
            $divi->save();
     
            return redirect(route('class.index'));
            
    }
    public function write(Request $request,$id)
    {
            $chap = Chapter::where('chapter_id',$id)->first();
            $slug = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->name))); 
            $info =Chapter::where('class_slug',$request->code)->get();
            $check_name=Chapter::where('chapter_slug',$slug)->where('class_slug',$request->code)->value('chapter_slug');
             
            
            if($chap->chapter_name==$request->name && $chap->chapter_number==$request->number)
            {
                    $chap->chapter_name= $request->name;
                    $chap->chapter_number= $request->number;
                    $chap->class_slug= $request->code;
                    
                    $cont = Content::where('chapter_slug',$chap->chapter_slug)->get();
                    foreach($cont as $items)
                    {
                        $items->chapter_slug= $slug;
                        $items->chapter_number=$request->number;
                        $items->save();
                    }
                    
                    $chap->chapter_slug= $slug;
                    $chap->save();
                    return redirect(route('chapter.index'));
            }
            else if($chap->chapter_name!=$request->name && $chap->chapter_number==$request->number)
            {
                if($check_name=="")
                {
                        $chap->chapter_name= $request->name;
                        $chap->chapter_number= $request->number;
                        $chap->class_slug= $request->code;
                        
                    
                    $cont = Content::where('chapter_slug',$chap->chapter_slug)->get();
                    foreach($cont as $items)
                    {
                        $items->chapter_slug= $slug;
                        $items->chapter_number=$request->number;
                        $items->save();
                    }
                                        
                        $chap->chapter_slug= $slug;
                        $chap->save();
                        return redirect(route('chapter.index'));
                }
                else
                {
                    $data['error']="Same Chapter Name entered ";
                    $chap= Chapter::all()->toArray();
                    $div = Division::all()->toArray();
                    return view('admin.chapter',$data,compact('div','chap'));
                }
            }
            else if($chap->chapter_name==$request->name && $chap->chapter_number!=$request->number)
            {
                
                $flag=1;
                foreach($info as $item)
                {
                    if($item->chapter_number == $request->number)
                    {
                        $flag=0;
                    }
                }
                
                if($flag==1)
                {
                        $chap->chapter_name= $request->name;
                        $chap->chapter_number= $request->number;
                        $chap->class_slug= $request->code;
                    
                    $cont = Content::where('chapter_slug',$chap->chapter_slug)->get();
                    foreach($cont as $items)
                    {
                        $items->chapter_slug= $slug;
                        $items->chapter_number=$request->number;
                        $items->save();
                    }
                        $chap->chapter_slug= $slug;
                        $chap->save();
                        return redirect(route('chapter.index'));
                }
                else
                {
                    $data['error']="Same Chapter Number entered ";
                    $chap= Chapter::all()->toArray();
                    $div = Division::all()->toArray();
                    return view('admin.chapter',$data,compact('div','chap'));
                }
            }
            else
            {
                $flag=1;
                foreach($info as $item)
                {
                    if($item->chapter_number == $request->number)
                    {
                        $flag=0;
                    }
                }
                if($check_name=="")
                {
                    if($flag==1)
                    {
                        $chap->chapter_name= $request->name;
                        $chap->chapter_number= $request->number;
                        $chap->class_slug= $request->code;
                    
                    $cont = Content::where('chapter_slug',$chap->chapter_slug)->get();
                    foreach($cont as $items)
                    {
                        $items->chapter_slug= $slug;
                        $items->chapter_number=$request->number;
                        $items->save();
                    }
                        $chap->chapter_slug= $slug;
                        $chap->save();
                        return redirect(route('chapter.index'));
                    }
                    else
                    {   
                        $data['error']="Same Chapter Number entered ";
                        $chap= Chapter::all()->toArray();
                        $div = Division::all()->toArray();
                        return view('admin.chapter',$data,compact('div','chap'));
                    }
                }
                else
                {
                        $data['error']="Same Chapter Name entered ";
                        $chap= Chapter::all()->toArray();
                        $div = Division::all()->toArray();
                        return view('admin.chapter',$data,compact('div','chap'));
                
                
                }   
            }
            
            
    }
    public function table()
    {
        $table= Content::all()->toArray();
        return view('admin.editcontent',compact('table'));

    }
    public function destroy($id)
    {
        $cont= Content::where('id',$id)->delete();
        return redirect()->back();
    }
    
    
    
    public function mycontent($id)
    {
        $data['error']="";
        $cont = Content::where('id',$id)->first();
        $data['pass']=$cont->class_slug;
        $chap=Chapter::where('class_slug',$data['pass'])->get();
        return view('admin.updatecontent',$data,compact('chap','cont'));
    }
    
    public function updatecontent(Request $request,$id)
    {
            $content =Content::where('id',$id)->first();
            $post_id=0;
            $slug = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->name))); 
            
            $check=Content::where('chapter_slug',$request->chapter)->where('class_slug',$request->clas)->get();
            $check_name=Content::where('chapter_slug',$request->chapter)->where('class_slug',$request->clas)->where('subtopic_slug',$slug)->value('subtopic_slug');
            $user= Chapter::where('chapter_slug',$request->chapter)->value('chapter_number');
            
            $this->validate($request,[
                'clas' => 'required',
                'number' => 'required',
                'chapter' => 'required',
                'name' => 'required',
                'title' => 'required',
                'keyword' => 'required',
                'description' => 'required',
                
            ]);
            
            
            if($content->subtopic_slug==$slug && $content->subtopic_number==$request->number && $content->chapter_slug==$request->chapter )
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
                        $content->subtopic_slug= $slug;
                        $content->chapter_number=$user;
                        $content->post_id=$post_id;
                        $content->title= $request->title;
                        $content->keyword= $request->keyword;
                        $content->description= $request->description;
                    
                        $content->save();
                        return redirect(route('tablecontent'));
                    
                
          
            }
            else if($content->subtopic_slug!=$slug && $content->subtopic_number==$request->number)
            {
                if($check_name=="")
                {
                        
                    $chapn = strval($user);
                    $subtopicn = strval($request->number);
                    $post_id=(double)$chapn.".".$subtopicn;
                    
                    $content->class_slug= $request->clas;
                    $content->chapter_slug= $request->chapter;
                    $content->subtopic= $request->name;
                    $content->subtopic_number= $request->number;
                    $content->content= $request->editor1;
                    $content->subtopic_slug= $slug;
                    $content->chapter_number=$user;
                    $content->title= $request->title;
                    $content->keyword= $request->keyword;
                    $content->description= $request->description;
                    $content->post_id=$post_id;
                    $content->save();
                    return redirect(route('tablecontent'));
                }
                else
                {
                    $data['error']="Same name Subtopic Failed";
                    $cont = Content::where('id',$content->id)->first();
                    $data['pass']=$cont->class_slug;
                    $chap=Chapter::where('class_slug',$data['pass'])->get();
                    return view('admin.updatecontent',$data,compact('chap','cont'));
                }
            }
            else if($content->subtopic_slug==$slug && $content->subtopic_number!=$request->number)
            {
                $flag=1;
                foreach($check as $item)
                {
                    if($item->subtopic_number==$request->number)
                    {
                        $flag=0;
                    }
                }
                if($flag==1)
                {
                    $chapn = strval($user);
                    $subtopicn = strval($request->number);
                    $post_id=(double)$chapn.".".$subtopicn;
                    
                    $content->class_slug= $request->clas;
                    $content->chapter_slug= $request->chapter;
                    $content->subtopic= $request->name;
                    $content->subtopic_number= $request->number;
                    $content->content= $request->editor1;
                    $content->subtopic_slug= $slug;
                    $content->chapter_number=$user;
                    $content->title= $request->title;
                    $content->keyword= $request->keyword;
                    $content->description= $request->description;
                    $content->post_id=$post_id;
                    $content->save();
                    return redirect(route('tablecontent'));
                }
                else
                {
                    $data['error']="Failed Same Subtopic Number ";
                    $cont = Content::where('id',$content->id)->first();
                    $data['pass']=$cont->class_slug;
                    $chap=Chapter::where('class_slug',$data['pass'])->get();
                    return view('admin.updatecontent',$data,compact('chap','cont'));
                }
            }
            else
            {
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
                        $subtopicn = strval($request->number);
                        $post_id=(double)$chapn.".".$subtopicn;
                        
                        $content->class_slug= $request->clas;
                        $content->chapter_slug= $request->chapter;
                        $content->subtopic= $request->name;
                        $content->subtopic_number= $request->number;
                        $content->content= $request->editor1;
                        $content->subtopic_slug= $slug;
                        $content->chapter_number=$user;
                        $content->title= $request->title;
                        $content->keyword= $request->keyword;
                        $content->description= $request->description;
                        $content->post_id=$post_id;
                        $content->save();
                        return redirect(route('tablecontent'));
                    }
                    else
                    {
                        $data['error']="Failed Same Subtopic Number ";
                    $cont = Content::where('id',$content->id)->first();
                    $data['pass']=$cont->class_slug;
                    $chap=Chapter::where('class_slug',$data['pass'])->get();
                    return view('admin.updatecontent',$data,compact('chap','cont'));
                    }
                }
                else
                {
                        $data['error']="Same name Subtopic Failed";
                    $cont = Content::where('id',$content->id)->first();
                    $data['pass']=$cont->class_slug;
                    $chap=Chapter::where('class_slug',$data['pass'])->get();
                    return view('admin.updatecontent',$data,compact('chap','cont'));
                }
            
            
                
            }
            
    }
    
    
    
}
