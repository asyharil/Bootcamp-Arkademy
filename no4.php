
<?php

function hitungKembalian($harga, $uang) {
    $limaratus=0;
    $seribu=0;
    $duaribu=0;
    $limaribu=0;
    $sepuluhribu=0;
    $duapuluhribu=0;
    $limapuluhribu=0;
    
    $kembalian = $uang - $harga;
     while($kembalian!=0){
        if ($kembalian>=50000) {
            $kembalian = $kembalian - 50000;
            $limapuluhribu = $limapuluhribu +1;
			
        }elseif ($kembalian>=20000) {
            $kembalian = $kembalian - 20000;
            $duapuluhribu = $duapuluhribu + 1;
        }
        elseif ($kembalian>=10000) {
            $kembalian = $kembalian - 10000;
            $sepuluhribu = $sepuluhribu + 1;
        }
        elseif ($kembalian>=5000) {
            $kembalian = $kembalian - 5000;
            $limaribu = $limaribu + 1;
        }
        elseif ($kembalian>=2000) {
            $kembalian = $kembalian - 2000;
            $duaribu = $duaribu + 1;
        }
        elseif ($kembalian>=1000) {
            $kembalian = $kembalian - 1000;
            $seribu = $seribu + 1;
        }
        elseif ($kembalian>=500) {
            $kembalian = $kembalian - 500;
            $limaratus = $limaratus + 1;
        }
     }

     if ($limapuluhribu!=0) {
         echo $limapuluhribu . " x 50000"; ?><br><?php
     }
     if ($duapuluhribu!=0) {
         echo $duapuluhribu . " x 20000"; ?><br><?php
     }
     if ($sepuluhribu!=0) {
         echo $sepuluhribu . " x 10000"; ?><br><?php
     }
     if ($limaribu!=0) {
         echo $limaribu . " x 5000"; ?><br><?php
     }
     if ($duaribu!=0) {
         echo $duaribu . " x 2000"; ?><br><?php
     }
     if ($seribu!=0) {
         echo $seribu . " x 1000"; ?><br><?php
     }
     if ($limaratus!=0) {
         echo $limaratus . " x 500"; ?><br><?php
     }
}

//Pembayaran
$uang = 50000;
$harga = 15500;
hitungKembalian($harga, $uang);

?>
