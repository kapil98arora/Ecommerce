<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*$a=43;
$b="2";
sum($a,$b);
function sum($a,$b){

echo $a+$b;
}
for($key=1;$key<=10;$key++)
{
 $t=2*$key;
    echo "$t<br/>";
    
}
$array_name=array();
for($key=1;$key<=10;$key++)
{
$array_name[$key]=2*$key;
}
for($key=1;$key<=10;$key++)
{
echo "$array_name[$key]<br/>";
}
echo count($array_name)."<br/>";
$marks=array(1,2,3,4,5,6);
foreach($marks as $i){
    echo $i.",";
}*/
$_SESSION[kapil_id]="kapil98arora@gmail.com";
echo "Session variable is set";
?>