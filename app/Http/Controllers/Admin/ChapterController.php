<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Division;
use App\Chapter;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chap= Chapter::all()->toArray();
        $div = Division::all()->toArray();
        $data['error']="";
        return view('admin.chapter',$data,compact('div','chap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $chap = new Chapter;
            $slug = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->name))); 
            $info =Chapter::where('class_slug',$request->code)->get();
            $check_name=Chapter::where('chapter_slug',$slug)->where('class_slug',$request->code)->value('chapter_slug');
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
                    
            $this->validate($request,[
                'name' => 'required',
                'number' => 'required',
                'code'=>'required',
            ]);
                    $chap->chapter_name= $request->name;
                    $chap->chapter_number= $request->number;
                    $chap->class_slug= $request->code;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chap= Chapter::where('chapter_id',$id)->delete();
        return redirect()->back();
    }
}
