<?php
if(isset($_GET['id'])){
    $id = $_GET["id"];
    //获取所有数据，转换为数组
    $data = file_get_contents("music.json");
    $dataArr = json_decode($data,true);
    // print_r($dataArr);
    foreach ($dataArr as $key => $value) {
        if($id == $value['id']){
            array_splice($dataArr,$key,1);
            break;
        }
    }
    //将数组的数据重新写入到文件：将已经删除了的某条数据的数组重新写入到文件
    file_put_contents("music.json",json_encode($dataArr));
    //实现页面的跳转
    echo "<script>location.href='list.php';</script>";
}
?>