<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 002 02.02.17
 * Time: 21:10
 */
$day= 21;

switch ($day) {
    case ($day == 6) or ($day == 7);
        echo "Это выходной день";
        break;
    case ($day > 1 and $day < 7);
        echo "Это рабочий день";
        break;
    default: echo "Неизвестный день";
}