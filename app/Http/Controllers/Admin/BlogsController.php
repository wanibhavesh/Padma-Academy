<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BlogCategory;
use App\Blogs;
class BlogsController extends Controller
{
    public function index()
    {
        $cat = BlogCategory::all()->toArray();
        return view('admin.blogs.category',compact('cat'));
    }
    public function postcategory(Request $request)
    {
        $category = new BlogCategory;
        $category->name = $request->name;
        
        $category->slug= preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->name)));;
        $category->save();
        return redirect(route('blogscategory.index'));
    }
    public function categorydestroy($id)
    {
        $cat= BlogCategory::where('id',$id)->delete();
        return redirect()->back();
    }
    
    public function selectblogcategory()
    {
        $cat = BlogCategory::all()->toArray();
        return view('admin.blogs.selector',compact('cat'));
    }
    
    public function postselectblogcategory(Request $request)
    {
        $main_slug= $request->category;
        return redirect(url('admin/writeblog',$main_slug));
    }
    
    public function getwriteblog($value)
    {
        $data['pass']=$value;
        return view('admin.blogs.content',$data);
    }
    
    public function postwriteblog(Request $request)
    {
        $post = new Blogs;
        $post-> category_slug = $request->cat;
        $post-> title = $request->title;
        $post-> keyword = $request->keyword;
        $post-> description = $request->description;
        $post-> content = $request->editor1;
        $post-> writtenby="Admin";
        $post-> slug = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->title)));
        $post->save();
        return redirect(url('admin/tableblogs'));
        
    }
    public function tableblogs()
    {
        $blogs = Blogs::all()->toArray();
        return view('admin.blogs.editcontent',compact('blogs'));
    }
    
    
    public function blogsdestroy($id)
    {
        $cat= Blogs::where('id',$id)->delete();
        return redirect()->back();
    }
    
    public function geteditblog($id)
    {
        $cont = Blogs::where('id',$id)->first();
        return view('admin.blogs.updatecontent',compact('cont'));
    }
    public function posteditblog(Request $request)
    {
        $post = Blogs::where('id',$request->id)->first();
        $post-> title = $request->title;
        $post-> keyword = $request->keyword;
        $post-> description = $request->description;
        $post-> content = $request->editor1;
        $post-> writtenby="Admin";
        $post-> slug = preg_replace('/[^a-z0-9]+/i','-',trim(strtolower($request->title)));
        $post->save();
        return redirect(url('admin/tableblogs'));
    }
    
}
