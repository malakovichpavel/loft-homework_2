<?php
echo '<center>' . '<h2>' . "Домашнее задание №2" . '</h2>';

echo "<h3>" . "Задание #1" ."</h3>";
//1.Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
function get_parameters()
{for  ($i=0; $i<func_num_args(); $i++) {
    echo '<p>' .  func_get_arg($i)  . '<p>';
}
    return;
}
echo get_parameters("Терпенье и труд все перетрут. ",  $str2="Глаза страшатся, а руки делают. ", "За все браться - ничего не сделать.");
/*2.Если в функцию передан второй параметр true,
то возвращать (через return) результат в виде одной объединенной строки.*/
function get_parameters2()
{for  ($i=0; $i<func_num_args(); $i++) {
    echo func_get_arg($i);
}
    return;
    $str2=TRUE;
    if ($str2){
        echo  func_get_arg($i);
    }
}
echo get_parameters2("Терпенье и труд все перетрут. ",  $str2="Глаза страшатся, а руки делают. ", "За все браться - ничего не сделать.");

echo "<h3>" . "Задание #2" ."</h3>";
/*1.	Функция должна принимать 2 параметра:
a.	массив чисел;
b.	строку, обозначающую арифметическое действие,
которое нужно выполнить со всеми элементами массива.
2.	Функция должна вывести результат на экран.
3.	Функция должна обрабатывать любой ввод,
в том числе некорректный и выдавать сообщения об этом*/

function ex2() {
    for  ($i=0; $i<func_num_args(); $i++) {
        echo func_get_arg($i) . "<br>";
    }
    return;
}
function asd() {
    return [1,2,4,6];
}
echo ex2($asd, "Сложение заданных чисел ");
$asd=asd();
print_r($asd);
echo "<br>" . "сумма чисел массива = " . array_sum($asd) . "<br>";
/* Вот это условие не понял - Функция должна обрабатывать любой ввод,
в том числе некорректный и выдавать сообщения об этом - ввод чего?*/
$asd=TRUE;
if ($asd){
    echo  "ввод массива корректный ";
}
else  echo  "ввод массива не корректный ";

echo "<h3>" . "Задание #3" ."</h3>";

/*1.	Функция должна принимать переменное число аргументов.
2.	Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие,
которое необходимо выполнить со всеми передаваемыми аргументами.
3.	Остальные аргументы это целые и/или вещественные числа.

Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
Результат: 1 + 2 + 3 + 5.2 = 11.2*/
function ex3() {
    for  ($i=0; $i<func_num_args(); $i++) {
        echo func_get_arg($i) . "<br>";
    }
    return;
}
function asd3() {
    return [1, 2, 3, 5.2];
}
echo ex3("calcEverything(‘+’, 1, 2, 3, 5.2) ", $asd3);
$asd3=asd3();
//print_r($asd3);
echo "Результат: 1 + 2 + 3 + 5.2 =" . array_sum($asd3) . "<br>";

echo "<h3>" . "Задание #4" ."</h3>";

/*1.	Функция должна принимать два параметра – целые числа.
2.	Если в функцию передали 2 целых числа,
то функция должна отобразить таблицу умножения размером со значения параметров,
переданных в функцию. (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8).
Таблица должна быть выполнена с использованием тега <table>
3.	 В остальных случаях выдавать корректную ошибку.*/
function ex4($var1, $var2)
{
    echo "<table><tr>";
    for ($i = 1; $i <= $var1; $i++) {
        for ($j = 1; $j <= $var2; $j++)
            echo "<td>" . ($i * $j) . "</td>";
        if ($i != 10) echo "</tr><tr>";
    };
    echo "</tr></table>" . "<br>";
}
$var1=$var2=8;
if ($var1=$var2) {
    echo ex4($var1, $var2);}
    else  echo "ошибка - такую таблицу создать нельзя.";

echo "<h3>" . "Задание #5" ."</h3>";

/*1.	Написать две функции.
2.	Функция №1 принимает 1 строковый параметр и возвращает true,
если строка является палиндромом*, false в противном случае. Пробелы и регистр не должны учитываться.
3.	Функция №2 выводит сообщение в котором на русском языке оговаривается результат из функции №1*/
function ex5_1() {
    $my_array = array('к', 'и', 'т', 'н', 'а', 'м', 'о', 'р', 'е', 'р', 'о', 'м', 'а', 'н', 'т', 'и', 'к');
// не понял - как разобрать на буквы строку из слов
    $my_string = implode($my_array);
    $my_array_rev = array_reverse($my_array);
    $my_string_rev = implode($my_array_rev);
    if ($my_string = $my_string_rev) {
        echo "true: строка -кит на море романтик- является палиндромом";
    } else echo "false: строка -кит на море романтик- не является палиндромом";
   /* function ex5_1()
    {
        if ($my_string = $my_string_rev) {
            echo "true: строка -кит на море романтик- является палиндромом";
        } else echo "false: строка -кит на море романтик- не является палиндромом";
    }*/
   // вторая функция не хочет работать
}
echo ex5_1();

echo "<h3>" . "Задание #6" ."</h3>";

/*1.	Выведите информацию о текущей дате в формате 31.12.2016 23:59
2.	Выведите unixtime время соответствующее 24.02.2016 00:00:00.*/

echo 'Текущее дата/время: '.date('d.m.Y H:i',time()).'<br>';

$date = '2016-02-24 00:00:00';
echo 'unixtime время: '.$timestamp = strtotime($date);
//date('d-m-Y H:i:s',$UnixTime)

echo "<h3>" . "Задание #7" ."</h3>";

/*1.	Дана строка: “Карл у Клары украл Кораллы”. удалить из этой строки все заглавные буквы “К”.
2.	Дана строка “Две бутылки лимонада”. Заменить “Две”, на “Три”. По желанию дополнить задание.*/

$str7 = "Карл у Клары украл Кораллы";
$str7 = mb_strtolower($str7);
echo $str7;

$rawstring = "Две бутылки лимонада.";
$str_1 = str_replace("Две", "Три", $rawstring);

echo "<br>". $str_1;

echo "<h3>" . "Задание #8" ."</h3>";
/*1.	Напишите функцию, которая с помощью регулярных выражений,
получит информацию о переданных RX пакетах из переданной строки:
2.	Пример строки: “RX packets:950381 errors:0 dropped:0 overruns:0 frame:0. “
3.	Если кол-во пакетов более 1000, то выдавать сообщение: “Сеть есть”
4.	Если в переданной в функцию строке есть “:)”, то нарисовать смайл в
 ASCII и не выдавать сообщение из пункта №3. Смайл должен храниться в отдельной функции*/

$str8 = "RX packets: 950381 errors:0 dropped:0 overruns:0 frame:0.";
echo $str8 . "<br>";//выводим строку
$keywords = preg_split("/[ s,]+/", $str8);//разбиваем на массив
/*if (print_r($keywords[3])=":)") {               Пробую вывести смайлик, но что-то не получается.
    echo "                  Cb" . "<br>";
    echo "          db         `8b" . "<br>";
    echo "          VP           8b" . "<br>";
    echo "             C8888D    88D" . "<br>";
    echo "          db          8b" . "<br>";
    echo "          VP        .8P" . "<br>";
    echo "                  CP" . "<br>";
}

else*/
 print_r($keywords[3]);
if ($keywords[3]>1000) {echo "<br>" . 'Сеть есть';}



echo "<h3> " . "Задание #9" ."</h3>";
/*1.	Создайте средствами ОС файл test.txt и поместите в него текст “Hello, world”
2.	Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.*/

$myfile = fopen("test.txt", "w") or die("Unable to open file!");
$txt = "Hello, world\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("test.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("test.txt"));
fclose($myfile);

echo "<h3>" . "Задание #10" ."</h3>";
//1.	Создайте файл anothertest.txt средствами PHP. Поместите в него текст - “Hello again!”
$myfile10 = fopen("test10.txt", "w") or die("Unable to open file!");
$txt10 = "Hello again!\n";
fwrite($myfile10, $txt10);
fclose($myfile10);

$myfile10 = fopen("test10.txt", "r") or die("Unable to open file!");
echo fread($myfile10,filesize("test10.txt"));
fclose($myfile10);

echo '</center>';

 ?>