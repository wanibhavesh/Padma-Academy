<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Division;
use App\Category;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::all()->toArray();
        $div = Division::all()->toArray();
        return view('admin.class',compact('cat','div'));
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
            $divi = new Division;
            $this->validate($request,[
                'name' => 'required',
                'code' => 'required',
                'img' => 'required',
                'hover' => 'required'
            ]);
            $slug1 = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->code))); 
            $slug2 = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->name))); 
            $slug= $slug1.'-'.$slug2;
            $divi->class_name= strtoupper($request->name);
            $divi->category_code= $request->code;
            $divi->class_image= $request->img;
            $divi->hover= $request->hover;
            $divi->class_slug= $slug;
            $divi->save();
            return redirect(route('class.index'));
            
           
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
        $di= Division::where('class_id',$id)->delete();
        return redirect()->back();
    }
}
