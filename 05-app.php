<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
<?php
    $Deger = "PHP dersleri";
    echo $Deger;     echo"<br />";

    $_Deger = "PHP";
    echo $_Deger;    echo"<br />";

    $D1eger = "BTK";
    echo $D1eger;    echo"<br />";

    $Deger1 = "Dersler";
    echo $Deger1;    echo"<br />";
    $Deger = "PHP";
    $deger = "php";
    echo $Deger;     echo"<br />";
    $Deger1 = 1;
    $Deger2 = 2;
    echo $Deger1 + $Deger2;   echo"<br />";

    $Deger = 5;
    echo $Deger;   echo"<br />";

    $ornek = "Dersler";
    $Deger1 = $ornek;
    echo $ornek;  echo"<br />";

    $ornek = "BTK";
    $Deger1 = "Yeni {$ornek} Dersleri";
    echo $Deger1;    echo"<br />";
    
    $ad = "Derya";
    $soyad = "Gülmez";
    $Deger = "Merhaba {$ad} {$soyad} nasılsın ? ";
    echo $Deger;   echo"<br />";

    $Deger1 = "Derya";
    $Deger2 = $Deger1;
    echo $Deger1;
    echo"<br />";
    echo $Deger2;
    echo"<br />";
    $Deger1 = "Pelin";
    echo $Deger1;
    echo"<br />";
    echo $Deger2;
    echo"<br />";

    //referansa bağlı değer atama

    $Deger1 = "Derya";
    $Deger2 = &$Deger1;
    echo $Deger1;
    echo"<br />";
    echo $Deger2;
    echo"<br />";
    $Deger1 = "Pelin";
    echo $Deger1;
    echo"<br />";
    echo $Deger2;
    echo"<br />";

    $Deger = "Derya";
    $$Deger ="Pelin";
    echo $Deger;
    echo "<br />";
    echo $$Deger;

    echo "<br />";

    $Deger = "Derya";
    $$Deger ="Pelin";
    echo $Deger;
    echo "<br />";
    echo $Derya;

    $ad = "Derya";
    $soyad = "Gülmez";
    $Deger = "{$ad} {$soyad} ";
    echo $Deger;   echo"<br />";

    $ad = "Derya";
    $soyad = "Gülmez";
    $Deger = $ad . " " . $soyad;
    echo $Deger;   echo"<br />";

    $ad = "Derya";
    $soyad = "Gülmez";
    $yas = 20;
    $Deger = $ad . " " . $soyad . "<br />yasım : " . $yas;
    echo $Deger;  echo"<br />";

    $IsimSoyisim = "Derya Gulmez";
    echo $IsimSoyisim[0] . "<br />";
    echo $IsimSoyisim[1] . "<br />";
    echo $IsimSoyisim[2] . "<br />";
    echo $IsimSoyisim[3] . "<br />";
    echo $IsimSoyisim[4] . "<br />";
    echo $IsimSoyisim[5] . "<br />";
    echo $IsimSoyisim[6] . "<br />";
    echo $IsimSoyisim[7] . "<br />";
    echo $IsimSoyisim[8] . "<br />";
    echo $IsimSoyisim[9] . "<br />";
    echo $IsimSoyisim[10] . "<br />";
    echo $IsimSoyisim[11] . "<br />";
?>
</body>
</html>