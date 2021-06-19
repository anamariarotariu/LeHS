<?php 

    $code=$_GET['code'];
   
    if ($code=="")
    { header('Location:http://localhost/lehs/login.php');
     exit;
    }
    $CLIENT_ID="0d14309be059b9ea254d";
    $CLIENT_SECRET="254ae4633e60f19217e40d9357864688f9c1e5c9";
    $URL="https://github.com/login/oauth/access_token";

    $postParams=[
        'client_id'=>$CLIENT_ID,
        'client_secret'=>$CLIENT_SECRET,
        'code'=>$code];

    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL, $URL);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$postParams);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_HTTPHEADER,array('Accept:application/json'));
    $response=curl_exec($ch);
    curl_close($ch);
    var_dump($response);
    $data=json_decode($response,true);
    

    if($data['access_token']!=""){
        session_start();
        $_SESSION['accessToken']=$data['access_token'];
        header('Location:http://localhost/lehs/firstpage.php');
        exit;
    }
 

?>




