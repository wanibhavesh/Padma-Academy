<!DOCTYPE html>
<html lang="en">
<head>
  <title>IELTS Writing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    margin-top:10px;
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
  </style>
  
  
  
</head>
<body style="background-color:#dbe5f5;">

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
        }
        if(second > 0 )
        {
            second= second-1;
            document.getElementById("timer").innerHTML = hours + "h "+ minutes + "m " + second + "s ";
        }
  
}, 1000);
</script>

<nav class="navbar" style="background-color:#dbe5f5;">
    
    <div class="flex-fill bd-highlight">ID:- XXXX XXXXXXX - 123456</div>
    <div class="flex-fill bd-highlight" style="color:red;" ><p id="timer"></p></div>
</nav>

<div class="container-fluid" style="margin-top:10px">
    
    
    
    <div id="one" style="display: block">
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow mb-2 rounded-0" style="border:none;">
                <div class="card-body"><b>Cambridge Book 15 Test 1 Academic Writing Part 1.</b> You should spend about 20 minutes on this task. Write at least 150 words.</div>
            </div>
        </div>
    </div>
    
    
<!-- Writing Box 1 -->

  <div class="row">
     <!--left box-->
    <div class="col-sm-6" style="padding-right:0px;">
        <div id="test-text">
        <div class="card leftcardMar rounded-0 p-2 overflow-auto" style="max-height:550px;background-color:#dbe5f5;">
            
          <p>The chart below shows the results of a survey about people's coffee and tea buying and drinking habits in five Australian cities.</p>
          <p>Summarise the information by selecting and reporting the main features, and make comparisons where relevant.</p>
          <img src="https://www.padmaacademy.com/images/ielts-w-1.png" class="img-fluid"></img>
          
         </div>
         </div>
    </div>
    <!--right box-->
    <div class="col-sm-6" style="padding-left:0px;">
        <div class="card rightcardMar p-2 rounded-0  overflow-auto" style="max-height:550px;background-color:#dbe5f5;">
          
            <textarea name="txtScript_1" id="word_count_1" style="height: 520px; resize: none;" data-gramm_editor="false"></textarea>  
            <p>Word Count :- <span id="display_count_1">0</span></p>
        </div>
    </div>
    
  </div>
  </div>
  
  
  
<!-- Writing Box 2 -->   
<div id="two" style="display: none">
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow mb-2 rounded-0" style="border:none;">
                <div class="card-body"><b>Cambridge Book 15 Test 1 Academic Writing Part 2.</b> You should spend about 40 minutes on this task. Write at least 250 words.</div>
            </div>
        </div>
    </div>
  <div class="row">
     <!--left box-->
    <div class="col-sm-6" style="padding-right:0px;">
        <div id="test-text-2">
        <div class="card leftcardMar rounded-0 p-2 overflow-auto" style="max-height:550px;background-color:#dbe5f5;">
            
          <p>In Some countries, owning a home rather than renting one is very important for people.</p>
          <p>Why might this be the case?</p>
          <p>Do you think this is positive or negative situation?</p>
          
          
         </div>
         </div>
    </div>
    <!--right box-->
    <div class="col-sm-6" style="padding-left:0px;">
        <div class="card rightcardMar p-2 rounded-0  overflow-auto" style="max-height:550px;background-color:#dbe5f5;">
          
            <textarea name="txtScript_2" id="word_count_2" style="height: 520px; resize: none;" data-gramm_editor="false"></textarea>  
            <p>Word Count :- <span id="display_count_2">0</span></p>
        </div>
    </div>
    
  </div> </div> 
  
  
  
  
  
  
  
  <!--bottom box-->
  
<div class="d-flex" style="margin-top:20px;">
  <div class="p-2 flex-fill"><ul class="pagination">
                        
                        <li class="page-item"><button class="page-link" type="button" onclick="newOne()">Previous</button></li>
                        <li class="page-item"><button class="page-link" type="button" onclick="newTwo()">Next</button></li>
                      </ul></div>
  <div class="p-2 flex-fill"><button type="button" class="btn btn-danger" >Submit</button></div>
</div>
  
 
</body>
<script>
function newOne() {
document.getElementById("one").style.display="block";
document.getElementById("two").style.display="none";
}
function newTwo() {
document.getElementById("one").style.display="none";
document.getElementById("two").style.display="block";
}
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript">
            //For 1st box
                mouseXPosition = 0;
                $(document).ready(function () {

                    $("#test-text").mousedown(function (e1) {
                        mouseXPosition = e1.pageX;//register the mouse down position
                    });

                    $("#test-text").mouseup(function (e2) {
                        var highlighted = false;
                        var selection = window.getSelection();
                        var selectedText = selection.toString();
                        var startPoint = window.getSelection().getRangeAt(0).startOffset;
                        var endPoint = window.getSelection().getRangeAt(0).endOffset;
                        var anchorTag = selection.anchorNode.parentNode;
                        var focusTag = selection.focusNode.parentNode;
                        if ((e2.pageX - mouseXPosition) < 0) {
                            focusTag = selection.anchorNode.parentNode;
                            anchorTag = selection.focusNode.parentNode;
                        }
                        if (selectedText.length === (endPoint - startPoint)) {
                            highlighted = true;

                            if (anchorTag.className !== "highlight") {
                                highlightSelection();
                            } else {
                                var afterText = selectedText + "<span class = 'highlight'>" + anchorTag.innerHTML.substr(endPoint) + "</span>";
                                anchorTag.innerHTML = anchorTag.innerHTML.substr(0, startPoint);
                                anchorTag.insertAdjacentHTML('afterend', afterText);
                            }

                        }else{
                            if(anchorTag.className !== "highlight" && focusTag.className !== "highlight"){
                                highlightSelection();  
                                highlighted = true;
                            }

                        }


                        if (anchorTag.className === "highlight" && focusTag.className === 'highlight' && !highlighted) {
                            highlighted = true;

                            var afterHtml = anchorTag.innerHTML.substr(startPoint);
                            var outerHtml = selectedText.substr(afterHtml.length, selectedText.length - endPoint - afterHtml.length);
                            var anchorInnerhtml = anchorTag.innerHTML.substr(0, startPoint);
                            var focusInnerHtml = focusTag.innerHTML.substr(endPoint);
                            var focusBeforeHtml = focusTag.innerHTML.substr(0, endPoint);
                            selection.deleteFromDocument();
                            anchorTag.innerHTML = anchorInnerhtml;
                            focusTag.innerHTml = focusInnerHtml;
                            var anchorafterHtml = afterHtml + outerHtml + focusBeforeHtml;
                            anchorTag.insertAdjacentHTML('afterend', anchorafterHtml);


                        }

                        if (anchorTag.className === "highlight" && !highlighted) {
                            highlighted = true;
                            var Innerhtml = anchorTag.innerHTML.substr(0, startPoint);
                            var afterHtml = anchorTag.innerHTML.substr(startPoint);
                            var outerHtml = selectedText.substr(afterHtml.length, selectedText.length);
                            selection.deleteFromDocument();
                            anchorTag.innerHTML = Innerhtml;
                            anchorTag.insertAdjacentHTML('afterend', afterHtml + outerHtml);
                         }

                        if (focusTag.className === 'highlight' && !highlighted) {
                            highlighted = true;
                            var beforeHtml = focusTag.innerHTML.substr(0, endPoint);
                            var outerHtml = selectedText.substr(0, selectedText.length - beforeHtml.length);
                            selection.deleteFromDocument();
                            focusTag.innerHTml = focusTag.innerHTML.substr(endPoint);
                            outerHtml += beforeHtml;
                            focusTag.insertAdjacentHTML('beforebegin', outerHtml );


                        }
                        if (!highlighted) {
                            highlightSelection();
                        }
                        $('.highlight').each(function(){
                            if($(this).html() == ''){
                                $(this).remove();
                            }
                        });
                        selection.removeAllRanges();
                    });
                });

                function highlightSelection() {
                    var selection;

                    //Get the selected stuff
                    if (window.getSelection)
                        selection = window.getSelection();
                    else if (typeof document.selection != "undefined")
                        selection = document.selection;

                    //Get a the selected content, in a range object
                    var range = selection.getRangeAt(0);

                    //If the range spans some text, and inside a tag, set its css class.
                    if (range && !selection.isCollapsed) {
                        if (selection.anchorNode.parentNode == selection.focusNode.parentNode) {
                            var span = document.createElement('span');
                            span.className = 'highlight';
                            span.textContent = selection.toString();
                            selection.deleteFromDocument();
                            range.insertNode(span);
    //                        range.surroundContents(span);
                        }
                    }
                }

            </script>
            
            <script type="text/javascript">
            //For 2st box
                mouseXPosition = 0;
                $(document).ready(function () {

                    $("#test-text-2").mousedown(function (e1) {
                        mouseXPosition = e1.pageX;//register the mouse down position
                    });

                    $("#test-text-2").mouseup(function (e2) {
                        var highlighted = false;
                        var selection = window.getSelection();
                        var selectedText = selection.toString();
                        var startPoint = window.getSelection().getRangeAt(0).startOffset;
                        var endPoint = window.getSelection().getRangeAt(0).endOffset;
                        var anchorTag = selection.anchorNode.parentNode;
                        var focusTag = selection.focusNode.parentNode;
                        if ((e2.pageX - mouseXPosition) < 0) {
                            focusTag = selection.anchorNode.parentNode;
                            anchorTag = selection.focusNode.parentNode;
                        }
                        if (selectedText.length === (endPoint - startPoint)) {
                            highlighted = true;

                            if (anchorTag.className !== "highlight") {
                                highlightSelection();
                            } else {
                                var afterText = selectedText + "<span class = 'highlight'>" + anchorTag.innerHTML.substr(endPoint) + "</span>";
                                anchorTag.innerHTML = anchorTag.innerHTML.substr(0, startPoint);
                                anchorTag.insertAdjacentHTML('afterend', afterText);
                            }

                        }else{
                            if(anchorTag.className !== "highlight" && focusTag.className !== "highlight"){
                                highlightSelection();  
                                highlighted = true;
                            }

                        }


                        if (anchorTag.className === "highlight" && focusTag.className === 'highlight' && !highlighted) {
                            highlighted = true;

                            var afterHtml = anchorTag.innerHTML.substr(startPoint);
                            var outerHtml = selectedText.substr(afterHtml.length, selectedText.length - endPoint - afterHtml.length);
                            var anchorInnerhtml = anchorTag.innerHTML.substr(0, startPoint);
                            var focusInnerHtml = focusTag.innerHTML.substr(endPoint);
                            var focusBeforeHtml = focusTag.innerHTML.substr(0, endPoint);
                            selection.deleteFromDocument();
                            anchorTag.innerHTML = anchorInnerhtml;
                            focusTag.innerHTml = focusInnerHtml;
                            var anchorafterHtml = afterHtml + outerHtml + focusBeforeHtml;
                            anchorTag.insertAdjacentHTML('afterend', anchorafterHtml);


                        }

                        if (anchorTag.className === "highlight" && !highlighted) {
                            highlighted = true;
                            var Innerhtml = anchorTag.innerHTML.substr(0, startPoint);
                            var afterHtml = anchorTag.innerHTML.substr(startPoint);
                            var outerHtml = selectedText.substr(afterHtml.length, selectedText.length);
                            selection.deleteFromDocument();
                            anchorTag.innerHTML = Innerhtml;
                            anchorTag.insertAdjacentHTML('afterend', afterHtml + outerHtml);
                         }

                        if (focusTag.className === 'highlight' && !highlighted) {
                            highlighted = true;
                            var beforeHtml = focusTag.innerHTML.substr(0, endPoint);
                            var outerHtml = selectedText.substr(0, selectedText.length - beforeHtml.length);
                            selection.deleteFromDocument();
                            focusTag.innerHTml = focusTag.innerHTML.substr(endPoint);
                            outerHtml += beforeHtml;
                            focusTag.insertAdjacentHTML('beforebegin', outerHtml );


                        }
                        if (!highlighted) {
                            highlightSelection();
                        }
                        $('.highlight').each(function(){
                            if($(this).html() == ''){
                                $(this).remove();
                            }
                        });
                        selection.removeAllRanges();
                    });
                });

                function highlightSelection() {
                    var selection;

                    //Get the selected stuff
                    if (window.getSelection)
                        selection = window.getSelection();
                    else if (typeof document.selection != "undefined")
                        selection = document.selection;

                    //Get a the selected content, in a range object
                    var range = selection.getRangeAt(0);

                    //If the range spans some text, and inside a tag, set its css class.
                    if (range && !selection.isCollapsed) {
                        if (selection.anchorNode.parentNode == selection.focusNode.parentNode) {
                            var span = document.createElement('span');
                            span.className = 'highlight';
                            span.textContent = selection.toString();
                            selection.deleteFromDocument();
                            range.insertNode(span);
    //                        range.surroundContents(span);
                        }
                    }
                }

            </script>
            
            <script>
      $(document).ready(function() {
        $("#word_count_1").on('keyup', function() {
            var words = 0;

            if ((this.value.match(/\S+/g)) != null) {
            words = this.value.match(/\S+/g).length;
            }
            $('#display_count_1').text(words);
  });
}); 
  </script>
  <script>
      $(document).ready(function() {
        $("#word_count_2").on('keyup', function() {
            var words = 0;

            if ((this.value.match(/\S+/g)) != null) {
            words = this.value.match(/\S+/g).length;
            }
            $('#display_count_2').text(words);
  });
}); 
  </script>
</html>
