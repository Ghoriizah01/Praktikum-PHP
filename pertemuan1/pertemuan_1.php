<?php
  $nama = 'ghorizah';
  $umur = 20;
  $berat = 50;

  echo 'Nama saya '.$nama.' umur saya '.$umur.' berat saya '.$berat;
  echo "<br />";
  echo "<h1 style='color: red'>Nama saya $nama, umur saya $umur, berat saya $berat<h1>";
  echo "<br />";

  // Variabel sistem
  echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
  echo "<br />";

  // Variabel konstan
  // adalah variabel yang tidak bisa diubah nilainya
  define('makanan', 'sushi');
  echo makanan;
?>