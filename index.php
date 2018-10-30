<!DOCTYPE html>
<html>
<body>
<?php
   function minArray($arr) {
       $min = $arr[0];
       for ($i = 1; $i < count ($arr); $i++) {
           if ($arr[$i] < $min) {
               $min = $arr[$i ];
           }
       }
       return $min;
   }
   $arr = [4, 7, 9, -34, -7, 24, 6];
   echo(minArray($arr));
?>
</body>
</html>