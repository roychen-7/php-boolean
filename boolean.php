<?php

error_reporting(0);

$a = array();
$true_arr = array(
	'-1'	=> -1, 
	'1'	=> 1, 
	'2'	=> 2
);

$false_arr = array(
	'null'	=>  null, 
	'空字符串'	=> '', 
	'下标不存在'	=> $a['xx'], 
	'数字0'	=> 0, 
	'字符0'	=>  '0', 
	'空数组'	=>  array(), 
	'0为除数'	=> (10 / 0)
);

$zero_arr = array(
	'null'	=> null, 
	'下标不存在'	=> $a['xx'], 
	'空字符串'	=> ''
);
$one_arr = array(
	'浮点1.0'	=> 1.0, 
	'字符1.0'	=> '1.0'
);

out($true_arr, true);
out($false_arr, false);
out($zero_arr, 0);
out($one_arr, 1);

function out($arr, $target) {
	echo $target."\r\n\r\n";
	foreach ($arr as $key => $v) {
		echo $key . ': ';
		var_dump($v == $target);
	}
	echo "=================\r\n\r\n";
}

?>
