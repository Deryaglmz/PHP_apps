<?php

//include
include("app1.php");
echo"Satır";


//include_once
include_once("app1.php");
echo"Satır";
include_once("app1.php");


//require
require("app1.php");
echo"Satır";


//require_once
require_once("app1.php");
echo"Satır";
require_once("app1.php");


//basename
$Dosya = "app1.php";
$Bul = basename($Dosya);
echo  "basename değeri: " . $Bul . "<br>";


//dirname
$Dosya = "Masaüstü/PHP/app1.php";
$Bul = dirname($Dosya);
echo  "dirname değeri: " . $Bul . "<br>";

//pathinfo
$Dosya = "Masaüstü/PHP/app1.php";
$Bul = pathinfo($Dosya);
echo  "dirname değeri: " ."<br>";
echo "<pre>";
print_r($Bul);
echo "<pre>";


//realpath
$Dosya = "Masaüstü/PHP/app1.php";
$Bul = realpath($Dosya);
echo  "realpath değeri: " . $Bul . "<br>";


//filetype
$Dosya = "app1.php";
$Sor = filetype($Dosya);
echo  "filetype değeri: " . $Sor . "<br>";

//fileowner
$Dosya = "app1.php";
$Sor = fileowner($Dosya);
echo  "sahibi : " . $Sor . "<br>";


//filegroup
$Dosya = "app1.php";
$Sor = filegroup($Dosya);
echo  "sahibinin grubu : " . $Sor . "<br>";


//fileperms
$Dosya = "app1.php";
$Sor = fileperms($Dosya);
echo  "dosya erişim izni : " . $Sor . "<br>";


//filesize
$Dosya = "app1.php";
$Sor = filesize($Dosya);
echo  "dosya boyutu : " . $Sor . "<br>";


//filectime
$Dosya = "app1.php";
$Sor = filectime($Dosya);
echo  "dosya oluşturma tarihi zaman damgası : " . $Sor . "<br>";
echo  "dosya oluşturma tarihi : " . date("d.m.Y H:i:s", $Sor) . "<br>";


//fileatime
$Dosya = "app1.php";
$Sor = fileatime($Dosya);
echo  "dosya son erişim tarihi zaman damgası : " . $Sor . "<br>";
echo  "dosya son erişim tarihi : " . date("d.m.Y H:i:s", $Sor) . "<br>";


//stat
$Dosyam = "app1.php";
$Islem = stat($Dosyam);
echo  "<pre>";
print_r($Islem);
echo  "<pre>". "<br>";


//clearstatcache
$Dosyam = "app1.php";
$Islem = stat($Dosyam);
echo  "<pre>";
print_r($Islem);
echo  "<pre>". "<br>";
clearstatcache();


//touch
$Dosya = "BTK.PHP";
touch($Dosya);


//touch
$Dosya = "BTK.rar";
touch($Dosya);


//unlink
$Dosya = "BTK.rar";
$Sil = unlink($Dosya);
if($Sil=="1"){
    echo "Dosya başarıyla silindi";
}else{
    echo "Dosya silme işlemi sırasında hata oluştu";
}


//copy
$Dosya = "BTK.rar";
$KopyaDosya = "Eğitim.rar";
$Kopyala = copy($Dosya, $KopyaDosya);
if($Kopyala=="1"){
    echo "Dosya başarıyla kopyalandı";
}else{
    echo "Dosya kopyalama işlemi sırasında hata oluştu";
}


//rename
$Dosya = "BTK.rar";
$YeniDosya = "Eğitim.rar";
$Isim = rename($Dosya, $YeniDosya);
if($Isim=="1"){
    echo "Dosya adı başarıyla değiştirildi";
}else{
    echo "Dosya adı değiştirme işlemi sırasında hata oluştu";
}


//chmod
$Dosya = "app1.php";
chmod($Dosya,0777);
$Izınler = fileperms($Dosya);
echo "Erişim izin değeri : " . $Izınler. "<br>";
$Bicimlendir = substr(sprintf("%o" , $Izınler),-4);
echo "Erişim izin değeri : " . $Bicimlendir. "<br>";


//mkdir
$Dizin = "app1.php";
mkdir($Dizin);


//rmdir
$Dizin = "app1.php";
rmdir($Dizin);
?>