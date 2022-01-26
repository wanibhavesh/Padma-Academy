<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
class TeamController extends Controller
{
    public function index()
    {
        $team=Team::orderBy('number','asc')->get();
        return view('admin.team',compact('team'));
    }
    
    public function update(Request $request)
    {
        
        $team = new Team;
        $this->validate($request,[
                'name' => 'required',
                'task' => 'required',
                'editor1' => 'required',
                'number' => 'required',
                'photo' => 'required'
            ]);
        $team->name=$request->name;
        $team->task=$request->task;
        $team->content=$request->editor1;
        $team->number=$request->number;
        $team->photo=$request->photo;
        $team->save();
       
        
        
        return redirect(url('http://padmaacademy.com/admin/team'));
    }
    
    public function display()
    {
        $pic=Team::orderBy('number', 'asc')->get();
        return view('main.team',compact('pic'));
    }
    public function info($id)
    {
        $pic=Team::where('id',$id)->first();
        return view('main.info',compact('pic'));
    }
    public function destroy($id)
    {
        $team= Team::where('id',$id)->delete();
        return redirect()->back();
    }
}
