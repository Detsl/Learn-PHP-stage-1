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

$c = "Variable a ,is now";
$d = "Variable b ,is now";

$a = ++$a;
$b = --$b;

$e= "$c $a \n";
$f= "$d $b";

echo "$e <p></p> $f" ;



//использовал другие переменные для красивого вывода

?>
