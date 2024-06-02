<?php

//compact()
$isim = "Volkan";
$soyisim = "Alakent";
$dogumtarihi = "1980";
$Bilgiler = array("isim", "soyisim","dogumtarihi");
$Sonuc = compact($Bilgiler);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


$isim = "Volkan";
$soyisim = "Alakent";
$dogumtarihi = "1980";
$yas= 38;
$Sonuc = compact("isim","soyisim","dogumtarihi","yas");
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_keys
$Isimler = array("Volkan" => "PHP","Hakan" => "HTML","Onur" => "CSS", "Serkan" => "JS");
$Islem = array_keys($Isimler);
echo"<pre>";
print_r($Islem);
echo"<pre><br/>";


//array_values
$Isimler = array("Volkan" => "PHP","Hakan" => "HTML","Onur" => "CSS", "Serkan" => "JS");
$Islem = array_values($Isimler);
//$Islem = array_values($Isimler, "HTML");
echo"<pre>";
print_r($Islem);
echo"<pre><br/>";


//array_pad
$Isimler = array("Volkan","Hakan","Onur", "Serkan");
$Islem = array_pad($Isimler,10,"BTK");
echo"<pre>";
print_r($Islem);
echo"<pre><br/>";


//array_search
$Isimler = array("A1" => "Volkan","A2" => "Hakan","A3" => "Onur", "A4" => "Serkan");
$Islem = array_search("Volkan",$Isimler);
echo "Aranan elemanın anahtar degeri : " . $Islem . "<br>";


//array_key_exists
$Isimler = array("A1" => "Volkan","A2" => "Hakan","A3" => "Onur", "A4" => "Serkan");
$Islem = array_key_exists("A1",$Isimler);
echo "Sonuc : " . $Islem. "<br>";

//min
$Sayilar = array(8, -13, 45 ,87 ,5, 7 );
$Islem = min($Sayilar);
echo "İlgili dizini içindeki en küçük değer : " . $Islem. "<br>";


//min
$Sayilar = array(8, -13, 45 ,87 ,5, 7 );
$Islem = max($Sayilar);
echo "İlgili dizini içindeki en büyük değer : " . $Islem;


//array_count_values
$Sayilar = array(8, 13, 45 ,87 ,5, 7, 3,8 ,6 ,8, 54, 45 ,5,  );
$Islem = array_count_values($Sayilar);
echo"<pre>";
print_r($Islem);
echo"<pre><br/>";


//array_flip
$Degerler = array("Anahtar1" => "Deger1", "Anahtar2" => "Deger2","Anahtar3" => "Deger3",);
$YerDegistir = array_flip($Degerler);
echo"<pre>";
print_r($YerDegistir);
echo"<pre><br/>";


//array_change_key_case
$Isimler = array("IsimBir" => "Volkan", "Isimİki" => "Hakan","IsimUc" => "Onur","IsimDort" => "Levent");
$Sonuc = array_change_key_case($Isimler, CASE_UPPER);
echo"<pre>";
print_r($Sonuc);
echo"<pre><br/>";


//array_sum , array_product
$Sayilar = array(8, 13, 45.4 ,87 ,5, 7, 3.6,8);
$Islem1 = array_sum($Sayilar);
$Islem2 = array_product($Sayilar);
echo "Rakamların toplamı : " . $Islem1 . "<br>";
echo "Rakamların çarpımı : " . $Islem2 . "<br>";


//array_rand
$Isimler = array("Volkan","Hakan","Onur", "Serkan" ,"Berat", "Serhat");
$Islem = array_rand($Isimler,2);
echo"<pre>";
print_r($Islem);
echo"<pre><br/>";
echo $Isimler[$Islem[0]]. "<br>";
echo $Isimler[$Islem[1]] . "<br>";


//array_reverse
$Isimler = array("Volkan","Hakan","Berat", "Serhat");
$Islem = array_reverse($Isimler,);
echo"<pre>";
print_r($Islem);
echo"<pre><br/>";


//shuffle
$Isimler = array("Volkan","Hakan","Berat", "Serhat");
$Islem = shuffle($Isimler,);
echo"<pre>";
print_r($Islem);
echo"<pre><br/>";


//ksort
$Isimler = array("IsimBir" => "Volkan", "Isimİki" => "Hakan","IsimUc" => "Onur","IsimDort" => "Levent");
$Sonuc = ksort($Isimler);
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";


//krsort
$Isimler = array("IsimBir" => "Volkan", "Isimİki" => "Hakan","IsimUc" => "Onur","IsimDort" => "Levent");
$Sonuc = krsort($Isimler);
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";


//sort
$Isimler = array("IsimBir" => "Volkan", "Isimİki" => "Hakan","IsimUc" => "Onur","IsimDort" => "Levent");
$Sonuc = sort($Isimler);
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";


//rsort
$Isimler = array("IsimBir" => "Volkan", "Isimİki" => "Hakan","IsimUc" => "Onur","IsimDort" => "Levent");
$Sonuc = rsort($Isimler);
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";


//asort
$Isimler = array("IsimBir" => "Volkan", "Isimİki" => "Hakan","IsimUc" => "Onur","IsimDort" => "Levent");
$Sonuc = asort($Isimler);
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";


//arsort
$Isimler = array("IsimBir" => "Volkan", "Isimİki" => "Hakan","IsimUc" => "Onur","IsimDort" => "Levent");
$Sonuc = arsort($Isimler);
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";


//natsort, natcasesort
$ResimlerBir = array("Resim345","Resim35","Resim45","Resim5","Resim32","Resim10");
$ResimlerIki = array("Resim345","Resim35","Resim45","Resim5","Resim32","Resim10");
sort($ResimlerBir);
echo "Standart sıralama : " . "<br>";
echo"<pre>";
print_r($ResimlerBir);
echo"<pre><br/>";
natsort($ResimlerIki);
echo "Doğal sıralama : " . "<br>";
echo"<pre>";
print_r($ResimlerIki);
echo"<pre><br/>";
natcasesort($ResimlerIki);
echo "Doğal sıralama : " . "<br>";
echo"<pre>";
print_r($ResimlerIki);
echo"<pre><br/>";


//array_multisort
$Isimler = array("Volkan","Hakan","Berat", "Serhat");
//$Islem = array_multisort($Isimler);
$Islem = array_multisort($Isimler, SORT_REGULAR);
echo"<pre>";
print_r($Isimler);
echo"<pre><br/>";
?>