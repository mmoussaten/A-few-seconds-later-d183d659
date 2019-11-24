<?php

   $time = readline();
   $timevalid = strpos($time, "s");

       if ($timevalid === false) {
       echo "Geen tijd gevonden";
     } else {
       echo $time . " Seconden";
     }