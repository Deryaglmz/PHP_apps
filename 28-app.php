<?php

//toplama
$DegerBir = 10;
$DegerIki = 5;
$Sonuc = $DegerBir + $DegerIki;
echo $DegerBir . " + " . $DegerIki . " = " . $Sonuc . "<br>";


//çıkarma
$Sonuc = 100 - 20;
echo  "100 - 20 = ". $Sonuc. "<br>";


//çarpma
$Deger = 8;
echo $Deger . " x 10 =" . "<br>";
$Deger *= 10;
echo $Deger;


//bölme
$Deger = 100;
$EkDeger = 5;
echo $Deger . " / " . $EkDeger . " = ". "<br>";
$Deger /= $EkDeger;
echo $Deger;


//modül
$Sonuc = 125 % 14;
echo "125 % 14 =  " .  $Sonuc. "<br>";


echo (5 + (300 - 55)) * (4 / 100);


//arttırma
$Sayi = 10;
echo $Sayi .  "<br>";
echo $Sayi++ .  "<br>";
echo $Sayi . "<br>";


//azaltma
$Sayi = 10;
echo $Sayi .  "<br>";
echo $Sayi-- .  "<br>";
echo $Sayi . "<br>";


$Sayi = 10;
echo $Sayi .  "<br>";
--$Sayi.  "<br>";
echo $Sayi . "<br>";


//ceil()
$Deger =ceil(8.11);
echo $Deger;

//floor
$Deger = 8.01;
$Yuvarla = floor($Deger);
echo $Yuvarla;


//round
$Deger = 6.5;
$Yuvarla = round($Deger);
echo $Yuvarla;


//number_format
$Sayi = 865.654;
echo " Sayının orjinal hali : " . $Sayi . "<br>";
$Formatla = number_format($Sayi,2);
echo " Sayının formatlanmış hali : " . $Formatla . "<br>";


//min
$Rakamlar = array(5, 6, 9, 54, 23, 94, 32);
echo"<pre>";
print_r($Rakamlar);
echo"<pre>";

$DizininEnKucukDegeri = min($Rakamlar);
echo $DizininEnKucukDegeri . "<br>";


//max
$Rakamlar = max(5, 6, 9, 54, 23, 94, 32);
echo $Rakamlar . "<br>";


//lcg_value()
$SayiUret = lcg_value();
echo $SayiUret . "<br>";


//rand
$SayiUretBir = rand();
echo $SayiUretBir;


//getrandmax()
$SayiUretIki = getrandmax();
echo $SayiUretIki . "<br>";


//getrandmax()
$SayiUretIki = getrandmax();
echo $SayiUretIki . "<br>";


//mt_rand()
$SayiUretUc = mt_rand();
echo $SayiUretUc . "<br>";


//mt_getrandmax()
$SayiUretDort = mt_getrandmax();
echo $SayiUretDort . "<br>";


//abs()
$Sayi = -5;
$SayiMutlak = abs($Sayi);
echo $SayiMutlak . "<br>";


//sqrt()
$Sayi = 9;
$Karekok  = sqrt($Sayi);
echo $Karekok . "<br>";


//pow()
$SayiUssu = pow(5, 4);
echo $SayiUssu . "<br>";


//fmod()
$Sayi1 = 5;
$Sayi2 = 8;
$Modulus = fmod($Sayi1, $Sayi2);
echo $Modulus . "<br>";


//intdiv()
$Sayi1 = 146;
$Sayi2 = 2;
$Sonuc = intdiv($Sayi1, $Sayi2);
echo $Sonuc . "<br>";


//hypot()
$XKenarUzunluğu = 4;
$XKenarUzunluğu = 5;
$Hesapla = hypot($XKenarUzunluğu,$XKenarUzunluğu);
echo $Hesapla . "<br>";
?>
