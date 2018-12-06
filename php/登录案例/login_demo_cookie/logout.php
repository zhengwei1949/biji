<?php
//删除cookie值一定要去关注cookie是如何添加的
setcookie('isLogin',"");
header('Location:./login.php');
?>