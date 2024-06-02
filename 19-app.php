<?php
//key()
$Isimler = array("Volkan","Hakan", "Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";
$Sonuc = key($Isimler);
echo "Dizinin göstericisi konumundaki eleman anahtar değer :" . $Sonuc;


$Isimler = array("A1" => array("B1" => "Volkan","Hakan"), "A2" => "Volkan", "A3" => "Hakan", );
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";
$Sonuc = key($Isimler['A1']);
echo "Dizinin göstericisi konumundaki eleman anahtar değer :" . $Sonuc;

//currrent()
$Isimler = array("Volkan","Hakan", "Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";
$Sonuc = current($Isimler);
echo "Dizinin göstericisi konumundaki eleman değeri :" . $Sonuc;

//pos()
$Isimler = array("Hakan", "Onur", array("B1" => "Volkan","Derya"), "Volkan","Hakan", );
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";
$Sonuc = pos($Isimler[2]);
echo "Dizinin göstericisi konumundaki eleman değeri :" . $Sonuc;


//end()
$Isimler = array("Volkan","Hakan", "Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";
$Sonuc = end($Isimler);
echo "Dizinin göstericisinin son konumundaki eleman anahtar değeir :" . $Sonuc;


//next(), prev(), reset()
$Isimler = array("Volkan","Hakan", "Onur","Berat", "Yusuf", "Melih");
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";
$AGostericininAnahtari = key($Isimler);
echo "Dizinin varsayılan gösterici konumundaki anahtarı : ". $AGostericininAnahtari . "<br>";
$AGostericininElemani = current($Isimler);
echo "Dizinin varsayılan gösterici konumundaki elemanı : ". $AGostericininElemani . "<br>";
next($Isimler);
$BGostericininAnahtari = key($Isimler);
echo "Dizinin varsayılan gösterici konumundaki anahtarı : ". $BGostericininAnahtari . "<br>";
$BGostericininElemani = current($Isimler);
echo "Dizinin varsayılan gösterici konumundaki elemanı : ". $BGostericininElemani . "<br>";
prev($Isimler);
$CGostericininAnahtari = key($Isimler);
echo "Dizinin varsayılan gösterici konumundaki anahtarı : ". $CGostericininAnahtari . "<br>";
$CGostericininElemani = current($Isimler);
echo "Dizinin varsayılan gösterici konumundaki elemanı : ". $CGostericininElemani . "<br>";
reset($Isimler);
$DGostericininAnahtari = key($Isimler);
echo "Dizinin varsayılan gösterici konumundaki anahtarı : ". $DGostericininAnahtari . "<br>";
$DGostericininElemani = current($Isimler);
echo "Dizinin varsayılan gösterici konumundaki elemanı : ". $DGostericininElemani . "<br><br>";


//Explode()
$Deger = "Volkan BTK akademi dersleri";
$Sonuc = explode(" ", $Deger);
echo "Metnin ilk hali : " . $Deger . "<br>";
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


$Deger = "Volkan,BTK,akademi,dersleri";
$Sonuc = explode(",", $Deger, 2);
echo "Metnin ilk hali : " . $Deger . "<br>";
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


$Deger = "Volkan,BTK,akademi,dersleri";
$Sonuc = explode(",", $Deger, -1);
echo "Metnin ilk hali : " . $Deger . "<br>";
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//implode
$Isimler = array("Volkan","Hakan", "Onur");
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";
$Sonuc = implode($Isimler);
//$Sonuc = implode(" " ,$Isimler);
//$Sonuc = implode(" Alakent" ,$Isimler);
echo $Sonuc;


//list
$Renkler = array("Siyah", "Beyaz", "Mavi","Kırmızı","Yeşil");
echo"<pre>";
print_r($Renkler);
echo"<pre><br/>";
list($Bir, $Iki, $Uc, $Dort, $Bes) = $Renkler;
echo $Bir . "<br>";
echo $Iki . "<br>";
echo $Uc . "<br>";
echo $Dort . "<br>";
echo $Bes;


$Renkler = array("Siyah", "Beyaz", array("Mavi","Kırmızı"),"Yeşil");
echo"<pre>";
print_r($Renkler);
echo"<pre><br/>";
list($Bir, $Iki, list($Uc,$Dort),$Bes) = $Renkler;
echo $Bir . "<br>";
echo $Iki . "<br>";
echo $Uc . "<br>";
echo $Dort . "<br>";
echo $Bes;
?>