<?php

	$content	= $page->text();
	$words		= str_word_count(strip_tags($content));
	$m 		= floor($words / 200);
	$s 		= floor($words % 200 / (200 / 60));
	//$estimate 	= $m . ' ' . ($m == 0 ? 'minuten' : '') . ($m == 1 ? 'minuut' : '') . ($m >= 2 ? 'minuten' : '') . ', ' . $s . ' seconde' . ($s == 1 ? '' : 'n');
	$estimate 	= $m . ' minute' . ($m == 1 ? '' : 's') . ', ' . $s . ' second' . ($s == 1 ? '' : 's');

?>

Estimated reading time: <?php echo $estimate; ?>