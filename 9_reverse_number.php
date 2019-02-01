<?php
$num = 12345;
while($num >= 1){
	$rev = $num%10;
	$num = $num/10;
	print $rev;
}
?>