<?php

//M_SQRT1_2, M_SQRT2, M_SQRT3
$DegerBir = M_SQRT1_2;
$DegerIki = M_SQRT2;
$DegerUc = M_SQRT3;
echo $DegerBir . "<br>";
echo $DegerIki . "<br>";
echo $DegerUc . "<br>";


//M_LN2, M_LN10
$DegerBir = M_LN2;
$DegerIki = M_LN10;
echo $DegerBir . "<br>";
echo $DegerIki . "<br>";


//log
$Sayi = 8;
$Sonuc = log( $Sayi );
echo $Sonuc . "<br>";


//log10
$Sayi = 8;
$Sonuc = log10( $Sayi );
echo $Sonuc . "<br>";


//pi(), M_PI
$PiSayisiA = pi();
$PiSayisiB = M_PI;
echo $PiSayisiA . "<br>";
echo $PiSayisiB . "<br>";



// 1/pi()
$Deger = 1;
$PIDeger = pi();
$Hesapla = $Deger/$PIDeger;
echo $Hesapla . "<br>";
$Hesapla2 = 1/pi();
echo $Hesapla2 . "<br>";


//M_1_PI
$Deger = M_1_PI;
echo $Deger . "<br>";


//M_2_PI;
$Deger = M_2_PI;
echo $Deger . "<br>";


//M_PI_2;
$Deger = M_PI_2;
echo $Deger . "<br>";


//M_PI_4;
$Deger = M_PI_4;
echo $Deger . "<br>";


//M_SQRTPI
$Islem = M_SQRTPI;
echo $Islem. "<br>";


//M_2_SQRTPI
$Islem = M_2_SQRTPI;
echo $Islem. "<br>";


//M_LNPI;
$Deger = M_LNPI;
echo $Deger . "<br>";


//M_E, M_EULER
$DegerBir = M_E;
$DegerIki = M_EULER;
echo $DegerBir . "<br>";
echo $DegerIki . "<br>";


//M_LOG2E, M_LOG10E
$DegerBir = M_LOG2E;
$DegerIki = M_LOG10E;
echo $DegerBir . "<br>";
echo $DegerIki . "<br>";


//exp
$UssuDegeri = 5;
$Hesapla = exp($UssuDegeri);
echo $UssuDegeri . "<br>" .  $Hesapla;


//expm1
$UssuDegeri = 5;
$Sonuc = expm1($UssuDegeri);
echo $UssuDegeri . "<br>" .  $Sonuc;

?>