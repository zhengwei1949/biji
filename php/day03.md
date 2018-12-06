- 反馈
    + 单引号与双引号的区别
- 说明
    + 今天要记的东西蛮多的，知识点比较繁琐，API比较繁琐写起来，逻辑比昨天的难，大家到时候把笔记多看几遍就行了
- get和post的介绍(难点)
  - 引言：我们昨天的水果案例其实还没有做完，我们还有一个详情页，为了做这个详情页，我们需要学习一个知识点 - get,post
  - 类比:淘宝买东西 快递（普通快递 顺丰）
    + 用哪家快递都可以把东西拿回来
    + 场景不一样
        1. 如果对安全性要求不高，东西比较大，对时间没有要求 --> 普通快递
        2. 顺丰  
  - 打开network给大家演示一下如何看请求方式是get还是post并且统计哪些情况是get,哪些情况是post
    - http://www.thinkphp.cn/member/login.html

    - get是百分九十九的情况肯定是get
        1. 请求js代码,css代码,图片请求(img ),字体图标
        2. 网页请求回来也是用的get方式
        3. 有时候像百度搜索框这种表单用的也是get
    - post
        - 登录（账号和密码要绝对安全不能被别人看到）
        - 上传自己的头像
        - 对安全性要求比较高的，传递的数据量比较大的


  - 总结：
    - 我们平时上网的时候需求主要分为两大类
        1. 看网页（新闻、帖子、博客）
            - 强调把东西从服务器拿回来（）
            - get(中文翻译过来是获取的意思)
        2. 提交表单（注册、登录、上传个人头像）
            - 强调把本地的个人数据、图片上传邮寄到服务器，对安全性要求比较高
            - post(中文是邮寄的意思)


只记一点：post作用只能用于表单上传（对安全性、数据量）比较大的情况，其他全部用get

- get请求方式的使用说明
  - form表单在后台写的时候要有几个东西必不可以少
    - action
    - method
    - name
  - $_GET
  - 两次请求
   

- get请求方式的应用-水果案例详情页
- post请求方式的使用说明
    + 数据的位置在哪里?
    + 注意事项：post方式不能刷新页面，必须开新的标签页，否则会重复提交旧的数据
- 补充-总结get,post两种方式的区别
    + get,post
        1. 应用场景
            - get:在地址栏输入url地址，按一下回车，img,link,script(src),表单(不常用) ---> 获取
            - post:用于注册、登录之类安全性要求比较高，上传图片，发布文章，写博客帖子之类的场景
        2. 传输数据位置
            - get的数据是在url的？后面(查询参数) a=1&b=2&c=3 (urlencoded)
            - post的数据 form Data
        3. 传递到服务器的数据接收方式
            - get ---> $_GET
            - post ---> $_POST
        4. 传输数据大小
            - get4kb左右（浏览器不一样，具体值不一样）
            - post理论上没有限制
        5. 数据是否缓存
            - get 请求会缓存
            - post 请求不会被缓存，也不会保留在浏览器历史记录中
        6. 安全性
            - get不安全
            - post相对来说比较安全

- 几种表单元素收集数据方式的说明
  1. <?php echo $_SERVER['PHP_SELF']; ?>
  2. 如果传递的方式是get,我们在php当中可以通过$_GET来接收参数,如果传递的方式是post,我们在php当中可以通过$_POST来接收参数,要一一对应
  3. 所有类型的input输入框一定要有name属性
  4. 如果是单选框，多选框，既要有name,也要有value属性，如果是多选框形式：name[],得到的是二维数组
  5. select标签最好有value属性，也要有innerText（用示例来让大家明白）

  ```php
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <!-- 普通文本框必须要有name属性 -->
        <!-- radio,checkbox除了要写name,还要写value值 -->
        <input type="radio" name="gender" value="男">
        <input type="radio" name="gender" value="女">
        <!-- checkbox除了要写name,value值，name值要写成 名字[]的形式 -->
        <input type="checkbox" name="aihao[]" value="电影">
        <input type="checkbox" name="aihao[]" value="音乐">
        <!-- <select name="subject" id="">
            <option>java</option>
            <option>ios</option>
            <option>js</option>
        </select> -->
        <!-- 推荐像下面这样写法更好 -->
        <!-- innerText是给用户看的，value值是给$_POST来使用的 省空间 -->
        <select name="subject" id="">
            <option value="0">男</option>
            <option value="1">女</option>
            <option value="2">未知</option>
        </select>
        <input type="submit">
    </form>
  ```

- 文件上传的基本实现
  - 为了让大家彻底的理解 --> 讲解sleep函数
  - 把本地的文件上传到服务器端

```php
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $file = $_FILES['myfile'];
    move_uploaded_file($file['tmp_name'],'./upload/'.$file['name']);
}
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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" accept=".png,.jpg,.gif,.jpeg">
        <input type="submit" value="点击上传你的头像">
    </form>
</body>
</html>
```

  - 注意事项
    1. 请求方式必须是post
    2. enctype的值
      - application/x-www-form-urlencoded
        - a = 1,b = 2 ----> a=1&b=2，这个是浏览器内部帮我们做的事情，我们称之为表单数据的序列化
        - 只要enctype的值设置为application/x-www-form-urlencoded，就会进行表单数据的序列化
      - multipart/form-data（选这个）
        - 表单数据编码为一条消息，每个input控件对应消息的一部分（通过fiddler可以进行查看）
  - 代码示例

  ```php
  <?php
  print_r($_FILES);//内置超全局变量 预定义变量 是一个二维数组
  echo $_FILES['myfile']['tmp_name'];
  //move_uploaded_file(源文件的路径,目标文件的路径)
  //注意事项：upload目录必须我们自己手动的创建
  move_uploaded_file($_FILES['myfile']['tmp_name'],"./upload/temp.png");
  ?>
  <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  文件选择: <input type="file" name="myfile"><br>
  <input type="submit">
  </form>
  ```

  - 补充知识点
  - rand函数 随机数 如何理解rand(1000,9999)
  - strrchr(要处理的字符串,分割符)用来获取最后一个分割符后面的子字符串，比如已知"a.b.c.d.png",我们想获取.png

- 文件上传操作-补充1 - 生成一个随机的文件名

  ```php
  //视频中讲得有点过于复杂，简化语法如下
  if(!empty($_FILES) && $_FILES['myfile']['error'] == 0){
    //文件名必须随机生成，为了防止文件名一样，后面上传的会覆盖前面
    $fileName = time().rand(1000,9999);
    //把原始上传的文件扩展名拿到 获取最后一个点后面的字符串，作为返回值
    $extName = strrchr($_FILES['myfile']['name'],".");
    $file = $fileName.$extName;
    $filename = 'upload/'.$file;
    // "a.b.c.jpg"
    move_uploaded_file($_FILES['myfile']['tmp_name'],$filename);
  }
  ```
- 文件上传操作-补充2 - 为了可以上传大文件，修改配置文件
  - 服务器对每一次post请求传递的数据做了限制，默认为8mb,可以在php.ini配置文件中修改post_max_size属性值和upload_max_filesize
- 文件上传操作-补充3 - 为了可以上传大文件，修改配置文件
  - 了解即可
- 注册案例（上）
- 注册案例（下）
- 简单介绍json文件的创建方法和语法特点

上午总结：
1、什么情况下用get,post:只有表单提交一些对安全性比较高、数据量比较大的情况下才用post,其他全部用get请求方式
    + 如果不确定用的是什么请求方式（查看方式）
2、如果传递的方式是get,我们在php当中可以通过$_GET来接收参数,如果传递的方式是post,我们在php当中可以通过$_POST来接收参数,要一一对应
3、水果详情页制作思路总结
    1. 把a标签的href值从#修改为detail.php
    2. 给detail.php后面添加查询参数id,需要使用php动态生成id值 <?php echo $value[0] ?>
    3. a标签跳转属于get请求方式，在detail.php当中通过$_GET来接收参数id值用$id接收(?后面 查询参数)
    4. 使用file_get_contents读取fruit.txt数据，并转换成二维数组(explode)
    5. 遍历数组，找到对应的$id值对应的元素项
    6. 渲染页面
4. 表单注意事项
    + form标签
        - action:收货地址（寄给自己）
        - method:get,post
    + input标签
        - 要有name属性，对应的是key
    + 如何判断当前这一次请求是get,还是post
        - $_SERVER['REQUEST_METHOD']
    + 特殊的表单元素（radio,checkbox,select）
        - 普通的input只需要name属性就可以了
        - 特殊要有name,还要有value
        - checkbox的name属性要写成 name="名字[]" --> 得到的是二维数组 规范
5. action值不能写死，要写成<?php echo $_SERVER['PHP_SELF'] ?>


