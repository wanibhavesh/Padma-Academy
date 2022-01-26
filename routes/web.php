<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Category;
use App\Chapter;
use App\Contactus;
use App\Content;
use App\Division;
use App\IeltsUser;
use App\RegisterIeltsTest;
use App\StudyAbroad;
use App\StudyAbroadPost;
use App\Team;
use App\Useressay;
use App\Writingque;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('allblogposts', function () {
    return view('blogs.allposts');
});



Route::get('screen-recorder', function () {
    return view('screen_recorder');
});




Route::get('aboutus', function () {
    return view('main.about');
});

Route::get('r_e_g_i_s_t_e_r_f_o_r_a_d_m_i_n_p_a_n_e_l_2_7_3_2', function () {
    return view('auth.register');
});

Route::get('contactus','WelcomeController@contact');

Route::post('contact','WelcomeController@contactwrite')->name('contactus');


Route::get('studyabroad','WelcomeController@studyabroad');

Route::post('abroad','WelcomeController@studyabroadwrite')->name('studyabroad');


Route::get('studyabroadblogs','WelcomeController@studyabroadblogs');


Route::get('/','WelcomeController@index');


Route::get('choose/{code}','WelcomeController@fetchcode'); 


Route::get('allblogs/{slug}','WelcomeController@getblogs'); 

Route::get('blogs/{category}/{slug}','WelcomeController@displayblogs');





Route::get('fetch/{value}','WelcomeController@fetch');
Route::get('content/{value}/{chapter_slug}/{subtopic_slug}','DisplayContentController@display');


Route::get('next/{value}/{chapter_slug}/{subtopic_slug}','DisplayContentController@next');
Route::get('prev/{value}/{chapter_slug}/{subtopic_slug}','DisplayContentController@prev');


Route::get('team','Admin\TeamController@display');
Route::get('team-info/{id}','Admin\TeamController@info');


Route::get('studyabroadpost/{slug}','WelcomeController@studyabroadpost');


    
Route::get('/ieltslogin','IeltsController@indexlogin');
Route::post('ieltslogincheck','IeltsController@login')->name('ieltslogin');


Route::get('/ieltsregister', 'IeltsController@index'); 

Route::post('ieltsreg','IeltsController@userregister')->name('ieltsregister');    

Route::get('/ieltsotp/{email}','IeltsController@otpverification');

Route::post('ieltsotpcheck','IeltsController@otpcheck')->name('ieltsotp');


Route::get('/ieltsconfirm', function () {
    return view('ielts.ieltsconfirm');
});


Route::get('/ieltswriting/{testname}', 'IeltsController@writingtest');

Route::post('/postieltswriting', 'IeltsController@postieltswriting');


Route::get('/ieltsreading', function () {
    return view('ielts.ieltsreading');
});


Route::get('/ieltslistening/cambridge-15-test-1-listening', function () {
    return view('ielts.listening.cambridge-15-test-1-listening');
});


Route::post('/ieltslistening/post-cambridge-15-test-1-listening','IeltsListeningController@cambridge15test1listening');












Route::get('/ieltshighlighter', function () {
    return view('ielts.ieltshighlighter');
});

Route::get('/allieltswritingtest', function () {
    return view('/allieltswriting');
});

Route::get('/ieltsdashboard','IeltsController@dashboard');

Route::get('/readieltswriting/{slug}','IeltsController@getreadieltswriting');

Route::get('ieltslogout', function ()
{
    Session()->flush();
    return Redirect::to('/ieltslogin');
})->name('ieltslogout');    

Route::get('/ieltsspeaking', function () {
    return view('ielts.ieltsspeaking');
});


Route::get('mysitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to('aboutus'), date("Y-m-d h:i:s"), '1.0', 'daily');
    
    $sitemap->add(URL::to('contactus'), date("Y-m-d h:i:s"), '1.0', 'daily');
    
    $sitemap->add(URL::to('studyabroad'), date("Y-m-d h:i:s"), '1.0', 'daily');
    
    $sitemap->add(URL::to('studyabroadblogs'), date("Y-m-d h:i:s"), '1.0', 'daily');
    
    $choose = Category::all();
    
    foreach ($choose as $ch)
    {
        $sitemap->add(URL::to("choose/".$ch->category_code), $ch->updated_at, '1.0', 'monthly');
    }
   

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'sitemap');
    // this will generate file mysitemap.xml to your public folder
    
    return redirect(url('sitemap.xml'));

});





Auth::routes();

Route::group(['middleware'=>['preventbackbutton','auth']],function(){
Route::get('admin/index', 'HomeController@index');
Route::resource('admin/news','Admin\MarqController');
Route::resource('admin/category','Admin\CategoryController');
Route::resource('admin/class','Admin\DivisionController');
Route::resource('admin/chapter','Admin\ChapterController');

Route::get('admin/content/{value}','Admin\ContentController@index');
Route::post('admin/content','Admin\ContentController@store');
Route::resource('admin/selector','Admin\SelectorController');
Route::get('admin/editclass/{id}','Admin\EditClassController@update');
Route::post('admin/updateclass/{id}','Admin\EditClassController@store')->name('updateclass.store');

Route::get('admin/editchapter/{id}','Admin\EditClassController@display');
Route::post('admin/updatechapter/{id}','Admin\EditClassController@write')->name('updatechapter.write');

Route::get('admin/tablecontent','Admin\EditClassController@table')->name('tablecontent');
Route::delete('admin/deletecontent/{id}','Admin\EditClassController@destroy')->name('content.destroy');

Route::get('admin/editcontent/{id}','Admin\EditClassController@mycontent');
Route::post('admin/updatecontent/{id}','Admin\EditClassController@updatecontent')->name('updatecontent');

Route::get('admin/team','Admin\TeamController@index');

Route::post('admin/upload','Admin\TeamController@update')->name('teamupdate');
Route::delete('admin/delteam/{id}','Admin\TeamController@destroy')->name('team.destroy');
Route::delete('admin/msgteam/{id}','HomeController@destroy')->name('msg.destroy');

Route::delete('admin/que/{id}','HomeController@destroyque')->name('que.destroy');


Route::resource('admin/studyabroadcontent','Admin\StudyAbroadController');
Route::post('admin/updatestudyabroadcontent','Admin\StudyAbroadController@store')->name('updatestudyabroadcontent');
Route::get('admin/tablecontentstudyabroad','Admin\StudyAbroadController@table')->name('studyabroadtablecontent');

Route::get('admin/studyabroadeditcontent/{id}','Admin\StudyAbroadController@mycontent');

Route::post('admin/studyabroadupdatecontent/{id}','Admin\StudyAbroadController@updatecontent')->name('studyabroadupdatecontent');

Route::delete('admin/studyabroaddeletecontent/{id}','Admin\StudyAbroadController@destroy')->name('studyabroadcontent.destroy');

Route::get('admin/ielts-users','Admin\IeltsController@getIeltsuser');

Route::get('admin/addieltswriting','Admin\IeltsController@getIeltswrite');
Route::post('admin/postieltswrite','Admin\IeltsController@postIeltswrite')->name('postieltswrite');


Route::get('admin/updateieltsquewrite/{id}','Admin\IeltsController@updateieltsquewrite');

Route::post('admin/postupdatedieltsquewrite/{id}','Admin\IeltsController@postupdatedieltsquewrite');

Route::delete('admin/ieltswritingque/{id}','Admin\IeltsController@ieltswritingquedestroy')->name('ieltswritingque.destroy');

Route::get('admin/tableieltswriting','Admin\IeltsController@getquewrtingtable');

Route::get('admin/table-ans-ielts-writing','Admin\IeltsController@getwrtingtable');

Route::delete('admin/ieltsuser/{id}','Admin\IeltsController@userdestroy')->name('user.destroy');

Route::delete('admin/ieltsuserans/{id}','Admin\IeltsController@useransdestroy')->name('userans.destroy');

Route::get('admin/essayevaluate/{id}','Admin\IeltsController@getessayevaluated');

Route::post('admin/postessayband','Admin\IeltsController@postessayevaluated')->name('postbandessay');


Route::get('admin/registerieltstest','Admin\IeltsController@getregisterieltstest');

Route::post('admin/postregisterieltstest','Admin\IeltsController@postregisterieltstest');

Route::delete('admin/registeredieltstest/{id}','Admin\IeltsController@registerieltstestdestroy')->name('registerieltstest.destroy');


Route::get('admin/addieltslistening','Admin\IeltsController@getaddieltslistening');
Route::post('admin/postaddieltslistening','Admin\IeltsController@postaddieltslistening')->name('ieltslisteninganswer.store');
Route::get('admin/updateieltslisteningans/{id}','Admin\IeltsController@getupdateieltslisteningans');
Route::post('admin/postupdateaddieltslistening','Admin\IeltsController@postupdateaddieltslistening')->name('ieltslisteninganswer.update');
Route::delete('admin/deleteieltslisteninganswer/{id}','Admin\IeltsController@ieltslisteninganswerdestroy')->name('ieltslisteninganswer.destroy');


Route::get('admin/blogcategory','Admin\BlogsController@index')->name('blogscategory.index');
Route::post('admin/postblogcategory','Admin\BlogsController@postcategory')->name('blogscategory.store');
Route::delete('admin/deleteblogscategory/{id}','Admin\BlogsController@categorydestroy')->name('blogscategory.destroy');
Route::get('admin/selectblogcategory','Admin\BlogsController@selectblogcategory');
Route::post('admin/postselectblogcategory','Admin\BlogsController@postselectblogcategory')->name('selectblogscategory');

Route::get('admin/writeblog/{value}','Admin\BlogsController@getwriteblog');
Route::post('admin/postwriteblog','Admin\BlogsController@postwriteblog');

Route::get('admin/tableblogs','Admin\BlogsController@tableblogs');
Route::delete('admin/deleteblogs/{id}','Admin\BlogsController@blogsdestroy')->name('blogs.destroy');

Route::get('admin/editblog/{id}','Admin\BlogsController@geteditblog');
Route::post('admin/posteditblog/{id}','Admin\BlogsController@posteditblog')->name('updateblog');



});
