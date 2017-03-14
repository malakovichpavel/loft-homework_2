<?php
echo '<center>' . '<h2>' . "Домашнее задание №2" . '</h2>';

echo "<h3>" . "Задание #1" ."</h3>";

function asd($var1, $var2=false)
{
    if ($var2=true) {
        for  ($i=0; $i<=2; $i++) {
            echo $var1[$i] . ' ';
            }
    }
    else  {
        echo '<p>' .  $var1 . '<p>';
        return;
    }
    /*Если в функцию передан второй параметр true,
то возвращать (через return) результат в виде одной объединенной строки
    echo "<pre>";
    var_dump($var1);
    var_dump($var2);
   вот этом кусочке неверное for  ($i=0; $i<=2; $i++) {
            echo $var1[$i] . ' ';}
    Здесь нужно склеить всё в одну строку без echo и потом эту строку уже склеенную сделать return
    у тебя используется echo внутри цикла, а нужно использовать return и вне цикла*/
}
asd(array('слово', 'второе', 'третье'), true);

echo "<h3>" . "Задание #2" ."</h3>";

function asd1($var1, $var2)
{
   /* echo "<pre>";
    var_dump($var1);
    var_dump($var2);*/
    $arrlength = count($var1);
    $result=$var1[0];
    switch ($var2)
    {
        case "+": for ($i = 1; $i < $arrlength; $i++)
        {
          if (is_numeric($var1[$i]))
          {
              $result+=$var1[$i]; //$i = $i + 1;
          }
        }
        echo "сумма чисел = " . $result;
        break;

        case "-": for ($i = 1; $i < $arrlength; $i++)
        {
            if (is_numeric($var1[$i]))
            {
                $result-=$var1[$i];
            }
        }
            echo "разность чисел = " . $result;
            break;

        case "*": for ($i = 1; $i < $arrlength; $i++)
        {
            if (is_numeric($var1[$i]))
            {
                $result*=$var1[$i];
            }
        }
            echo "произведение чисел = " . $result;
            break;

        case "/": for ($i = 1; $i < $arrlength; $i++)
        {
            if ($var1[$i]==0)// чтоб не было нуля - на ноль делить нельзя
            {
                echo "Один из параметров массива =0, но на 0 делить нельзя, - поменяйте параметр. 
                Деление пройдёт без данного параметра." . "<br>";
            } else if (is_numeric($var1[$i]))
            {
                $result/=$var1[$i];
            }
        }
            echo "частное чисел = " . $result;
            break;
        default: echo "непонятное значение";
    }
}
asd1(array(1,2,0,6), "/");

echo "<h3>" . "Задание #3" ."</h3>";

function asd3()
{
    $var1=func_get_arg(0);
    $var2=array_slice(func_get_args(),1);
    /*echo $var1;
    var_dump($var2);*/
    $arrlength = count($var2);
    $result=$var2[0];
    switch ($var1)
    {
        case "+": for ($i = 1; $i < $arrlength; $i++)
        {
            if (is_numeric($var2[$i]))
            {
                $result+=$var2[$i];
            }
        }
            echo "сумма чисел = " . $result;
            break;

        case "-": for ($i = 1; $i < $arrlength; $i++)
        {
            if (is_numeric($var2[$i]))
            {
                $result-=$var2[$i];
            }
        }
            echo "разность чисел = " . $result;
            break;

        case "*": for ($i = 1; $i < $arrlength; $i++)
        {
            if (is_numeric($var2[$i]))
            {
                $result*=$var2[$i];
            }
        }
            echo "произведение чисел = " . $result;
            break;

        case "/": for ($i = 1; $i < $arrlength; $i++)
        {
            if ($var2[$i]==0)// чтоб не было нуля - на ноль делить нельзя
            {
                echo "Один из параметров массива =0, но на 0 делить нельзя, - поменяйте параметр. 
                Деление пройдёт без данного параметра." . "<br>";
            } else if (is_numeric($var2[$i]))
            {
                $result/=$var2[$i];
            }
        }
            echo "частное чисел = " . $result;
            break;
        default: echo "непонятное значение";
    }


}
asd3('+', 1, 5, 3, 5.2);

echo "<h3>" . "Задание #4" ."</h3>";

function ex4($var1, $var2)
{
    if (is_int($var1))
    {
        if (is_int($var2))
        {
            echo "<table><tr>";
            for ($i = 1; $i <= $var1; $i++) {
                for ($j = 1; $j <= $var2; $j++)
                    echo "<td>" . ($i * $j) . "</td>";
                if ($i != 10) echo "</tr><tr>";
            };
            echo "</tr></table>" . "<br>";
        } else echo "Второй аргумент массива не является числом. Измените на целое число.";
    } else echo "Первый аргумент массива не является числом. Измените на целое число.";

}

echo ex4(2, 5.1);

echo "<h3>" . "Задание #5" ."</h3>";
//Тут должно быть две функции. Сейчас только одна и код вне функции
function p1() {
    $string5 = "Кит на море романтик";
    echo $string5 . "<br>";
    $string5 = mb_strtolower($string5); //нижний регистр
    $string5 = str_replace(' ', '', $string5); // убираем пробелы
    print_r($string5);
    echo "<br>";
    $chars = preg_split('//u', $string5, null, PREG_SPLIT_NO_EMPTY); //разрываем по буквам
    print_r($chars);
    echo "<br>";
    $my_array_rev = array_reverse($chars); //разворачиваем строку
}
p1 ($my_array_rev);
function p2()
    {
    if ($chars=$my_array_rev=TRUE) {
        echo "TRUE - Строка является палиндромом" . "<br>";
    } else echo "FALSE - Строка не является палиндромом" . "<br>";
}
p2 ($chars);

echo "<h3>" . "Задание #6" ."</h3>";

echo 'Текущее дата/время: '.date('d.m.Y H:i',time()).'<br>';

$date = '2016-02-24 00:00:00';
echo 'unixtime время: '.strtotime($date);
//date('d-m-Y H:i:s',$UnixTime)


echo "<h3>" . "Задание #7" ."</h3>";

$str7 = "Карл у Клары украл Кораллы";
$str7 = str_replace("К", " ", $str7);
echo $str7;

$rawstring = "Две бутылки лимонада.";
$str_1 = str_replace("Две", "Три", $rawstring);

echo "<br>". $str_1;

echo "<h3>" . "Задание #8" ."</h3>";

function smile()
{
    echo "                  Cb" . "<br>";
    echo "          db         `8b" . "<br>";
    echo "          VP           8b" . "<br>";
    echo "             C8888D    88D" . "<br>";
    echo "          db          8b" . "<br>";
    echo "          VP        .8P" . "<br>";
    echo "                  CP" . "<br>";
}
$str8 = "RX packets: 950381 errors:0 dropped:0 overruns:0 frame:0.";
echo $str8 . "<br>"; //выводим строку
$keywords = preg_split("/[ s,]+/", $str8); //разбиваем на массив
print_r($keywords);
echo "<br>";
print_r($keywords[3]);
echo "<br>";
$sml=' :) ';
for  ($i=0; $i<=9; $i++) {
    if ($keywords[$i] == $sml) {
        smile();
    }
}
if ($keywords[3] > 1000) {
    echo 'Сеть есть';
}

echo "<h3> " . "Задание #9" ."</h3>";


$myfile = fopen("test.txt", "w") or die("Unable to open file!");
$txt = "Hello, world\n";
fwrite($myfile, $txt);
fclose($myfile);

/*$myfile = fopen("test.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("test.txt"));
fclose($myfile);*/

echo "<h3>" . "Задание #10" ."</h3>";

$myfile10 = fopen("test10.txt", "w") or die("Unable to open file!");
$txt10 = "Hello again!\n";
fwrite($myfile10, $txt10);
fclose($myfile10);

$myfile10 = fopen("test10.txt", "r") or die("Unable to open file!");
echo fread($myfile10,filesize("test10.txt"));
fclose($myfile10);

echo '</center>';





?>