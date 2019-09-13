


<?php // CPC Часть 1.1
$a = 3;
$b = $a;
echo $b;
?>
<hr>
<?php // CPC Часть 1.2
$a = 10;
$b = 2;
echo $a + $b / ($a + $b / 2) .  "<br>";
echo $a - $b / ($a + $b / 2). "<br>";
echo $a * $b / ($a + $b / 2). "<br>";
echo $a / $b / ($a + $b / 2). "<br>";
?>
<hr>
<?php // CPC Часть 1.3
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;
?>
<hr>
<?php // CPC Часть 1.4
$a = 10;
$b = 2;
$c = 5;
echo ($a + $b + $c) / (($a + $b + $c) / 3)
?>
<hr>
<?php // CPC Часть 1.5
$a = 17;
$b = 10;
$c = $a - $b;
$d = 17;
echo $result = $c + $d;
?>
<hr>
<?php // CPC Часть 2.1
$text = "Привет, Мир!";
echo $text . ' ' . "Моя первая программа!";
?>
<hr>
<?php // CPC Часть 2.2
$text1='Привет';
$text2='Мир!';
echo $text1 . ' ' . $text2;
?>
<hr>
<?php // CPC Часть 2.3
$name = "Денис";
echo 'Привет' . ' ' .$name;
$text = "<br>" . 'Новый текст';
?>
<hr>
<?php // CPC Часть 2.4
$age = 19;
$height = 180;
echo "Мой возраст: " . $age . ' Мой рост: ' . $height;
?>
<hr>
<?php // СРС Часть 2.5
$text = 'abcde';
echo $text{0}. " " . $text{2}. " " . $text{4} ;
?>
<hr>
<?php // СРС Часть 3.1
$arr = null;
$arr = array("a","b","c");
var_dump($arr);
echo "<br>" . $arr{0} . " " . $arr{1}. " ". $arr{2};
?>
<hr>
<?php // СРС Часть 3.2
$arr = null;
$arr = array("a","b","c");
echo $arr{0} . " " . $arr{1}. " ". $arr{2};
?>
<hr>
<?php // СРС Часть 3.3
$arr = null;
$arr = array("a","b","c", "d");
echo $arr{0} . "+". $arr{1}. "," . $arr{2} . "+" . $arr{3}. ",". $arr{0} . "-". $arr{1}. ",". $arr{0} . "/". $arr{1};
?>
<hr>
<?php // СРС Часть 3.4
$arr = null;
$arr = array(1 => 2,5,3,9);
echo $result = $arr{1}*$arr{2}+$arr{1}*$arr{4};
?>
<hr>
<?php // СРС Часть 3.5
$arr = null;
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;
?>
<hr>
<?php // СРС Часть 4.1
$arr = null;
$arr[a] =  11;
$arr[b] =  20;
$arr[c] =  30;
echo $arr{c} . " Сумма: ". array_sum($arr);
?>
<hr>
<?php // СРС Часть 4.2
$arr = null;
$arr[q3] =  12;
$arr[r3] =  23;
$arr[f3] =  34;
echo " Сумма: ". array_sum($arr);
?>
<hr>
<?php // СРС Часть 4.3
$arr = null;
$arr["Коля"] = 1000;
$arr["Вася"] = 500;
$arr["Петя"] = 200;
echo "Петя: " .$arr["Петя"] . " Коля: " . $arr["Коля"];
?>
<hr>
<?php // СРС Часть 4.4
$arr = null;
$arr[1] = "Январь";
$arr[2] = "Февраль";
$arr[3] = "Март";
$arr[4] = "Апрель";
$arr[5] = "Май";
$arr[6] = "Июнь";
$arr[7] = "Июль";
$arr[8] = "Август";
$arr[9] = "Сентябрь";
$arr[10] = "Октябрь";
$arr[11] = "Ноябрь";
$arr[12] = "Декабрь";
echo "Первый: ". $arr[1]. " Последний: " . $arr[12]
?>
<hr>
<?php // СРС Часть 4.5
$day[1] = "Понедельник";
$day[2] = "Вторник";
$day[3] = "Среда";
$day[4] = "Четврег";
$day[5] = "Пятница";
$day[6] = "Суббота";
$day[7] = "Воскресенье";
echo $day[3];   
?>
























