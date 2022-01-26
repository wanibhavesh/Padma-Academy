<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter;
use App\Content;
use App\Division;
use App\Category;
class DisplayContentController extends Controller
{
    public function display($value,$chapter_slug,$subtopic_slug)
    {
        $data['value']=$value;
        $data['chapter_slug']=$chapter_slug;
        $data['subtopic_slug']=$subtopic_slug;
        $find_div= Division::where('class_slug',$value)->first();
        $data['category_code']=$find_div->category_code;
        $find_cat = Category::where('category_code',$data['category_code'])->first();
        $data['category_name']= $find_cat->category_name;
        $chap=Chapter::where('class_slug',$value)->orderBy('chapter_number', 'asc')->get();
        $cont=Content::where('class_slug',$value)->orderBy('subtopic_number', 'asc')->get();
        $post=Content::where('class_slug',$value)->where('chapter_slug',$chapter_slug)->where('subtopic_slug',$subtopic_slug)->value('content');
        $title=Content::where('class_slug',$value)->where('chapter_slug',$chapter_slug)->where('subtopic_slug',$subtopic_slug)->first();
        $data['title']=$title->title;
        $data['keyword']=$title->keyword;
        $data['description']=$title->description;
        $data['publishat']=$title->created_at;
        $data['updatedat']=$title->updated_at;
        return view('main.content',$data,compact('chap','cont','post'));
    }
    public function next($value,$chapter_slug,$subtopic_slug)
    {
        $content = Content::where('class_slug',$value)->orderBy('post_id', 'asc')->get();
        $cont = Content::where('class_slug',$value)->where('chapter_slug',$chapter_slug)->where('subtopic_slug',$subtopic_slug)->first();
        $current_post_id=$cont->post_id;
        $temp=$current_post_id;
        foreach($content as $item)
        {
            if($item->post_id > $current_post_id)
	        {
		        $temp=$item->post_id;
		        break;
            }
        }
        $nextcontent=Content::where('class_slug',$value)->where('post_id',$temp)->first();
        return redirect(url('content/'.$value.'/'.$nextcontent->chapter_slug.'/'.$nextcontent->subtopic_slug));
    }
    public function prev($value,$chapter_slug,$subtopic_slug)
    {
        $content = Content::where('class_slug',$value)->orderBy('post_id', 'desc')->get();
        $cont = Content::where('class_slug',$value)->where('chapter_slug',$chapter_slug)->where('subtopic_slug',$subtopic_slug)->first();
        $current_post_id=$cont->post_id;
        $temp=$current_post_id;
        foreach($content as $item)
        {
            if($item->post_id < $current_post_id)
	        {
		        $temp=$item->post_id;
		        break;
            }
        }
        $nextcontent=Content::where('class_slug',$value)->where('post_id',$temp)->first();
        return redirect(url('content/'.$value.'/'.$nextcontent->chapter_slug.'/'.$nextcontent->subtopic_slug));
    }
}
