<?php
    function getBigger($a, $b){
      $a = (int)$a;
      $b = (int)$b;
      if ($a > $b){
        return $a;
      } else {
        return $b;
      }
    }
   
    ?>