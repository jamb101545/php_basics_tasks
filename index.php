<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 001 01.02.17
 * Time: 22:27
 */

$strana = array('польша' => 'варшава', 'украина' => 'киев', 'чехия' => 'прага', 'сша' => 'вашингтон');
echo '<pre>';
print_r($strana);
echo '</pre>';



$book1 = array('стиль'=>'стиль1','автор'=>'автор1','название'=>'название1','цена'=>'цена1');
$book2 = array('стиль'=>'стиль2','автор'=>'автор2','название'=>'название2','цена'=>'цена2');
$book3 = array('стиль'=>'стиль3','автор'=>'автор3','название'=>'название3','цена'=>'цена3');
$produkt = array('товар 1' => $book1 ,'товар 2' =>$book2 ,'товар 3' =>$book3 );
// output
echo '<pre>';
print_r($produkt);
echo '</pre>';

define('POLAND', 'PL');
define('USA', 'US');
define('CANADA', 'CA');
$const_arr = array(POLAND,USA,CANADA);
echo '<pre>';
print_r($const_arr);
echo '</pre>';



$hello = 'fgh';
$fgh = 'dog';
$dog = 'caat';
$myVar = 'hey';
$caat ='fig';
$fig = 'да ну нафиг';

// name of the variable same as value of $myVar
$hey = 'bro';

// name of the variable same as value of $hey
$bro = 'Hello, variable ) ';


echo $$$$$hello; // Hello, variable )


