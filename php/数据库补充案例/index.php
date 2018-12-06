<?php
header('content-type:text/html;charset=utf8');
//连接数据库
$conn = mysqli_connect('127.0.0.1','root','root','mybase');
//设置编码
mysqli_set_charset($conn,'utf8');
//判断如果连接失败就die 
if(!$conn){
    die('数据库连接失败');
}
$sql = 'select id,studentName,age,gender,className from student left join class on student.cid = class.classID;';
$result = mysqli_query($conn,$sql);
// var_dump($result);
//把数据从对象中取出来变成一个数组
while($res = mysqli_fetch_assoc($result)){
    $array[] = $res;
}
// print_r($array);
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
                            <td>
                                详情页
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($array as $key=>$value){
                        ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['studentName'] ?></td>
                            <td>
                                <a href="detail.php?id=<?php echo $value['id'] ?>" class="btn btn-link">查看详情</a>
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>