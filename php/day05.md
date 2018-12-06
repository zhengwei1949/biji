

phpStudy内置了一个客户端：命令行

创建一个数据库(mybase)
创建一个表(mytable) -- 描述一个学生信息
+ 编号 id 主键（唯一标识这一条信息），就像人的身份证一样 int类型 (钥匙) 一定要自增（把自动递增勾上）
+ 名字 name varchar
+ 性别 gender
+ 年纪 age
+ 生日 birthday
    + date 年月日
    + time 时分秒
    + datetime 年月日时分秒



客户端(浏览器) 网页服务器(apache,iis,tomcat)

- navicat可视化工具的安装
- 使用navicat创建数据库及设计表
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






-- buy something from somewhere 
select * from mytable 
select id,age from mytable
select * from mytable where id = 3
select * from mytable where age > 20
select * from mytable where age > 19 and gender = 0


创建数据库
创建表(设计表的结构+往表当中填写数据)

数据库尽量提高数据存储效率 后端考虑

顺序是乱的（正常的）

排序

数据库操作是很危险
备份


1. 把数据库删了
2. 导入一个数据库


http协议补充
- 设置文件类型(content-type)
    + header('Content-Type:text/html;charset=utf8');
    + header('Content-Type:application/json;charset=utf8');
- 跳转
    + header('Location:地址')
    + header('refresh:时间;url=地址')
cookie,session
    + 会话
    + 会话默认是无状态
    + 想让会话保持有状态有两种技术：cookie,session
        - cookie
            + 应用场景：安全要求不高（换肤）
            + setcookie(key,value,time)
            + $_COOKIE
            + 删除
                1. 过期 setcookie(key,value,time()-1)
                2. setcookie(key,"")
        - session
            + session_start()
            + $_SESSION

        - cookie和session
            + 数据量
                - cooke只能存4kb左右
                - session理论上没有限制
            + 安全性
                - cookie不安全
                - session安全
            + 存的位置
                - cookie 浏览器端
                - session 服务器端
数据库
    + id 主键 自增
    + 字符串一定要加引号
    + 编码是Utf8


- session值的设置及实现原理的回顾
    + 开启 session_start()
    + 设置 $_SESSION 
    + session
        1. 数据存在服务器端的一个session文件里面
        2. session会把文件名作为sessionID使用cookie返回给客户端
        3. 更加的安全
- 使用session完成登录案例
- 数据库的基本概念
    + sql server
    + excel也是一种数据库
    + 两部分组成

cookie实现登录的原理
1. 第一步、用户访问login.php,服务器就把用户输入账号和密码和已有的进行匹配，如果匹配上了，在响应头当中设置cookie(门票)
2. 第二步、用户再次访问main.php,在请求报文的请求头当中携带cookie，服务器检查发现用户有cookie值，就让它访问main.php

excel与sql对比进行理解.jpg

创建一个数据库(mybase)
创建一个表(mytable) -- 描述一个学生信息
+ 编号 id 主键（唯一标识这一条信息），就像人的身份证一样 int类型 (钥匙) 一定要自增（把自动递增勾上）
+ 名字 name varchar
+ 性别 gender
+ 年纪 age
+ 生日 birthday
    + date 年月日
    + time 时分秒
    + datetime 年月日时分秒
字段约束
- null,not null
- default
    + 如果是字符串，一定要加引号
- primary key
- auto_increment



1. session由二部分组成：session_id(请求报文请求头里面通过cookie来存的)+sesion文件(服务器上)
2. session_id和文件名字一一对应的
3. session可以存任意类型的数据

相当安全 数据可以存很多
不是在请求头