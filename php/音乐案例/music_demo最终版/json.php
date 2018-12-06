<?php
//1. 读取json文件
//file_get_contents函数得到的数据是字符串 --> json是一种特殊的字符串
$data = file_get_contents('music.json');
$arr = json_decode($data,true);
print_r($arr);
?>