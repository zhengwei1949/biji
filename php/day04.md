- 导言
  - 为什么要学习php课程
    1. 招聘角度来看（部分前端岗位需要应聘者会php或者会php是属于加分项） java,php后端最流行
    2. 学习php可以让我们更好的理解前后端做的事情，更好的与后端进行交互（所谓的后端就是php、java、python干的活）
    3. 便于我们更好的学习后面一个知识点 --> ajax
  - 在学习php之前，我们回忆一下每天学习的内容：写html,css,js代码，写好之后，直接双击html就可以打开看一下效果
  - 但是，我们在平时上网的时候看百度、京东、淘宝等各种网站不是这样操作的
    - 打开百度，输入http://baidu.com
    - 回车，然后直接可以看到百度首页（确保连网了）
  - 问题一：我们看到的百度这个页面是来自哪里
    - 理解：来自于**百度服务器**(服务器大家有的同学玩游戏的应该听过，玩抖音、B站的同学有时间在直播比较卡的时候也可以切换服务器，如果不清楚的话，没关系，意思我们在视频当中会学习)
    - 演示：我的电脑因为安装了一个叫apache的服务器软件，所以变成了服务器，我在根目录当中创建一个ceshi.html文件，大家可以访问一下（确保防火墙关闭状态）
  - 问题二
    - 百度贴吧、新浪微博每天打开看到的内容是不一样的,我们可以新增留言，然后就会发现网页中的内容变多了（页面中的内容在动态变化，关了再打开还在）
      - 理解：
        - 静态网页（写死的网页）：它指的是我们写好一个html页面，放到服务器上面就可以 特点就是以html结尾，哪怕你的页面上有一个轮播图特效，我们还会把它当成是静态的
        - 动态网页（活的网页）：它的特点是php扩展名结尾，用php来写的，页面的数据一般的来自于数据库当中
      - 演示
        - 写一个ceshi.php,代码里面echo $a + $b;访问得到的是最终的结果
  - 总结
    1. 我们真实的项目所有的html,js,css,php文件都是放在一个叫服务器的地方
    2. 我们之前写的页面都算静态页面（轮播图） 数据在变
    3. 我们在网上见到的大部分页面其实是动态页面 数据是动态的（数据来自于数据库mysql）
    4. 所谓的动态页面指的是页面中的数据是动态的来自于数据库
    5. php的作用是用来制作动态网页的

- 服务器（画图演示）
  - 类比：客户 vs 服务员
    - 客户点餐，要一份盖浇饭，服务员就给他一份盖浇饭
  - 客户端：向服务器要东西（比如要一个ceshi.html)
  - 服务器就像服务员一样，去对应的目录当中找一下有没有ceshi.html,如果找到了，就返回给客户端

- cs和bs
  - 客户端与服务器模型中的客户端分为两种：需要安装的客户端软件和浏览器客户端
    - 现实生活中见到的：微信.exe vs 网页版微信
    - 网页服务器我们用的是BS架构
    - 将来我们会学习数据库(mysql),它也是由客户端和服务器端组成，只不过我们会安装一个客户端软件navicat，用的是CS架构
- ip、域名、dns
  - 理解ip,域名,dns
    - 理解互联网：一堆的电脑通过网线、wifi连在一起，就是互联网
    - 每一台电脑都会被分配一个地址，我们称之为ip地址，就像每一栋建筑都有一个详细地址：XX市XX区XX路X号
    - 一般人记不住详细地址，只会记住建筑的名字，比如我们这栋楼叫江苏国家数字出版基地
    - 我们只要知道了这个名字（就好比是域名），我们通过百度地图（类似dns)可以得到对应的详细地址
  - 画图理解
    - 准备工作：先客户端，画3台服务器（百度、淘宝、腾讯）、再画dns中这三台服务器的映射关系
      - ip的格式：0-255.0-255.0-255.0-255
      - 特殊的ip:127.0.0.1(要记住)
      - 特殊的域名:localhost(要记住)
    - 在地址栏输入域名，比如qq.com
    - 先在当前电脑`C:\Windows\System32\drivers\etc`找到hosts文件查找有没有你当前输入的网址的映射
    - 接下来去dns服务器查询相关的映射
    - 查询出来对应的ip之后，定位到对应的服务器电脑

自己的电脑：此电脑 当前电脑
访问自己的电脑上的服务器


自己的电脑上安装了一个服务器软件，自己访问自己，最快速的方式用localhost,127.0.0.1




某个地方
南京市XX区XX路X号
新街口 房间号

1. 打开百度地图
2. 新街口（域名）
3. 百度地图 dns一样  南京市XX区XX路X号（ip地址）
4. 房间号 端口号


腾讯提供qq,qq邮箱,weixin，游戏
腾讯公司服务器电脑安装了各种各样服务器软件

只知道ip,域名
qq.com:端口 --->

qq 发一个消息

端口



协议://域名或者ip:端口(默认是80端口)/目录/文件名字?key=value&key=value
?后面叫查询参数，格式是以&分割，每一组是以key=value形式

http
https （有名的网站 银行类 更加安全）

?wd=java&rsv_spt=1&rsv_iqid=0xa7fdbf510000bfc6&issp=1&f=8&rsv_bp=0&rsv_idx=2&ie=utf-8&tn=baiduhome_pg&rsv_enter=1&rsv_sug3=4&rsv_sug1=2&rsv_sug7=100&rsv_sug2=0&inputT=608&rsv_sug4=609

网页端口是80，不用写，默认值

- 端口
  - 一个详细地址定位到的是一栋建筑大楼，楼里面有一个一个的房间，我们还必须知道房间号才能到我们想去的地方（房间号就类似端口号）
  - 腾讯公司提供一堆的服务：微信、qq、qq邮箱，因此腾讯公司电脑的服务器上安装了好多个服务器软件（微信服务器、qq服务器、qq邮箱服务器）
    - 如果只知道ip或域名，你在qq上给你好友的消息，有可能发到他的微信上来了，会搞错
    - 每一个服务器软件都会有一个对应的端口号进行区分
      - http端口:80(默认端口，不用写)
    - 面试题：当我在浏览器输入www.baidu.com的时候发生了什么
      - 先找到电脑里面的hosts文件，如果找不到这个域名对应的ip，就去dns找到对应的ip
      - 通过ip找到对应的服务器电脑
      - 通过端口号找到对应的服务器软件

- url的组成
  - https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&tn=baidu&wd=hosts%E6%97%A0%E6%B3%95%E4%BF%9D%E5%AD%98&oq=ba&rsv_pq=a2d637ff00027209&rsv_t=96952dO36GY0%2BpsPnkEzTaDVYunl7HbZHqtqgG6s0EezD%2B4a6sbHShZd4vI&rqlang=cn&rsv_enter=1&rsv_sug3=13&rsv_sug1=13&rsv_sug7=100&sug=hosts%25E6%2597%25A0%25E6%25B3%2595%25E4%25BF%259D%25E5%25AD%2598&rsv_n=1&bs=ba
  - 协议(http)://ip或域名:端口(可以不写，如果不写默认值是80)/目录/文件名字?属性名1=属性值1&属性名2=属性值2
    - ?号后面的又称为键值对

- 安装phpStudy（资料在这个时候再发给大家，统一安装，这块一定要看仔细了，后面会有各种问题，其实都是因为这块没看清导致的）
  - http://phpstudy.php.cn/jishu-php-2956.html
    - 对于程序员来说，phpstudy是一个非常好用的PHP调试环境集成包，包含了最新的Apache和PHP等程序，对学习PHP的新手来说，WINDOWS下环境配置是一件很困难的事;对老手来说也是一件烦琐的事。因此无论你是新手还是老手，phpstudy程序包都是一个不错的选择
  - 安装之前，把毒霸、360全部退出
  - 安装路径统一：C:\\phpStudy
  - 目录绝对不要有空格和中文，我们安装的是稳定版，所有的文件名和目录名以后写的时候全部不能有中文，否则会出错
  - 红色是失败，绿色是成功
  - 点击关闭，并不是真的关闭了，而是最小化到桌面右下角
  - 桌面右下角点一下退出，会发现桌面会多一个快捷方式，以后打开直接单击这个图标就可以了
  - 如果安装失败：一般的问题是以前安装过tomcat,iis导致端口冲突

- phpStudy基本使用说明
  - 删除默认首页（其他选项菜单 --> phpStudy设置 --> 端口常规设置）
  - 允许目录列表（其他选项菜单 --> phpStudy设置 --> 允许目录列表）
  - 练习
    - 打开C:\phpStudy\PHPTutorial\WWW根目录
    - 把WWW里面的东西全部删除掉
    - 创建一个html文件
    - 注意：目录及文件名不要中文，不要有空格（这块由于视频中用的是新版本的phpStudy,但是不太稳定，这里我提供的还是老版本的phpStudy，所以大家看视频的时候稍微注意一下，不要被视频误导了也起中文名字的目录或文件名）
    - 在里面随便写一段html代码
    - 打开浏览器，输入127.0.0.1进行访问
    - 说明如果写的是中文会出现乱码
      - 解决办法：chrome插件（为避免出问题，统一用解压的方式安装）
        1. 打开浏览器，输入chrome://extensions/
    - 注意事项
      - 从现在开始所有的目录、文件代码必须要写在根目录当中
      - 目录名、文件名不能有空格、中文
      - 必须通过localhost输入地址的方式进行访问，不能双击打开，只要是以file://开头的就说明打开方式是错的

- 虚拟主机配置（配置第一个虚拟主机 难点 大家在配置的时候，创建一个word文档，把每一步截图写好文字说明，以后再配置的时候直接照着一步一步的配置即可）
  - 引言
    - 一个房间号对应的有可能是一个三室一厅，如果一个人住太浪费了，可以租给三个人，每个人一个房间住
    - phpStudy默认只能通过localhost来访问，相当于只能创建一个网站，我们接下来对phpStudy进行配置，让其支持同时创建多个网站，也就是所谓的配置虚拟主机
  - 配置步骤
    1. 在www根目录中创建一个文件夹day1
    2. 站点域名管理配置如下
      - 网站域名：www.day1.com
      - 网站目录 C:\phpStudy\WWW\day1
      - 第二域名 day1.com
    3. 修改hosts文件
      1. 打开 --> C:\Windows\System32\drivers\etc
      2. 左上角（文件 --> 打开windows power shell --> 以管理员方式打开）
      3. 输入notepad ./hosts
      4. 把里面的内容全部删除
      5. 输入如下内容
        1. 127.0.0.1 www.day1.com
        2. 127.0.0.1 day1.com
      6. 允许目录列表(vhosts.conf)

- 虚拟主机配置（配置第二个虚拟主机）
  - phpStudy软件有一个bug,如果你稍微改一点东西（比如再次配置一些），然后重启一下，会发现之间的虚拟主机又失效了，这时候的解决办法是再配置一次就可以
  - 按上面的思路再重新配置一次

- apache和php之间的关系
  - phpStudy = apache+php+mysql
    - apache ： 服务器端软件，光有apache，只能用来处理静态资源
    - php ：制作动态网页
    - mysql：存取数据的仓库
  - apache安装好之后，服务器就安装好了，但是apache只能用来接收请求并处理返回静态资源文件
  - 如果是php文件，apache是不能处理的，必须交给php软件解析之后，才能把解析后的内容返回


了解性的知识点

apache : 服务器软件 只能用来处理静态资源(html,js,css)，遇到php文件，会把它交给php软件来解析
php ：

，

- 动态网页的基本实现原理
  - 用代码进行理解
    1. 写一个1.html 访问http://localhost/1.html
    2. 在里面写一段php代码，发现不能解析
    3. 把文件名重命名为.php扩展名结尾

- 动态获取服务器的时间
  1. html后缀的文件 不能写php代码
  2. php后缀的文件  既能写html也能写php
  3. 特别注意 只要是php代码 一定要包裹在 <?php  这里面写php代码  ?>
  4. php每句话都要加上 ; 结尾 不然要报错
  5. 配置php.conf文件
    1. 配置文件中;开头的意思是注释
    2. date.timezone = PRC
      1. PRC是中华人民共和国的意思
- php标记书写规范及php打印输出到浏览器的几种方式
  - php中的数字类型没有undefined,其他的和js一致
    - 数字（特殊地方：在php中有两种数字类型：整型(int)和小数型(float)（专业术语叫浮点型））
    - 字符串
    - 布尔值
    - 数组
    - 对象
    - null
  - echo用来打印数字、字符串
  - print_r用来打印输出数组
  - var_dump可以打印任意类型,尤其对于布尔值、NULL只能用var_dump来输出
    - var_dump既可以用来打印值，也同时会输出数据的类型
  - 补充：
    - echo '<br>'或echo '<hr>'用来分割打印的数据
- html,php混写
  - 这是php的语法规范，记住就可以了，不要去尝试理解
- php中的注释和变量
  - 必须在最前面加上$
  - 没有var
  - 语句结尾必须加上分号
- isset,empty,unset函数介绍
  - 变量未声明或者声明了未赋值，通过isset判断为false
  - empty:判断变量是否为空
  - unset 销毁一个变量
- 字符串注意事项
  - +号在php当中的意思就是数学中的加号
  - 拼接符在php中是点号
- 单引号和双引号的区别
  - 单引号不会解析，双引号会解析
  - 为了确保里面的变量、转义字符能识别，在写代码的时候，尽量用双引号
  - 花括号的作用是为了避免解析错误

- 晚自习任务
  - 复习今天的东西并配置几个虚拟主机
    - www.day3.com day3.com
    - www.day4.com day4.com
  - 查php手册中date函数的用法，试着打印出来年月日时分秒
  - 预习明天的视频
  - 写反馈与每日测试题

## day02

- 反馈目标
  - 会写php创建数组的两种方式
  - 会foreach便利数组
  - 会php函数的写法
  - 了解超全局变量有哪些
  - 说出include,require等导入文件的区别
  - 会使用time,date,strtotime时间相关函数
  - 说出获取文件的内容与把内容写到某个文件里的方法
- 回顾
  - 复习昨天讲的东西
    - 通过画图理解客户端、服务器、静态页面、动态页面、ip、域名、dns、hosts文件、端口这些概念
    - 2、理解url的组成
    - 复习配置虚拟主机
    - 写php代码的规范
      - 必须写在www根目录当中
      - 目录名和文件名不能包含空格与中文
      - 必须以分号结尾
      - 文件的打开方式（不能双击打开，或者右上角使用浏览器图标打开），必须通过地址栏手动输地址打开（虽然麻烦，但必须这样做），和真实的世界操作完全一致
    - 打印的三种方式
      - echo
      - print_r
      - var_dump
    - isset,empty,unset的用法
    - 单引号与双引号的区别
      - 花括号的作用
  - 反馈内容讲解
  - 每日测试题
- php中数组的创建和遍历
  - 数组有两种类型（索引数组与关联数组）
    - 索引数组类似js中的数组，关联数组类似js中的不带方法的对象
    - 旧的写法与新的写法
  - for循环以及count函数
  - foreach标准语法与简洁语法
  - 补充：为了清晰的看到数组的数据
    - 方式一：一般我们会右键 --> 查看源代码
    - 方式二：pre标签（不常用，了解即可）
      - pre 元素可定义预格式化的文本。被包围在 pre 元素中的文本通常会保留空格和换行符。（说白了就是能把回车变成<br>,把多个空格解析成多个&nbsp;符号实体而不是一个&nbsp;符号实体）
- php数组的补充说明(混合数组和push)
  - 混合数组：既包含索引数组又包含关联数组（了解看到了认识即可）
  - 数组[] = 值;相当于js中的数组.push(值)
- 补充说明php中的二维数组
  - 练习：
    - 用二维数组描述一个班级所有的同学信息
    - 用二维数组描述水果信息
- 数据类型转换和运算符的介绍
  - php中的+号就是数学中的加号，并不代表拼接
  - 在php当中拼接用点号来表示的
- php中指令式语法的介绍
  - 这是php语法规定可以这样用的一种方式，大家可以用也可以不用
    - php手册 --> 语言参考 ---> 基础语法 --> 从html中分离
- php中函数的声明及使用特点
  - php中也有全局作用域、函数局部作用域
  - php中没有作用域链
  - 函数内部要想使用外部的变量，需要用global的方式（这种方式用得不多，我们马上会讲另一种方式）
- php中的超全局变量说明
  - php手册 --> 语言参考 --> 预定义变量
  - $GLOBALS有点类似js中的window对象
  - $_GET,$_POST,$_FILES,$_COOKIE,$_SESSION这几个内置的超全局变量，我们后面会学到的，先记住如下二个超全局变量
    - $_GET 是一个数组  如果地址栏?后面有值 数组里面就存了那些值
    - $_SERVER 是一个数组 可以获取各种服务器相关的信息
- php中常量的定义和使用
  - 所谓的常量，就是值永远不会变，如果强制修改，会报错
  - 常量PHP_INT_MAX --> php中的最大的整数
- php中的文件载入
  - 你不加区分的用，也不会出错，但是知道区别，用起来更加规范一点
  - 一个php文件就像一台电脑，电脑包含各种模块（内存、主板、鼠标）
    - 如果没有内存，主板之类的，电脑没办法运行 --> require
    - 如果没有鼠标，我们还可以用触摸板 --> include
  - 区别
    - require比include更严格
    - xxx真的会加载多次，尽量不要用，比如函数重复声明、常量重复声明会报错
    - 尽量用xxx_once，因为有缓存，加载多少次都相当于加载一次

|                             | require | require_once | include | include_once |
| ----------------------------| ------- | ------------ | ------- | ------------ |
| 被载入文件如果不存在是否执行     | 是      |    是         | 否      |     否       |
| 多次调用是否会重复执行被载入的文件| 是      |    否         | 是      |     否       |

- 常用api-字符串、时间函数的使得说明
  - strlen
    - 注意事项：中文在utf8下面一个汉字占三个字字，所以长度是3
  - time 时间戳函数
    - 类似js中的Date.now(),不过js中时间戳的单位是毫秒，长度是13位，而php中单位是秒，长度是10
  - date函数（之前讲过）
  - strtotime(了解即可，后面课程中用不上)：用来把时间格式转换成时间戳(查看手册)
- 文件操作函数的使用说明
  - file_get_contents
  - file_put_contents
  - 理解什么情况下需要用FILE_APPEND，什么情况下不需要用FILE_APPEND
- php回顾
  1. php标记
    1. 写在这个结构内的代码才会以php语法解析
    2. 写在这个结构外的代码会原样返回浏览器客户端
  2. 输出内容的方式
    1. echo
    2. print_r
    3. var_dump
  3. 字符串用单引号和双引号的区别
  4. 数组
    1. 创建方式
    2. 如何把值添加到数组当中(push)
    3. 数组的类型（索引数组 vs 关联数组 vs 混合数组）
    4. 二维数组
    5. foreach遍历
  5. 变量的作用域
    1. 使用global关键字(了解)
    2. 超全局变量（预定义变量）
  6. 文件载入（文件包含）
    1. include
    2. include_once
    3. require
    4. require_once
  7. 常用api
    1. file_get_contents
      1. file_get_contents获取的数据类型为字符串
    2. file_put_contents
      1. FILE_APPEND
  8. html,php混编
- 补充知识点
  - explode函数
    - explode(以什么拆分,要拆分的字符串); 得到一个数组
    - $str = "1|苹果|apple.jpg";
- 水果案例-根据数据动态生成水果列表(见word笔记)
  1. 把fruit.html文件扩展名变成fruit.php
  2. 创建二维数组
  3. 根据数据动态生成结构(foreach)
- 完成水果列表案例(22分钟)
- 晚自习
  - 把水果案例再重新做一遍
  - 预习明天的视频
  - 总结学过哪些内置函数
    - date('Y-m-d')
    - print_r
    - var_dump
    - empty
    - isset
    - unset
    - define
    - count 求数组的长度
    - strlen 字符串的长度
    - date 打印当前时间 Y年m月d日H时i分s秒
    - time() 时间戳，类似js中的Date.now()，但是单位是秒
    - strtotime 把一个时间转换成时间戳，不常用，具体用法见php手册
    - file_get_contents 把文件中的内容读取出来，作为一个字符串，我们可以用一个变量来接收
    - file_put_contents
```php
//第二天上午
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
```

```php
//第二天下午
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
```

- 回顾
  - 复习昨天讲的东西
    - 通过画图理解客户端、服务器、静态页面、动态页面、ip、域名、dns、hosts文件、端口这些概念(域名-ip-dns-端口流程.png)
      + 二进制的 
    - 理解url的组成
      + http://
      + https://www.baidu.com/s/index.php?ie=utf-8&f=8&rsv_bp=0&rsv_idx=1&tn=baidu&wd=java&rsv_pq=f0c1502b0003ae22&rsv_t=d2e0wf9kjOx1rTgkD7BusYe%2BM328P7zdWKiSvavW644XaZg2OBi%2BMCNQ3Kc&rqlang=cn&rsv_enter=1&rsv_sug3=4&rsv_sug1=1&rsv_sug7=100&rsv_sug2=0&inputT=880&rsv_sug4=881
      + ?号后面的键值对(很多组)
        key=value&key=value
    - 复习配置虚拟主机
      1. 阿里百秀（word笔记一步一步做 单词不要写错）
    - 写php代码的规范(学习php+ajax+阿里百秀的时候 node.js 乐淘 的时候)
      - 必须写在www根目录当中
      - 目录名和文件名不能包含空格与中文（win10 phpStudy官网下载最新的phpStudy ）
        + 大家平时网吧上网的时候 
        + 只要不注意代码就会报错
      - <?php   //a.写在这个结构内的代码才会以PHP语法解析    b.写在这个结构外的代码会原样返回 ?>
      - 必须以分号结尾，除非是最后一行
      - 文件的打开方式（不能双击打开，或者右上角使用浏览器图标打开），必须通过地址栏手动输地址打开（虽然麻烦，但必须这样做），和真实的世界操作完全一致 
    - 打印的三种方式(print)
      - echo 数字 字符串
      - print_r 数组
      - var_dump 数据值和类型
    - isset,empty,unset的用法
    - 单引号与双引号的区别
      - 花括号的作用
  - 反馈内容讲解

- 字符串拼接与js的异同
  + +号的意思只有数学中的加号的意思
  + php中的字符串拼接我们用点号
- 单引号和双引号的区别
  + 单引号不会解析里面的php变量
  + 双引号会解析里面的php变量
    - 一般我们会考虑用双引号
    - {}的作用是为了防止解析错误
- php中数组的创建和遍历
  - 数组有两种类型（索引数组与关联数组）
    - 索引数组类似js中的数组，关联数组类似js中的不带方法的对象
    - 旧的写法与新的写法
    - for循环以及count函数
    - foreach标准语法与简洁语法
    - 补充：为了清晰的看到数组的数据
      - 方式一：一般我们会右键 --> 查看源代码
      - 方式二：pre标签（不常用，了解即可）
        - pre 元素可定义预格式化的文本。被包围在 pre 元素中的文本通常会保留空格和换行符。（说白了就是能把回车变成<br>,把多个空格解析成多个&nbsp;符号实体而不是一个&nbsp;符号实体）
- php数组的补充说明（混合数组和push）
- 补充说明php中的二维数组
- 数据类型转换和运算符的介绍
  + (string)$a;
  + (int)$a;
  + (float)$a;
  + (bool)$a;
- php中指令式语法的介绍
  + php手册 --> 语言参考 --> 从html中分离
- php中函数的声明及使用特点
  + 补充：函数不能重复声明，否则会报错
- php中的超全局变量说明
  + $GLOBALS
  + $_SERVER
    1. PHP_SELF
    2. REQUEST_METHOD
  + $_GET
- php中常量的定义和使用
- php中的文件载入

|                             | require | require_once | include | include_once |
| ----------------------------| ------- | ------------ | ------- | ------------ |
| 被载入文件如果不存在是否执行     | 是      |    是         | 否      |     否       |
| 多次调用是否会重复执行被载入的文件| 是      |    否         | 是      |     否       |

- 常用API-字符串、时间函数的使用说明
- 文件操作函数的使用说明
- php回顾
- 水果案例-根据数据动态生成水果列表
- 完成水果列表案例(22分钟)
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
- 请求报文和响应报文(19分钟)
    + http协议规范了从客户端发送请求到服务器中的各个数据的含义(response)，也规定了从服务器返回结果到客户端中的各个数据的含义(response)
    + http协议的组成
        - 请求报文
            - 状态行(请求行) = 请求方法 + 请求的url + http协议的版本(现在主流是http1.1)
                - get http://baidu.com http1.1
                    - get和post的区别
                        - 语义上理解
                        - 数据量上理解
                        - 安全性上理解
                        - 数据存放的位置
                        - 如何获取数据
            - 请求头
                - content-type
                    - get没有
                    - post有两种
                        - 普通input application/x-www-form-urlencoded
                        - 文件上传 multipart/form-data
            - 请求体
                - get没有，因为get的数据是在url的?后面的查询参数当中(a=1&b=2的形式)
                - post有，在form data当中
        - 响应报文
            - (状态行)响应行
                + 状态码
                    + 404
                        - 缺货 找不到
                    + 200
                        - 有货 数据返回成功的
                    + 500
                        - 店倒闭(服务器挂)
                    + 304
                        - 缓存（指的是get方式）
                        - 以后大家代码检查半天没错，有可能是因为缓存的问题 --> 快捷键
            - 响应头
            - 响应体
        
- http协议应用
    + 我们php文件的默认响应头中的content-type值是：Content-Type: text/html，也就是默认是当成html网页来进行解析的，这个东西也是可以进行修改的
        1. mime可以查每种文件的content-type类型
            - text/html 网页
            - image/jpeg 图片
            - application/json 把文件当成json格式（后面在学ajax的时候，一定要加，不加的话会出错）
        2. 乱码的问题
            - header('content-type:text/html;charset=utf8');
    + 重定向（跳转）
        - 直接跳转
            + header('Location:http://baidu.com');
        - 延迟跳转
            + header('Refresh:3;url=http://baidu.com');
- http是无状态的
    + 会话
    + 无状态 
    + 有状态
    + 保持状态的两种技术(cookie,session)
- 案例
    + https://mail.qq.com
    + https://www.so.com
- cookie的实现原理说明 cookie就是门票、电影票
    + 生活中的例子来理解
        + 第一步、客户拿钱去买票的地方买一张票
        + 第二步、客户手里有票了，去看电影，通过了
    + 登录案例理解
        + 第一步、用户在login.php输入账号和密码，点击登录，服务器接收到这次请求报文(暂时没有cookie相关的头信息)
        + 第二步、服务器验证账号和密码是否是正确的，如果是正确的，就会返回给客户端一个success，同时在响应报文当中设置cookie值（相当于给了用户一张门票）
        + 第三步、用户再去访问data.php这个页面，默认这个页面是不能浏览器（需要权限），但是用户现在的请求报文里面携带了cookie相关信息，用户就允许看这个页面
- 在php中创建cookie并再次体会实现的原理
    + 翻墙去google应用市场去安装
- setcookie函数的参数说明
    + setcookie(key,value) --> 浏览器一关闭，cookie就失效
    + setcookie(key,value,有效期)
        + setcookie('a',1,time()+10);
        + setcookie('a',1,PHP_INT_MAX);
    + setcookie(key,value,time,范围)了解一下就可以
- cookie的删除
    + 删除的两种方式
        - 过期 setcookie(key,value,time()-1)
        - 值为"" setcookie(key,"")
            + 设置的时候传了几个参数，删除的时候也要传几个参数
    + cookie的特点
        1. 4kb左右
        2. 不安全
- 登录案例
    + $GLOBALS['error'] = '用户名或密码错误'
- 用cookie来制作登录案例
    + 以后不会这样做
    + 不安全
    + 一般用于对安全性要求不高的地方，比如像换肤这种
- session的基本介绍
    + 登录(cookie)
        1. 第一步、用户访问login.php,服务器就把用户输入账号和密码和已有的进行匹配，如果匹配上了，在响应头当中设置cookie(门票)
        2. 第二步、用户再次访问main.php,在请求报文的请求头当中携带cookie，服务器检查发现用户有cookie值，就让它访问main.php

    + 登录(session) 
        + 生活中理解
            1. 身份证拿出来，电脑登录一下，把你的信息录到电脑里面，下次去的时候一刷卡，你的信息在电脑里有
        + 登录理解
            1. 第一步、用户访问login.php,服务器就把用户名和密码匹配，如果匹配上，在服务器本地创建一个文件，专门用来存你这个人的信息，同时生成一个唯一的sessionId，我们会把这个sessionId通过cookie的形式在响应头当中给用户
            2. 第二步、用户访问main.php的时候，请求头中有sessionId,通过这
- 总结cookie与session的区别
    + 存储的位置
        - cookie --> 浏览器
        - session --> 服务器
    + 浏览器携带的数据量
        - cookie --> 多
        - session --> 少(只携带session-id)
    + 存储的数据类型
        - cookie --> 只能是字符串
        - session --> 任意类型
    + 安全性
        - cookie --> 低
        - session --> 高
    + 默认的有效路径
        - cookie --> 当前路径及其子路径
        - session --> 整站有效
    + 数据的传输量
        - cookie --> 4kb
        - session --> 无限制
    + 应用
        - cookie --> 换肤
        - session --> 购物车、登录...
- 数据库的基本概念
    + excel与sql对比进行理解.jpg
    + 演示一下用命令行怎么操作数据库
        - 说明默认的几个数据库，千万不要误删，否则数据库必须重新安装
        - 随便演示几行sql命令
    + 要记住的
        1、一个数据库(database，简称db)中可以有很多张表(table)			
        2、一张表是由很多行(row)和很多列(column)组成的			
        3、一行是用来描述一个东西的各方面的信息的，我们称之为记录(record)			
        4、一行中的一列是用来描述某方面的信息的，我们称之为字段(field)			
        5、任何一张表必须有id字段属性			
        6、id字段属性是自增的			
        7、phpStudy中的mysql的默认密码是root
- navicat可视化工具的安装
    + 如果安装失败的话换一个版本多试试
- 使用navicat创建数据库及设计表
    + 引言
        - 对数据库中的表的操作分为两步骤：第一步设计表的结构 第二步在表里面填写数据	
    + 数据类型
        1. 字符串
            - varchar,char
                + varchar不定长
                + char定长
        2. 数字类型
            - tinyint(0-255),int,float
        3. 日期相关
            - datetime
            - date
            - time
    + 字段约束
        - null,not null
        - default
            + 如果是字符中，一定要加引号
        - primary key
        - auto_increment
- 使用navicat对表中的数据进行增删改查
    + 通过删除几个说明一下顺序是乱的，后期我们需要进行排序
    + 我们之前有一个数据,id是3，我们把它删除了，从现在开始，id为3不能用，如果强制把某一个新的数据id设置为3，会报错，提示数据重复
    + 
- 准备工作
    1. 把数据库删了
    2. 导入一个数据库
- 查询语句
    - 通过画图让大家理解，虽然我们用navicat操作起来很方便，但是将来我们要做的是用户一打开淘宝页面，就能看一以数据列表页，点击删除功能，就能把数据删除掉，在用户的角度来看，根本不知道有数据库的存在，更不用说让用户能通过navicat连上数据库，所以真正的操作是：用户打开网页 ---> 网页是动态php代码制作的 --> php去连接数据库,把数据取回来 --> php把取回来的数据转换成二维数组 --> 渲染到页面上来
    - 通过navicat最下面的提示说明规范化的写法是什么样子的（不区分大小写，反引号）
    - buy something from somewhere
    - select * from mytable
    - select id,age from mytable
    - select * from mytable where id = 3
    - select * from mytable where age > 20
    - select * from mytable wehre age > 19 and gender = 0
- 插入语句
    + insert into mytable values(null,'测试',20,0)
    + 如果是查询，返回值是结果集，如果是插入、更新、删除，返回值是影响行数
- 删除
    + delete from mytable where id = 6
    + delete from mytable where id in (5,6)
- 更新
    + update mytable set age = 23,gender = 1 where id = 4
- 排序
    + order by 
        + 默认无序
        + 升序 asc
        + 降序 desc
- limit
- 统计函数
    - select count(*) from mytable
    - select max(age) from mytable
    - select min(age) from mytable
    - select avg(age) from mytable
- php操作数据库
    + mysqli_fetch_array
    + mysqli_fetch_assoc
    + mysqli_fetch_row
- 补充资料
    + 理解http协议.doc


- 扩展(cookie,session,sessionStorage,localStorage)
    + 少量数据安全要求不高 --> cookie
        + 最老牌的存储技术 
        + cookie会随着每次http请求头信息一起发送，无形中增加了网络流量，另外，cookie能存储的数据容量有限，根据浏览器类型不同而不同
    + 大量的数据永久性存 --> localStorage 
        + 哪些数据永远也不需要变?
    + 关掉当前页面数据需要消失
        - 安全性要求高 --> session
        - 安全性要求低 --> sessionStorage
    + IndexDB
        - https://www.jianshu.com/p/105fcdcc3fbb
        - 用来解决localStorage的弊端
            - localStorage 单个domain5M 各个浏览器会有所不同
            - localStorage可以被清掉
    + application cache --> h5 app的离线存储
        - https://www.cnblogs.com/yexiaochai/p/4271834.html
    + 后面几个不用管，用得不多
    + UserData
    + web sql
    + cacheStorage -->并没有形成标准，不要用
- 相关视频
    + https://www.imooc.com/learn/104
    