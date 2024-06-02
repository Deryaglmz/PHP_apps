<?php
$Isimler = array("Volkan", "Serhat");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
array_unshift($Isimler,"Levent", "Kerem");
echo"<pre>";
print_r($Isimler);
echo"<pre>";


$Isimler = array("Volkan", "Serhat");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
array_unshift($Isimler,"Levent", "Kerem");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
array_unshift($Isimler,"Ümit", "Berat");
echo"<pre>";
print_r($Isimler);
echo"<pre>";


$Isimler = array("Volkan", "Serhat");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
$Islem = array_unshift($Isimler,"Levent", "Kerem" ,"Aykut");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
echo"Islem isimli değişkenin içerdiği veri : " . $Islem;


$Isimler = array("Volkan", "Serhat",array("Derya","Aslı"),"Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
array_unshift($Isimler[2],"Levent", "Kerem");
echo"<pre>";
print_r($Isimler);
echo"<pre>";


$Isimler = array("Volkan", "Serhat",array("Derya","Aslı"),"Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
$Islem = array_unshift($Isimler[2],"Levent", "Kerem" ,"Aykut");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
echo"Islem isimli değişkenin içerisindeki 2 anahtarına sahip dizini içerdiği veri : " . $Islem;


$Isimler = array("Volkan", "Serhat");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
array_push($Isimler,"Levent", "Kerem");
echo"<pre>";
print_r($Isimler);
echo"<pre>";


$Isimler = array("Volkan", "Serhat");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
array_push($Isimler,"Levent", "Kerem");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
array_push($Isimler,"Ümit", "Berat");
echo"<pre>";
print_r($Isimler);
echo"<pre>";


$Isimler = array("Volkan", "Serhat",array("Derya","Aslı"),"Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
$Islem = array_push($Isimler[2],"Levent", "Kerem" ,"Aykut");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
echo"Islem isimli değişkenin içerisindeki 2 anahtarına sahip dizini içerdiği veri : " . $Islem;


$Isimler = array("Volkan", "Serhat");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
array_shift($Isimler);
echo"<pre>";
print_r($Isimler);
echo"<pre>";


$Isimler = array("Volkan", "Serhat", "Serkan", "Levent");
echo"<pre>";
print_r($Isimler);
echo"<pre>";

$Sil = array_shift($Isimler);
echo"<pre>";
print_r($Isimler);
echo"<pre>";
echo"Silinene elemanın değeri : " . $Sil;


$Isimler = array("Volkan", "Serhat");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
array_pop($Isimler);
echo"<pre>";
print_r($Isimler);
echo"<pre>";


$Isimler = array("Volkan", "Serhat", "Serkan", "Levent");
echo"<pre>";
print_r($Isimler);
echo"<pre>";
array_shift($Isimler);
array_pop($Isimler);
echo"<pre>";
print_r($Isimler);
echo"<pre>";

?>