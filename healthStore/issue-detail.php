<?php
    header("Access-Control-Allow-Origin:*");
    //乱码
    header('Content-type:text/html;charset=utf-8');
    //可以通过$_GET['id']去获取url里的参数
    @$id=$_GET['id']?$_GET['id']:1;

    $ch = curl_init();
    $url = 'http://api.avatardata.cn/Ask/Show?key=e4c193b530314c1b8de3b02f6a8bd74b&id='.$id;
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;
?>