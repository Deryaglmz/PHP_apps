<?php

//rad2deg
$Deger = 1.5;
$Sonuc = rad2deg($Deger);
echo $Sonuc . "<br>";


//deg2rad
$Deger = 180;
$Sonuc = deg2rad($Deger);
echo $Sonuc . "<br>";


//sin
$Deger = 8;
$Sonuc = sin($Deger);
echo $Sonuc . "<br>";


//sinh
$Deger = 8;
$Sonuc = sinh($Deger);
echo $Sonuc . "<br>";


//asin
$Deger = 0.2;
$Sonuc = asin($Deger);
echo $Sonuc . "<br>";


//asinh
$Deger = 4.25;
$Sonuc = asinh($Deger);
echo $Sonuc . "<br>";


//cos
$Deger = 5;
$Sonuc = cos($Deger);
echo $Sonuc . "<br>";


//acos
$Deger = 0.25;
$Sonuc = acos($Deger);
echo $Sonuc . "<br>";


//cosh
$Deger = 5;
$Sonuc = cosh($Deger);
echo $Sonuc . "<br>";


//acosh
$Deger = 5;
$Sonuc = acosh($Deger);
echo $Sonuc . "<br>";


//tan
$Deger = 5;
$Sonuc = tan($Deger);
echo $Sonuc . "<br>";


//tanh
$Deger = 5;
$Sonuc = tanh($Deger);
echo $Sonuc . "<br>";


//atan
$Deger = 15;
$Sonuc = atan($Deger);
echo $Sonuc . "<br>";


//atanh
$Deger = 0.3;
$Sonuc = atanh($Deger);
echo $Sonuc . "<br>";


//atan2
$Deger1 = 20;
$Deger2 = 10;
$Sonuc = atan2($Deger1, $Deger2);
echo $Sonuc . "<br>";


//bindec
$Sayi = 100100001;
$Donustur = bindec($Sayi);
echo $Donustur . "<br>";


//octdec
$Sayi = 221;
$Donustur = octdec($Sayi);
echo $Donustur . "<br>";


//hexdec
$Sayi = 91;
$Donustur = hexdec($Sayi);
echo $Donustur . "<br>";


//decbin
$Sayi = 145;
$Donustur = decbin($Sayi);
echo $Donustur . "<br>";


//decbin , decbin, dechex
$Sayi = 1453;
$BinaryDonustur = decbin($Sayi);
$OctalDonustur = decbin($Sayi);
$HexadecimalDonustur = dechex($Sayi);
echo $BinaryDonustur . "<br>";
echo $OctalDonustur . "<br>";
echo $HexadecimalDonustur . "<br>";



//base_convert
$Sayi = 145;
$BinaryDonustur = base_convert($Sayi, 10, 2);
$OctalDonustur = base_convert($Sayi, 10, 8);
$HexadecimalDonustur = base_convert($Sayi, 10, 16);
echo $BinaryDonustur . "<br>";
echo $OctalDonustur . "<br>";
echo $HexadecimalDonustur . "<br>";


//M_SQRT1_2, M_SQRT2, M_SQRT3
$DegerBir = M_SQRT1_2;
$DegerIki = M_SQRT2;
$DegerUc = M_SQRT3;
echo $DegerBir . "<br>";
echo $DegerIki . "<br>";
echo $DegerUc . "<br>";




?>