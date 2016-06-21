<p>Lesson #1</p>
<p></p>
<?php
$a = 5;
$b = '05';
var_dump($a == $b); // Почему true?
// при приведение к типу b = 5, следовательно а=b//
var_dump((int)'012345'); // Почему 12345?
// как и в предыдущем примере при приведение к типу "число", строка 012345 равна 12345
var_dump((float)123.0 === (int)123.0); // Почему false?
// потому как инт будет целым числом т.е 123 а флоат так и останется с плавающей точкой 123.0//
var_dump((int)0 === (int)'hello, world'); // Почему true?
//Если строка начинается с верного числового значения, будет использовано это значение. Иначе значением будет 0 (ноль).//


?>
    <p></p>
    <p></p>
<?php

$a = 1;
$b = 2;

$a = $b + $a;
$b = $a - $b;
$a = $a - $b;

echo $a;
?>
<br>
<?  echo $b;
?>




    <h1>Lesson #2</h1>
    <p>First exemple</p>
<?php
/**
 * Первый пример пример условия: переменная а = 5, если а больше 5, выводим :"а больше 5"!, добавлю сразу else
 * ,проверяю, посдтавляя нуль(ноль).
 */
 $a = 0;
 if ( $a > 0 ) {
     echo 'a mutch more than a 0';
 }
 else {
     echo 'a less or same 0 ';
 }
?>
<br>
<p>Second exemple</p>

<?php
/**
 * Рассмотрим простую задачу: необходимо вывести фразу «а больше 0», «a меньше 0», или «а равно 0»
при указанном значении $a.(попробуем все три варианта значения переменной 1.-1. 0
 */
$a  =   0   ;
if ($a  >   0){
    echo 'a mutch   more    than    a   0';
}

else if ($a <  0){
    echo 'a less than a 0';
}
else {
    echo 'a the same as 0';
}
?>
<br>
<p>Third exemple</p>
<?php
/**
 * Объединение условий
В рамках одного условия мы можем проверять сразу несколько вложенный условий:
 */
$a = true;
$b = true;

if ($a && $b){

}
//
$c = 4;
$d = 5;

if ( $c > $d || $c > 0 ){

}
//
?>
<h2>Тернарный оператор</h2>
<?php
/**
 * В данном примере переменной $a присвоится значение переменной $b в случае, если $b > $c. В
противном случае: $a = $c.
 * Тернарный оператор работает почти также как и оператор if,
 * но при использовании тернарного оператора, мы вместо ключевых слов пишем ?(if) и :(else) .
 */
$b = 5;
$c = 6;
$a  =   $b  >   $c  ?   $b  :   $c;
echo $a;
?>
<h2>Оператор Switch</h2>

<?php
/**
 *
 */
define('SAY_HELLO', 1);
define('SAY_GOODBYE', 2);
define('SAY_WHATSUP', 3);
$name = 'Alex';
$action = 3;
switch ($action) {
    case SAY_HELLO:
        echo 'Hello, ' . $name;
        break;
    case SAY_GOODBYE:
        echo 'Goodbye, ' . $name;
        break;
    case SAY_WHATSUP:
        echo 'How are you, ' . $name;
        break;
    default:
        echo 'What should i say?';
        break;
}
?>
<h2>Функции</h2>

<?php
/**
 *
 */
$name = 'Alex';
$string = 'Hello, ' . $name;
$otherString = str_replace('Hello', 'Goodbye', $string);
echo $otherString;
?>

<p>exemple</p>
<?php
/**
 *
 */
$str = 'Test';
$b = print_r($str, true);
echo $b;
?>
<h2>Написание собственной функции</h2>
<?php
/**
 * @param $name
 */
function sayHello($name,$secondName, $stdout = true)
{
    $string = 'Hello, ' . $name . ' ' . $secondName;
    if ($stdout) {
        echo $string;
    } else {
        return $string;
    }
}
$name2 = 'Maxim';
sayHello('Morkov','Tsamov');
?>
<h2>Область видимости</h2>

<?php
/**
 * Чтобы получить доступ к глобальной переменной внутри функции, воспользуйтесь командой global:
 */
$name = 'Alex';
function sayHello2()
{
    global $name;
    echo $name;
}
sayHello2();
?>
<h2>Передача аргументов по ссылке</h2>
<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 21.06.16
 * Time: 18:16
 */
echo 'Hello world!';
?>


<?php
/**
 * функция отсчёта
 */
function countdown($n){
    if ($n > 0) {
        echo "$n</br> ";
        $n--;
        countdown ($n);
    } elseif ($n == 0){
        echo "$n</br> ";
    }

}
countdown(50);

<?php

/**
 * ///// ФУНКЦИЯ ПРИВЕТСТВИЯ /////////
 */

    function hello()
    {
        $h = date(H); // определяем какой сейчас час
        // от 5-и до 11-и утра, return возвращает Доброе утро
        if ($h>=5 && $h<=11)  return "Доброе утро.  ";
        // от 12-и до 16-и Здравствуйте
        if ($h>=12 && $h<=16) return "Здравствуйте. ";
        // от 17-и до 24-х часов Добрый вечер
        if ($h>=17 && $h<=24) return "Добрый вечер. ";
        // от 0 до 4-х утра Доброй ночи.
        if ($h>=0 && $h<=4)   return "Доброй ночи.  ";
    }

       //  выводим на монитор приветствие
       echo hello();

?>
