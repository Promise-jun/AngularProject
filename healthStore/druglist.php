<?php
//如果出现乱码，回过头去查看四个方面的内容：1.文件，2.页面，3.请求，4.地址
    header("Access-Control-Allow-Origin:*");
    header('Content-type:text/html;charset=utf-8');

    //可以通过$_GET['id']去获取url里的参数

    @$id = $_GET["id"]?$_GET["id"]:1;
    @$page = $_GET["page"]?$_GET["page"]:1;
    @$rows = $_GET["rows"]?$_GET["rows"]:12;

    $ch = curl_init();
    $url = 'http://api.avatardata.cn/Drug/List?key=44a5adbe691f4cf99bb4851db8a5624d&id='.$id.'&page='.$page.'&rows=' .$rows;

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);
    
    echo $res;
    // //var_dump(json_decode($res)); //var_dump它是一个类似于js里console.table(object)

    // $result =  json_decode($res,true); // json_decode，将对象转换
    // echo json_encode($result); //echo是内容输出,将$result这个对象转化json对象
?>