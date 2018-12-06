<?php 
//js中的字符串拼接和php区别
    echo 100+"200"; //300 
    echo '<br>';
    echo "100"."200";
    echo '<hr>';

//=============================================================

    //双引号和单引号的区别
    //单引号里面的变量不解析的
    //双引号里面的变量是解析的
    //双引号里面的变量为了防止解析错误要加一个{}
    //双引号里面可以转义，\n 换行的（后面用得上）
    $a = 'jack';
    echo 'aaa$aawfewf';
    echo '<br>';
    // echo "aaa$aawfewf";
    echo "aaa{$a}awfewf";
    echo '<hr>';
    //数组
    //js当中：遍历 for 方法：push,pop,shift,unshift,indexOf,lastIndexOf,reverse,concat,slice,splice,.... 

//=============================================================

    //索引数组 --> 和js中的数组是一样的
    //两种写法
    //旧的写法
    // $arr = array(1,2,4,3);
    //新的写法
    $arr = [1,2,4,3];
    //遍历
    for($i=0;$i<count($arr);$i++){
        echo $arr[$i].'<br>';
    }


//=============================================================
    //关联数组:类似js中对象
    //旧的写法
    // $arr = array('name'=>'jack','age'=>20);
    //新的写法
    $arr = [
        'name'=>'jack',
        'age'=>20
    ];
    //html标签有一个标签 pre标签：保持换行符
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>'
    print_r($arr);
    //遍历
    //标准写法
    foreach($arr as $key=>$value){
        echo $value;
    }
    //简写方式
    foreach($arr as $value){
        
    }
    echo '<hr>';
//=============================================================
    //本质上索引数组就是一种特殊的关联数组
    // 既有关联数组也有索引数组 ---> 混合数组 (了解 不会用 看懂)

    //=============================================================
    // 给数组添加元素
    // $arr = [2,3,4];
    // $a = 5;
    // $arr[] = $a;
    // print_r($arr);
    // $arr = [];可以不写的
    // $arr[] = 1; //$arr.push(1)
    // $arr[] = 2;
    // $arr[] = 3;
    $arr['a'] = 100;//两步 第一步 声明一个变量叫$arr 赋值为[],第二步，给它追加(push)一个元素100
    $arr['b'] = 200;//给它追加(push)一个元素200
    print_r($arr);
    echo '<hr>';

    // 二维数组
    // $banana = array(
    //     "name"=>'香蕉',
    //     "src"=>"img/banana1.jpg"
    // );

    // $fruit = array("香蕉","苹果");

    //二维数组描述 
    //索引数组套关联数组
    $fruit = array(
        array(
            "name"=>'香蕉',
            "src"=>"img/banana1.jpg"
        ),
        array(
            "name"=>'苹果',
            "src"=>"img/apple.jpg"
        )
        );
    foreach($fruit as $key=>$value){
        foreach($value as $key1=>$value1){
            echo $value1.'<br>';
        }
        echo '<hr>';
    }

    //=============================================================
    // 数据类型转换 --> 了解就可以了
    // $a = '1'+'2';//3
    $a = '123';
    $b = (int)$a;//强制类型转换成整型
    var_dump($b);
    echo '<br>';
    $c = (bool)$a;//强制类型转换成布尔型
    var_dump($c);
    $d = 123;
    echo '<br>';
    $e = (string)$d;//强制类型转换成字符串型
    var_dump($e);


    //指令式语法 （看懂 理解 语法规范） 手册 --> 基础  -->从 HTML 中分离 
    // 在线安装 google应用市场 （翻墙）
    
    //美 苏 宇航局 源代码 最

    // foreach(){
    //     if(){
    //         foreach(){
    //             if(){

    //             }
    //         }
    //     }
    // }}}}}}}}}}}}}}}}}}
    //特殊 --> else if可以写成elseif，如果你用的是指令式语法，一定要用elseif（不能分开）
    $a = 100;
    if($a > 100):
        echo 1;
    elseif($a <= 100):
        echo 2;
    endif;
    
    //=============================================================
?>



<?php if(false){ ?>
    <h2>真的</h2>
<?php }else{ ?>
    <h2>假的</h2>
<?php } ?>
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
        var arr = [2,3,4];
        var a = 5;
        arr.push(a);
        //强制类型转换
        var str = "123";
        Number(str)
        //隐式类型转换
    </script>
</body>
</html>