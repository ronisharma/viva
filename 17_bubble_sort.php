<?php

$numbers=array(12,23,45,20,5,6,34,17,9,56);
$total = count($numbers);

for ($i=1; $i < $total-1; $i++) { 
  for ($j=1; $j < $total-$i-1; $j++) { 

    if($numbers[$j] > $numbers[$j+1]){
      $swap = $numbers[$j];
      $numbers[$j]=$numbers[$j+1];
      $numbers[$j+1]=$swap;
    }

  }
}

for($i=1;$i<$total;$i++)
{
  print $numbers[$i];
  print ',';
}
?>