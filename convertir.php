<?php 
   $conv=$_POST["conv"];

   if (isset($_POST["moneda"])) {
       define("cantidad", $_POST["moneda"]);
   }else{

   }
   echo "Son";
   if ($conv==1) {
       echo cantidad*50;
       echo "Peso Dominicano";
   }else{
       echo cantidad/50;
       echo "dolares";
   }
?>