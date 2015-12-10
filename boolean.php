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
	'字符0.0'	=> '0.0', 
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

echo "true\r\n";
foreach ($true_arr as $v) {
	echo $v . ': ';
	var_dump($v == true);
}
echo "=================\r\n\r\n";


echo "false\r\n";
foreach ($false_arr as $key => $v) {
	echo $key . ': ';
	var_dump($v == false);
}
echo "=================\r\n\r\n";

echo "zero\r\n";
foreach ($zero_arr as $key => $v) {
	echo $key . ': ';
	var_dump($v == 0);
}
echo "=================\r\n\r\n";

echo "one\r\n";
foreach ($one_arr as $key => $v) {
	echo $key . ': ';
	var_dump($v == 0);
}

?>
