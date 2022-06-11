<?php
//membuat variable
// $namavariable = nilaivariable; 
$name = "rafiza";
$umur = 18;
$berat = 68.5;

//menampilkan variable

echo "Name : " . $name;
echo "<br>Age : " . $umur;
echo "<br>Weight : " . $berat;

//menampilkan variable sistem

echo "<br>Dokument Root : " . $_SERVER['DOCUMENT_ROOT'];
echo "<br>Nama File : " . $_SERVER['PHP_SELF'];

//menampilkan variable constant
// Define('namavariable', nilaivariable)

Define('PHI', 3.14);
$r = 10;
$luas = PHI * $r;

echo "<br>luas lingkaran : $luas";