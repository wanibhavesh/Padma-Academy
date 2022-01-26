<?php

namespace App\Http\Controllers\Admin;
use App\IeltsUser;
use App\Writingque;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Useressay;
use App\RegisterIeltsTest;
use App\ListeningAns;
class IeltsController extends Controller
{
    public function getIeltsuser()
    {
        $user = IeltsUser::all()->toArray();
        return view('admin.ielts.ieltsuser',compact('user'));
    }
    public function getIeltswrite()
    {
        return view('admin.ielts.ieltsaddques');
    }
    
    public function postIeltswrite(Request $request)
    {
        $post = new Writingque;
        $post->slug=$request->slug;
        $post->que1=$request->editor1;
        $post->que2=$request->editor2;
        $post->save();
        return redirect()->back();
    }
    public function getwrtingtable()
    {
        $essay = Useressay::all()->toArray();
        return view('admin.ielts.ieltstableanswrite',compact('essay'));
    }
    
    public function userdestroy($id)
    {
        $ielts= IeltsUser::where('id',$id)->delete();
        return redirect()->back();
    }
    
    public function useransdestroy($id)
    {
        $ielts= Useressay::where('id',$id)->delete();
        return redirect()->back();
    }
    
    public function getquewrtingtable()
    {
        $table = Writingque::all()->toArray();
        return view('admin.ielts.ieltstablequeswrite',compact('table'));
    }
    
    public function updateieltsquewrite($id)
    {
        $table = Writingque::where('id',$id)->first();
        return view('admin.ielts.editieltstablequeswrite',compact('table'));
    }
    
    public function postupdatedieltsquewrite(Request $request,$id)
    {
        $updated = Writingque::where('id',$id)->first();
        $updated->slug= $request->slug;
        $updated->que1= $request->editor1;
        $updated->que2= $request->editor2;
        $updated->save();
        return redirect("http://padmaacademy.com/admin/tableieltswriting");
    }
    
    public function ieltswritingquedestroy($id)
    {
        $ielts= Writingque::where('id',$id)->delete();
        return redirect()->back();
    }
    
    public function getessayevaluated($id)
    {
        $ielts= Useressay::where('id',$id)->first();
        return view('admin.ielts.essayband',compact('ielts'));
    }

    public function postessayevaluated(Request $request)
    {
        $post = Useressay::where('id',$request->id)->first();
        $post->band = $request->band;
        $post->publish= $request->publish;
        $post->save();
        return redirect("https://www.padmaacademy.com/admin/table-ans-ielts-writing");
    }    
    
    public function getregisterieltstest()
    {
        $tab = RegisterIeltsTest::all()->toArray();;
        return view('admin.ielts.registertest',compact('tab'));
    }
    
    public function postregisterieltstest(Request $request)
    {
        $post = new RegisterIeltsTest;
        
        $check = RegisterIeltsTest::where('slug',$request->slug)->first();
        if(!$check)
        {
            $post->name = $request->name;
            $post->slug=$request->slug;
            $post->keywords=$request->keyword;
            $post->description=$request->description;
            $post->save();
            return redirect()->back();
        }
        return redirect()->back();
    }
    
    public function registerieltstestdestroy($id)
    {
        $registed_test = RegisterIeltsTest::where('id',$id)->delete();
        return redirect()->back();
    }
    
    public function getaddieltslistening()
    {
        $fetch = ListeningAns::all()->toArray();
        return view('admin.ielts.addlisteningque',compact('fetch'));
    }
    
    public function postaddieltslistening(Request $request)
    {
        $db = new ListeningAns;
        $db->slug = $request->slug;
        
        $db->que1 = $request->que1;
        $db->que2 = $request->que2;
        $db->que3 = $request->que3;
        $db->que4 = $request->que4;
        $db->que5 = $request->que5;
        $db->que6 = $request->que6;
        $db->que7 = $request->que7;
        $db->que8 = $request->que8;
        $db->que9 = $request->que9;
        $db->que10 = $request->que10;
        
        $db->que11 = $request->que11;
        $db->que12 = $request->que12;
        $db->que13 = $request->que13;
        $db->que14 = $request->que14;
        $db->que15 = $request->que15;
        $db->que16 = $request->que16;
        $db->que17 = $request->que17;
        $db->que18 = $request->que18;
        $db->que19 = $request->que19;
        $db->que20 = $request->que20;
        
        $db->que21 = $request->que21;
        $db->que22 = $request->que22;
        $db->que23 = $request->que23;
        $db->que24 = $request->que24;
        $db->que25 = $request->que25;
        $db->que26 = $request->que26;
        $db->que27 = $request->que27;
        $db->que28 = $request->que28;
        $db->que29 = $request->que29;
        $db->que30 = $request->que30;
        
        $db->que31 = $request->que31;
        $db->que32 = $request->que32;
        $db->que33 = $request->que33;
        $db->que34 = $request->que34;
        $db->que35 = $request->que35;
        $db->que36 = $request->que36;
        $db->que37 = $request->que37;
        $db->que38 = $request->que38;
        $db->que39 = $request->que39;
        $db->que40 = $request->que40;
        $db->save();
        return redirect()->back();
        
    }
    
    public function getupdateieltslisteningans($id)
    {
        $listen= ListeningAns::where('id',$id)->first();
        return view('admin.ielts.updateieltslisteningans',compact('listen'));
    }
    
    public function postupdateaddieltslistening(Request $request)
    {
        $db = ListeningAns::where('id',$request->id)->first();
        $db->slug = $request->slug;
        
        $db->que1 = $request->que1;
        $db->que2 = $request->que2;
        $db->que3 = $request->que3;
        $db->que4 = $request->que4;
        $db->que5 = $request->que5;
        $db->que6 = $request->que6;
        $db->que7 = $request->que7;
        $db->que8 = $request->que8;
        $db->que9 = $request->que9;
        $db->que10 = $request->que10;
        
        $db->que11 = $request->que11;
        $db->que12 = $request->que12;
        $db->que13 = $request->que13;
        $db->que14 = $request->que14;
        $db->que15 = $request->que15;
        $db->que16 = $request->que16;
        $db->que17 = $request->que17;
        $db->que18 = $request->que18;
        $db->que19 = $request->que19;
        $db->que20 = $request->que20;
        
        $db->que21 = $request->que21;
        $db->que22 = $request->que22;
        $db->que23 = $request->que23;
        $db->que24 = $request->que24;
        $db->que25 = $request->que25;
        $db->que26 = $request->que26;
        $db->que27 = $request->que27;
        $db->que28 = $request->que28;
        $db->que29 = $request->que29;
        $db->que30 = $request->que30;
        
        $db->que31 = $request->que31;
        $db->que32 = $request->que32;
        $db->que33 = $request->que33;
        $db->que34 = $request->que34;
        $db->que35 = $request->que35;
        $db->que36 = $request->que36;
        $db->que37 = $request->que37;
        $db->que38 = $request->que38;
        $db->que39 = $request->que39;
        $db->que40 = $request->que40;
        $db->save();
        return redirect("https://www.padmaacademy.com/admin/addieltslistening");
        
    }
    
    public function ieltslisteninganswerdestroy($id)
    {
        $del = ListeningAns::where('id',$id)->delete();
        return redirect()->back();
    }
}
