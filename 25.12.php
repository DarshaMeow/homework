<?php
$str5 = "1.png";
echo $str5.'<br>';
var_dump((boolean)strpos($str5, ".png"));
$str5 = "2.html";
echo $str5.'<br>';
var_dump((boolean)strpos($str5, ".png"));



//1
echo '1 Задание <br>';
$str = "Hello, world!";
countChar($str);
echo '<br>';
$str = "Cat";
countChar($str);

function countChar($string){
    $count = mb_strlen($string);
    if($count > 5) {
        echo mb_substr($string, 0, 5)."...";
    }else {
        echo $string;
    }
}

echo '<br>';

//2
echo '2 Задание<br>';
$str = 'I believe I can fly';
echo str_ireplace(array("a", "b", "c"), array("1", "2", "3"), $str);
echo '<br>';

//3
echo '3 Задание<br>';
$str = 'abc abc abc';
echo strripos($str, "b", 0);
echo '<br>';

//4
echo '4 Задание<br>';
$str = 'html css php';
$arr = explode(' ', $str);
var_dump($arr);
echo '<br>';

//5
echo '5 Задание<br>';
$date1 = "17-11-1994";
$date2 = "16-11-1997";
echo (strtotime ($date2)-strtotime ($date1))/(60*60*24);

?>