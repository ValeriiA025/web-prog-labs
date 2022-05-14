<?php
require_once('config.php');

$choose = 5;

switch ( $choose )
{
case 1:
$result= 'зима';
break;
case 2:
$result= 'зима';
break;
case 3:
$result= 'весна';
break;
case 4:
$result= 'весна';
break;
case 5:
$result= 'весна';
break;
case 6:
$result= 'лето';
break;
case 7:
$result= 'лето';
break;
case 8:
$result= 'лето';
break;
case 9:
$result= 'осень';
break;
case 10:
$result= 'осень';
break;
case 11:
$result= 'осень';
break;
case 12:
$result= 'зима';
break;
}


$choosing = 1;
$A = 12;
$C = 0;
$H = 0;
$S = 0;

switch (  $choosing )
{
case 1:
    $C = pow($A,2);
    $H = $C/2;
    $S = $C*$H/2;
break;
case 2:
    $A = sqrt($C);
    $H = $C/2;
    $S = $C*$H/2;
break;
case 3:
    $C = $H*2;
    $A = sqrt($C);
    $S = $C*$H/2;
break;
case 4:
    $A = sqrt(sqrt($S*2));
    $C = $A*$A;
    $H = $C/2;
break;
}



$tpl_vars=array('cond' => 'Дано номер місяця - ціле число в діапазоні 1-12 (1 - січень, 2 -
лютий і т. д.). Вивести назву відповідної пори року ( «зима», «весна», «літо»,
«осінь»). Вивести умову задачі, початкові значення та результуючі.', 'choose' => $choose, 'res' => $result,
'cond1' => 'Елементи рівнобедреного прямокутного трикутника пронумеровані в
такий спосіб: 1 - катет a, 2 - гіпотенуза c = a^2, 3 - висота h, опущена на
гіпотенузу (h = c / 2), 4 - площа S = c · h / 2. Дано номер одного з цих елементів і
його значення. Вивести значення інших
елементів даного трикутника (в тому ж порядку). Вивести умову задачі,
початкові значення та результуючі.', 'A' => $A, 'C' =>  $C , 'H' => $H , 'S' => $S);
$tpl_file='lab1-5.tmpl';
require_once('tpl_config.php');
?>