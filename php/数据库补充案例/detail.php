<?php
header('content-type:text/html;charset=utf8');
if(!isset($_GET['id'])){
    $id = 1;
}else{
    $id = $_GET['id'];
}
//连接数据库
$conn = mysqli_connect('127.0.0.1','root','root','mybase');
//设置编码
mysqli_set_charset($conn,'utf8');
//判断如果连接失败就die 
if(!$conn){
    die('数据库连接失败');
}
$sql = "select id,studentName,age,gender,className from student left join class on student.cid = class.classID where id = $id";
$result = mysqli_query($conn,$sql);
// var_dump($result);
//把数据从对象中取出来变成一个数组
$res = mysqli_fetch_assoc($result);
// print_r($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>姓名</td>
                            <td>年龄</td>
                            <td>性别</td>
                            <td>班级</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $res['id'] ?></td>
                            <td><?php echo $res['studentName'] ?></td>
                            <td><?php echo $res['age'] ?></td>
                            <td><?php echo $res['gender'] ?></td>
                            <td><?php echo $res['className'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>