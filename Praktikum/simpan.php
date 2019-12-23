<?php

$NIM = $_POST["NIM"];
  $NAMA    = $_POST["NAMA"];
  $TAHUN_LAHIR   = $_POST["TAHUN_LAHIR"];
  $AWAL = 1;
  $UMUR = 2019 - $TAHUN_LAHIR;

  echo "NIM = $NIM <br> NAMA : $NAMA <br> UMUR : $UMUR<br><br>";

  while ( $UMUR > $AWAL) {
      if ($UMUR % 2 == 0) {
          echo "$UMUR<br>";
      }
      $UMUR--;
  }
?>
