<?php

for($i = 1; $i<=5; $i++){

            for($j = 1; $j<=5; $j++){

               if($i == 1 || $i == 5){

                   echo $i;

               }

               else if($j == 1 || $j == 5){

                   echo "*";

               }

               else {

                   echo "&nbsp;&nbsp;";

               }

                

            }

            echo "<br/>";

		}

?>

<hr>

<?php

$k = 0;

for ($i=1; $i<=5; $i++)

{

    $k += $i;

    for ($j=1; $j<=$k; $j++)

    {   

       echo "*";

    }

        for ($z=0; $z<$i; $z++)

            {

                echo "0";

            }       

    echo "</br>";    

}

?>