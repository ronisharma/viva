<?php
$num = 407;
$sum = 0;
$x=$num;
while ($x!=0) {
	$remind = $x%10;
	$sum = $sum + ($remind*$remind*$remind);
	$x = $x/10;
}
if($sum == $num){
	print 'This is Armstrong Number';
}else{
	print 'This is not a Armstrong Number';
}
?>