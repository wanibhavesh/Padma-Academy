<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IeltsUser;
use Session;
use App\Writingque;
use App\Useressay;
use App\RegisterIeltsTest;
use App\ListeningAns;
use App\ListenUser;

class IeltsListeningController extends Controller
{
    public function cambridge15test1listening(Request $request)
    {
        $fetch_ans = ListeningAns::where('slug',$request->slug)->first();
        $db = new ListenUser;
        $db->user = $request->user;
        $db->slug = $request->slug;
        $total=0;
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
        
        if(strcasecmp($fetch_ans->que1,$db->que1)==0)
        {
            $db->ans1=1;
            $total++;
        }
        else{
            $db->ans1=0;
        }
        if(strcasecmp($fetch_ans->que2,$db->que2)==0)
        {
            $db->ans2=1;
            $total++;
        }
        else{
            $db->ans2=0;
        }
        if(strcasecmp($fetch_ans->que3,$db->que3)==0)
        {
            $db->ans3=1;
            $total++;
        }
        else{
            $db->ans3=0;
        }
        if(strcasecmp($fetch_ans->que4,$db->que4)==0)
        {
            $db->ans4=1;
            $total++;
        }
        else{
            $db->ans4=0;
        }
        
        $ans5 = explode("/",$fetch_ans->que5);
        
        if(strcasecmp($ans5[0],$db->que5)==0 || strcasecmp($ans5[1],$db->que5)==0)
        {
            $db->ans5=1;
            $total++;
        }
        else{
            $db->ans5=0;
        }
        if(strcasecmp($fetch_ans->que6,$db->que6)==0)
        {
            $db->ans6=1;
            $total++;
        }
        else{
            $db->ans6=0;
        }
        if(strcasecmp($fetch_ans->que7,$db->que7)==0)
        {
            $db->ans7=1;
            $total++;
        }
        else{
            $db->ans7=0;
        }
        if(strcasecmp($fetch_ans->que8,$db->que8)==0)
        {
            $db->ans8=1;
            $total++;
        }
        else{
            $db->ans8=0;
        }
        if(strcasecmp($fetch_ans->que9,$db->que9)==0)
        {
            $db->ans9=1;
            $total++;
        }
        else{
            $db->ans9=0;
        }
        if(strcasecmp($fetch_ans->que10,$db->que10)==0)
        {
            $db->ans10=1;
            $total++;
        }
        else{
            $db->ans10=0;
        }
        
        
        
        
        
        if(strcasecmp($fetch_ans->que11,$db->que11)==0)
        {
            $db->ans11=1;
            $total++;
        }
        else{
            $db->ans11=0;
        }
        if(strcasecmp($fetch_ans->que12,$db->que12)==0)
        {
            $db->ans12=1;
            $total++;
        }
        else{
            $db->ans12=0;
        }
        if(strcasecmp($fetch_ans->que13,$db->que13)==0)
        {
            $db->ans13=1;
            $total++;
        }
        else{
            $db->ans13=0;
        }
        if(strcasecmp($fetch_ans->que14,$db->que14)==0)
        {
            $db->ans14=1;
            $total++;
        }
        else{
            $db->ans14=0;
        }
        if(strcasecmp($fetch_ans->que15,$db->que15)==0)
        {
            $db->ans15=1;
            $total++;
        }
        else{
            $db->ans15=0;
        }
        if(strcasecmp($fetch_ans->que16,$db->que16)==0)
        {
            $db->ans16=1;
            $total++;
        }
        else{
            $db->ans16=0;
        }
        if(strcasecmp($fetch_ans->que17,$db->que17)==0)
        {
            $db->ans17=1;
            $total++;
        }
        else{
            $db->ans17=0;
        }
        if(strcasecmp($fetch_ans->que18,$db->que18)==0)
        {
            $db->ans18=1;
            $total++;
        }
        else{
            $db->ans18=0;
        }
        if(strcasecmp($fetch_ans->que19,$db->que19)==0)
        {
            $db->ans19=1;
            $total++;
        }
        else{
            $db->ans19=0;
        }
        if(strcasecmp($fetch_ans->que20,$db->que20)==0)
        {
            $db->ans20=1;
            $total++;
        }
        else{
            $db->ans20=0;
        }
        
        
        
        
        if(strcasecmp($fetch_ans->que21,$db->que21)==0)
        {
            $db->ans21=1;
            $total++;
        }
        else{
            $db->ans21=0;
        }
        if(strcasecmp($fetch_ans->que22,$db->que22)==0)
        {
            $db->ans22=1;
            $total++;
        }
        else{
            $db->ans22=0;
        }
        if(strcasecmp($fetch_ans->que23,$db->que23)==0)
        {
            $db->ans23=1;
            $total++;
        }
        else{
            $db->ans23=0;
        }
        if(strcasecmp($fetch_ans->que24,$db->que24)==0)
        {
            $db->ans24=1;
            $total++;
        }
        else{
            $db->ans24=0;
        }
        if(strcasecmp($fetch_ans->que25,$db->que25)==0)
        {
            $db->ans25=1;
            $total++;
        }
        else{
            $db->ans25=0;
        }
        if(strcasecmp($fetch_ans->que26,$db->que26)==0)
        {
            $db->ans26=1;
            $total++;
        }
        else{
            $db->ans26=0;
        }
        if(strcasecmp($fetch_ans->que27,$db->que27)==0)
        {
            $db->ans27=1;
            $total++;
        }
        else{
            $db->ans27=0;
        }
        if(strcasecmp($fetch_ans->que28,$db->que28)==0)
        {
            $db->ans28=1;
            $total++;
        }
        else{
            $db->ans28=0;
        }
        if(strcasecmp($fetch_ans->que29,$db->que29)==0)
        {
            $db->ans29=1;
            $total++;
        }
        else{
            $db->ans29=0;
        }
        if(strcasecmp($fetch_ans->que30,$db->que30)==0)
        {
            $db->ans30=1;
            $total++;
        }
        else{
            $db->ans30=0;
        }
        
        
        if(strcasecmp($fetch_ans->que31,$db->que31)==0)
        {
            $db->ans31=1;
            $total++;
        }
        else{
            $db->ans31=0;
        }
        if(strcasecmp($fetch_ans->que32,$db->que32)==0)
        {
            $db->ans32=1;
            $total++;
        }
        else{
            $db->ans32=0;
        }
        if(strcasecmp($fetch_ans->que33,$db->que33)==0)
        {
            $db->ans33=1;
            $total++;
        }
        else{
            $db->ans33=0;
        }
        if(strcasecmp($fetch_ans->que34,$db->que34)==0)
        {
            $db->ans34=1;
            $total++;
        }
        else{
            $db->ans34=0;
        }
        $ans35 = explode("/",$fetch_ans->que35);
        
        if(strcasecmp($ans35[0],$db->que35)==0 || strcasecmp($ans35[1],$db->que35)==0)
        {
            $db->ans35=1;
            $total++;
        }
        else{
            $db->ans35=0;
        }
        if(strcasecmp($fetch_ans->que36,$db->que36)==0)
        {
            $db->ans36=1;
            $total++;
        }
        else{
            $db->ans36=0;
        }
        if(strcasecmp($fetch_ans->que37,$db->que37)==0)
        {
            $db->ans37=1;
            $total++;
        }
        else{
            $db->ans37=0;
        }
        if(strcasecmp($fetch_ans->que38,$db->que38)==0)
        {
            $db->ans38=1;
            $total++;
        }
        else{
            $db->ans38=0;
        }
        if(strcasecmp($fetch_ans->que39,$db->que39)==0)
        {
            $db->ans39=1;
            $total++;
        }
        else{
            $db->ans39=0;
        }
        $ans40 = explode("/",$fetch_ans->que40);
        
        if(strcasecmp($ans40[0],$db->que40)==0 || strcasecmp($ans40[1],$db->que40)==0)
        {
            $db->ans40=1;
            $total++;
        }
        else{
            $db->ans40=0;
        }
        
        if($total == 40 || $total == 39)
        {
            $db->band=9;
        }
        else if($total == 38 || $total == 37)
        {
            $db->band=8.5;
        }
        else if($total == 36 || $total == 35)
        {
            $db->band=8;
        }
        else if($total == 34 || $total == 33)
        {
            $db->band=7.5;
        }
        else if(($total <= 32) && ($total >= 30))
        {
            $db->band=7;
        }
        else if(($total <= 29) && ($total >= 27))
        {
            $db->band=6.5;
        }
        else if(($total <= 26) && ($total >= 23))
        {
            $db->band=6;
        }
        else if(($total <= 22) && ($total >= 19))
        {
            $db->band=5.5;
        }
        else if(($total <= 18) && ($total >= 15))
        {
            $db->band=5;
        }
        else if(($total <= 14) && ($total >= 13))
        {
            $db->band=4.5;
        }
        else if(($total <= 12) && ($total >= 10))
        {
            $db->band=4;
        }
        else if(($total <= 9) && ($total >= 8))
        {
            $db->band=3.5;
        }
        else if(($total <= 7) && ($total >= 6))
        {
            $db->band=3;
        }
        else if(($total <= 5) && ($total >= 4))
        {
            $db->band=2.5;
        }
        else{
            $db->band="-";
        }
        
        $db->total = $total;
        
        
        $db->save();
        return redirect('/ieltsdashboard');
    }
}
