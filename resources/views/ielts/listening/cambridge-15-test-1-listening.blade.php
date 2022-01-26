<!DOCTYPE html>
<html lang="en">
<head>
  <title>IELTS Listening</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{asset('/images/favicon-32x32.png')}}" rel="shortcut icon" type="image/x-icon" />
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  @media only screen and (max-width: 600px) {
  .leftcardMar{
    margin-right:15px;
  }
  .rightcardMar{
    margin-left:15px;
  }
 }
  
                .highlight
                {
                    background-color: yellow;
                }
                #test-text::-moz-selection { /* Code for Firefox */

                    background: yellow;
                }

                #test-text::selection {

                    background: yellow;
                }
                #test-text-2::-moz-selection { /* Code for Firefox */

                    background: yellow;
                }

                #test-text-2::selection {

                    background: yellow;
                }
            input {
                text-align: center;
                margin:5px;
            }
  </style>


</head>
<body style="background-color:#dbe5f5;">
    
    @if(!(Session::get('mail')))
            @php
                header("Location: " . URL::to('/'));
                exit();
            @endphp;
    @endif

<script>

var hours = 0;
var minutes = 59;
var second = 60;
// Update the count down every 1 second
var x = setInterval(function() {
        if(second==0 && minutes !=0)
        {
            second=60;
            minutes=minutes-1;
        }
        if (second == 0 && minutes ==0) {
            document.getElementById("timer").innerHTML = "EXPIRED";
            dataEntry();
        }
        if(second > 0 )
        {
            second= second-1;
            document.getElementById("timer").innerHTML = hours + "h "+ minutes + "m " + second + "s ";
        }
  
}, 1000);
</script>

 
  
<audio id="audio_clip" autoplay>
  <source id="audio_1" src="https://www.padmaacademy.com/audio/c15/1/cambridge-15-test-1.mp3" autobuffer>
</audio>
<div class="text-center"><button class="btn btn-danger" onclick="document.getElementById('audio_clip').play()">If audio is not playing click here</button></div>
 



<nav class="navbar" style="background-color:#dbe5f5;">
    
    <div class="flex-fill bd-highlight">ID:- XXXX XXXXXXX - 123456</div>
    <div class="flex-fill bd-highlight" style="color:red;" ><p id="timer"></p></div>
</nav>

<div class="container-fluid" style="margin-top:10px">
        <div class="row">
        <div class="col-sm-12">
            <div class="card shadow mb-2 rounded-0" style="border:none;">
                <div class="card-body" style="color:red;padding:5px;"><b>Cambridge Book Test Academic Reading || Note here we have given 60 minutes for this test but the Actual test ends as an audio ends. So, better to complete answers along with the audio. In Actual test, you can use the paper but while practising try to avoid it.  </b> </div>
            </div>
        </div>
    </div>
    
<!-- Section 1 -->  
<div id="one" style="display: block">

  <div class="row">
     <!--left box-->
    <div class="col-sm-12">
        <!--<div id="test-text">-->
        <div class="card leftcardMar rightcardMar rounded-0 p-2 overflow-auto" style="max-height:550px;background-color:#dbe5f5;">
            
            <h5>Part 1 Question 1-10</h5>
            <h6>Complete the notes below</h6>
            <h6>Write ONE WORD AND/OR A NUMBER for each answer.</h6>
            
            <h5>Bankside Recruitment Agency</h5>
            
            <ul>
                <li>
                    Address of agency: 497 Eastside, Docklands
                </li>
                <li>
                    Name of agent: Becky <input type="text" name="one" id="qone" placeholder="1">
                </li>
                <li>
                    Phone number: 07866 510333
                </li>
                <li>
                    Best to call her in the <input type="text" name="two" id="qtwo" placeholder="2">
                </li>
                
            </ul>
            <h5>Typical jobs</h5>
            <ul>
                <li>Clerical and admin roles, mainly in the finance industry</li>
                <li>Must have good <input type="text" name="three" id="qthree" placeholder="3"> skills </li>
                <li>Jobs are usually for at least one <input type="text" name="four" id="qfour" placeholder="4"></li>
                <li>Pay is usually £ <input type="text" name="five" id="qfive" placeholder="5"> per hour</li>
            </ul>
            <h5>Registration process</h5>
            <ul>
                <li>Wear a <input type="text" name="six" id="qsix" placeholder="6"> to the interview</li>
                <li>Must bring your <input type="text" name="seven" id="qseven" placeholder="7"> to the interview</li>
                <li>They will ask questions about each applicant's <input type="text" name="eight" id="qeight" placeholder="8"></li>
            </ul>
            <h5>Advantages of using an agency</h5>
            <ul>
                <li>The <input type="text" name="nine" id="qnine" placeholder="9"> you receive at interview will benefit you</li>
                <li>Will get access to vacancies which are not advertised</li>
                <li>Less <input type="text" name="ten" id="qten" placeholder="10"> is involved in applying for jobs</li>
            </ul>
          
          
         </div>
         <!--</div>-->
    </div>
  </div>
    <!--bottom box-->
<div class="d-flex" style="margin-top:20px;">
  <div class="p-2 flex-fill">
                <ul class="pagination pagination-responsive">
                        
                        <li class="page-item"><button class="page-link" type="button" onclick="newOne()">Previous</button></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qone">1</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwo">2</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qthree">3</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qfour">4</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qfive">5</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qsix">6</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qseven">7</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qeight">8</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qnine">9</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qten">10</a></li>
                        <li class="page-item"><button class="page-link" type="button" onclick="newTwo()">Next</button></li>
                      </ul></div>
  <div class="p-2 flex-fill"><button type="button" onclick="dataEntry()" class="btn btn-danger" >Submit</button></div>

</div>

 </div> 
 
 
<!-- Section 2 --> 
<div id="two" style="display: none">

  <div class="row">
     <!--left box-->
    <div class="col-sm-12">
        <!--<div id="test-text-2">-->
        <div class="card leftcardMar rightcardMar rounded-0 p-2 overflow-auto" style="max-height:550px;background-color:#dbe5f5;">
            
            <h5>Part 2 Question 11-20</h5>
            <h6>Questions 11-14</h6>
            
            <h6>Choose the correct letter, A, B or C.</h6>
            
            <h5>Matthews Island Holidays</h5>
            
            <h5 id="qeleven"> 11 According to the speaker, the company</h5>
                <ul class="choices" style="list-style-type: none;">
                    <li><label><input type="radio" name="eleven" id="optionA11" value="A"><span>A has been in business for longer than most of its competitors.</span></label></li>
                    <li><label><input type="radio" name="eleven" id="optionB11" value="B"><span>B arranges holidays to more destinations than its competitors.</span></label></li>
                    <li><label><input type="radio" name="eleven" id="optionC11" value="C"><span>C has more customers than its competitors.</span></label></li>
                </ul>
           <h5 id="qtwelve">12 Where can customers meet the tour manager before travelling to the Isle of Man?</h5>
                <ul class="choices" style="list-style-type: none;">
                    <li><label><input type="radio" name="twelve" id="optionA12" value="A"><span>A Liverpool</span></label></li>
                    <li><label><input type="radio" name="twelve" id="optionB12" value="B"><span>B Heysham </span></label></li>
                    <li><label><input type="radio" name="twelve" id="optionC12" value="C"><span>C Luton </span></label></li>
                </ul>
            <h5 id="qthirteen" >13 How many lunches are included in the price of the holiday?</h5>
                <ul class="choices" style="list-style-type: none;">
                    <li><label><input type="radio" name="thirteen" id="optionA13" value="A"><span>A three</span></label></li>
                    <li><label><input type="radio" name="thirteen" id="optionB13" value="B"><span>B four</span></label></li>
                    <li><label><input type="radio" name="thirteen" id="optionC13" value="C"><span>C five</span></label></li>
                </ul>
            <h5 id="qfourteen">14 Customers have to pay extra for</h5>
                <ul class="choices" style="list-style-type: none;">
                    <li><label><input type="radio" name="fourteen" id="optionA14" value="A"><span>A guaranteeing themselves a larger room.</span></label></li>
                    <li><label><input type="radio" name="fourteen" id="optionB14" value="B"><span>B booking at short notice.</span></label></li>
                    <li><label><input type="radio" name="fourteen" id="optionC14" value="C"><span>C transferring to another date.fourteen></label></li>
                </ul>
            <h5>Part 2 Question 11-20</h5>
            <h5>Questions 11-14</h5>
            
            <h5>Choose the correct letter, A, B or C.</h5>
            
<table border=1 cellspacing="0" class="text-center">

<tr> 
 <th colspan="6"> Timetable for Isle of Man holiday </th>
</tr>

<tr>
  <th>  </th>
 <th> Activity </th>
 <th> Notes </th>
</tr>

<tr>
 <td> Day 1 </td>
 <td> Arrive </td>
 <td>Introduction by manager <br> Hotel dining room has view of the <input type="text" name="fifteen" id="qfifteen" placeholder="15">  </td>

</tr>

<tr>
 <td> Day 2 </td>
 <td> Tynwald Exhibition and Peel </td>
 <td> Tynwald may have been founded in <input type="text" name="sixteen" id="qsixteen" placeholder="16"> not 979</td>

</tr>

<tr>
 <td> Day 3 </td>
 <td> Trip to Snaefell </td>
 <td> Travel along promenade in a tram; train to Laxey; train to the <input type="text" name="seventeen" id="qseventeen" placeholder="17"> of Snaefell </td>

</tr>



<tr>
 <td> Day 4 </td>
 <td> Free day </td>
 <td> Company provides a <input type="text" name="eighteen" id="qeighteen" placeholder="18"> for local transport and heritage sites. </td>
 
</tr>

<tr>
 <td> Day 5 </td>
 <td> Take the <input type="text" name="nineteen" id="qnineteen" placeholder="19"> railway train from Douglas to Port Erin </td>
  <td> Free time, then coach to Castletown - former <input type="text" name="twenty" id="qtwenty" placeholder="20"> has old castle. </td>
</tr>

<tr>
 <td> Day 6 </td>
 <td> Leave </td>
 <td> Leave the island by ferry or plane</td>
 </tr>
</table>
        
         </div>
         <!--</div>-->
    </div>
  </div> 
      <!--bottom box-->
<div class="d-flex" style="margin-top:20px;">
  <div class="p-2 flex-fill">
                <ul class="pagination pagination-responsive">
                        
                        <li class="page-item"><button class="page-link" type="button" onclick="newOne()">Previous</button></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qeleven">11</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwelve">12</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qthirteen">13</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qfourteen">14</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qfifteen">15</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qsixteen">16</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qseventeen">17</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qeighteen">18</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qnineteen">19</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwenty">20</a></li>
                        <li class="page-item"><button class="page-link" type="button" onclick="newThree()">Next</button></li>
                      </ul></div>
  <div class="p-2 flex-fill"><button type="button" onclick="dataEntry()" class="btn btn-danger" >Submit</button></div>

</div>

 </div> 




 
<!-- Section 3 --> 
<div id="three" style="display: none">

  <div class="row">
     <!--left box-->
    <div class="col-sm-12">
        <!--<div id="test-text-2">-->
        <div class="card leftcardMar rightcardMar rounded-0 p-2 overflow-auto" style="max-height:550px;background-color:#dbe5f5;">
            
            <h5>Part 3 Questions 21–30 <br> Questions 21–26</h5>
            
            <h5>What did findings of previous research claim about the personality traits a child is likely to have because of their position in the family?
            <br>
            Choose SIX answers from the box and write the correct letter, A-H, next to Questions 21-26.
            </h5>
            <style>
            .center {
                margin: auto;
                width: 40%;
                border: 2px solid #000000;
                padding: 10px;
            }
            </style>
            <div class="center">
                <h5 class="text-center">
                    Personality Traits</h5><h5>
                    A outgoing <br>
                    B selfish  <br>
                    C independent  <br>
                    D attention-seeking  <br>
                    E introverted  <br>
                    F co-operative  <br>
                    G caring  <br>
                    H competitive <br>
                </h5>
            </div>
            
            <h5>Position in family</h5> 
            <h5>the eldest child
            <select name="twentyone" id="qtwentyone">
                <option value="NULL">21</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
            </select>
            </h5>  

            <h5>a middle child
            <select name="twentytwo" id="qtwentytwo" placeholder="22">
                <option value="NULL">22</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
            </select>
            </h5>  

            <h5>the youngest child 
            <select name="twentythree" id="qtwentythree">
                <option value="NULL">23</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
            </select>
            </h5>  

            <h5>a twin 
            <select name="twentyfour" id="qtwentyfour">
                <option value="NULL">24</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
            </select>
            </h5> 
            
            <h5>an only child 
            <select name="twentyfive" id="qtwentyfive">
                <option value="NULL">25</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
            </select>
            </h5>
            
            <h5>a child with much older siblings
            <select name="twentysix" id="qtwentysix">
                <option value="NULL">26</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
            </select>
            </h5> 
<br>
<br>

<h5>Questions 27 and 28 <br> Choose the correct letter, A, B or C.  </h5>
             
             
             <h5 id="qtwentyseven">27 What do the speakers say about the evidence relating to birth order and academic success? </h5>
                <ul class="choices" style="list-style-type: none;">
                    <li><label><input type="radio" name="twentyseven" id="optionA27" value="A"><span>A There is conflicting evidence about whether oldest children perform best in intelligence tests.</span></label></li>
                    <li><label><input type="radio" name="twentyseven" id="optionB27" value="B"><span>B There is little doubt that birth order has less influence on academic achievement than socio-economic status. </span></label></li>
                    <li><label><input type="radio" name="twentyseven" id="optionC27" value="C"><span>C Some studies have neglected to include important factors such as family size. </span></label></li>
                </ul>
            
            <h5 id="qtwentyeight">28 What does Ruth think is surprising about the difference in oldest children's academic performance?</h5>
                <ul class="choices" style="list-style-type: none;">
                    <li><label><input type="radio" name="twentyeight" id="optionA28" value="A"><span>A It is mainly thanks to their roles as teachers for their younger siblings. </span></label></li>
                    <li><label><input type="radio" name="twentyeight" id="optionB28" value="B"><span>B The advantages they have only lead to a slightly higher level of achievement. </span></label></li>
                    <li><label><input type="radio" name="twentyeight" id="optionC28" value="C"><span>C The extra parental attention they receive at a young age makes little difference.eightan></label></li>
                </ul>    

<h5>Questions 29 and 30 <br> Choose TWO letters, A-E.  </h5>

            <h5 id="qtwentynine">Which TWO experiences of sibling rivalry do the speakers agree has been valuable for them?</h5>
            <div>
            <input type="checkbox" name="twentynine" id="optionA29" value="A"> <label>A learning to share</label>
            </div>
            <div>
            <input type="checkbox" name="twentynine" id="optionB29" value="B"> <label>B learning to stand up for oneself </label>
            </div>

            <div>
            <input type="checkbox" name="twentynine" id="optionC29" value="C"> <label>C learning to be a good loser</label>
            </div>
            <div>
            <input type="checkbox" name="twentynine" id="optionD29" value="D"> <label>D learning to be tolerant </label>
            </div>

            <div>
            <input type="checkbox" name="twentynine" id="optionE29" value="E"> <label>E learning to say sorry </label>
            </div>
            

            
         </div>
         <!--</div>-->
    </div>
  </div> 
<script>  
$('input[type=checkbox]').on('change', function (e) {
    if ($('input[type=checkbox]:checked').length > 2) {
        $(this).prop('checked', false);
    }
});
</script>
      <!--bottom box-->
<div class="d-flex" style="margin-top:20px;">
  <div class="p-2 flex-fill">
                <ul class="pagination pagination-responsive">
                        
                        <li class="page-item"><button class="page-link" type="button" onclick="newTwo()">Previous</button></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwentyone">21</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwentytwo">22</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwentythree">23</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwentyfour">24</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwentyfive">25</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwentysix">26</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwentyseven">27</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwentyeight">28</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwentynine">29</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qtwentynine">30</a></li>
                        <li class="page-item"><button class="page-link" type="button" onclick="newFour()">Next</button></li>
                      </ul></div>
  <div class="p-2 flex-fill"><button type="button" onclick="dataEntry()" class="btn btn-danger" >Submit</button></div>

</div>

 </div> 
 
 <!-- Section 4 -->
<div id="four" style="display: none">

  <div class="row">
     <!--left box-->
    <div class="col-sm-12">
        <!--<div id="test-text-2">-->
        <div class="card leftcardMar rightcardMar rounded-0 p-2 overflow-auto" style="max-height:550px;background-color:#dbe5f5;">
            
            <h5>PART 4 Questions 31-40</h5>
            <h6>Complete the notes below.</h6>
            <h6>Write ONE WORD ONLY for each answer.</h6>
            
            <h5>The Eucalyptus Tree in Australia </h5>
            <h5>Importance </h5>
            <ul>
                <li>
                    it provides <input type="text" name="thirtyone" id="qthirtyone" placeholder="31"> and food for a wide range of species
                </li>
                <li>
                    its leaves provide <input type="text" name="thirtytwo" id="qthirtytwo" placeholder="32"> which is used to make a disinfectant
                </li>
            </ul>
            <h5>Reasons for present decline in number <br>A) Diseases </h5>
            <ol>
                <li>'Mundulla Yellows'
                    <ul>
                        <li> Cause – lime used for making <input type="text" name="thirtythree" id="qthirtythree" placeholder="33"> was absorbed <br>- trees were unable to take in necessary iron through their roots </li>
                    </ul>
                </li>
                <li>'Bell-miner Associated Die-back' <ul><li>Cause - <input type="text" name="thirtyfour" id="qthirtyfour" placeholder="34"> feed on eucalyptus leaves <br> - they secrete a substance containing sugar <br> - bell-miner birds are attracted by this and keep away other species</li></ul> </li>
            </ol>
            <h5>B) Bushfires <br> William Jackson's theory:</h5>
            <ul>
                <li>high-frequency bushfires have impact on vegetation, resulting in the growth of <input type="text" name="thirtyfive" id="qthirtyfive" placeholder="35"></li>
                <li>mid-frequency bushfires result in the growth of eucalyptus forests, because they: <br> - make more <input type="text" name="thirtysix" id="qthirtysix" placeholder="36"> available to the trees <br> - maintain the quality of the <input type="text" name="thirtyseven" id="qthirtyseven" placeholder="37">   </li>
                <li>low-frequency bushfires result in the growth of <input type="text" name="thirtyeight" id="qthirtyeight" placeholder="38"> rainforest, which is: <br> - a <input type="text" name="thirtynine" id="qthirtynine" placeholder="39"> ecosystem <br> - an ideal environment for the <input type="text" name="fourty" id="qfourty" placeholder="40"> of the bell-miner
</li>
            </ul>
          
          
         </div>
         <!--</div>-->
    </div>
  </div>
    <!--bottom box-->
<div class="d-flex" style="margin-top:20px;">
  <div class="p-2 flex-fill">
                <ul class="pagination pagination-responsive">
                        
                        <li class="page-item"><button class="page-link" type="button" onclick="newThree()">Previous</button></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qthirtyone">31</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qthirtytwo">32</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qthirtythree">33</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qthirtyfour">34</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qthirtyfive">35</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qthirtysix">36</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qthirtyseven">37</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qthirtyeight">38</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qthirtynine">39</a></li>
                        <li class="page-item"><a class="page-link" type="button" href="#qfourty">40</a></li>
                        <li class="page-item"><button class="page-link" type="button" onclick="newFour()">Next</button></li>
                      </ul></div>
  <div class="p-2 flex-fill"><button type="button" onclick="dataEntry()" class="btn btn-danger" >Submit</button></div>

</div>

 </div>  
 <div class="text-center" style="margin-bottom:20px;">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4072734219665716"
     crossorigin="anonymous"></script>
<!-- writing -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4072734219665716"
     data-ad-slot="8461243446"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</body>
<script>
function newOne() {
document.getElementById("one").style.display="block";
document.getElementById("two").style.display="none";
document.getElementById("three").style.display="none";
document.getElementById("four").style.display="none";
}
function newTwo() {
document.getElementById("one").style.display="none";
document.getElementById("two").style.display="block";
document.getElementById("three").style.display="none";
document.getElementById("four").style.display="none";
}
function newThree() {
document.getElementById("one").style.display="none";
document.getElementById("two").style.display="none";
document.getElementById("three").style.display="block";
document.getElementById("four").style.display="none";
}
function newFour() {
document.getElementById("one").style.display="none";
document.getElementById("two").style.display="none";
document.getElementById("three").style.display="none";
document.getElementById("four").style.display="block";
}
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            
  <script>
      var flag = 0;
      function dataEntry(){
        $(document).ready(function () {
            
            var que1 = $("#qone").val();
            var que2 = $("#qtwo").val();
            var que3 = $("#qthree").val();
            var que4 = $("#qfour").val();
            var que5 = $("#qfive").val();
            var que6 = $("#qsix").val();
            var que7 = $("#qseven").val();
            var que8 = $("#qeight").val();
            var que9 = $("#qnine").val();
            var que10 = $("#qten").val();
            
            
            if(document.getElementById('optionA11').checked == true) {   
                    var que11= 'A';   
            } 
            else if(document.getElementById('optionB11').checked == true) {  
                    var que11= 'B';   
            }  
            else if(document.getElementById('optionC11').checked == true) {  
                    var que11= 'C';   
            }
            else{
                var que11= null;
            }
            
            
            if(document.getElementById('optionA12').checked == true) {   
                    var que12= 'A';   
            } 
            else if(document.getElementById('optionB12').checked == true) {  
                    var que12= 'B';   
            }  
            else if(document.getElementById('optionC12').checked == true) {  
                    var que12= 'C';   
            }
            else{
                var que12= null;
            }
            
            
            if(document.getElementById('optionA13').checked == true) {   
                    var que13= 'A';   
            } 
            else if(document.getElementById('optionB13').checked == true) {  
                    var que13= 'B';   
            }  
            else if(document.getElementById('optionC13').checked == true) {  
                    var que13= 'C';   
            }
            else{
                var que13= null;
            }
            
            if(document.getElementById('optionA14').checked == true) {   
                    var que14= 'A';   
            } 
            else if(document.getElementById('optionB14').checked == true) {  
                    var que14= 'B';   
            }  
            else if(document.getElementById('optionC14').checked == true) {  
                    var que14= 'C';   
            }
            else{
                var que14= null;
            }
            
            var que15 = $("#qfifteen").val();
            var que16 = $("#qsixteen").val();
            var que17 = $("#qseventeen").val();
            var que18 = $("#qeighteen").val();
            var que19 = $("#qnineteen").val();
            var que20 = $("#qtwenty").val();
            
            var que21 = $("#qtwentyone").val();
            if(que21=="NULL")
            {
                que21 = null;
            }
            var que22 = $("#qtwentytwo").val();
            if(que22=="NULL")
            {
                que22 = null;
            }
            var que23 = $("#qtwentythree").val();
            if(que23=="NULL")
            {
                que23 = null;
            }
            var que24 = $("#qtwentyfour").val();
            if(que24=="NULL")
            {
                que24 = null;
            }
            var que25 = $("#qtwentyfive").val();
            if(que25=="NULL")
            {
                que25 = null;
            }
            var que26 = $("#qtwentysix").val();
            if(que26=="NULL")
            {
                que26 = null;
            }
            
            if(document.getElementById('optionA27').checked == true) {   
                    var que27= 'A';   
            } 
            else if(document.getElementById('optionB27').checked == true) {  
                    var que27= 'B';   
            }  
            else if(document.getElementById('optionC27').checked == true) {  
                    var que27= 'C';   
            }
            else{
                var que27= null;
            }
            
            if(document.getElementById('optionA28').checked == true) {   
                    var que28= 'A';   
            } 
            else if(document.getElementById('optionB28').checked == true) {  
                    var que28= 'B';   
            }  
            else if(document.getElementById('optionC28').checked == true) {  
                    var que28= 'C';   
            }
            else{
                var que28= null;
            }
            
            var option29A ="";
            var option29B ="";
            var option29C ="";
            var option29D ="";
            var option29E ="";
            
            var optionarray=[];
            var flag=0;
           
            if(document.getElementById('optionA29').checked == true) {   
                    optionarray.push('A');
                    flag=1;
            } 
            if(document.getElementById('optionB29').checked == true) {  
                    optionarray.push('B');
                    flag=1;
            }  
            if(document.getElementById('optionC29').checked == true) {  
                    optionarray.push('C');
                    flag=1;
            }
            if(document.getElementById('optionD29').checked == true) {  
                    optionarray.push('D');
                    flag=1;
            }
            if(document.getElementById('optionE29').checked == true) {  
                    optionarray.push('E');
                    flag=1;
            }
            
            if(optionarray.length!=0)
            {
                que29 = optionarray[0];
                var que30 = optionarray[1];
            }
            else{
                que29 = null;
            }
            
            var que31 = $("#qthirtyone").val();
            var que32 = $("#qthirtytwo").val();
            var que33 = $("#qthirtythree").val();
            var que34 = $("#qthirtyfour").val();
            var que35 = $("#qthirtyfive").val();
            var que36 = $("#qthirtysix").val();
            var que37 = $("#qthirtyseven").val();
            var que38 = $("#qthirtyeight").val();
            var que39 = $("#qthirtynine").val();
            var que40 = $("#qfourty").val();
            
            
            var user = "{{ Session::get('mail') }}";
            var slug ="cambridge-15-test-1-listening";
            
                    $.ajax({
                       type:'POST',
                       url:"/ieltslistening/post-cambridge-15-test-1-listening",
                       data:{"_token": "{{ csrf_token() }}", "slug":slug, "user":user, "que1":que1, "que2":que2, "que3":que3, "que4":que4, "que5":que5, "que6":que6, "que7":que7, "que8":que8, "que9":que9, "que10":que10,  "que11":que11, "que12":que12, "que13":que13, "que14":que14, "que15":que15, "que16":que16, "que17":que17, "que18":que18, "que19":que19, "que20":que20,  "que21":que21, "que22":que22, "que23":que23, "que24":que24, "que25":que25, "que26":que26, "que27":que27, "que28":que28, "que29":que29, "que30":que30, "que31":que31, "que32":que32, "que33":que33, "que34":que34, "que35":que35, "que36":que36, "que37":que37, "que38":que38, "que39":que39, "que40":que40 },
                       success: function(response){ 
                            location.replace("https://www.padmaacademy.com/ieltsdashboard")
                       }
                    });
        });
       
    
      }
  </script>
</html>