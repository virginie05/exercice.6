<?php
 function order($array) {
   sort($array);
   return $array;
 }

 function glue($array) {
   $lines = implode(', ', $array);
   return $lines;
 }

 $langage = array("HTML","CSS","Javascript","PHP");

 $result = order($langage);
 foreach($result as $val) {
     echo $val;
 }
 echo '<br>';
 echo '<br>';
 $stringConcat = glue($langage);
     echo $stringConcat;
?>
