<?php 

if(php_sapi_name() !== 'cli') exit; // Runs from the command line only

$alpha = range('a','z');

$flag = '';

$flag_prefix = [16, 9, 3, 15, 3, 20, 6];
$flag_body = [20, 8, 5, 14, 21, 13, 2, 5, 18, 19, 13, 1, 19, 15, 14];


foreach($flag_prefix as $l){
	$flag .= $alpha[$l-1];
}
$flag .= '{';

foreach($flag_body as $l){
	$flag .= $alpha[$l-1];
}
$flag .= '}';
$flag = strtoupper($flag);
echo $flag;