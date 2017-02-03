<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 002 02.02.17
 * Time: 21:58
 */
$s = 70; //km
$t = 1; //часы
$kn_ch = $s/$t;
$m_s = $s/$t/3600*1000;

echo "Скорость $kn_ch км/час";
echo "<br>";
echo "Скорость $m_s м/c";
