<?php
$num = array(10,20,30,40,50,100);
$total_num = count($num);
$max_value = $num[0];
for($i=1;$i<$total_num;$i++)
{
	error_reporting(0);
	if($num[$i] > $max_value)
	{
		$max_value = $num[$i];
	}
}
print $max_value;
?>

<hr>

<?php

$numbers=array(12,23,45,20,5,6,34,17,9,56);
$length=count($numbers);
$min=$numbers[0];
for($i=1;$i<$length;$i++)
  {
      if($numbers[$i]<$min)
        {
          $min=$numbers[$i];
        }
  }
echo "The smallest number is ".$min;


?>