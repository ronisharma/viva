<?php
if(isset($_POST['sub']))
 {     $j=0;
   $factor=array(); 
   $num=$_POST['nm1'];
   for($i=1;$i<=$num;$i++)  
       {
          if($num%$i==0)
            { 
             $j++;
             $factor[$j]=$i;
            }
       }
}
 ?>
 
 <table>
 <form name="frm" method="post" action="">
 <tr> <td>Number:</td> <td><input type="text" name="nm1" /></td> </tr>
 <tr><td></td><td><input type="submit" name="sub" /></td>
 <td><center><span>  
  <?php   
    if(isset($_POST['sub']))  
    { 
       echo "Factors are :";for($i=1;$i<=count($factor);$i++) 
       {          echo $factor[$i].",";

        }
     }       
  ?>   
   </span></center></td></tr>
 </form>
 </table>

 <hr>

 <?php
$num =10;
for($i=1;$i<=$num;$i++){
  if($num%$i==0)
  {
    print $i;
    print '<br>';
  }
}
?>
