
<?php

function drawImage($number) {
    settype($number, "integer");
     
     for ($x=1; $x <= $number; $x++) { 
         for ($y=1; $y <= $number; $y++) { 
             if ($x == 1 && $y == 1){
             	echo "&nbsp*&nbsp";
             }else if($x == 1 && $y == $number){
             	echo "&nbsp*&nbsp";
             }else if($x == $number && $y == 1){
             	echo "&nbsp*&nbsp";
             }else if($x == $number && $y == $number){
             	echo "&nbsp*&nbsp";
             }else if($x == round($number/2) || $y == round($number/2)){
             	echo "&nbsp*&nbsp";
             }else{
             	echo "&nbsp=&nbsp";
             }
         }
         ?>
         	<br	>
         <?php
    }
}

$number = 7;
drawImage($number);
?>
