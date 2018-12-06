<?php
$str = file_get_contents('fruit.txt');
$arr = explode("\n",$str);//注意一定要是双引号
$result = [];
foreach($arr as $value){
    $result[] = explode("|",$value);
}
?>

<?php foreach($result as $value){ ?>
<li>
    <img src="<?php echo $value[1]; ?>" alt="">
    <a href="detail.php?id=<?php echo $value[0]; ?>"><?php echo $value[2]; ?></a>
</li>
<?php } ?>