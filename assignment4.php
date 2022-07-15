<?php
echo " <table border =1 style ='border-collaps: collaps'>";
for($i=2; $i<=10; $i++){
    echo "<tr> \n";
    for( $j=2; $j<=10; $j++){
       $result= $i * $j;
       echo "<td> $result <td> \n"; 
    }
    echo "</tr>";

}
echo "</table>";
     
   
     
    



