<?php

$baseMemory = memory_get_usage();
$now = time();

$count = 0;

for ($i = 0; $i < 5 * 10000 * 10000; $i++) {
	if ($i === true) {
		$count++;
	}
}

var_dump('===');
var_dump(memory_get_usage() - $baseMemory);
var_dump(time() - $now);


$baseMemory = memory_get_usage();
$now = time();

$count = 0;

for ($i = 0; $i < 5 * 10000 * 10000; $i++) {
	if ($i == true) {
		$count++;
	}
}

var_dump('==');
var_dump(memory_get_usage() - $baseMemory);
var_dump(time() - $now);

?>
