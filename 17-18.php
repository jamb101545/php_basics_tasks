<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 002 02.02.17
 * Time: 22:38
 */
$a = '78';
$b = 78;

if ($a==$b){
    echo "равно";
}
else {
    echo "НЕ равно";
};
echo '<br>';
if ($a===$b){
    echo "эквивалентно";
}
else {
    echo "НЕ эквивалентно";
};
echo '<br>';
var_dump($a,$b);
echo '<br>'.'boolval(20) - '; //если >0 всегда 1 TRUE
echo boolval(20);
echo '<br> '.'boolval(0) - '; // если =<0 то null FALSE
echo boolval(0);
echo '<br>'.'boolval(-20) - ';
echo boolval(-20);