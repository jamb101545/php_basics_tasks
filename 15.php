<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 002 02.02.17
 * Time: 22:09
 */
$a = 6;
$b = -23;

$operator ='/'; // '-' '/' '*' '%'

switch ($operator) {
    case ($operator == '+');
        echo $a+$b;
        break;
    case ($operator == '-');
        echo $a-$b;
        break;
    case ($operator == '/')and ($b<>0);
        echo $a/$b;
        break;
    case ($operator == '*');
        echo $a*$b;
        break;
    case ($operator == '%')and ($b<>0);
        echo $a%$b;
        break;

    default: echo "На 0 делить нельзя";
}


