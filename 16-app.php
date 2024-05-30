<?php

$Isimler = array("Volkan", "Hakan", "Onur");
echo "<pre>";
print_r($Isimler);
echo "</pre><br>";


$Isimler = array("Volkan", "Hakan", "Onur");
echo "<pre>";
print_r($Isimler);
echo "</pre><br>";
echo $Isimler[0] . "<br/>";
echo $Isimler[1] . "<br/>";
echo $Isimler[2] . "<br/>";


$Egitim = array("BTK" => "Volkan", "PHPDersi" => "BTK");
echo "<pre>";
print_r($Egitim);
echo "</pre><br>";
echo $Egitim["BTK"] . "<br/>";
echo $Egitim["PHPDersi"] . "<br/>";


$Egitim2 = array("Renk" => "Mavi", "Sehpa", "Arac" => "Gemi", "Televizyon", "Isim" => "Volkan");
echo "<pre>";
print_r($Egitim2);
echo "</pre><br>";
echo $Egitim2["Renk"] . "<br/>";
echo $Egitim2[0] . "<br/>";
echo $Egitim2["Arac"] . "<br/>";
echo $Egitim2[1] . "<br/>";
echo $Egitim2["Isim"] . "<br/>";

$Isimler2 = ["Volkan", "Hakan", "Onur"];
echo "<pre>";
print_r($Isimler2);
echo "</pre><br>";


define("DEGERLER", array("Volkan", "Hakan", "Onur"));
echo "<pre>";
print_r(DEGERLER);
echo "</pre>";
echo DEGERLER[0] . "<br/>";
echo DEGERLER[1] . "<br/>";
echo DEGERLER[2] . "<br/>";


const DEGERLER_CONST = array("Volkan", "Hakan", "Onur");
echo "<pre>";
print_r(DEGERLER_CONST);
echo "</pre>";
$Isimler3[] = "Volkan";
$Isimler3[] = "Hakan";
$Isimler3[] = "Onur";
echo "<pre>";
print_r($Isimler3);
echo "</pre>";


$Isim = "Volkan";
$Soyisim = "Alakent";
define("ESYA", "Masa");
define("ARAC", "Vapur");
const RENK = "Mavi";
const DIL = "PHP";
$DEGERLER_MIXED = array($Isim, "Soyadi" => $Soyisim, ESYA, ARAC, RENK, DIL, "Sinema");
echo "<pre>";
print_r($DEGERLER_MIXED);
echo "</pre>";


$DEGER = array();
$DEGER = "Volkan";
$DEGER = "Onur";
echo "<pre>";
print_r($DEGER);
echo "</pre>";
// echo $DEGER[0];


$dene = array("Volkan", "Hakan", "Onur");
$dene[] = "Serkan";
$dene[] = "Ümit";
$dene[] = "Yaşar";
echo "<pre>";
print_r($dene);
echo "</pre>";


$Isimler4 = array("Volkan", "Hakan", "Onur");
$Isimler4[2] = "Berat";
echo "<pre>";
print_r($Isimler4);
echo "</pre>";


$Isimler5 = array("Volkan", "Hakan", "Onur");
echo "<pre>";
print_r($Isimler5);
echo "</pre>";
$Deger = $Isimler5;
$Deger[2] = "Berat";
echo "<pre>";
print_r($Deger);
echo "</pre><br/>";


$Isimler6 = array("DegerBir" => "Volkan", "DegerIki" => "Hakan", "DegerUc" => "Onur");
$renkler = array("Bir" => "Mavi", "Iki" => "Beyaz", "Uc" => "Siyah");
echo "<pre>";
print_r($Isimler6);
echo "</pre><br>";
echo "<pre>";
print_r($renkler);
echo "</pre><br>";

// Dizileri birleştirme
$Sonuc = array_merge($Isimler6, $renkler);
echo "<pre>";
print_r($Sonuc);
echo "</pre><br>";

echo $Sonuc["DegerBir"] . "<br/>";
echo $Sonuc["DegerIki"] . "<br/>";
echo $Sonuc["DegerUc"] . "<br/>";
echo $Sonuc["Bir"] . "<br/>";
echo $Sonuc["Iki"] . "<br/>";
echo $Sonuc["Uc"] . "<br/>";

//çok boyutlu diziler
$Degerler = array("DegerA" => "Volkan", "Hakan","DiziA" => array("Mavi", "Renk" => "Kırmızı","Sarı", "Siyah", "DiziB" => array("Masa", "Esya1" => "Sandalye","Sehpa")), "Onur","Serkan");
echo "<pre>";
print_r($Degerler);
echo "</pre><br>";

echo $Degerler["DegerA"] . "<br/>";
echo $Degerler[0] . "<br/>";
echo $Degerler["DiziA"]["Renk"] . "<br/>";
echo $Degerler["DiziA"][1] . "<br/>";
echo $Degerler["DiziA"][2] . "<br/>";
echo $Degerler["DiziA"]["DiziB"][0] . "<br/>";
echo $Degerler["DiziA"]["DiziB"]["Esya1"] . "<br/>";
echo $Degerler["DiziA"]["DiziB"][1] . "<br/>";
echo $Degerler[1] . "<br/>";
echo $Degerler[2] . "<br/>";
?>
