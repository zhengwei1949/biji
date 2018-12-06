<?php
//php基础知识点 - 函数 和Js区别
//php的函数不存在作用域链
//global的作用可以让局部作用域可以访问外部全局变量 不推荐（写出来的代码不够清晰）
//在php当中函数是不能重复声明的
//代码是要给人看的，顺便给机器去执行
//$_SERVER,$_GET,$_POST,$_FILES,$_SESSION,$_COOKIE
//1. 这些东西都是php内置的关联数组
// print_r($_SERVER);//$_SERVER['PHP_SELF']可以打印当前文件的名字 $_SERVER['REQUEST_METHOD']可以打印当前使用的请求方法到底是get还是post
// print_r($_GET);//可以获取地址栏后面的?后面的参数，变成一个关联数组
$a = 100;
function fn(){
    //声明一下我在局部作用域要用全局变量
    // global $a;
    // echo $a;
    echo $GLOBALS['a'];//有点类似js中window.a --> window['a']
}
// function fn(){

// }
fn();

//================================================================
// 圆的面积
$r = 100;//半径是100
// $pi = 3.14159; //pi值永远不会变 变量：可以变的量
define('PI',3.14159,true);
echo 2 * pi * $r * $r;
//PHP_INT_MAX 内置常量 代表的php中最大的整数
echo '<hr>';
var_dump(PHP_INT_MAX);
// 1. include,require,include_once,require_once这四个作用类似less中的@import 
// 2. include,require永远不会用（重复引入）
// 3. 如果必不可少就用require_once,可有可无就用include_once 

// 笔记本 内存 鼠标 


//================================================================
// 内置函数
// 字符串
echo strlen('abwefwefwefwfe');
echo '<hr>';
//时间函数
//js中的时间戳单位是毫秒(13) php中的时间戳单位是秒(10)
echo time();//时间戳
echo '<hr>';
echo date('Y-m-d H:i:s');//分隔符
// strtotime('+1 day')

//================================================================
// 文件操作 处理文件
// 写入文件 读取文件 追加文件
// file_get_contents(读取文件的名字) --> 返回值是字符串
// file_put_contents 把内容写入到文件当中

// $str = file_get_contents('./a.js');
// var_dump($str);

// file_put_contents('./a.js','var a = 1');//文件写入（会覆盖）
// file_put_contents('./a.js','var b = 2',FILE_APPEND);//（追加）

//================================================================
echo '<hr>';
$str = "a|b|c|d";
$arr = explode("|",$str);
print_r($arr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
    //作用域链
    var a = 100;
    function fn(){
        //二个作用域 全局 局部
        window.a = 200;//这个代码不好，不够清晰
        console.log(a);
    }
    // fn();
    // console.log(a);
    // function fn(){
    //     console.log(1)
    // }
    // function fn(){
    //     console.log(2)
    // }
    // fn();
    // var str = "a|b|c|d";
    // console.log(str.split("|"))
    </script>
</body>
</html>