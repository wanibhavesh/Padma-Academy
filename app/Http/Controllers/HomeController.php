<?php

namespace App\Http\Controllers;
use App\IeltsUser;
use Illuminate\Http\Request;
use App\Contactus;
use App\Team;
use App\Category;
use App\Chapter;
use App\Division;
use App\Content;
use App\StudyAbroad;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $team=Team::orderBy('number','asc')->count();
        $cat=Category::orderBy('category_id','asc')->count();
        $chap=Chapter::orderBy('chapter_id','asc')->count();
        $content=Content::orderBy('id','asc')->count();
        $div=Division::orderBy('class_id','asc')->count();
        $con=Contactus::orderBy('id','asc')->count();
        $studyabroad= StudyAbroad::orderBy('id','asc')->count();
        $ieltsuser= IeltsUser::orderBy('id','asc')->count();
        $data['team']=$team;
        $data['category']=$cat;
        $data['chapter']=$chap;
        $data['content']=$content;
        $data['div']=$div;
        $data['con']=$con;
        $data['studyabroad']=$studyabroad;
        $data['ieltsuser'] = $ieltsuser;
        
        
        
        
        
        $cont=Contactus::orderBy('id','asc')->get();
        $sa= StudyAbroad ::orderBy('id','asc')->get();
        return view('admin/index',$data,compact('cont','sa'));
    }
    public function destroy($id)
    {
        $team= Contactus::where('id',$id)->delete();
        return redirect()->back();
    }
    
    public function destroyque($id)
    {
        $team= StudyAbroad::where('id',$id)->delete();
        return redirect()->back();
    }
    
    
}
