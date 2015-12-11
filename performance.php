<?php

function compare($num) {
	$baseMemory = memory_get_usage();
	$now = time();

	for ($i = 0; $i < 5 * 10000 * 10000; $i++) {
		$num($i);
	}

	var_dump($num === 'compare2' ? '==' : '===');
	var_dump(memory_get_usage() - $baseMemory);
	var_dump(time() - $now);
}

function compare2($i) {
	$count = 0;

	if ($i == true) {
		$count++;
	}
}

function compare3($i) {
	$count = 0;

	if ($i === true) {
		$count++;
	}
}

compare('compare2');
compare('compare3');

?>
