<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
	<meta charset="utf-8">
	<meta name="description" content="Padma Academy online screen recorder. For recording google meeting or any online meeting, through pc.">
    <meta name="keywords" content="Padma Academy online screen recorder.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Padma Academy</title>
	<link rel="stylesheet" href="{{asset('PA/css/bootstrap.min.css')}}">
	<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
	<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}"></script>
	<script src="{{asset('PA/js/bootstrap.min.js')}}"></script>
	<script src="{{url('https://use.fontawesome.com/releases/v5.0.8/js/all.js')}}"></script>
	<link href="{{ asset('PA/style.css')}}" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{asset('PA/cards/css/style.css')}}">
  <link href="{{asset('/images/favicon-32x32.png')}}" rel="shortcut icon" type="image/x-icon" />
    <style>
        video {
            width: 760px;
            height: 420px;
            background: #000;
        }
        p#data {
          font-family: Courier New, monospace;
          color:red;
        }
        button{
            padding:5px;
            display: inline-block;
            font-size: 20px;
        }
        .Share-Button {
display:block;background:#25d366;max-width:180px;padding:8px 12px;color:#fff;font-weight:700;font-size:14px;text-align:center;text-transform:uppercase;letter-spacing:0.5px;margin:auto;border-radius:3px;transition:all .3s;
}

    </style>
    <script>
        var user_mic_value = 1.0;
    </script>
</head>
<!-- /Head -->
<body style="background-color: #F5F7FA;">
     @include('main/nav')

    <div class="container-fluid padding" id="courses">
    <div class="row welcome text-center">
        <div class="col-12">
            <br>
            <h1>Online Screen Recorder for PC</h1>
            
        </div>
        <hr style="width:20%;border: none; 
            height: 2px; 
            background: black;">
    </div>
    </div>
<section class="about-area section-gap">
    <div class="container-fluid padding" id="courses">
    <div class="row welcome text-center">
        <div class="col-12">
            <br>
            <a class="Share-Button" href="whatsapp://send?text=https://www.padmaacademy.com/screen-recorder">Share On Whatsapp</i></a><br>
                <video class="img-fluid" autoplay></video>
                <br>
                    <button id="shareScreen" onclick="onShareScreen()">Share Screen</button>
                    <button id="rec" onclick="onBtnRecordClicked()" disabled>Record</button>
                    <button id="stop" onclick="onBtnStopClicked()" disabled>Stop</button>
                    <a id="downloadLink" download="mediarecorder.webm" name="mediarecorder.webm" href></a>
                    <p id="data"></p>
                <button onclick="reload()" class="btn btn-danger">Reload</button>
                <script>
                    function reload() {
                    if (confirm("Once you reload your recording will be gone")) {
                      location.reload();
                    } 
                    }
                </script>
            <h4 style="color:red; margin-top:10px;">Do not close or refresh this page while recording. If you do so, your recording will be deleted. You can minimize this page.</h4>
            <!--<select class="select" id="micvalue" onchange="mymic()" style="margin-top:10px;">-->
            <!--    <option value="1.0">KEEP YOUR MIC ON IN ENTIRE VIDEO</option>-->
            <!--    <option value="0.0">KEEP YOUR MIC OFF IN ENTIRE VIDEO</option>-->
            <!--</select>-->
        </div>
    </div>
    </div>
   <br>
</section>
<div class="text-center">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- blog -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4072734219665716"
     data-ad-slot="2609053916"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>    
</div>


<section class="about-area section-gap">
    <div class="container-fluid padding" id="courses">
    <div class="row welcome text-center">
        <div class="col-12">
            <br>
            <h1>How to use online screen recorder</h1>
        </div>
        <hr style="width:20%;border: none; 
            height: 2px; 
            background: black;">
    </div>
    </div>
    <div class="col-xl-10 col-md-12 mx-auto">
    <div class="card p-3">
<p style="text-align:center"><span style="color:#0000cc"><strong><span style="font-size:24px">Online Screen Recorder for PC</span></strong></span></p>

<p style="text-align:justify"><strong><span style="color:#ff0066"><span style="font-size:20px">Step 1: </span></span><span style="color:#000000"><span style="font-size:20px">Click on Share Screen</span></span></strong></p>

<p style="text-align:center"><strong><span style="color:#ff0066"><span style="font-size:20px"><img alt="Online Screen Recorder User Interface " class="img-fluid" src="https://www.padmaacademy.com/screen_recorder/screen-recorder-1.png" style="height:390px; width:800px" /></span></span></strong></p>

<p style="text-align:justify"><strong><span style="color:#ff0066"><span style="font-size:20px">Step 2: </span></span><span style="color:#000000"><span style="font-size:20px">Click on the </span></span><span style="color:#990000"><span style="font-size:20px">screen</span></span><span style="color:#000000"><span style="font-size:20px"> which you want to record and also click on </span></span><span style="color:#990000"><span style="font-size:20px">share audio</span></span><span style="color:#000000"><span style="font-size:20px">. So that it can capture the audio output of your PC.</span></span></strong></p>

<p style="text-align:center"><strong><span style="color:#ff0066"><span style="font-size:20px"><img alt="screen share option" class="img-fluid" src="https://www.padmaacademy.com/screen_recorder/screen-recorder-2.png" style="height:370px; width:800px" /></span></span></strong></p>

<p style="text-align:justify"><strong><span style="color:#ff0066"><span style="font-size:20px">Step 3: </span></span><span style="color:#000000"><span style="font-size:20px">Give permission to access your microphone. By clicking on </span></span><span style="color:#990000"><span style="font-size:20px">allow button</span></span><span style="color:#000000"><span style="font-size:20px">.</span></span></strong></p>

<p style="text-align:center"><img alt="Allow to access microphone" class="img-fluid" src="https://www.padmaacademy.com/screen_recorder/screen-recorder-3.png" style="height:220px; width:800px" /></p>

<p style="text-align:justify"><strong><span style="color:#ff0066"><span style="font-size:20px">Step 4: </span></span><span style="color:#000000"><span style="font-size:20px">Click on the </span></span><span style="color:#990000"><span style="font-size:20px">hide button</span></span><span style="color:#000000"><span style="font-size:20px">. Do not </span></span><span style="color:#990000"><span style="font-size:20px">click</span></span><span style="color:#000000"><span style="font-size:20px"> on the </span></span><span style="color:#cc0000"><span style="font-size:20px">Stop sharing button</span></span><span style="color:#000000"><span style="font-size:20px">. If you do so your screen will not be recorded.</span></span></strong></p>

<p style="text-align:center"><img alt="Screen sharing notification" class="img-fluid" src="https://www.padmaacademy.com/screen_recorder/screen-recorder-4.png" style="height:80px; width:800px" /></p>

<p style="text-align:justify"><strong><span style="color:#ff0066"><span style="font-size:20px">Step 5: </span></span><span style="font-size:20px"><span style="color:#000000">Click on the </span><span style="color:#990000">Record button. </span><span style="color:#000000">Then, your screen is recording.</span><span style="color:#990000">&nbsp;</span></span></strong></p>

<p style="text-align:center"><img alt="Screen is recording" class="img-fluid" src="https://www.padmaacademy.com/screen_recorder/screen-recorder-5.png" style="height:380px; width:800px" /></p>

<p style="text-align:justify"><span style="color:#000000"><strong><span style="font-size:20px">The screen which is&nbsp;recording is shown in the centre of this web&nbsp;page as shown in the above image.</span></strong></span></p>

<p style="text-align:justify"><strong><span style="color:#ff0066"><span style="font-size:20px">Step 6: </span></span><span style="color:#000000"><span style="font-size:20px">If you want to stop recording click on the stop button.</span></span></strong></p>

<p style="text-align:justify"><strong><span style="color:#ff0066"><span style="font-size:20px">Step 7:</span></span><span style="color:#000000"><span style="font-size:20px"> Download file by clicking on the Download video file option.</span></span></strong></p>

<p style="text-align:center"><img alt="Download recorded video file" class="img-fluid" src="https://www.padmaacademy.com/screen_recorder/screen-recorder-7.png" style="height:380px; width:800px" /></p>

<p style="text-align:center"><span style="color:#ff0000"><strong><span style="font-size:24px">Limitation</span></strong></span></p>

<p style="text-align:justify"><span style="font-size:20px"><span style="color:#000000"><strong>1) Only for laptop or computer not for mobile</strong></span></span></p>

<p style="text-align:justify"><span style="font-size:20px"><span style="color:#000000"><strong>2) Do not close or refresh this page while recording. If you do so, your recording will be deleted. You can minimize this page.</strong></span></span></p>

<p>&nbsp;</p>

    </div>
    </div>
    <br>
    <a class="Share-Button" href="whatsapp://send?text=https://www.padmaacademy.com/screen-recorder">Share On Whatsapp</i></a><br>

    
</section>





@include('main/footer')
</body>

<script>
// var mic_value=1.0;

// function mymic(){
//     mic_value = document.getElementById("micvalue").value
// }

var screenConstraints = { video: true, audio: true };
var micConstraints = { audio: true };

// Some UI elements
var shareBtn = document.querySelector("button#shareScreen");
var recBtn = document.querySelector("button#rec");
var stopBtn = document.querySelector("button#stop");

var videoElement = document.querySelector("video");
var dataElement = document.querySelector("#data");
var downloadLink = document.querySelector("a#downloadLink");

//Hide the UI on the video element
videoElement.controls = false;

var mediaRecorder;
var chunks = [];
var count = 0;
var localStream = null;
var micNumber = 0;

function onShareScreen() {
  if (!navigator.mediaDevices.getDisplayMedia) {
    alert("Not supported on your browser, use the latest version of Chrome on PC");
  } else {
    if (window.MediaRecorder == undefined) {
      alert("MediaRecorder not supported on your browser, use the latest version of Firefox or Chrome");
    } else {
      navigator.mediaDevices.getDisplayMedia(screenConstraints).then(function(screenStream) {
        //check if there's a microphone
        navigator.mediaDevices.enumerateDevices().then(function(devices) {
          devices.forEach(function(device) {
            if (device.kind == "audioinput") {
              micNumber++;
            }
          });

          if (micNumber == 0) {
            //no audio inputs present on device/pc
            onCombinedStreamAvailable(screenStream);
          } else {
            //audio inputs present, let's get access
            navigator.mediaDevices.getUserMedia(micConstraints).then(function(micStream) {

              //create a new stream in which to pack everything together
              var composedStream = new MediaStream();

              //add the screen video stream
              screenStream.getVideoTracks().forEach(function(videoTrack) {
                composedStream.addTrack(videoTrack);
              });

              //if system audio has been shared
              if (screenStream.getAudioTracks().length > 0) {
                //merge the system audio with the mic audio
                var context = new AudioContext();
                var audioDestination = context.createMediaStreamDestination();

                const systemSource = context.createMediaStreamSource(screenStream);
                const systemGain = context.createGain();
                systemGain.gain.value = 1.0;
                systemSource.connect(systemGain).connect(audioDestination);
                console.log("added system audio");

                if (micStream && micStream.getAudioTracks().length > 0) {
                  const micSource = context.createMediaStreamSource(micStream);
                  const micGain = context.createGain();
                  micGain.gain.value = 1.0;
                  micSource.connect(micGain).connect(audioDestination);
                  console.log(" added mic audio");
                }

                audioDestination.stream.getAudioTracks().forEach(function(audioTrack) {
                  composedStream.addTrack(audioTrack);
                });
              } else {
                //add just the mic audio
                micStream.getAudioTracks().forEach(function(micTrack) {
                  composedStream.addTrack(micTrack);
                });
              }

              onCombinedStreamAvailable(composedStream);

            })
              .catch(function(err) {
              log("navigator.getUserMedia error: " + err);
            });
          }
        })
          .catch(function(err) {
          log(err.name + ": " + err.message);
        });
      })
        .catch(function(err) {
        log("navigator.getDisplayMedia error: " + err);
      });
    }
  }
}

function onCombinedStreamAvailable(stream) {
  localStream = stream;
  localStream.getTracks().forEach(function(track) {
    if (track.kind == "audio") {
      track.onended = function(event) {
        log("audio track.onended Audio track.readyState=" + track.readyState + ", track.muted=" + track.muted);
      };
    }
    if (track.kind == "video") {
      track.onended = function(event) {
        log("video track.onended Audio track.readyState=" + track.readyState + ", track.muted=" + track.muted);
      };
    }
  });

  videoElement.srcObject = localStream;
  videoElement.play();
  videoElement.muted = true;
  recBtn.disabled = false;
  shareBtn.disabled = true;

  try {
    window.AudioContext = window.AudioContext || window.webkitAudioContext;
    window.audioContext = new AudioContext();
  } catch (e) {
    log("Web Audio API not supported.");
  }
}

function onBtnRecordClicked() {
  if (localStream == null) {
    alert("Could not get local stream from mic/camera");
  } else {
    recBtn.disabled = true;
    stopBtn.disabled = false;

    /* use the stream */
    log("Start recording...");
    if (typeof MediaRecorder.isTypeSupported == "function") {
      if (MediaRecorder.isTypeSupported("video/webm;codecs=vp8")) {
        var options = { mimeType: "video/webm;codecs=vp8" };
      } else if (MediaRecorder.isTypeSupported("video/webm;codecs=h264")) {
        var options = { mimeType: "video/webm;codecs=h264" };
      } else if (MediaRecorder.isTypeSupported("video/webm;codecs=vp9")) {
        var options = { mimeType: "video/webm;codecs=vp9" };
      }
      log("Using " + options.mimeType);
      mediaRecorder = new MediaRecorder(localStream, options);
    } else {
      log("isTypeSupported is not supported, using default codecs for browser");
      mediaRecorder = new MediaRecorder(localStream);
    }

    mediaRecorder.ondataavailable = function(e) {
      chunks.push(e.data);
    };

    mediaRecorder.onerror = function(e) {
      log("mediaRecorder.onerror: " + e);
    };

    mediaRecorder.onstart = function() {
      log("mediaRecorder.onstart, mediaRecorder.state = " + mediaRecorder.state);

      localStream.getTracks().forEach(function(track) {
        if (track.kind == "audio") {
          log("onstart - Audio track.readyState=" + track.readyState + ", track.muted=" + track.muted);
        }
        if (track.kind == "video") {
          log("onstart - Video track.readyState=" + track.readyState + ", track.muted=" + track.muted);
        }
      });
    };

    mediaRecorder.onstop = function() {
      log("mediaRecorder.onstop, mediaRecorder.state = " + mediaRecorder.state);

      var blob = new Blob(chunks, { type: "video/webm" });
      chunks = [];

      var videoURL = window.URL.createObjectURL(blob);

      downloadLink.href = videoURL;
      videoElement.src = videoURL;
      
      downloadLink.innerHTML = "Download video file";

      var rand = Math.floor(Math.random() * 100);
      var name = "Recorded_video_" + rand + ".webm";

      downloadLink.setAttribute("download", name);
      downloadLink.setAttribute("name", name);
    };

    mediaRecorder.onwarning = function(e) {
      log("mediaRecorder.onwarning: " + e);
    };

    mediaRecorder.start(10);

    localStream.getTracks().forEach(function(track) {
      log(track.kind + ":" + JSON.stringify(track.getSettings()));
      console.log(track.getSettings());
    });
  }
}

function onBtnStopClicked() {
  mediaRecorder.stop();
  videoElement.controls = true;
  recBtn.disabled = false;
  stopBtn.disabled = true;
}


function log(message) {
  console.log(message);
}
</script>
</html>