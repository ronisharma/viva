<?php
$first = 0;
$second = 1;
echo $first.','.$second.',';
for ($i=0; $i < 10; $i++) { 
	$third = $first + $second;
	print $third.',';
	$first = $second;
	$second = $third;
}
?>