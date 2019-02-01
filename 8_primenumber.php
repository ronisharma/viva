<?php
$num = 7;
$test = 0;
for($i=2;$i<=($num/2);$i++)
{
	if($num%$i==0)
	{
		$test++;
		if($test==1){
			break;
		}
		
	}
	
}
if($test==0){
	print 'number is prime';
}else{
	print 'number is not prime';
}
?>