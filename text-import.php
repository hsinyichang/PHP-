<?php
/****
 * 1.建立資料庫及資料表
 * 2.建立上傳檔案機制
 * 3.取得檔案資源
 * 4.取得檔案內容
 * 5.建立SQL語法
 * 6.寫入資料庫
 * 7.結束檔案
 */
include_once "base.php";
//2022/0623/14:22講解
if(isset($_FILES['file']) && $_FILES['file']['error']==0){
    echo $_FILES['file']['tmp_name'];
    $file=fopen($_FILES['file']['tmp_name'],'r');
    fgets($file);
    while(!feof($file)){
        $str=fgets($file);
        $col=explode(',',$str);
        dd($col);
        exit();
    }
   
    //$sql="insert into `upload` (`name`,`type`,`collections`) values('{$name}','{$type}','{$_POST['collections']}')";
    //$pdo->exec($sql);

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文字檔案匯入</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="header">文字檔案匯入練習</h1>
<!---建立檔案上傳機制--->
<form id="uploadForm" action="?" method="post" enctype="multipart/form-data">
    <div>
        選擇檔案:<input type="file" name="file">
    </div>

    <input type="submit" value="上傳">
</form>


<!----讀出匯入完成的資料----->



</body>
</html>