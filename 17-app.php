<?php
$Isimler = array("Volkan", "Serhat","Levent", "Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
$DizininElemanSayisi = count($Isimler);
echo "Dizi içerisindeki eleman sayısı : " . $DizininElemanSayisi;


$Isimler = array("İsim1" => "Volkan", "Serhat","Levent");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
$DizininElemanSayisi = sizeof($Isimler);
echo "Dizi içerisindeki eleman sayısı : " . $DizininElemanSayisi;


$Isimler = array("Volkan", "Serhat",array("Derya", "Hale"),"Levent", "Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
$DizininElemanSayisi = count($Isimler);
echo "Dizi içerisindeki eleman sayısı : " . $DizininElemanSayisi;


$Isimler = array("Volkan", "Serhat",array("Derya", "Hale"),"Levent", "Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
$DizininElemanSayisi = count($Isimler, COUNT_RECURSIVE);
echo "Dizi içerisindeki eleman sayısı : " . $DizininElemanSayisi;


$Isimler = array("Volkan", "Serhat",array("Derya" ,array("Berat", "Selim"), "Hale"),"Levent", "Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
$DizininElemanSayisi = count($Isimler, COUNT_RECURSIVE);
echo "Dizi içerisindeki eleman sayısı : " . $DizininElemanSayisi;


$Isimler = array("Volkan", "Serhat",array("Derya" ,array("Berat", "Selim"), "Hale"),"Levent", "Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
$DizininElemanSayisi = count($Isimler[2]);
echo "Dizi içerisindeki eleman sayısı : " . $DizininElemanSayisi;


$Isimler = array("Volkan", "Serhat",array("Derya" ,array("Berat", "Selim"), "Hale"),"Levent", "Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
$DizininElemanSayisi = count($Isimler[2], COUNT_RECURSIVE);
echo "Dizi içerisindeki eleman sayısı : " . $DizininElemanSayisi;
?>