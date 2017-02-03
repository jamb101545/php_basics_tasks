<?php
/* 1-й комментарий
ногострочный
 */
$string = 'test string';
$prn_f = 'printf -%s';
echo "echo - $string".'<br>'; // однострочный комментарий
print("print - ".$string.'<br>');
printf($prn_f,$string);
# еще комментарий
echo <<<HTML
<br>
<div>Heredoc -  test string </div>

HTML;
