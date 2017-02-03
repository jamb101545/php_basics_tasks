<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 002 02.02.17
 * Time: 21:10
 */
$name = "Alex";
$age = "38";
echo " Меня зовут: $name";
echo "<br>";

echo " Мне $age лет.";
echo "<br>";


if ($age>0) {
    if ($age >= 18 and $age < 59) {
        echo " Вам еще работать и работать";
    } else {
        if ($age < 18 and $age > 0) {
            echo " Скоро работать";
        } else {
            echo " Пора на пенсию";
        }
    }
}
else {
    echo " Неизвестный возраст";
}

echo "<br>";
echo "<br>";
