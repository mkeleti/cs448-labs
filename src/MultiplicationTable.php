<?php

function GenerateTable($x, $y)
{
   $values = array(array());
   for ($i = 0; $i <= $x; $i++) {
      for ($j = 0; $j <= $y; $j++) {
         $values[$i][$j] = ($i + 1) * ($j + 1);
      }
   }

   echo "<table>";
   for ($i = 0; $i < $x; $i++) {
      echo "<tr>";
      for ($j = 0; $j < $y; $j++) {
         echo "<td style='font-size: 7px'>";
         echo $values[$i][$j];
         echo "</td>";
      }
      echo "</tr>";
   }
   echo "</table>";
}
GenerateTable(100,100);
?>
