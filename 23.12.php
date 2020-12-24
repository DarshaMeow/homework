<?php
$arr = array();
$countElem = $_POST['countElem'];
$string_array = array(
    1 => array("Анапа", "Оренбург", "Челябинск"),
    2 => array("Киев", "Анадырь", "Днепр"),
    3 => array("Алупка", "Брест")
);
for($i = 0;$i<$countElem;$i++){
    $arr[$i] = mt_rand(1, 100);
}
echo '1 Задание<br>';
for ($i = 0; $i < count($arr); $i++){
    if($arr[$i] % 2 === 0){
        echo "<b>$arr[$i]</b><br>";
    }else {
        echo $arr[$i].'<br>';
    }
}
echo '2 Задание<br>';
foreach ($string_array as $cities){
    foreach ($cities as $city){
        if($city[0] === 'А'){
            echo $city.", ";
        }
    }
}
echo '3 Задание<br>';
$number_array = array(
    1 =>array(3, 2, 10, 15),
    2 =>array(3, 5, 1, 45, 22),
    3 =>array(3, 4, 10, 15, 12, 34),
    4 =>array(3, 2, 1, 15)
);
$count = 0;
$countAll = 0;
var_dump($number_array);
foreach ($number_array as $item){
    $count = count($item);
    $countAll += $count;
    echo("Количество внутри измерения: $count<br>");
}
echo("Общее число элементов: $countAll");