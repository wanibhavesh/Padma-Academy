<?php 
// Define file upload path 
$upload_dir = '/home/padmaiyp/public_html/editor/ckeditor/uploads/'; 
 
if(isset($_FILES['upload']) && strlen($_FILES['upload']['name']) > 1) { 
 
    $f_name = $_FILE['upload']['name'];
    $path = "/home/padmaiyp/public_html/editor/ckeditor/uploads/".$_FILE['upload']['name'];
    // Get filename without extension 
    $sepext = explode('.', strtolower($_FILES['upload']['name'])); 
    $type = end($sepext);    /** gets extension **/ 
    
    if(file_exists($path))
    {
        $f_name = $sepext[0].rand(1,1000).'.'.end($sepext);
    }
     
    $uploadpath = $upload_dir . $f_name; 
 
   
    
        if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadpath)) { 
            $CKEditorFuncNum = $_GET['CKEditorFuncNum']; 
            $url = 'https://padmaacademy.com/editor/ckeditor/uploads/'.$f_name; 
            $msg = $f_name. ' successfully uploaded: \\n- Size: '. number_format($_FILES['upload']['size']/1024, 2, '.', '') .' KB'; 
            $re = $type ? "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>":'<script>var cke_ob = window.parent.CKEDITOR; for(var ckid in cke_ob.instances) { if(cke_ob.instances[ckid].focusManager.hasFocus) break;} cke_ob.instances[ckid].insertHtml(\' \', \'unfiltered_html\'); alert("'. $msg .'"); var dialog = cke_ob.dialog.getCurrent();dialog.hide();</script>'; 
        }else{ 
            $re = '<script>alert("Unable to upload the file")</script>'; 
        } 
    
} 
 
// Render HTML output 
@header('Content-type: text/html; charset=utf-8'); 
echo $re;