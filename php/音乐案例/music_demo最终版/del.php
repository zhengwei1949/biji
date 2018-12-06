<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    // echo $id;
    $data = file_get_contents('music.json');
    $dataArr = json_decode($data,true);
    // print_r($dataArr);
    foreach($dataArr as $key=>$value){
        if($id == $value['id']){
            array_splice($dataArr,$key,1);
        }
    }
    // print_r($dataArr);
    file_put_contents('music.json',json_encode($dataArr));
    echo '<script>location.href="list.php"</script>';
}
?>