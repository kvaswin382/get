<?php

if(isset($_REQUEST['url'])){
    
    $url = urldecode($_REQUEST['url']);
    $ch = curl_init();
    curl_setopt_array($ch,[
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
     	CURLOPT_ENCODING => "",
    	CURLOPT_MAXREDIRS => 10,
    	CURLOPT_TIMEOUT => 30
    ]);
    $out = curl_exec($ch);
    if($out == true){
        $arr = array('ok' => true);
    }else if($out == ''){
        $arr = array('ok' => false);
    }else{
        $arr = array('ok' => true);
    }
    
    echo json_encode($arr);
}
