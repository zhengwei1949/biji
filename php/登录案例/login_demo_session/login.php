<?php
function login(){
  //验证用户输入的数据是否合法
  if(!isset($_POST['username']) || trim($_POST['username'])==""){
    $GLOBALS['error'] = "请输入用户名";
    return;
  }
  if(!isset($_POST['password']) || trim($_POST['password']) == ""){
    $GLOBALS['error'] = "请输入密码";
    return;
  }

  //接收用户数据
  $userName = $_POST['username'];
  $userPwd = $_POST['password'];

  //读取json文件，拿json文件中的数据与用户输入的进行比较
  $dataArr = json_decode(file_get_contents('users.json'),true);
  foreach($dataArr as $key=>$value){
    //如果下面的条件满足，至少说明用户名是存在的
    if($value['username'] == $userName){
      $user = $value;
      break;
    }
  }
  if(!isset($user)){
    $GLOBALS['error'] = '用户名不存在';
    return;
  }

  //判断密码是否输入正确
  if($user['password'] != $userPwd){
    $GLOBALS['error'] = "密码输入错误";
    return;
  }

  //将登录成功的数据写入cookie
  // setcookie('isLogin',true);
  session_start();
  $_SESSION['user'] = array(
    'username' => $_POST['username'],
    'userPwd' => $_POST['password'],
    'isLogin' => 'yes'
  );
  //如果判断匹配成功，则跳转到主页，否则继续回到登录页
  header('Location:./main.php');
}

//判断用户是否提交了post请求
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  login();
}
?>
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>登录</title>
  <link rel="stylesheet" href="bootstrap.css">
  <style>
    body {
      background-color: #f8f9fb;
    }

    .login-form {
      width: 360px;
      margin: 100px auto;
      padding: 30px 20px;
      background-color: #fff;
      border: 1px solid #eee;
    }

    .login-form h1 {
      font-size: 30px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <form class="login-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <h1>登录</h1>   
    <?php if(isset($GLOBALS['error'])){ ?>
      <div class="alert alert-danger"><?php echo $GLOBALS['error'] ?></div>
    <?php } ?>
    <div class="form-group">
      <label for="username">用户名</label>
      <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
      <label for="password">密码</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary btn-block">登录</button>
  </form>
</body>
</html>