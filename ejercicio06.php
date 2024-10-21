<?php
 echo "<P> Reto numero 6 <P>";
 $ropa = array ("Camisa", "Pantalon", "Cinturon");

sort($ropa);
 foreach($ropa as $elemento){
      echo $elemento . " <BR>";
  }

   array_push($ropa,"Gorra");
   array_push($ropa,"Calcetines");
   echo "<P> Ropa en forma descendente <P>";

   rsort($ropa);
   foreach($ropa as $elemento){
   	 echo $elemento . " <BR> ";
   } 
  ?>