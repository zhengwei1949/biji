- 查询语句
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